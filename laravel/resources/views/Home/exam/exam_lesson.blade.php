@extends('layouts.layouts')

@section('header')
@parent



@section('title',"模拟考试")

@stop

@section('content')


<div class="media well">

                        <ul class="nav nav-tabs">
                            <li class="active">
                                <span class="badge badge-info questionindex">2</span>
                            </li>
                            <li class="btn-group pull-right">
                                <button class="btn" type="button" onclick="javascript:favorquestion('3');" autocomplete="off"><em class="icon-heart" title="收藏"></em></button>
                            </li>
                        </ul>
                        <div class="media-body well text-warning">
                            <a name="question_3"></a>中国共产党第（）次全国代表大会，制定了作为一个完备形态的政党所不可缺少的民主革命纲领，制定了党的章程，完成了建党任务。                        </div>
                                                                        <div class="media-body well">
                            <p>A、—</p><p>B、二</p><p>C、三</p><p>D、四</p>                        </div>
                                                <div class="media-body well questionanswerbox" id="answernotice_3">
                                                                                                                            <label class="radio inline"><input type="radio" name="question[3]" rel="3" value="A" autocomplete="off">A </label>
                                                                                                <label class="radio inline"><input type="radio" name="question[3]" rel="3" value="B" autocomplete="off">B </label>
                                                                                                <label class="radio inline"><input type="radio" name="question[3]" rel="3" value="C" autocomplete="off">C </label>
                                                                                                <label class="radio inline"><input type="radio" name="question[3]" rel="3" value="D" autocomplete="off">D </label>
                                                                                                                                                    </div>
                                                <div class="media-body well">
                            <div class="btn-group pull-right hide answerbox">
                                                                <a class="btn ajax" target="_self" href="javascript:;" title="上一题" data="index.php?exam-app-lesson-ajax-questions&amp;number=1">上一题</a>
                                                                <a class="btn ajax" target="_self" href="javascript:;" title="下一题" data="index.php?exam-app-lesson-ajax-questions&amp;number=3">下一题</a>
                            </div>
                            <div class="btn-group pull-right">
                                <a class="btn questionbtn" href="javascript:;" onclick="javascript:$('.questionbtn').addClass('hide');$('.answerbox').removeClass('hide');" title="查看答案">查看答案</a>
                            </div>
                        </div>
                        <div class="media-body well answerbox hide">
                            <h5>答案</h5>
                            B                       </div>
                        <div id="rightanswer_3" class="hide">B</div>
                        <div class="media-body well answerbox hide">
                            <h5>解析</h5>
                                                    </div>
                    </div>

@stop

@section('footer')

@parent
@stop
