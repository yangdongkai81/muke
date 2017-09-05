<?php
namespace App\Http\Controllers\Home;


use DB;
use App\Models\Wenda;
use App\Models\Aspect;
use App\Models\Answer;
use App\Models\Answer_Zan;
use App\Models\Answer_Fan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WendaController extends Controller
{
	public function Index()
	{
		$wenda = new Wenda;
		$aspect = new Aspect;
		$answer = new Answer;
		$data = $wenda->get();
		foreach ($data as $key => $value) {
			$ser = substr($value['questions_type'],0,1);
			$res = $aspect->where('id',$ser)->firstOrFail();
			$value['questions_type'] = $res['aspect_name'];
		}
		//return view("home.wenda.index",['data'=>$data]);
		$arr = $answer->get();
		foreach ($arr as $key => $value) {
			foreach ($data as $k => $v) {
				if ($value['questions_id'] == $v['id']) {
					$newData[$value['questions_id']] = $value; 
				}
			}
		}
		return view("home.wenda.index",['data'=>$data,'newData' => $newData]);
	}
	public function Issue()
	{
		return view("home.wenda.issue");
	}
	public function Question()
	{
		$data = DB::table("aspect")->where('parent_id', '!=', 0)->get();
		return view("home.wenda.question",['data' => $data]);
	}
	public function Question_Add(Request $request)
	{
		$file = $request->file('img');
        // 上传目录。 public目录下 uploads 文件夹
        $dir = 'uploads/';
        // 文件名。格式：时间戳 + 6位随机数 + 后缀名
        $filename = time() . mt_rand(100000, 999999) . '.' . $file ->getClientOriginalExtension();
        $file->move($dir, $filename);
        $path = $filename;//图片路径
		$wenda = new Wenda;
		$wenda->user_id = 2;
		$wenda->tipic_id = isset($request->tipic_id) ? $request->tipic_id : 0;
		$wenda->questions_title = $request->question;
		$wenda->questions_introduce = $request->content;
		$wenda->questions_type = $request->arr;
		$wenda->questions_attitude = 0;
		$wenda->questions_time = time();
		$wenda->questions_img = $path;
		$wenda->questions_statrt = 0;
		$info = $wenda->save();
		if ($info) {
			echo "添加成功";	
			return redirect("wenda_index");	
		} else { 
			echo "添加失败";
		}
	}
	public function User_Question_Show()
	{
		$wenda = new Wenda;
		$data = $wenda->where('user_id', 2)->get();
		return view('home.wenda.user_question_show',['data'=>$data]);
	}
	public function Question_One(Request $request)
	{
		$wenda = new Wenda;
		$data = $wenda->where('id', $request->id)->firstOrFail();
		return view('home.wenda.question_one',['data'=>$data]);
		$answer = new Answer;
		$data = $wenda->where('id', $request->id)->first();
		$arr = $answer->where('questions_id',$data['id'])->get();
		return view('home.wenda.question_one',['data'=>$data,'arr'=>$arr]);
	}
	public function Answer_Add(Request $request)
	{
		$file = $request->file('img');
        // 上传目录。 public目录下 uploads 文件夹
        $dir = 'uploads/';
        // 文件名。格式：时间戳 + 6位随机数 + 后缀名
        $filename = time() . mt_rand(100000, 999999) . '.' . $file ->getClientOriginalExtension();
        $file->move($dir, $filename);
        $path = $filename;//图片路径
        $answer = new Answer;
        $wenda = new Wenda;
        $answer->answer_user_id = 1;
        $answer->questions_id = $request->questions_id;
        $answer->answer_content = $request->content;
        $answer->answer_attitude = 0;
        $answer->answer_time = time();
        $answer->answer_img = $path;
       	$info =  $answer->save();
        if ($info) {
			echo "添加成功";	
	        $wenda->where('id','=',$request->questions_id)->update(['questions_statrt' => 1]);
	        if ($info) {
				return redirect("wenda_index");	
			} else { 
				echo "添加失败";
			}
		}
	}
	public function Answer_Zan(Request $request)
	{
		$id = $request->id;
		$answer_attitude = new Answer_Attitude;
		$answer_zan = new Answer_Zan;
		$arr = $answer_zan->where('answer_id',$id)
						  ->where('user_id',1)
						  ->first();			 
		if ($arr) {
			$answer_zan->where('answer_id',$id)
					   ->where('user_id',1)
					   ->delete();
			$data = $answer_attitude->where('answer_id',$id)->first();
			$answer_attitude->where('answer_id','=',$id)->update(['favor' => $data['favor']-1]);
			$res = $answer_attitude->where("answer_id",$id)->first();
		} else {
			$answer_zan->answer_id = $id;
			$answer_zan->user_id = 1;
			$answer_zan->start = 1;
			$answer_zan->save();
			$data = $answer_attitude->where('answer_id',$id)->first();
			if ($data) {
				$answer_attitude->where('answer_id','=',$id)->update(['favor' => $data['favor']+1]);
			} else {
				$answer_attitude->answer_id = $id;
				$answer_attitude->favor = 1;
				$answer_attitude->save();
			}
			$res = $answer_attitude->where("answer_id",$id)->first();
		}
		echo $res['favor'];
	}
	public function Answer_Fan(Request $request)
	{
		$id = $request->id;
		$answer_attitude = new Answer_Attitude;
		$answer_fan = new Answer_Fan;
		$arr = $answer_fan->where('answer_id',$id)
						  ->where('user_id',1)
						  ->first();	 
		if ($arr) {
			$answer_fan->where('answer_id',$id)
					   ->where('user_id',1)
					   ->delete();
			$data = $answer_attitude->where('answer_id',$id)->first();
			$answer_attitude->where('answer_id','=',$id)->update(['favor' => $data['favor']-1]);
			$res = $answer_fan->where('answer_id',$id)
						  ->where('user_id',1)
						  ->first();
		} else {
			$answer_fan->answer_id = $id;
			$answer_fan->user_id = 1;
			$answer_fan->start = 0;
			$answer_fan->save();
			$data = $answer_attitude->where('answer_id',$id)->first();
			if ($data) {
				$answer_attitude->where('answer_id','=',$id)->update(['favor' => $data['favor']+1]);
			} else {
				$answer_attitude->answer_id = $id;
				$answer_attitude->oppose = 1;
				$answer_attitude->save();
			}
			$res = $answer_fan->where('answer_id',$id)
						  ->where('user_id',1)
						  ->first();
		}
		if ($res) {
			echo "1";
		} else {
			echo "0";
		}
	}
}
