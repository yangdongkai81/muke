<?php $__env->startSection('header'); ?>
	@parent
<link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=2.5,article/article-index-less.css?v=201708281028" type="text/css" />
<style>
.pagination li{list-style:none;float:left;}
</style>
	<?php $__env->startSection('title','手记'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div id="main">

<div class="container clearfix">
<div class="article-left l">

<div class="ad-create">
<span class="icon-close" id="js-ad-close"></span>
<h3>用手记的方式，学习前沿流行技术</h3>

<a href="<?php echo e(url('article_add')); ?>" target="_blank" class="create-ques">创建手记</a>


</div>
<div class="article-ad-wrap clearfix">
<div class="article-ad-img l">

<a href="<?php echo e(url('article_info').'/'.$article_top->id); ?>" class="article-ad-info" data-ast="wenzhangindex_1_261" target="_blank"></a>													
<a class="article-ad-txt" title="<?php echo e($article_top->title); ?>" data-ast="wenzhangindex_1_261" href="<?php echo e(url('article_info').'/'.$article_top->id); ?>" target="_blank">
<span><?php echo e($article_top->title); ?></span>
</a>
	<?php if(!empty($article_top['img_path'])): ?>
	<img src="<?php echo e($prefix); ?>./uploads/<?php echo e($article_top->img_path); ?>" style="width:100%; height:100%" alt="<?php echo e($article_top->title); ?>">
	<?php else: ?>
	<img src="<?php echo e($prefix); ?>./uploads/15051040938881.jpg" style="width:100%; height:100%" alt="<?php echo e($article_top->title); ?>">
	<?php endif; ?>
</div>
<div class="ad-font l">
	<ul>
	<?php foreach($article_right as $article): ?>
		<li>
			<div class="ad-r-warp ">
				<h2>
					<a href="<?php echo e(url('article_info').'/'.$article['id']); ?>" title="<?php echo e($article['title']); ?>" target="_blank"><?php echo e($article['title']); ?></a>
				</h2>
			<p class="ad-tags-list">
			<?php foreach($article['tags'] as $key => $val): ?>
			<a href="<?php echo e(url('article_tag/'.$key)); ?>" target="_blank" class="ad-tag"><?php echo e($val); ?></a>&nbsp;&nbsp;
			<?php endforeach; ?>
			</p>	
			</div>					    	
		</li>
	<?php endforeach; ?>
	</ul>
</div>

</div>
<div class="tag-wrap clearfix">

<?php if(!empty($tags)): ?>
<div class="article-tab clearfix">
<?php foreach($tags['show'] as $tag): ?>
<a data-id="2" href="<?php echo e(url('article_tag/'.$tag['id'])); ?>" target="_blank"><?php echo e($tag['tag_name']); ?></a>
<?php endforeach; ?>
<?php if(isset($tags['hidden'])): ?>
<a class="all" id="js-columall">更多<span class="icon-drop_down"></span></a>
<div id="tagPop" class="tag-pop-layer">
<?php foreach($tags['hidden'] as $tag): ?>
<a href="<?php echo e(url('article_tag/'.$tag['id'])); ?>" class="tag-detail" target="_blank"><?php echo e($tag['tag_name']); ?></a>
<?php endforeach; ?>
</div>
<?php endif; ?>
</div>
<?php endif; ?>

</div>
<div class="article-tool-bar clearfix">
<div class="tool-left l">

<a href="javascript:;" data-hot="hot" class="sort-item active ">推荐</a>
<!-- <a href="javascript:;" class="sort-item ">新上榜</a> -->

</div>
</div>
<?php foreach($articles as $article): ?>
<div class="article-lwrap ">
	
	<h3 class="item-title">
		<a href="<?php echo e(url('article_info').'/'.$article->id); ?>" class="title-detail" target="_blank"><?php echo e($article->title); ?></a>
		<?php if($article->is_original == 1): ?>
			<span class="original">原创</span>
		<?php endif; ?>
	</h3>

	<!-- text -->
	<div class="item-txt">
	<?php if(!empty($article->img_path)): ?>
		<div class="item-img l">
			<a href="<?php echo e(url('article_info').'/'.$article->id); ?>" target="_blank">
				<img src="<?php echo e($prefix); ?>./uploads/<?php echo e($article->img_path); ?>" width="210" height="130">
			</a>
		</div>
	<?php endif; ?>
		<p class="item-bd"><?php echo e($article->content); ?>...</p>
		<div class="item-btm clearfix">
			<ul class="l left-info"><li class="hd-pic"><a class="publisher-name" title="<?php echo e($userinfo[$article->user_id]); ?>" href="<?php echo e(url('article_info').'/'.$article->id); ?>" target="_blank"><?php echo e($userinfo[$article->user_id]); ?></a></li>
			<li class="pass-time"><?php echo e(date('Y-m-d H:i:s',$article->add_time)); ?></li>							</ul>
			<div class="r right-info">
				<span class="looked"><?php echo e($article->browser); ?>浏览</span>
				<span class="recom"><?php echo e($article->collection_num); ?>推荐</span>
				<span class="judge"><?php echo e($article->comment_num); ?>评论</span>
			</div>
		</div>
	</div>
</div>
<?php endforeach; ?>
<!-- 分页 -->
<div id="pagenation" class="pagenation">
<div class="page">
<?php if($page == 1): ?>
<span class="disabled_page">首页</span>
<span class="disabled_page">上一页</span>
<?php else: ?>
<a href="<?php echo e(url('article_index')); ?>">首页</a>
<a href="<?php echo e(url('article_index').'/'.($page-1)); ?>">上一页</a>
<?php endif; ?>

<?php if($page <= 3): ?>
	<?php for($i = 1; $i <= ($page_total >= 5 ? 5 : $page_total); $i++): ?>
		<?php if($page == $i): ?>
			<a class="active text-page-tag" href="<?php echo e(url('article_index').'/'.$i); ?>"><?php echo e($i); ?></a>
		<?php else: ?>
			<a class="text-page-tag" href="<?php echo e(url('article_index').'/'.$i); ?>"><?php echo e($i); ?></a>
		<?php endif; ?>
	<?php endfor; ?>
<?php elseif($page >= $page_total - 2): ?>
	<?php for($i = ($page_total - 4 <= 0 ? 1 : $page_total - 4); $i <= $page_total; $i++): ?>
		<?php if($page == $i): ?>
			<a class="active text-page-tag" href="<?php echo e(url('article_index').'/'.$i); ?>"><?php echo e($i); ?></a>
		<?php else: ?>
			<a class="text-page-tag" href="<?php echo e(url('article_index').'/'.$i); ?>"><?php echo e($i); ?></a>
		<?php endif; ?>
	<?php endfor; ?>
<?php else: ?>
	<?php for($i = $page - 2; $i <= $page + 2; $i++): ?>
		<?php if($page == $i): ?>
			<a class="active text-page-tag" href="<?php echo e(url('article_index').'/'.$i); ?>"><?php echo e($i); ?></a>
		<?php else: ?>
			<a class="text-page-tag" href="<?php echo e(url('article_index').'/'.$i); ?>"><?php echo e($i); ?></a>
		<?php endif; ?>
	<?php endfor; ?>
<?php endif; ?>
<?php if($page == $page_total): ?>
<span class="disabled_page">下一页</span>
<span class="disabled_page">尾页</span>
<?php else: ?>
<a href="<?php echo e(url('article_index').'/'.($page+1)); ?>">下一页</a>
<a href="<?php echo e(url('article_index').'/'.$page_total); ?>">尾页</a>
<?php endif; ?>
</div>
</div>
</div>
<div class="article-right r">
<div class="new-ques">
<a href="article_add" class="write-ques">创建手记</a>
<?php if(isset($login_info['login_id'])): ?>
<div class="ques-wrap" id="ques-wrap">
	<div class="ques-info clearfix">
		<div class="right-uinfo">
			<h3>
				<a href="javascript:;" target="_blank" title="" class="sharer-name "><?php echo e($login_info['email']); ?></a>
			</h3>
		</div>
	</div>
		<ul class="num-info">
			<li><a href="javascript:;" target="_blank">手记<span><?php echo e($login_info['article_num']); ?></span></a></li>
			<li><a href="javascript:;" target="_blank">评论<span><?php echo e($login_info['comment_num']); ?></span></a></li>
			<li><a href="javascript:;" target="_blank">推荐<span><?php echo e($login_info['collection_num']); ?></span></a></li>
			<li><a href="javascript:;" target="_blank">收藏<span>1</span></a></li>
		</ul>
</div>
<?php endif; ?>
</div>

<div class="remon-sharer">
<?php if(isset($tags['order'])): ?>
<div class="tag-vane">
<h2 class="panel-hd tag-hd">标签风向标</h2>
<div class="tag-bd" id="tag-vane">
<?php foreach($tags['order'] as $tag): ?>
<a href="<?php echo e(url('article_tag/'.$tag['id'])); ?>" class="tag-detail"><?php echo e($tag['tag_name']); ?><span class="chapters"><?php echo e($tag['tag_num']); ?>篇</span></a>
<?php endforeach; ?>
</div>
</div>
<?php endif; ?>
<div class="other-article">
<h2>本月最新热门</h2>
<ul>
	<?php foreach($hot_articles as $key => $hot): ?>
	<li>
		<a href="<?php echo e(url('article_info').'/'.$hot->id); ?>" title="<?php echo e($hot->title); ?>" target="_blank"><h3><?php echo e($hot->title); ?></h3></a>
		<div class="show-box clearfix">
			<span class="spacer l"><?php echo e($hot->browser); ?>浏览</span>
			<span class="spacer l spacer-2"><?php echo e($hot->collection_num); ?>推荐</span>
			<span class="spacer l" href=""><?php echo e($hot->comment_num); ?>评论</span>
		</div>
	</li>
	<?php endforeach; ?>
</ul>
</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
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

	$('.icon-close').click(function(){
		$(this).parent().remove();
	})
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>