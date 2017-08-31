<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin_index','Admin_courseController@index');
Route::get('/admin_cate','Admin_courseController@cate');
Route::post('/cate_add','Admin_courseController@cate_add');
Route::post('/some','Admin_courseController@some');
Route::get('/admin_mold','Admin_courseController@mold');
Route::post('/mold_add','Admin_courseController@mold_add');
 //这个Home为命名空间
Route::group(['namespace' => 'Home'], function(){
                   //这个为前缀     如果加上a    则效果是  a/index_index  不加便是index_index
    Route::group(['prefix' => ''], function(){
                   //请求地址   单词首字母大写如下       uses代表使用某个控制器下的每个方法
        Route::any('Index_Index', ['uses'=>'IndexController@index']);
        Route::any('Charge_Index', ['uses'=>'ChargeController@index']);
        Route::get('article_index','ArticleController@article_index');
    		Route::get('article_add','ArticleController@article_add');
    		Route::post('article_insert','ArticleController@article_insert');
    		Route::get('article_info/{id}','ArticleController@article_info');
        Route::get("wenda_index",['uses'=>'WendaController@Index']);
        Route::get("issue",['uses'=>'WendaController@Issue']);
        Route::get("question",['uses'=>'WendaController@Question']);
        Route::any("question_add",['uses'=>'WendaController@Question_Add']);
        Route::get("question_show",['uses'=>'WendaController@Question_Show']);
        Route::get("question_one/{id}",['uses'=>'WendaController@Question_One']);
        Route::any("answer_add",['uses'=>'WendaController@Answer_Add']);

        //实战
        Route::any('index_index', ['uses'=>'IndexController@index']);
        Route::any('charge_index', ['uses'=>'ChargeController@index']);
        // 购物车  订单
        Route::any('cart_index',['uses'=>'CartController@index']);
        Route::any('confirm_index',['uses'=>'ConfirmController@index']);
        Route::any('indent_index',['uses'=>'IndentController@index']);
        Route::any('buy_index',['uses'=>'BuyController@index']);
    });
});


//后台
Route::group(['namespace' => 'Admin'], function(){
    Route::group(['prefix' => ''], function(){
        Route::any('admin_index', ['uses'=>'AdminController@index']);
        Route::any('admin_charge_index', ['uses'=>'Admin_chargeController@index']);
        Route::any('admin_charge_type', ['uses'=>'Admin_chargeController@type']);
        Route::any('admin_charge_direction', ['uses'=>'Admin_chargeController@direction']);


    });
});

