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
//        print_r($name);die;
        foreach ($name['sid'] as $k=>$v){
            $arr[$k]['sid'] = $v;
            $arr[$k]['coursename'] = $name['coursename'][$k];
            $arr[$k]['price'] = $name['price'][$k];
            $arr[$k]['img'] = $name['img'][$k];
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
                'total' => $order['price'],
                'img' => $order['img'],
            ],
        ]);
        if($info){
            $res = DB::table('orderinfo')->get();
            $price = DB::table('orderinfo')->sum('total');
            $img = DB::table('orderinfo')->where('img', $order['img'])->value('img');
            $pid = DB::table('orderinfo')->where('pid', $order['sid'])->value('pid');

            return view('Home/Confirm/order',['res'=>$res,'total'=>$price,'pid'=>$pid,'img'=>$img]);
        }
    }
    public function Pay(Request $request){
        $id = $request->id;
        $res = DB::table('orderinfo')->where('pid',$id)->delete();
        $pid = DB::table('shoppingcart')->value('pid');
        if($res){
            $res = DB::table('bought_course')->insert([
                ['pid' => $pid,
                    'uid'=>1,
                ],
            ]);
            if($res){
                $res = DB::table('shoppingcart')->where('sid',$id)->delete();
            }
        }

        return $res ? 1 : 2;
    }
}