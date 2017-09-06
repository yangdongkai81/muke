@extends('layouts.layouts')

@section('header')
@parent
@section('title','猿问')
@stop

@section('content')


<div id="main">


<div class="wenda clearfix">

    <div class="js-layout-change">
        <div class="l wenda-main">
            <div class="wd-top-slogan">
                <span>程序员自己的问答社区</span>
                <a class="js-quiz" href="{{url('question')}}">我要提问</a>
            </div>
            <div class="nav">
                <a href="/wenda" class="active">推荐</a>
                <a href="/wenda/new" >最新</a>
                <a href="/wenda/waitreply" >等待回答</a>
                <!-- <a href="{{url('wenda/issue')}}" >话题</a>
                <a href="{{url('issue')}}" >话题</a> -->
                            </div><!--.nav end-->

            
                                    <!--推荐位-->
            <ul class="recommend">
                                <li>
                                        <a href="http://www.imooc.com/wenda/issue" class="recommend-tag canlink">本期话题<i class="icon-right2"></i></a>
                                        <a href="http://www.imooc.com/wenda/issuedetail/15" class="recommend-link" data-ast="yuanwenindex_1_1251" target="_blank" title="【花式填坑第17期】被攻击？要提升？请优化移动端网站体验+性能！">【花式填坑第17期】被攻击？要提升？请优化移动端网站体验+性能！</a>
                </li>
                            </ul>
            <!--recommend end-->
                                   


            <!--左侧列表内容-->
            <div class="wenda-list">
@foreach ($data as $val)
<div class="ques-answer">
    <div class="tag-img">
                                            <a href="/wenda/3" target="_blank">
                <img src="http://img.mukewang.com/563afff200010a9f00900090.jpg" title=""/>
            </a>
                                    </div><!--.tag-img end-->
        <div class="from-tag">        来自
                <a href="/wenda/3" target="_blank">{{ $val['questions_type'] }}</a>
            </div><!--.from-tag end-->
        <div class="ques-con">
        <a href="{{url('question_one')}}/{{$val['id']}}" class="ques-con-content" title="&amp;#24819;&amp;#33258;&amp;#23398;java&amp;#65292;&amp;#25214;&amp;#24037;&amp;#20316;&amp;#65292;&amp;#33021;&amp;#25214;&amp;#21040;&amp;#21527;&amp;#65292;&amp;#27714;&amp;#22823;&amp;#31070;&amp;#25351;&amp;#25945;">{{$val['questions_title']}}</a>
        
    </div>
        @foreach ($newData as $v)

    @if($v['questions_id'] == $val['id'])
        <div class="answer-con first" data-answer-id="259287" id="answer-con">
        <div class="user">
            
                        <a href="/u/2231782/bbs" target="_blank">{{$v['answer_user_id']}}</a><span class="signature">回答：</span>
        </div>
        <div class="answer-content">{{$v['answer_content']}}</div>
        <div class="answer-content-all rich-text aimgPreview"><p>能,主要看你跟面试官聊得如何,聊得好要50K,聊得不好要5K,切记!</p></div>
        <div class="ctrl-bar clearfix">
            <span class="agree-with dianzan" id="{{$v['id']}}" data-ques-id="356895" data-answer-id="259287" data-hasop=""><b>赞同</b><em class="emzan"></em></span>
            <span class="oppose fandui" id="{{$v['id']}}" data-ques-id="356895" data-answer-id="259287" data-hasop=""><em class="emfan">反对</em></span>
           


            <span class="shrink">收起</span>
        </div><!--.ctrl-bar end-->
    </div><!--.answer-con end-->
    @endif
    @endforeach
    <div class="reply-con">
        <ul class="reply-list">
            <!--<li>
                <div class="user-pic">
                    <a href="?" target="_blank">
                        <img src="/static/img/appbg.jpg" alt="?"/>
                    </a>
                </div>&lt;!&ndash;.user end&ndash;&gt;
                <div class="user-info clearfix">
                    <em>提问者</em>
                    <a class="from-user" href="?">张三</a>
                    <span>回复</span>
                    <a class="to-user" href="?">李四</a>
                    <span class="time">14小时前</span>
                </div>
                <div class="reply-content">显示本次终端运行路线，或者其他命令可以做我送来的数据，在地图上显示本次终端运行路线，或者其他命令可以做我需要在安卓终端上做个软件。</div>
                <div class="reply-btn">回复</div>
            </li>-->


        </ul><!--.reply-list end-->
        <!--<div class="more-reply">点击展开后面<span>2</span>条评论</div>-->
        <div class="release-reply-con clearfix">
            <div class="user-pic">
                                <span class="no-login-pic"><i class="icon-ques-revert"></i></span>
                            </div><!--.user-pic end-->
            <div class="user-name">
                                <span class="no-login-user-name">未知生物</span>
                            </div>
            <div class="textarea-con">
                <textarea ></textarea>
                                <p class="no-login">你还没有登录，请先 <span class="login-btn">登录</span> 或 <span class="register-btn">注册</span> 慕课网账号</p>
                            </div>
            <p class="err-tip"></p>
            <div class="userCtrl clearfix">
                <div class="verify-code"></div>
                <div class="do-reply-btn" data-answer-id="259287" data-ques-uid="4278631">回复</div>
            </div>
        </div><!--.release-reply-con end-->
    </div><!--.reply-con end-->
    </div><!--.ques-answer end-->
@endforeach
<div class="page"><span class="disabled_page">首页</span><span class="disabled_page">上一页</span><a href="javascript:void(0)" class="active text-page-tag">1</a><a class="text-page-tag" href="/wenda/recommend/2">2</a><a class="text-page-tag" href="/wenda/recommend/3">3</a><a class="text-page-tag" href="/wenda/recommend/4">4</a><a class="text-page-tag" href="/wenda/recommend/5">5</a><a class="text-page-tag" href="/wenda/recommend/6">6</a><a class="text-page-tag" href="/wenda/recommend/7">7</a><a href="/wenda/recommend/2">下一页</a><a href="/wenda/recommend/1826">尾页</a></div>

                
            </div>
        </div>
        <div class="r wenda-slider">
            
             
<!--.my-follow-class登录后可见-->

<div class="recommend-class">
    <div class="title clearfix">
        <h3>推荐分类</h3>
        <span class="all-cls">全部分类</span>
    </div><!--title end-->
    <ul class="cls-list">
                <li>
            <div class="class-info">
                <div class="class-icon">
                    <a href="/wenda/26" target="_blank">
                        <img src="http://img.mukewang.com/563b0af800018db300900090.jpg" alt="前端工具"/>
                    </a>
                </div><!--.class-icon end-->
                <h4><a href="/wenda/26" target="_blank">前端工具</a></h4>
                <p class="follow-person">27255人关注</p>
                                <a href="javascript:void(0)" data-tag-id="26" class="follow">关注</a>
                            </div><!--.class-info end-->
            <div class="desc">web前端开发时使用的相关工具</div>
        </li><!--li end-->
                <li>
            <div class="class-info">
                <div class="class-icon">
                    <a href="/wenda/17" target="_blank">
                        <img src="http://img.mukewang.com/563aff440001e80700900090.jpg" alt="JavaScript"/>
                    </a>
                </div><!--.class-icon end-->
                <h4><a href="/wenda/17" target="_blank">JavaScript</a></h4>
                <p class="follow-person">54966人关注</p>
                                <a href="javascript:void(0)" data-tag-id="17" class="follow">关注</a>
                            </div><!--.class-info end-->
            <div class="desc">JavaScript做为Web前端开发师需要掌握的必杀技术，它是互联...</div>
        </li><!--li end-->
                <li>
            <div class="class-info">
                <div class="class-icon">
                    <a href="/wenda/14" target="_blank">
                        <img src="http://img.mukewang.com/563aff620001ec7600900090.jpg" alt="Html5"/>
                    </a>
                </div><!--.class-icon end-->
                <h4><a href="/wenda/14" target="_blank">Html5</a></h4>
                <p class="follow-person">24354人关注</p>
                                <a href="javascript:void(0)" data-tag-id="14" class="follow">关注</a>
                            </div><!--.class-info end-->
            <div class="desc">HTML5它的综合性功能可助网页设计者和开发者们一臂之力，使他们在开...</div>
        </li><!--li end-->
            </ul><!--.cls-list end-->
</div><!--.recommend-class end-->

<div class="advertisement">
        
    </div><!--.advertisement end-->
<div class="hot-ques">
    <h3 class="title">热门问题</h3>
    <ul>
                <li>
            <p class="content"><a target="_blank" href="/wenda/detail/356101">我刚实习，然后公司的里给了我一张网页，让我用HTML做出来，求助！！</a></p>
            <div class="info-bar clearfix">
                <a target="_blank" href="/wenda/detail/356101" class="answer-num">35 回答</a>
                <a target="_blank" href="/wenda/detail/356101" class="follow-num">3 关注</a>
                <a target="_blank" href="/wenda/5" class="from">来自 Html/CSS</a>
            </div>
        </li>
                <li>
            <p class="content"><a target="_blank" href="/wenda/detail/356404">求帮忙设计个网页</a></p>
            <div class="info-bar clearfix">
                <a target="_blank" href="/wenda/detail/356404" class="answer-num">20 回答</a>
                <a target="_blank" href="/wenda/detail/356404" class="follow-num">2 关注</a>
                <a target="_blank" href="/wenda/10" class="from">来自 Photoshop</a>
            </div>
        </li>
                <li>
            <p class="content"><a target="_blank" href="/wenda/detail/356100">请问，我要让这个两个方框上下对齐，应该在代码中怎么打，谢谢</a></p>
            <div class="info-bar clearfix">
                <a target="_blank" href="/wenda/detail/356100" class="answer-num">16 回答</a>
                <a target="_blank" href="/wenda/detail/356100" class="follow-num">0 关注</a>
                <a target="_blank" href="/wenda/5" class="from">来自 Html/CSS</a>
            </div>
        </li>
                <li>
            <p class="content"><a target="_blank" href="/wenda/detail/356013">我是一名准备升大二的计算机学生,自学能力有自信,老师我应该怎么做才能尽量做到大二暑假...</a></p>
            <div class="info-bar clearfix">
                <a target="_blank" href="/wenda/detail/356013" class="answer-num">16 回答</a>
                <a target="_blank" href="/wenda/detail/356013" class="follow-num">5 关注</a>
                <a target="_blank" href="/wenda/12" class="from">来自 Android</a>
            </div>
        </li>
                <li>
            <p class="content"><a target="_blank" href="/wenda/detail/356579">IT问题，求赐教</a></p>
            <div class="info-bar clearfix">
                <a target="_blank" href="/wenda/detail/356579" class="answer-num">16 回答</a>
                <a target="_blank" href="/wenda/detail/356579" class="follow-num">0 关注</a>
                <a target="_blank" href="/wenda/28" class="from">来自 C</a>
            </div>
        </li>
            </ul><!--ul end-->
</div><!--.hot-ques end-->

<div class="leifeng-sort">
    <h3 class="title clearfix">
        <span>回答雷锋榜</span>
        <span class='leifeng-tab js-leifeng-tab' data-type='week'>一周</span>
        <span class='leifeng-tab js-leifeng-tab active' data-type='day'>今日</span>
    </h3>
    
            <div class='leifeng-tab-box leifeng-day js-leifeng-tab-box' data-type='day'>
        <ul class='leifeng-tab-box-min'>
                        <li>
                <div class="ranking first">1</div>
                <div class="user-pic">
                    <a target="_blank" href="/u/5299448/bbs">
                        <img src="http://img.mukewang.com/533e4d510001c2ad02000200-100-100.jpg" title="error浮生若梦"/>
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="/u/5299448/bbs">error浮生若梦...</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">PHP开发工程师</span>
                    <span class="answer-num">18回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking second">2</div>
                <div class="user-pic">
                    <a target="_blank" href="/u/3200427/bbs">
                        <img src="http://img.mukewang.com/545861d500015cc602200220-100-100.jpg" title="冬我在路上"/>
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="/u/3200427/bbs">冬我在路上</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">学生</span>
                    <span class="answer-num">9回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking third">3</div>
                <div class="user-pic">
                    <a target="_blank" href="/u/2231782/bbs">
                        <img src="http://img.mukewang.com/59a126460001911d01990199-100-100.jpg" title="胜利女神在微笑"/>
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="/u/2231782/bbs">胜利女神在微笑...</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">JAVA开发工程师</span>
                    <span class="answer-num">8回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">4</div>
                <div class="user-pic">
                    <a target="_blank" href="/u/5245638/bbs">
                        <img src="http://img.mukewang.com/5918f0ea000172fb02790279-100-100.jpg" title="万飞"/>
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="/u/5245638/bbs">万飞</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">全栈工程师</span>
                    <span class="answer-num">6回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">5</div>
                <div class="user-pic">
                    <a target="_blank" href="/u/5136905/bbs">
                        <img src="http://img.mukewang.com/58e1d8ef0001729b01000100-100-100.jpg" title="qq_安安_17"/>
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="/u/5136905/bbs">qq_安安_17</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">学生</span>
                    <span class="answer-num">6回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">6</div>
                <div class="user-pic">
                    <a target="_blank" href="/u/4923526/bbs">
                        <img src="http://img.mukewang.com/533e4d7c0001828702000200-100-100.jpg" title="我是新手_请多指教"/>
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="/u/4923526/bbs">我是新手_请多指...</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">学生</span>
                    <span class="answer-num">5回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">7</div>
                <div class="user-pic">
                    <a target="_blank" href="/u/2504353/bbs">
                        <img src="http://img.mukewang.com/578e368a0001f94001790179-100-100.jpg" title="Imcainiao"/>
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="/u/2504353/bbs">Imcainiao</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">学生</span>
                    <span class="answer-num">3回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">8</div>
                <div class="user-pic">
                    <a target="_blank" href="/u/2747119/bbs">
                        <img src="http://img.mukewang.com/567d631600013c8e01000100-100-100.jpg" title="哇妙012"/>
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="/u/2747119/bbs">哇妙012</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role"></span>
                    <span class="answer-num">3回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">9</div>
                <div class="user-pic">
                    <a target="_blank" href="/u/5547979/bbs">
                        <img src="http://img.mukewang.com/596f31d400011ae501800180-100-100.jpg" title="weibo_刚毅坚卓12_0"/>
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="/u/5547979/bbs">weibo_刚毅坚卓12...</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">学生</span>
                    <span class="answer-num">3回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">10</div>
                <div class="user-pic">
                    <a target="_blank" href="/u/4202735/bbs">
                        <img src="http://img.mukewang.com/5800fb230001d86301000100-100-100.jpg" title="chinesszz"/>
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="/u/4202735/bbs">chinesszz</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">JAVA开发工程师</span>
                    <span class="answer-num">3回答</span>
                </div><!--.user-info end-->
            </li>
                    </ul>
                    <div class='lyleif'><span class='js-lyleif'>显示另外5个雷锋</span></div>
            </div>
            
            <div class='leifeng-tab-box leifeng-week js-leifeng-tab-box' data-type='week'>
        <ul class='leifeng-tab-box-min'>
                        <li>
                <div class="ranking first">1</div>
                <div class="user-pic">
                    <a target="_blank" href="/u/5136905/bbs">
                        <img src="http://img.mukewang.com/58e1d8ef0001729b01000100-100-100.jpg" title="qq_安安_17"/>
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="/u/5136905/bbs">qq_安安_17</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">学生</span>
                    <span class="answer-num">27回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking second">2</div>
                <div class="user-pic">
                    <a target="_blank" href="/u/2231782/bbs">
                        <img src="http://img.mukewang.com/59a126460001911d01990199-100-100.jpg" title="胜利女神在微笑"/>
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="/u/2231782/bbs">胜利女神在微笑...</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">JAVA开发工程师</span>
                    <span class="answer-num">25回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking third">3</div>
                <div class="user-pic">
                    <a target="_blank" href="/u/4346246/bbs">
                        <img src="http://img.mukewang.com/545847990001d46402200220-100-100.jpg" title="日职2016_软一刘彻"/>
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="/u/4346246/bbs">日职2016_软一刘...</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">学生</span>
                    <span class="answer-num">23回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">4</div>
                <div class="user-pic">
                    <a target="_blank" href="/u/4923526/bbs">
                        <img src="http://img.mukewang.com/533e4d7c0001828702000200-100-100.jpg" title="我是新手_请多指教"/>
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="/u/4923526/bbs">我是新手_请多指...</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">学生</span>
                    <span class="answer-num">20回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">5</div>
                <div class="user-pic">
                    <a target="_blank" href="/u/2478917/bbs">
                        <img src="http://img.mukewang.com/599a89f500013c7801100110-100-100.jpg" title="o卖女孩的小火柴o"/>
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="/u/2478917/bbs">o卖女孩的小火柴o...</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">学生</span>
                    <span class="answer-num">20回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">6</div>
                <div class="user-pic">
                    <a target="_blank" href="/u/2504353/bbs">
                        <img src="http://img.mukewang.com/578e368a0001f94001790179-100-100.jpg" title="Imcainiao"/>
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="/u/2504353/bbs">Imcainiao</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">学生</span>
                    <span class="answer-num">18回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">7</div>
                <div class="user-pic">
                    <a target="_blank" href="/u/3233775/bbs">
                        <img src="http://img.mukewang.com/587475030001b86a05800331-100-100.jpg" title="牛奶小哥哥"/>
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="/u/3233775/bbs">牛奶小哥哥</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">Web前端工程师</span>
                    <span class="answer-num">15回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">8</div>
                <div class="user-pic">
                    <a target="_blank" href="/u/2600201/bbs">
                        <img src="http://img.mukewang.com/545846230001832502200220-100-100.jpg" title="__innocence"/>
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="/u/2600201/bbs">__innocence</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">移动开发工程师</span>
                    <span class="answer-num">14回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">9</div>
                <div class="user-pic">
                    <a target="_blank" href="/u/2619575/bbs">
                        <img src="http://img.mukewang.com/58f76ed10001355404190419-100-100.jpg" title="桥本奈奈未"/>
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="/u/2619575/bbs">桥本奈奈未</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">Web前端工程师</span>
                    <span class="answer-num">13回答</span>
                </div><!--.user-info end-->
            </li>
                        <li>
                <div class="ranking ">10</div>
                <div class="user-pic">
                    <a target="_blank" href="/u/4346151/bbs">
                        <img src="http://img.mukewang.com/581bd1750001b99401000100-100-100.jpg" title="萧欢打靶把营归"/>
                    </a>
                </div><!--.user-pic end-->
                <div class="user-name">
                    <a target="_blank" href="/u/4346151/bbs">萧欢打靶把营归...</a>
                </div><!--.user-name end-->
                <div class="user-info clearfix">
                    <span class="role">学生</span>
                    <span class="answer-num">11回答</span>
                </div><!--.user-info end-->
            </li>
                    </ul>
                    <div class='lyleif'><span class='js-lyleif'>显示另外5个雷锋</span></div>
            </div>
        </div><!--.leifeng-sort end-->

        </div>
    </div>
</div>

  <div class="tag-pop" id="tag-pop">
    <div class="shade"></div>
    <div class="tag-main">
        <h3><span>关注我喜欢或专注的猿问分类</span> <i class="icon-close2 js-close"></i></h3>
        <ul class="tag-list clearfix">
                        <li data-tag-id="12" >
                <img src="http://img.mukewang.com/563aff7e0001c8c700900090.jpg" alt=""/>
                <span>Android</span>
            </li>
                        <li data-tag-id="22" >
                <img src="http://img.mukewang.com/563afef30001025000900090.jpg" alt=""/>
                <span>AngularJS</span>
            </li>
                        <li data-tag-id="24" >
                <img src="http://img.mukewang.com/563afee70001ccbe00900090.jpg" alt=""/>
                <span>Bootstrap</span>
            </li>
                        <li data-tag-id="28" >
                <img src="http://img.mukewang.com/563afeb5000149c000900090.jpg" alt=""/>
                <span>C</span>
            </li>
                        <li data-tag-id="38" >
                <img src="http://img.mukewang.com/563afd4600014d7e00900090.jpg" alt=""/>
                <span>C#</span>
            </li>
                        <li data-tag-id="30" >
                <img src="http://img.mukewang.com/563afe97000178c200900090.jpg" alt=""/>
                <span>C++</span>
            </li>
                        <li data-tag-id="34" >
                <img src="http://img.mukewang.com/563afdfb000167f300900090.jpg" alt=""/>
                <span>Cocos2d-x</span>
            </li>
                        <li data-tag-id="25" >
                <img src="http://img.mukewang.com/563afed80001928100900090.jpg" alt=""/>
                <span>CSS3</span>
            </li>
                        <li data-tag-id="31" >
                <img src="http://img.mukewang.com/563afe8400019fbc00900090.jpg" alt=""/>
                <span>Go</span>
            </li>
                        <li data-tag-id="5" >
                <img src="http://img.mukewang.com/563affe40001680c00900090.jpg" alt=""/>
                <span>Html/CSS</span>
            </li>
                        <li data-tag-id="14" >
                <img src="http://img.mukewang.com/563aff620001ec7600900090.jpg" alt=""/>
                <span>Html5</span>
            </li>
                        <li data-tag-id="19" >
                <img src="http://img.mukewang.com/563aff2000019d0700900090.jpg" alt=""/>
                <span>iOS</span>
            </li>
                        <li data-tag-id="3" >
                <img src="http://img.mukewang.com/563afff200010a9f00900090.jpg" alt=""/>
                <span>JAVA</span>
            </li>
                        <li data-tag-id="17" >
                <img src="http://img.mukewang.com/563aff440001e80700900090.jpg" alt=""/>
                <span>JavaScript</span>
            </li>
                        <li data-tag-id="15" >
                <img src="http://img.mukewang.com/563aff530001428b00900090.jpg" alt=""/>
                <span>JQuery</span>
            </li>
                        <li data-tag-id="20" >
                <img src="http://img.mukewang.com/563aff130001c76f00900090.jpg" alt=""/>
                <span>Linux</span>
            </li>
                        <li data-tag-id="7" >
                <img src="http://img.mukewang.com/563affd00001cc8a00900090.jpg" alt=""/>
                <span>Maya</span>
            </li>
                        <li data-tag-id="8" >
                <img src="http://img.mukewang.com/563affc20001ce1000900090.jpg" alt=""/>
                <span>MongoDB</span>
            </li>
                        <li data-tag-id="11" >
                <img src="http://img.mukewang.com/563aff910001771f00900090.jpg" alt=""/>
                <span>Mysql</span>
            </li>
                        <li data-tag-id="13" >
                <img src="http://img.mukewang.com/563aff700001005200900090.jpg" alt=""/>
                <span>Node.js</span>
            </li>
                        <li data-tag-id="29" >
                <img src="http://img.mukewang.com/563afea70001be2b00900090.jpg" alt=""/>
                <span>Oracle</span>
            </li>
                        <li data-tag-id="10" >
                <img src="http://img.mukewang.com/563affa10001301000900090.jpg" alt=""/>
                <span>Photoshop</span>
            </li>
                        <li data-tag-id="2" >
                <img src="http://img.mukewang.com/563afd9d0001d30a00900090.jpg" alt=""/>
                <span>PHP</span>
            </li>
                        <li data-tag-id="9" >
                <img src="http://img.mukewang.com/563affb10001bbc500900090.jpg" alt=""/>
                <span>Premiere</span>
            </li>
                        <li data-tag-id="18" >
                <img src="http://img.mukewang.com/563aff300001f47400900090.jpg" alt=""/>
                <span>Python</span>
            </li>
                        <li data-tag-id="50" >
                <img src="http://img.mukewang.com/579f2f59000130cc02400240.jpg" alt=""/>
                <span>React.JS</span>
            </li>
                        <li data-tag-id="54" >
                <img src="http://img.mukewang.com/58453e8c0001204302400240.jpg" alt=""/>
                <span>Ruby</span>
            </li>
                        <li data-tag-id="53" >
                <img src="http://img.mukewang.com/57b4497d0001223302400240.jpg" alt=""/>
                <span>Sass/Less</span>
            </li>
                        <li data-tag-id="36" >
                <img src="http://img.mukewang.com/563afdc60001f1a900900090.jpg" alt=""/>
                <span>SQL Server</span>
            </li>
                        <li data-tag-id="33" >
                <img src="http://img.mukewang.com/563afe730001883800900090.jpg" alt=""/>
                <span>Unity 3D</span>
            </li>
                        <li data-tag-id="52" >
                <img src="http://img.mukewang.com/57b2d150000136e702400240.jpg" alt=""/>
                <span>Vue.js</span>
            </li>
                        <li data-tag-id="27" >
                <img src="http://img.mukewang.com/563afec200019e2400900090.jpg" alt=""/>
                <span>WebApp</span>
            </li>
                        <li data-tag-id="40" >
                <img src="http://img.mukewang.com/564045270001d8dc00900090.jpg" alt=""/>
                <span>ZBrush</span>
            </li>
                        <li data-tag-id="21" >
                <img src="http://img.mukewang.com/563aff040001d14100900090.jpg" alt=""/>
                <span>云计算</span>
            </li>
                        <li data-tag-id="26" >
                <img src="http://img.mukewang.com/563b0af800018db300900090.jpg" alt=""/>
                <span>前端工具</span>
            </li>
                        <li data-tag-id="35" >
                <img src="http://img.mukewang.com/563afdd50001d4a400900090.jpg" alt=""/>
                <span>大数据</span>
            </li>
                        <li data-tag-id="39" >
                <img src="http://img.mukewang.com/563b04ef00014a4b00900090.jpg" alt=""/>
                <span>数据结构</span>
            </li>
                        <li data-tag-id="51" >
                <img src="http://img.mukewang.com/57aad4170001397802400240.jpg" alt=""/>
                <span>测试</span>
            </li>
                    </ul>
        <div class="save-btn">保存</div>
    </div><!--.tag-main end-->
</div><!--.tag-pop end-->


</div>




@stop

@section('header')
@parent
@stop

<script type="text/javascript" src="./jquery.min.js"></script>
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
                //alert(msg);
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
</script>
