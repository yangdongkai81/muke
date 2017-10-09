<?php $__env->startSection('header'); ?>
    @parent
<?php $__env->startSection('title',"实战"); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="http://coding.imooc.com/static/module/??common/css/common-less.css,index/css/index-less.css?v=1503986951" type="text/css" />


    <div class="top-wrap-box">
        <!-- 顶部广告banner -->
        <div class="banner-bg-box clearfix">
            <a class="banner-item l" href="http://www.imooc.com/topic/new?mc_marking=7a7eb10c8bbf75a446e1af4cb23133ce&mc_channel=bdqdkj" data-track="szbanner-1-1" target="_blank" style="background-image: url(http://img.mukewang.com/5992578d000152bf05900120.jpg)" title=横扫开发领域！2017最强热门新技术全搜罗>
            </a>
            <a class="banner-item l" href="http://www.imooc.com/act/summertime?mc_marking=2b9bb030dbf7315c99d1d15f8e54beec&mc_channel=bdqdrmjt" data-track="szbanner-1-2" target="_blank" style="background-image: url(http://img.mukewang.com/599426030001814405900120.jpg)" title="8月充电不能停">
            </a>
        </div>
        <!-- 顶部广告banner end -->
    </div>

    <div class="w index-main">
        <!-- 类别 -->
        <div class="cato-wrap-box clearfix">
            <div class="cato-nav-box l">
                <p class="smalle-title">按方向:</p>
                <div class="cato-nav-row">
                    <ul class="">
                        <li class="cato-nav-item on">
                            <a href="<?php echo e(url('charge_index')); ?>" id="cato">全部</a>
                        </li>
                        <?php foreach($fang as $val): ?>
                            <li class="cato-nav-item ">
                                <a href="<?php echo e(url('charge_fang')); ?>/<?php echo e($val->id); ?>" data-ct="op"><?php if ($val->id==$pid) {
                                    echo "<span style='color:red'>".$val->aspect_name."</span>";
                                }else{
                                    echo $val->aspect_name;   
                                    }?></a>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
            <div class="skill-nav-box l">
                <p class="smalle-title">按分类:</p>
                <div class="cato-nav-row">
                    <ul class="">
                        <?php foreach($fen as $v): ?>
                            <li class="cato-nav-item ">
                                <a href="<?php echo e(url('charge_sofen')); ?>/<?php echo e($v->id); ?>" data-ct="html"><?php if ($v->id==$fid) {
                                    echo "<span style='color:red'>".$v->aspect_name."</span>";
                                }else{
                                    echo $v->aspect_name;
                                    } ?></a>
                            </li>
                        <?php endforeach; ?>


                    </ul>
                </div>
            </div>
        </div>
        <!-- 类别 end -->

        <div class="screening-box clearfix">
           <!--  <div class="screening-time l">
                <span><a href="/" class="on">默认排序</a></span>
                <span><a href="/?sort=2" >最新</a></span>
                <span><a href="/?sort=1" >销量</a></span>
                <span><a href="/?sort=3" >评价数</a></span>
            </div> -->
            <!-- 判断登录 && 并且购买过实战课程 -->
        </div>


        <div class="index-list-wrap">
            <div class="shizhan-course-list clearfix">
                <!-- 前4个课程追加渠道统计链接 -->

 
  <?php foreach($ke as $v): ?>
                         
   
                <div class="shizhan-course-wrap l">
                    <a href="<?php echo e(url('charge_learn')); ?>/<?php echo e($v->id); ?>">

                        <div class="shizhan-course-box">
                            <!-- 学习进度 -->
                            <div class="box">
                                <div class="img-box">
                                    <img  class="shizhan-course-img" alt="<?php echo e($v->desc); ?>" src="/public/uploads/<?php echo e($v->img); ?>"  >
                                </div>
                                <div class="shizhan-intro-box">
                                    <p class="shizan-name" title="<?php echo e($v->course_name); ?>"><?php echo e($v->course_name); ?></p>
                                    <p class="shizan-desc" title="<?php echo e($v->desc); ?>"><?php echo e($v->desc); ?></p>
                                    <div class="shizhan-info-bottom">
                                        <div class="bottom-box clearfix">
                                            <div class="evaluation-box l">
                                                <div class="shizhan-info">
                                                    <span><?php echo e($v->leve); ?></span>
                                                    <i></i>
                                                    <span>23人学习</span>
                                                </div>
                                              <!--   <div class="stars"><i class="sz-star on">12</i><i class="sz-star on"></i><i class="sz-star on"></i><i class="sz-star on"></i><i class="sz-star on"></i></div> -->
                                                <div class="evaluation-desc-box clearfix">
                                                    <i class="trangle"></i>
                                                    <div class="left-box l">
                                                        <p>综合评分</p>
                                                        <p class="big-text">10.00</p>
                                                        <p>1人评价</p>
                                                    </div>
                                                    <div class="right-box l">
                                                        <p>内容实用<span>10.0</span></p>
                                                        <p>通俗易懂<span>10.0</span></p>
                                                        <p>逻辑清晰<span>10.0</span></p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="r">
                                                <!-- 有促销价 -->
                                                <!-- 没有促销价 -->
                                                <p class="shizhan-price"></p>
                                                <p class="shizhan-course-price">￥<?php echo e($v->price); ?></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </a>
                </div>

        <?php endforeach; ?>

           
        </div>
    </div>
    <!-- 课程列表end -->
 <div class="page"><span class="disabled_page">首页</span><span class="disabled_page">上一页</span><a href="javascript:void(0)" class="active">1</a><a href="/?sort=0&unlearn=0&page=2">2</a><a href="/?sort=0&unlearn=0&page=3">3</a><a href="/?sort=0&unlearn=0&page=2">下一页</a><a href="/?sort=0&unlearn=0&page=3">尾页</a></div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    @parent
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>