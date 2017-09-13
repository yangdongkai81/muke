@extends('layouts.layouts')


@section('sidebar')
    @parent


@endsection


@section('content')
    <link rel="stylesheet" href="/public/static/moco/v1.0/dist/css/moco.min.css" type="text/css" />
    <link rel="stylesheet" href="/public/static/module/index-less1.css" type="text/css" />


    <div class='body-main'>


        <div class="order-main clearfix">
        <center>
     <h1 style="color: red">慕课网优惠券抢购页面</h1>

           <div class="product-list">
            <ul>
            <?php foreach ($data as $key => $value) { ?>
                   <li style="float:left;margin-left:150px;">
                    <div class="product-list-img">
                        <a target="_blank" href="{{url('coupon_detail')}}/{{$value->id}}">
                            <img width="200" height="200" alt="<?php echo $value->coupon_name; ?>" src="<?php echo $value->logo; ?>" />
                        </a>
                                            </div>
                    <div class="product-list-info">
                        <a href="{{url('details')}}/{{$value->id}}" title="<?php echo $value->coupon_name; ?>"><?php echo $value->coupon_name; ?></a>
                        <span>数量<?php echo $value->num; ?></span>
                    </div>
                </li>
            <?php } ?>
                            </ul>
        </div>



        


            </div>
        </div>




    </div>


@endsection