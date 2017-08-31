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
	 	
	 	$row['fang'] = DB::table('free_aspect')->where('parent_id','0')->get();//方向
	 	$row['fen'] = DB::table('free_aspect')->where('parent_id','>','0')->get();//分类
        $row['le'] = DB::table('free_mold')->get();
	 	$row['ke'] = DB::table('free_course')->get();
       
        return view('Home.course.index',$row);
	 }
    //课程2级页面
     public function course_learn($id='')
     {  
     	$row['ke'] = DB::table('free_course')->get();
     	
        $row['zhang'] = DB::table('free_chapter')->where('curriculum_id',$id)->get();
     
     	return view('Home.course.course_learn',$row);
     }
     //ajax章节视频
     public function course_ajax(request $res)
     {
        $id = $res->id;
        $arr = DB::table('free_attr')->where('chapter_id',$id)->get();
        echo json_encode($arr);
     }
     

}