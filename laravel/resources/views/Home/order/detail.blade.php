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
        <input type="text" name="id" id="id" value="<?php echo $data->id;?>">
           <img src="<?php echo $data->logo;?>" width="400"><br>
           数量:<span id="num"><?php echo $data->num; ?></span><br>
             <button id="btn">点击抢购</button>
            </div>
        </div>

    </div>
<script src="http://www.mylaravel.com/public/js/jquery-1.7.2.min.js"></script>
<script>
$(document).delegate('#btn','click',function(){
  var id=$('#id').val();
   var num=$('#num').html();
   $.ajax({
       type:"GET",
       url:"{{url('detail')}}",
       data:{id:id,num:num},
      success:function(msg){
    //  alert(msg);
         if (msg==66) {
          alert('抱歉！您来晚了一步');
         } 
        else
         {
          alert('恭喜您！中奖了');
          $('#num').html(msg);
         }
        }
      })
})
</script>


@endsection