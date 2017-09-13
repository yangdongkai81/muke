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
      <th width="15%">发布状态</th>
      <th width="25%">操作</th>
    </tr>
@foreach($articles as $k => $article)
    <tr>
      <td>{{ $article['id'] }}</td>
      <td>{{ $article['userinfo']->email }}</td>
      <td>{{ $article['title'] }}</td>
      <td>{{ date('Y-m-d H:i:s', $article['add_time']) }}</td>
      <td class="status" data-status="{{$article['status']}}">
        @if($article['status'] == 0)
        未审核
        @elseif($article['status'] == 1)
        审核通过
        @elseif($article['status'] == 3)
        <span id="top">置顶中</span>
        @elseif($article['status'] == 4)
        推荐中
        @endif
      </td>
      <td>
        <div class="button-group">
          <a class="button border-main check"  data-id="{{ $article['id'] }}" href="javascript:;"><span class="icon-edit"></span> 审核</a>
          <a class="button border-main recommend" data-id="{{ $article['id'] }}" href="javascript:;"><span class="icon-edit"></span> 推荐</a>
          <a class="button border-main top" data-id="{{ $article['id'] }}" href="javascript:;"><span class="icon-edit"></span> 置顶</a>
          <a class="button border-red" data-id="{{ $article['id'] }}" href="javascript:;"><span class="icon-trash-o"></span> 删除</a>
        </div>
      </td>
    </tr>
@endforeach
  </table>
</div>
<script src="./jquery.min.js"></script>
<script type="text/javascript">
    //手记审核
    $('.check').click(function(){
      var id = $(this).data('id');
      var status = $(this).parent().parent().prev().data('status');
      var obj = $(this);
      if(status == 1){
        alert('此记录已审核'); return false;
      }
      $.ajax({
        type:'get',
        url:"{{ url('article_check') }}",
        data:{id:id},
        success:function(res){
          if(res == 1){
            obj.parent().parent().prev().text('审核通过');
            obj.parent().parent().prev().data('status',1);
            alert('审核成功');
          } else {
            alert('审核失败');
          }
        }
      })
    })

    //手记删除
    $('.border-red').click(function(){
      var id = $(this).data('id');
      var obj = $(this);
      $.ajax({
        type:'get',
        url:"{{ url('article_del') }}",
        data:{id:id},
        success:function(res){
          if(res == 1){
            obj.parent().parent().parent().remove();
            alert('删除成功');
          } else {
            alert('删除失败');
          }
        }
      })
    })

    //手记置顶
    $('.top').click(function(){
      var id = $(this).data('id');
      var obj = $(this);
      $.ajax({
        url:"{{ url('article_top') }}",
        data:{id:id},
        success:function(res){
          if(res == 1) {
            alert('置顶成功');
            obj.parent().parent().prev().html('<span id="top">置顶中</span>');
            $('#top').text("审核通过");
          } else if(res == 2){
            alert('此记录已置顶');
          } else {
            alert('置顶失败');
          }
        }
      })
    })

    //手记推荐
    $('.recommend').click(function(){
      var id = $(this).data('id');
      // alert(id);return;
      var obj = $(this);
      $.ajax({
        url:"{{ url('recommend') }}",
        data:{id:id},
        success:function(res){
          console.log(res);return false;
          if(res == 1) {
            alert('置顶成功');
            obj.parent().parent().prev().html('<span id="top">置顶中</span>');
            $('#top').text("审核通过");
          } else if(res == 2){
            alert('此记录已置顶');
          } else {
            alert('置顶失败');
          }
        }
      })
    })
</script>
@endsection