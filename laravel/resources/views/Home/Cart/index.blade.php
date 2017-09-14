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
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" class="goods-check" id="AllCheck">
                    &nbsp;
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
            <div id='js-cart-body-table' class='cart-body-table'>
                @foreach($cart as $val)
                    <div class='item clearfix js-item-cart js-each-122'>
                        <div class='item-1'>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" class='js-check imv2-checkbox_onk check goods-check GoodsCheck' value='{{ $val->price }},{{ $val->sid }},{{ $val->course_name }},{{ $val->course_img }}' name="box" onclick="jisuan(this)" id="{{ $val->sid }}">
                        </div>
                        <div class='item-2 clearfix'>
                            <a href="" target="_blank" class="img-box l">
                                <img src='/public/uploads/{{ $val->course_img }}' width='160' height='90'/>
                            </a>
                            <dl class='l has-package'>
                                <a href="http://coding.imooc.com/class/122.html" target="_blank"><dt>{{ $val->course_name }}</dt></a>
                                <!-- 组合套餐 -->
                                <p class="package-item js-package-item" data-cid="122"></p>
                            </dl>
                        </div>
                        <div class='item-3'>
                            <div class='price clearfix'>
                                <em>￥</em>
                                <span>
                                    {{ $val->price }}
                                </span>
                            </div>
                        </div>
                        <div class='item-4'>
                            <i class='imv2-close js-close-cart close' id="{{ $val->sid }}"></i>
                        </div>
                    </div>
                    <div id='Anchor'></div>
                @endforeach
                <div class='cart-body-bot js-cart-body-bot'>
                    <div class='clearfix cart-body-bot-box'>
                        <div class='right'>
                            <ul class='clearfix'>
                                <li class='li-2'>
                                    <div class='topdiv'>总计金额：</div>
                                    <div class='price price-red clearfix'>
                                        <em>￥</em>
                                        <span class='jsAltogether' id="myspan">0</span>
                                    </div>
                                </li>
                                <li class='li-3'>
                                    <input type="button" class='btn js-go-confrim' value="去结算">
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
    <script type="text/javascript" src="/public/js/jquery.js"></script>
    <script src='/public/static/lib/jquery/jquery.min.js'></script>
    <script src="//coding.imooc.com/passport/static/scripts/ssologin.js?v=2.0"></script>
    <script type="text/javascript" src="/public/static/module/common.js"></script>
    <script>
        /*
        * 购物车删除功能
        * */
        $(document).on('click','.close',function(){
            if(confirm('您确定要删除此课程吗？')){
                var sid = $(this).prop('id');
                $.ajax({
                    type:'get',
                    url:"{{URL('cart_del')}}",
                    data:'id='+sid,
                    success:function (msg) {
                        if(msg==1){
                            alert('删除成功');
                            window.location.href="{{url('cart_index')}}";
                        }else{
                            alert('删除失败');
                        }
                    }
                })
            }
        });

        // 点击全选按钮
        $("#AllCheck").click(function() {
            var total = 0;
            var box=document.getElementsByName('box');
            for(var i=0;i<=box.length;i++){
                if ($(this).prop("checked") == true) {
                    //如果全选按钮被选中
                    $(".goods-check").prop('checked', true);
                    //所有按钮都被选中
                } else {
                    $(".goods-check").prop('checked', false);
                    //else所有按钮不全选
                }
                for(var i=0;i<box.length;i++){
                    if(box[i].checked){
                        total += parseFloat(box[i].value);
                    }
                }

                myspan.innerText = total;
            }
        });

        /*
        * 单点价格计算
        * */
        function jisuan(){
            var total = 0;
            var fruits = document.getElementsByName("box");
            for(var i=0;i<fruits.length;i++){
                if(fruits[i].checked){
                    total += parseFloat(fruits[i].value);
                }
            }

            myspan.innerText = total;
        }

        /*
        * 选择商品到确认订单信息页面
        * */
        $(function(){
            $("input:button").click(function() {
                var text = $("input:checkbox[name='box']:checked").map(function() {
                    return this.id;
                }).get().join(',');
                if(text == ''){
                    alert('请选择商品');
                    return false;
                }else {
                    var url = "{{URL('confirm_index')}}"+'/'+text;
                }

                window.location.href=url;
            });
        });
    </script>
@endsection

