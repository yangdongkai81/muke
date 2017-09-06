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

    <script>
var quesname="学会linux，主要从事什么工作？";   //问答名称
var url = 'http://www.mukewang.com' + window.location.pathname;
window._bd_share_config = {
    "common":{
        "bdUrl": url,
        "bdSnsKey": {
            'tsina':'2788596354'
        },
        "bdText":quesname+""+"_慕课网_猿问",
        "bdMini":"2",
        "bdMiniList":false,
        "bdPic":"",
        "bdStyle":"0",
        "bdSize":"16"
    },
    share : [{
            "tag" : "share_1",
            "onBeforeClick":function(cmd,config){
                if(cmd=="qzone"){
                    config.bdText = quesname+url+"_慕课网_猿问";
                }else{
                    config.bdText = "[慕课猿问："+quesname+url+"(分享自@慕课网)#慕课爱分享#";
                }
                return config;
            }
        },{
            "tag" : "share_2",
            "onBeforeClick":function(cmd,config){
                if(cmd=="tsina"){
                    config.bdText = "我在慕课网(@慕课网) 提了一个问题“"+quesname+"”"+url;
                }else{
                    config.bdText = "我在慕课网 提了一个问题“"+quesname+"”"+url;
                }
                return config;
            }   
        },{
            "tag" : "share_3",
            "onBeforeClick":function(cmd,config){
                if(cmd=="tsina"){
                    config.bdText = "我在慕课网(@慕课网) 回答了“"+quesname+"”"+url+"快来围观";
                }else{
                    config.bdText = "我在慕课网 回答了“"+quesname+"”"+url+"快来围观";
                }
                return config;
            }   
        },
                        {
            "tag" : 'share_answer_259404',
            "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/259404',
            "bdText":'[慕课猿问：学会linux，主要从事什么工作？ 回答者:InMyCity (分享自@慕课网)#慕课爱分享#'
        }
                ,        {
            "tag" : 'share_answer_259468',
            "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/259468',
            "bdText":'[慕课猿问：学会linux，主要从事什么工作？ 回答者:Tidhy (分享自@慕课网)#慕课爱分享#'
        }
                ,        {
            "tag" : 'share_answer_259413',
            "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/259413',
            "bdText":'[慕课猿问：学会linux，主要从事什么工作？ 回答者:奶油味的葱 (分享自@慕课网)#慕课爱分享#'
        }
                ,        {
            "tag" : 'share_answer_259464',
            "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/259464',
            "bdText":'[慕课猿问：学会linux，主要从事什么工作？ 回答者:qq_A_8 (分享自@慕课网)#慕课爱分享#'
        }
                ,        {
            "tag" : 'share_answer_259409',
            "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/259409',
            "bdText":'[慕课猿问：学会linux，主要从事什么工作？ 回答者:yeyilu天雪 (分享自@慕课网)#慕课爱分享#'
        }
                ,        {
            "tag" : 'share_answer_259407',
            "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/259407',
            "bdText":'[慕课猿问：学会linux，主要从事什么工作？ 回答者:胜利女神在微笑 (分享自@慕课网)#慕课爱分享#'
        }
                ,        {
            "tag" : 'share_answer_259392',
            "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/259392',
            "bdText":'[慕课猿问：学会linux，主要从事什么工作？ 回答者:chinesszz (分享自@慕课网)#慕课爱分享#'
        }
                ,        {
            "tag" : 'share_answer_259391',
            "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/259391',
            "bdText":'[慕课猿问：学会linux，主要从事什么工作？ 回答者:我是新手_请多指教 (分享自@慕课网)#慕课爱分享#'
        }
            ]
};
</script>

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
                                    <a href="/u/3722952/bbs" class="author l">
                                        <img src="http://img.mukewang.com/5458501000018e5802200220-100-100.jpg" alt="慕粉3722952">

                                        慕粉3722952                                        
                                                                                                                    </a>
                                    
                                                                    </div>

                                <!-- 编辑 -->
                                <div class="wenda-edit-box r">
                                                                        <span class="count-item l">回答<i>8</i></span>
                                    <span class="count-item l">浏览<i>776</i></span>
                                    
                                </div>
                                <!-- 编辑 end -->
                            </div>
                        </div>
                        
                        <div id="js-qa-wenda" class="detail-wenda aimgPreview rich-text"><p>{{$data['questions_introduce']}}</p></div>
                    </div>
                    <img src="../uploads/{{$data['questions_img']}}" style="width:100;height:100px;">
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
                                            <a href="#" class="bds_weixin icon-nav icon-share-weichat" data-cmd="weixin" title="分享到微信"></a>
                                            <a href="#" class="bds_qzone icon-nav icon-share-qq" data-cmd="qzone" title="分享到QQ空间"></a>
                                            <a href="#" class="bds_tsina icon-nav icon-share-weibo" data-cmd="tsina" title="分享到新浪微博"></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <em class="split l"></em>
                            <!-- follow -->
                                                            <a href="javascript:void(0)" data-id="356939" title="关注" class="l wenda-add-collection js-collection-btn">
                                    <i class="icon-heart"></i>
                                    <span class="detail-hearts js-detail-follow">1</span>
                                </a>
                                                    </div>
                        
                    </div>
                    <!-- 源自 & 分享 & 关注 end-->
                </div>

                        </div>

            <div id="js-qa-comment-input" class="detail-comment-input js-msg-context clearfix">
                <h3 class="answer-add-tip">添加回答</h3>
    <form action="{{url('answer_add')}}" method="post" enctype="multipart/form-data">         
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="questions_id" value="{{$data['id']}}">
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
    上传图片：<input type="file" name="img">
    <br>
    <input type="submit" id="js-wenda-ci-submit" class="btn btn-red detail-ans" data-qid="356983" value="回答">
    </form>
            </div>
            <!-- 回答数 -->
                                                <div class="ans_num">8回答</div>
                                        <!-- 回答回复 start -->
                            
                            @foreach($arr as $val)
                            <div class="ques-answer ques-new-answer clearfix divhf" id="">
                    <!-- 已采纳标志 -->
                                    
                    <div class="edit-title">编辑回答</div>
                    <div class="answer-con first" id="id_259404">
                        <div class="user-pic l">
                            <a href="/u/2411916/bbs" target="_blank">
                                <img src="http://img.mukewang.com/57de587c0001f31302790279-100-100.jpg" width="40" height="40" alt="?" />
                            </a>
                        </div><!--.user end-->
                        <div class="detail-r">    
                                                        <a class="detail-name" href="/u/2411916/bbs" target="_blank">InMyCity</a>
                                                                                    
                                                        
                            
                        </div>

                        
                        <div class="answer-content rich-text aimgPreview"><p><br />网管，网管，网管</p></div>
                        <div class="answer-content rich-text aimgPreview"><p><br />{{$val['answer_content']}}</p></div>
                                                <div class="ctrl-bar js-msg-context clearfix js-reply-tool hide">
                            <div class="detail-editor-btns r">
                                <span class="qa-tips"></span>
                                <button class="btn btn-normal js-reply-cancel">取消</button>
                                <button class="btn btn-red js-reply-submit" data-id="259404">保存</button>
                            </div>
                        </div>
                        
                        <div class="ctrl-bar clearfix js-wenda-tool">
                            <span class="agree-with dianzan" id="{{$val['id']}}" data-ques-id="356939" data-answer-id="259404" data-hasop=""><i class="icon-thumb-revert"></i><em class="emzan"></em></span>

                            <span class="oppose fandui" id="{{$val['id']}}" data-ques-id="356939" data-answer-id="259404" data-hasop=""><i class="imv2-thumb_down"></i><em class="emfan">反对</em></span>
                            
                            
                                                                                    
                            <span class="reply huifu" id="{{$val['id']}}" data-replynum="0" data-reply-id="259404" data-ques-uid="3722952">回复</span>

                                                        
                             <span class="time r">1天前</span>

                        </div><!--.ctrl-bar end-->

                        
                    </div><!--.answer-con end-->

                    <div class="reply-con" data-id="1">
                    
                        <ul class="reply-list">
                        
                        @foreach($res as $v)
                    @if($v['answer_id'] == $val['id'])
                        <li class="clearfix">
                            <div class="user-pic">
                                <a target="_blank" href="/u/4754213/bbs">
                                    <img alt="qq_夜尽天明_15" src="http://static.mukewang.com/img/user/587d76680001503401000100-40-40.jpg">
                                </a>
                            </div>
                            <div class="user-info clearfix">
                                <em>提问者</em>
                                <a class="from-user" href="/u/4754213/bbs">{{$val['answer_user_id']}}</a>
                                <span class="r floor">#1</span>
                            </div>
                            <div class="reply-content">{{$v['reply_content']}}</div>
                            <div class="reply-btn l twohu" data-username="qq_夜尽天明_15" data-uid="4754213">回复</div>
                            <span class="time r">4小时前</span>
                        </li>
                        
                        @endif
                        @endforeach
                        </ul>
                        
                        <div class="release-reply-con clearfix">
                                                        <div class="user-pic ">
                                <a href="/u/5528284/bbs" target="_blank">
                                    <img src="http://img.mukewang.com/595b4f5b00010b2901000100-100-100.jpg" width="40" height="40" alt="?"/>
                                </a>
                            </div>
                                                        <!--.user-pic end-->
                            

                            <div class="textarea-con">
                                                                <textarea name="release-reply" class="huifunr" id="release-reply" placeholder="写下你的回复"></textarea>
                                                            </div>
                            <p class="err-tip"></p>
                            <div class="userCtrl clearfix">
                                <div class="verify-code"></div>
                                <div class="do-reply-btn qvxiao" data-answer-id="259391" data-ques-uid="3722952">取消</div>
                                <div class="do-reply-btn hdhf" data-answer-id="259391" data-ques-uid="3722952">回复</div>
                            </div>
                        </div><!--.release-reply-con end-->
                    </div><!--.reply-con end-->
                    
                </div>
            
            @endforeach
            <!-- 回答回复 end -->
            <div class="qa-comment-page">
                        </div>

    </div>

        <div class="wenda-slider r">
            <div class="quiz"><a href="javascript:;" class="js-quiz">我要提问</a></div>
            <!-- 相关问题 -->
                          <div class="panel about-ques">
                <div class="panel-heading">
                  <h2 class="panel-title">相关问题</h2>
                </div>
                <div class="panel-body clearfix">
                                            <div class="mkhotlist padtop">
                            <a class="relwenda" href="/wenda/detail/356939" target="_blank">学会linux，主要从事什么工作？</a><i class="answer-num">8 回答</i>
                        </div>
                                            <div class="mkhotlist ">
                            <a class="relwenda" href="/wenda/detail/356924" target="_blank">centos7里没有locate命令，请问在哪里有centos6.5的镜像文件？</a><i class="answer-num">2 回答</i>
                        </div>
                                            <div class="mkhotlist ">
                            <a class="relwenda" href="/wenda/detail/356826" target="_blank">为什么程序员都喜欢用Linux操作系统呢？</a><i class="answer-num">10 回答</i>
                        </div>
                                            <div class="mkhotlist ">
                            <a class="relwenda" href="/wenda/detail/356815" target="_blank">求如何蹭网</a><i class="answer-num">2 回答</i>
                        </div>
                                            <div class="mkhotlist bordbottom">
                            <a class="relwenda" href="/wenda/detail/356550" target="_blank">数据库配置dsn应该怎么写</a><i class="answer-num">2 回答</i>
                        </div>
                                    </div>
              </div>
                        <!-- 广告 -->
                                            <div class="advertisement">
                    <a href="http://www.imooc.com/wenda/issuedetail/15" data-ast="yuanwendetailright_1_1055" target="_blank">
                        
                    </a>
                </div><!--.advertisement end-->
                                                                        <div class="recommend-class">
                    <div class="title clearfix">
                        <h3>相关分类</h3>
                    </div><!--title end-->
                    <ul class="cls-list">
                                                <li>
                            <div class="class-info">
                                <div class="class-icon">
                                    <a href="/wenda/20" target="_blank">
                                        <img src="http://img.mukewang.com/563aff130001c76f00900090.jpg" alt="Linux"/>
                                    </a>
                                </div><!--.class-icon end-->
                                <h4>
                                    <a href="/wenda/20" target="_blank">Linux</a>
                                </h4>
                                <p class="follow-person">15271人关注</p>
                                <a href="javascript:void(0)" data-tag-id="20" class="follow ">关注</a>
                                
                            </div><!--.class-info end-->
                                                                                    <div class="desc">
                                <a class="desc-link" href="/wenda/detail/352353" taget="_blank">问个愚蠢的问题，培训公司的可怕之处在哪？</a>
                                <i class="answer-num">35 回答</i>
                            </div>
                                                                                </li><!--li end-->
                                            </ul><!--.cls-list end-->
                </div><!--.recommend-class end-->
                            
        </div>

</div>

<div id="reply-box" style="display:none;">
    <div class="js-qa-reply-ibox qa-reply-ibox clearfix" >
        <div class="qa-reply-iavator l">
                        <a href="/myclub/otherquestion?uid=5528284" title="qq_淡定_60">
                <img src='http://img.mukewang.com/user/595b4f5b00010b2901000100-40-40.jpg' width='40' height='40' />
            </a>
                    </div>
        <div class="qa-reply-iwrap">
            <div class="qa-reply-iarea">
                <textarea maxlength="2000" name="" id="" class="js-reply-ipt ipt"  placeholder="写下你的评论..."></textarea>
            </div>
            <div class="qa-reply-ifoot clearfix">
                <div class="qa-reply-footright r">
                    <span class="qa-tips"></span>
                    <button class="btn-normal btn-mini js-ipt-cancel">取消</button>
                    <button class="btn-green btn-mini  js-ipt-submit">提交</button>
                </div>
            </div>
        </div>
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
    $(document).on("click",".dianzan",function(){
        var id = $(this).prop('id');
        var obj = $(this);
        //alert(id);return false;
        $.ajax({
            url:"{{url('answer_zan')}}",
            data:{id:id},
            dataType:"json",
            type:'get',
            success:function(msg){
                obj.find('.emzan').html(msg);
            }
        })
    })
    $(document).on("click",".fandui",function(){
        var id = $(this).prop('id');
        var obj = $(this);
        //alert(id);return false;
        $.ajax({
            url:"{{url('answer_fan')}}",
            data:{id:id},
            dataType:"json",
            type:'get',
            success:function(msg){
                if (msg == 1) {
                    obj.find('.emfan').html("已反对");
                } else if(msg == 0) {
                    obj.find('.emfan').html("反对");
                } else {
                    alert('系统错误');
                }
            }
        })
    })
    $(document).on("click",".huifu",function(){
        $(this).parents('.divhf').find('.reply-con').css('display','block');
    })
    $(document).on("click",".qvxiao",function(){
        $(this).parents('.divhf').find('.reply-con').css('display','none');
    })
    $(document).on("click",".hdhf",function(){
        var text = $(".huifunr").val();
        var id = $(".huifu").prop('id');
        $.ajax({
            url:"{{url('reply')}}",
            type:"get",
            data:{text:text,id:id},
            dataType:"json",
            success:function(msg){
                var ser ="";
                for (var i=0; i<msg.length; i++) 
                {
                    ser += '<li class="clearfix">\
                            <div class="user-pic">\
                                <a target="_blank" href="/u/4754213/bbs">\
                                    <img alt="qq_夜尽天明_15" src="http://static.mukewang.com/img/user/587d76680001503401000100-40-40.jpg">\
                                </a>\
                            </div>\
                            <div class="user-info clearfix">\
                                <em>提问者</em>\
                                <a class="from-user" href="/u/4754213/bbs">'+msg[i].answer_user_id+'</a>\
                                <span class="r floor">#1</span>\
                            </div>\
                            <div class="reply-content">'+msg[i].reply_content+'</div>\
                            <div class="reply-btn l twohu" data-username="qq_夜尽天明_15" data-uid="4754213">回复</div>\
                            <span class="time r">4小时前</span>\
                        </li>';
                }
                $(".huifu").parents('.divhf').find('.reply-list').html(ser);
            }
        })
    })
</script>
