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
    /**
     * 查看个人订单方法
     * @return [type] [description]
     */
    public function order_index()
    {
    	header("content-type:text/html;charset=utf-8");
    	$result=DB::table('orderinfo')->get();

    	return view('Home.order.order_index',[
            'data'=>$result
            ]);
    }
    /**
     * 查询优惠券方法
     * @return [type] [description]
     */
    public function coupon()
    {
    	header("content-type:text/html;charset=utf-8");
    	$result=DB::table('coupon')->get();

    	return view('Home.order.coupon',[
            'data'=>$result
            ]);
    }
    /**
     * 个人消费记录
     * @return [type] [description]
     */
    public function record()
    {
    	header("content-type:text/html;charset=utf-8");
    	$result=DB::table('orderinfo')->get();

    	return view('Home.order.record',[
            'data'=>$result
            ]);
    }
    /**
     * 优惠券抢购页面
     * @return [type] [description]
     */
    public function show_coupon()
    {
    	header("content-type:text/html;charset=utf-8");
    	$result=DB::table('show_coupon')->get();

    	return view('Home.order.show_coupon',[
            'data'=>$result
            ]);
    }
    /**
     * 优惠券抢购详情页面
     * @return [type] [description]
     */
    public function ccoupon_detail(Request $res)
    {
    	header("content-type:text/html;charset=utf-8");
	    $id=$res->id;
	    $result=DB::table('show_coupon')->where('id',$id)->first();

        return view('Home.order.detail',[
            'data'=>$result
            ]);
    }
    /**
     * 处理抢购页面传过来的数据方法
     * @param  Request $res [description]
     * @return [type]       [description]
     */
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
    }


}