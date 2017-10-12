<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Question;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Admin_questionController extends Controller
{
	public function examine_list()
	{
		$question = new Question;
		$data = $question->get();

		return view('admin.admin_question.question_examine',[
			'data'=>$data
		]);
	}
	public function examine(Request $request)
	{
		$question = new Question;
		$id = $request->id;
		$str = $request->str;
		$question->where('id',$id)->update(['questions_examine'=>$str]);
		$res = $question->where('id',$id)->first();

		return $res['questions_examine'];
	}
	public function delete(Request $request)
	{
		$id = $request->id;
		$question = new Question;
		$res = $question->where('id',$id)->delete();
		if ($res) {

			return 1;
		} else {

			return 0;
		}
	}
}