<?php
namespace App\Http\Controllers\Home;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Session;
use Laravel\Socialite\Facades\Socialite;
// use Socialize;
class UserController extends Controller
{
	public function index(Request $res)
	{
		echo $res->login_id;
	}

}