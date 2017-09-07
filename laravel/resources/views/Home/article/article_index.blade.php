@extends('layouts/layouts')

@section('header')
	@parent
<link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=2.5,article/article-index-less.css?v=201708281028" type="text/css" />
<style>
.pagination li{list-style:none;float:left;}
</style>
	@section('title','手记')
@stop


@section('content')
<div id="main">

<div class="container clearfix">
<div class="article-left l">

<div class="ad-create">
<span class="icon-close" id="js-ad-close"></span>
<h3>用手记的方式，学习前沿流行技术</h3>

<a href="{{url('article_add')}}" target="_blank" class="create-ques">创建手记</a>


</div>
<div class="article-ad-wrap clearfix">
<div class="article-ad-img l">

<a href="{{url('article_info/9')}}" class="article-ad-info" data-ast="wenzhangindex_1_261" target="_blank"></a>													
<a class="article-ad-txt" title="二分查找--那个隐藏了10年的Java Bug" data-ast="wenzhangindex_1_261" href="{{url('article_info/9')}}" target="_blank">

<span>二分查找--那个隐藏了10年的Java Bug</span>
</a>					
<img src="http://img.mukewang.com/599b9bcd0001cb3605640359.jpg" alt="二分查找--那个隐藏了10年的Java Bug">
</div>
<div class="ad-font l">
	<ul>
		<li>
			<div class="ad-r-warp ">
				<h2>
					<a href="{{url('article_info/9')}}" title="找工作的季节之简历及找工作的分享" data-ast="wenzhangindex_1_263" target="_blank">找工作的季节之简历及找工作的分享</a>

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
@if(!empty($tags))
<div class="article-tab clearfix">
@foreach($tags['show'] as $tag)
<a data-id="2" href="{{ url('/article/tag/'.$tag['id'])}}" target="_blank">{{ $tag['tag_name'] }}</a>
@endforeach
@if(isset($tags['hidden']))
<a class="all" id="js-columall">更多<span class="icon-drop_down"></span></a>
<div id="tagPop" class="tag-pop-layer">
@foreach($tags['hidden'] as $tag)
<a href="{{ url('/article/tag/'.$tag['id'])}}" class="tag-detail" target="_blank">{{ $tag['tag_name'] }}</a>
@endforeach
</div>
@endif
</div>
@endif

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
		@if($article->is_original == 1)
			<span class="original">原创</span>
		@endif
	</h3>

	<!-- text -->
	<div class="item-txt">
	@if(!empty($article->img_path))
		<div class="item-img l">
			<a href="article_info/{{ $article->id }}" target="_blank">
				<img src="./uploads/{{ $article->img_path }}" width="210" height="130">
			</a>
		</div>
	@endif
		<p class="item-bd">{{ $article->content }}...</p>
		<div class="item-btm clearfix">
			<ul class="l left-info" data-fuid="260194"><li class="hd-pic"><a class="publisher-name" title="永恒战士" href="/u/260194/articles" target="_blank">永恒战士</a></li>
			<li class="pass-time">{{ date('Y-m-d H:i:s',$article->add_time) }}</li>							</ul>
			<div class="r right-info">
				<span class="looked">{{ $article->browser }}浏览</span>
				<span class="recom">{{ $article->collection_num }}推荐</span>
				<span class="judge">{{ $article->comment_num }}评论</span>
			</div>
		</div>
	</div>
</div>
@endforeach
<!-- 分页 -->
<!-- <div id="pagenation" class="pagenation">
<div class="page">
<span class="disabled_page">首页</span>
<span class="disabled_page">上一页</span>
<a href="javascript:void(0)" class="active text-page-tag">1</a>
<a class="text-page-tag" href="/article/new/2">2</a>
<a href="/article/new/2">下一页</a>
<a href="/article/new/716">尾页</a>
</div>
</div> -->
{!! $articles->links() !!}
</div>
<div class="article-right r">
<div class="new-ques">
<a href="article_add" class="write-ques">创建手记</a>
@if(isset($login_info['login_id']))
<div class="ques-wrap" id="ques-wrap">
	<div class="ques-info clearfix">
		<div class="right-uinfo">
			<h3>
				<a href="javascript:;" target="_blank" title="" class="sharer-name ">{{$login_info['email']}}</a>
			</h3>
		</div>
	</div>
		<ul class="num-info">
			<li><a href="/u/2346866/articles" target="_blank">手记<span>{{$login_info['article_num']}}</span></a></li>
			<li><a href="/u/2346866/articles?type=comment" target="_blank">评论<span>{{$login_info['comment_num']}}</span></a></li>
			<li><a href="/u/2346866/articles?type=praise" target="_blank">推荐<span>{{$login_info['collection_num']}}</span></a></li>
			<li><a href="/u/2346866/articles?type=collect" target="_blank">收藏<span>1</span></a></li>
		</ul>
</div>
@endif
</div>

<div class="remon-sharer">

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
@if(isset($tags['order']))
<div class="tag-vane">
<h2 class="panel-hd tag-hd">标签风向标</h2>
<div class="tag-bd" id="tag-vane">
@foreach($tags['order'] as $tag)
<a href="{{ url('/article/tag/'.$tag['id'])}}" class="tag-detail">{{ $tag['tag_name']}}<span class="chapters">{{ $tag['tag_num']}}篇</span></a>
@endforeach
</div>
</div>
@endif
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

	<script src="../../js/jquery.min.js"></script>
	<script>
	$('#js-columall').click(function(){
		var display = $('#tagPop').css('display');
		if( display == 'none') {
			$('#tagPop').css('display','block');
			$(this).find('.icon-drop_down').removeClass('icon-drop_down').addClass('icon-drop_up');
		} else {
			$('#tagPop').css('display','none');
			$(this).find('.icon-drop_up').removeClass('icon-drop_up').addClass('icon-drop_down');
		}
	})
	</script>
@stop