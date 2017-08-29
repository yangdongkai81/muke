@extends('adminlayout.index')

@section('content')
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">
    <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加分类</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">ID</th>
      <th width="15%">分类名称</th>
      <th width="10%">父级ID</th>
      <th width="10%">操作</th>
    </tr>
<?php foreach ($data as $key => $v) { ?>

    <tr>
      <td class="did">{{$v->id}}</td>
      <td><?php if ($v->parent_id>0) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;----";
      } ?>{{$v->aspect_name}}</td>
      <td>{{$v->parent_id}}</td>
      <td><div class="button-group"> <a class="button border-main" href="cateedit.html"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="javascript:void(0)"  onclick="return del({{$v->id}},2)"><span class="icon-trash-o"></span> 删除</a> </div></td>
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
    <form method="post" class="form-x" action="{{url('cate_add')}}">
    {{csrf_field()}}
      <div class="form-group">
        <div class="label">
          <label>上级分类：</label>
        </div>
        <div class="field">
          <select name="pid" class="input w50">
            <option value="0">顶级分类</option>
      <?php foreach ($arr as $key => $v) { ?>

            <option value="{{$v->id}}">{{$v->aspect_name}}</option>

        <?php }   ?>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>分类名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="aspect_name" />
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

@endsection