<?php
namespace App\Http\Controllers\Home;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use Session,Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MycourseController extends Controller
{

   /**
    * 前台展示我的浏览记录
    * @return [type] [description]
    */
    public function mycourse_index()
    {
   	    header("content-type:text/html;charset=utf-8");
#用分表查询
        $sql="SELECT * FROM (SELECT * FROM course_0
        UNION
        SELECT * FROM course_1
        UNION
        SELECT * FROM course_2
        UNION
        SELECT * FROM course_3
        UNION
        SELECT * FROM course_4
        UNION
        SELECT * FROM course_5
        UNION
        SELECT * FROM course_6
        UNION
        SELECT * FROM course_7
        UNION
        SELECT * FROM course_8
        UNION
        SELECT * FROM course_9) as all_course";
        $result = DB::select($sql);
        $id=1;
        $result1=DB::table('users')->where('id',$id)->first();

        return view('Home.mycourse.showcourse',[
            'data'=>$result,
            'data1'=>$result1
            ]);
#普通的两表联查
        // $result=DB::table('history')
        //         ->join('free_course', 'history.curriculum_id', '=', 'free_course.id')
        //         //->select('users.*', 'contacts.phone', 'orders.price')
        //         ->get();
        //  $id=1;
        //  $result1=DB::table('users')->where('id',$id)->first();
        //  var_dump($result);die;
        //  return view('Home.mycourse.showcourse',['data'=>$result,'data1'=>$result1]);

   }


}