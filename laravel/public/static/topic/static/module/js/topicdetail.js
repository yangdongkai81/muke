!function(){
  var _dom,mySwiper={},
      _dom = document;
  //---DOM事件绑定的回调函数定义区---------------------
  var bindEventFuns = {
        tabsTouchStart:function(swiper){
          var objs = $(swiper.wrapper).parents('.js-loopswiper');
          var index = swiper.activeIndex,
           users = objs.find(".js-avatar-list li").length;
           if (swiper.isEnd){
            index = 1;
           }
           //向左滑动
           if(swiper.swipeDirection == "prev" && index == 0){
            index = users;
           }  
           objs.find(".js-avatar-list li").removeClass("active");
           objs.find(".target-u-"+index).addClass("active");
        },
        clickTabList:function(obj){
            var _this = obj,
            _index = _this.index()+1;  
            var _pindex = _this.parents('.js-loopswiper').data('index');  
            _this.parents('.js-loopswiper').find(".js-avatar-list li").removeClass("active");
            _this.addClass('active');

            mySwiper[_pindex].slideTo(_index);
        },
        playVideo:function(obj){ 
          var videourl = obj.data('videourl');
          player({
            id: 'js-video',
            url: videourl,
            videotitile:'实战课程_慕课网',
            width: '800',
            height: '500',
            events: {
              onReady: function(){
                this.play();
              }
            }
          });
          $('#js-index-video').show();
        },
        closeVideo:function(){
          $('#js-index-video',_dom).hide().find("#js-video").empty();
        }
  }
  //---DOM事件绑定方法定义区-------------------------
	var bindEvent = function(){
		$(document).on('click','.js-video-start',function(){
			bindEventFuns.playVideo($(this));
		}).on('mouseover','.js-avatar-list li',function(){
			bindEventFuns.clickTabList($(this));
			var _pindex = $(this).parents('.js-loopswiper').data('index');
			mySwiper[_pindex].stopAutoplay();
		}).on('mouseout','.js-avatar-list li',function(){
			bindEventFuns.clickTabList($(this));
			var _pindex = $(this).parents('.js-loopswiper').data('index');
			mySwiper[_pindex].startAutoplay();
		}).on('click','#js-video-close',bindEventFuns.closeVideo)
	}      
	var player = function(opt){
		var defaults = {
			file: opt.url,
			width: opt.width,
			height: opt.height,
			events: {
			  onReady: function(){
				this.play();
			  }
			}
		};
		defaults = $.extend({}, defaults, opt);
		var inst = jwplayer(opt.id).setup(defaults);
		return inst;  
	}

  //---初始化方法-------------------------------------
	var init = function(){ 
		$.each($('.avatar-list'),function(i){
			var _len,_width,_auwidth,
			_len = $('.avatar-list').eq(i).find('li').length;
			_width = $('.avatar-list li').width(),
			_auwidth = _width * _len;
			if(_len>2){
			  _auwidth = (_width * _len)-20;
			}
			$('.avatar-list').eq(i).width(_auwidth);
		})
      
		bindEvent();
		//initSwiper(); 
		$('.js-loopswiper').each(function(i){
			var obj = $(this);
			mySwiper[obj.data("index")] = new Swiper($(this).find(".swiper-container"),{
			   effect:'fade',
			   autoplay: 3000,
			   loop:true,
			   onSlideChangeStart:bindEventFuns.tabsTouchStart
			})
		});
		var _desc = $('.js-clamp-desc'),
			_instr = $('.tdesc');

        $.each(_desc,function(i,obj){
            $clamp(obj, {clamp: 2, useNativeClamp: false});  
        });
        $.each(_instr,function(i,obj){
            $clamp(obj, {clamp: 5, useNativeClamp: false});
        }); 
	}
	init();
}();
