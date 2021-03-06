@extends('adminlayout.index')

@section('content')
<style>
.pagination li{list-style:none;float:left;}
</style>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/public/css/pintuer.css">
<link rel="stylesheet" href="/public/css/admin.css">
<script src="/public/js/jquery.js"></script>
<script src="/public/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">  
  <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加内容</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="10%">ID</th>
      <th width="20%">图片</th>
      <th width="15%">名称</th>
      <th width="20%">分类</th>
      <th width="10%">积分</th>
      <th width="10%">添加时间</th>
      <th width="15%">操作</th>
    </tr>
   <?php foreach ($data as $key => $value) { ?>
     <tr>
      <td><?php echo $value->id ?></td>     
      <td><img src="<?php echo $value->logo; ?>" alt="" width="120" height="50" /></td>     
      <td><?php echo $value->name ?></td>
      <td><?php echo $value->classification ?></td>
      <td><?php echo $value->integral ?></td>
      <td><?php echo $value->time ?></td>
      <td><div class="button-group">
      <a class="button border-main" href="up?id=<?php echo $value->id ?>"><span class="icon-edit"></span> 修改</a>
      <a class="button border-red" href="del?id=<?php echo $value->id ?>" onclick="return del(1,1)"><span class="icon-trash-o"></span> 删除</a>
      </div></td>
    </tr>
   <?php } ?>
    
  </table>
</div>
<?php echo $data->links(); ?>

@endsection