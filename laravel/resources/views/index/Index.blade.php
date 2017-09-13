@extends('layouts.layouts')

@section('header')
@parent
@section('title',"首页")
@stop

@section('content')
<link rel="stylesheet" href="/static/moco/v1.0/dist/css/moco.min.css?t=201709111715" type="text/css" />
<link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=2.5,course/course_program_detail.css,landingpage.css?v=201709111715" type="text/css" />

<div id="main" style="background-color:#edeff0;">
    <div style="width:100%px;height:550px;background-color:black;">
        <img src="../public/landp_banner.jpg" style="margin-left:260px;">
    </div>
    <div class="beginpro">
        <a href="{{url('course_index')}}" id="js-beginpro" class="land-join-btn">加入学习</a>
    </div>


</div>

@stop

@section('footer')
@parent
@stop


