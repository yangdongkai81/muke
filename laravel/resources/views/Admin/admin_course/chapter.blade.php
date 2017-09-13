@extends('adminlayout.index')

@section('content')
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
      
              <option value="{{$v->id}}">{{$v->course_name}}</option>
  
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
     
      {{csrf_field()}} 
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit">生成	</button>
        </div>
      </div>
    </form>
@endsection