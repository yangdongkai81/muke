<?php $__env->startSection('header'); ?>
    @parent

<link rel="stylesheet" href="/static/lib/layer/1.6.0/skin/layer.css"/>

<link rel="stylesheet" href="/static/moco/v1.0/dist/css/moco.min.css" type="text/css" />
    <link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=3,course/inc/course_common-less.css?t=4,common/pic-viewer-less.css,course/course_play-less.css,nanoscroller.css?v=201708319521" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<body>




<div id="studyMain">

 
<div id="bgarea" class="video-con">
   
       
            <video style="width: 100%; height: 604px;" controls autoplay>
              <source src="/public/uploads/<?php echo e($arr[0]->video_path); ?>" type="video/mp4">
              <source src="" type="video/webm">
            </video>
          
    <!--此处结构为练习题，视频，编程公用的侧栏-->
</div></div>

<div class="maybe-wenda" id="maybe-wenda" style="display: none;">
    <i class="icon-chat"></i>
    <p class="text">你发的评论可能会是问题？<br>是否将他发到问答中</p>
    <input class="btn ok" value="好的" id="wenda-ok" type="button">
    <input class="btn no" value="不用" id="wenda-no" type="button">
</div>
</div>

<div class="course-subcontainer clearfix">
  <div class="course-left">
      <ul class="course-menu course-video-menu clearfix js-course-menu" data-ower="all" data-sort="last">
    <li class="course-menu-item"><a class="active" href="javascript:void(0)" id="plMenu">评论</a></li>
    <!--
    <li class="course-menu-item"><a href="javascript:void(0)" id="wikiMenu">WIKI</a></li>
    -->
        </ul><?php echo e(csrf_field()); ?>

<div id="disArea" class="lists-container list-wrap">
    <div id="pl-content" class="list-tab-con">
        <div class="publish clearfix" id="discus-publish">
            <div class="publish-wrap publish-wrap-pl">
                <div class="pl-input-wrap clearfix">
                    
                    <div id="js-pl-input-fake" class="pl-input-inner l" style="margin-left:80px;">
                       <textarea id="js-pl-textarea" class="js-placeholder" placeholder="扯淡、吐槽、表扬、鼓励……想说啥就说啥！"></textarea>
                       <span class="num-limit"><span id="js-pl-limit">0</span>/300</span>
                    </div>
                    <div class="pl-input-btm input-btm clearfix">
                        <div class="verify-code l"></div>
                        <input id="js-pl-submit" class="r course-btn" zid="<?php echo e($arr[0]->chapter_id); ?>" value="发表评论" type="button">
                    </div>
                </div>

            </div>
        </div>
        <div id="plLoadListData"><div class="pl-container"> 

            <ul id="yan">  


               <li class="pl-list clearfix" > 
                  <div class="pl-list-avator">  </div> 
                  <div class="pl-list-main"> <div class="pl-list-nick"> 西兰花伟大炮</div>
                  <div class="pl-list-content">我在前面探探路，沙发哟</div>  
                  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2017-08-15</span>  </div>
               </li>  


            </ul>

            </div>
            <div class="page pl-list-page"></div>
          </div>
    </div>
    <div id="qa-content" class="list-tab-con" style="display:none">
        <div id="qaLoadListData"><div class="sortlist"> 			<div class="ordertab clearfix"> 				<a href="javascript:void(0)" hidefocus="true" data-order="1" class="quealltab onactive">全部</a>				<a href="javascript:void(0)" hidefocus="true" data-order="2" class="quealltab ">精华</a>			</div>		</div><div class="answertabcon"></div><div class="page discuss-list-page"></div></div>
    </div>
    <div id="note-content" class="list-tab-con" style="display:none">
        <div id="noteLoadListData">
        <div class="course-tool-bar clearfix js-select-state">			<div class="tool-left l js-all-state">		        <a href="javascript:;" class="sort-item active" data-sort="last">最新</a>		        <a href="javascript:;" class="sort-item" data-sort="sugg">点赞</a>	        </div>	        <div class="tool-right r">		        <div class="switch js-ower" data-sort="last">		    		<div class="switch-line"></div>		    		<div class="round js-lookme-round"></div>		  		</div>		        <span class="tool-item">只看我的</span>		    </div>		</div><div id="course_note" class="course_note"></div><div class="page note-list-page"></div></div>
    </div>
    <div id="wiki-content" class="list-tab-con" style="display:none;">
        <div id="wikiLoadListData">
        <div id="course_wiki" class="course_wiki"></div><div class="page wiki-list-page"></div></div>
    </div>
    <div id="mate-content" class="list-tab-con" style="display:none;">
        <div id="mateLoadListData">
        <div class="othterscode-container"></div><div class="page othterscode-list-page"></div></div>
    </div>

</div>
  </div>
  <div class="course-right clearfix">
       
  <div class="js-recom-box"><div class="box mb40 all-attention-box">                        <h4>大家都关注</h4>                            <div class="js-all-attention all-attention"><a href="http://www.imooc.com/topic/phpframe" target="_blank" data-id="7" class="orange fs16 bold">手把手教会你PHP框架</a><a href="http://www.imooc.com/topic/job" target="_blank" data-id="50" class="yellow fs18 normal">求职实战课程</a><a href="http://www.imooc.com/topic/yii" target="_blank" data-id="20" class="green fs14 bold">Yii框架实战项目</a><a href="http://www.imooc.com/topic/fangzhan" target="_blank" data-id="27" class="lake-blue fs20 normal">如何仿站</a><a href="http://www.imooc.com/topic/php" target="_blank" data-id="40" class="orange fs16 bold">PHP入门教程</a><a href="http://www.imooc.com/topic/thinkphp" target="_blank" data-id="19" class="yellow fs18 normal">Thinkphp实例教程</a><a href="http://www.imooc.com/topic/list" target="_blank" data-id="45" class="green fs14 bold">互联网职场必杀技</a><a href="http://www.imooc.com/topic/ecom" target="_blank" data-id="8" class="lake-blue fs20 bold">电商系统开发</a></div></div>
<div class="box mb40 recom-course-list-box">                        <h4>推荐课程</h4>                        <ul class="js-recom-course recom-course-list clearfix"><li class="clearfix"><a href="http://www.imooc.com/learn/616" class="clearfix" target="_blank"><div class="l course-img" style="background-image: url(http://www.imooc.com/courseimg/s/cover018_s.jpg);"><div class="cart-color purple"></div></div><div class="l content-box">                            <p class="smalle-title">PHP微信公众平台开发高级篇—自定义菜单</p>                            <p class="content-text" title="自定义菜单是微信开发中必不可少的环节，掌握好自定义菜单可以让你的公众号与微信用户之间实现更便捷的交互。">自定义菜单是微信开发中必不可少的环节，掌握好自定义菜单可以让你的公众号与微信用户之间实现更便捷的交互。</p>                            <div class="clearfix learn-detail">高级<span>·</span>22854人在学</div>                        </div>                    </a>                </li><li class="clearfix"><a href="http://coding.imooc.com/class/133.html" class="clearfix" target="_blank"><div class="l course-img" style="background-image: url(http://szimg.mukewang.com/59a007f600018d1f05400300-360-202.jpg);"><div class="cart-color purple"></div></div><div class="l content-box">                            <p class="smalle-title">360大牛全面解读PHP面试</p>                            <p class="content-text" title=""></p>                            <div class="clearfix learn-detail">中级<span>·</span>73人在学</div>                        </div>                    </a>                </li><li class="clearfix"><a href="http://www.imooc.com/learn/419" class="clearfix" target="_blank"><div class="l course-img" style="background-image: url(http://www.imooc.com/courseimg/s/cover029_s.jpg);"><div class="cart-color purple"></div></div><div class="l content-box">                            <p class="smalle-title">PHP+MySQL分页原理实现</p>                            <p class="content-text" title="还在为无法完成一个令人赏心悦目的分页功能而烦恼吗？本课程将一步一步，由简入繁的剖析其中的原理，和大家共同完成一个功能完善的分页。">还在为无法完成一个令人赏心悦目的分页功能而烦恼吗？本课程将一步一步，由简入繁的剖析其中的原理，和大家共同完成一个功能完善的分页。</p>                            <div class="clearfix learn-detail">中级<span>·</span>34109人在学</div>                        </div>                    </a>                </li></ul></div></div>
  <div class="wendalist js-right-wenda">
    <div class="course-right-title">
        <h3>猿问推荐</h3>
        <a href="http://www.imooc.com/wenda/?block_id=tuijian_yw" target="_blank" class="more">更多</a> 
    </div>

      <ul>
      </ul>
  </div>
  <div class="articlelist js-right-article" style="display: block;">
    <div class="course-right-title">
        <h3>手记推荐</h3>
        <a href="http://www.imooc.com/article/?block_id=tuijian_wz" target="_blank" class="more">更多</a> 
    </div>
    <div class="course-right-content">
      
    </div>
    <ul><li><a href="http://www.imooc.com/article/20170?block_id=tuijian_wz" target="_blank">PHP核心技术与最佳实践  - PHP 面向对象思想的理解</a></li><li><a href="http://www.imooc.com/article/20167?block_id=tuijian_wz" target="_blank">PHP不使用phpexcel导出</a></li><li><a href="http://www.imooc.com/article/20166?block_id=tuijian_wz" target="_blank">sqlmap的使用（检测SQL注入的漏洞）以及防护SQL注入</a></li><li><a href="http://www.imooc.com/article/20165?block_id=tuijian_wz" target="_blank">二十二章 PHP超链接（RBAC）</a></li><li><a href="http://www.imooc.com/article/20158?block_id=tuijian_wz" target="_blank">MONGODB的运用场景！！</a></li></ul>
  </div>  </div>
</div>
<script src="/public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(".course-btn").live('click',function(){
    var html = $("#js-pl-textarea").val();
    var zid = $(".course-btn").attr('zid');
   
    var _token=$("input[name='_token']").val();
        $.ajax({
                type: "POST",
                url: "<?php echo e(url('course_zfa')); ?>",
                data: "content="+html+"&zid="+zid+"&_token="+_token,
                dataType:"json",
                success: function(msg){
                    if (msg==2) {
                        alert('发表失败！');
                    }else{
                        str='';
                        $.each(msg,function(k,v){
                           str+='<li class="pl-list clearfix">';
                           str+='<div class="pl-list-avator"></div>';
                           str+='<div class="pl-list-main"><div class="pl-list-nick"> '+v.user_id+'</div>';
                           str+='<div class="pl-list-content">'+v.user_desc+'</div>';
                           str+='<div class="pl-list-btm clearfix"><span class="pl-list-time l">时间: '+v.add_time+'</span></div>';
                           str+='</li>';
                        })
                        $('#yan').html(str);
                        $("#js-pl-textarea").val('');
                    }
                }
        });

 })
</script>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    @parent
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>