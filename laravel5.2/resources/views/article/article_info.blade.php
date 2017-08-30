@extends('layouts/layout')

@section('header')
	@parent
	<link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=2.5,article/detail-less.css?v=201708281028" type="text/css" />
	@section('title','手记')
@stop


@section('content')
<div class="top-bg-warp">
	<div class="top-bg clearfix">
		<div class="top-bg-left l">
		 					  	<!-- 面包屑 -->
			    <div class="detail-path">
			        <a href="/article">手记</a> \ <span>{{ $info->title }}</span>
			    </div>
			    <!-- 面包屑end -->
		 		   
			    <div class="detail-title-wrap">
			        <h1 class="detail-title">
			        <span class="d-t">{{ $info->title }}</span>
			        			        </h1>
			        <div class="dc-addon clearfix">
			            <div class="dc-profile clearfix">
			                <span class="spacer l">{{ date('Y-m-d H:s:i',$info->add_time) }}</span>
			                <span class="spacer l spacer-2">{{ $info->browser }}浏览</span>
			                <a class="spacer l" href="#comment">1评论</a>
			                <div class="share-list l">
			                	<span class="shareto">分享到</span>
	                            <div class="share-icon-list bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1504062771088">
	                               
	                                <div class="icon-warp">
	                                    <a onclick="_hmt.push(['_trackEvent', 'sjtj_top', 'share', 'wb'])" data-track="topshare-1-2" href="#" class="bds_tsina icon-nav icon-share-weibo share-icon" data-cmd="tsina" title="分享到新浪微博"></a>
	                                </div>             
	                            </div>
                                
			                </div>
							<div class="r rinfo">
												                    
				                        				                				                <div class="font-info">			                	
					                <a class="font-warp">
					                	<span class="size-show">小字号</span>
					                	<span class="op-icon icon-drop_down"></span>
					                	<ul class="hide font-box-s clearfix">
					                		<li data-size-f="big-size-f" class="b-z">大字</li>
					                		<li data-size-f="md-size-f" class="m-z">中字</li>
					                		<li data-size-f="sm-size-f" class="s-z">小字</li>
					                	</ul>
					                </a>
				                </div>
							</div>			              
			                
			            </div>
			        </div>
				</div>
						</div>
    	<div class="top-bg-right r">
    <div class="detail-right"><!-- 右侧start -->
        <div class="recommend-info">
              <!-- 作者信息 -->
                                <div class="aside-author">
                    <div class="p clearfix">
                        <a href="/u/1104099/articles" class="l" title="cdu杨子皓" target="_blank">
                            <img src="http://img.mukewang.com/548cee200001267201000100-100-100.jpg">
                        </a>
                    </div>
                    <p class="u-nick-warp">
                     <a class="nick" href="/u/1104099/articles" title="cdu杨子皓" target="_blank">
                        cdu杨子皓
                        </a>
                                                       
                                            </p>
                   
                    <span class="user-job">学生</span>
                    <span class="user-desc">
                        个人博客地址 http://www.cduyzh.com
                    </span>
                    <div class="btn-box clearfix">
                        <a href="/u/1104099/articles" target="_blank" class="article-num r-bor l">
                            <span>17</span>篇手记
                        </a>
                        <a href="/u/1104099/articles?type=praise" target="_blank" class="article-recom l">
                            <span>2</span>推荐
                        </a>
                    </div>
                </div>
                                <!-- 推荐信息 -->
                <div class="recommend-list r-course-list hide">
                    <ul>
                      
                    </ul>
                </div>
               
        </div>
        
        <!-- 免费课程推荐 -->
        <div class="course-recommend r-course-list hide">
             <h2></h2>
             <ul>
               
             </ul>
        </div>    

        <!-- 作者信息end -->

        <!-- 作者热门手记 -->
                <div class="other-article">
            <h2>作者的热门手记</h2>
            <ul>
                            <li>
                    <a href="/article/18353" title="W3Cschool——初级脚本算法题"><h3>W3Cschool——初级脚本算法题</h3></a>
                    <div class="show-box clearfix">
                        <span class="spacer l">645浏览</span>
                        <span class="spacer l spacer-2">10推荐</span>
                        <span class="spacer l" href="">1评论</span>
                    </div>
                </li>
                        </ul>
        </div>
                <!-- 作者热门手记end -->

        <!-- 广告 -->
                                    <!-- 广告end -->
      
        <!-- 手记目录 -->
                <!-- 手记目录end -->
    </div><!-- 右侧end -->
</div>
	</div>
</div>

<div class="opus-wrap clearfix" style="">

<div class="detail-left l" style="">  
    <!-- 手记详情 -->
    <div class="detail-content-wrap">
        
        <div class="detail-content ">
            {{ $info->content }}
        </div>
       
        <!-- 标签 -->
        
                <div class="cat-box">
            <div class="cat-wrap clearfix">
                <span class="l ori-span">相关标签：@foreach($tags as $tag) {{ $tag }} @endforeach</span>
         </div>
        </div>
            
        <!-- 推荐 --> 
                <div class="praise-box">
            <button id="js-praise"><span class="icon-thumb_o"></span><div style="position: absolute; top: 50%; left: 50%; width: 230px; height: 230px; margin-left: -115px; margin-top: -115px; opacity: 0.6; display: none; transform: rotate(0deg) translate(0px, 0px);"><svg style="position: absolute; width: 100%; height: 100%;"><ellipse cy="0" cx="0" ry="15" rx="15" transform="rotate(0,0,0)" fill-opacity="1" stroke-linecap="" stroke-dashoffset="NaN " fill="#F9B552" stroke-dasharray="NaN " stroke-opacity="1" stroke-width="0" stroke="transparent" style="opacity: 1; display: none;"></ellipse><ellipse cy="0" cx="0" ry="15" rx="15" transform="rotate(0,0,0)" fill-opacity="1" stroke-linecap="" stroke-dashoffset="NaN " fill="#F9B552" stroke-dasharray="NaN " stroke-opacity="1" stroke-width="0" stroke="transparent" style="opacity: 1; display: none;"></ellipse><ellipse cy="0" cx="0" ry="15" rx="15" transform="rotate(0,0,0)" fill-opacity="1" stroke-linecap="" stroke-dashoffset="NaN " fill="#F9B552" stroke-dasharray="NaN " stroke-opacity="1" stroke-width="0" stroke="transparent" style="opacity: 1; display: none;"></ellipse><ellipse cy="0" cx="0" ry="15" rx="15" transform="rotate(0,0,0)" fill-opacity="1" stroke-linecap="" stroke-dashoffset="NaN " fill="#F9B552" stroke-dasharray="NaN " stroke-opacity="1" stroke-width="0" stroke="transparent" style="opacity: 1; display: none;"></ellipse><ellipse cy="0" cx="0" ry="15" rx="15" transform="rotate(0,0,0)" fill-opacity="1" stroke-linecap="" stroke-dashoffset="NaN " fill="#F9B552" stroke-dasharray="NaN " stroke-opacity="1" stroke-width="0" stroke="transparent" style="opacity: 1; display: none;"></ellipse><ellipse cy="0" cx="0" ry="15" rx="15" transform="rotate(0,0,0)" fill-opacity="1" stroke-linecap="" stroke-dashoffset="NaN " fill="#F9B552" stroke-dasharray="NaN " stroke-opacity="1" stroke-width="0" stroke="transparent" style="opacity: 1; display: none;"></ellipse></svg></div><div style="position: absolute; top: 50%; left: 50%; width: 180px; height: 180px; margin-left: -90px; margin-top: -90px; opacity: 0.6; display: none; transform: translate(0px, 0px);"><svg style="position: absolute; width: 100%; height: 100%;"><ellipse cy="90" cx="90" ry="0" rx="0" transform="rotate(0,90,90)" fill-opacity="transparent" stroke-linecap="" stroke-dashoffset="" fill="transparent" stroke-dasharray="" stroke-opacity="1" stroke-width="20" stroke="#F9B552"></ellipse></svg></div></button>
        </div>
                
        <div class="show-praise-wrap">
            <div class="show-praise-user clearfix">
                <div class="praise-icon">
                    <ul id="js-praise-show" class="clearfix">
                    <li class="l"><a target="_blank" href="/u/2467824/articles">                                                <img src="http://img.mukewang.com/592d44280001ccab02000200-100-100.jpg" title="Kian_">                                                </a></li></ul>
                </div>

                <div class="praise-num">
                    <span class="num">7</span>
                    <span class="person">人</span>推荐
                </div>
            </div>
        </div>
        
        <!-- 推荐end -->

        <!-- 分享&收藏 -->
        <div class="active-box hide">            
            <div class="share-box">
                <!-- 分享 -->
                
                <div class="small-share">
                    <ul class="share-wrap">
                        <li class="weichat-posi">
                            <span class="shareto">分享到</span>
                            <div class="bdsharebuttonbox weichat-style bdshare-button-style0-16" data-bd-bind="1504062771088">
                               
                                <div class="icon-warp">
                                    <a onclick="_hmt.push(['_trackEvent', 'sjtj_left', 'share', 'wb'])" data-track="letfshare-1-2" href="#" class="bds_tsina icon-nav icon-share-weibo share-icon" data-cmd="tsina" title="分享到新浪微博"></a>
                                </div>
                                <div class="icon-warp">
                                  <div class="follow-warp">
                                    <a onclick="_hmt.push(['_trackEvent', 'sjtj_left', 'share', 'pl'])" data-track="pl-1-1" href="#comment" class="icon-nav imv2-textsms" title="评论"></a>  
                                     <span>评论</span>     
                                  </div>
                                </div>
                                <div class="icon-warp">
    <div class="follow-warp">
    <a onclick="_hmt.push(['_trackEvent', 'sjtj_left', 'share', 'sc'])" data-track="sc-1-1" id="js-follow" data-id="20078" href="javascript:" class="dc-follow  icon-nav icon-star2 " title="收藏"></a>
    <span>收藏</span>   
    </div>
                                                                    </div>                                   
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- 分享&收藏 end -->
    </div>
    <!-- 手记详情end -->
  
    <!-- 相关阅读 -->
    <div class="react-article">
        <h2 class="clearfix"><span class="l">相关阅读</span><div class="line-r l"></div></h2><ul><li><a href="/article/3219" title="JavaScript常用数组算法总结"><h3>JavaScript常用数组算法总结</h3></a></li><li><a href="/article/13740" title="javascript常用数组算法总结"><h3>javascript常用数组算法总结</h3></a></li></ul>
    </div>
    <!-- 相关阅读end -->


    <div class="detail-feedback-wrap" style="">
        <!-- 评论框 -->
        <div class="df-ipt-wrap" id="comment" style="">
                    <h4 class="add-com-tip">添加评论</h4>
            <div class="feeds-author">
                <img src="http://img.mukewang.com/user/55f4ef3800018d1101000100-80-80.jpg" alt="qq_墨_27">
                
            </div>
                <div class="df-bottom clearfix">
                    <input type="text" id="comment" placeholder="请输入..." style="width:440px;" class="ipt">
                    <button id="js-submit" class="btn btn-green r">评论</button>
                </div>
            </div>

                </div>
        <!-- 评论框end -->

        <!-- 热门评论 -->
        <div class="hot-df-title" style="display: none;">热门评论</div>
        <div id="js-feedback-hot-list-wrap" class="feedback-list" style="display: none;">
            <p class="feedback-loading">
            评论加载中...
            </p>
        </div>
        <!-- 评论 -->
        <div class="df-title" id="all_comments"><span class="comment-num"><i>1</i>条</span>评论</div>
        <div id="js-feedback-list-wrap" class="feedback-list">
            
        <div id="js-feedback-list"><div class="comment-box"><div class="comment clearfix"><div class="feed-author l"><a href="/u/2467824/articles"><img src="http://img.mukewang.com/592d44280001ccab02000200-100-100.jpg" width="48"></a><a class="nick" href="/u/2467824/articles" target="_blank">Kian_</a><span class="com-floor r">1F</span></div><div class="feed-list-content"><p></p><p>说句估计挨喷的话，w3c的编程练习明明是从freeCodeCamp上直接搬下来的</p><p></p><div class="comment-footer clearfix"><span class="agree-with l" data-commentid="39052" data-uid="2467824" data-username="Kian_"><b class="imv2-thumb_up" title="赞同"></b><em>0</em></span><span class="reply-btn" data-commentid="39052" data-uid="2467824" data-username="Kian_">回复</span><span class="feed-list-times r"> 17小时前</span></div></div></div><div class="reply-box"></div><div class="release-reply"><a href="/u/2346866/articles" class="user-head"><img src="http://img.mukewang.com/55f4ef3800018d1101000100-100-100.jpg" alt="qq_墨_27"></a><a href="/u/2346866/articles" class="nick">qq_墨_27</a><div class="replay-con"><div class="textarea-wrap"><textarea placeholder="写下你的回复..."></textarea></div><p class="errtip"></p><div class="reply-ctrl clearfix"><div class="verify-code"></div><div class="btn-wrap"><div class="cancel-btn">取消</div><div data-comment-uid="2467824" class="release-reply-btn">回复</div></div></div></div></div></div></div></div>
        <!-- 分页页码  -->
        <div class="qa-comment-page" style="display: none;"></div>
    </div>
</div><!-- 左侧end -->
<div class="hide">
    <input type="hidden" data-pic="" id="js-share-img">
    <input type="hidden" data-pic="http://img.mukewang.com/548cee200001267201000100-100-100.jpg" id="js-img-author">
</div>
<div class="r">
</div>
</div>
@stop

@section('footer')
	@parent
@stop