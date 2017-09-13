<?php
namespace App\Http\Controllers\Home;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session,Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IntegralController extends Controller
{
############################################################
#     关于laravel里面的session存取                         #
#     存session   $res->session()->put(['rand'=>$rand]);   #
#     取session    Session::get('rand')                    #
############################################################       
    /**
     * 前台积分展示所有商品
     * @return [type] [description]
     */
    public function integral_index()
    {

        $login_id=\Session::get('login_id');
        $res=DB::table('integral2')->where('login_id',$login_id)->first();
        $res2=DB::table('users')->where('id',$login_id)->first();
      	$data=DB::table('integral')->get();

    	  return view('Home.integral.index',[
          'data'=>$data,
          'res'=>$res,
          'res2'=>$res2
          ]);
    }
    /**
     * 前台积分展示虚拟商品
     * @return [type] [description]
     */
    public function fictitious()
    {
        $login_id=\Session::get('login_id');
        $res=DB::table('integral2')->where('login_id',$login_id)->first();
        $res2=DB::table('users')->where('id',$login_id)->first();
      	$data=DB::table('integral')->where('classification',"虚拟分类")->get();

      	return view('Home.integral.index1',[
          'data'=>$data,
          'res'=>$res,
          'res2'=>$res2
          ]);
    }
    /**
     * 前台积分展示实体商品
     * @return [type] [description]
     */
    public function entity()
    {
        $login_id=\Session::get('login_id');
        $res=DB::table('integral2')->where('login_id',$login_id)->first();
        $res2=DB::table('users')->where('id',$login_id)->first();
      	$data=DB::table('integral')->where('classification',"实体分类")->get();

    	  return view('Home.integral.index2',[
          'data'=>$data,
          'res'=>$res,
          'res2'=>$res2
          ]);
    }
    /**
     * 前台商品详情方法
     * @param  Request $res [description]
     * @return [type]       [description]
     */
    public function details(Request $res)
    {
        $login_id=\Session::get('login_id');
        $res=DB::table('integral2')->where('login_id',$login_id)->first();
        $res2=DB::table('users')->where('id',$login_id)->first();
      	$id=$res->id;
    	  $data=DB::table('integral')->where('id',$id)->first();

    	  return view('Home.integral.details',[
          'data'=>$data,
          'res'=>$res,
          'res2'=>$res2
          ]);
    }
   /**
    * 前台兑换商品页面
    * @param  Request $res [description]
    * @return [type]       [description]
    */
    public function exchange(Request $res)
    {
    	  $login_id=\Session::get('login_id');
        $res=DB::table('integral2')->where('login_id',$login_id)->first();
        $money=$res->integral;
    	  $id=$res->id;
      	$data=DB::table('integral')->where('id',$id)->first();
      	$money1=$data->integral;
      	if ($money<$money1) {

    	      return view('pc.index.jump')->with([
                'message'=>'您的积分不足',
                'url'=>"/public/details/{$id}",
                'jumpTime'=>2, 
    	  	      ]);
    	  }else{
            $id=$res->id;
            $res=DB::table('integral')->where('id',$id)->first();
            $name=$res->name;
            $logo=$res->logo;
            $classification=$res->classification;
            $integral=$res->integral;
            $time=date('Y-m-d H:i:s');
            $data=DB::table('peopleintegral')->insert(['name'=>$name,'classification'=>$classification,'integral'=>$integral,'logo'=>$logo,'time'=>$time]);
        if ($data) {
            $res=DB::table('integral2')->where('login_id',$login_id)->first();
            $money=$res->integral;
            $id=$res->id;
            $res2=DB::table('integral')->where('id',$id)->first();
            $money1=$res2->integral;
            $money2=$money-$money1;
            $arr=array('integral'=>$money2);
            $update_integral=DB::table('integral2')->where('login_id',$login_id)->update($arr);

                return view('pc.index.jump')->with([
                    'message'=>'购买成功',
                    'url'=>"/public/integral_index",
                    'jumpTime'=>10, 
            ]);
          }
    		
    	}
    
    }
    /**
     * 查看订单方法
     * @return [type] [description]
     */
    public function order()
    {
        $login_id=\Session::get('login_id');
        $res=DB::table('integral2')->where('login_id',$login_id)->first();
        $res2=DB::table('users')->where('id',$login_id)->first();
        $data=DB::table('peopleintegral')->get();

        return view('Home.integral.order',[
          'data'=>$data,
          'res'=>$res,
          'res2'=>$res2
          ]);
        

    }
   
}
