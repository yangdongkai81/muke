<?php $__env->startSection('header'); ?>
@parent
<?php $__env->startSection('title',"首页"); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="/static/moco/v1.0/dist/css/moco.min.css?t=201709111715" type="text/css" />
<link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=2.5,course/course_program_detail.css,landingpage.css?v=201709111715" type="text/css" />

<div id="main" style="background-color:#edeff0;">
    <div style="width:100%px;height:550px;background-color:black;">
        <img src="../public/landp_banner.jpg" style="margin-left:260px;">
    </div>
    <div class="beginpro">
        <a href="<?php echo e(url('course_index')); ?>" id="js-beginpro" class="land-join-btn">加入学习</a>
    </div>


</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
@parent
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>