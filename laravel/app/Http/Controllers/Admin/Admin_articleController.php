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

    	return $result ? 1 : 0;
    }

    /**
     * 手记置顶
     * @return [int]       1 设置成功  0 设置失败
     */
    public function article_top(Request $res)
    {
        $id = $res->id;

        $article = new Article;

        $old_id = $article->where('status', 3)->lists('id');

        if ($id == $old_id) {
            return 2;
        }
        if ($old_id) {
            //事务处理
            DB::beginTransaction();
            try{
                $article->where('id', $old_id)->update(['status'=>1]);
                $article->where('id', $id)->update(['status'=>3]);
                DB::commit();

                return 1;
            }catch (\Exception $e){
                //回滚
                DB::rollBack();

                return 0;
            }
        } else {
            $result = $article->where('id', $id)->update(['status'=>3]);
        }

        return $result ? 1 : 0;
    }

    /**
     * 手记推荐
     * @return [int]    1 设置成功  0 设置失败
     */
    public function recommend(Request $res)
    {
        $id = $res->id;

        $article = new Article;

        
    }
}
