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
            <form method="post"enctype="multipart/form-data" class="form-x" action="{{url('Admin_Charge_Index')}}">
                <div class="form-group">
                    <div class="label">
                        <label>课程名：</label>
                    </div>
                    <div class="field">
                        <input type="text" class="input w50" value="" name="title" data-validate="required:请输入标题" />
                        <div class="tips"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>课程价格：</label>
                    </div>
                    <div class="field">
                        <input type="text" class="input w50" value="" name="Price" data-validate="required:请输入课程价格" />
                        <div class="tips"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>课程封面图片：</label>
                    </div>
                    <div class="field">

                        <input type="file" name="img" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">
                        <div class="tipss">图片尺寸：500*500</div>
                    </div>
                </div>


                    <div class="form-group">
                        <div class="label">
                            <label>课程分类：</label>
                        </div>
                        <div class="field">
                            <select name="Type_name" class="input w50">
                               @foreach ($typelist as $val)
                                    <option value="{{$val->Type_name}}"> {{ $val->Type_name }}</option>
                               @endforeach
                            </select>
                            <div class="tips"></div>
                        </div>
                    </div>
                <div class="form-group">
                    <div class="label">
                        <label>课程方向：</label>
                    </div>
                    <div class="field">
                        <select name="Direction_name" class="input w50">
                            @foreach ($direction as $v)
                                <option value="{{$v->Direction_name}}"> {{ $v->Direction_name }}</option>
                            @endforeach
                        </select>
                        <div class="tips"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="label">
                        <label>所属老师：</label>
                    </div>
                    <div class="field">
                        <select name="User_id" class="input w50">
                            @foreach ($userlist as $v)
                                <option value="{{$v->id}}"> {{ $v->Username }}</option>
                            @endforeach
                        </select>
                        <div class="tips"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="label">
                        <label>课程描述：</label>
                    </div>
                    <div class="field">
                        <textarea class="input" name="Desc" style=" height:90px;"></textarea>
                        <div class="tips"></div>
                    </div>
                </div>


                <div class="clear"></div>
                <div class="form-group">
                    <div class="label">
                        <label>课程难度：</label>
                    </div>
                    <div class="field">
                        <input type="text" class="input" name="Leve" value="" />
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
@endsection