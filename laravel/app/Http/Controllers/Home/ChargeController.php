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
   //课程2级页面
     public function charge_learn($id)
     {  
        $uid = 1;//模拟登陆用户

        $row['ke'] = DB::table('free_course')->where('id',$id)->get();
      
        $row['zhang'] = DB::table('free_chapter')->where('curriculum_id',$id)->get();

        $row['kid'] = $id;

        $row['arr'] = DB::table('free_comment')->where('curriculum_id',$id)->get();

        $row['is_show'] = DB::table('bought_course')->where('uid',$uid)->where('pid',$id)->count();
        
      
      return view('Home.charge.charge_learn',$row);
     }
     //按方向搜索
     public function charge_fang($id)
     {
        $arr = DB::table('free_aspect')->where('id',$id)->get();
        $row['fen'] = DB::table('free_aspect')->where('parent_id',$arr[0]->id)->get();//分类
        $row['ke'] =  DB::table('free_course')->where('direction',$arr[0]->id)->where('is_show','=','1')->get();//课程
        $row['fang'] = DB::table('free_aspect')->where('parent_id','0')->get();//方向
        $row['pid'] = $id;
        $row['fid'] = 0;

        return view('Home.charge.so',$row);
       
     }
     //按分类搜索
     public function charge_sofen($id)
     {
        
        $row['fen'] = DB::table('free_aspect')->where('parent_id','>','0')->get();//分类
        $row['ke'] =  DB::table('free_course')->where('classification',$id)->where('is_show','=','1')->get();//课程
        $row['fang'] = DB::table('free_aspect')->where('parent_id','0')->get();//方向
        $row['fid'] = $id;
        $row['pid'] = 0;
        
        return view('Home.charge.so',$row);
     }



}