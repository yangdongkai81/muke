@extends('layouts.layouts')

@section('header')
@parent
@section('title','猿问')
<!-- <base href="mvc/laravel-v5.2.0/public/"> -->
    <link href="./assets/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="./assets/css/font-awesome.css" rel="stylesheet">
    <style>
      #editor {
        resize:vertical; 
        overflow:auto; 
        border:1px solid silver; 
        border-radius:5px; 
        min-height:200px;
        box-shadow: inset 0 0 10px silver;
        padding:1em;
      }
    </style>
    <link rel="stylesheet" href="http://dreamsky.github.io/main/blog/common/init.css">
    <script src="http://dreamsky.github.io/main/blog/common/jquery.min.js"></script>
    <script src="http://dreamsky.github.io/main/blog/common/init.js"></script>
    <link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=2.5,wenda/save-less.css,course/inc/course_credit-less.css?v=201708281028" type="text/css" />
@stop

@section('content')

<div id="main">

<div class="container clearfix">
<form action="{{url('question_add')}}" method="post" enctype="multipart/form-data">
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="l wenda-main">
      <div class="sucesspage">
        <h2 class="new-save-title">提问</h2>
        <div id="js-inputques" class="inputques">
               <!-- <div class="quesdetail clearfix">
                  <span class="ques-label first-label">*</span>
                  <div class="question-area"> -->
                    <input type="text" style="width:780px; height:60px; font-size:20px" id="ques-title" class="ipt autocomplete question_tichu" maxlength="255" name="question" placeholder="请一句话说明你的问题，以问号结尾"/>
                    <p class="errortip" ></p>
                    <dl class="send-area-result">
                    </dl>
              <!--     </div>
               </div> -->
    
          <div id='pad-wrapper'>
          <div id="editparent">
            <div id='editControls' class='span9'>
              <div class='btn-group'>
                <a class='btn' data-role='bold' href='javascript:;'><b>B</b></a>
                <a class='btn' data-role='italic' href='javascript:;'><em>I</em></a>
                <a class='btn' data-role='underline' href='javascript:;'><u><b>U</b></u></a>
                <a class='btn' data-role='strikeThrough' href='javascript:;'><strike>—</strike></a>
              </div>
              <div class='btn-group'>
                <a class='btn' data-role='h1' href='javascript:;'>h<sup>1</sup></a>
                <a class='btn' data-role='h2' href='javascript:;'>h<sup>2</sup></a>
                <a class='btn' data-role='p' href='javascript:;'>p</a>
              </div>
            </div>
            <div id='editor' class='span9' style="width:700px" contenteditable>
            </div>
          </div>
          </div>
    
    <textarea name="content" id="text_content" style="display:none;"></textarea>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script>

      $(function() {
        $('#editControls a').click(function(e) {
          switch($(this).data('role')) {
            case 'h1':
            case 'h2':
            case 'p':
              document.execCommand('formatBlock', false, '<' + $(this).data('role') + '>');
              break;
            default:
              document.execCommand($(this).data('role'), false, null);
              break;
          }
          
        })
      });

    </script>
    <br>

                <div class="quesdetail mbottom">
                  <span class="ques-label">&nbsp;</span>
                  <div id="editor-wrap" class="editor clearfix" >
                    <div class="" id="ques-editor">
					
                    </div>
                    <p class="errortip"></p>
                  </div>
                </div>
                <div>上传图片</div>
                <input type="file" name="img">
                <div class="mbottom">
                  <span class="ques-label">*</span>
                  <div id="tag-title" class="new-tags ques-tag defaultbox">
                    <p class="new-tag-info">选择问题分类，最多可选3个</p>
                    <!-- <p class="tag-tip">您最多可以从以下选择3个标签哟！</p> -->
                    <div id="js-tags" class="taglist clearfix">
                                            @foreach ($data as $val)     
                                              <a style="text-decoration:none;" href="javascript:;" class="save-list-tag aspect_type" data-id="12" name="Android" id="{{ $val->id }}">{{ $val->aspect_name }}</a>
                                            @endforeach
                                          </div>
                    <p class="errortip firse"></p>
                  </div>
               </div>
        </div>
        <div class="verify-box clearfix">
          <div class="verify-code"></div>
        </div>
        <div class="saveques-bottom">
          <input type="hidden" id="hid_arr" name="arr" value="">
          <br>
          
          <p class="global-errortip js-global-error"></p>
        </div>
      </div>
     <input style="width:800px;" type="submit" id="ques-submit-btn" class="btn btn-red link-btn publishbtn fabu" value="发布">
      
     </div>
    </form>
    <div class="r wenda-slider">
      <div class="panel bbs-sendques">
        <div class="panel-body">
          <h1>提问注意事项</h1>
          <dl>
            <dd>1、您是来解决问题？请先搜索是否已经有同类问题吧。这样您就省心少打字。</dd>
            <dd>2、没找到是么？就在发问题时精确描述你的问题，不要写与问题无关的内容哟；</dd>
            <dd>3、慕课讨论更热衷于解达您想要的答案。能引起思考和讨论的知识性问题；</dd>
            <dt>问答禁止这些提问</dt>
            <dd>1、禁止发布求职、交易、推广、广告类与问答无关信息将一律清理。</dd>
            <dd>2、尽可能详细描述您的问题，如标题与内容不符，或与问答无关的信息将被删除扣分。</dd>
            <dd>3、问答刷屏用户一律冻结帐号</dd>
          </dl>
        </div>
      </div>
</div>

</div>

@stop

@section('footer')
@parent
@stop
<script type="text/javascript" src="./jquery.js"></script>
<script type="text/javascript">
    var arr = [];
    $(document).on('click','.aspect_type',function(){
        var len = $('.onactive').length;
        var tag_id = $(this).prop('id');
        var res = $(this).hasClass('onactive');
        if (res) {
            $(this).removeClass('onactive');
            arr.splice($.inArray(tag_id,arr),1);
            return false;
        }
        if(len > 2){
            alert('最多能选择三个标签');return false;
        }
        $(this).addClass('onactive');
        if ($.inArray(tag_id,arr)) {
            arr.push(tag_id);
        }
        $("#hid_arr").val(arr);
    })
    $(document).on('click','#ques-submit-btn',function(){
      var content = $('#editor').html();
      $("#text_content").val(content);
    })
</script>