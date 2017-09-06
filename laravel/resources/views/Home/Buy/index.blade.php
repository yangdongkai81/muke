@extends('layouts.layouts')

@section('sidebar')
    @parent

@endsection

@section('content')
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>laravel 5.4 快速开发简书教程-慕课网实战</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="renderer" content="webkit">
        <meta property="qc:admins" content="77103107776157736375" />
        <meta property="wb:webmaster" content="c4f857219bfae3cb" />
        <meta http-equiv="Access-Control-Allow-Origin" content="*" />
        <meta http-equiv="Cache-Control" content="no-transform " />
        <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-inline' 'unsafe-eval' *.imooc.com *.mukewang.com *.baidu.com *.sina.com.cn *.bootcss.com">
        <meta name="keywords" content="laravel 5.4开发简书" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Laravel是PHP工程化开发的趋势，使用Laravel最新版本开发项目的课程非常少，分享实战经验的几乎没有，对于想学习和使用Laravel的PHPer来说，这门课非常值得" />

        <link rel="stylesheet" href="http://www.imooc.com/static/moco/v1.0/dist/css/moco.min.css" type="text/css" />

        <style type="text/css">
            .moco-modal-info {
                font-size: 14px;
                line-height: 20px;
            }
        </style>

        <link merge="false" rel="stylesheet" type='text/css' href="/static/module/class/content/css/111-less.css?v=201708141502" />

        <script type="text/javascript">
            var OP_CONFIG={"module":"class","page":"index","userout":0,"usercaution":null};
            OP_CONFIG.isLogin = 0;
            var isLogin = 0;
            var _msg_unread = 0;
            var _not_unread = 0;
            var _cartFlag = 0;
            var seajsTimestamp="v=201708141502";
        </script>

        <link rel="stylesheet" href="http://coding.imooc.com/static/module/??common/css/common-less.css,course/css/course-less.css,course/css/precon-less.css,class/common/css/index-less.css?v=1503986951" type="text/css" />
    </head>
    <body >

    <div class="course-class-infos ">
        <div class="w pr">
            <div class="path">
                <a href="/">实战</a>
                <i class="path-split">\</i><span>Laravel 5.4 快速开发简书</span>
            </div>
            <div class='info-warp tc'>
                <div class='hide'>
                    <h1 class="l">Laravel 5.4 快速开发简书</h1>
                </div>
                <div class='info-bar tc'>
                    <div class="statics clearfix">
                        <div class="static-item first">
                            <span class="meta">难度</span>
                            <span class="meta-value"><strong>中级</strong></span>
                        </div>
                        <div class="static-item static-time">
                            <span class="meta">时长</span>
                            <span class="meta-value"><strong>14小时30分钟</strong></span>
                            <em></em>
                        </div>
                        <div class="static-item">
                            <span class="meta">学习人数</span>
                            <span class="meta-value"><strong>326</strong></span>
                            <em></em>
                        </div>
                        <div class="static-item">
                            <span class="meta-value"><strong>9.7分</strong></span>
						<span class="meta meta-stars">
							<i class="sz-star on"></i><i class="sz-star on"></i><i class="sz-star on"></i><i class="sz-star on"></i><i class="sz-star on"></i>
						</span>
                            <em></em>
                        </div>
                    </div>
                </div>
                <div class="price-box">
				<span class="num clearfix">
						<span class="discount-price">
						<span class="baseline baseline-y">
						<span class="new-y">&yen;</span>
						<span class="cur-price"><b>199</b><b class="sub">.00</b></span>
						</span>
					</span>
				</span>
                </div>
                <div class="clearfix btnwarp">
                    <a href="confirm_index" class="js-buy-trigger buy-class-btn class-btn1 buynow-btn" data-cid="111" data-pay="0" id="buy-trigger">
                        <span>立即购买</span>
                    </a>
                    <a href='javascript:;' class='js-addcart addcart' data-cid='111' data-type='1'>
                        <i class='sz-add-shopping-cart'></i>
                    </a>
                    <div class="preview-tip">
                    </div>
                </div>
                <!-- 调价说明 -->
            </div>
        </div>
        <div class="info-bg" id="js-info-bg">
            <div class="cover-img-wrap" style="background-image:url(http://szimg.mukewang.com/593a7a490001729120000520.jpg)"></div>
        </div>
    </div>
    <div class='course-infos-t'>
        <div id='Anchor'></div>
        <div class="comp-tab-t js-comp-tab">
            <ul class='clearfix'>
                <li class="comp-tab-item-first comp-tab-item active">
                    <a href="/class/111.html#Anchor">课程介绍</a>
                </li>
                <li class="comp-tab-item ">
                    <a href="/class/package/111.html#Anchor">组合套餐</a>
                </li>
                <li class="comp-tab-item ">
                    <a href="/class/chapter/111.html#Anchor">课程章节</a>
                </li>
                <li class="comp-tab-item">
                    <a href="/class/111.html#Prchor">课程咨询</a>
                    <span>15</span>
                </li>
                <li class="comp-tab-item ">
                    <a href="/class/evaluation/111.html#Anchor">用户评价</a>
                    <span>30</span>
                </li>
                <li class="comp-tab-item ">
                    <a href="/class/111.html#Envir">环境参数</a>
                </li>
            </ul>
        </div>
        <div class='js-fixed course-fixed-nav hide'>
            <h3 class='fixed-course-name' title='Laravel 5.4 快速开发简书'>Laravel 5.4 快速开发简书</h3>
            <ul class='fixed-nav clearfix'>
                <li class="fixed-nav-item-first fixed-nav-item ml0 active">
                    <a href="/class/111.html#Anchor">课程介绍</a>
                </li>
                <li class="fixed-nav-item ">
                    <a href="/class/package/111.html#Anchor">组合套餐</a>
                </li>
                <li class="fixed-nav-item ">
                    <a href="/class/chapter/111.html#Anchor">课程章节</a>
                </li>
                <li class="fixed-nav-item">
                    <a href="/class/111.html#Prchor">课程咨询</a>
                    <span>15</span>
                </li>
                <li class="fixed-nav-item ">
                    <a href="/class/evaluation/111.html#Anchor">用户评价</a>
                    <span>30</span>
                </li>
                <li class="fixed-nav-item ">
                    <a href="/class/111.html#Envir">环境参数</a>
                </li>
            </ul>
            <div class="goumai">
                <div class="buy-wrap r">
                    <a href="javascript:;" class="js-buy-trigger fixed-nav-btn fixed-btn1" data-cid="111" data-pay="0" id="buy-trigger">
                        <span>立即购买</span>
                    </a>
                    <a href='javascript:;' class='js-addcart addcart' data-cid='111' data-type='1'>
                        <span class='line'></span>
                        <i class='sz-add-shopping-cart'></i>
                    </a>
                </div>
                <span class="r fixed-nav-prices">￥199.00</span>
            </div>
        </div>
        <div class="info-video" style="display: block; background-image: url(http://szimg.mukewang.com/593a7a5200015be309000500.jpg);">
            <div class="info-video-box">
                <div class='info-name'>Laravel 5.4 快速开发简书</div>
                <div class='info-desc'>Laravel是PHP工程化开发的趋势，本课程使用大量Laravel基础及高级组件，结合Mysql异步消息队列、ElasticSearch搜索引擎、Debugbar调试利器、Laravel性能优化等技术开发前后台完整的社交网站“简书”</div>
                <div class="js-video-btn video-btn">
                    <i class="sz-play"></i>
                </div>
            </div>
            <div class="comp-tabs-pannel" style='display: none;' data-purl="http://szimg.mukewang.com/593a7a5200015be309000500.jpg" data-vurl="http://v3.mukewang.com/shizhan/593a7730e420e524688b45f0/H.mp4" id="js-video-content">
                <div class="desc-short">
                    <a href="javascript:void(0);" class="js-close-video close-video sz-close-h"></a>
                    <div class="video-container" id="video-container"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="infolayout clearfix">
        <div class="appendtemplate">
            <div class="introduce-content">
                <div class="section1">
                    <div class="wrap">
                        <div class="content-box">

                            <div class="box clearfix">
                                <h2>让你能在工作中直接用的Laravel技术</h2>
                                <h3>课程讲授的项目和模块非常通用，可直接用在大部分具有社交分享功能的项目中</h3>
                                <p>
                                    － 使用最新Laravel5.4框架<br>
                                    － 开发类简书的文章分享社区前后台功能<br>
                                    － 学会用以Laravel为核心的技术栈开发并优化具体项目<br>
                                    － 熟练掌握课程内容，你将能胜任网站初级或者中级研发工程师的职位
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="section2">
                    <div class="wrap">
                        <div class="content-box">
                            <h2>“以Laravel的方式”开发类似简书的文章分享社区</h2>
                        </div>
                    </div>
                </div>
                <div class="section3">
                    <div class="wrap">
                        <div class="content-box">
                            <h2>按功能模块开发项目功能</h2>
                            <h3>可直接用在大部分具有社交分享功能的项目中</h3>
                            <dl>
                                <dt>搭建前端功能</dt>
                                <dd>文章模块 （前台核心模块）
                                <dd>用户登录注册模块</dd>
                                <dd>评论模块</dd>
                                <dd>赞模块</dd>
                                <dd>搜索模块</dd>
                                <dd>个人中心模块</dd>
                                <dd>专题模块</dd>
                            </dl>
                            <dl class="info2">
                                <dt>开发管理后台</dt>
                                <dd>后台管理人员模块</dd>
                                <dd>审核模块</dd>
                                <dd>权限管理模块</dd>
                                <dd>专题管理模块</dd>
                                <dd>系统通知模块</dd>
                            </dl>
                            <dl class="info3">
                                <dt>讲解性能优化</dt>
                                <dd>页面sql查询次数优化</dd>
                                <dd>数据库索引优化</dd>
                                <dd>路由缓存优化</dd>
                                <dd>配置缓存优化</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="section5">
                    <div class="wrap">
                        <div class="content-box">
                            <h2>能在工作中直接复用的大量Laravel组件</h2>
                            <img src="/static/module/class/content/img/111/img1.png" alt="">
                            <p class="l">
                                <strong>migration</strong> : 数据迁移组件<br>
                                <strong>auth</strong> : 用户认证组件<br>
                                <strong>validator</strong> : 表单验证组件<br>
                                <strong>model</strong> : 模型组件<br>
                                <strong>blade</strong> : 模板组件<br>
                                <strong>paging</strong> : 分页组件<br>
                                <strong>middleware</strong> : 中间件组件
                            </p>
                            <p class="r">
                                <strong>scout</strong> : 搜索组件<br>
                                <strong>tinker</strong> : 命令行调试组件<br>
                                <strong>job</strong> : 任务组件<br>
                                <strong>factory</strong> : 数据填充组件<br>
                                <strong>queue</strong> : 队列组件<br>
                                <strong>csrf token</strong> : csrf安全保护组件
                            </p>
                        </div>
                    </div>
                </div>

                <div class="section8">
                    <div class="wrap">
                        <div class="content-box">
                            <h2>以Laravel为核心的技术栈</h2>
                            <ul class="list">
                                <li>前端<br>Bootstrap、jQuery</li>
                                <li>富文本编辑器<br>wangEditor</li>
                                <li class="red">后端<br>Laravel5.4</li>
                                <li>数据库<br>MySQL</li>
                                <li>搜索引擎<br>elasticsearch－5.1</li>
                            </ul>
                            <ul class="list1">
                                <li><i>1</i>Laravel<br>migration组件</li>
                                <li><i>2</i>Laravel+Bootstrap<br>结合使用</li>
                                <li><i>3</i>PHP + MySQL<br>实现消息队列</li>
                                <li><i>4</i>完整实现权限管理<br>RBAC功能</li>
                                <li><i>5</i>Laravel社区<br>debug-bar工具</li>
                                <li><i>6</i>Laravel和elasticsearch<br>实现文章搜索功能</li>
                                <li><i>7</i>Laravel<br>性能优化方法</li>
                                <li><i>8</i>Laravel<br>安全方面的注意点</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="section6">
                    <div class="wrap">
                        <div class="content-box">
                            <h2>学员专享增值服务</h2>
                            <div class="box clearfix">
                                <ul>
                                    <li class="box1">
                                        <div class="text-box l">
                                            <p class="smalle-title">在线编程</p>
                                            <p class="smalle-text">云端开发环境</p>
                                            <p>提供云端编程环境，随时随地在线Coding<br>代码效果即时呈现</p>
                                        </div>
                                    </li>
                                    <li class="box2">
                                        <div class="text-box l">
                                            <p class="smalle-title">云端存储</p>
                                            <p class="smalle-text">数据永不丢失</p>
                                            <p>提供云端存储空间，所有代码、数据云端<br>存储，你可以随时调取</p>
                                        </div>
                                    </li>
                                    <li class="box3">
                                        <div class="text-box l">
                                            <p class="smalle-title">问答专区</p>
                                            <p class="smalle-text">讲师集中答疑</p>
                                            <p>关于课程的问题都可在问答区随时提问，<br>讲师会进行集中答疑</p>
                                        </div>
                                    </li>
                                    <li class="box4">
                                        <div class="text-box l">
                                            <p class="smalle-title">源码开放</p>
                                            <p class="smalle-text">整套代码下载</p>
                                            <p>课程案例代码完全开放给你，你可以根据<br>所学知识，自行修改、优化</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section4">
                    <div class="wrap">
                        <div class="content-box">
                            <h2>适合人群及技术储备要求</h2>
                            <p>如果你想在PHP工程师的道路上有更好的发展，那Laravel 就是你必须要学习和使用的框架，如果你符合以下技术储备要求，<br>想快速获得Laravel 实际开发技巧和经验，那这门课就是你的不二之选</p>
                            <h3>学前必备技术</h3>
                            <p>掌握PHP和MySQL技术<br>基本的jQuery技术</p>
                        </div>
                    </div>
                </div>
                <div class="section7">
                    <div class="wrap">
                        <div class="content-box clearfix">

                            <div class="tea-box clearfix">
                                <img class="l" src="/static/module/class/content/img/111/teacher.jpg" alt="轩脉刃">
                                <div class="l right-box">
                                    <h3>滴滴资深工程师</h3>
                                    <h5>轩脉刃</h5>
                                    <p>7年PHP经验，4年golang经验，有过日请求十亿级别PV的项目经验，现就职滴滴，曾就职于奇虎360，也曾在创业公司从0开始负责服务端的架构搭建，维护，优化等</p>
                                    <p>技术涉猎非常广泛，对JS、PHP、爬虫技术、Python、Go均有所涉猎，擅长PHP框架的研究和优化，尤其对服务端技术，特别是LNMP相关的技术有深厚的研究，曾经独立完成过多个项目。业余时间乐于分享，发布过300多篇高质量的技术博客，深受欢迎</p>
                                    <p>来吧，跟随这样一位PHP经验、经历都非常丰富的老师开启你的Laravel 实战吧</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="envir-box" id="Envir">
            <h1>环境参数</h1>
            <div class="detail-box">
                <ul class="clearfix">
                    <li class="l ">
                        <span class="detail-tag">框架</span>
                        <i class="triangle"></i>
                        <span class="detail">Laravel 5.4</span>
                    </li>
                    <li class="l ">
                        <span class="detail-tag">数据库</span>
                        <i class="triangle"></i>
                        <span class="detail">Mysql 5.7.8</span>
                    </li>
                    <li class="l ">
                        <span class="detail-tag">开发环境</span>
                        <i class="triangle"></i>
                        <span class="detail">MAC</span>
                    </li>
                    <li class="l ">
                        <span class="detail-tag">技术语言</span>
                        <i class="triangle"></i>
                        <span class="detail">PHP 5.6</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="preconsultation" id="Prchor">
            <div class="w question-input">
                <input type="text" placeholder="输入你的课程咨询问题" class="input-block js-inputcont" data-can-search="true" data-pagesize="6">
                <div class="question-btn js-question-btn" data-cid="111">提问</div>
            </div>
            <div class="w question-contain js-load-prelist" data-cid="111">
                <div class="comp-loading">
                    <i class="sz-loading"></i>
                    <span class="text">数据加载中...</span>
                </div>
            </div>
        </div>
        <div class="w shizhan-recommendcourse js-recom-course" data-id="111">
        </div>
        <div class="w info-recommendcourse js-prelearn" data-id="111">
        </div>
    </div>
    <script type="text/javascript" src="//moco.imooc.com/static/monitor/error.js"></script>
    <script src="/passport/static/scripts/ssologin.js?v=2.0"></script>
    <script type="text/javascript" src="/static/module/common/js/common.js?v=201708141502"></script>
    <script type="text/javascript" src="//www.imooc.com/static/moco/v1.0/dist/js/moco.min.js"></script>
    <script>/*RESOURCE_MAP*/</script>
    <script src='/static/lib/jquery-fly/jquery.fly.js'></script>
    <!--[if gte IE 9]><script src='/static/lib/jquery-fly/requestAnimationFrame.js'></script><![endif]-->
    <script type="text/javascript" src="/public/cart/jquery.js"></script>
    <script>
        $(document).on('click','.sz-add-shopping-cart',function(){
            alert(1);
        })
    </script>
    <script data-entry="class/index">
        requirejs(['class/index'], function(){
        });
        (function(){
            var imgPic = 'http://szimg.mukewang.com/593a7a470001bcff05400300-280-160.jpg' || 'http://img.mukewang.com/static/img/common/logo.png',
                    text = '我正在参加@慕课网 的一门课程【' + 'Laravel 5.4 快速开发简书' + '】，很不错哦！快来一起学习吧！', //节名称
                    url = 'http://coding.imooc.com' + window.location.pathname;

            window._bd_share_config = {
                "common": {
                    "bdUrl": url,
                    "bdSnsKey": {
                        'tsina':'2788596354'
                    },
                    "bdText": text,
                    "bdMini": "2",
                    "bdMiniList": false,
                    "bdPic": imgPic,
                    "bdStyle": "0",
                    "bdSize": "16"
                },
                "share": {}
            };
            with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
        })();
    </script>


    <div class="comp-modal-overlay"></div>
    <div class="modal modal-buy" id="before-buy-modal">
        <div class="inner">
            <div class="header">
                <strong class="tit">购买课程</strong>
                <a href="javascript:;" class="help">帮助？</a>
            </div>
            <div class="content">
                <div class="infos">
                    <span class="name">Laravel 5.4 快速开发简书</span>
                <span class="price">
																	<i>&yen;</i><b>199</b><i>.00</i>
								</span>
                <span class="deadline">
					
                    随课免费赠送<b>160天</b>慕课云服务 <a target="_blank" href="/user/faqdetail?column_id=4&id=13"><span>什么是云服务？</span></a>

					                </span>
                </div>
            </div>
            <div class="footer">
                <a href="javascript:;" class="cancel-btn" rel="modal:close">取消</a>
                <a data-href="/pay/buynow/cid/111" href='javascript:;' class="go-pay-btn">去支付</a>
            </div>
        </div>
    </div>

    <div style="display: none">
        <script>
            var _hmt = _hmt || [];
            (function() {
                var hm = document.createElement("script");
                hm.src = "//hm.baidu.com/hm.js?c1c5f01e0fc4d75fd5cbb16f2e713d56";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
        </script>
        <script>
            (function(){
                var bp = document.createElement('script');
                var curProtocol = window.location.protocol.split(':')[0];
                if (curProtocol === 'https') {
                    bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
                }
                else {
                    bp.src = 'http://push.zhanzhang.baidu.com/push.js';
                }
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(bp, s);
            })();
        </script>
    </div>

    </body>
    </html>
@endsection