@extends('layouts.layouts')

@section('header')
@parent

<link href="./static/exam/css/bootstrap.css" rel="stylesheet">
<link href="./static/exam/css/mian-style.css" rel="stylesheet">
<!-- <link href="./static/exam/css/default.css" rel="stylesheet"> -->

<!-- <link href="./static/exam/css/font-awesome.min.css" rel="stylesheet"> -->

<!-- <link href="./static/exam/css/media.css" rel="stylesheet"> -->
<!-- <link href="./static/exam/css/my.css" rel="stylesheet"> -->
@section('title',"薪资测试")

@stop

@section('content')



<div id="exam" class="container  text-center" style="margin-bottom: 30px">
    <div class="sjm-msg text-center">
        <a class="btn btn-danger btn-lg" href="#" ><i class="i-icon"><img src="./static/exam/images/icon-i.png"></i> 知道自己的PHP技术多值钱吗？ 已有5000多人测试过，准确率超过85%，现在就测下试试看。</a>
    </div>
    <div class="panel panel-info">
        <div class="panel-heading"><h4>《北京地区PHP程序员专业能力评测报告》分值与薪资对应表</h4></div>
        <table class="table table-bordered">
            <tr>
                <td>分值</td>
                <td>薪资（月薪）</td>
            </tr>
            <tr>
                <td>20</td>
                <td>5k到8k</td>
            </tr>
            <tr>
                <td>30</td>
                <td>8k到10k</td>
            </tr>
            <tr>
                <td>40</td>
                <td>10k到12k</td>
            </tr>
            <tr>
                <td>50</td>
                <td>12k到15k</td>
            </tr>
            <tr>
                <td>60</td>
                <td>15k到20k</td>
            </tr>
            <tr>
                <td>70</td>
                <td>20k到25k</td>
            </tr>
            <tr>
                <td>80</td>
                <td>25k到30k</td>
            </tr>
            <tr>
                <td>90</td>
                <td>30k到50k</td>
            </tr>
            <tr>
                <td>100</td>
                <td>50k以上</td>
            </tr>
        </table>
    </div>
    <a class="btn btn-primary btn-lg" href="{{url('exam_check')}}" >开始测试</a>
</div>



@stop

@section('footer')

@parent
@stop
