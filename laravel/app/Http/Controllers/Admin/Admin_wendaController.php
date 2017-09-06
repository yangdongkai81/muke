<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Wenda;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Admin_wendaController extends Controller
{
	public function Shehe()
	{
		$wenda = new Wenda;
		$data = $wenda->get();
		return view('admin.admin_wenda.wenda_shenhe',['data'=>$data]);
	}
	public function Examine(Request $request)
	{
		$wenda = new Wenda;
		$id = $request->id;
		$res = $wenda->where('id',$id)->update(['questions_examine'=>$request->str]);
		$res = $wenda->where('id',$id)->first();
		echo $res['questions_examine'];
	}
	public function delete(Request $request)
	{
		$id = $request->id;
		$wenda = new Wenda;
		$res = $wenda->where('id',$id)->delete();
		if ($res) {
			echo 1;
		} else {
			echo 0;
		}

	}
}