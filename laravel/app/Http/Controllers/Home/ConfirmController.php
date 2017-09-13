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

class ConfirmController extends Controller
{
    public function Index($text){
        $data = explode(",",$text);
        $res = DB::table('shoppingcart')->whereIn('sid',$data)->get();
        $count = DB::table('shoppingcart')->whereIn('sid',$data)->count();
        $price = DB::table('shoppingcart')->whereIn('sid',$data)->sum('price');

        return view('Home/Confirm/index',['cart'=>$res,'price'=>$price,'count'=>$count]);
    }
    public function Order(){
        $name = Input::all();
        $arr = array();
        foreach ($name['sid'] as $k=>$v){
            $arr[$k]['sid'] = $v;
            $arr[$k]['coursename'] = $name['coursename'][$k];
            $arr[$k]['price'] = $name['price'][$k];
            foreach ($arr as $val){
                $order = $val;
            }
        }
        $number = date('Ymd').rand(1000,9999);
        $time = date('Y-m-d H:i:s');
        $info = DB::table('orderinfo')->insert([
            ['oid' => $number,
                'orderdate' => $time,
                'pid' => $order['sid'],
                'coursename' => $order['coursename'],
                'total' => $order['price']
            ],
        ]);
        if($info){
            $res = DB::table('orderinfo')->get();
            $price = DB::table('orderinfo')->sum('total');
            $pid = DB::table('orderinfo')->where('pid', $order['sid'])->value('pid');

            return view('Home/Confirm/order',['res'=>$res,'total'=>$price,'pid'=>$pid]);
        }
    }
    public function Pay(Request $request){
        $id = $request->id;
        $res = DB::table('orderinfo')->where('pid',$id)->delete();
        if($res){
            $res = DB::table('shoppingcart')->where('sid',$id)->delete();
        }

        return $res ? 1 : 2;
    }
}