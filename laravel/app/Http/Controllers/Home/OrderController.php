<?php
namespace App\Http\Controllers\Home;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use Session,Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
//查看个人订单方法
    public function order_index()
    {
    	header("content-type:text/html;charset=utf-8");
    	$result=DB::table('orderinfo')->get();
    	//var_dump($result);die;
    	return view('Home.order.order_index',[
            'data'=>$result
            ]);
    }
//查询优惠券方法
    public function coupon()
    {
    	header("content-type:text/html;charset=utf-8");
    	$result=DB::table('coupon')->get();
    	// var_dump($result);die;
    	return view('Home.order.coupon',[
            'data'=>$result
            ]);
    }
//个人消费记录
    public function record()
    {
    	header("content-type:text/html;charset=utf-8");
    	$result=DB::table('orderinfo')->get();
    	// var_dump($result);die;
    	return view('Home.order.record',[
            'data'=>$result
            ]);
    }
//优惠券抢购页面
    public function show_coupon()
    {
    	// echo "111";die;
    	header("content-type:text/html;charset=utf-8");
    	$result=DB::table('show_coupon')->get();
    	// var_dump($result);die;
    	return view('Home.order.show_coupon',[
            'data'=>$result
            ]);
    }
//优惠券抢购详情页面
    public function ccoupon_detail(Request $res)
    {
    	header("content-type:text/html;charset=utf-8");
    	// echo "111";
	    $id=$res->id;
	    $result=DB::table('show_coupon')->where('id',$id)->first();
	    // var_dump($result);die;
        return view('Home.order.detail',[
            'data'=>$result]
            );
    }
//处理抢购页面传过来的数据方法
    public function detail(Request $res)
    {
        
  #接收商品id和商品的SKU
    	$id=$_GET['id'];
        $num=$_GET['num'];
        $goods=Redis::lpop('seckill'); 
        if ($goods) {
          $num--;
          $result=DB::table('show_coupon')->where('id',$id)->update(['num' => $num]);
          return $result ? $num : 66;
        }else{
          return 66;
        }
       
  #使用redis进行秒杀
        // 存1：
        //   for($i=1;$i<11;$i++) {
        //     Redis::lpush('seckill',$i);
        // }
        // 存2：
        // Redis::set('kill',10);
        // 取1  
        //  $goods=Redis::get('num');
        // 取2  
        
 
    }


}