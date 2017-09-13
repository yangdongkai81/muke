<?php
namespace App\Http\Controllers\Home;


use DB;
use App\Models\Question;
use App\Models\Aspect;
use App\Models\Answer;
use App\Models\Answer_Praise;
use App\Models\Answer_Oppos;
use App\Models\Reply;
use App\Models\User;
use App\Models\Answer_Attitude;
use App\Models\Integral2;
use App\Models\Question_follow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
	/*
	 * 猿问首页展示
	*/
	public function index(Request $request)
	{
		//实例化model
		$question = new Question;
		$aspect = new Aspect;
		$answer = new Answer;
		$users = new User;
		$integral2 = new Integral2;
		$user = [];
		$integral = [];
		if (!empty(\Session::get('login_id'))) {
			$user = $users->where("id",\Session::get('login_id'))
						  ->first();
			$integral = $integral2->where("login_id",\Session::get('login_id'))
								  ->first();
		}
		$page = $request->page ? $request->page : 1;
		$total = $question->where('questions_examine',1)
						  ->count();
		$pagesize = 1;
		$limit = ceil(($page-1)*$pagesize);
		$data = $question->where('questions_examine',1)
						 ->offset($limit)
						 ->limit($pagesize)
						 ->get();
		foreach ($data as $key => $value) {
			$ser = substr($value['questions_type'],0,1);
			$res = $aspect->where('id',$ser)
						  ->first();
			$value['questions_type'] = $res['aspect_name'];
		}

		return view('home.question.index',[
				'data'=>$data,
				'page'=>$page,
				'total'=>$total,
				'user'=>$user,
				'integral'=>$integral
		]);
	}
	/*
	 * 猿问最新展示
	*/
	public function question_newest(Request $request)
	{
		//实例化model
		$question = new Question;
		$aspect = new Aspect;
		$answer = new Answer;
		$users = new User;
		$integral2 = new Integral2;
		$user = [];
		$integral = [];
		if (!empty(\Session::get('login_id'))) {
			$user = $users->where("id",\Session::get('login_id'))
						  ->first();
			$integral = $integral2->where("login_id",\Session::get('login_id'))
								  ->first();
		}
		$page = $request->page ? $request->page : 1;
		//查询所有相应时间问题
		$total = $question->where('questions_time','>',time()-7200)
						  ->where('questions_examine',1)
						  ->count();
		$arr = [];
		$pagesize = 1;
		$limit = ceil(($page-1)*$pagesize);
		$data = $question->where('questions_time','>',time()-7200)
						 ->where('questions_examine',1)
						 ->offset($limit)
						 ->limit($pagesize)
						 ->get();
		foreach ($data as $key => $value) {
			if (time() - $value['questions_time'] < 7200) {
				$arr[] = $value;
			} 
		}
		foreach ($arr as $key => $value) {
			$ser = substr($value['questions_type'],0,1);
			$res = $aspect->where('id',$ser)
						  ->first();
			$value['questions_type'] = $res['aspect_name'];
		}

		return view('home.question.newest',[
			'data'=>$arr,
			'page'=>$page,
			'total'=>$total,
			'user'=>$user,
			'integral'=>$integral
		]);
	}
	/*
	 * 猿问未回答问题展示
	*/
	public function question_no_answer(Request $request)
	{
		//实例化model
		$question = new Question;
		$aspect = new Aspect;
		$answer = new Answer;
		$users = new User;
		$integral2 = new Integral2;
		$user = [];
		$integral = [];
		if (!empty(\Session::get('login_id'))) {
			$user = $users->where("id",\Session::get('login_id'))
						  ->first();
			$integral = $integral2->where("login_id",\Session::get('login_id'))
								  ->first();
		}
		$page = $request->page ? $request->page : 1;
		//查询所有提出问题
		$total = $question->where('questions_status','!=',1)
						  ->where('questions_examine',1)
						  ->count();
		$arr = [];
		$pagesize = 1;
		$limit = ceil(($page-1)*$pagesize);
		$data = $question->where('questions_status','!=',1)
						 ->where('questions_examine',1)
						 ->offset($limit)
						 ->limit($pagesize)
						 ->get();	
		foreach ($data as $key => $value) {
			if ($value['questions_status'] != 1) {
				$arr[] = $value;
			} 
		}
		foreach ($arr as $key => $value) {
			$ser = substr($value['questions_type'],0,1);
			$res = $aspect->where('id',$ser)
						  ->first();
			$value['questions_type'] = $res['aspect_name'];
		}

		return view('home.question.no_answer',[
			'data'=>$arr,
			'page'=>$page,
			'total'=>$total,
			'user'=>$user,
			'integral'=>$integral
		]);
	}
	/*
	 * 猿问提问所选分类
	*/
	public function question()
	{
		if (empty(\Session::get('login_id'))) {
			return view('login.login');
		}
		//实例化model
		$aspect = new Aspect;
		//查询所有类型
		$data = $aspect->where('parent_id', '!=', 0)
					   ->get();

		return view('home.question.question',[
			'data' => $data
		]);
	}
	/*
	 * 问题添加
	*/
	public function question_add(Request $request)
	{
		$question = new Question;
		$integral2 = new Integral2;
		$integral_data = $integral2->where('login_id',\Session::get('login_id'))
								   ->first();
		if ($integral_data['integral'] < 2) {
			return view('pc.index.jump')->with([
					'message' => '积分不足，无法发布',
					'url' => 'question',
					'jumpTime' => 3
				]);
		}
		//文件上传
		$file = $request->file('img');
		if (!empty($file)) {
	        $dir = 'uploads/';
	        // 文件名
	        $filename = time() . mt_rand(100000, 999999) . '.' . $file ->getClientOriginalExtension();
	        $file->move($dir, $filename);
	        $path = $filename;//图片路径
		} else {

			return view('pc.index.jump')->with([
					'message' => '必须上传文件，否则无法发布',
					'url' => 'question',
					'jumpTime' => 3
				]);
		}
		if (empty($request->question) && empty($request->content)) {

			return view('pc.index.jump')->with([
					'message' => '标题和内容不能为空，否则无法发布',
					'url' => 'question',
					'jumpTime' => 3
				]);
		}
		//添加问题
		$question->user_id = \Session::get('login_id');
		$question->questions_title = $request->question;
		$question->questions_introduce = $request->content;
		$question->questions_type = substr($request->arr, 0);
		$question->questions_time = time();
		$question->questions_img = $path;
		$question->questions_status = 0;
		$question->questions_examine = 1;
		$question->questions_browser = 0;
		$info = $question->save();
		if ($info) {	

			return redirect("question_index");
		} else { 

			return view('pc.index.jump')->with([
					'message' => '添加失败',
					'url' => 'question',
					'jumpTime' => 3
				]);
		}
	}
	/*
	* 猿问提问详情
	*/
	public function question_one(Request $request)
	{
		$question = new Question;
		$answer = new Answer;
		$reply = new reply;
		$users = new User;
		$integral2 = new Integral2;
		$new_user = [];
		$integral = [];
		if (!empty(\Session::get('login_id'))) {
			$new_user = $users->where("id",\Session::get('login_id'))
							  ->first();
			$integral = $integral2->where("login_id",\Session::get('login_id'))
								  ->first();
		}
		//print_r($user);return;
		//查询单条
		$data = $question->where('id', $request->id)
						 ->first();
		//修改浏览量
		$browser = $question->where('id', $request->id)
						    ->update([
						    	'questions_browser' => $data['questions_browser']+1
						    ]);
		$data = $question->where('id', $request->id)
						 ->first();
		//查询用户
		$user = $users->where('id',$data['user_id'])
					  ->first();
		//查询回答
		$arr = $answer->where('questions_id',$data['id'])
					  ->get()
					  ->toArray();
		$num = $answer->where('questions_id',$data['id'])
					  ->count();
		$name = [];
		foreach ($arr as $key => $value) {
			$name[] = $users->where("id",$value['answer_user_id'])
							->lists('email')
							->toArray();
		}
		foreach ($name as $key => $value) {
			$name[$key] = $value['0'];
		}

		return view('home.question.question_one',[
			'data'=>$data,
			'arr'=>$arr,
			'user'=>$user,
			'num'=>$num,
			'name'=>$name,
			'new_user'=>$new_user,
			'integral'=>$integral
		]);
	}
	/*
	* 猿问问题回答
	*/
	public function answer_add(Request $request)
	{
		if (empty(\Session::get('login_id'))) {

			return 0;
		}
        $answer = new Answer;
        $question = new Question;
        $integral2 = new Integral2;
        //添加回答
        $answer->answer_user_id = \Session::get('login_id');
        $answer->questions_id = $request->id;
        $answer->answer_content = $request->text;
        $answer->answer_time = time();
       	$answer->save();
       	//添加积分
		$integral_data = $integral2->where('login_id',\Session::get('login_id'))
								   ->first();
		$integral2->where('login_id',\Session::get('login_id'))
				  ->update([
				  		'integral'=>$integral_data['integral']+2
				  	]);
       	//修改问题状态
       	$res = $question->where('id',$request->id)
       					->first();
       	if ($res['questions_status'] == 0) {
       		$question->where('id',$request->id)
       				 ->update([
       					'questions_status' => 1
       				 ]);
       	}
       	//查询相关回答
     	$data = $answer->where('questions_id', $request->id)
     				   ->get()
     				   ->toArray();
     	foreach ($data as $key => &$value) {
     		$value['answer_time'] = date('Y-m-d H:i:s',$value['answer_time']);
     	}
     	//查询回答数
     	$num = $answer->where('questions_id',$request->id)
     				  ->count();
     	$browser = $question->where('id',$request->id)
     						->first();
     	$data = [
     		'data' => $data,
     		'num' => $num,
     		'browser' => $browser['questions_browser']
     	];

     	return json_encode($data);
	}
	/*
	* 猿问回答点赞反对
	*/
	public function answer_praise(Request $request)
	{
		if (empty(\Session::get('login_id'))) {
			return 0;
		}
		$id = $request->id;
		$type = $request->type;
		$answer_attitude = new Answer_Attitude;
		$answer_praise = new Answer_Praise;
		$arr = $answer_praise->where('answer_id',$id)
						  ->where('user_id',\Session::get('login_id'))
						  ->first();			 
		if ($arr) {
			//判断字段是否是点赞，如是点赞修改成反对
			if ($arr['start'] == 1 && $type == 0) {
				$answer_praise->where('user_id',\Session::get('login_id'))
							  ->where('answer_id',$id)
							  ->update(['start'=>$type]);
				$num = $answer_praise->where('user_id',\Session::get('login_id'))
							         ->where('answer_id',$id)
							         ->where('start',1)
							         ->count();
				$data = [
					'id' => 1,
					'count' => $num,
				];

				return json_encode($data);

			}
			//判断字段是否是点赞，如是点赞删除该点赞
			if ($arr['start'] == 1 && $type == 1) {
				$answer_praise->where('user_id',\Session::get('login_id'))
							  ->where('answer_id',$id)
							  ->delete();
				$num = $answer_praise->where('user_id',\Session::get('login_id'))
							         ->where('answer_id',$id)
							         ->where('start',1)
							         ->count();
				$data = [
					'id' => 2,
					'count' => $num,
				];

				return json_encode($data);
			}
			//判断字段是否是反对，如是反对修改成点赞
			if ($arr['start'] == 0 && $type == 1) {
				$answer_praise->where('user_id',\Session::get('login_id'))
							  ->where('answer_id',$id)
							  ->update(['start'=>$type]);
				$num = $answer_praise->where('user_id',\Session::get('login_id'))
							         ->where('answer_id',$id)
							         ->where('start',1)
							         ->count();
				$data = [
					'id' => 3,
					'count' => $num,
				];

				return json_encode($data);
			}
		} else {
			$answer_praise->user_id = \Session::get('login_id');
			$answer_praise->answer_id = $id;
			$answer_praise->start = $type;
			$res = $answer_praise->save();
			$num = $answer_praise->where('user_id',\Session::get('login_id'))
							         ->where('answer_id',$id)
							         ->where('start',1)
							         ->count();
			$arr = $answer_praise->where('user_id',\Session::get('login_id'))
							         ->where('answer_id',$id)
							         ->first();
			$data = [
				'id' => 4,
				'count' => $num,
				'type' => $arr['start'] 
			];

			return json_encode($data);
		}
	}
	/*
	* 猿问回答回复
	*/
	public function reply(Request $request)
	{
		if (empty(\Session::get('login_id'))) {
			return 0;
		}
		$answer = new Answer;
		$reply = new Reply;
		$user = new User;
		$text = $request->text;
		$id = $request->id;
		$user_id = $request->user_id;
		$answer_name = [];
		$reply_name = [];
		//展示回复
		if (empty($text)) {
			$data = $reply->where("answer_id",$id)
						  ->get()
						  ->toArray();
			foreach ($data as $key => $value) {
				$answer_name[] = $user->where("id",$value['answer_user_id'])
									  ->lists('email')
									  ->toArray();
				$reply_name[] = $user->where("id",$value['reply_user_id'])
									 ->lists('email')
									 ->toArray();
			}
			//print_r($answer_name);die;
			foreach ($answer_name as $key => $value) {
				$answer_name[$key] = $value['0'];
			}
			foreach ($reply_name as $key => $value) {
				$reply_name[$key] = $value['0'];
			}
			foreach ($data as $key => &$value) {
	     		$value['reply_time'] = date('Y-m-d H:i:s',$value['reply_time']);
	     	}
	     	$data = [
	     		'data' => $data,
	     		'answer_name' => $answer_name,
	     		'reply_name' => $reply_name
	     	];

			return json_encode($data);
		}
		//添加回复并展示
		$res = $answer->where("id",$id)
					  ->first();
		if ($res['answer_start'] == 0) {
			$res = $answer->where("id",$id)
						  ->update([
						  		'answer_start'=>1
						  	]);
		}
		$reply->answer_id = $id;
		$reply->answer_user_id = $user_id;
		$reply->reply_user_id = \Session::get('login_id');
		$reply->reply_content = $text;
		$reply->reply_time = time();
		$reply->save();
		$data = $reply->where("answer_id",$id)
					  ->get();
		foreach ($data as $key => &$value) {
     		$value['reply_time'] = date('Y-m-d H:i:s',$value['reply_time']);
     	}
     	foreach ($data as $key => $value) {
			$answer_name[] = $user->where("id",$value['answer_user_id'])
								  ->lists('email')
								  ->toArray();
			$reply_name[] = $user->where("id",$value['reply_user_id'])
								 ->lists('email')
								 ->toArray();
		}
		foreach ($answer_name as $key => $value) {
			$answer_name[$key] = $value['0'];
		}
		//print_r($answer_name);die;
		foreach ($reply_name as $key => $value) {
			$reply_name[$key] = $value['0'];
		}
		$data = [
     		'data' => $data,
     		'answer_name' => $answer_name,
     		'reply_name' => $reply_name
     	];

		return json_encode($data);
	}
	/**
	 * 猿问问题关注
	*/
	public function question_follow(Request $request)
	{
		if (empty(\Session::get('login_id'))) {

			return 2;
		}
		$follow = new Question_follow;
		$type_id = $request->type_id;
		$id = $request->id;
		if ($type_id == 1) {
			$follow->user_id = \Session::get('login_id');
			$follow->questions_id = $id;
			$follow->save();
			$res = $follow->where('questions_id',$id)
						  ->count();

			return $res;
		} else {
			$follow->where('user_id',\Session::get('login_id'))
					->delete();
			$res = $follow->where('questions_id',$id)
					->count();

			return $res;
		}
	}
}
