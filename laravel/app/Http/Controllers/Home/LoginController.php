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
class LoginController extends Controller
{
    public function index()
    {
        // echo 1;die;
    	return view('login/login');
    }

    /**
     * 注册
     */
    public function register()
    {
        return view('login.register');
    }

    public function handle(request $res)
    {
    	$name = $res->email;//接受用户名
        $pwd  =  $res->pwd;
        $password = md5($pwd);        
        $users = DB::table('users')->where('email','=',$name)->get();
        if ($users) {
            $user_pwd=DB::table('users')->where('email','=',$name,'and','pwd','=',$password)->first();
            if ($user_pwd) {
                DB::table('users')->where('id',$user_pwd->id)->update(['add_time' => date("Y-m-d H:i:s")]);
                $res->session()->put(['login_id'=>$user_pwd->id,'email'=>$user_pwd->email]);
                return redirect('index_index');
            }else{
                return view('pc.index.jump')->with([
                    'message'=>'密码错误',
                    'url' =>"login_index", 
                    'jumpTime'=>2,
                ]);
            }
        }else{
           return view('pc.index.jump')->with([
                    'message'=>'账号有误',
                    'url' =>"login_index", 
                    'jumpTime'=>10,
                ]);
        }

    }


    public function registerHandle(request $obj)
    {
            $code=$obj->Code;
            if ($code!=Session::get('rand')) {
                return view('pc.index.jump')->with([
                    'message'=>'验证码错误',
                    'url' =>"login_register", 
                    'jumpTime'=>2,
                ]);
            }
            $arr = array('email' => $obj->email,
                         'pwd'   => md5($obj->pwd),
                         'end_time' => date('Y-m-d H:i:s'));
            $id = DB::table('users')->insertGetId($arr);
            if ($id) {
                $obj->session()->put(['login_id'=>$id,'email'=>$obj->email]);
                return redirect('index_index');
            }else{
                return view('pc.index.jump')->with([
                    'message'=>'注册失败',
                    'url' =>"login_register", 
                    'jumpTime'=>2,
                ]);
            }

    }

    public function code(request $res){
            $tel = $res->tel;
            //生成  4位数的验证码 并且存储$SESSION
            $rand=rand(1000,9999);
            //存储session
           // Session::set('rand',$rand);
            $res->session()->put(['rand'=>$rand]);
            //session('rand');
            $this->sendTemplateSMS($tel,array($rand,5),1);//手机号码，替换内容数组，模板ID
    }

    /**
     * 第三方登录
     */
    public function qq()
    {
        return Socialite::with('qq')->redirect();
    }

    public function qqlogin()
    {
        return redirect('charge_index');
        // echo 1; exit;
        // $user = Socialite::driver('qq')->user();
        // dd($user);
    }

/**
  * 发送模板短信
  * @param to 手机号码集合,用英文逗号分开
  * @param datas 内容数据 格式为数组 例如：array('Marry','Alon')，如不需替换请填 null
  * @param $tempId 模板Id,测试应用和未上线应用使用测试模板请填写1，正式应用上线后填写已申请审核通过的模板ID
  */
    function sendTemplateSMS($to,$datas,$tempId)
    {
        //主帐号,对应开官网发者主账号下的 ACCOUNT SID
         $accountSid= "8a216da85e0e48b2015e2b8e62220933"; 
         //说明：主账号，登陆云通讯网站后，可在控制台首页看到开发者主账号ACCOUNT SID。

         $accountToken= "f5450b63f1284a11bef01c89c31f7e53"; 
         //说明：主账号Token，登陆云通讯网站后，可在控制台首页看到开发者主账号AUTH TOKEN。

         $appId="8a216da85e0e48b2015e2b8e63c00938"; 
        //请求地址
        //沙盒环境（用于应用开发调试）：sandboxapp.cloopen.com
        //生产环境（用户应用上线使用）：app.cloopen.com
        $serverIP='app.cloopen.com';
        //请求端口，生产环境和沙盒环境一致
        $serverPort='8883';
        //REST版本号，在官网文档REST介绍中获得。
        $softVersion='2013-12-26';
        include_once("CCPRestSmsSDK.php");
         // 初始化REST SDK
         global $accountSid,$accountToken,$appId,$serverIP,$serverPort,$softVersion;

         $rest = new \REST($serverIP,$serverPort,$softVersion);
         $rest->setAccount($accountSid,$accountToken);

         $rest->setAppId($appId);

         // 发送模板短信
         echo "Sending TemplateSMS to $to <br/>";
         $result = $rest->sendTemplateSMS($to,$datas,$tempId);
         if($result == NULL ) {
             echo "result error!";
             // break;
         }
         if($result->statusCode!=0) {
             echo "error code :" . $result->statusCode . "<br>";
             echo "error msg :" . $result->statusMsg . "<br>";
             //TODO 添加错误处理逻辑
         }else{
             echo "Sendind TemplateSMS success!<br/>";
             // 获取返回信息
             $smsmessage = $result->TemplateSMS;
             echo "dateCreated:".$smsmessage->dateCreated."<br/>";
             echo "smsMessageSid:".$smsmessage->smsMessageSid."<br/>";
             //TODO 添加成功处理逻辑
         }
    }

}
