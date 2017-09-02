@extends('layouts.layouts')

@section('sidebar')
    @parent

@endsection

@section('content')
    <link rel="stylesheet" href="/static/moco/v1.0/dist/css/moco.min.css" type="text/css" />
    <link rel="stylesheet" href="/public/static/module/index-less.css" type="text/css" />
    <div class='body-main'>
        <div class='cart-header'>
            <div class='cart-header-warp clearfix'>
                <div class='cart-title left clearfix'>
                    <h1 class='left'>我的购物车</h1>
                    <div class='left js-number-box-cart'>
                        共<span class='js-coures-num'>0</span>门，已选择<span class='js-choice-num'>0</span>门
                    </div>
                </div>
                <div class='right'>
                    <div class='clearfix'>
                        <span class='left'><a class='js-myorderbtn  myorder-history' href='indent_index'>我的订单历史</a></span>
                        <span class='left num js-order-num' style='display: none;'>0</span>
                    </div>
                </div>
            </div>
        </div>
        <div class='cart-body' id='cartBody'>
            <div class='cart-body-title clearfix'>
                <div class='item-1 l'>
                    <i class='imv2-checkbox_onk js-check-all check'></i>
                    <span class='c-93999f'>全选</span>
                </div>

                <div class='item-2 l'>
                    <span class='c-4d555d'>课程</span>
                </div>

                <div class='item-3 l'>
                    <span class='c-4d555d'>金额</span>
                </div>

                <div class='item-4 l'>
                    <span class='c-4d555d'>操作</span>
                </div>
            </div>
	<textarea class="storageCart" style="display:none">
		[
					{"goods_id":"277","type":"1","type_id":"122","status":"1","price":"188.00","ios_price":"199.00","service_lifetime":0,"open_discount":"0","discount_start_time":"1500220800","discount_end_time":"1500220800","discount_price":"0.00","discount_type":"0","code_white_list":10001,"using_discount":false,"pay_price":"188.00","code":0}

				]
	</textarea>
            <div id='js-cart-body-table' class='cart-body-table'>
                <div class='item clearfix js-item-cart js-each-122' data-type='1' data-typeid='122' data-goodsid="277" data-price="188.00">
                    <div class='item-1'>
                        <i class='js-check imv2-checkbox_onk check' data-price='188.00'></i>
                    </div>

                    <div class='item-2 clearfix'>
                        <a href="http://coding.imooc.com/class/122.html" target="_blank" class="img-box l">
                            <img src='' width='160' height='90'/>
                        </a>
                        <dl class='l has-package'>
                            <a href="http://coding.imooc.com/class/122.html" target="_blank"><dt></dt></a>
                            <!-- 组合套餐 -->
                            <p class="package-item js-package-item" data-cid="122"></p>
                        </dl>
                    </div>

                    <div class='item-3'>
                        <div class='price clearfix'>
                            <em>￥</em>
                            <span>188.00</span>
                        </div>
                    </div>

                    <div class='item-4'>
                        <i class='imv2-close js-close-cart close'></i>
                    </div>
                </div>
                <div id='Anchor'></div>
                <div class='cart-body-bot js-cart-body-bot'>
                    <div class='clearfix cart-body-bot-box'>


                        <div class='right'>
                            <ul class='clearfix'>
                                <li class='li-2'>
                                    <div class='topdiv'>总计金额：</div>
                                    <div class='price price-red clearfix'>
                                        <em>￥</em>
                                        <span class='jsAltogether'>0</span>
                                    </div>
                                </li>

                                <li class='li-3'>
                                    <a href="confirm_index">
                                    <span class='btn js-go-confrim'>去结算</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 遮罩 -->
        <div class="block-package js-block-package"></div>
        <!-- loading -->
        <div class="loading">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
        <!-- 遮罩 end-->





    </div>



@endsection

