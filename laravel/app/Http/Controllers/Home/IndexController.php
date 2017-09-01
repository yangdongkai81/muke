<?php
namespace App\Http\Controllers\Home;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Session;
Use Laravel\Socialite\Facades\Socialite;
// use Socialize;
class IndexController extends Controller
{
	public function index()
	{
<<<<<<< HEAD
		if(Session::get('login_id')){
			$login_id = Session::get('login_id');
			//通过session获取login_id查users表所对应的用户信息
			$users = DB::table('users')->where('id','=',$login_id)->first();
			return view('index/index')->with([
				'id'=>$login_id,
				'email'=>$users->email,
				]);
		}else{
			return view('index/index')->with([
				'id'=>0,
				]);
		}
=======
		return view('index/index');
>>>>>>> b1c5c8df491d197e2ebe8c93de103ca3a83ca3af
	}
}