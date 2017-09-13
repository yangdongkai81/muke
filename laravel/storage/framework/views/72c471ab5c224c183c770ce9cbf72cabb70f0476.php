<?php $__env->startSection('content'); ?>
<center>
<h2 style="color:red">欢迎来到后台！！！</h2>
</center>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('adminlayout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>