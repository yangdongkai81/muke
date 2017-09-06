@extends('adminlayout.index')

@section('content')
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="css/pintuer.css">
<link rel="stylesheet" href="css/admin.css">
<script src="js/jquery.js"></script>
<script src="js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="mold_uplod" enctype="multipart/form-data">  
      <div class="form-group">
        <div class="label">
          <label>课程名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="course_name" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>封面：</label>
        </div>
        <div class="field">
     
          <input type="file" class="button bg-blue margin-left" name="photo">
    
        </div>
      </div>     
      
      <if condition="$iscid eq 1">
        <div class="form-group">
          <div class="label">
            <label>所属分类：</label>
          </div>
          <div class="field">
            <select name="pid" class="input w50">
            <?php foreach ($data as $key => $v) {?>
      
              <option value="{{$v->id}},{{$v->parent_id}}" <?php if ($v->parent_id==0) {
               echo "disabled";
              } ?>>{{$v->le}}{{$v->aspect_name}}</option>
  
            <?php } ?>
            </select>
            <div class="tips"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>所属类型：</label>
          </div>
          <div class="field" style="padding-top:8px;"> 
          <?php foreach ($mold as $k => $v) {?>

            {{$v->mold_name}} <input value="{{$v->id}}" name="type"  type="checkbox" />

          <?php  } ?>
         
          </div>
        </div>
      </if>
      <div class="form-group">
        <div class="label">
          <label>难度级别：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="le"   />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>课程简介：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="desc"   />
          <div class="tips"></div>
        </div>
      </div>
      {{csrf_field()}} 
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

</body></html>
@endsection