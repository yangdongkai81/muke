@extends('layouts.layouts')

@section('sidebar')
    @parent

@endsection

@section('content')

    <link rel="stylesheet" href="/public/static/module/index-less.css" type="text/css" />
    <link rel="stylesheet" href="/public/static/module/pay-center-less.css" type="text/css" />

    <div class="body-main">


        <div class="cart-header">
            <div class="cart-header-warp clearfix">
                <div class="cart-title left clearfix">
                    <h1 class="left">支付中心</h1>

                </div>
                <div class="right">

                </div>
            </div>
        </div>

        <div class="cart-body">
            @foreach($res as $v)
                <div class="cart-body-title">
                    <div class="clearfix">
                        <div class="left trade-title">
                            <span class="order">订单：</span><span class="num">{{ $v->oid }}</span>
                        </div>
                        <div class="right">
                            <a href="javascript:;" class="js-toggle-detai">收起</a>
                        </div>
                    </div>

                    <ul class="js-itemUl item-ul" style="height: 150px;">

                        <li class="item clearfix" data-cid="$info.type_id">
                            <!-- type为类型 1实战购买 2实战续费 4职业路径购买 5职业路径续费 -->
                            <div class="item-left left clearfix">
                                <a href="http://coding.imooc.com/class/130.html" target="_blank"><img src="http://szimg.mukewang.com/596d796300013ccf05400300-160-90.jpg" class="left" width="160" height="90"></a>

                                <dl class="left">

                                    <!-- type为类型 1实战购买 2实战续费 4职业路径购买 5职业路径续费-->

                                    <a href="http://coding.imooc.com/class/130.html" target="_blank">
                                        <dt>{{ $v->coursename }}</dt>
                                    </a>

                                </dl>
                            </div>

                            <div class="item-right right">
                                <div class="price clearfix">
                                    <span class="price-text">实付金额：</span>
                                    <em>￥</em>
                                    <span>{{ $v->total }}</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            @endforeach
            <div class="pay-method">
                <h2 class="pay-method-title">支付方式</h2>
                <ul class="clearfix js-pay-method">
                    <li class="alipay active" data-type="1">
                        <div class="huabei"><a href="http://coding.imooc.com/user/faqdetail?column_id=2&amp;id=20" target="_blank">支持花呗分期付款</a></div>
                        <div class="bottomright">
                            <div class="triangle"></div>
                            <i class="imv2-check"></i>
                        </div>
                    </li>
                    <li class="wxpay" data-type="2">

                        <div class="bottomright">
                            <div class="triangle"></div>
                            <i class="imv2-check"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="pay-summary clearfix">
                <div class="warning">
                    <i class="imv2-error_c"></i>
                    <span id="timer1"></span>
                </div>
                <div class="summary">

                    <!--
                    <div class='clearfix prefer'></div>
                        <span class='label'>活动优惠：</span>
                        <span class='price'>
                            <em>￥</em>
                            <span>0.00</span>
                        </span>
                    </div>
                    -->
                    <div class="clearfix total">
                        <span class="label">应付金额：</span>
                        <span class="price">
					<em>￥</em>
					<span>{{ $total }}</span>
				</span>
                    </div>
                    <div class="submit-warp clearfix">
                        {{--@foreach($res as $val)--}}
                        <span data-ordernum="1708211554447755" class="pay-summary-submit js-pay-submit pay" id="{{ $pid }}">立即支付</span>
                        {{--@endforeach--}}
                    </div>
                    <div class="clearfix feedback-href">
                        <a target="_blank" href="http://order.imooc.com/user/feedback">我有疑问，需要反馈？</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
        <input id="jsPrice" value="188.00" type="hidden">
    </div>

    <script type="text/javascript" src="/public/js/jquery.js"></script>
    <script>
        /*
        * 购物车删除功能
        * */
        $(document).on('click','.pay',function(){
            var sid = $(this).prop('id');
            $.ajax({
                type:'get',
                url:"{{URL('confirm_pay')}}",
                data:'id='+sid,
                success:function (msg) {
                    if(msg==1){
                        alert('支付成功');
                        window.location.href="{{url('cart_index')}}";
                    }else{
                        alert('支付失败');
                    }
                }
            })
        });


        function Timer(maxtime, id, callback) {
            //maxtime：时间，单位s
            //id：显示计时器信息的容器id
            //callback：计时器结束回调
            var tmp
            function CountDown() {
                if (maxtime >= 0) {
                    day = Math.floor(maxtime / (60 * 60 * 24));
                    tmp = maxtime - day * 60 * 60 * 24;
                    hours = Math.floor(tmp / (60 * 60));
                    tmp = tmp - hours * 60 * 60;
                    minutes = Math.floor(tmp / (60));
                    tmp = tmp - minutes * 60;
                    seconds = tmp
                    msg = "请在" + hours + "小时" + minutes + "分" + seconds + "秒以内支付完成，如未完成此订单将自动关闭。需重新购买！"
                    document.getElementById(id).innerHTML = msg;
                    maxtime -= 1;
                }
                else {
                    clearInterval(timer);
                    if (typeof callback == "function") callback(); //执行倒计时完成后的回调
                }
            }
            var timer = setInterval(function () { CountDown() }, 1000);
        }
        window.onload = function () {
            new Timer(24*60*60, 'timer1', function () { document.getElementById("timer1").innerHTML = "计时完成"; });
        }
    </script>
@endsection