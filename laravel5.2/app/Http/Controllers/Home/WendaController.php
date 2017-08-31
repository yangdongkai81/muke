<?php
namespace App\Http\Controllers\Home;


use DB;
use App\Models\Wenda;
use App\Models\Aspect;
use App\Models\Answer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WendaController extends Controller
{
	public function Index()
	{
		$wenda = new Wenda;
		$aspect = new Aspect;
		$data = $wenda->get();
		foreach ($data as $key => $value) {
			$ser = substr($value['questions_type'],0,1);
			$res = $aspect->where('id',$ser)->firstOrFail();
			$value['questions_type'] = $res['aspect_name'];
		}
		return view("home.wenda.index",['data'=>$data]);
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
        $answer->answer_user_id = 1;
        $answer->questions_id = $request->questions_id;
        $answer->answer_content = $request->content;
        $answer->answer_attitude = 0;
        $answer->answer_time = time();
        $answer->answer_img = $path;
       	$info =  $answer->save();
        if ($info) {
			echo "添加成功";	
		} else { 
			echo "添加失败";
		}
	}
}
