@extends('layouts.layouts')
@section('header')
@parent
@stop
@section('content')
<link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=2.5,mall/index-less.css?v=201708319527" type="text/css" />


<div id="main">
<div class="container clearfix">
	<div class="mall-left l">
		<h2 class="page-title">
			<a href="/mall/index">积分商城</a>
			<a href="/about/faq?t=3" target="_blank" class="howget">如何获取积分？</a>
		</h2>
				<div class="course-nav-row clearfix">
			<span class="hd l">商品类型 :</span>
			<div class="bd l">
				<ul>
					<li class="course-nav-item on"><a href="{{url('integral_index')}}">全部</a></li>
					<li class="course-nav-item "><a href="{{url('fictitious')}}">虚拟商品</a></li>
					<li class="course-nav-item "><a href="{{url('entity')}}">实体商品</a></li>
				</ul>
			</div>
		</div>
		<div class="product-list">
			<ul>
			<?php foreach ($data as $key => $value) { ?>
				   <li>
					<div class="product-list-img">
						<a target="_blank" href="{{url('details')}}/{{$value->id}}">
							<img width="200" height="200" alt="<?php echo $value->name; ?>" src="<?php echo $value->logo; ?>" />
						</a>
											</div>
					<div class="product-list-info">
						<a href="{{url('details')}}/{{$value->id}}" title="<?php echo $value->name; ?>"><?php echo $value->name; ?></a>
						<span><?php echo $value->integral; ?>积分</span>
					</div>
			    </li>
			<?php } ?>
			    			</ul>
		</div>
		<!-- 分页 -->
    	<div id="pagenation" class="pagenation"></div>
    		</div>
  <!-- 右侧 -->
<div class="mall-right r">
      <div class="panel">      
         <!--  <a href="/u/5760367/credit" class="l sharer-head" title="">
              <img src="http://img.mukewang.com/59a6ad970001c04901000100-100-100.jpg" alt="" >
          </a> -->
          <a href="/u/5760367/credit" title="" class="sharer-name">{{$res2->email}}</a>
          <a href="/u/5760367/credit" class="shared-page jf-num">当前积分：<span id="js-my-credit">{{$res->integral}}</span></a>
          <!-- <a href="/mall/orders" class="mall-myorder-link">积分订单</a> -->
          <a href="/mall/orders" class="mall-myorder-link">兑换记录</a>      
    </div>

</div>

</div>
@stop
@section('footer')
@parent
@stop