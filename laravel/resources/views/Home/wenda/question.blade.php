@extends('layouts.layouts')

@section('header')
@parent
@section('title','猿问')
<!-- <base href="mvc/laravel-v5.2.0/public/"> -->
<link rel="stylesheet" type="text/css" href="./static/font/fontawesome-4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="./static/font/css/wangEditor-1.1.0-min.css">
<style type="text/css">
    body{
        padding: 0px 10px 0px 10px;
        color:#333333;
    }
</style>
<link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=2.5,wenda/save-less.css,course/inc/course_credit-less.css?v=201708281028" type="text/css" />
@stop

@section('content')

<div id="main">

<div class="container clearfix">
<form action="{{url('question_add')}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="l wenda-main">
      <div class="sucesspage">
        <h2 class="new-save-title">提问</h2>
        <div id="js-inputques" class="inputques">
               <div class="quesdetail clearfix">
                  <span class="ques-label first-label">*</span>
                  <div class="question-area">
                    <input type="text"  id="ques-title" class="ipt autocomplete question_tichu" maxlength="255" name="question" placeholder="请一句话说明你的问题，以问号结尾"/>
                    <p class="errortip" ></p>
                    <dl class="send-area-result">
                    </dl>
                  </div>
               </div>
    <div id='txtDiv' style='border:1px solid #cccccc; height:240px;'>
        <p>请输入内容...</p>
    </div>
    <div style='margin-top:10px;'>
        <a href="javascript:void(0)" id='btnHtml'>查看html</a>
        <a href="javascript:void(0)" id='btnText'>查看text</a>
        <a href="javascript:void(0)" id='btnHide'>隐藏</a>
        <textarea id='textarea' name="content" style='width:100%; height:100px; margin-top:10px;'></textarea>
    </div>
    <!--引入 jquery.js-->
    <script src="./static/font/js/jquery-1.10.2.min.js" type="text/javascript"></script>
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
    上传图片：<input type="file" name="img">
                <div class="quesdetail mbottom">
                  <span class="ques-label">&nbsp;</span>
                  <div id="editor-wrap" class="editor clearfix" >
                    <div class="" id="ques-editor">
					
                    </div>
                    <p class="errortip"></p>
                  </div>
                </div>
                <div class="mbottom">
                  <span class="ques-label">*</span>
                  <div id="tag-title" class="new-tags ques-tag defaultbox">
                    <p class="new-tag-info">选择问题分类，最多可选3个</p>
                    <!-- <p class="tag-tip">您最多可以从以下选择3个标签哟！</p> -->
                    <div id="js-tags" class="taglist clearfix">
                                            @foreach ($data as $val)
                                              <a href="javascript:;" class="save-list-tag aspect_type" data-id="12" name="Android" id="{{ $val->id }}">{{ $val->aspect_name }}</a>
                                            @endforeach
                                          </div>
                    <p class="errortip firse"></p>
                  </div>
               </div>
        </div>
        <div class="verify-box clearfix">
          <span class="ques-label l">*</span>
          <div class="verify-code"></div>
        </div>
        <div class="saveques-bottom">
          <input type="hidden" id="hid_arr" name="arr" value="">
          <input type="submit" id="ques-submit-btn" class="btn btn-red link-btn publishbtn fabu" value="发布">
          <p class="global-errortip js-global-error"></p>
        </div>
      </div>
     </div>
    </form>
    <div class="r wenda-slider">
      <div class="panel bbs-sendques">
        <div class="panel-body">
          <h1>提问注意事项</h1>
          <dl>
            <dd>1、大家每天可以免费提出两个问题，从第三个问题起，每个问题扣除2点积分，请知晓哦；</dd>
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
      <!-- tags -->
      <!-- <div class="clearfix">
        <div class="panel-heading">
          <h3 class="panel-title">热门标签</h3>
        </div>
                <div class="panel-body hot-tags clearfix">
                    <a href="/wenda/tag/tagId/12" class="hot-label" target="_blank">Android</a>
                    <a href="/wenda/tag/tagId/22" class="hot-label" target="_blank">AngularJS</a>
                    <a href="/wenda/tag/tagId/24" class="hot-label" target="_blank">Bootstrap</a>
                    <a href="/wenda/tag/tagId/28" class="hot-label" target="_blank">C</a>
                    <a href="/wenda/tag/tagId/38" class="hot-label" target="_blank">C#</a>
                    <a href="/wenda/tag/tagId/30" class="hot-label" target="_blank">C++</a>
                    <a href="/wenda/tag/tagId/34" class="hot-label" target="_blank">Cocos2d-x</a>
                    <a href="/wenda/tag/tagId/25" class="hot-label" target="_blank">CSS3</a>
                    <a href="/wenda/tag/tagId/31" class="hot-label" target="_blank">Go</a>
                    <a href="/wenda/tag/tagId/5" class="hot-label" target="_blank">Html/CSS</a>
                    <a href="/wenda/tag/tagId/14" class="hot-label" target="_blank">Html5</a>
                    <a href="/wenda/tag/tagId/19" class="hot-label" target="_blank">iOS</a>
                    <a href="/wenda/tag/tagId/3" class="hot-label" target="_blank">JAVA</a>
                    <a href="/wenda/tag/tagId/17" class="hot-label" target="_blank">JavaScript</a>
                    <a href="/wenda/tag/tagId/15" class="hot-label" target="_blank">JQuery</a>
                    <a href="/wenda/tag/tagId/20" class="hot-label" target="_blank">Linux</a>
                    <a href="/wenda/tag/tagId/7" class="hot-label" target="_blank">Maya</a>
                    <a href="/wenda/tag/tagId/8" class="hot-label" target="_blank">MongoDB</a>
                    <a href="/wenda/tag/tagId/11" class="hot-label" target="_blank">Mysql</a>
                    <a href="/wenda/tag/tagId/13" class="hot-label" target="_blank">Node.js</a>
                    <a href="/wenda/tag/tagId/29" class="hot-label" target="_blank">Oracle</a>
                    <a href="/wenda/tag/tagId/10" class="hot-label" target="_blank">Photoshop</a>
                    <a href="/wenda/tag/tagId/2" class="hot-label" target="_blank">PHP</a>
                    <a href="/wenda/tag/tagId/9" class="hot-label" target="_blank">Premiere</a>
                    <a href="/wenda/tag/tagId/18" class="hot-label" target="_blank">Python</a>
                    <a href="/wenda/tag/tagId/50" class="hot-label" target="_blank">React.JS</a>
                    <a href="/wenda/tag/tagId/54" class="hot-label" target="_blank">Ruby</a>
                    <a href="/wenda/tag/tagId/53" class="hot-label" target="_blank">Sass/Less</a>
                    <a href="/wenda/tag/tagId/36" class="hot-label" target="_blank">SQL Server</a>
                    <a href="/wenda/tag/tagId/33" class="hot-label" target="_blank">Unity 3D</a>
                    <a href="/wenda/tag/tagId/52" class="hot-label" target="_blank">Vue.js</a>
                    <a href="/wenda/tag/tagId/27" class="hot-label" target="_blank">WebApp</a>
                    <a href="/wenda/tag/tagId/40" class="hot-label" target="_blank">ZBrush</a>
                    <a href="/wenda/tag/tagId/21" class="hot-label" target="_blank">云计算</a>
                    <a href="/wenda/tag/tagId/26" class="hot-label" target="_blank">前端工具</a>
                    <a href="/wenda/tag/tagId/35" class="hot-label" target="_blank">大数据</a>
                    <a href="/wenda/tag/tagId/39" class="hot-label" target="_blank">数据结构</a>
                    <a href="/wenda/tag/tagId/51" class="hot-label" target="_blank">测试</a>
                  </div>
              </div> -->

    </div>
    <!-- error-pop -->
    <div class="pop-tips-layer"></div>
</div>
<!--积分弹出框-->
<div class="integral-pop" id="no-credit">
    <div class="pop-con">
        <span class="icon-point"></span>
                    <p>本次提问将花费2个积分</p>
                <p>你的积分不足，无法发表</p>
        <a class="integral-rule" href="/about/faq?t=3" target="_blank">为什么扣积分？</a>
        <div class="ft clearfix">
            <a href="javascript:void(0)" class="btn btn-green l cancel-cf">确认</a>
            <a href="javascript:void(0)" class="btn btn-grey r cancel-cf">取消</a>
        </div>
    </div>
</div>
<div class="integral-pop" id="enough-credit">
    <div class="pop-con">
        <span class="icon-point"></span>
                    <p>本次提问将花费2个积分</p>
                <p>继续发表请点击 "确定"</p>
        <a class="integral-rule" href="/about/faq?t=3" target="_blank">为什么扣积分？</a>
        <div class="ft clearfix">
            <a id="interal-use" href="javascript:void(0)" class="btn btn-green l">确认</a>
            <a id="interal-cancel" href="javascript:void(0)" class="btn btn-grey r">取消</a>
        </div>
    </div>
</div>

</div>

@stop

@section('footer')
@parent
@stop
<script type="text/javascript" src="./jquery.min.js"></script>
<script type="text/javascript">
    var arr = [];
    $(document).on('click','.aspect_type',function(){
        var len = $('.onactive').length;
        var tag_id = $(this).prop('id');
        if(len > 3){
            alert('最多能选择三个标签');return false;
        }
        var res = $(this).hasClass('onactive');
        
        if (res) {
            $(this).removeClass('onactive');
            arr.splice($.inArray(tag_id,arr),1);
            
            return false;
        }
        $(this).addClass('onactive');
        
        if ($.inArray(tag_id,arr)) {
            arr.push(tag_id);
        }
    })
    $(document).on("click",".fabu",function(){
        $("#hid_arr").val(arr);
        /*var question = $(".question_tichu").val();
        var content = $(".textarea").html();
        $.ajax({
            url:"{{url('question_add')}}",
            type:"get",
            data:{question:question,content:content,arr:arr},
            success:function(msg){
                if (msg == 1) {
                    alert("发布成功");
                    window.location.href="{{url('user_question_show')}}";
                } else {
                    alert("发布失败重新发布");
                    history.go(-1);
                }
            }
        })*/
    })
</script>