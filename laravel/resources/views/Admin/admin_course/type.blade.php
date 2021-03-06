@extends('adminlayout.index')

@section('content')

<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">
    <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加类型</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">ID</th>
      <th width="15%">类型名称</th>
      <th width="10%">操作</th>
    </tr>
<?php foreach ($arr as $key => $v) {?>

    <tr>
      <td>{{$v->id}}</td>
      <td>{{$v->mold_name}}</td>
      <td><div class="button-group"> <a class="button border-main" href="cateedit.html"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="javascript:void(0)" onclick="return del({{$v->id}},2)"><span class="icon-trash-o"></span> 删除</a> </div></td>
    </tr>
<?php } ?> 
{{csrf_field()}} 
  </table>
</div>
<script type="text/javascript">
function del(id,mid){
	if(confirm("您确定要删除吗?")){			
		var _token=$("input:hidden").val();
      $.ajax({
            type: "POST",
            url: "some",
            data: "id="+id+"&_token="+_token,
            success: function(msg){
               if (msg==1) {
                 alert('删除成功！');
                 location.reload();
               }else{
                alert('删除失败！');
               }
            }
      });
	}
}
</script>
<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="mold_add">

      <div class="form-group">
        <div class="label">
          <label>类型：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="mold_name" />
          <div class="tips"></div>
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
@endsection