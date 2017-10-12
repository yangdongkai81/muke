@extends('adminlayout.index')
@section('header')
@parent
@stop
@section('content')

<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="{{url('add_do')}}" enctype="multipart/form-data">  
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="name" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
         <div><input type="file" name="logo"></div>
          <div class="tipss">图片尺寸：500*500</div>
        </div>
      </div>     
      
      <if condition="$iscid eq 1">
        <div class="form-group">
          <div class="label">
            <label>分类标题：</label>
          </div>
          <div class="field">
            <select name="classification" class="input w50">
              <option value="0">请选择分类</option>
              <option value="虚拟分类">虚拟分类</option>
              <option value="实体分类">实体分类</option>
            </select>
            <div class="tips"></div>
          </div>
        </div>
        
      <div class="form-group">
        <div class="label">
          <label>积分:</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="integral" value="0"  data-validate="number:排序必须为数字" />
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body>


@endsection
@section('footer')
@parent
@stop
