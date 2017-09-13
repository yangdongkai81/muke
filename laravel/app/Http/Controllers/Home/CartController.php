<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CartController extends Controller
{
    public function Index(){
    	$cart = DB::table('shoppingcart')->get();
        return view('Home/Cart/index',['cart'=>$cart]);
    }

    /*
     * 购买
     * */
    public function Add($id){

    }
    /*
     * 购物车  删除
     * */
     function del(Request $request){
        $id = $request->id;
        $res = DB::table('shoppingcart')->where('sid',$id)->delete();

         return $res ? 1 : 2;
     }
}