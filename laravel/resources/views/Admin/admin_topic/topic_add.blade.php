@extends('adminlayout.index')

@section('content')
    <!DOCTYPE html>
    <html lang="zh-cn">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="renderer" content="webkit">
        <title></title>
        <link rel="stylesheet" href="css/pintuer.css">
        <link rel="stylesheet" href="css/admin.css">
        <script src="js/jquery.js"></script>
        <script src="js/pintuer.js"></script>
    </head>
    <body>
    <div class="panel admin-panel">
        <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
        <div class="body-content">
            <form method="post"class="form-x" action="{{url('topic_add')}}">
                <div class="form-group">
                    <div class="label">
                        <label>题目描述：</label>
                    </div>
                    <div class="field">
                        <input type="text" class="input w50" value="" name="title" data-validate="required:请输入标题" />
                        <div class="tips"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>是否为企业考核题目：</label>
                    </div>
                    <div class="field">
                        <input type="radio" name="is_ent" value="0">是
                        <input type="radio" checked name="is_ent" value="1">否

                    </div>
                </div>


                <div class="form-group">
                    <div class="label">
                        <label>所属课程：</label>
                    </div>
                    <div class="field">
                        <select name="course" class="input w50">
                            <option value="无">无</option>
                            @foreach ($courselist as $val)
                                <option value="{{$val->id}}">{{$val->course_name}}</option>
                            @endforeach
                        </select>
                        <div class="tips"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>所属分类：</label>
                    </div>
                    <div class="field">
                        <select name="Type_name" class="input w50">
                            @foreach ($typelist as $v)
                            <option value="{{$v->id}}">{{$v->aspect_name}}</option>
                            @endforeach
                        </select>
                        <div class="tips"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>试题类型：</label>
                    </div>
                    <div class="field">
                        <select name="topic_type" id="topic_type" class="input w50">
                            <option value="单选题">单选题</option>
                            <option value="多选题">多选题</option>
                            <option value="判断题">判断题</option>
                        </select>
                        <div class="tips"></div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="label">
                        <label>选项：</label>
                    </div>
                    <div class="xuan">
                    <span class="span">A：<input type="radio" name="da" value="A" ><input type="text" name="xuan[]" class="xuan" value=""><input type="hidden" name="xiang[]" value="A"><a id="jia">【+】</a><br></span>
                    <span class="span">B：<input type="radio"  name="da"VALUE="B" ><input type="text" name="xuan[]" class="xuan" value=""><input type="hidden" name="xiang[]" VALUE="B"><br></span>

                    </div>
                </div>


                <div class="form-group">
                    <div class="label">
                        <label></label>
                    </div>
                    <div class="field">
                        <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    </body></html>
    <script src="/public/jquery.min.js"></script>
    <script>
        $(function(){
         $("#jia").click(function(){
            var lasthtml= $(".span").last().html()
            var zimu= lasthtml.substr(0,1)
            var s = String.fromCharCode(zimu.charCodeAt(0) + 1);
            var motto='<span style="margin-left: 129px" class="span">'+s+'：<input type="radio" VALUE='+s+' name="da" ><input type="text" name="xuan[]" class="xuan" value=""><input type="hidden" name="xiang[]" value='+s+'><br></span>';
             $(".span").last().after(motto);
         })

           $("#topic_type").change(function(){
           var desc=$(this).val()
               alert(desc)

           })

        })
    </script>
@endsection
