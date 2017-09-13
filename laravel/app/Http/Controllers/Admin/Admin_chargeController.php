<?php
namespace App\Http\Controllers\Admin;
/*
 *   首页模块
 * */
use App\Models\Admin_Charge;
use App\Models\Admin_charge_type;
use App\Models\Admin_Curriculum;
use App\Models\Admin_Direction;
use App\Models\Admin_User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Admin_chargeController extends Controller
{
    /*
     *  商品添加展示
     * */
    public  function  Index(request $request){

        if($request->isMethod('post')){
         $curr=new Admin_curriculum();
          //接受值
            $curr->Curriculum_name=$request->input('title');
            $curr->Price=$request->input('Price');
            $curr->Desc=$request->input('Desc');
            $curr->Leve=$request->input('Leve');
            $curr->User_id=$request->input('User_id');
            $curr->Type_name=$request->input('Type_name');
            $curr->Direction_name=$request->input('Direction_name');
            //处理图片返回图片名字
            $curr->Img_path=$this->img($request,'img');
            $curr->Add_time=time();
            $curr->save();

        }else{
         //查分类数据
            $charge=new Admin_charge_type;
            $typelist = $charge::where('Status',0)->get();
         //查方向数据
            $direction=new Admin_direction;
            $directionlist = $direction::where('Status',0)->get();
         //查老师信息
            $user=new Admin_user();
            $userlist = $user::where(['Status'=>0,'Type'=>2])->get();

            return view('Admin/Admin_Charge/Index',['typelist'=>$typelist,'direction'=>$directionlist,'userlist'=>$userlist]);

        }

    }


    /*
     * 单图片上传方法
     * */
    public  function  Img($res='',$img){
        $file = $res->file($img);
        if ($file->isValid()) {
            // 上传目录。 public目录下 uploads 文件夹
            $dir = 'uploads/';

            // 文件名。格式：时间戳 + 6位随机数 + 后缀名
            $filename = time() . mt_rand(100000, 999999) . '.' . $file ->getClientOriginalExtension();

            $file->move($dir, $filename);
            $path =$filename;//图片路径
            return $path;
        }else{
            return "没有图片上传";
        }

    }


    /*
    *  分类添加展示
    * */
    public  function  Type(request $request){

        if($request->isMethod('post')){
        $type_name=$request->input('type_name');
        $charge=new Admin_charge_type;
        $charge->Type_name=$type_name;
        $charge->save();
        }else{

            return view('Admin/Admin_Charge/Add_Type');
        }

    }
    /*
        *  方向添加展示
        * */
    public  function  Direction(request $request){

        if($request->isMethod('post')){
            $name=$request->input('type_name');
            $Direction=new Admin_direction;
            $Direction->Direction_name=$name;
            $Direction->save();
        }else{

            return view('Admin/Admin_Charge/Add_Direction');
        }

    }







}