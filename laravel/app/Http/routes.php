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
    Route::group(['middleware' => ['web']], function(){
                   //请求地址   单词首字母大写如下       uses代表使用某个控制器下的每个方法
        Route::any('Index_Index', ['uses'=>'IndexController@index']);
        Route::any('Charge_Index', ['uses'=>'ChargeController@index']);
        Route::get('article_index','ArticleController@article_index');
        //手记模块
		Route::get('article_add','ArticleController@article_add');
		Route::post('article_insert','ArticleController@article_insert');
		Route::get('article_info/{id}','ArticleController@article_info');
        //猿问模块
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
        //登录
        Route::get('/login_index','LoginController@index');
        ROUTE::post('/login_handle','LoginController@handle');
        Route::get('/login_pc','LoginController@pc');
        Route::any('login_register','LoginController@register');
        Route::any('login_Code','LoginController@code');
        Route::post('/login_registerHandle','LoginController@registerHandle');
        Route::get('/login_qqlogin','LoginController@qqlogin');
        Route::get('login_qqlogin','LoginController@qq');
        Route::get('login_qq','LoginController@qqlogin');
        // Route::get('index','LoginController@qqlogin');
        //课程
        Route::get('/course_index',['uses'=>'CourseController@course_index']);
        Route::get('/course_learn/{id?}',['uses'=>'CourseController@course_learn']);
        Route::post('/course_ajax',['uses'=>'CourseController@course_ajax']);
    });
});


//后台
Route::group(['namespace' => 'Admin'], function(){
    Route::group(['prefix' => ''], function(){
        Route::any('admin_index', ['uses'=>'AdminController@index']);
        Route::any('admin_charge_index', ['uses'=>'Admin_chargeController@index']);
        Route::any('admin_charge_type', ['uses'=>'Admin_chargeController@type']);
        Route::any('admin_charge_direction', ['uses'=>'Admin_chargeController@direction']);
        //课程
      //  Route::get('/admin_index',['uses'=>'Admin_courseController@index']);
        Route::get('/admin_cate',['uses'=>'Admin_courseController@cate']);
        Route::post('/cate_add',['uses'=>'Admin_courseController@cate_add']);
        Route::post('/some',['uses'=>'Admin_courseController@some']);
        Route::get('/admin_mold',['uses'=>'Admin_courseController@mold']);
        Route::post('/mold_add',['uses'=>'Admin_courseController@mold_add']);
        Route::get('/mold_course',['uses'=>'Admin_courseController@mold_course']);
        Route::post('/mold_uplod',['uses'=>'Admin_courseController@mold_uplod']);
        Route::get('/mold_chapter',['uses'=>'Admin_courseController@mold_chapter']);
        Route::post('/chapter_add',['uses'=>'Admin_courseController@chapter_add']);
        Route::get('/mold_void',['uses'=>'Admin_courseController@mold_void']);
        Route::post('/mold_selectcha',['uses'=>'Admin_courseController@mold_selectcha']);
        Route::post('/add_void',['uses'=>'Admin_courseController@add_void']);
        
    });
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});


