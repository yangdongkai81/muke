@extends('layouts/layout')

@section('header')
	@parent
	<link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=2.5,article/create-less.css?v=201708281028" type="text/css" />
	@section('title','发布手记')

	<link rel="stylesheet" type="text/css" href="./static/font/fontawesome-4.2.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="./static/font/css/wangEditor-1.1.0-min.css">
    <style type="text/css">
        body{
            padding: 0px 10px 0px 10px;
            color:#333333;
        }
    </style>
@stop

@section('content')
	<div class="opus-wrap clearfix">
<div class="article-wrap">
    <!-- article title -->
    <h2 class="article-title">发布手记</h2>

    <!-- article content -->
    <div class="article-form">
	<form action="article_insert" method="post" enctype="multipart/form-data">
      <!-- 标题 -->
      <div class="form-group">
          <span class="needed">*</span>
          <div class="form-ipt-wrap">
              <input type="text" id="art-title" name="title" class="art-title" placeholder="请在此输入标题，最多35中文字长度">
              <input  type="checkbox" name="original" value="">
              <label for="is-ori" class="ori-tip ">原创请勾选</label>
              <span class="orl-txt">（原创内容可获得5积分，审核后发放）</span>
              <p class="form-ipt-error"></p>
          </div>
      </div>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
      <!-- 上传图片 -->
      <div class="form-group clearfix">
          <div class="form-ipt-wrap">
              <div class="face-upload clearfix">

			  <div id="js-face-upload" class="l webuploader-container">
			  <div id="rt_rt_1boo6gv4p1mv51vmjfq5h8p1l6q1" style="position: absolute; top: 0px; left: 0px; width: 140px; height: 40px; overflow: hidden; bottom: auto; right: auto;"><label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);"></label>
			  </div>
			  </div>
			  <input type="file" name="file" class="webuploader-element-invisible" accept="">
			  <span class="l">封面为420*260像素的 PNG/JPG/GIF 格式图片</span>
			</div>
          </div>
      </div>
	<div>
	    <div id='txtDiv' style='border:1px solid #cccccc; height:240px;'>
	        <p>请输入内容...</p>
	    </div>
	    <div style='margin-top:10px;'>
	        <a href="javascript:;" id='btnHtml'>查看html</a>
	        <a href="javascript:;" id='btnText'>查看text</a>
	        <a href="javascript:;" id='btnHide'>隐藏</a>
	        <textarea id='textarea' name="content" style='width:100%; height:100px; margin-top:10px;'></textarea>
	    </div>
	</div>
      <!-- 选择标签 -->
      <div class="form-group tag-selector">
          <span class="needed">*</span>
          <div class="tag-selector-wrap">
            <input type="hidden" name="tags" id="tags">
			<p class="tip">选择手记合适的标签，最多可选3个</p>
				<div id="js-tags" class="tag-box clearfix">
				@foreach($tags as $tag)
				    <span class="for-choice aspect_type" id="{{ $tag->id }}">{{ $tag->tag_name }}</span>
				@endforeach
				</div>
			<p class="form-ipt-error"></p>
          </div><!-- tag-selector-wrap end -->
      </div><!-- tag-selector end -->


        <!-- 发布 -->
        <div class="form-group form-bottom" style="margin-bottom:50px;">
            <label for="" class="form-label l"></label>
            <div class="form-ipt-wrap">
                <button id="js-submit" class="btn btn-red">发布</button>
                <a target="_blank" href="/article/7791" class="edit-tip">手记频道发布手记规范</a>
                <span class="submit-tip js-submit-tip"></span>
                <p id="js-msg" class="form-ipt-error"></p>
            </div>
        </div>
		</form>
    </div>
</div>
</div>
@stop

@section('footer')
	@parent
	<!--引入 jquery.js-->
    <script src="./js/jquery.min.js" type="text/javascript"></script>
    <script>
    	var arr = [];
		$(document).on('click','.aspect_type',function(){
		    var len = arr.length;
		    var tag_id = $(this).prop('id');
		    
		    var res = $(this).hasClass('onactive');
		    if (res) {
		        $(this).removeClass('onactive');
		        arr.splice($.inArray(tag_id,arr),1);
		        
		        return false;
		    }
		    if(len >= 3){
		        alert('最多能选择三个标签');return false;
		    }
		    $(this).addClass('onactive');
		    
		    if ($.inArray(tag_id,arr)) {
		        arr.push(tag_id);
		    }
		    $('#tags').val(arr.join());
		})
    </script>
    <!--引入 wangEditor.js-->
    <script type="text/javascript" src='./static/font/js/wangEditor-1.1.0-min.js'></script>
    <script type="text/javascript">
        $(function(){
            $('#spanTime').text((new Date()).toString());
            //一句话，即可把一个div 变为一个富文本框！o(∩_∩)o 
            var $editor = $('#txtDiv').wangEditor();
            //显示 html / text
            var $textarea = $('#textarea'),
                $btnHtml = $('#btnHtml'),
                $btnText = $('#btnText'),
                $btnHide = $('#btnHide');
            $textarea.hide();
            $btnHtml.click(function(){
                $textarea.show();
                $textarea.val( $editor.html() );
            });
            $btnText.click(function(){
                $textarea.show();
                $textarea.val( $editor.text() );
            });
            $btnHide.click(function(){
                $textarea.hide();
            });
        });
    </script>
@stop

