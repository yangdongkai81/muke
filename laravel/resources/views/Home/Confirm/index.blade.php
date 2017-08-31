@extends('layouts.layouts')

@section('sidebar')
@parent

@endsection

@section('content')
    <link rel="stylesheet" href="/public/static/moco/v1.0/dist/css/moco.min.css" type="text/css" />
    <link rel="stylesheet" href="/public/static/module/index-less.css" type="text/css" />
    <div class='body-main'>
        <div class='cart-header'>
            <div class='cart-header-warp clearfix'>
                <div class='cart-title left clearfix'>
                    <h1 class='left'>确认订单</h1>
                </div>
                <div class='right'>
                </div>
            </div>
        </div>
        <div class='cart-body' id='cartBody'>
            <div class="title-box clearfix">
                <p class='l goods-info-title'>商品信息</p>
                <a href="/user/feedback" target="_blank" class="r">我有疑问，需要反馈？</a>
            </div>
	<textarea class="storageCart" style="display:none">
		[
					{"goods_id":"208","type":"1","type_id":"110","status":"1","price":"288.00","ios_price":"288.00","service_lifetime":0,"open_discount":"0","discount_start_time":"1499097600","discount_end_time":"1499097600","discount_price":"0.00","discount_type":"0","code_white_list":10001,"using_discount":false,"pay_price":"288.00","code":0}
							]
	</textarea>
            <div class="detail-box">
                <ul>
                    <li class="clearfix js-item-cart js-each-110" data-type="1" data-typeid="110" data-goodsid="208">
                        <!-- 判断类型 -->
                        <!-- type为类型 1实战购买 2实战续费 4职业路径购买 5职业路径续费-->
                        <a href="http://coding.imooc.com/class/110.html" target="_blank"><img src="" alt="" class="l"></a>
                        <div class="text-info-box l">
                            <!-- type为类型 1实战购买 2实战续费 4职业路径购买 5职业路径续费-->
                            <a href="http://coding.imooc.com/class/110.html" target="_blank"><p class="info-title"></p></a>
                        </div>
                        <p class="info-price l"><em>￥</em><span>288.00</span></p>
                    </li>
                </ul>
            </div>
            <div class="coupons-box">
                <div class="coupon-title-box clearfix">
                    <p class="coupon-title l">
                        使用优惠券
                        <i class="imv2-arrow2_d js-more-coupon-btn js-close"></i>
                    </p>
                    <a href="http://www.imooc.com/about/faq?t=6&id=18" target="_blank" class="r">什么是优惠券？</a>
                </div>
                <div class="coupon-del-box"  style="display: none;">
                    <!-- 可用优惠券 -->
                    <!-- 不可用优惠券 -->
                    <!-- 无优惠券时 -->
                    <p class="no-coupons">暂无可用优惠券</p>
                </div>
            </div>
            <div class="pay-box clearfix">
                <div class="goods-total-price-box clearfix">
                    <p class="r rw price-num">
                        <em>￥</em><span id="js-actual-price">288.00</span>
                    </p>
                    <p class="r price-text">共<span>1</span>件商品，商品总金额：</p>
                </div>
                <!-- 优惠券抵扣 -->
                <!-- 优惠券抵扣end -->
                <div class="pay-price-box clearfix">
                    <p class="r rw price">
                        <em>￥</em><span id="js-pay-price">288.00</span>
                    </p>
                    <p class="r price-text">应付：</p>
                </div>
                <div class="pay-account-box clearfix">
                    <p class="pay-account r">购买账号：<span>qq_空白_180</span></p>
                </div>
                <a href="javascript:void(0);" class="r moco-btn moco-btn-red submit-btn js-pay-submit" data-type="normal" >提交订单</a>
            </div>
            <div class='clearfix'>
                <div class='bot-right r'>
                    <i class='imv2-checkbox check js-agreement-check'></i>
                    <span>我已经阅读并同意</span>
                    <a target="_blank" href='http://coding.imooc.com/user/faqdetail?column_id=1&id=9'>《用户付费协议》</a>
                </div>
            </div>
        </div>
    </div>

@endsection