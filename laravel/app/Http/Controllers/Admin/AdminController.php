<?php
namespace App\Http\Controllers\Admin;
/*
 *   首页模块
 * */
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AdminController extends Controller
{
    /*
     * 首页展示
     * */
    public  function  Index(){

        return view('Admin//Index');
    }


}