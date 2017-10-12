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
                        <li class="clearfix">
                            <p class="nav-name l">我的订单</p>
                            <span class="imv2-arrow2_r r"></span>
                        </li>
                    </a>
                    <a href="{{url('coupon')}}">
                        <li class="clearfix active">
                            <p class="nav-name l">我的优惠券
                            </p>
                            <span class="imv2-arrow2_r r"></span>
                        </li>
                    </a>
                    <a href="#">
                        <li class="clearfix ">
                            <p class="nav-name l">课程咨询</p>
                            <span class="imv2-arrow2_r r"></span>
                        </li>
                    </a>
                   
                    <a href="{{url('record')}}">
                        <li class="clearfix">
                            <p class="nav-name l">消费记录</p>
                            <span class="imv2-arrow2_r r"></span>
                        </li>
                    </a>
                </ul>
            </div><!-- .slider end -->




            <div class="right-container l">
                <h1>我的订单<span>共<i>3</i>个优惠券</span></h1>
                <center>
 <a href="{{url('show_coupon')}}">点击获取优惠券</a></center>
                <div class='myOrder'>
           
   

                    <ul class="myOrder-list">
                    <?php foreach ($data as $key => $val) { ?>
                      <li data-flag="1709051414406541">
                            
                            <div class="myOrder-course clearfix">
                                <dl class="course-del l">
                                    <dd class="clearfix">
                                        <a href="http://coding.imooc.com/class/130.html" class="l">
                                            <img class="l" src="http://www.muke.com/public/images/timg.jpg" width="160" height="90"/>
                                        </a>
                                        <div class="del-box l" style="width:80px;height: 20px; margin-left:100px;margin-top: 30px;">
                                            <!-- type为类型 1实战购买 2实战续费 4职业路径购买 5职业路径续费 -->


                                            <!-- cate 订单类型 0无优惠 1组合套餐 2学生优惠 -->


                                            <p class="course-name"><?php echo $val->coupon; ?></p>






                                            <p class="price-btn-box clearfix">
                                                <!-- 如果有优惠券 -->
                                                <span class="l course-little-price"></span>
                                            </p>
                                        </div>
                                    </dd>
                                </dl>
                               






                                <div class="course-action l">
                                    <a class="pay-now" href="{{url('course_index')}}">立即使用</a>
                                    
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