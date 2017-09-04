@extends('adminlayout.index')

@section('content')

<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 手记列表</strong></div>
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">ID</th>
      <th width="15%">用户名称</th>
      <th width="15%">标题</th>
      <th width="15%">添加时间</th>
      <th width="10%">操作</th>
    </tr>
@foreach($articles as $article)
    <tr>
      <td>{{ $article->id }}</td>
      <td>{{ $article->email }}</td>
      <td>{{ $article->title }}</td>
      <td>{{ date('Y-m-d H:i:s', $article->add_time) }}</td>
      <td><div class="button-group"> <a class="button border-main" href="cateedit.html"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="javascript:void(0)" onclick="return del(,2)"><span class="icon-trash-o"></span> 删除</a> </div></td>
    </tr>
@endforeach
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
@endsection