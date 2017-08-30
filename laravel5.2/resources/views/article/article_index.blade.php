@extends('layouts/layouts')

@section('header')
	@parent
<link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=2.5,article/article-index-less.css?v=201708281028" type="text/css" />

	@section('title','手记')
@stop


@section('content')
<div id="main">

<div class="container clearfix">
<div class="article-left l">

<div class="ad-create">
<span class="icon-close" id="js-ad-close"></span>
<h3>用手记的方式，学习前沿流行技术</h3>
<a href="article_add" target="_blank" class="create-ques">创建手记</a>

</div>
<div class="article-ad-wrap clearfix">
<div class="article-ad-img l">
<a href="http://www.imooc.com/article/19963" class="article-ad-info" data-ast="wenzhangindex_1_261" target="_blank"></a>													
<a class="article-ad-txt" title="二分查找--那个隐藏了10年的Java Bug" data-ast="wenzhangindex_1_261" href="http://www.imooc.com/article/19963" target="_blank">
<span>二分查找--那个隐藏了10年的Java Bug</span>
</a>					
<img src="http://img.mukewang.com/599b9bcd0001cb3605640359.jpg" alt="二分查找--那个隐藏了10年的Java Bug">
</div>
<div class="ad-font l">
	<ul>
		<li>
			<div class="ad-r-warp ">
				<h2>
					<a href="http://www.imooc.com/article/19998" title="找工作的季节之简历及找工作的分享" data-ast="wenzhangindex_1_263" target="_blank">找工作的季节之简历及找工作的分享</a>
				</h2>

			<p class="ad-tags-list">		
			<a href="/article/tag/3" target="_blank" class="ad-tag">JAVA</a>，							    													<a href="/article/tag/20" target="_blank" class="ad-tag">Linux</a>，							    													<a href="/article/tag/46" target="_blank" class="ad-tag">职场生活</a>							    									    	
			</p>	
			</div>					    	
		</li>
		<li>
		<div class="ad-r-warp ">
		<h2>
		<a href="http://www.imooc.com/article/details/id/19994" title="Android -对图片Drawable进行变色" data-ast="wenzhangindex_1_265" target="_blank">Android -对图片Drawable进行变色</a>
		</h2>

		<p class="ad-tags-list">		
		<a href="/article/tag/3" target="_blank" class="ad-tag">JAVA</a>，							    													<a href="/article/tag/12" target="_blank" class="ad-tag">Android</a>							    									    	
		</p>
		</div>					    	
		</li>
	</ul>
</div>

</div>
<div class="tag-wrap clearfix">
<!-- 标签 -->
<!-- <div class="article-tab clearfix">
<a data-id="2" href="/article/tag/2" target="_blank">PHP</a>
<div id="tagPop" class="tag-pop-layer">
<a href="/article/tag/17" class="tag-detail" target="_blank">JavaScript</a>

</div>
</div> -->
</div>
<div class="article-tool-bar clearfix">
<div class="tool-left l">

<a href="javascript:;" data-hot="hot" class="sort-item active ">推荐</a>
<!-- <a href="javascript:;" class="sort-item ">新上榜</a> -->

</div>
</div>
@foreach($articles as $article)
<div class="article-lwrap ">
	
	<h3 class="item-title">
		<a href="article_info/{{ $article->id }}" class="title-detail" target="_blank">{{ $article->title }}</a>
			</h3>
	<!-- text -->
	<div class="item-txt">
		<div class="item-img l">
				<a href="article_info/{{ $article->id }}" target="_blank">
					<img src="./uploads/{{ $article->img_path }}" width="210" height="130">
				</a>
			</div>
		<p class="item-bd">{{ $article->content }}...</p>
		<div class="item-btm clearfix">
			<ul class="l left-info" data-fuid="260194"><li class="hd-pic"><a class="publisher-name" title="永恒战士" href="/u/260194/articles" target="_blank">永恒战士</a></li>
			<li class="pass-time">{{ date('Y-m-d H:i:s',$article->add_time) }}</li>							</ul>
			<div class="r right-info">
				<span class="looked">{{ $article->browser }}浏览</span>
				<span class="recom">0推荐</span>
				<span class="judge">0评论</span>
			</div>
		</div>
	</div>
</div>
@endforeach
<!-- 分页 -->
<div id="pagenation" class="pagenation">
<div class="page">
<span class="disabled_page">首页</span>
<span class="disabled_page">上一页</span>
<a href="javascript:void(0)" class="active text-page-tag">1</a>
<a class="text-page-tag" href="/article/new/2">2</a>
<a href="/article/new/2">下一页</a>
<a href="/article/new/716">尾页</a>
</div>
</div>
</div>
<div class="article-right r">
<div class="new-ques">
<a href="article_add" class="write-ques">创建手记</a>
<div class="ques-wrap" id="ques-wrap"><div class="ques-info clearfix"><a href="/u/2346866/articles" class="sharer-head" target="_blank" title=""><img src="http://img.mukewang.com/55f4ef3800018d1101000100-100-100.jpg" alt="" width="40" height="40"></a><div class="right-uinfo"><h3><a href="/u/2346866/articles" target="_blank" title="" class="sharer-name ">qq_墨_27  </a></h3></div></div><ul class="num-info"><li><a href="/u/2346866/articles" target="_blank">手记<span>0</span></a></li><li><a href="/u/2346866/articles?type=comment" target="_blank">评论<span>0</span></a></li><li><a href="/u/2346866/articles?type=praise" target="_blank">推荐<span>3</span></a></li><li><a href="/u/2346866/articles?type=collect" target="_blank">收藏<span>1</span></a></li></ul>
</div>

</div>
<h2 class="panel-hd">推荐作者</h2>
<div class="remon-main">
<ul>
<li>
<a class="publisher-hd" href="/u/3017249/articles" target="_blank">
<img src="http://img.mukewang.com/577baef700019c4501400140-40-40.jpg" width="40" height="40">
</a>
<div class="arti-info">
<a class="publisher-name" title="ustbhuangyi" href="/u/3017249/articles" target="_blank">ustbhuangyi</a>
<i class="user-icon teacher" title="慕课网讲师"></i>
<i class="user-icon great" title="认证作者"></i>

<p class="publisher-sig"></p>
</div>

</li>
</ul>
</div>
<div class="tag-vane">
<h2 class="panel-hd tag-hd">标签风向标</h2>
<div class="tag-bd" id="tag-vane"><a href="/article/tag/3" class="tag-detail">JAVA<span class="chapters">3556篇</span></a><a href="/article/tag/17" class="tag-detail">JavaScript<span class="chapters">2154篇</span></a><a href="/article/tag/5" class="tag-detail">Html/CSS<span class="chapters">1681篇</span></a><a href="/article/tag/18" class="tag-detail">Python<span class="chapters">374篇</span></a><a href="/article/tag/25" class="tag-detail">CSS3<span class="chapters">459篇</span></a><a href="/article/tag/39" class="tag-detail">数据结构<span class="chapters">242篇</span></a><a href="/article/tag/2" class="tag-detail">PHP<span class="chapters">699篇</span></a><a href="/article/tag/14" class="tag-detail">Html5<span class="chapters">614篇</span></a><a href="/article/tag/46" class="tag-detail">职场生活<span class="chapters">390篇</span></a><a href="/article/tag/51" class="tag-detail">测试<span class="chapters">108篇</span></a>

</div>
</div>
<div class="other-article">
<h2>本月热门</h2>
<ul>
<li>
<a href="/article/19895" title="【慕课网连载漫画】第3弹更新啦！" target="_blank"><h3>【慕课网连载漫画】第3弹更新啦！</h3></a>
<div class="show-box clearfix">
<span class="spacer l">5146浏览</span>
<span class="spacer l spacer-2">138推荐</span>
<span class="spacer l" href="">18评论</span>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>

@stop

@section('footer')
	@parent
@stop