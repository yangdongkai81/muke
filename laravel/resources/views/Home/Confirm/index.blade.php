@extends('layouts.layouts')

@section('sidebar')
    @parent

@endsection

@section('content')
    <link rel="stylesheet" href="/public/static/moco/v1.0/dist/css/moco.min.css" type="text/css" />
    <link rel="stylesheet" href="/public/static/module/index-less2.css" type="text/css" />
    <form name="form1" id="form1" method="POST" action="{{ URL('confirm_order') }}" onsubmit="return checkAgreement();">
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
                @foreach($cart as $val)
                    <div class="detail-box">
                        <ul>
                            <li class="clearfix js-item-cart js-each-133" data-type="1" data-typeid="133" data-goodsid="342">
                                <!-- 判断类型 -->
                                <!-- type为类型 1实战购买 2实战续费 4职业路径购买 5职业路径续费-->
                                <input type="hidden" name="sid[]" value="{{ $val->sid }}">
                                <a href="http://coding.imooc.com/class/133.html" target="_blank"><img src="http://szimg.mukewang.com/596d796300013ccf05400300-160-90.jpg" alt="" class="l"></a>
                                <div class="text-info-box l">
                                    <!-- type为类型 1实战购买 2实战续费 4职业路径购买 5职业路径续费-->
                                    <a href="http://coding.imooc.com/class/133.html" target="_blank">
                                        <input type="hidden" name="coursename[]" value="{{ $val->course_name }}">
                                        <p class="info-title">{{ $val->course_name }}</p>
                                    </a>
                                </div>
                                <p class="info-price l" ><em>￥</em>
                                    <input type="hidden" name="price[]" value="{{ $val->price }}">
                                    <span>{{ $val->price }}</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                @endforeach
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
                            <em>￥</em>
                            <span id="js-actual-price myspan">{{ $price }}</span>
                        </p>
                        <p class="r price-text">共
                            <span>{{ $count }}</span>件商品，商品总金额：
                        </p>
                    </div>
                    <!-- 优惠券抵扣 -->
                    <!-- 优惠券抵扣end -->
                    <div class="pay-price-box clearfix">
                        <p class="r rw price">
                            <em>￥</em><span id="js-pay-price myspan">{{ $price }}</span>
                        </p>
                        <p class="r price-text">应付：</p>
                    </div>
                    <div class="pay-account-box clearfix">
                        <p class="pay-account r">购买账号：<span>qq_空白_180</span></p>
                    </div>
                    <input type="submit" class="r moco-btn moco-btn-red submit-btn js-pay-submit sub" value="提交订单">
                </div>
                <div class='clearfix'>
                    <div class='bot-right r'>
                        <input type="checkbox" name="agreement" id="agreement">
                        {{--<i class='imv2-checkbox check js-agreement-check'></i>--}}
                        <span>我已经阅读并同意</span>
                        <a target="_blank" href='http://coding.imooc.com/user/faqdetail?column_id=1&id=9'>《用户付费协议》</a>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script type="text/javascript" src="/public/js/jquery.js"></script>
    <script src='/public/static/lib/jquery/jquery.min.js'></script>
    <script src="//coding.imooc.com/passport/static/scripts/ssologin.js?v=2.0"></script>
    <script type="text/javascript" src="/public/static/module/common.js"></script>
    <script>
        function checkAgreement()
        {
            if (document.getElementById("agreement").checked == false)
            {
                alert("请阅读《用户付费协议》");
                document.getElementById("agreement").focus();
                return false;
            }
//            $('.sub')
            return true;
        }
    </script>

@endsection