@extends('layouts/layouts')

@section('header')
	@parent
	<link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=2.5,article/tag-less.css?v=201709041621" type="text/css" />
	@section('title','手记')
@stop

@section('content')
<div id="main">

<div class="current-label" style="height:140px;">
    <h3 style="margin-top:50px;">{{$tag_name}}</h3>
</div>


<div class="container clearfix">

 <div class="article-left l">
   

<div class="article-tool-bar clearfix">
<div class="tool-left l">

<a href="javascript:;" data-hot="hot" class="sort-item active ">推荐</a>
<!-- <a href="javascript:;" class="sort-item ">新上榜</a> -->

</div>
</div>
@foreach($articles as $article)
<div class="article-lwrap ">
	
	<h3 class="item-title">
		<a href="{{ url('article_info').'/'.$article['id'] }}" class="title-detail" target="_blank">{{ $article['title'] }}</a>
		@if($article['is_original'] == 1)
			<span class="original">原创</span>
		@endif
	</h3>

	<!-- text -->
	<div class="item-txt">
	@if(!empty($article['img_path']))
		<div class="item-img l">
			<a href="{{ url('article_info').'/'.$article['id'] }}" target="_blank">
				<img src="{{$prefix}}./uploads/{{ $article['img_path'] }}" width="210" height="130">
			</a>
		</div>
	@endif
		<p class="item-bd">{{ $article['content'] }}...</p>
		<div class="item-btm clearfix">
			<ul class="l left-info"><li class="hd-pic"><a class="publisher-name" title="{{$article['email']}}" href="{{ url('article_info').'/'.$article['id'] }}" target="_blank">{{$article['email']}}</a></li>
			<li class="pass-time">{{ date('Y-m-d H:i:s',$article['add_time']) }}</li>							</ul>
			<div class="r right-info">
				<span class="looked">{{ $article['browser'] }}浏览</span>
				<span class="recom">{{ $article['collection_num'] }}推荐</span>
				<span class="judge">{{ $article['comment_num'] }}评论</span>
			</div>
		</div>
	</div>
</div>
@endforeach
<!-- 分页 -->
<div id="pagenation" class="pagenation">
<div class="page">
@if($page == 1)
<span class="disabled_page">首页</span>
<span class="disabled_page">上一页</span>
@else
<a href="{{ url('article_tag').'/'.$tag_id }}">首页</a>
<a href="{{ url('article_tag').'/'.$tag_id.'-'.($page-1) }}">上一页</a>
@endif

@if($page <= 3)
	@for($i = 1; $i <= ($page_total >= 5 ? 5 : $page_total); $i++)
		@if($page == $i)
			<a class="active text-page-tag" href="{{ url('article_tag').'/'.$tag_id.'-'.$i }}">{{$i}}</a>
		@else
			<a class="text-page-tag" href="{{ url('article_tag').'/'.$tag_id.'-'.$i }}">{{$i}}</a>
		@endif
	@endfor
@elseif ($page >= $page_total - 2)
	@for($i = $page_total - 4; $i <= $page_total; $i++)
		@if($page == $i)
			<a class="active text-page-tag" href="{{ url('article_tag').'/'.$tag_id.'-'.$i }}">{{$i}}</a>
		@else
			<a class="text-page-tag" href="{{ url('article_tag').'/'.$tag_id.'-'.$i }}">{{$i}}</a>
		@endif
	@endfor
@else
	@for($i = $page - 2; $i <= $page + 2; $i++)
		@if($page == $i)
			<a class="active text-page-tag" href="{{ url('article_tag').'/'.$tag_id.'-'.$i }}">{{$i}}</a>
		@else
			<a class="text-page-tag" href="{{ url('article_tag').'/'.$tag_id.'-'.$i }}">{{$i}}</a>
		@endif
	@endfor
@endif
@if($page == $page_total)
<span class="disabled_page">下一页</span>
<span class="disabled_page">尾页</span>
@else
<a href="{{ url('article_tag').'/'.$tag_id.'-'.($page+1) }}">下一页</a>
<a href="{{ url('article_tag').'/'.$tag_id.'-'.$page_total }}">尾页</a>
@endif
</div>
</div>
  </div>
    
        
  <div class="article-right r">
    	
	<!-- 写手记 -->
	<div class="new-ques">
				<a href="{{ url('article_add') }}" class="write-ques">创建手记</a>
					
	</div>
		
	<!-- 推荐作者
	<div class="remon-sharer">
		<h2 class="panel-hd">推荐作者</h2>
		<div class="remon-main">
			<ul>
								<li>
					<a class="publisher-hd" href="/u/3674757/articles" target="_blank">
						<img src='http://img.mukewang.com/59a8be980001553810800607-40-40.jpg' width='40' height='40' />
					</a>
					<div class="arti-info">
						<a class="publisher-name" title="fengsehng" href="/u/3674757/articles" target="_blank">fengsehng</a>
																        <i class="user-icon great" title="认证作者"></i>
				        				       
				        						<p class="publisher-sig">移动开发工程师</p>
					</div>
					
				</li>
							</ul>
		</div>
	</div> -->
    


	
		
			<!-- 热门手记 -->
	    	        <div class="other-article">
				<h2>热门手记</h2>
	        	<ul>
	            	            <li>
	              <a href="/article/20220" title="AndroidStudio基本配置" target="_blank"><h3>AndroidStudio基本配置</h3></a>
	              <div class="show-box clearfix">
	                <span class="spacer l">424浏览</span>
	                <span class="spacer l spacer-2">7推荐</span>
	                <span class="spacer l" href="" >1评论</span>
	              </div>
	            </li>
	            	            </ul>
	        </div>
	    	  </div>
  

  </div>
</div>

</div>

@stop

@section('footer')
	@parent

	<script src="../../js/jquery.min.js"></script>
	
@stop