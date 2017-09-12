@extends('layouts.layouts')

@section('header')
@parent
@section('title',"猿问")
@stop

@section('content')
<link rel="stylesheet" type="text/css" href="../static/font/fontawesome-4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../static/font/css/wangEditor-1.1.0-min.css">
<style type="text/css">
    body{
        padding: 0px 10px 0px 10px;
        color:#333333;
    }
</style>
<link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=2.5,wenda/detail-less.css?v=201708281028" type="text/css" />



<div id="main">

<div class="wenda clearfix">
    <div class="l wenda-main">
            <div class="qa-content" data-qid="356939">
                <div class="qa-content-inner ">
                    <div id="js-content-main">
                        <div class="detail-q-title clearfix">
                            <!-- 话题 -->
                                                        <h1 class="js-qa-wenda-title detail-wenda-title">{{$data['questions_title']}}</h1>


                            <!-- 问答信息 -->
                            <div class="wenda-intro-box clearfix">
                                <div class="detail-user l">
                                    <a href="/u/3722952/bbs" class="author l">{{$user['email']}}</a>
                                    
                                                                    </div>

                                <!-- 编辑 -->
                                <div class="wenda-edit-box r">
                                                                        <span class="count-item l">回答<i class="answer_num">{{$num}}</i></span>
                                    <span class="count-item l">浏览<i class="questions_browser">{{$data['questions_browser']}}</i></span>
                                    
                                </div>
                                <!-- 编辑 end -->
                            </div>
                        </div>
                        
                        <div id="js-qa-wenda" class="detail-wenda aimgPreview rich-text"><p>{{$data['questions_introduce']}}</p></div>
                    </div>
                    @if(empty($data['questions_img']))

                    @else
                    <img src="../uploads/{{$data['questions_img']}}" style="width:100;height:100px;">
                    @endif
                    <!-- 编辑问答 -->
                                        <!-- 编辑问答 end -->

                    <!-- 源自 & 分享 & 关注 -->
                    <div class="qa-header detail-user-tips clearfix">
                                                <div class="qa-header-right r">
                            <!-- credit -->
                            
                            <!-- share -->
                            <div class="small-share l wd-share">
                                <ul class="share-wrap">
                                    <li class="weichat-posi js-top-share">
                                        <div class="bdsharebuttonbox weichat-style bdshare-button-style0-16" data-tag="share_1" data-quesid="356939">
                                            {{date('Y-m-d H:i:s',$data['questions_time'])}}
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <em class="split l"></em>
                            <!-- follow -->
                                                            <a href="javascript:void(0)" data-id="356939" title="关注" class="l wenda-add-collection js-collection-btn">
                                    <i class="icon-heart" id="1"></i>
                                </a>
                                                    </div>
                        
                    </div>
                    <!-- 源自 & 分享 & 关注 end-->
                </div>

                        </div>
            
            <div id="js-qa-comment-input" class="detail-comment-input js-msg-context clearfix">
                <h3 class="answer-add-tip">我要回答</h3>
                <button id="answer-frame" class="answer-btn"></button>
                <div id="div_answer" style="display:none">       
    <input type="hidden" id="hid_id" name="questions_id" value="{{$data['id']}}">
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
    <script src="../static/font/js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <!--引入 wangEditor.js-->
    <script type="text/javascript" src='../static/font/js/wangEditor-1.1.0-min.js'></script>
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
    <br>
    <input type="button" id="js-wenda-ci-submit" class="btn btn-red detail-ans huida" data-qid="356983" value="回答">
    <input type="button" id="js-wenda-ci-submit" class="btn btn-red detail-ans answer_cancel" data-qid="356983" value="取消">
    </div>
            </div>
            <!-- 回答数 -->
                                                <div class="ans_num">{{$num}}回答</div>
                                        <!-- 回答回复 start -->

                            <div id="answer_div">
                            @foreach($arr as $key => $val)
                            <div class="ques-answer ques-new-answer clearfix divhf" id="">
                    <!-- 已采纳标志 -->
                                    
                    <div class="edit-title">编辑回答</div>
                    <div class="answer-con first" id="id_259404">
                        <div class="user-pic l">
                        </div><!--.user end-->
                        <div class="detail-r">    
                                                        <a class="detail-name" href="/u/2411916/bbs" target="_blank">{{$name[$key]}}</a>
                                                                                    
                                                        
                            
                        </div>
                        <div class="answer-content rich-text aimgPreview"><p><br />{{$val['answer_content']}}</p></div>
                                                <div class="ctrl-bar js-msg-context clearfix js-reply-tool hide">
                            <div class="detail-editor-btns r">
                                <span class="qa-tips"></span>
                                <button class="btn btn-normal js-reply-cancel">取消</button>
                                <button class="btn btn-red js-reply-submit" data-id="259404">保存</button>
                            </div>
                        </div>
                        
                        <div class="ctrl-bar clearfix js-wenda-tool">
                            <span class="agree-with but_praise" id="{{$val['id']}}" data-ques-id="356939" data-answer-id="259404" data-hasop=""><i class="icon-thumb-revert"></i><em class="em_praise"></em></span>

                            <span class="oppose but_oppose" id="{{$val['id']}}" data-ques-id="356939" data-answer-id="259404" data-hasop=""><i class="imv2-thumb_down"></i><em class="em_oppose">反对</em></span>
                            
                                                                                    
                            <span class="reply huifu" id="{{$val['id']}}" data-replynum="0" data-reply-id="259404" data-ques-uid="3722952">回复</span>

                                                        
                             <span class="time r">{{date('Y-m-d H:i:s',$val['answer_time'])}}</span>

                        </div><!--.ctrl-bar end-->

                        
                    </div><!--.answer-con end-->
                        
                    <div class="reply-con" data-id="1">
                    
                        <ul class="reply-list">

                        </ul>
                        
                        <div class="release-reply-con clearfix">
                                                        <div class="user-pic ">
                            </div>
                                                        <!--.user-pic end-->
                            

                            <div class="textarea-con">

                                                                <textarea name="release-reply" data-id="{{$val['answer_user_id']}}" class="huifunr" id="release-reply" placeholder="写下你的回复"></textarea>
                                                            </div>
                            <p class="err-tip"></p>
                            <div class="userCtrl clearfix">
                                <div class="verify-code"></div>

                                <div class="do-reply-btn qvxiao" data-answer-id="259391" data-ques-uid="3722952">取消</div>
                                <div class="do-reply-btn hdhf" id="{{$val['id']}}" data-answer-id="259391" data-ques-uid="3722952">回复</div>
                            </div>
                        </div><!--.release-reply-con end-->
                    </div><!--.reply-con end-->
                    
                </div>
            
            @endforeach
            </div>
            <!-- 回答回复 end -->
            <div class="qa-comment-page">
                        </div>

    </div>
@if(!empty($user))
<div class="user-about" style="margin-left:880px;">
    <div class="user-info">
        <div class="user-pic">
        </div>
        <div class="user-name">
            <a href="/u/5528284/bbs">{{$user['email']}}</a>
                                </div>
    </div><!--.user-info end-->
    <div class="user-action">
         <span class="ques"><a href="{{url('integral_index')}}">积分商城</a><!-- <i></i>--></span>
        <span class="reply"><a href="{{url('integral_index')}}">我的课程</a></span>
        <span class="follow"><a href="{{url('integral_index')}}">订单中心</a></span>
    </div><!--.user-action end-->
</div><!--.user-about end-->
@else 

@endif
        <div class="wenda-slider r">

            <div class="quiz"><a href="{{url('question')}}" class="js-quiz">我要提问</a></div>

            <!-- 相关问题 -->
                          <div class="panel about-ques">
                <div class="panel-heading">
                  <h2 class="panel-title">问题模型</h2>
                </div>
                <div class="panel-body clearfix">
                                            <div class="mkhotlist padtop">
                            <a class="relwenda" href="javascript:void;">学会linux，主要从事什么工作？</a><i class="answer-num"></i>
                        </div>
                                            <div class="mkhotlist ">
                            <a class="relwenda" href="javascript:void;">centos7里没有locate命令，请问在哪里有centos6.5的镜像文件？</a><i class="answer-num"></i>
                        </div>
                                            <div class="mkhotlist ">
                            <a class="relwenda" href="javascript:void;">为什么程序员都喜欢用Linux操作系统呢？</a><i class="answer-num"></i>
                        </div>
                                            <div class="mkhotlist ">
                            <a class="relwenda" href="javascript:void;">求如何蹭网</a><i class="answer-num"></i>
                        </div>
                                            <div class="mkhotlist bordbottom">
                            <a class="relwenda" href="javascript:void;">数据库配置dsn应该怎么写</a><i class="answer-num"></i>
                        </div>
                                    </div>
              </div>
                        <!-- 广告 -->
                                            <div class="advertisement">
                    <a href="javascript:void;" data-ast="yuanwendetailright_1_1055">


                    </a>
                </div><!--.advertisement end-->
                                                                        
                            
        </div>

</div>


<div class="pop-tips-layer"></div>
</div>

@stop

@section('footer')
@parent
@stop
<script type="text/javascript" src="../jquery.min.js"></script>
<script type="text/javascript">
    $(document).on("click",".icon-heart",function(){
        $(this).prop('id','0');
        $(this).removeClass().addClass('icon-heart-revert');
    })
    $(document).on("click",".icon-heart-revert",function(){
        $(this).prop('id','1');
        $(this).removeClass().addClass('icon-heart');
    })
    $(document).on("click","#answer-frame",function(){
        $(this).css('display','none');
        $("#div_answer").css('display','block');
    })
    $(document).on("click",".answer_cancel",function(){
        $("#answer-frame").css('display','block');
        $("#div_answer").css('display','none');
    })
    $(document).on("click",".huida",function(){
        var text = $("#textarea").val();
        var id = $("#hid_id").val();
        $.ajax({
            url:"{{url('answer_add')}}",
            type:"get",
            data:{text:text,id:id},
            dataType:"json",
            success:function(msg){
                if (msg == 0) {
                    window.location.href="http://www.mylaravel.com/public/login_index";
                }
                var ser = "";
                for (var i=0; i<msg.data.length; i++) {
                    ser += '<div class="ques-answer ques-new-answer clearfix divhf" id="">\
                    <div class="edit-title">编辑回答</div>\
                    <div class="answer-con first" id="id_259404">\
                    <div class="user-pic l">\
                            <a href="/u/2411916/bbs" target="_blank">\
                                <img src="http://img.mukewang.com/57de587c0001f31302790279-100-100.jpg" width="40" height="40" alt="?" />\
                            </a>\
                        </div><!--.user end-->\
                        <div class="detail-r">\
                                <a class="detail-name" href="/u/2411916/bbs" target="_blank">InMyCity</a>\
                        </div>\
                        <div class="answer-content rich-text aimgPreview"><p><br />'+msg.data[i].answer_content+'</p></div>\
                                                <div class="ctrl-bar js-msg-context clearfix js-reply-tool hide">\
                            <div class="detail-editor-btns r">\
                                <span class="qa-tips"></span>\
                                <button class="btn btn-normal js-reply-cancel">取消</button>\
                                <button class="btn btn-red js-reply-submit" data-id="259404">保存</button>\
                            </div>\
                        </div>\
                        <div class="ctrl-bar clearfix js-wenda-tool">\
                            <span class="agree-with dianzan" id="'+msg.data[i].id+'" data-ques-id="356939" data-answer-id="259404" data-hasop=""><i class="icon-thumb-revert"></i><em class="em_praise"></em></span>\
                            <span class="oppose fandui" id="'+msg.data[i].id+'" data-ques-id="356939" data-answer-id="259404" data-hasop=""><i class="imv2-thumb_down"></i><em class="em_oppose">反对</em></span>\
                            <span class="reply huifu" id="'+msg.data[i].id+'" data-replynum="0" data-reply-id="259404" data-ques-uid="3722952">回复</span>\
                            <span class="time r">'+msg.data[i].answer_time+'</span>\
                        </div><!--.ctrl-bar end-->\
                        </div><!--.answer-con end-->\
                        <div class="reply-con" data-id="1">\
                        <ul class="reply-list">\
                        </ul>\
                        <div class="release-reply-con clearfix">\
                                                        <div class="user-pic ">\
                                <a href="/u/5528284/bbs" target="_blank">\
                                    <img src="http://img.mukewang.com/595b4f5b00010b2901000100-100-100.jpg" width="40" height="40" alt="?"/>\
                                </a>\
                            </div>\
                                                        <!--.user-pic end-->\
                            <div class="textarea-con">\
                                                                <textarea name="release-reply" data-id="'+msg.data[i].answer_user_id+'" class="huifunr" id="release-reply" placeholder="写下你的回复"></textarea>\
                                                            </div>\
                            <p class="err-tip"></p>\
                            <div class="userCtrl clearfix">\
                                <div class="verify-code"></div>\
                                <div class="do-reply-btn qvxiao" data-answer-id="259391" data-ques-uid="3722952">取消</div>\
                                <div class="do-reply-btn hdhf" data-answer-id="259391" data-ques-uid="3722952">回复</div>\
                            </div>\
                        </div><!--.release-reply-con end-->\
                    </div><!--.reply-con end-->\
                    </div>';
                }
                $(".ans_num").html('回答'+msg.num);
                $(".answer_num").html(msg.num);
                $(".questions_browser").html(msg.browser);
                $("#answer_div").html(ser);
            }
        })
    })
    // 点赞
    $(document).on("click",".but_praise",function(){
        var id = $(this).prop('id');
        var type = 1;
        var obj = $(this);
        $.ajax({
            url:"{{url('answer_praise')}}",
            data:{id:id,type:type},
            dataType:"json",
            type:'get',
            success:function(msg){
                if (msg == 0) {
                    window.location.href="http://www.mylaravel.com/public/login_index";
                }
                if (msg.id == 1) {
                    obj.find(".em_praise").html(msg.count);
                    $(".but_oppose").find(".em_oppose").html("已反对");
                } else if (msg.id == 2) {
                    obj.find(".em_praise").html(msg.count);
                    $(".but_oppose").find(".em_oppose").html("反对");
                } else if (msg.id == 3) {
                    obj.find(".em_praise").html(msg.count);
                    $(".but_oppose").find(".em_oppose").html("反对");
                } else if (msg.id == 4) {
                    if (msg.type == 1) {
                        obj.find(".em_praise").html(msg.count);
                        $(".but_oppose").find(".em_oppose").html("反对");
                    } else {
                        obj.find(".em_praise").html(msg.count);
                        $(".but_oppose").find(".em_oppose").html("已反对");
                    }
                }
            }
        })
    })
    // 反对
    $(document).on("click",".but_oppose",function(){
        var id = $(this).prop('id');
        var type = 0;
        var obj = $(this);
        $.ajax({
            url:"{{url('answer_praise')}}",
            data:{id:id,type:type},
            dataType:"json",
            type:'get',
            success:function(msg){
                if (msg == 0) {
                    window.location.href="http://www.mylaravel.com/public/login_index";
                }
                if (msg.id == 1) {
                    $(".but_praise").find(".em_praise").html(msg.count);
                    obj.find(".em_oppose").html("已反对");
                } else if (msg.id == 2) {
                    $(".but_praise").find(".em_praise").html(msg.count);
                    obj.find(".em_oppose").html("反对");
                } else if (msg.id == 3) {
                    $(".but_praise").find(".em_praise").html(msg.count);
                    obj.find(".em_oppose").html("反对");
                } else if (msg.id == 4) {
                    if (msg.type == 1) {
                        $(".but_praise").find(".em_praise").html(msg.count);
                        obj.find(".em_oppose").html("反对");
                    } else {
                        $(".but_praise").find(".em_praise").html(msg.count);
                        obj.find(".em_oppose").html("已反对");
                    }
                }
            }
        })
    })
    $(document).on("click",".huifu",function(){
        $(this).parents('.divhf').find('.reply-con').css('display','block');
        var user_name = $('.detail-name').html();
        var text = $(this).parents('.divhf').find(".huifunr").attr('placeholder','回复'+user_name);
        var id = $(this).prop('id');
        var obj = $(this);
        $.ajax({
            url:"{{url('reply')}}",
            type:"get",
            data:{id:id},
            dataType:"json",
            success:function(msg){
                if (msg == 0) {
                    window.location.href="http://www.mylaravel.com/public/login_index";
                }
                var ser = "";
                for (var i=0; i<msg.data.length; i++) {
                    ser += '<li class="clearfix">\
                            <div class="user-pic">\
                            </div>\
                            <div class="user-info clearfix">\
                                <a class="from-user reply_name" id="'+msg.data[i].reply_user_id+'" href="/u/4754213/bbs">'+msg.answer_name[i]+'</a>\
                                <em>回复</em>\
                                <a class="from-user answer_name" href="/u/4754213/bbs">'+msg.reply_name[i]+'</a>\
                                <span class="r floor">#'+i+'</span>\
                            </div>\
                            <div class="reply-content">'+msg.data[i].reply_content+'</div>\
                            <div class="reply-btn l twohu" id="'+msg.data[i].answer_id+'" data-username="qq_夜尽天明_15" data-uid="4754213">回复</div>\
                            <span class="time r">'+msg.data[i].reply_time+'</span>\
                        </li>';
                }
                obj.parents('.divhf').find('.reply-list').html(ser).css('disply','block');
            }
        })
    })
    $(document).on("click",".qvxiao",function(){
        $(this).parents('.divhf').find('.reply-con').css('display','none');
    })
    $(document).on("click",".hdhf",function(){
        var text = $(this).parents('.divhf').find('.huifunr').val();
        var user_id = $(this).parents('.divhf').find('.huifunr').attr('data-id');
        //alert(user_id);return false;
        var id = $(this).prop('id');
        var obj = $(this);
        $.ajax({
            url:"{{url('reply')}}",
            type:"get",
            data:{text:text,id:id,user_id:user_id},
            dataType:"json",
            success:function(msg){
                if (msg == 0) {
                    window.location.href="http://www.mylaravel.com/public/login_index";
                }
                var ser ="";
                for (var i=0; i<msg.data.length; i++) 
                {
                    ser += '<li class="clearfix">\
                            <div class="user-pic">\
                            </div>\
                            <div class="user-info clearfix">\
                                <a class="from-user reply_name" id="'+msg.data[i].reply_user_id+'" href="/u/4754213/bbs">'+msg.answer_name[i]+'</a>\
                                <em>回复</em>\
                                <a class="from-user answer_name" href="/u/4754213/bbs">'+msg.reply_name[i]+'</a>\
                                <span class="r floor">#'+i+'</span>\
                            </div>\
                            <div class="reply-content">'+msg.data[i].reply_content+'</div>\
                            <div class="reply-btn l twohu" id="'+msg.data[i].answer_id+'" data-username="qq_夜尽天明_15" data-uid="4754213">回复</div>\
                            <span class="time r">'+msg.data[i].reply_time+'</span>\
                        </li>';
                }
                obj.parents('.divhf').find('.reply-list').html(ser);
            }
        })
    })
    $(document).on('click','.twohu',function(){
        var r_id = $(this).parent('.clearfix').find(".reply_name").prop('id');
        var r_name = $(this).parent('.clearfix').find(".reply_name").html(); 
        var a_name = $(this).parents().next().find(".huifunr").attr('data-id',r_id);
        var text = $(this).parents().next().find(".huifunr").attr('placeholder','回复'+r_name);
    })
</script>