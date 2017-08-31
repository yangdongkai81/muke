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
		return view('index/index');
	}
}