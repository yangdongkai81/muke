<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Admin_articleController extends Controller
{
    public function article_list()
    {
    	$article = new Article;

    	$articles = $article->leftJoin('users','article.user_id','=','users.id')->get();
    	// echo '<pre>';
    	// var_dump($articles);return ;
    	return view('Admin.admin_article.list',['articles'=>$articles]);
    }
}
