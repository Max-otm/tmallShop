$(function() {
	//	菜单栏 滚动监听
	$(window).scroll(function() {
		//获得可视区域的高度
		var t = $(document).scrollTop();
		if(t > 760) {
			$('#menu').slideDown(400);
		} else {
			$('#menu').slideUp(400);;
		}
	})
	//	轮播图
	var c = 0;

	function run() {
		c++;
		c = (c == 6) ? 0 : c;
		$('.slider-pannel').eq(c).css({
			"z-index": 1,
			opacity: 1
		}).fadeIn(1000).siblings().fadeOut(1000).css({
			"z-index": 0,
			opacity: 0
		})
		$(".slider-nav li").eq(c).addClass("selected").siblings().removeClass("selected");
	}
	timer = setInterval(run, 2000);
	$(".slider-nav li").mouseenter(function() {
		clearInterval(timer);
		var _this = $(this);
		timer2 = setTimeout(function() {
			c = _this.index();
			$('.slider-pannel').eq(c).stop().css({
				"z-index": 1,
				opacity: 1
			}).fadeIn(500).siblings().stop().fadeOut(500).css({
				"z-index": 0,
				opacity: 0
			})
			$(".slider-nav li").eq(c).addClass("selected").siblings().removeClass("selected");
		}, 500)
	})
	$(".slider-nav li").mouseleave(function() {
		clearTimeout(timer2);
		timer = setInterval(run, 2000);
	})
	$(".small-banner0").mouseenter(function() {
		clearInterval(timer);
	})
	$(".small-banner0").mouseleave(function() {
		clearInterval(timer);
		timer = setInterval(run, 2000);
	})
	$(".small-banner1").mouseenter(function() {
		clearInterval(timer);
	})
	$(".small-banner1").mouseleave(function() {
		clearInterval(timer);
		timer = setInterval(run, 2000);
	})
	$(".banner-con2").find("a").mouseenter(function() {
		clearInterval(timer);
	})
	$(".banner-con2").find("a").mouseleave(function() {
		clearInterval(timer);
		timer = setInterval(run, 2000);
	})

	//	热词滚动
	function scrollNews(obj) {

		var $self = obj.find("ul:first");

		var lineHeight = $self.find("li:first").height();

		$self.animate({
			"margin-top": -lineHeight + "px"
		}, 600, function() {

			$self.css({
				"margin-top": "0px"
			}).find("li:first").appendTo($self);

		})

	}
	//	1楼
	var one = $(".one");

	var scrollTimer;

	one.hover(function() {

		clearInterval(scrollTimer);

	}, function() {

		scrollTimer = setInterval(function() {

			scrollNews(one);

		}, 4000);

	}).trigger("mouseout");
	//	2楼
	var two = $(".two");

	var scrollTimer1;

	two.hover(function() {

		clearInterval(scrollTimer1);

	}, function() {

		scrollTimer1 = setInterval(function() {

			scrollNews(two);

		}, 4000);

	}).trigger("mouseout");
	//3楼
	var three = $(".three");

	var scrollTimer2;

	three.hover(function() {

		clearInterval(scrollTimer2);

	}, function() {

		scrollTimer2 = setInterval(function() {

			scrollNews(three);

		}, 4000);

	}).trigger("mouseout");

	//tip	
	$(".miao").hover(function() {
		$('.tab1').stop().fadeIn(1).animate({
			"z-index": 1,
			opacity: 1,
			right: "35px",
		})
	}, function() {
		$('.tab1').animate({
			right: "70px",
			"z-index": 0,
			opacity: 0,
		}).fadeOut(1000)
	})
	$(".qian").hover(function() {
		$('.tab2').stop().fadeIn(1).animate({
			"z-index": 1,
			opacity: 1,
			right: "35px",
		})
	}, function() {
		$('.tab2').animate({
			right: "70px",
			"z-index": 0,
			opacity: 0,
		}).fadeOut(1000)
	})
	$(".xin").hover(function() {
		$('.tab3').stop().fadeIn(1).animate({
			"z-index": 1,
			opacity: 1,
			right: "35px",
		})
	}, function() {
		$('.tab3').animate({
			right: "70px",
			"z-index": 0,
			opacity: 0,
		}).fadeOut(1000)
	})
	$(".shouchang").hover(function() {
		$('.tab4').stop().fadeIn(1).animate({
			"z-index": 1,
			opacity: 1,
			right: "35px",
		})
	}, function() {
		$('.tab4').animate({
			right: "70px",
			"z-index": 0,
			opacity: 0,
		}).fadeOut(1000)
	})
	$(".shijian").hover(function() {
		$('.tab5').stop().fadeIn(1).animate({
			"z-index": 1,
			opacity: 1,
			right: "35px",
		})
	}, function() {
		$('.tab5').animate({
			right: "70px",
			"z-index": 0,
			opacity: 0,
		}).fadeOut(1000)
	})
	$(".chong").hover(function() {
		$('.tab6').stop().fadeIn(1).animate({
			"z-index": 1,
			opacity: 1,
			right: "35px",
		})
	}, function() {
		$('.tab6').animate({
			right: "70px",
			"z-index": 0,
			opacity: 0,
		}).fadeOut(1000)
	})
	//	电梯
	var elevate = $('#elevate');
	var lis = elevate.find('li');
	var gotop = $('#goTop');
	var f = $('#content .floor');
	$(window).scroll(function() {
		var winH = $(window).height();
		var msTop = $(window).scrollTop();
		if(msTop >= $(' .fl1').height()) {
			elevate.fadeIn(500);
			//4.进行遍历
//			f.each(function() {
//				
//			})
		} else {
			elevate.fadeOut(500);
			gotop.fadeOut(500);
		}
		gotop.click(function() {
			$('body,html').stop().animate({
				'scrollTop': '0px'
			}, 500)
		})
		lis.click(function() {
			//获得楼层距离可视窗口的top值
			var t = f.eq($(this).index()-1).offset().top;
			$('body,html').stop().animate({
				'scrollTop': t + 'px'
			}, 500);
		})
	})
})