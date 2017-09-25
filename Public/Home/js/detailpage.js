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

	//	放大镜
	var left = $(".tb-booth");
	var box = $(".imgzoom-lens");
	var pic = $("#zoom .zoom-mod .pic");
	var right = $("#zoom");
	var cover = $(".cover");
	cover.mousemove(function(e) {
		var ev = window.event || e; //
		//2,获取事件离div的top和left值
		var maxTop = ev.offsetY || ev.layerY;

		var maxLeft = ev.offsetX || ev.layerX;
		//3，设置box的top和left值
		var boxTop = maxTop - 100;
		var boxLeft = maxLeft - 110;
		//6，设置条件让box不移出left

		if(boxLeft < 0) {
			boxLeft = 0;
		}
		if(boxTop < 0) {
			boxTop = 0;
		}
		if(boxLeft > 210) {
			boxLeft = 210;
		}
		if(boxTop > 210) {
			boxTop = 210;
		}
		box.css({
			'top': boxTop + 'px'
		});
		box.css({
			"left": boxLeft + 'px'
		});
		//8,设置右边图片位置
		pic.css({
			'top': boxTop * -2 + 'px'
		});
		pic.css({
			'left': boxLeft * -2 + 'px'
		});
	})
	//7,设置鼠标不在时隐藏，在时显示

	left.mouseover(function() {
		box.show();
		right.show();
	});
	left.mouseout(function() {
		box.hide();
		right.hide();
	});
	//图片切换
    $('.tb-thumb li').mouseover(function () {
        $(this).addClass('tb-selected').siblings('li').removeClass('tb-selected');
        var _this=$(this).index();
        $('.imgzoom-wrap .pic').eq(_this).show().siblings('.pic').hide();
        $('#zoom .zoom-mod .pic').eq(_this).show().siblings('.pic').hide();
    })
	//tab切换
	$('.bar li').click(function() {
		var i = $(this).index();
		$('#tb-tab .tab').eq(i).show().siblings().hide();
		$(".bar li").removeClass('tm-selected');
		$(this).addClass('tm-selected');
	})
	//选中尺码
	$(".tm-clear li").click(function() {

		$(this).addClass("tb-selected").append("<i>已选中</i>").siblings("li").removeClass("tb-selected");
		$(this).siblings("li").find("i").remove();

	})
	//	选择评论
	$(".tag-posi a").click(function(){
		$(".tag-posi").removeClass("selected");
		$this.parent().addClass("selected");
	})
})