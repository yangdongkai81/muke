<?php
/*
 *    收费课程   实战模块
 * */
namespace App\Http\Controllers\Home;

use App\Models\Admin_charge_type;
use App\Models\Admin_curriculum;
use App\Models\Admin_direction;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
class ChargeController extends Controller
{
    /*
     * 实战模块的展示
     * */
    public  function index(){
      //获取方向数据
       $charge_type= new Admin_charge_type();
       $arr['typelist']=$charge_type::get();
       //获取分类数据
        $direction= new Admin_direction;
        $arr['direction']=$direction::get();
       //取实战数据
        $curr= new Admin_curriculum;
        $arr['curr']=$curr::get();
        return view('Home/Charge/index',$arr);
    }






}