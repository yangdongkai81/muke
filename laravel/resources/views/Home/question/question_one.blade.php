@extends('layouts.layouts')

@section('header')
@parent
@section('title',"猿问")
@stop

@section('content')
<link href="../assets/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.css" rel="stylesheet">
    <style>
      #editor {
        resize:vertical; 
        overflow:auto; 
        border:1px solid silver; 
        border-radius:5px; 
        min-height:200px;
        box-shadow: inset 0 0 10px silver;
        padding:1em;
      }
    </style>
    <link rel="stylesheet" href="http://dreamsky.github.io/main/blog/common/init.css">
    <script src="http://dreamsky.github.io/main/blog/common/jquery.min.js"></script>
    <script src="http://dreamsky.github.io/main/blog/common/init.js"></script>
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
                                    <a href="javascript:;" class="author l">{{$user['email']}}</a>
                                    
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
                                    <span class="detail-hearts js-detail-follow"></span>
                                </a>
                                                    </div>
                        
                    </div>
                    <!-- 源自 & 分享 & 关注 end-->
                </div>

                        </div>
            
            <div id="js-qa-comment-input" class="detail-comment-input js-msg-context clearfix">
                <h3 class="answer-add-tip">我要回答</h3>
                
                <div id="div_answer">     
                 <input type="hidden" id="hid_id" name="questions_id" value="{{$data['id']}}">  
    <div id='pad-wrapper'>
          <div id="editparent">
            <div id='editControls' class='span9'>
              <div class='btn-group'>
                <a class='btn' data-role='bold' href='javascript:;'><b>B</b></a>
                <a class='btn' data-role='italic' href='javascript:;'><em>I</em></a>
                <a class='btn' data-role='underline' href='javascript:;'><u><b>U</b></u></a>
                <a class='btn' data-role='strikeThrough' href='javascript:;'><strike>—</strike></a>
              </div>
              <div class='btn-group'>
                <a class='btn' data-role='h1' href='javascript:;'>h<sup>1</sup></a>
                <a class='btn' data-role='h2' href='javascript:;'>h<sup>2</sup></a>
                <a class='btn' data-role='p' href='javascript:;'>p</a>
              </div>
            </div>
            <div id='editor' class='span9' style="width:700px;" contenteditable>
            </div>
            

          </div>
          </div>
    
    <textarea name="content" id="text_content" style="display:none;"></textarea>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script>

      $(function() {
        $('#editControls a').click(function(e) {
          switch($(this).data('role')) {
            case 'h1':
            case 'h2':
            case 'p':
              document.execCommand('formatBlock', false, '<' + $(this).data('role') + '>');
              break;
            default:
              document.execCommand($(this).data('role'), false, null);
              break;
          }
          
        })
      });

    </script>
        </div>
            <p style="margin-left:550px;">
                <input style="width:150px;margin-top:10px;" type="button" id="js-wenda-ci-submit" class="btn btn-red detail-ans questions_answer" data-qid="356983" value="回答">
            </p>
            </div>
            <!-- 回答数 -->
                                                <div class="ans_num">{{$num}}回答</div>
                                        <!-- 回答回复 start -->

                            <div id="answer_div">
                            @foreach($arr as $key => $val)
                            <div class="ques-answer ques-new-answer clearfix div_reply" id="">
                    <!-- 已采纳标志 -->
                                    
                    <div class="edit-title">编辑回答</div>
                    <div class="answer-con first" id="id_259404">
                        <div class="user-pic l">
                        </div><!--.user end-->
                        <div class="detail-r">    
                                                        <a class="detail-name" href="javascript:;" >{{$name[$key]}}</a>
                                                                                    
                                                        
                            
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
                            
                                                                                    
                            <span class="reply reply_answer" id="{{$val['id']}}" data-replynum="0" data-reply-id="259404" data-ques-uid="3722952">回复</span>

                                                        
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

                                                                <textarea name="release-reply" data-id="{{$val['answer_user_id']}}" class="reply_textarea" id="release-reply" placeholder="写下你的回复"></textarea>
                                                            </div>
                            <p class="err-tip"></p>
                            <div class="userCtrl clearfix">
                                <div class="verify-code"></div>

                                <div class="do-reply-btn reply_cancel" data-answer-id="259391" data-ques-uid="3722952">取消</div>
                                <div class="do-reply-btn answer_reply" id="{{$val['id']}}" data-answer-id="259391" data-ques-uid="3722952">回复</div>
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
@if(!empty($new_user))
<div class="user-about" style="margin-left:880px;">
    <div class="user-info">
        <div class="user-pic">
        </div>
        <div class="user-name">
            <a href="javascript:void">{{$new_user['email']}}</a>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <span style="color:black;">积分:<?php if (empty($integral)) { echo "";} else { echo $integral['integral'];}?></span>
                                </div>
    </div>
    <div class="user-action">
         <span class="ques"><a href="{{url('integral_index')}}">积分商城</a></span>
        <span class="reply"><a href="{{url('mycourse_index')}}">我的课程</a></span>
        <span class="follow"><a href="{{url('order_index')}}">订单中心</a></span>
    </div>
</div>
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
        var type_id = $(this).prop('id');
        $(this).prop('id','0');
        var obj = $(this);
        var id = $("#hid_id").val();
        $.ajax({
            url:"{{url('question_follow')}}",
            type:"get",
            data:{id:id,type_id:type_id},
            success:function(msg){
                if (msg == 2) {
                    alert("请先登录");
                    window.location.href="{{url('login_index')}}";
                } else {
                    $(".detail-hearts").html(msg);
                    obj.removeClass().addClass('icon-heart-revert');
                }
            }
        })
    })
    $(document).on("click",".icon-heart-revert",function(){
        var type_id = $(this).prop('id');
        $(this).prop('id','1');
        var obj = $(this);
        var id = $("#hid_id").val();
        $.ajax({
            url:"{{url('question_follow')}}",
            type:"get",
            data:{id:id,type_id:type_id},
            success:function(msg){
                if (msg == 2) {
                    alert("请先登录");
                    window.location.href="{{url('login_index')}}";
                } else {
                    $(".detail-hearts").html(msg);
                    obj.removeClass().addClass('icon-heart');
                }
            }
        })
    })
    $(document).on("click","#answer-frame",function(){
        $(this).css('display','none');
        $("#div_answer").css('display','block');
    })
    $(document).on("click",".answer_cancel",function(){
        $("#answer-frame").css('display','block');
        $("#div_answer").css('display','none');
    })
    $(document).on("click",".questions_answer",function(){
        var text = $("#editor").html();
        //var text = $("#text_content").val(content);
        var id = $("#hid_id").val();
        $.ajax({
            url:"{{url('answer_add')}}",
            type:"get",
            data:{text:text,id:id},
            dataType:"json",
            success:function(msg){
                if (msg == 0) {
                    alert("请先登录");
                    window.location.href="{{url('login_index')}}";
                }
                var ser = "";
                for (var i=0; i<msg.data.length; i++) {
                    ser += '<div class="ques-answer ques-new-answer clearfix div_reply" id="">\
                    <div class="edit-title">编辑回答</div>\
                    <div class="answer-con first" id="id_259404">\
                    <div class="user-pic l">\
                            <a href="/u/2411916/bbs" target="_blank">\
                                <img src="http://img.mukewang.com/57de587c0001f31302790279-100-100.jpg" width="40" height="40" alt="?" />\
                            </a>\
                        </div><!--.user end-->\
                        <div class="detail-r">\
                                <a class="detail-name" href="javascript:;">InMyCity</a>\
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
                            <span class="reply reply_answer" id="'+msg.data[i].id+'" data-replynum="0" data-reply-id="259404" data-ques-uid="3722952">回复</span>\
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
                                                                <textarea name="release-reply" data-id="'+msg.data[i].answer_user_id+'" class="reply_textarea" id="release-reply" placeholder="写下你的回复"></textarea>\
                                                            </div>\
                            <p class="err-tip"></p>\
                            <div class="userCtrl clearfix">\
                                <div class="verify-code"></div>\
                                <div class="do-reply-btn reply_cancel" data-answer-id="259391" data-ques-uid="3722952">取消</div>\
                                <div class="do-reply-btn answer_reply" data-answer-id="259391" data-ques-uid="3722952">回复</div>\
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
                    alert("请先登录");
                    window.location.href="{{url('login_index')}}";
                }
                if (msg.id == 1) {
                    obj.find(".em_praise").html(msg.count);
                    obj.next().find(".em_oppose").html("已反对");
                } else if (msg.id == 2) {
                    obj.find(".em_praise").html(msg.count);
                    obj.next().find(".em_oppose").html("反对");
                } else if (msg.id == 3) {
                    obj.find(".em_praise").html(msg.count);
                    obj.next().find(".em_oppose").html("反对");
                } else if (msg.id == 4) {
                    if (msg.type == 1) {
                        obj.find(".em_praise").html(msg.count);
                        obj.next().find(".em_oppose").html("反对");
                    } else {
                        obj.find(".em_praise").html(msg.count);
                        obj.next().find(".em_oppose").html("已反对");
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
                    alert("请先登录");
                    window.location.href="{{url('login_index')}}";
                }
                if (msg.id == 1) {
                    obj.prev().find(".em_praise").html(msg.count);
                    obj.find(".em_oppose").html("已反对");
                } else if (msg.id == 2) {
                    obj.prev().find(".em_praise").html(msg.count);
                    obj.find(".em_oppose").html("反对");
                } else if (msg.id == 3) {
                    obj.prev().find(".em_praise").html(msg.count);
                    obj.find(".em_oppose").html("反对");
                } else if (msg.id == 5) {
                    obj.prev().find(".em_praise").html(msg.count);
                    obj.find(".em_oppose").html("反对");
                } else if (msg.id == 4) {
                    if (msg.type == 1) {
                        obj.prev().find(".em_praise").html(msg.count);
                        obj.find(".em_oppose").html("反对");
                    } else {
                        obj.prev().find(".em_praise").html(msg.count);
                        obj.find(".em_oppose").html("已反对");
                    }
                }
            }
        })
    })
    $(document).on("click",".reply_answer",function(){
        $(this).parents('.div_reply').find('.reply-con').css('display','block');
        var user_name = $('.detail-name').html();
        var text = $(this).parents('.div_reply').find(".reply_textarea").attr('placeholder','回复'+user_name);
        var id = $(this).prop('id');
        var obj = $(this);
        $.ajax({
            url:"{{url('reply')}}",
            type:"get",
            data:{id:id},
            dataType:"json",
            success:function(msg){
                if (msg == 0) {
                    alert("请先登录");
                    window.location.href="http://www.mylaravel.com/public/login_index";
                }
                var ser = "";
                for (var i=0; i<msg.data.length; i++) {
                    ser += '<li class="clearfix">\
                            <div class="user-pic">\
                            </div>\
                            <div class="user-info clearfix">\
                                <a class="from-user reply_name" id="'+msg.data[i].reply_user_id+'" href="javascript:;' +
                    '">'+msg.answer_name[i]+'</a>\
                                <em>回复</em>\
                                <a class="from-user answer_name" href="javascript:;">'+msg.reply_name[i]+'</a>\
                                <span class="r floor">#'+i+'</span>\
                            </div>\
                            <div class="reply-content">'+msg.data[i].reply_content+'</div>\
                            <div class="reply-btn l two_reply" id="'+msg.data[i].answer_id+'" data-username="qq_夜尽天明_15" data-uid="4754213">回复</div>\
                            <span class="time r">'+msg.data[i].reply_time+'</span>\
                        </li>';
                }
                obj.parents('.div_reply').find('.reply-list').html(ser).css('disply','block');
            }
        })
    })
    $(document).on("click",".reply_cancel",function(){
        $(this).parents('.div_reply').find('.reply-con').css('display','none');
    })
    $(document).on("click",".answer_reply",function(){
        var text = $(this).parents('.div_reply').find('.reply_textarea').val();
        var user_id = $(this).parents('.div_reply').find('.reply_textarea').attr('data-id');
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
                    alert("请先登录");
                    window.location.href="{{url('login_index')}}";
                }
                var ser ="";
                for (var i=0; i<msg.data.length; i++) 
                {
                    ser += '<li class="clearfix">\
                            <div class="user-pic">\
                            </div>\
                            <div class="user-info clearfix">\
                                <a class="from-user reply_name" id="'+msg.data[i].reply_user_id+'" href="javascript:;">'+msg.answer_name[i]+'</a>\
                                <em>回复</em>\
                                <a class="from-user answer_name" href="javascript:;">'+msg.reply_name[i]+'</a>\
                                <span class="r floor">#'+i+'</span>\
                            </div>\
                            <div class="reply-content">'+msg.data[i].reply_content+'</div>\
                            <div class="reply-btn l two_reply" id="'+msg.data[i].answer_id+'" data-username="qq_夜尽天明_15" data-uid="4754213">回复</div>\
                            <span class="time r">'+msg.data[i].reply_time+'</span>\
                        </li>';
                }
                obj.parents('.div_reply').find('.reply-list').html(ser);
            }
        })
    })
    $(document).on('click','.two_reply',function(){
        var r_id = $(this).parent('.clearfix').find(".reply_name").prop('id');
        var r_name = $(this).parent('.clearfix').find(".reply_name").html(); 
        var a_name = $(this).parents().next().find(".reply_textarea").attr('data-id',r_id);
        var text = $(this).parents().next().find(".reply_textarea").attr('placeholder','回复'+r_name);
    })
</script>
