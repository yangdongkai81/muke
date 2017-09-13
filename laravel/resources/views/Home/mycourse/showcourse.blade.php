@extends('layouts.layouts')

@section('header')
@parent
@section('title',"个人中心")
@stop

@section('content')
<link rel="stylesheet" href="/static/lib/layer/1.6.0/skin/layer.css" />



<link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=2.5,u/u_common-less.css,u/courses/time-less.css?v=201709041621" type="text/css" />

<div id="main">

<div class="bg-other user-head-info">
    <div class="user-info">
        <h3 class="user-name clearfix">
            <span><?php echo $data1->email ?></span>
            
            
                                   </h3>
        <!--25-->
        <p class="about-info">
            
        <span class=' gender ' title=' 男 '></span>
        
         
        
                
                    
                        <span class="u-info-learn">
                            学习时长 <em> 1分</em>
                    </span>
                <span class='u-info-credit'>
           
                            <a href='/u/5760367/credit'>积分<em>1</em></a>
                  
        </span>
        <span class="u-info-mp">
           
                                <a href='/u/5760367/experience'>经验<em>15</em></a>
                        </span>

        </p>
                 <p class="user-desc">这位同学很懒，木有签名的说～</p>       
                
        <div class="study-info clearfix">
                                <div class="item follows">
                                                <a href='/u/5760367/follows'><em>1</em></a>
                                        
                        <span>关注</span>
                    </div>
                    <div class="item followers">
                                                    <a href='/u/5760367/fans'><em>0</em></a>
                                                <span>粉丝</span>
                    </div>
                        
        </div><!--.study-info end-->
    </div><!-- .user-info end -->
</div><!-- .big-pic end -->
<div class="wrap">
        
<div class="slider">
        <div class="user-pic" data-is-fans="" data-is-follows="">
            <div class="user-pic-bg"></div><!--user-pic-big end-->
            <img class='img' src="http://img1.mukewang.com/59a6ad970001c04901000100-200-200.jpg" alt=""/>
            
                        <div class="set-btn"><a href="/user/setbindsns"><i class="icon-set"></i></a></div>
                    

                    </div>

        <ul>

                
             
         <li>
            <a href="{{url('index_index')}}" >
            <i class="icon-home"></i><span>主页</span><b class="icon-drop_right"></b>
            </a>
        </li>
        
    
                         
                     
            <li>
            <a href="{{url('mycourse_index')}}" class="active">
            <i class="icon-tick"></i><span>课程</span><b class="icon-drop_right"></b>
            </a>
        </li>     
      
             
        </ul>
</div><!-- .slider end -->    <div class="u-container">
                   <div class="c-tab clearfix">
    <div class="tool-left l">
       
                 <a href="/u/5760367/courses" class="sort-item active">最近学习</a>
                   
        
    </div>
    <div class="tool-right r">
        <div class="tool-all">
            <span id="js-columall" class="tool-item">
                <span>

                                                                    全部课程
                                        
                </span>
       <i class="tool-item icon icon-drop_down"></i>
            </span>
            <ul id="js-columbd" class="all-cont" style="display:none;">

                                                                                                        <li><a data-id="0" href="/u/5760367/courses?sort=time&skill_id=0">全部课程</a></li>
                                                            <li><a data-id="1" href="/u/5760367/courses?sort=time&skill_id=1">PHP</a></li>
                                                            <li><a data-id="7" href="/u/5760367/courses?sort=time&skill_id=7">HTML/CSS</a></li>
                                                            <li><a data-id="1422" href="/u/5760367/courses?sort=time&skill_id=1422">测试</a></li>
                                                        <li><a href="/u/5760367/courses?sort=time">全部课程</a></li>
                                                    </ul>
     
        </div>
    </div>
</div>
<?php foreach($data as $k => $v){ ?>
    <div class="js-course-list my-space-course study-tl">
                <div class="clearfix tl-item  tl-item-first">
                        <span class="time">
                <b><?php echo date('Y',$v->img) ?></b>
                <em><?php echo date('m',$v->img) ?>月<?php echo date('d',$v->img) ?>日</em>
            </span>
            <div class="course-list course-list-m">
                <ul class="clearfix">
                                        <li class="course-one" data-courseid="865" data-uid="5760367">
                        <div class="course-list-img l">
                            <a href="/learn/865" target="_blank">
                                <img width="200" height="113" alt="浅析SQLmap" src="http://img.mukewang.com/5977373b0001318505910331-240-135.jpg" />
                            </a>
                        </div>
                          <div class="course-list-cont">
                            <h3 class="study-hd">
                                <a href="/learn/865" target="_blank"><?php echo $v->course_name ?></a>

                                                                                                            <span class="i-new">更新至4-1</span>
                                                                                                    <!-- 收藏和删除 -->
                                                                                                <div class="share-box clearfix">
                                    <div class="show-btn"><i class="icon-down2"></i></div>
                                    <div class="share-box-con courses-r">
                                        <a href="javascript:;" title="收藏" class="follow custom_f"><i class="icon icon-star_outline"></i></a>
                                        <a href="javascript:;" title="删除" class="del"><i class="icon icon-notdisplay"></i></a>
                                        
                                    </div>
                                </div>
                                                                                            </h3>
                                                        <div class="study-points">
                                <span class="i-left span-common">已学0%</span>
                                <span class="i-mid span-common">用时 0分</span>
                                <span class="i-right span-common">学习至2-1 安装SQLmap</span>
                            </div>
                                                        <div class="catog-points">
                                <span class="i-left span-common"><a href="/u/5760367/course/865/notes">笔记 <i>0</i></a></span>
                                <span class="i-mid span-common"><a href="/u/5760367/course/865/codes">代码 <i>0</i></a></span>
                                <span class="i-right span-common"><a href="/u/5760367/course/865/questions">问答 <i>0</i></a></span>

                                                                <a href="{{url('course_learn')}}/{{$v->id}}" target="_blank" class="btn-red continute-btn">继续学习</a>
                                
                            </div>
                        </div>
                        
                        
                    </li>
                                        
                                    </ul>
            </div>
        </div>


    
</div><!-- .container end -->
<?php } ?>
</div><!-- .wrap end-->

</div>

@stop

@section('footer')
@parent
@stop
