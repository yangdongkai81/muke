@extends('layouts.layouts')

@section('header')
@parent
<link href="./static/exam/css/bootstrap.css" rel="stylesheet">
<link href="./static/exam/css/mian-style.css" rel="stylesheet">
@section('title',"薪资测试")

@stop

@section('content')
<div class="jumbotron container" style="margin-top:20px;">

    <div class="panel panel-default">

        <div class="panel-heading">
            <p class="text-danger">
                <small>《PHP综合能力测试》</small>
                测试结果
            </p>
        </div>

        <table class="table table-bordered">


            <tr>
                <th scope="row">总计得分:</th>
                <td>{{$info['mark']}}</td>
            </tr>
            <tr>
                <th scope="row">答对题目数:</th>
                <td>{{$info['true_count']}}</td>
            </tr>
            <tr>
                <th scope="row">答错题目数:</th>
                <td>{{$info['false_count']}}</td>
            </tr>
            

        </table>
    </div>


    <p id="reportBtn">

        <a href="{{url('exam_index')}}" target="_block"><button type="button" class="btn btn-primary">再测一次</button></a>
        <a href="{{url('index_index')}}" target="_block"><button type="button" class="btn btn-primary">继续学习</button></a>

    </p>

</div>

<div class="container" style="margin-bottom: 30px">
    <h5>说明：</h5>
    <p>1、此评测可能存在误差，仅作为参考之用； </p>
    <p>2、目前测试全部为单选题目，可能存在蒙对的情况，建议自己评测后，彻底搞清楚每道题为啥做对、为啥做错。 </p>
    <p style="margin-top: 10px">欢迎加入到高级PHP群与高手交流， 高级PHP交流群号：159926243 </p>
</div>

@stop

@section('footer')

@parent
@stop
