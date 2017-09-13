<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;
 
use DB;

class CourseController extends Controller
{  
    //课程首页
	 public function course_index()
	 {
	    // \Session::set('key','val');存取
       //   \Session::put('key');	
	 	$row['fang'] = DB::table('free_aspect')->where('parent_id','0')->get();//方向
	 	$row['fen'] = DB::table('free_aspect')->where('parent_id','>','0')->get();//分类
        $row['le'] = DB::table('free_mold')->get();//类型
	 	$row['ke'] = DB::table('free_course')->where('is_show','<','1')->get();
       
        return view('Home.course.index',$row);
	 }
    //课程2级页面
     public function course_learn($id='')
     {  
     	$row['ke'] = DB::table('free_course')->where('id',$id)->get();
     	
        $row['zhang'] = DB::table('free_chapter')->where('curriculum_id',$id)->get();

        $row['kid'] = $id;

        $row['arr'] = DB::table('free_comment')->where('curriculum_id',$id)->get();
     
     	return view('Home.course.course_learn',$row);
     }
     //ajax章节视频
     public function course_ajax(request $res)
     {
        $id = $res->id;
        $arr = DB::table('free_attr')->where('chapter_id',$id)->get();
        
        return json_encode($arr);
     }
     //播放视频
     public function course_bo($id='')
     {  

        $arr = DB::table('free_attr')->where('id',$id)->get();



        return view('Home.course.course_fang',['arr'=>$arr]);
     }
     //搜索方向
     public function course_so($id='')
     {
        $arr = DB::table('free_aspect')->where('id',$id)->get();
        $row['fen'] = DB::table('free_aspect')->where('parent_id',$arr[0]->id)->get();//分类
        $row['ke'] =  DB::table('free_course')->where('direction',$arr[0]->id)->where('is_show','<','1')->get();//课程
        $row['le'] = DB::table('free_mold')->get();//类型
        $row['fang'] = DB::table('free_aspect')->where('parent_id','0')->get();//方向
        $row['pid'] = $id;
        $row['fid'] = 0;
        $row['lx'] = '';

        return view('Home.course.so',$row);
     }
     //搜索分类
     public function course_sofen($id='')
     {
        $arr = DB::table('free_aspect')->where('id',$id)->get();
        $row['fen'] = DB::table('free_aspect')->where('parent_id','>','0')->get();//分类
        $row['ke'] =  DB::table('free_course')->where('classification',$arr[0]->id)->where('is_show','<','1')->get();//课程
        $row['le'] = DB::table('free_mold')->get();//类型
        $row['fang'] = DB::table('free_aspect')->where('parent_id','0')->get();//方向
        $row['fid'] = $id;
        $row['pid'] = 0;
        $row['lx'] = '';

        return view('Home.course.so',$row);
     }
     //搜索类型
     public function course_sole($id='')
     { 
        $row['ke'] =DB::table('free_course')->where('type',$id)->where('is_show','<','1')->get();//课程 
        $row['fen'] = DB::table('free_aspect')->where('parent_id','>','0')->get();//分类
        $row['fang'] = DB::table('free_aspect')->where('parent_id','0')->get();//方向
        $row['le'] = DB::table('free_mold')->get();//类型
        $row['fid'] = '';
        $row['pid'] = 0;
        $row['lx'] = $id;

        return view('Home.course.so',$row);


     }
     //2级页面发表评论
     public function course_fa(request $res)
     {
        $row['curriculum_id'] = $res->kid;//课程ID
        $kid = $res->kid;
        $row['user_desc'] = $res->content;
        $row['add_time'] = time();
        $row['user_id'] = 1;//模拟用户ID
        $in = DB::table('free_comment')->insert($row);
        if ($in) {
            $arr = DB::select("SELECT  FROM_UNIXTIME(add_time, '%Y-%c-%d %h:%i:%s' ) as add_time,id,user_id,curriculum_id,user_desc,zhang_id,is_name,status  FROM  free_comment where curriculum_id ='$kid'  order by id desc");
          
           return json_encode($arr);
        }else{

           return 2;
        }
     }

      //3级页面发表评论
     public function course_zfa(request $res)
     {  
        $zid = $res->zid;
        $row['zhang_id'] = $res->zid;//章节ID
        $row['user_desc'] = $res->content;
        $row['add_time'] = time();
        $row['user_id'] = 1;//模拟用户ID
        $in = DB::table('free_comment')->insert($row);
        if ($in) {
            $arr = DB::select("SELECT  FROM_UNIXTIME(add_time, '%Y-%c-%d %h:%i:%s' ) as add_time,id,user_id,curriculum_id,user_desc,zhang_id,is_name,status  FROM  free_comment WHERE zhang_id ='$zid'  order by id desc");
            
            return json_encode($arr);

        }else{

            return 2;
        }
     }

}