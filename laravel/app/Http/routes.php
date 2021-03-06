<?php
//使用laravel里面验证码包
use Gregwar\Captcha\CaptchaBuilder;
//使用session前必须引入session类文件
use Symfony\Component\HttpFoundation\Session\Session;
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
        Route::get('article_index/{page?}','ArticleController@article_index');
        //手记模块
        Route::get('article_add','ArticleController@article_add');
        Route::post('article_insert','ArticleController@article_insert');
        Route::get('article_info/{id}','ArticleController@article_info');
        Route::get('article_comment_add','ArticleController@comment_add');
        Route::get('article_reply_add','ArticleController@reply_add');
        Route::get('article_tag/{tag_id}-{page?}','ArticleController@tag_article');
        Route::get('article_collection','ArticleController@collection_add');


        //猿问模块
        Route::get("wenda_index",['uses'=>'WendaController@Index']);
        Route::get("issue",['uses'=>'WendaController@Issue']);
        Route::get("question",['uses'=>'WendaController@Question']);
        Route::any("question_add",['uses'=>'WendaController@Question_Add']);
        Route::get("question_show",['uses'=>'WendaController@Question_Show']);
        Route::get("question_one/{id}",['uses'=>'WendaController@Question_One']);
        Route::any("answer_add",['uses'=>'WendaController@Answer_Add']);
        Route::any("reply",['uses'=>'WendaController@Reply']);
        Route::any("answer_zan",['uses'=>'WendaController@Answer_Zan']);
        Route::any("answer_fan",['uses'=>'WendaController@Answer_Fan']);

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
        //清楚session
        Route::get('login_clearSession','LoginController@clearSession');

        //个人中心
        Route::get('user_index/{login_id}','UserController@index');


        // Route::get('index','LoginController@qqlogin');
        //课程
        Route::get('/course_index',['uses'=>'CourseController@course_index']);
        Route::get('/course_learn/{id?}',['uses'=>'CourseController@course_learn']);
        Route::post('/course_ajax',['uses'=>'CourseController@course_ajax']);

        Route::get('/course_bo/{id?}',['uses'=>'CourseController@course_bo']);
        Route::get('/course_so/{id?}',['uses'=>'CourseController@course_so']);
        Route::get('/course_sofen/{id?}',['uses'=>'CourseController@course_sofen']);
        Route::get('/course_sole/{id?}',['uses'=>'CourseController@course_sole']);
        Route::post('/course_fa',['uses'=>'CourseController@course_fa']);
        Route::post('/course_zfa',['uses'=>'CourseController@course_zfa']);



         //积分商城前台路由设置
        Route::any('integral_index', 'IntegralController@integral_index');
        Route::any('fictitious', 'IntegralController@fictitious');
        Route::any('entity', 'IntegralController@entity');
        Route::any('details/{id}', 'IntegralController@details');
        Route::any('exchange/{id}', 'IntegralController@exchange');
        Route::any('exchange_do/{id}', 'IntegralController@exchange_do');
        Route::any('order', 'IntegralController@order');

        //首页订单中心
        Route::any('order_index', 'OrderController@order_index');
        //优惠券
        Route::any('coupon', 'OrderController@coupon');
        //消费记录
        Route::any('record', 'OrderController@record');
        Route::any('show_coupon', 'OrderController@show_coupon');
        Route::any('coupon_detail/{id}', 'OrderController@ccoupon_detail');
        Route::any('detail', 'OrderController@detail');
        //个人的学习记录
    Route::any('mycourse_index', 'MycourseController@mycourse_index');
    });
});


//后台
Route::group(['namespace' => 'Admin'], function(){
   Route::group(['middleware' => ['web']], function(){  
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
    //积分商城后台路由设置
      Route::any('admin_add', 'Admin_integralController@admin_add');
      Route::any('add_do', 'Admin_integralController@add_do');
      Route::any('show', 'Admin_integralController@show');
      Route::any('del', 'Admin_integralController@del');
      Route::any('up', 'Admin_integralController@up');
      Route::any('update', 'Admin_integralController@update');
<<<<<<< HEAD

     //后台登录
=======
    //后台登录
>>>>>>> 2017-9-2-integrar
      Route::any('admin_index', 'Admin_loginController@admin_index');
      Route::any('login_do', 'Admin_loginController@login_do');
            //定义一个验证码的路由，用验证码的时候直接调用这个方法就行
      Route::get('captcha',function(Request $res){
        $builder = new CaptchaBuilder;
        $builder->build();
        $captch=$builder->getPhrase();
        $session = new Session;
        $session->set("session",$captch);

        return response($builder->output())->header('Content-type','image/jpeg');
         
      });
      //手记文章后台管理
      Route::get('article_manage','Admin_articleController@article_list');
      Route::get('article_check','Admin_articleController@article_check');
      Route::get('article_del','Admin_articleController@article_del');
    
      //猿问
      Route::any('shenhe',['uses' => 'Admin_wendaController@Shehe']);
      Route::any('examine',['uses' => 'Admin_wendaController@Examine']);
      Route::any('delete',['uses' => 'Admin_wendaController@Delete']);
    });
});
});
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
   
});


