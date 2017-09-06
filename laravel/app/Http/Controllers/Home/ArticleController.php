<?php


namespace App\Http\Controllers\Home;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session,Redirect;
use App\Models\User;
use App\Models\Article;
use App\Models\Article_tags;
use App\Models\Article_comment;
use App\Models\Article_collections;
use App\Models\Article_replies;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class ArticleController extends Controller
{
    public function article_index()
    {
        $article = new Article;
        $articles = $article->all();

        // $article_chunk = $articles->chunk(5)->toArray();
        
        //获取标签信息
        $tags_arr = [];
        //标签风向标 按手记篇数排序
        $tags_order = Article_tags::orderBy('tag_num','desc')->get()->toArray();
        //所有标签
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
        
        // var_dump($articles);return;
        return view('Home.article.article_index',[
            'articles' => $articles,
            'tags' => $tags_arr,
        ]);
    }


    /**
     * 手记文章添加
     */
    public function article_add()
    {
        //验证登录状态
        $check = $this ->check_login();
        if ($check == 3) {
            return Redirect::to('/login_index');
        }

        $tags = Article_tags::all();

        return view('Home.article.article_add',['tags'=>$tags]);
    }


    public function article_insert(Request $request)
    {
        //验证登录状态
        $check = $this ->check_login();
        if ($check == 3) {
            return Redirect::to('/login_index');
        }
        $article = new Article;
        $article->title = $request->input('title');
        $tags = $request->input('tags');
        $file = $request->file('file');

        if(!is_null($request->input('original'))){
            $article->is_original = 1;
        }
        //图片上传
        if (isset($file)) {
            if ($file->isValid()) {
                $dir = './uploads';
                $filename = time() . mt_rand(1000,9999) . '.' . $file->getClientOriginalExtension();

                $file->move($dir, $filename);
                
                $article->img_path = $filename;
            }
        }
        $article->tag_id = $tags;
        $article->content = $request->input('content');

        $article->user_id = \Session::get('login_id');
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
        $article = new Article;
        $comment = new Article_comment;

        $user = new User;
        $collection = new Article_collections;
        //获取文章详情
        $info = $article->where('id', $id)->first();
        $userinfo = $user->where('id', $info['user_id'])->first()->toArray();
        $info['userinfo'] = $userinfo;
        //获取作者热门文章
        $hot_articles = $article->where('user_id', $info['user_id'])->orderBy('collection_num', 'desc')->limit(3)->get();

        $info['article_num'] = $article->where('user_id', $info['user_id'])->count();

        //处理标签信息
        $tags = explode(',', $info['tag_id']);
        $tags_name = Article_tags::whereIn('id', $tags)->lists('tag_name', 'id');

        //获取评论信息
        $comments_arr = [];
        $comments = $comment->where('art_id',$id)->get();

        $comments_arr = $comments->toArray();
        if (!empty($comments_arr)) {
            $c_id = array_column($comments_arr, 'id');
            //获取评论人ID
            $comment_user_id = array_column($comments_arr, 'user_id');
            
            $comments_arr = array_combine($c_id, $comments_arr);
            // dd($comments_arr);return;
            //获取回复内容
            $replies = Article_replies::whereIn('comment_id', $c_id)->get();

            $replies_arr = $replies->toArray();

            $reply_from_user_id = array_column($replies_arr, 'from_user_id');

            $reply_to_user_id = array_column($replies_arr, 'to_user_id');

            $user_id = $this->unique(array_merge($comment_user_id, $reply_from_user_id, $reply_to_user_id));
            
            //获取评论人信息
            $users = $user->whereIn('id', $user_id)->lists('email','id')->toArray();

            foreach ($replies_arr as $key => $value) {
                $replies_arr[$key]['from_user'] = $users[$replies_arr[$key]['from_user_id']];
                $replies_arr[$key]['to_user'] = $users[$replies_arr[$key]['to_user_id']];
            }
            foreach ($replies_arr as $key => $value) {
                foreach ($comments_arr as $k => $v) {
                    if ($value['comment_id'] == $k) {
                        $comments_arr[$k]['reply'][] = $value;
                    }
                }
            }

            foreach ($comments_arr as $key => $value) {
                $comments_arr[$key]['userinfo'] = $users[$value['user_id']];
            }
        }
        return view('Home.article.article_info',[
            'info' => $info,
            'tags' => $tags_name,
            'comments' => $comments_arr,
            'hot' => $hot_articles,
        ]);
    }

    /**
     * 手记评论添加
     */
    
    public function comment_add(Request $request)
    {
        // return $request->all();
        //验证登录状态
        $check =  $this->check_login();
        if ($check == 3) {
            return $check;
        }
        $comment = new Article_comment;
        $article = new Article;

        $comment->user_id = \Session::get('login_id');
        $comment->art_id = $request->art_id;
        $comment->content = $request->content;
        $comment->add_time = time();

        $res = $comment->save();
        if($res) {
            $article->where('id', $request->art_id)->increment('comment_num');
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

        // return $request->all();\
        //验证登录状态
        $check = $this ->check_login();
        if ($check == 3) {
            return $check;
        }
        $reply = new Article_replies;
        if (\Session::get('login_id') == $request->from_user_id) {
            return 2;
        }
        $reply->comment_id = $request->comment_id;
        $reply->from_user_id = \Session::get('login_id');
        $reply->to_user_id = $request->from_user_id;
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

    /**
     * 文章推荐
     * @return int  0推荐失败 1成功推荐 2不能重复推荐 3未登录
     */
    public function collection_add(Request $res)
    {
        $check = $this ->check_login();
        if ($check == 3) {
            return $check;
        }
        $collection = new Article_collections;
        $article = new Article;
        $id = $res->id;
        $user_id = \Session::get('login_id');

        $info = $collection->where('user_id', '=', $user_id)
                    ->where('article_id', '=', $id)
                    ->first();
        if (empty($info)) {
            $result = $collection->insert(['user_id' => $user_id, 'article_id' => $id]);
            if ($result) {
                $article->where('id', '=', $id)->increment('collection_num');
                return 1;
            } else {
                return 0;
            }
        }
        return 2;


    }


    public function tag_article($tag_id)
    {
        return view('Home.article.');
    }

    /**
     * 去重方法
     * @param  [array] $arr 
     * @return [array] 
     */
    protected function unique($arr)
    {
        $arr = array_flip($arr);
        return array_flip($arr);
    }

    /**
     * 验证是否登录
     * @return url
     */
    protected function check_login()
    {
        $user_id = \Session::get('login_id');
        
        if (empty($user_id)) {
           return 3;
        }
        
    }
}