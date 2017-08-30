@extends('layouts.layouts')

@section('header')
@parent
@section('title','猿问')
<link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=2.5,wenda/issue-less.css?v=201708281028" type="text/css" />

@stop

@section('content')

<div id="main">


<div class="wenda clearfix">

    <div class="js-layout-change">
        <div class="l wenda-main">
            <div class="wd-top-slogan">
                <span>程序员自己的问答社区</span>
                <a class="js-quiz" href="{{url('wenda/question')}}">我要提问</a>
            </div>
            <div class="nav">
                <a href="/wenda">推荐</a>
                <a href="/wenda/new">最新</a>
                <a href="/wenda/waitreply">等待回答</a>
                <a href="/wenda/issue" class="active">话题</a>

                            </div><!--.nav end-->

            <!--推荐位-->
            
            <!--recommend end-->

            <!--左侧列表内容-->
                        <div class="issue-list">
                <ul class="issue-box">
                                        <li class="issue-item clearfix">
                        <a href="/wenda/issuedetail/15" class="l issue-img-box" target="_blank">
                                                                                    <img class="l issue-img" src="http://img.mukewang.com/59a377c90001bcf205120512.jpg" alt="【花式填坑】第17期  被攻击？要提升？请优化移动端网站体验+性能！">
                                                                                   
                        </a>
                        <div class="issue-content l">
                            <p class="issue-title"><a href="/wenda/issuedetail/15" target="_blank" title="【花式填坑】第17期  被攻击？要提升？请优化移动端网站体验+性能！">【花式填坑】第17期  被攻击？要提升？请优化移动端网站体验+性能！</a></p>
                            <p class="issue-desc" title="凭借快速高效、迭代速度、基于微信分享能力等因素，Web应用替代App将可以预期。那么，如何使用新技术进行Web应用的性能优化？用户体验又如何向App靠近？参与话题，看老师是如何优化移动端网站体验+性能，且拒被攻击的！">凭借快速高效、迭代速度、基于微信分享能力等因素，Web应用替代App将可以预期。那么，如何使用新技术进行Web应用的性能优化？用户体验又如何向App靠近？参与话题，看老师是如何优化移动端网站体验+性能，且拒被攻击的！</p>
                            <div class="detail-box clearfix">
                                <div class="left-detail l">
                                                                        <span class="join">3参与</span>
                                    <span class="look">114浏览</span>
                                </div>

                                                                <div class="right-guest r js-usercard-box">
                                    <span class="l">本期嘉宾</span>
                                    <div class="guest-box l">
                                                                                                            <a href="http://www.imooc.com/u/5693238/bbs" target="_blank" class="l guest ">
                                        <img class="js-usercard-dialog" data-userid="5693238" src="http://img.mukewang.com/5993b3e40001767406100610-100-100.jpg" alt="">
                                    </a>
                                                                                                            </div>
                                </div>
                                                            </div>
                        </div>
                    </li>
                                        <li class="issue-item clearfix">
                        <a href="/wenda/issuedetail/14" class="l issue-img-box" target="_blank">
                                                                                    <img class="l issue-img issue-end" src="http://img.mukewang.com/599a35400001728d05120512.jpg" alt="【空空说】第2期  如何拿下“大厂”Offer之前端篇？">
                            <div class="issue-status issue-begin">已结束</div>
                                                                                   
                        </a>
                        <div class="issue-content l">
                            <p class="issue-title"><a href="/wenda/issuedetail/14" target="_blank" title="【空空说】第2期  如何拿下“大厂”Offer之前端篇？">【空空说】第2期  如何拿下“大厂”Offer之前端篇？</a></p>
                            <p class="issue-desc" title="如今大厂对前端要求越来越高，从准备到面试，如何通过层层选拔Get√Offer？活动页内提问获赞排名前10名的用户可获得大佬亲自批阅简历的资格；">如今大厂对前端要求越来越高，从准备到面试，如何通过层层选拔Get√Offer？活动页内提问获赞排名前10名的用户可获得大佬亲自批阅简历的资格；</p>
                            <div class="detail-box clearfix">
                                <div class="left-detail l">
                                                                        <span class="time">2017/08/21 - 2017/08/27</span>
                                                                        <span class="join">45参与</span>
                                    <span class="look">714浏览</span>
                                </div>

                                                                <div class="right-guest r js-usercard-box">
                                    <span class="l">本期嘉宾</span>
                                    <div class="guest-box l">
                                                                                                            <a href="http://www.imooc.com/t/5027812?mc_marking=33d82b216971e1863cd08dd722d2e61b&mc_channel=act" target="_blank" class="l guest ">
                                        <img class="js-usercard-dialog" data-userid="5027812" src="http://img.mukewang.com/54584cb50001e5b302200220-100-100.jpg" alt="">
                                    </a>
                                                                                                            </div>
                                </div>
                                                            </div>
                        </div>
                    </li>
                                        <li class="issue-item clearfix">
                        <a href="/wenda/issuedetail/13" class="l issue-img-box" target="_blank">
                                                                                    <img class="l issue-img issue-end" src="http://img.mukewang.com/5990fbf50001746705120512.jpg" alt="【空空说】第1期  如何拿到BAT校招/社招Offer之Java&amp;Android篇？">
                            <div class="issue-status issue-begin">已结束</div>
                                                                                   
                        </a>
                        <div class="issue-content l">
                            <p class="issue-title"><a href="/wenda/issuedetail/13" target="_blank" title="【空空说】第1期  如何拿到BAT校招/社招Offer之Java&amp;Android篇？">【空空说】第1期  如何拿到BAT校招/社招Offer之Java&amp;Android篇？</a></p>
                            <p class="issue-desc" title="BAT企业招聘要求越来越高，战略性应对面试成为了首要问题。比如，如何在招聘中立于不败之地？如何高效的撰写简历让面试官眼前一亮？参与话题，直面BAT大牛面试官，还有机会获得大佬亲自批阅简历的资格哦！">BAT企业招聘要求越来越高，战略性应对面试成为了首要问题。比如，如何在招聘中立于不败之地？如何高效的撰写简历让面试官眼前一亮？参与话题，直面BAT大牛面试官，还有机会获得大佬亲自批阅简历的资格哦！</p>
                            <div class="detail-box clearfix">
                                <div class="left-detail l">
                                                                        <span class="time">2017/08/14 - 2017/08/20</span>
                                                                        <span class="join">85参与</span>
                                    <span class="look">2239浏览</span>
                                </div>

                                                                <div class="right-guest r js-usercard-box">
                                    <span class="l">本期嘉宾</span>
                                    <div class="guest-box l">
                                                                                                            <a href="http://www.imooc.com/t/5245191?mc_marking=904d58b55872d94186527afd9779b1dc&mc_channel=act" target="_blank" class="l guest ">
                                        <img class="js-usercard-dialog" data-userid="5245191" src="http://img.mukewang.com/590b09de0001503904000400-100-100.jpg" alt="">
                                    </a>
                                                                                                            </div>
                                </div>
                                                            </div>
                        </div>
                    </li>
                                        <li class="issue-item clearfix">
                        <a href="/wenda/issuedetail/12" class="l issue-img-box" target="_blank">
                                                                                    <img class="l issue-img issue-end" src="http://img.mukewang.com/5987c89700014ec105120512.jpg" alt="【花式填坑】第16期  如何使用Python实现自动化运维？">
                            <div class="issue-status issue-begin">已结束</div>
                                                                                   
                        </a>
                        <div class="issue-content l">
                            <p class="issue-title"><a href="/wenda/issuedetail/12" target="_blank" title="【花式填坑】第16期  如何使用Python实现自动化运维？">【花式填坑】第16期  如何使用Python实现自动化运维？</a></p>
                            <p class="issue-desc" title="Python拥有强大的脚本处理功能，它在操作Linux系统方面具有先天的优势，许多云平台、运维监控管理工具都是使用Python开发的，Python自动化运维让运维工程师的工作量减少效率提高！">Python拥有强大的脚本处理功能，它在操作Linux系统方面具有先天的优势，许多云平台、运维监控管理工具都是使用Python开发的，Python自动化运维让运维工程师的工作量减少效率提高！</p>
                            <div class="detail-box clearfix">
                                <div class="left-detail l">
                                                                        <span class="time">2017/08/11 - 2017/08/13</span>
                                                                        <span class="join">18参与</span>
                                    <span class="look">1954浏览</span>
                                </div>

                                                                <div class="right-guest r js-usercard-box">
                                    <span class="l">本期嘉宾</span>
                                    <div class="guest-box l">
                                                                                                            <a href="http://www.imooc.com/t/1040053?mc_marking=bc7b433523f2b5a32f0d6bb03d517092&mc_channel=act" target="_blank" class="l guest ">
                                        <img class="js-usercard-dialog" data-userid="1040053" src="http://img.mukewang.com/551375770001ea2202000200-100-100.jpg" alt="">
                                    </a>
                                                                                                            </div>
                                </div>
                                                            </div>
                        </div>
                    </li>
                                        <li class="issue-item clearfix">
                        <a href="/wenda/issuedetail/11" class="l issue-img-box" target="_blank">
                                                                                    <img class="l issue-img issue-end" src="http://img.mukewang.com/597e9da80001d87105120512.jpg" alt="【花式填坑】第15期  连Angular都学不精，敢说自己做前端？">
                            <div class="issue-status issue-begin">已结束</div>
                                                                                   
                        </a>
                        <div class="issue-content l">
                            <p class="issue-title"><a href="/wenda/issuedetail/11" target="_blank" title="【花式填坑】第15期  连Angular都学不精，敢说自己做前端？">【花式填坑】第15期  连Angular都学不精，敢说自己做前端？</a></p>
                            <p class="issue-desc" title="前端技术层出不穷，难免选择困难，如何选、怎么学便成了首要问题。那么，如何选择才能不被框架束缚，稳扎稳打？高效快速的掌握不易过时的知识技能又该怎么做呢？参与话题，与大牛老师共同探讨如何 Easy应对前端问题。">前端技术层出不穷，难免选择困难，如何选、怎么学便成了首要问题。那么，如何选择才能不被框架束缚，稳扎稳打？高效快速的掌握不易过时的知识技能又该怎么做呢？参与话题，与大牛老师共同探讨如何 Easy应对前端问题。</p>
                            <div class="detail-box clearfix">
                                <div class="left-detail l">
                                                                        <span class="time">2017/08/04 - 2017/08/06</span>
                                                                        <span class="join">86参与</span>
                                    <span class="look">4375浏览</span>
                                </div>

                                                                <div class="right-guest r js-usercard-box">
                                    <span class="l">本期嘉宾</span>
                                    <div class="guest-box l">
                                                                                                            <a href="http://www.imooc.com/t/5584841?mc_marking=6b2626f66d3627c77a3e14a9627fc609&mc_channel=act" target="_blank" class="l guest ">
                                        <img class="js-usercard-dialog" data-userid="5584841" src="http://img.mukewang.com/596c524e000116be02650265-100-100.jpg" alt="">
                                    </a>
                                                                                                            </div>
                                </div>
                                                            </div>
                        </div>
                    </li>
                                        <li class="issue-item clearfix">
                        <a href="/wenda/issuedetail/10" class="l issue-img-box" target="_blank">
                                                                                    <img class="l issue-img issue-end" src="http://img.mukewang.com/5976e2770001690505120512.jpg" alt="【花式填坑】第14期  巧用中间件，Get√工作中的Nginx技能？">
                            <div class="issue-status issue-begin">已结束</div>
                                                                                   
                        </a>
                        <div class="issue-content l">
                            <p class="issue-title"><a href="/wenda/issuedetail/10" target="_blank" title="【花式填坑】第14期  巧用中间件，Get√工作中的Nginx技能？">【花式填坑】第14期  巧用中间件，Get√工作中的Nginx技能？</a></p>
                            <p class="issue-desc" title="Nginx作为一个轻量级、高性能的Web中间件服务，究竟哪些技能点备受青睐？如何巧妙避地开中间件中的大小坑，避免反复出现的问题？欢迎参与话题与陈杰老师共同讨论，如何在工作中用好、用精Nginx中间件。">Nginx作为一个轻量级、高性能的Web中间件服务，究竟哪些技能点备受青睐？如何巧妙避地开中间件中的大小坑，避免反复出现的问题？欢迎参与话题与陈杰老师共同讨论，如何在工作中用好、用精Nginx中间件。</p>
                            <div class="detail-box clearfix">
                                <div class="left-detail l">
                                                                        <span class="time">2017/07/21 - 2017/07/23</span>
                                                                        <span class="join">20参与</span>
                                    <span class="look">1973浏览</span>
                                </div>

                                                                <div class="right-guest r js-usercard-box">
                                    <span class="l">本期嘉宾</span>
                                    <div class="guest-box l">
                                                                                                            <a href="http://www.imooc.com/t/1352822?mc_marking=1bc716bd974fafeab13745e5dc8328a3&mc_channel=act" target="_blank" class="l guest ">
                                        <img class="js-usercard-dialog" data-userid="1352822" src="http://img.mukewang.com/5510c7a600016ea802200220-100-100.jpg" alt="">
                                    </a>
                                                                                                            </div>
                                </div>
                                                            </div>
                        </div>
                    </li>
                                        <li class="issue-item clearfix">
                        <a href="/wenda/issuedetail/9" class="l issue-img-box" target="_blank">
                                                                                    <img class="l issue-img issue-end" src="http://img.mukewang.com/596c79060001777605120512.jpg" alt="【花式填坑】第13期  如何高效开发企业级电商的前端？">
                            <div class="issue-status issue-begin">已结束</div>
                                                                                   
                        </a>
                        <div class="issue-content l">
                            <p class="issue-title"><a href="/wenda/issuedetail/9" target="_blank" title="【花式填坑】第13期  如何高效开发企业级电商的前端？">【花式填坑】第13期  如何高效开发企业级电商的前端？</a></p>
                            <p class="issue-desc" title="电商前端项目作为互联网行业中的典型代表，应用最广、发展最显成熟，但在实际开发中也会遭遇各种问题。比如，更适合电商企业的前端开发方式有哪些、如何保证高效的前端开发等等。欢迎参与话题，与老师共同讨论">电商前端项目作为互联网行业中的典型代表，应用最广、发展最显成熟，但在实际开发中也会遭遇各种问题。比如，更适合电商企业的前端开发方式有哪些、如何保证高效的前端开发等等。欢迎参与话题，与老师共同讨论</p>
                            <div class="detail-box clearfix">
                                <div class="left-detail l">
                                                                        <span class="time">2017/07/21 - 2017/07/23</span>
                                                                        <span class="join">38参与</span>
                                    <span class="look">1560浏览</span>
                                </div>

                                                                <div class="right-guest r js-usercard-box">
                                    <span class="l">本期嘉宾</span>
                                    <div class="guest-box l">
                                                                                                            <a href="http://www.imooc.com/t/198337?mc_marking=d159581339a27f833f89e408fb4a5309&mc_channel=act" target="_blank" class="l guest ">
                                        <img class="js-usercard-dialog" data-userid="198337" src="http://img.mukewang.com/592530b40001e68809880996-100-100.jpg" alt="">
                                    </a>
                                                                                                            </div>
                                </div>
                                                            </div>
                        </div>
                    </li>
                                    </ul>
            </div>
                        
                                    <!-- 左侧列表内容 end -->
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
                    <a href="/wenda/15" target="_blank">
                        <img src="http://img.mukewang.com/563aff530001428b00900090.jpg" alt="JQuery"/>
                    </a>
                </div><!--.class-icon end-->
                <h4><a href="/wenda/15" target="_blank">JQuery</a></h4>
                <p class="follow-person">21764人关注</p>
                                <a href="javascript:void(0)" data-tag-id="15" class="follow">关注</a>
                            </div><!--.class-info end-->
            <div class="desc">JQuery是继prototype之后又一个优秀的Javascrip...</div>
        </li><!--li end-->
                <li>
            <div class="class-info">
                <div class="class-icon">
                    <a href="/wenda/5" target="_blank">
                        <img src="http://img.mukewang.com/563affe40001680c00900090.jpg" alt="Html/CSS"/>
                    </a>
                </div><!--.class-icon end-->
                <h4><a href="/wenda/5" target="_blank">Html/CSS</a></h4>
                <p class="follow-person">59057人关注</p>
                                <a href="javascript:void(0)" data-tag-id="5" class="follow">关注</a>
                            </div><!--.class-info end-->
            <div class="desc">html是HyperText Mark-up Language的简称...</div>
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
            </ul><!--.cls-list end-->
</div><!--.recommend-class end-->

<div class="advertisement">
        <a href="http://www.imooc.com/wenda/issuedetail/15" data-ast="yuanwenindexright_1_871" >
        <img src="http://img.mukewang.com/59a379310001929602800100.jpg" alt="【花式填坑第17期】"/>
    </a>
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