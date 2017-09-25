$(function() {
	//	菜单栏 滚动监听
	$(window).scroll(function() {
		//获得可视区域的高度
		var t = $(document).scrollTop();
		if(t > 260) {
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
	//更多选项
	var drop = false
	$(".attrExtra-more").click(function() {
		if(drop) {
			$('.moreAttr').hide();
			$('.attrExtra-more').removeClass('attrExtra-more-drop');
			$('#more').html("更多选项");
			drop=false;
		} else {
			$('.moreAttr').show();
			$('.attrExtra-more').addClass('attrExtra-more-drop');
			$('#more').html("精简选项");
			drop=true;
		}

	})
	var moredrop = false
	$(".avo-more").click(function() {
		if(moredrop) {
			$(".avo-more").find('i').attr("class","ui-more-drop-l-arrow");
			$('.avo-more').innerHTML = "更多";
			moredrop=false;
		} else {
			$(".avo-more").find('i').attr("class","ui-more-expand-l-arrow");
			$('.attrExtra-more').innerHTML = "收起";
			moredrop=true;
		}

	})
	//属性筛选

})