<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class Admin_integralController extends Controller
{  
//积分后台首页
   public function admin_add()
   { 
     // echo "111";die;
   	 return view("Admin.admin_integral.add");
   }
//执行添加
   public function add_do(Request $res)
   {
   	 $file = $res->file('logo');
   	 //var_dump($logo);die;
     if ($file->isValid()) {
        // 上传目录。 public目录下 uploads 文件夹
        $dir = 'uploads/';
        // 文件名。格式：时间戳 + 6位随机数 + 后缀名
        $filename = time() . mt_rand(100000, 999999) . '.' . $file ->getClientOriginalExtension();
        $file->move($dir, $filename);
        $path ="/public/uploads/".$filename;//
        //接收表单的值
        $name=$_POST['name'];
        $classification=$_POST['classification'];
        // echo $classification;die;
        $integral=$_POST['integral'];
        $time=time();
        $res=DB::table('integral')->insert(['name'=>$name,'classification'=>$classification,'integral'=>$integral,'logo'=>$path,'time'=>$time]);
        if($res){
         return redirect('show');
        }
     }
   }
//商品展示
   public function show()
   {
   
      $users = DB::table('integral')->paginate(2);
      // print_r($users);die;
      // foreach ($users as $key => $value) {
      //    print_r($value->id);die;
      // }
      return view('Admin.admin_integral.show',['data'=>$users]);
   }
//执行删除
   public function del()
   {
    $id=$_GET['id'];
    $res=DB::table('integral')->where('id',$id)->delete();
    if ($res) {
     return redirect('show');
    }
   }
//查询所要修改的语句 
   public function up()
   {
    $id=$_GET['id'];
    $res=DB::table('integral')->where('id',$id)->first();
    if ($res) {
      //Admin.admin_integral.add_blade
       return view('Admin/admin_integral/update_blade',['data'=>$res]);
    }
   }
//执行修改
  public function update(Request $res)
  {
    //获取图片信息
    $file = $res->file('logo');
     //var_dump($logo);die;
     if ($file->isValid()) {
      // 上传目录。 public目录下 uploads 文件夹
        $dir = 'uploads/';
      // 文件名。格式：时间戳 + 6位随机数 + 后缀名
        $filename = time() . mt_rand(100000, 999999) . '.' . $file ->getClientOriginalExtension();
        $file->move($dir, $filename);
        $path ="/public/uploads/".$filename;//
      //接收表单的值
        $id=$_POST['id'];
        $name=$_POST['name'];
        $classification=$_POST['classification'];
      // echo $classification;die;
        $integral=$_POST['integral'];
        $time=date('Y-m-d H:i:s');
        $arr=array('id'=>$id,'name'=>$name,'classification'=>$classification,'integral'=>$integral,'logo'=>$path,'time'=>$time);
        $res=DB::table('integral')->where('id',$id)->update($arr);
        if ($res) {
         return redirect('show');
        }
   }
  }
}