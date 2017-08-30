<?php

namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Session,Redirect;
use App\Models\Article_tags;
use App\Models\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function article_index()
    {
    	$article = new Article;

    	$articles = $article->all();

    	return view('article.article_index',['articles'=>$articles]);
    }

    /**
     * 手记文章添加
     */
    public function article_add()
    {
    	$tags = Article_tags::all();

    	return view('article.article_add',['tags'=>$tags]);
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
    	$article = new Article;
    	$info = $article->where('id',$id)->first();
    	$tags = explode(',',$info['tag_id']);
    	$tags_name = Article_tags::whereIn('id',$tags)->lists('tag_name', 'id');
    	
    	return view('article.article_info',['info'=>$info,'tags'=>$tags_name]);
    }
}
