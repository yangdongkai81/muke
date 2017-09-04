@extends('layouts.layouts')

@section('sidebar')
    @parent

@endsection

@section('content')
    <link rel="stylesheet" href="/public/static/moco/v1.0/dist/css/moco.min.css" type="text/css" />
    <link rel="stylesheet" href="/public/static/module/index-less.css" type="text/css" />
    <div class='body-main'>
        <div class="order-main clearfix">
            <div class="slider l">
                <h1>订单服务</h1>
                <ul class="nav-menu">
                    <a href="/myorder">
                        <li class="clearfix active">
                            <p class="nav-name l">我的订单</p>
                            <span class="imv2-arrow2_r r"></span>
                        </li>
                    </a>
                    <a href="/coupon">
                        <li class="clearfix ">
                            <p class="nav-name l">我的优惠券
                            </p>
                            <span class="imv2-arrow2_r r"></span>
                        </li>
                    </a>
                    <a href="/consult">
                        <li class="clearfix ">
                            <p class="nav-name l">课程咨询</p>
                            <span class="imv2-arrow2_r r"></span>
                        </li>
                    </a>
                    <a href="/receipt">
                        <li class="clearfix ">
                            <p class="nav-name l">开具发票</p>
                            <span class="imv2-arrow2_r r"></span>
                        </li>
                    </a>
                    <a href="/bill">
                        <li class="clearfix ">
                            <p class="nav-name l">消费记录</p>
                            <span class="imv2-arrow2_r r"></span>
                        </li>
                    </a>
                </ul>
            </div><!-- .slider end -->


            <div class="right-container l">
                <h1>我的订单<span>共<i>0</i>个订单</span></h1>
                <div class='myOrder'>
                    <div class="no-list">
                        您暂无任何订单
                    </div>
                </div>

            </div>
        </div>


    </div>

@endsection