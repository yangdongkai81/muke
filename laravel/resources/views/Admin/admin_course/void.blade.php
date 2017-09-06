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
    <form method="post" class="form-x" action="add_void">  
      <div class="form-group">
        <div class="label">
          <label>视频标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="title" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>视频：</label>
        </div>
        <div class="field">
          <input type="file" id="url1" name="img" />
   
        </div>
      </div>     
      
     
        <div class="form-group">
          <div class="label">
            <label>课程选择：</label>
          </div>
          <div class="field">
            <select name="pid" class="input w50 " id="ke" >
              <option value="0">请选择课程</option>
          <?php foreach ($arr as $key => $v) {?>
          
              <option value="{{$v->id}}">{{$v->course_name}}</option>

          <?php } ?>    
            </select>
            <div class="tips"></div>
          </div>
        </div>

        <div class="form-group">
          <div class="label">
            <label>章节选择：</label>
          </div>
          <div class="field">
            <select name="cid" class="input w50" id="zhang">
             <option value="0">请选择章节</option>
             
            </select>
            <div class="tips"></div>
          </div>
        </div>
  
      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label>排序：</label>
        </div>
        <div class="field">
         <input type="text" class="input w50"  name="sort" data-validate="required:请输入排序" />
        </div>
      </div>
     

      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
       {{csrf_field()}} 
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body></html>
@endsection
<script src="/public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$("#ke").live("change",function(){
   var id=$(this).val();
   var _token=$("input:hidden").val();

    $.ajax({
        type: "POST",
        url: "mold_selectcha",
        data: "id="+id+"&_token="+_token,
        dataType:'json',
        success: function(msg){
          str='';
          $(msg).each(function(k,v){
              str+='<option value='+v.id+'>'+v.chapter_name+'</option>';
          })
          $('#zhang').html(str);
        }
    });
})
</script>