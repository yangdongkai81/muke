<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;


use App\Models\Topic;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Session;
use DB;

class ExamController extends Controller
{
    //薪资页面
	public function exam_index(){

		return view('home.exam.exam_index');
	}

	//薪资试题页面

	public function exam_check(){

		$user_id = \Session::get('login_id');
		$user_name = \Session::get('email');
		// echo $user_id;exit;

		if(isset($user_id)){

			$count = db::table('topic')->where('topic_type', 1)->lists('id');
			$new_arr = array_rand($count,4);
			$id_arr = [];
			foreach($new_arr as $key => $val){
				$id_arr[] = $count[$val];
			}
			// var_dump($id_arr);exit;
			$data = Topic::where('topic_type', 1)->where('enterprise',0)->whereIn('id',$id_arr)->get()->toArray();
			$data = array_combine(array_column($data, 'id'), $data);
			
			return view('home.exam.exam_test', ['data'=>$data,'id_arr'=>$id_arr]);
		}else{
			return view('login.login');
		}
	}


	//查看答案页面
	public function exam_answer(){
		// var_dump($_POST);die;
		if(!isset($_REQUEST['radio'])){
			return view('pc.index.jump')->with([
					'message' => '不能提交空白试卷',
					'url' => 'exam_check',
					'jumpTime' => 3
				]);
		}

		$answer = $_REQUEST['radio'];


		$id_arr = json_decode($_REQUEST['id_arr'], true);


		$result = db::table('topic')->where('topic_type', 1)->whereIn('id',$id_arr)->lists('correct','id');

		// 错题
		$sum = 0;
		
			foreach($answer as $k=>$v){
				if($result[$k] == $v){
					$sum += 1;
				}
			}

		$num = count($id_arr);
		$info = [];
		$info['true_count'] = $sum;
		$info['false_count'] = $num - $sum;
		$info['mark'] = $sum * (100/$num);
		// var_dump($info);exit

		return view('home.exam.exam_result', ['info'=>$info]);
		
	}


	
}
