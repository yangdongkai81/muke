
<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title>登录表单</title>

	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->

	<!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">



</head>
<!-- //Head -->

<!-- Body -->
<body>

	<h1>注册表单</h1>

	<div class="container w3layouts agileits">

		<div class="register w3layouts agileits">
			<h2>注 册</h2>
			<form action="{{url('login_registerHandle')}}" method="post">
			{!! csrf_field() !!}
				<input type="text" Name="email" placeholder="邮箱" required="">
				<input type="password" Name="pwd" placeholder="密码" required="">
				<input type="hidden" name="_token" value="{csrf_token()}" class="token">
				<input type="text" Name="phone" placeholder="输入手机号" required="" style="width:260px" id="tel"><a style="color:white" href="#" class="btn">获取验证码</a>
				<input type="text" Name="Code" placeholder="验证码" required="">
			<div class="send-button w3layouts agileits">
				
					<input type="submit" value="免费注册">
				</form>
			</div>
			<a style="color:white" href="{{url('login_index')}}">已有账号?选择登录</a>
			<div class="clear"></div>
		</div>
			
			<div class="clear"></div>
		</div><div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
		

		<div class="clear"></div>

	</div>


</body>
<!-- //Body -->

</html>
<script src="jquery.js"></script>
<script>
	 $('.btn').click(function(){
        var tel = $.trim($('#tel').val());
        $('.btn').html('已发送手机验证码');
        $.post("{{url('login_Code')}}", {'tel':tel},function(res){
        var preg=/success/gi;
        if(preg.test(res)){
          $('.btn').html('已发送手机验证码');
        }else{
           $('.btn').html('获取验证码');
        }
        });
    });
</script>