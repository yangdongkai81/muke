<?php
/*
 *    收费课程   实战模块
 * */
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;
 
use DB;

class ChargeController extends Controller
{
    /*
     * 实战模块的展示
     * */
    public  function index(){
      //获取方向数据
       $row['type'] = DB::table('free_aspect')->where('parent_id','0')->get();
      //分类
       $row['direction'] = DB::table('free_aspect')->where('parent_id','>','0')->get();
      //收费课程
       $row['arr'] = DB::table('free_course')->where('is_show','1')->get();
       return view('Home.charge.index',$row);
    }






}