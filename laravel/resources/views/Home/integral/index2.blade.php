
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
					<li class="course-nav-item "><a href="{{url('integral_index')}}">全部</a></li>
					<li class="course-nav-item "><a href="{{url('fictitious')}}">虚拟商品</a></li>
					<li class="course-nav-item on"><a href="{{url('entity')}}">实体商品</a></li>
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
          <a href="/u/5760367/credit" class="l sharer-head" title="">
              <img src="http://img.mukewang.com/59a6ad970001c04901000100-100-100.jpg" alt="" >
          </a>
          <a href="/u/5760367/credit" title="" class="sharer-name">{{$res2->email}}</a>
          <a href="/u/5760367/credit" class="shared-page jf-num">当前积分：<span id="js-my-credit">{{$res->integral}}</span></a>
          <!-- <a href="/mall/orders" class="mall-myorder-link">积分订单</a> -->
          <a href="/mall/orders" class="mall-myorder-link">兑换记录</a>      
    </div>
      <div class="panel">
      <div class="panel-heading">
          <h2 class="panel-title">TA们在买 </h2>
      </div>

      <ul class="mall-users">
                  <li>
            <a title="yangdd" target="_blank" class="l roll-head" href="/u/5498412/courses">
              <img width="48" height="48" src="http://img.mukewang.com/5951c13c0001745206400640-100-100.jpg">
            </a>
            <a class="rankingnickname" title="yangdd" target="_blank" href="/u/5498412/courses">yangdd</a>
            <span class="archieve">购买了<a href="/mall/details/id/57">2048技术人生定制版</a></span>
          </li>
                  <li>
            <a title="慕后端5048674" target="_blank" class="l roll-head" href="/u/5732145/courses">
              <img width="48" height="48" src="http://img.mukewang.com/54584d7d00012c0f02200220-100-100.jpg">
            </a>
            <a class="rankingnickname" title="慕后端5048674" target="_blank" href="/u/5732145/courses">慕后端5048674</a>
            <span class="archieve">购买了<a href="/mall/details/id/42">慕烟花</a></span>
          </li>
                  <li>
            <a title="潮听哥" target="_blank" class="l roll-head" href="/u/1998561/courses">
              <img width="48" height="48" src="http://img.mukewang.com/5566e43200018f8e02790279-100-100.jpg">
            </a>
            <a class="rankingnickname" title="潮听哥" target="_blank" href="/u/1998561/courses">潮听哥</a>
            <span class="archieve">购买了<a href="/mall/details/id/60">魔性贪吃蛇小游戏</a></span>
          </li>
                  <li>
            <a title="潮听哥" target="_blank" class="l roll-head" href="/u/1998561/courses">
              <img width="48" height="48" src="http://img.mukewang.com/5566e43200018f8e02790279-100-100.jpg">
            </a>
            <a class="rankingnickname" title="潮听哥" target="_blank" href="/u/1998561/courses">潮听哥</a>
            <span class="archieve">购买了<a href="/mall/details/id/42">慕烟花</a></span>
          </li>
                  <li>
            <a title="慕后端5048674" target="_blank" class="l roll-head" href="/u/5732145/courses">
              <img width="48" height="48" src="http://img.mukewang.com/54584d7d00012c0f02200220-100-100.jpg">
            </a>
            <a class="rankingnickname" title="慕后端5048674" target="_blank" href="/u/5732145/courses">慕后端5048674</a>
            <span class="archieve">购买了<a href="/mall/details/id/60">魔性贪吃蛇小游戏</a></span>
          </li>
                  <li>
            <a title="qq_眀愛韽戀_0" target="_blank" class="l roll-head" href="/u/4535216/courses">
              <img width="48" height="48" src="http://img.mukewang.com/5843cc8b0001c32b01000100-100-100.jpg">
            </a>
            <a class="rankingnickname" title="qq_眀愛韽戀_0" target="_blank" href="/u/4535216/courses">qq_眀愛韽戀_0</a>
            <span class="archieve">购买了<a href="/mall/details/id/42">慕烟花</a></span>
          </li>
                  <li>
            <a title="xk今天要改名了" target="_blank" class="l roll-head" href="/u/5621674/courses">
              <img width="48" height="48" src="http://img.mukewang.com/5976f1b50001c22601800180-100-100.jpg">
            </a>
            <a class="rankingnickname" title="xk今天要改名了" target="_blank" href="/u/5621674/courses">xk今天要改名了</a>
            <span class="archieve">购买了<a href="/mall/details/id/60">魔性贪吃蛇小游戏</a></span>
          </li>
                  <li>
            <a title="程兮" target="_blank" class="l roll-head" href="/u/5624684/courses">
              <img width="48" height="48" src="http://img.mukewang.com/533e51840001ca2502000200-100-100.jpg">
            </a>
            <a class="rankingnickname" title="程兮" target="_blank" href="/u/5624684/courses">程兮</a>
            <span class="archieve">购买了<a href="/mall/details/id/60">魔性贪吃蛇小游戏</a></span>
          </li>
                  <li>
            <a title="撒库拉哈纳米奇" target="_blank" class="l roll-head" href="/u/4823260/courses">
              <img width="48" height="48" src="http://img.mukewang.com/545850ee0001798a02200220-100-100.jpg">
            </a>
            <a class="rankingnickname" title="撒库拉哈纳米奇" target="_blank" href="/u/4823260/courses">撒库拉哈纳米奇</a>
            <span class="archieve">购买了<a href="/mall/details/id/57">2048技术人生定制版</a></span>
          </li>
                  <li>
            <a title="慕运维0126882" target="_blank" class="l roll-head" href="/u/5757976/courses">
              <img width="48" height="48" src="http://img.mukewang.com/5458666300017f2102200220-100-100.jpg">
            </a>
            <a class="rankingnickname" title="慕运维0126882" target="_blank" href="/u/5757976/courses">慕运维0126882</a>
            <span class="archieve">购买了<a href="/mall/details/id/60">魔性贪吃蛇小游戏</a></span>
          </li>
                </ul>
    </div>
  </div>
</div>

</div>
@stop
@section('footer')
@parent
@stop
