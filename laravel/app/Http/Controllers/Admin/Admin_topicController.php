<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin_free_aspect;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admin_free_course;
use App\Models\Admin_topic;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Admin_topicController extends Controller
{
	/**
	 * 后台课程
	 */
    public function add(request $request)
    {
        if($request->isMethod('post')){
            $topic=new Admin_topic();
            $topic->desc=$request->input('title');
            //处理选项数据
            $xuan =$request->input('xuan');
            $xiang=$request->input('xiang');
            $topic->option=json_encode(array_combine($xiang,$xuan));
            $topic->correct=$request->input('da');
            $topic->course_id=$request->input('course');
            $topic->type_id=$request->input('Type_name');
            $topic->enterprise=$request->input('is_ent');
            $topic->Topic_type=$request->input('topic_type');
            if($topic->save()){

              return Redirect::to('topic_add');

            };


        }else{
             //查分类数据
            $free=new Admin_free_aspect();
            $typelist = $free->get();
            //查课程数据
            $course=new Admin_free_course();
            $courselist = $course->get();   //返回对象    加上toArray返回数组

        return view('Admin/admin_topic/topic_add',['typelist'=>$typelist,'courselist'=>$courselist]);

        }
    }


}
