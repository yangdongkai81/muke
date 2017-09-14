
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
      <a href="/mall/index">积分商城</a> 商品详情
    </h2>

    <div class="product-details" data-id="154">
      <div class="product-top">
        <div class="product-img l">
          <img width="360" height="360" alt="<?php echo $data->name?>" src="<?php echo $data->logo?>">
        </div>
        <div class="product-info r" id="product-info" data-type="1">
          <span class="product-info-t">
                          实物商品
                      </span>
          <h3 class="js-good-name"><?php echo $data->name?></h3>

          <div class="product-price">
            <span id="pro-price">{{$data->integral}}</span> <b>积分</b> 
            <div class='pro-warning clearfix'>
                <i class='imv2-error_c'></i>
                <span>请勿刷分，违者积分清零</span>
            </div>
          </div>
             
              <a href="{{url('exchange')}}/{{$data->id}}" class='btn btn-red js-btn-exchange ' data-credit="0">立即兑换</a>
             
                    </div>    
      </div>
      <h4>商品详情</h4>
      <div class="product-content">
        <p><p><img alt="" src="<?php echo $data->logo?>" width="800"/></p></p>
      </div>
    </div>
    <!-- 分页 -->
      <div id="pagenation" class="pagenation"></div>
  </div>
  <!-- 右侧 -->
<div class="mall-right r">
      <div class="panel">      
          <a href="/u/5760367/credit" class="l sharer-head" title="">
              <img src="http://static.mukewang.com/img/59a6ad970001c04901000100-100-100.jpg" alt="" >
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
            <a title="慕后端5048674" target="_blank" class="l roll-head" href="/u/5732145/courses">
              <img width="48" height="48" src="http://static.mukewang.com/img/54584d7d00012c0f02200220-100-100.jpg">
            </a>
            <a class="rankingnickname" title="慕后端5048674" target="_blank" href="/u/5732145/courses">慕后端5048674</a>
            <span class="archieve">购买了<a href="/mall/details/id/57">2048技术人生定制版</a></span>
          </li>
                  <li>
            <a title="幕布斯9515140" target="_blank" class="l roll-head" href="/u/5759946/courses">
              <img width="48" height="48" src="http://static.mukewang.com/img/5333a10b000190e402200220-100-100.jpg">
            </a>
            <a class="rankingnickname" title="幕布斯9515140" target="_blank" href="/u/5759946/courses">幕布斯9515140</a>
            <span class="archieve">购买了<a href="/mall/details/id/42">慕烟花</a></span>
          </li>
                  <li>
            <a title="yangdd" target="_blank" class="l roll-head" href="/u/5498412/courses">
              <img width="48" height="48" src="http://static.mukewang.com/img/5951c13c0001745206400640-100-100.jpg">
            </a>
            <a class="rankingnickname" title="yangdd" target="_blank" href="/u/5498412/courses">yangdd</a>
            <span class="archieve">购买了<a href="/mall/details/id/57">2048技术人生定制版</a></span>
          </li>
                  <li>
            <a title="慕后端5048674" target="_blank" class="l roll-head" href="/u/5732145/courses">
              <img width="48" height="48" src="http://static.mukewang.com/img/54584d7d00012c0f02200220-100-100.jpg">
            </a>
            <a class="rankingnickname" title="慕后端5048674" target="_blank" href="/u/5732145/courses">慕后端5048674</a>
            <span class="archieve">购买了<a href="/mall/details/id/42">慕烟花</a></span>
          </li>
                  <li>
            <a title="潮听哥" target="_blank" class="l roll-head" href="/u/1998561/courses">
              <img width="48" height="48" src="http://static.mukewang.com/img/5566e43200018f8e02790279-100-100.jpg">
            </a>
            <a class="rankingnickname" title="潮听哥" target="_blank" href="/u/1998561/courses">潮听哥</a>
            <span class="archieve">购买了<a href="/mall/details/id/60">魔性贪吃蛇小游戏</a></span>
          </li>
                  <li>
            <a title="潮听哥" target="_blank" class="l roll-head" href="/u/1998561/courses">
              <img width="48" height="48" src="http://static.mukewang.com/img/5566e43200018f8e02790279-100-100.jpg">
            </a>
            <a class="rankingnickname" title="潮听哥" target="_blank" href="/u/1998561/courses">潮听哥</a>
            <span class="archieve">购买了<a href="/mall/details/id/42">慕烟花</a></span>
          </li>
                  <li>
            <a title="慕后端5048674" target="_blank" class="l roll-head" href="/u/5732145/courses">
              <img width="48" height="48" src="http://static.mukewang.com/img/54584d7d00012c0f02200220-100-100.jpg">
            </a>
            <a class="rankingnickname" title="慕后端5048674" target="_blank" href="/u/5732145/courses">慕后端5048674</a>
            <span class="archieve">购买了<a href="/mall/details/id/60">魔性贪吃蛇小游戏</a></span>
          </li>
                  <li>
            <a title="qq_眀愛韽戀_0" target="_blank" class="l roll-head" href="/u/4535216/courses">
              <img width="48" height="48" src="http://static.mukewang.com/img/5843cc8b0001c32b01000100-100-100.jpg">
            </a>
            <a class="rankingnickname" title="qq_眀愛韽戀_0" target="_blank" href="/u/4535216/courses">qq_眀愛韽戀_0</a>
            <span class="archieve">购买了<a href="/mall/details/id/42">慕烟花</a></span>
          </li>
                  <li>
            <a title="xk今天要改名了" target="_blank" class="l roll-head" href="/u/5621674/courses">
              <img width="48" height="48" src="http://static.mukewang.com/img/5976f1b50001c22601800180-100-100.jpg">
            </a>
            <a class="rankingnickname" title="xk今天要改名了" target="_blank" href="/u/5621674/courses">xk今天要改名了</a>
            <span class="archieve">购买了<a href="/mall/details/id/60">魔性贪吃蛇小游戏</a></span>
          </li>
                  <li>
            <a title="程兮" target="_blank" class="l roll-head" href="/u/5624684/courses">
              <img width="48" height="48" src="http://static.mukewang.com/img/533e51840001ca2502000200-100-100.jpg">
            </a>
            <a class="rankingnickname" title="程兮" target="_blank" href="/u/5624684/courses">程兮</a>
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

