<?php $__env->startSection('header'); ?>
    @parent
    <link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=2.5,course/course_list-v3-less.css?v=1.0?v=201708281028" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="main">

    <div class="wrap ">
        <div class="top">
            <div class="course-content">
                <div class="course-nav-box">
                    <div class="course-nav-row clearfix">
                        <span class="hd l">方向：</span>
                        <div class="bd">
                            <ul class="">
                                <li class="course-nav-item  on">
                                    <a href="<?php echo e(url('course_index')); ?>">全部</a>
                                </li>
                                <?php foreach ($fang as $k => $v) {?>
                                 
                            
                                                                                                        <li class="course-nav-item ">
                                   
                                        <a href="<?php echo e(url('course_so')); ?>/<?php echo e($v->id); ?>" data-ct="fe"><?php echo e($v->aspect_name); ?></a>
                                    </li>
                                <?php } ?>
                                   
                                                                                                </ul>
                        </div>
                    </div>
                    <div class="course-nav-row clearfix">
                        <span class="hd l">分类：</span>
                        <div class="bd">
                            <ul class="">
                                                                                                                        <li class="course-nav-item on">
                                    <a href="<?php echo e(url('course_index')); ?>">全部</a>
                                </li>
                                                                        
                                                                        
                                                        
                                <?php foreach ($fen as $key => $v) {?> 
                                                               
                                <li class="course-nav-item ">
                                                            <a href="<?php echo e(url('course_sofen')); ?>/<?php echo e($v->id); ?>"><?php echo e($v->aspect_name); ?></a>
                                                        </li>
                                                
                               <?php } ?>                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
            </ul>
                        </div>
                    </div>
                    <div class="course-nav-row clearfix border_bottom_none">
                        <span class="hd l">类型：</span>
                        <div class="bd">
                            <ul class="">

                                <li class="course-nav-item on">
                                        <a href="<?php echo e(url('course_index')); ?>">全部</a>
                                </li>
                                <?php foreach ($le as $key => $v) {?>
                                                              <li class="course-nav-item ">
                                        <a href="<?php echo e(url('course_sole')); ?>/<?php echo e($v->id); ?>"><?php echo e($v->mold_name); ?></a>
                                    </li>
                                <?php  } ?> 
                                
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<ul>

   <?php  foreach ($ke as $key => $v) {?>
  
	<li >												
			<div class="course-card-container" style="padding-left:60px;">
	<a target="_blank" href="<?php echo e(url('course_learn')); ?>/<?php echo e($v->id); ?>" class="course-card">
		
		<div class="course-card-top">
			<img class="course-banner lazy"  src="/public/uploads/<?php echo e($v->img); ?>" style="display: inline;">
						<div class="course-label">
												<label>mysql</label>
											</div>
					</div>
		<div class="course-card-content">
			<h3 class="course-card-name"><?php echo e($v->course_name); ?></h3>
			<div class="clearfix course-card-bottom">
				<div class="course-card-info">
					<span><?php echo e($v->leve); ?></span><span><i class="icon-set_sns"></i>502489</span>
				</div>
				<p class="course-card-desc"><?php echo e($v->desc); ?></p>
			</div>
		</div>
	</a>
</div>
<?php } ?>
    </li>


                                            </ul>
                </div>
                <div class="page"><span class="disabled_page">首页</span><span class="disabled_page">上一页</span><a href="javascript:void(0)" class="active text-page-tag">1</a><a class="text-page-tag" href="http://www.imooc.com/course/list?c=fe&amp;page=2">2</a><a class="text-page-tag" href="http://www.imooc.com/course/list?c=fe&amp;page=3">3</a><a class="text-page-tag" href="http://www.imooc.com/course/list?c=fe&amp;page=4">4</a><a class="text-page-tag" href="http://www.imooc.com/course/list?c=fe&amp;page=5">5</a><a class="text-page-tag" href="http://www.imooc.com/course/list?c=fe&amp;page=6">6</a><a class="text-page-tag" href="http://www.imooc.com/course/list?c=fe&amp;page=7">7</a><a href="http://www.imooc.com/course/list?c=fe&amp;page=2">下一页</a><a href="http://www.imooc.com/course/list?c=fe&amp;page=9">尾页</a></div>
            </div>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    @parent
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>