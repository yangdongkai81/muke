
    
@extends('layouts.layouts')

@section('header')
    @parent
   

   <link rel="stylesheet" href="http://coding.imooc.com/static/module/??common/css/common-less.css,course/css/course-less.css,course/css/precon-less.css,class/common/css/index-less.css?v=1505129897" type="text/css" />
   <link rel="stylesheet" type="text/css" href="/public/css/sz.ttf">
@stop

@section('content')   

<body>    
     
     
<div class="course-class-infos ">
    <div class="w pr">
		<div class="path">
			<a href="http://coding.imooc.com/">实战</a>
			<i class="path-split">\</i><span>{{$ke[0]->course_name}}</span>
		</div>
		
	
		
		<div class="info-warp tc">
			<div style="height:50px;">
				<h1 style="font:50px/0.1 Tahoma,Helvetica,Arial,'宋体',sans-serif;">{{$ke[0]->course_name}}</h1>
			</div>
			
			
			
			
			
			<div class="info-bar tc">
				<div class="statics clearfix">

					<div class="static-item first">

						<span class="meta">难度</span>
						<span class="meta-value"><strong>中级</strong></span>
					</div>
					<div class="static-item static-time">
						<span class="meta">时长</span>
						<span class="meta-value"><strong>16小时</strong></span>
						<em></em>
					</div>
					<div class="static-item">
						<span class="meta">学习人数</span>
						<span class="meta-value"><strong>67</strong></span>
						<em></em>
					</div>
					
				</div>
			</div>
			
			<div class="price-box">
				<span class="num clearfix">
										
										<span class="discount-price">
						<span class="baseline baseline-y">
						<span class="new-y">¥</span>
						<span class="cur-price"><b>{{$ke[0]->price}}</b><b class="sub">.00</b></span>
						</span>
					</span>
										
				</span>

				
															</div>

			<div class="clearfix btnwarp">
			<?php if ($is_show!=0) { ?>
			    <a href="{{url('course_learn').'/'.$ke[0]->id}}" class="js-buy-trigger buy-class-btn class-btn1 buynow-btn" data-cid="135" data-pay="0" id="buy-trigger">
						<span>立即播放</span>
					</a>
			<?php }else{ ?>

                	<a href="{{url('cart_add')}}/{{$ke[0]->id}}" class="js-buy-trigger buy-class-btn class-btn1 buynow-btn" data-cid="135" data-pay="0" id="buy-trigger">
						<span>立即购买</span>
					</a>
			<?php	} ?>
     				<!-- <a href="{{url('cart_add')}}/{{$ke[0]->id}}" class="js-buy-trigger buy-class-btn class-btn1 buynow-btn" data-cid="135" data-pay="0" id="buy-trigger">
						<span>立即购买</span>
					</a> -->
					
					
													<div class="preview-tip"> 			
								</div>
			</div>

			<!-- 调价说明 -->
						

		</div>
	</div>
			
    <div class="info-bg" id="js-info-bg">
        <div class="cover-img-wrap" style="background-image:url(/public/images/59ae66c00001a1dc20000520.jpg)"></div>     
    </div>
</div>

<div class="course-infos-t">
<div id="Anchor"></div>
<div class="comp-tab-t js-comp-tab">
	<ul class="clearfix">
		<li class="comp-tab-item-first comp-tab-item active">
			<a href="javascript:void(0);"><em id="kk">课程介绍</em></a>
		</li>
				<li class="comp-tab-item ">
			<a href="javascript:void(0);"><em id="zhang">课程章节</em></a>
		</li>
		<li class="comp-tab-item ">
			<a href="javascript:void(0);" ><em id="ping">用户评价</em></a>
			<span>4</span>
		</li>
			
	</ul>
</div><input type="hidden" id="kid" value="{{$kid}}">     {{csrf_field()}}

 <div id="sh"  style="width:700px;margin:0 auto;display:none;" >
     <?php foreach ($zhang as $key => $v) {?>

            <!-- 课程章节 --> 
            <div class="mod-chapters" >
                                        <div class="chapter chapter-active">
                    <!-- 章节标题 -->
       
       
                    <h3>
                      
                       
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

<div style="display:none;" id="pi">
            <div class="publish-wrap publish-wrap-pl">
                <div class="pl-input-wrap clearfix">
               
                    <div id="js-pl-input-fake" class="pl-input-inner l" style="margin-left:350px;">
                       
                       <textarea id="js-pl-textarea" class="js-placeholder" placeholder="扯淡、吐槽、表扬、鼓励……想说啥就说啥！"  style="width:764px;height:100px; border:solid 1px #DDDDDD; resize:none;  margin:20px;20px;20px;20px;"></textarea>
                      
                    </div>
             
                        <div class="verify-code l"></div>
              
             <button style="width: 80px; cursor: pointer;
 
line-height: 38px;
text-align: center;
font-weight: bold;
color: #FFFFFF;
background-color: #00AA00;
text-shadow:1px 1px 1px #3333;
border-radius: 5px;
position: relative;
overflow: hidden;margin-left:1058px;" id="fa">发表评论</button>
              
                </div>

            </div>
       <br/>
        <div id="plLoadListData">
           <div style="width:834px;margin:0 auto;">
              <ul id="yan"> 
            <?php foreach ($arr as $key => $v) {?>  
           
                   <li class="pl-list clearfix" style="border-top:2px #DDDDDD solid; border-bottom:2px #DDDDDD solid;">
                        <div class="pl-list-main" style="margin:30px;30px;40px;40px;"> 
                                 <a href="#" target="_blank"  style="font-size:16px;color:#AAAAAA">发言者：<?=$v->user_id?></a>
                                 <div class="pl-list-content"><?=$v->user_desc?></div>  
                                 <div class="pl-list-btm clearfix">
                                      <span style="font-size:12px;color:#AAAAAA">时间: <?=date('Y-m-d H:i:s',$v->add_time)?></span>
                                 </div> 
                        </div> 
                   </li> 
            <?php  } ?>
              </ul>
           </div>
        </div>
    </div>

<div  id="ss">
<div class="info-video" style=" display: block; background-image: url(http://szimg.mukewang.com/59ae66c60001d09a09000500.jpg);">
	<div class="info-video-box">
		<div class="info-name">学无止境！</div>
		<div class="info-desc">这是一门在工作中非常实用的课程，根据新闻类App业务逻辑，采用主流的RESTful 接口方式，带你在真实的项目实战中，开发一套完整的、安全的、高效的App后台系统，并带你学会API数据传输安全、第三方消息推送，前后台联调，App 复杂登录等多种实用技术</div>
		
	</div>
		
	<div class="comp-tabs-pannel" style="display: none;" data-purl="http://szimg.mukewang.com/59ae66c60001d09a09000500.jpg" data-vurl="http://v3.mukewang.com/shizhan/59ae81d2e420e5c0518b45a0/H.mp4" id="js-video-content">
		<div class="desc-short">
		<a href="javascript:void(0);" class="js-close-video close-video sz-close-h"></a>
		<div class="video-container" id="video-container"></div>
		</div>
	</div>
</div>
</div>
	</div>		
<div class="infolayout clearfix">
	



	
		
	
		<div class="envir-box" id="Envir">
		<h1>环境参数</h1>
		<div class="detail-box">
			<ul class="clearfix">
								<li class="l ">
					<span class="detail-tag">技术语言</span>
					<i class="triangle"></i>
					<span class="detail">PHP</span>
				</li>
								<li class="l ">
					<span class="detail-tag">Mysql</span>
					<i class="triangle"></i>
					<span class="detail"> 5.5.42</span>
				</li>
								<li class="l ">
					<span class="detail-tag">接口调试工具</span>
					<i class="triangle"></i>
					<span class="detail">postman</span>
				</li>
								<li class="l ">
					<span class="detail-tag">IDE</span>
					<i class="triangle"></i>
					<span class="detail"> phpstorm</span>
				</li>
								<li class="l ">
					<span class="detail-tag">框架</span>
					<i class="triangle"></i>
					<span class="detail">Thinkphp 5.0.10</span>
				</li>
								<li class="l ">
					<span class="detail-tag">工具</span>
					<i class="triangle"></i>
					<span class="detail">Androidstudio</span>
				</li>
							</ul>
		</div>
	</div>
	
	
		

	


</div>


        






@endsection

@section('footer')
    @parent
@stop

<script src="/public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
  

 $("#zhang").live('click',function(){
    $("#sh").show();
    $("#pi").hide();
    $("#ss").hide();
 
 })

  $("#kk").live('click',function(){
    $("#ss").show();
    $("#sh").hide();
    $("#pi").hide();
 })

 $("#ping").live('click',function(){
    $("#pi").show();
    $("#sh").hide();
    $("#ss").hide();
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
                           str+='<li class="pl-list clearfix" style="border-top:2px #DDDDDD solid; border-bottom:2px #DDDDDD solid;">';
                           str+='<div class="pl-list-main" style="margin:30px;30px;40px;40px;"><a href="#" target="_blank"  style="font-size:16px;color:#AAAAAA">发言者：'+v.user_id+'</a>';
                           str+='<div class="pl-list-content">'+v.user_desc+'</div>';
                           str+='<div class="pl-list-btm clearfix"><span style="font-size:12px;color:#AAAAAA">时间：'+v.add_time+'</span>';
                           str+='</div></div></li>';
                        })
                        $('#yan').html(str);
                        $("#js-pl-textarea").val('');
                    }
                }
        });

 })
</script>