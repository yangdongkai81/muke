@extends('adminlayout.index')

@section('content')

<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 猿问列表</strong></div>
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">ID</th>
      <th width="15%">用户名称</th>
      <th width="15%">问题标题</th>
      <th width="15%">添加时间</th>
      <th width="15%">审核状态</th>
      <th width="10%">操作</th>
    </tr>
    @foreach($data as $val)
    <tr>
      <td>{{$val['id']}}</td>
      <td>{{$val['user_id']}}</td>
      <td>{{$val['questions_title']}}</td>
      <td>{{date('Y-m-d H:i:s',$val['questions_time'])}}</td>
      <td>
        <?php if ($val['questions_examine'] == 0) { ?>
            <span class="tg{{$val['id']}}" style="color:red">待审核</span>
        <?php } else {?>
            <span class="tg{{$val['id']}}" style="color:green">审核通过</span>
        <?php } ?>
        <select class="sel" data-id="{{$val['id']}}">
          <option value="0" <?php if ($val['questions_examine'] == 0) { echo "selected";}?> >未通过</option>
          <option value="1" <?php if ($val['questions_examine'] == 1) { echo "selected";}?> >通过</option>
        </select>
      </td>
      <td>
        <a class="button border-red del" data-id="{{ $val['id'] }}" href="javascript:;"><span class="icon-trash-o"></span> 删除</a>
      </td>
    </tr>
    @endforeach
  </table>
</div>
<script src="./jquery.min.js"></script>
<script type="text/javascript">
  $(document).on("change",".sel",function(){
     var str = $(this).val();
     var id = $(this).data('id');
     var tgs = ".tg"+id;
     $.ajax({
        url:"{{url('examine')}}",
        type:"get",
        data:{str:str,id:id},
        success:function(msg){
          if (msg == 1) {
            alert("审核通过");
            if (str == 1) 
            { //alert("123");return false;
                $(tgs).css('color','green').html("审核通过");
            } else {
                $(tgs).css('color','red').html("待审核");
            }
          } else if (msg == 0) {
            alert("审核不通过");
            if (str == 0) 
            {
               $(tgs).css('color','red').html("待审核");
            } else {
               $(tgs).css('color','green').html("审核通过");
            }
          } else {
            alert("系统错误");
          }
        }
     })
  })
  $(document).on("click",".del",function(){
    var id = $(this).data('id');
    $.ajax({
      url:"{{url('delete')}}",
      type:"get",
      data:{id:id},
      success:function(msg)
      {
         if (msg == 1) {
            alert("删除成功");
            window.location.reload();
         } else if (msg == 0) {
            alert("删除失败");
         } else {
            alert("系统错误");
         }
      }
    })
  })
</script>
@endsection
