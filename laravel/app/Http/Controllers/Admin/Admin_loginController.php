<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
//使用session前必须引入session类文件
use Symfony\Component\HttpFoundation\Session\Session;
use Gregwar\Captcha\CaptchaBuilder;


class Admin_loginController extends Controller
{  
//后台登录页面
   public function admin_index()
   {
      return view('Admin.admin_login.index');
   }
   public function login_do(Request $res)
   {
   		
   		$name=$res->name;
   		$password=$res->password;
   		$code=$res->code;
   		$data=DB::table('admin_login')->where('name',$name)->where('pwd',$password)->first();
   		if ($data) {
   			$session = new Session;
   			$code1 = $session->get("session");
   			if ($code!=$code1) {
   				echo "验证码错误";
   			}else {
   			 return view('Admin.admin_course.index');
   			}
   		}else
   		{
   			echo "用户名或者密码错误";
   		}
   }
  
  

}