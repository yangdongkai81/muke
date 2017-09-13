@extends('layouts.layouts')

@section('header')
@parent
@section('title','猿问')
@stop

@section('content')
<link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=2.5,wenda/save-less.css,course/inc/course_credit-less.css?v=201708281028" type="text/css" />

<div id="main" style="margin-top:70px;">


<div class="wenda clearfix">

    <div class="js-layout-change">
        <div class="l wenda-main">
            <div class="wd-top-slogan">
                <span>程序员自己的问答社区</span>
                <a class="js-quiz" href="{{url('question')}}">我要提问</a>
            </div>
            <div class="nav">
                <a href="{{url('question_index')}}" class="active">推荐</a>
                <a href="{{url('question_newest')}}" >最新</a>
                <a href="{{url('question_no_answer')}}" >等待回答</a>
                            </div><!--.nav end-->

            
                                    <!--推荐位-->

            <!--recommend end-->
                                   


            <!--左侧列表内容-->
            <div class="wenda-list">
@foreach ($data as $val)
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="javascript:void">
                <img src="http://img.mukewang.com/563afff200010a9f00900090.jpg" title=""/>
            </a>
                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="javascript:void">{{ $val['questions_type'] }}</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="{{url('question_one')}}/{{$val['id']}}" class="ques-con-content" title="&amp;#24819;&amp;#33258;&amp;#23398;java&amp;#65292;&amp;#25214;&amp;#24037;&amp;#20316;&amp;#65292;&amp;#33021;&amp;#25214;&amp;#21040;&amp;#21527;&amp;#65292;&amp;#27714;&amp;#22823;&amp;#31070;&amp;#25351;&amp;#25945;">{{$val['questions_title']}}</a>
        
    </div>
    </div><!--.ques-answer end-->
@endforeach

<div class="page">
        <a href="{{url('question_index')}}">首页</a>
        <a href="{{url('question_index')}}/<?php echo $page-1 ? $page-1 : 1; ?>">上一页</a>
        @for($i=1; $i<=$total; $i++)
            @if($i == $page)
            <a href="{{url('question_index')}}/{{$i}}" id="{{$i}}" class="active text-page-tag">{{ $i }}</a>
            @else
            <a href="{{url('question_index')}}/{{$i}}" id="{{$i}}" class="text-page-tag">{{ $i }}</a>
            @endif
        @endfor
        <a href="{{url('question_index')}}/<?php if ($page+1 > $total) { echo $total;} else { echo $page+1;}?>">下一页</a>
        <a href="{{url('question_index')}}/{{$total}}">尾页</a>
</div>

                
            </div>
        </div>

<div class="advertisement">
        
    </div><!--.advertisement end-->
            
<div class="leifeng-sort">
<div class="leifeng-sort">
@if(!empty($user))
<div class="user-about" style="margin-left:880px;">
    <div class="user-info">
        <div class="user-pic">
        </div>
        <div class="user-name">
            <a href="/u/5528284/bbs">{{$user['email']}}</a>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <span style="color:black;">积分:{{$integral['integral']}}</span>
                                </div>
    </div><!--.user-info end-->
    <div class="user-action">
        <span class="ques"><a href="{{url('integral_index')}}">积分商城</a><!-- <i></i>--></span>
        <span class="reply"><a href="{{url('user_index')}}">我的课程</a></span>
        <span class="follow"><a href="{{url('order_index')}}">订单中心</a></span>
    </div><!--.user-action end-->
</div><!--.user-about end-->
@else 

@endif
 <div class="r wenda-slider">
      <div class="panel bbs-sendques">
        <div class="panel-body">
          <h1>提问注意事项</h1>
          <dl>
            <dd>1、用户注册成功赠送十个积分，提问消耗两个积分，回答增加两个积分</dd>
            <dd>2、您是来解决问题？请先搜索是否已经有同类问题吧。这样您就省心少打字。</dd>
            <dd>3、没找到是么？就在发问题时精确描述你的问题，不要写与问题无关的内容哟；</dd>
            <dd>4、慕课讨论更热衷于解达您想要的答案。能引起思考和讨论的知识性问题；</dd>
            <dt>问答禁止这些提问</dt>
            <dd>1、禁止发布求职、交易、推广、广告类与问答无关信息将一律清理。</dd>
            <dd>2、尽可能详细描述您的问题，如标题与内容不符，或与问答无关的信息将被删除扣分。</dd>
            <dd>3、问答刷屏用户一律冻结帐号</dd>
          </dl>
        </div>
      </div>
</div>    

            
           

        </div>
    </div>
</div>
<!-- <div class="container clearfix"> -->
</div>


<!-- </div> -->




@stop

@section('header')
@parent
@stop
