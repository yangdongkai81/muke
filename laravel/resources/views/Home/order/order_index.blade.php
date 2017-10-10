@extends('layouts.layouts')


@section('sidebar')
    @parent


@endsection


@section('content')
    <link rel="stylesheet" href="/public/static/moco/v1.0/dist/css/moco.min.css" type="text/css" />
    <link rel="stylesheet" href="/public/static/module/index-less1.css" type="text/css" />


    <div class='body-main'>


        <div class="order-main clearfix">


            <div class="slider l">
                <h1>订单服务</h1>
                <ul class="nav-menu">
                    <a href="{{url('order_index')}}">
                        <li class="clearfix active">
                            <p class="nav-name l" style="margin-top:10px;">我的订单</p>
                            <span class="imv2-arrow2_r r"></span>
                        </li>
                    </a>
                    <a href="{{url('coupon')}}">
                        <li class="clearfix">
                            <p class="nav-name l" style="margin-top:10px;">我的优惠券
                            </p>
                            <span class="imv2-arrow2_r r" style="margin-top:10px;"></span>
                        </li>
                    </a>
                    <a href="#">
                        <li class="clearfix ">
                            <p class="nav-name l" style="margin-top:10px;">课程咨询</p>
                            <span class="imv2-arrow2_r r"></span>
                        </li>
                    </a>

                    <a href="{{url('record')}}">
                        <li class="clearfix">
                            <p class="nav-name l" style="margin-top:10px;">消费记录</p>
                            <span class="imv2-arrow2_r r"></span>
                        </li>
                    </a>
                </ul>
            </div><!-- .slider end -->




            <div class="right-container l">
                <h1>我的订单<span>共<i>3</i>个订单</span></h1>
                <div class='myOrder'>
                    <ul class="myOrder-list">
                        <?php foreach ($data as $key => $val) { ?>
                        <li data-flag="1709051414406541">
                            <p class="myOrder-number">
                                订单编号：<?php echo $val->oid; ?>
                                <span class="date"><?php echo $val->orderdate; ?></span>
                                <a href="/user/feedback" target="_blank" class="r">我有疑问，需要反馈？</a>
                            </p>
                            <div class="myOrder-course clearfix" style="height: 138px;">
                                <dl class="course-del l">
                                    <dd class="clearfix">
                                        <a href="http://coding.imooc.com/class/130.html" class="l">
                                            <img class="l" src="http://szimg.mukewang.com/5993a3e20001442905400300-160-90.jpg" width="160" height="90"/>
                                        </a>
                                        <div class="del-box l" style="width:150px;height: 10px;margin-top: 30px;">
                                            <!-- type为类型 1实战购买 2实战续费 4职业路径购买 5职业路径续费 -->


                                            <!-- cate 订单类型 0无优惠 1组合套餐 2学生优惠 -->


                                            <a href="http://coding.imooc.com/class/130.html"><p class="course-name"><?php echo $val->coursename; ?></a>







                                        </div>
                                    </dd>
                                </dl>
                                <!-- 没有使用优惠券 -->
                                <div class="course-money l pt64">
                                    <div class="total-box">
                                        <p class="type-price">
                                            <span>￥</span><?php echo $val->total; ?>
                                        </p>
                                    </div>
                                </div>






                                <div class="course-action l">
                                    <p style="margin-top:60px;">支付成功<p>
                                </div>
                            </div>
                        </li>
                        <?php  } ?>

                    </ul>
                    <!-- 是否有分页 -->
                    <!-- 是否有分页 end -->
                </div>


            </div>
        </div>




    </div>


@endsection