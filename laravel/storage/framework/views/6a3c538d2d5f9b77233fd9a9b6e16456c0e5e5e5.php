<?php $__env->startSection('content'); ?>
    <form method="post" class="form-x" action="chapter_add" >  
      <div class="form-group">
        <div class="label">
          <label>章节名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="chapter_name" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
    
      
      <if condition="$iscid eq 1">
        <div class="form-group">
          <div class="label">
            <label>所属课程：</label>
          </div>
          <div class="field">
            <select name="pid" class="input w50">
            <?php foreach ($arr as $key => $v) {?>
      
              <option value="<?php echo e($v->id); ?>"><?php echo e($v->course_name); ?></option>
  
            <?php } ?>
            </select>
            <div class="tips"></div>
          </div>
        </div>
    
      </if>
      <div class="form-group">
        <div class="label">
          <label>排序：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="sort"   />
          <div class="tips"></div>
        </div>
      </div>
     
      <?php echo e(csrf_field()); ?> 
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit">生成	</button>
        </div>
      </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlayout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>