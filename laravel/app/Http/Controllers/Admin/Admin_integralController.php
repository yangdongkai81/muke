<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Symfony\Component\HttpFoundation\Session\Session;
class Admin_integralController extends Controller
{  
   
    /**
     * 积分后台首页
     * @return [type] [description]
     */
    public function admin_add()
    { 
     	return view("Admin.admin_integral.add");
    }
    /**
     * 执行添加
     * @return [type] [description]
     */
    public function add_do(Request $res)
    {
       	$file = $res->file('logo');
        if ($file->isValid()) {
        $dir = 'uploads/';
        $filename = time() . mt_rand(100000, 999999) . '.' . $file ->getClientOriginalExtension();
        $file->move($dir, $filename);
        $path ="/public/uploads/".$filename;//
        $name=$_POST['name'];
        $classification=$_POST['classification'];
        $integral=$_POST['integral'];
        $time=time();
        $res=DB::table('integral')->insert(['name'=>$name,'classification'=>$classification,'integral'=>$integral,'logo'=>$path,'time'=>$time]);
        if($res){

            return redirect('show');
            }
        }
    }
    /**
     *商品展示
     * @return [type] [description]
     */
    public function show()
    {
        $users = DB::table('integral')->paginate(2);

        return view('Admin.admin_integral.show',[
          'data'=>$users
        ]);
    }
    /**
     *执行删除
     * @return [type] [description]
     */
    public function del(Request $request)
    {
        header("content-type:text/html;charset=utf-8");
        $session = new Session;
        $name = $session->get("name");
        $data1=DB::table('admin_login')->where('name',$name)->first();
        $role_id=$data1->role_id;
        $uri = $request->path();
        $data2=DB::table('admin_auth')->where('auth_a',$uri)->first();
        $role_ids=$data2->role_id;
        $role_idss=explode(',', $role_ids);
        if (in_array($role_id, $role_idss)) {
            
           return "您没有权限进行删除";
        }
        $id=$_GET['id'];
        $res=DB::table('integral')->where('id',$id)->delete();
        if ($res) {

         return redirect('show');
        }
    }
    /**
     *查询所要修改的语句
     * @return [type] [description]
     */ 
    public function up()
    {
        $id=$_GET['id'];
        $res=DB::table('integral')->where('id',$id)->first();
        if ($res) {

        return view('Admin/admin_integral/update_blade',[
            'data'=>$res
        ]);
        }
    }
    /**
     *执行修改
     * @return [type] [description]
     */ 
    public function update(Request $res)
    {
        $file = $res->file('logo');
        if ($file->isValid()) {
        $dir = 'uploads/';
        $filename = time() . mt_rand(100000, 999999) . '.' . $file ->getClientOriginalExtension();
        $file->move($dir, $filename);
        $path ="/public/uploads/".$filename;//
        $id=$_POST['id'];
        $name=$_POST['name'];
        $classification=$_POST['classification'];
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