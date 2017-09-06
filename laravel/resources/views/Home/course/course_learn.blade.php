
@extends('layouts.layouts')

@section('header')
    @parent
   



<link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=2.5,course/common-less.css,course/view-less.css,course/learn-less.css,u/dynamic/home-less.css?v=201708281028" type="text/css" />

@stop

@section('content')


<div id="main">

<div class="course-infos">
    <div class="w pr">
        <div class="path">  
            <a href="http://www.imooc.com/course/list"></a>
                        <i class="path-split"></i><a href="http://www.imooc.com/course/list?c=fe"></a>
                                    <i class="path-split"></i><a href="http://www.imooc.com/course/list?c=html"></a>
                        <i class="path-split"></i><a href="http://www.imooc.com/learn/9"><span></span></a>
        </div>
        <div class="hd clearfix">
            <h2 class="l">{{$ke[0]->course_name}}</h2>
                    </div>

        <div class="statics clearfix">
            
                        <div class="moco-btn l learn-btn green-btn red-btn"> 

               程序人生！
                <i class="follow-action js-follow-action icon-star_outline" data-cid="9" data-cmd="follow" title="收藏"></i>
            </div>
                        
            
                        
            <div class="static-item l">
                <span class="meta">学习人数</span>
                <span class="meta-value js-learn-num">771583</span>
                            </div>
            <div class="static-item l">
                <span class="meta">难度级别</span>
                <span class="meta-value">{{$ke[0]->leve}}</span>
                <em></em>
            </div>
            <div class="static-item l">
                <span class="meta">课程时长</span>
                <span class="meta-value"> 9小时18分</span>
                <em></em>
            </div>
            <div class="static-item l score-btn">
                <span class="meta">综合评分</span>
                <span class="meta-value">9.5</span>
                <em></em>
                
                                
                <div class="score-wrap icon-drop_up triangle">
                    <div class="score-box">
                        <a href="http://www.imooc.com/coursescore/9" class="person-num">
                            <span class="person-num l">7364人评价</span>
                        </a>
                                                                                <a href="http://www.imooc.com/coursescore/9?page=1" class="evaluation-btn r">查看评价</a>
                                                                            <div class="score-detail-box">
                            <div class="score-static-item">
                                <span class="meta-value">9.8</span>
                                <span class="meta">内容实用</span>
                            </div>
                            <div class="score-static-item">
                                <span class="meta-value">9.5</span>
                                <span class="meta">简洁易懂</span>
                                <em></em>
                            </div>
                            <div class="score-static-item">
                                <span class="meta-value">9.2</span>
                                <span class="meta">逻辑清晰</span>
                                <em></em>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        <div class="extra">
            <!-- credit -->
            
            <!-- share -->
            <div class="share-action r bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1503649453881">
                <a href="javascript:;" class="share wx js-share icon-share-weichat" data-cmd="weixin" title="分享到微信"></a>
                <a href="javascript:;" class="share qq js-share icon-share-qq" data-cmd="qzone" title="分享到QQ空间"></a>
                <a href="javascript:;" class="share sina js-share icon-share-weibo" data-cmd="tsina" title="分享到新浪微博"></a>
            </div>
        </div>
    </div>
    <div class="info-bg" id="js-info-bg">
        <div class="cover-img-wrap">
        <img data-src="http://img.mukewang.com/55af49ad000116a506000338.jpg" alt="" style="display: none" id="js-cover-img">
        </div>
        <div class="cover-mask"></div>
    <canvas width="1349" height="212" class="cover-canvas" id="js-cover-canvas"></canvas></div>
    
        
</div>


<div class="course-info-main clearfix w">
    <div class="content-wrap">
        <div class="content">
                        <!-- 课程公告 -->
                        <!-- 课程简介 -->
            <div class="course-brief">
                <p class="auto-wrap">简介：本课程从最基本的概念开始讲起，步步深入，带领大家学习HTML、CSS样式基础知识，了解各种常用标签的意义以及基本用法，后半部分教程主要讲解CSS样式代码添加，为后面的案例课程打下基础。</p>
            </div>
            <!-- 课程简介 end -->
            <div class="mod-tab-menu ">
	<ul class="course-menu clearfix">
		<li><a class="ui-tabs-active active" id="learnOn" href="javascript:void(0)" ><span id="zhang">章节</span></a></li>
		<li><a id="commentOn" class="" href="javascript:void(0)" ><span id="ping">评论</span></a></li>
		
	    <!--
        <li><a id="wikiOn" class="" href="/wiki/9">WIKI</a></li>
        -->
	</ul>
	<input type="hidden" value="{{$kid}}" id="kid">
</div><!-- 课程面板 -->
     <div id="sh" >
     <?php foreach ($zhang as $key => $v) {?>

            <!-- 课程章节 --> 
            <div class="mod-chapters" >
                                        <div class="chapter chapter-active">
                    <!-- 章节标题 -->
       
       
                    <h3>
                      
                        <span class="icon-drop_down js-close js-open" id="{{$v->id}}"></span>
                        <strong>
                            <i class="icon-chapter"></i>
                            {{$v->chapter_name}}
                            <div class="icon-info chapter-info">
                                <i class="icon-drop_up triangle">
                                    <div class="chapter-introubox">
                                        <div class="chapter-content">本章节主要讲解html和css样式的关系，以及html标签、html文件结构、head标签,最后讲解了在html中的注释代码的作用。</div>
                                    </div>
                                </i>
                            </div>
                        </strong>
                        
                    </h3>
                    <!-- 章节标题 end -->
                    <!-- 章节小节 -->
                                        <ul class="video video{{$v->id}}"   >
                                    
                                           </ul>
                                    <!-- 章节小节 end -->
                </div>
             
                                    </div> 
     <?php } ?>   
            <!-- 课程章节 end -->
     </div>
    <!-- 评论开始   --> 
     <div style="display:none" id="pi">
            <div class="publish-wrap publish-wrap-pl">
                <div class="pl-input-wrap clearfix">
                 
                    <div id="js-pl-input-fake" class="pl-input-inner l">
                       <textarea id="js-pl-textarea" class="js-placeholder" placeholder="扯淡、吐槽、表扬、鼓励……想说啥就说啥！"  style="width:800px;height:100px; border:solid 1px #00AA00; resize:none;"></textarea>
                      
                    </div>
                    <div class="pl-input-btm input-btm clearfix">
                        <div class="verify-code l"></div>
                      
             <button style="width: 140px; cursor: pointer;
line-height: 38px;
text-align: center;
font-weight: bold;
color: #00000;
text-shadow:1px 1px 1px #3333;
border-radius: 5px;
margin:0 20px 20px 0;
position: relative;
overflow: hidden;margin-left:720px;" id="fa">发表评论</button>
                    </div>
                </div>

            </div>
       <br/>
        <div id="plLoadListData">
           <div class="pl-container">
              <ul id="yan"> 
            <?php foreach ($arr as $key => $v) {?>  
           
                   <li class="pl-list clearfix" style=" border-bottom:2px #DDDDDD solid;">
                        <div class="pl-list-main"> 
                                 <a href="#" target="_blank" ><?=$v->user_id?></a>
                                 <div class="pl-list-content"><?=$v->user_desc?></div>  
                                 <div class="pl-list-btm clearfix">
                                      <span class="pl-list-time l">时间:<?=$v->add_time?></span>
                                 </div> 
                        </div> 
                   </li> 
            <?php  } ?>
              </ul>
           </div>
        </div>
    </div>
    <!-- 评论结束 -->
        </div><!--content end-->
        <div class="aside r">
            <div class="bd">
    
         {{csrf_field()}}
        <div class="box mb40 js-usercard-box">
        <h4>讲师提示</h4>
                <div class="no-teacher"></div>
                        <div class="course-info-tip">
                        <dl class="first">
                <dt>课程须知</dt>
                <dd class="autowrap">没有任何WEB经验的WEB应用程序开发者、对WEB前端技术感兴趣的用户均可学习本教程。</dd>
            </dl>
                                    <dl>
                <dt>老师告诉你能学到什么？</dt>
                <dd class="autowrap">本教程代领大家轻松学习HTML、CSS样式基础知识，可以利用HTML、CSS样式技术制作出简单页面。</dd>
            </dl>
                    </div>
            </div>
    
    <div class="js-recom-box"><div class="box mb40 all-attention-box">                        <h4>大家都关注</h4>                            <div class="js-all-attention all-attention"><a href="http://www.imooc.com/topic/mysql" target="_blank" data-id="25" class="lake-blue fs18 bold">如何打造高性能MySQL数据库</a><a href="http://www.imooc.com/topic/fullstack" target="_blank" data-id="29" class="blue fs14 normal">全栈工程师</a><a href="http://www.imooc.com/topic/class" target="_blank" data-id="36" class="yellow fs16 normal">编程入门</a><a href="http://www.imooc.com/topic/azmianshi" target="_blank" data-id="28" class="orange fs20 bold">Android面试题 2017</a><a href="http://www.imooc.com/topic/nodejs" target="_blank" data-id="26" class="lake-blue fs18 bold">Node.js微信公众号开发</a><a href="http://www.imooc.com/topic/jquery" target="_blank" data-id="24" class="green fs14 normal">用jQuery实现一个小应用</a><a href="http://www.imooc.com/topic/spring" target="_blank" data-id="23" class="blue fs16 bold">Java Spring技术栈</a><a href="http://www.imooc.com/topic/fangzhan" target="_blank" data-id="27" class="orange fs20 normal">如何仿站</a></div></div>
<div class="box mb40 recom-course-list-box">                        <h4>推荐课程</h4>                        <ul class="js-recom-course recom-course-list clearfix"><li class="clearfix"><a href="http://www.imooc.com/learn/866" class="clearfix" target="_blank"><div class="l course-img" style="background-image: url(http://www.imooc.com/courseimg/s/cover020_s.jpg);"><div class="cart-color orange"></div></div><div class="l content-box">                            <p class="smalle-title">前端性能优化-通用的缓存SDK</p>                            <p class="content-text" title="性能优化成神之路的必看之课，是前端性能优化基础简介的后续篇章，作为一门前端性能优化的进阶课程，本课程介绍了常用的性能优化方法，以及老师自己在工作中摸索出来的，并且在大厂使用的课程。">性能优化成神之路的必看之课，是前端性能优化基础简介的后续篇章，作为一门前端性能优化的进阶课程，本课程介绍了常用的性能优化方法，以及老师自己在工作中摸索出来的，并且在大厂使用的课程。</p>                            <div class="clearfix learn-detail">中级<span>·</span>5043人在学</div>                        </div>                    </a>                </li><li class="clearfix"><a href="http://www.imooc.com/learn/755" class="clearfix" target="_blank"><div class="l course-img" style="background-image: url(http://www.imooc.com/courseimg/s/cover033_s.jpg);"><div class="cart-color orange"></div></div><div class="l content-box">                            <p class="smalle-title">CSS深入理解之border</p>                            <p class="content-text" title="本课程将深入讲解CSS中的border属性，深入介绍border-color之间的关系，以及border与background定位、border与透明边框，并教你如果使用border进行图形构建，以及如何借助border使用有限标签完成我们的布局。">本课程将深入讲解CSS中的border属性，深入介绍border-color之间的关系，以及border与background定位、border与透明边框，并教你如果使用border进行图形构建，以及如何借助border使用有限标签完成我们的布局。</p>                            <div class="clearfix learn-detail">高级<span>·</span>36871人在学</div>                        </div>                    </a>                </li><li class="clearfix"><a href="http://coding.imooc.com/class/129.html" class="clearfix" target="_blank"><div class="l course-img" style="background-image: url(http://szimg.mukewang.com/59897b1600011ec805400300-360-202.jpg);"><div class="cart-color orange"></div></div><div class="l content-box">                            <p class="smalle-title">前端跳槽面试必备技巧</p>                            <p class="content-text" title=""></p>                            <div class="clearfix learn-detail">中级<span>·</span>290人在学</div>                        </div>                    </a>                </li></ul></div></div>

</div>        </div>
    </div>
    <div class="clear"></div>

</div>
<!-- 视频介绍 -->
<div id="js-video-wrap" class="video pop-video" style="display:none">
    <div class="video_box" id="js-video"></div>
    <a href="javascript:;" class="pop-close icon-close"></a>
</div>

</div>

@endsection

@section('footer')
    @parent
@stop
<script src="/public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
    $('.js-close').live('click',function(){
      var id = $(this).attr('id');
      var _token=$("input[name='_token']").val();
        $.ajax({
                type: "POST",
                url: "/public/course_ajax",
                data: "id="+id+"&_token="+_token,
                dataType:'json',
                success: function(msg){
                  str='';
                  $(msg).each(function(k,v){
                       str+='<li><a href="{{url('course_bo')}}/'+v.id+'" class="J-media-item"><i class="icon-code type"></i>'+v.title+'<button class="r moco-btn moco-btn-red preview-btn">开始学习</button></a></li>';
                  })
                $(".video"+id).html(str)
                }
        });
    })

 $("#zhang").live('click',function(){
    $("#sh").show();
    $("#pi").hide();
 })

 $("#ping").live('click',function(){
    $("#pi").show();
    $("#sh").hide();
 })
 $("#fa").live('click',function(){
    var html = $("#js-pl-textarea").val();
    var kid = $("#kid").val();
    var _token=$("input[name='_token']").val();
        $.ajax({
                type: "POST",
                url: "{{url('course_fa')}}",
                data: "content="+html+"&kid="+kid+"&_token="+_token,
                dataType:"json",
                success: function(msg){
                    if (msg==2) {
                        alert('发表失败！');
                    }else{
                        str='';
                        $.each(msg,function(k,v){
                           str+='<li class="pl-list clearfix" style=" border-bottom:2px #DDDDDD solid;">';
                           str+='<div class="pl-list-main"><a href="#" target="_blank" >发言者：'+v.user_id+'</a>';
                           str+='<div class="pl-list-content">'+v.user_desc+'</div>';
                           str+='<div class="pl-list-btm clearfix"><span class="pl-list-time l">时间：'+v.add_time+'</span>';
                           str+='</div></div></li>';
                        })
                        $('#yan').html(str);
                        $("#js-pl-textarea").val('');
                    }
                }
        });

 })
</script>

                         
                                 
                                   
                                 
                                      
                                 
                         
                    