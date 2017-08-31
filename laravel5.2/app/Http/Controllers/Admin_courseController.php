<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
class Admin_courseController extends Controller
{  
	//后台首页
   public function index()
   {
   	 return view('admin_course.index');
   }
   //分类展示
   public function cate()
   {
   	 $arr = DB::table('aspect')->get();
   	 $data=$this->level($arr);
   	 $info['arr']=DB::table('aspect')->where('parent_id',0)->get();
   	 $info['data']=$data;
   	 return view('admin_course.cate',$info);
   }
   //分类添加
   public function cate_add(request $res)
   { 
   	 $row['aspect_name']=$res->aspect_name;
   	 $row['parent_id'] = $res->pid;
   	 $info=DB::table('aspect')->insert($row);
   	 if ($info) {
   	 	echo "<script>alert('添加成功！');location.href='admin_cate'</script>";
   	 }

   }
   //ajax分类删除
   public function some(request $res)
   {
      $id=$res->id;
      $row=DB::delete("delete from aspect where id='$id' or parent_id='$id'");
      if ($row) {
      	echo 1;
      }else{
      	echo 2;
      }
   }
   //类型展示
   public function mold()
   { 
   	 $arr=DB::table('mold')->get();

   	 return view('admin_course.type',['arr'=>$arr]);
   }
   //类型添加
   public function mold_add(request $res)
   {
       $row['mold_name']=$res->mold_name;
       $in=DB::table('mold')->insert($row);
       if ($in) {
          echo "<script>alert('添加成功！');location.href='admin_mold'</script>";
       }
   }
   /**
	 * 将分类数据排序
	 */
   public function level($arr,$pid=0)
   {   
   	   static $data=array();
       foreach ($arr as $v) {
       	  if ($v->parent_id == $pid) {
       	  	 $data[]=$v;
       	  	 $this->level($arr,$v->id);
       	  }
       }
       return $data;
   }










}