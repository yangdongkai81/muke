@extends('layouts.layouts')

@section('header')
@parent

<link href="./static/exam/css/bootstrap.css" rel="stylesheet">
<link href="./static/exam/css/mian-style.css" rel="stylesheet">

@section('title',"薪资测试")

@stop

@section('content')
<div id="exam" class="container" >

    <div class="sjm-msg text-center">
        <a class="btn btn-warning btn-lg"  href="/user/sign-in/signup">
            <i class="i-icon"><img src="./static/exam/images/icon-i.png"></i> 
                提示：在进行测试之前，请先注册账号，如已有账号，请登录。
        </a>
    </div>

    <form id="examForm" role="form" method="post" action="{{url('exam_answer')}}">
    
    <input type="hidden" name="id_arr" value="<?= json_encode($id_arr)?>">

    <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="page-header">
            <h1>PHP综合能力测试 <small>&nbsp;&nbsp;满分:100分</small>
            </h1>
        </div>


        <!-- <div class="panel-body">
            <p class="alert alert-warning" role="alert">
                本套测试题要求在58 分钟, 10 秒内完成，请抓紧时间！</p>
        </div> -->
 <? $i=1?>
 @foreach($data as $key => $val)
    
    <div class="panel panel-default">

        <div class="panel-heading">
                
                    <h3 class="panel-title">
                        {{$i. ' ,'}}{{$val['desc']}}
                    </h3>
             
        </div>  


        <div class="panel-body form-group">
            <input type="hidden" name="qids[]" >
                    <?

                        $json = json_decode($val['option'], true);
                        foreach($json as $k=>$v){

                            echo '<p>'.'<input type="radio" name="radio['.$key.']" value="'.$k.'" >'.'&nbsp;&nbsp;'.$k.'&nbsp;&nbsp;'.$v.'</p>';
                        }

                    ?>
                
           
        </div>
<? $i++?>

    </div>
    

  @endforeach      
        <div class="form-group  text-center" style="margin-top:35px;margin-bottom: 150px">
            <button id="subtn" type="submit" class="btn btn-primary btn-lg">
                <span class="glyphicon glyphicon-circle-arrow-up"></span> 提交查看答案
            </button>
        </div>

    </form>
</div>
<script src="./static/exam/js/bootstrap-dialog.js"></script>



@stop

@section('footer')

@parent
@stop

