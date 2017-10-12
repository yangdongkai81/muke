
@extends('layouts.layouts')
@section('header')
@parent
@stop
@section('content')

<link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=2.5,mall/index-less.css,mall/orders-less.css?v=201708319521" type="text/css" />



<div id="main">

<div class="container clearfix">
  <div class="mall-left l">
    <h2 class="page-title">
      <a href="/mall/index">积分商城</a> 兑换记录
    </h2>

    <div class="orders-details">
        		<ol class="order-list">
            <?php foreach($data as $k => $v) { ?>
          			<li data-id="19631">
                
  				<div class="orders-item">
  					<h3 class="orders-time">订单时间：4秒前
                            </h3>
  					<div class="orders-ibd clearfix">
              <div class="cell clearfix img-slider">
                <a href="/mall/details/id/60" class="order-head" target="_blank" title="产品">
                  <img src="<?php echo $v->logo ?>" width="60" height="60" />
                </a>
                <a href="/mall/details/id/60" class="order-title"><?php echo $v->name ?>
                                  </a>
              </div>
              <div class="cell credit-status s-mark">
                <p class="good-td credit-num"><?php echo $v->integral ?>积分</p>
              </div>
              
                                                                                                                                                <a hre="javascrip:;" class="right-use red-btn js-right-use" data-t</div>
  <div class="use-col credit-status order-again s-again">
                <a href="/mall/details/id/60" class="again-use red-btn">再次兑换</a>
              </div>
  					

  			</li>
        <?php } ?>
          		</ol>
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
            <a title="qq_刘熙想静静_0" target="_blank" class="l roll-head" href="/u/5537775/courses">
              <img width="48" height="48" src="http://static.mukewang.com/img/595df2c80001739b01000100-100-100.jpg">
            </a>
            <a class="rankingnickname" title="qq_刘熙想静静_0" target="_blank" href="/u/5537775/courses">qq_刘熙想静静_0</a>
            <span class="archieve">购买了<a href="/mall/details/id/60">魔性贪吃蛇小游戏</a></span>
          </li>
                  <li>
            <a title="我要的小确幸" target="_blank" class="l roll-head" href="/u/5751491/courses">
              <img width="48" height="48" src="http://static.mukewang.com/img/59a6781e0001675211081111-100-100.jpg">
            </a>
            <a class="rankingnickname" title="我要的小确幸" target="_blank" href="/u/5751491/courses">我要的小确幸</a>
            <span class="archieve">购买了<a href="/mall/details/id/57">2048技术人生定制版</a></span>
          </li>
                  <li>
            <a title="安城如沫v" target="_blank" class="l roll-head" href="/u/2884815/courses">
              <img width="48" height="48" src="http://static.mukewang.com/img/56b43ffe0001feb502790279-100-100.jpg">
            </a>
            <a class="rankingnickname" title="安城如沫v" target="_blank" href="/u/2884815/courses">安城如沫v</a>
            <span class="archieve">购买了<a href="/mall/details/id/57">2048技术人生定制版</a></span>
          </li>
                  <li>
            <a title="慕工程4255769" target="_blank" class="l roll-head" href="/u/5709317/courses">
              <img width="48" height="48" src="http://static.mukewang.com/img/5333a1bc00014e8302000200-100-100.jpg">
            </a>
            <a class="rankingnickname" title="慕工程4255769" target="_blank" href="/u/5709317/courses">慕工程4255769</a>
            <span class="archieve">购买了<a href="/mall/details/id/57">2048技术人生定制版</a></span>
          </li>
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
                </ul>
    </div>
  </div>
</div>

</div>

@stop
@section('footer')
@parent
@stop
