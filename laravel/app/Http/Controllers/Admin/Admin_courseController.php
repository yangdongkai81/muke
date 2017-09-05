<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;
 
use DB;

class Admin_courseController extends Controller
{  
	//后台首页
   public function index()
   { 
    
   	 return view('Admin.admin_course.index');
   }
   //分类展示
   public function cate()
   {
   	 $arr = DB::table('free_aspect')->get();
   	 $data=$this->level($arr);
   	 $info['arr']=DB::table('free_aspect')->where('parent_id',0)->get();
   	 $info['data']=$data;
   	 return view('Admin.admin_course.cate',$info);
   }
   //分类添加
   public function cate_add(request $res)
   { 
   	 $row['aspect_name']=$res->aspect_name;
   	 $row['parent_id'] = $res->pid;
   	 $info=DB::table('free_aspect')->insert($row);
   	 if ($info) {
   	 	echo "<script>alert('添加成功！');location.href='admin_cate'</script>";
   	 }

   }
   //ajax分类删除
   public function some(request $res)
   {
      $id=$res->id;
      $row=DB::delete("delete from free_aspect where id='$id' or parent_id='$id'");
      if ($row) {
      	echo 1;
      }else{
      	echo 2;
      }
   }
   //类型展示
   public function mold()
   { 
   	 $arr=DB::table('free_mold')->get();

   	 return view('Admin.admin_course.type',['arr'=>$arr]);
   }
   //类型添加
   public function mold_add(request $res)
   {
       $row['mold_name']=$res->mold_name;
       $in=DB::table('free_mold')->insert($row);
       if ($in) {
          echo "<script>alert('添加成功！');location.href='admin_mold'</script>";
       }
   }
   //课程上传页面
   public function  mold_course()
   {
     $mold=DB::table('free_mold')->get();
     $arr=DB::table('free_aspect')->get();
     $data=$this->level($arr);
     $info=['data'=>$data,
           'mold'=>$mold
           ];
     return view('Admin.admin_course.upmold',$info);
     
   }
   //课程上传数据
   public function mold_uplod(request $res)
   {
     $file = $res->file('photo');
     if ($file->isValid()) {
        // 上传目录。 public目录下 uploads 文件夹
        $dir = 'uploads/';
  
        // 文件名。格式：时间戳 + 6位随机数 + 后缀名
        $filename = time() . mt_rand(100000, 999999) . '.' . $file ->getClientOriginalExtension();
          
        $file->move($dir, $filename);
        $path =$filename;//图片路径
     }
     $arr=explode(',',$res->pid);//分类、方向
     $row['course_name'] = $res->course_name;
     $row['admin_id'] = 1;//模拟用户ID
     $row['desc'] = $res->desc;
     $row['leve'] = $res->le;
     $row['classification'] = $arr[0];//分类id
     $row['direction'] = $arr[1];//方向
     $row['type'] = $res->type;
     $row['img'] = $path;
     $in=DB::table('free_course')->insert($row);
     if ($in) {
          echo "<script>alert('添加成功！');location.href='mold_course'</script>";
       }
   }
  //生成章节页面
  public  function mold_chapter()
  {
     $arr = DB::table('free_course')->where('admin_id','1')->get();
     return view('Admin.admin_course.chapter',['arr'=>$arr]);

  }

  //生成章节
  public function chapter_add(request $res)
  {
      $row['chapter_name'] = $res->chapter_name;
      $row['curriculum_id'] = $res->pid;
      $row['sort'] = $res->sort;
      $in = DB::table('free_chapter')->insert($row);
      if ($in) {
          echo "<script>alert('添加成功！');location.href='mold_chapter'</script>";
       }
  }
  //视频上传
  public function mold_void()
  { 
    $uid = 1;
    $arr = DB::table('free_course')->where('admin_id',$uid)->get();

    return view('Admin.admin_course.void',['arr'=>$arr]);
  }
  //查询章节
  public function mold_selectcha(request $res)
  {
     $id = $res->id;
     $arr = DB::table('free_chapter')->where('curriculum_id',$id)->get();
     echo json_encode($arr);
  }
  //视频添加
  public function add_void(request $res)
  {
     $row['title'] = $res->title;
     $row['chapter_id'] = $res->cid;
     $row['sort'] = $res->sort;
     $row['video_path'] = '12313.mp4';
     $in = DB::table('free_attr')->insert($row);
     if ($in) {
          echo "<script>alert('添加成功！');location.href='mold_void'</script>";
       }
  }
   /**
	 * 将分类数据排序（递归）
	 */
   public function level($arr,$pid=0,$le='')
   {   
   	   static $data=array();
       foreach ($arr as $v) {
       	  if ($v->parent_id == $pid) {
             $v->le=$le;
       	  	 $data[]=$v;
       	  	 $this->level($arr,$v->id,$le.'-------');
       	  }
       }
       return $data;
   }










}