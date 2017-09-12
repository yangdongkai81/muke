


@section('content')
    <center>
        <h2 style="color:red">欢迎来到后台！！！</h2>
    </center>
@endsection

@section('top')
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
    <link rel="stylesheet" href="/public/css/pintuer.css">
    <link rel="stylesheet" href="/public/css/admin.css">
    <script src="/public/js/jquery.js"></script>   
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="/public/images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href="" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="login.html"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>基本设置</h2>
  <ul style="display:block">
    <li><a href="info.html" target="right"><span class="icon-caret-right"></span>网站设置</a></li>
    <li><a href="pass.html" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
  </ul>   

  <h2><span class="icon-user"></span>回复用户</h2>
  <ul style="display:block">
    <li><a href='http://home.wolive.cc' user_id='' username='' avatar='' web_id='fuhei' id='workerman-kefu' target="right"><span class="icon-caret-right"></span>回复用户</a></li>
  </ul>   
  <h2><span class="icon-pencil-square-o"></span>课程管理</h2>
  <ul>
   <li><a href="mold_course" target="right"><span class="icon-caret-right"></span>课程上传</a></li>
    <li><a href="mold_chapter" target="right"><span class="icon-caret-right"></span>章节生成</a></li>
    <li><a href="mold_void" target="right"><span class="icon-caret-right"></span>视频上传</a></li>
    <li><a href="admin_mold" target="right"><span class="icon-caret-right"></span>课程类型管理</a></li>
    <li><a href="admin_cate" target="right"><span class="icon-caret-right"></span>课程分类管理</a></li>        
  </ul> 
  <h2><span class="icon-pencil-square-o"></span>实战管理</h2>
        <ul>
            <li><a href="admin_charge_index" target="right"><span class="icon-caret-right"></span>课程添加</a></li>
            <li><a href="admin_charge_type" target="right"><span class="icon-caret-right"></span>课程类型管理</a></li>
            <li><a href="admin_charge_direction" target="right"><span class="icon-caret-right"></span>课程方向管理</a></li>
        </ul> 
  <h2><span class="icon-pencil-square-o"></span>手记管理</h2>
    <ul>
        <li><a href="{{ url('article_manage') }}" target="right"><span class="icon-caret-right"></span>手记列表</a></li>
    </ul> 

    <h2><span class="icon-pencil-square-o"></span>积分管理</h2>
    <ul>
        <li><a href="{{ url('admin_add') }}" target="right"><span class="icon-caret-right"></span>积分添加</a></li>
        <li><a href="{{ url('show') }}" target="right"><span class="icon-caret-right"></span>积分列表</a></li>
    </ul> 
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
</script>
<ul class="bread">
  <li><a href="{:U('Index/info')}" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
  <li><b>当前语言：</b><span style="color:red;">中文</php></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
</ul>
<div class="admin">
  <div scrolling="auto" rameborder="0" src="" name="right" width="100%" height="100%">
@show
@yield('content') 

@section('foot')
  </div>
</div>

</body>
</html>
@show


