<?php

namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Session,Redirect;
use App\Models\Article_tags;
use App\Models\Article;
<<<<<<< HEAD
=======
use App\Models\Article_comment;
use App\Models\Article_replies;
>>>>>>> b1c5c8df491d197e2ebe8c93de103ca3a83ca3af
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function article_index()
    {
    	$article = new Article;

    	$articles = $article->all();
<<<<<<< HEAD

    	return view('Home.article.article_index',['articles'=>$articles]);
=======
        
        //获取标签信息
        $tags_order = Article_tags::orderBy('tag_num','desc')->get()->toArray();
        $tags = Article_tags::all()->toArray();
        $count = count($tags);
        for ($i=0; $i < $count; $i++) {
            if($i < 9){
                $tags_arr['show'][] =  $tags[$i];
            } else {
                $tags_arr['hidden'][] = $tags[$i];
            }
            if ($i < 10) {
                $tags_arr['order'][] = $tags_order[$i];
            }
        }

    	return view('Home.article.article_index',[
            'articles' => $articles,
            'tags' => $tags_arr,
        ]);
>>>>>>> b1c5c8df491d197e2ebe8c93de103ca3a83ca3af
    }

    /**
     * 手记文章添加
     */
    public function article_add()
    {
    	$tags = Article_tags::all();

    	return view('Home.article.article_add',['tags'=>$tags]);
    }

    public function article_insert(Request $request)
    {
    	$article = new Article;
    	$article->title = $request->input('title');
    	$tags = $request->input('tags');
    	$file = $request->file('file');

    	if(!is_null($request->input('original'))){
    		$article->is_original = 1;
    	}
    	//图片上传
    	if ($file->isValid()) {
    		$dir = './uploads';
    		$filename = time() . mt_rand(1000,9999) . '.' . $file->getClientOriginalExtension();

    		$file->move($dir, $filename);

    		$article->img_path = $filename;
    	}
    	$article->tag_id = $tags;
    	$article->content = $request->input('content');
    	$article->user_id = 1;
    	$article->add_time = time();

    	//文章数据入库
    	$res = $article->save();
    	//处理标签数据 并修改标签表num字段
    	$tags_arr = explode(',', $tags);
    	foreach ($tags_arr as $key => $value) {
    		DB::table('article_tags')->where('id',$value)->increment('tag_num');
    	}
    	if ($res) {
    		return Redirect::to('article_index');
    	} else {
    		return '发布失败';
    	}
    }

    /**
     * 手记文章详情页
     */
    public function article_info($id)
    {
<<<<<<< HEAD
    	$article = new Article;
    	$info = $article->where('id',$id)->first();
    	$tags = explode(',',$info['tag_id']);
    	$tags_name = Article_tags::whereIn('id',$tags)->lists('tag_name', 'id');
    	
    	return view('Home.article.article_info',['info'=>$info,'tags'=>$tags_name]);
=======
        $article = new Article;
        $comment = new Article_comment;
        //获取文章详情
        $info = $article->where('id',$id)->first();
        //处理标签信息
        $tags = explode(',',$info['tag_id']);
        $tags_name = Article_tags::whereIn('id',$tags)->lists('tag_name', 'id');

        //获取评论信息
        $comments = $comment->where('art_id',$id)->get();
        $comments_arr = $comments->toArray();

        $c_id = array_column($comments_arr, 'id');
        $comments_arr = array_combine($c_id, $comments_arr);
        //获取回复内容
        $replies = Article_replies::whereIn('comment_id',$c_id)->get();
        $replies_arr = $replies->toArray();
        
        // dd($replies_arr); return ;
        foreach ($replies_arr as $key => $value) {
            foreach ($comments_arr as $k => $v) {
                if ($value['comment_id'] == $k) {
                    $comments_arr[$k]['reply'][] = $value;
                }
            }
        }
        
        return view('Home.article.article_info',[
            'info' => $info,
            'tags' => $tags_name,
            'comments' => $comments_arr,
        ]);
    }

    /**
     * 手记评论添加
     */
    
    public function comment_add(Request $request)
    {
        // return $request->all();
        $comment = new Article_comment;

        $comment->user_id = 1;
        $comment->art_id = $request->art_id;
        $comment->content = $request->content;
        $comment->add_time = time();

        $res = $comment->save();
        if($res) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * 手记评论回复内容添加
     */
    
    public function reply_add(Request $request)
    {
        // return $request->all();
        $reply = new Article_replies;

        $reply->comment_id = $request->comment_id;
        $reply->user_id = 1;
        $reply->reply_type = $request->reply_type;
        $reply->content = $request->content;
        $reply->add_time = time();

        $res = $reply->save();
        if($res) {
            return 1;
        } else {
            return 0;
        }
    }


    public function tag_article($tag_id)
    {
        return view('Home.article.');
>>>>>>> b1c5c8df491d197e2ebe8c93de103ca3a83ca3af
    }
}
