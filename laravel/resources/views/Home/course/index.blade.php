
@extends('layouts.layouts')

@section('header')
    @parent
    <link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=2.5,course/course_list-v3-less.css?v=1.0?v=201708281028" type="text/css" />
@stop

@section('content')
<div id="main">

    <div class="wrap ">
        <div class="top">
            <div class="course-content">
                <div class="course-nav-box">
                    <div class="course-nav-row clearfix">
                        <span class="hd l">方向：</span>
                        <div class="bd">
                            <ul class="">
                                <li class="course-nav-item  on">
                                    <a href="{{url('course_index')}}">全部</a>
                                </li>
                                <?php foreach ($fang as $k => $v) {?>
                                 
                            
                                                                                                        <li class="course-nav-item ">
                                   
                                        <a href="{{url('course_so')}}/{{$v->id}}" data-ct="fe">{{$v->aspect_name}}</a>
                                    </li>
                                <?php } ?>
                                   
                                                                                                </ul>
                        </div>
                    </div>
                    <div class="course-nav-row clearfix">
                        <span class="hd l">分类：</span>
                        <div class="bd">
                            <ul class="">
                                                                                                                        <li class="course-nav-item on">
                                    <a href="{{url('course_index')}}">全部</a>
                                </li>
                                                                        
                                                                        
                                                        
                                <?php foreach ($fen as $key => $v) {?> 
                                                               
                                <li class="course-nav-item ">
                                                            <a href="{{url('course_sofen')}}/{{$v->id}}">{{$v->aspect_name}}</a>
                                                        </li>
                                                
                               <?php } ?>                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
            </ul>
                        </div>
                    </div>
                    <div class="course-nav-row clearfix border_bottom_none">
                        <span class="hd l">类型：</span>
                        <div class="bd">
                            <ul class="">

                                <li class="course-nav-item on">
                                        <a href="{{url('course_index')}}">全部</a>
                                </li>
                                <?php foreach ($le as $key => $v) {?>
                                                              <li class="course-nav-item ">
                                        <a href="{{url('course_sole')}}/{{$v->id}}">{{$v->mold_name}}</a>
                                    </li>
                                <?php  } ?> 
                                
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<ul>

   <?php  foreach ($ke as $key => $v) {?>
  
	<li>												
			<div class="course-card-container">
	<a target="_blank" href="{{url('course_learn')}}/{{$v->id}}" class="course-card">
		
		<div class="course-card-top">
			<img class="course-banner lazy"  src="/public/uploads/{{$v->img}}" style="display: inline;">
						<div class="course-label">
												<label>mysql</label>
											</div>
					</div>
		<div class="course-card-content">
			<h3 class="course-card-name">{{$v->course_name}}</h3>
			<div class="clearfix course-card-bottom">
				<div class="course-card-info">
					<span>{{$v->leve}}</span><span><i class="icon-set_sns"></i>502489</span>
				</div>
				<p class="course-card-desc">{{$v->desc}}</p>
			</div>
		</div>
	</a>
</div>
<?php } ?>
    </li>


                                            </ul>
                </div>
                <div class="page"><span class="disabled_page">首页</span><span class="disabled_page">上一页</span><a href="javascript:void(0)" class="active text-page-tag">1</a><a class="text-page-tag" href="http://www.imooc.com/course/list?c=fe&amp;page=2">2</a><a class="text-page-tag" href="http://www.imooc.com/course/list?c=fe&amp;page=3">3</a><a class="text-page-tag" href="http://www.imooc.com/course/list?c=fe&amp;page=4">4</a><a class="text-page-tag" href="http://www.imooc.com/course/list?c=fe&amp;page=5">5</a><a class="text-page-tag" href="http://www.imooc.com/course/list?c=fe&amp;page=6">6</a><a class="text-page-tag" href="http://www.imooc.com/course/list?c=fe&amp;page=7">7</a><a href="http://www.imooc.com/course/list?c=fe&amp;page=2">下一页</a><a href="http://www.imooc.com/course/list?c=fe&amp;page=9">尾页</a></div>
            </div>

    </div>

</div>

@endsection

@section('footer')
    @parent
@stop