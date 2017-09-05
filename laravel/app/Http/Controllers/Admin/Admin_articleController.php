<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use DB;
use App\Models\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Admin_articleController extends Controller
{
	/**
	 * 后台手记列表
	 */
    public function article_list()
    {
    	$article = new Article;

    	// $articles = $article->leftJoin('users','article.user_id','=','users.id')->get();
    	$articles = $article->all()->toArray();

    	$user_id = array_unique(array_column($articles, 'user_id'));

    	$users = DB::table('users')->whereIn('id', $user_id)->get();
    	
    	$users_arr = array_combine($user_id, $users);
    	
    	foreach ($articles as $key => $value) {
    		$articles[$key]['userinfo'] = $users_arr[$articles[$key]['user_id']];
    	}
    	
    	return view('Admin.admin_article.list',[
            'articles' => $articles,
        ]);
    }
    /**
     * 手记审核
     * @return [int] 1 审核通过 2 审核不通过 0 审核失败
     */
    public function article_check(Request $res)
    {
    	$article = new Article;

    	$id = $res->id;
    	
    	$art_data = $article->where('id', '=', $id)->first();

    	if($art_data['status'] == 0){
    		$res = $article->where('id', '=', $id)->update(['status'=>1]);
    		return $res;
    	}
    	return 0;
    }

    /**
     * 手记删除
     * @param  Request $res 手记ID
     * @return [int]       1 删除完成  0 删除失败
     */
    public function article_del(Request $res)
    {
    	$id = $res->id;

    	$article = new Article;

    	$result = $article->where('id', '=', $id)->delete();

    	if ($result) {
    		return 1;
    	} else {
    		return 0;
    	}
    }
}
