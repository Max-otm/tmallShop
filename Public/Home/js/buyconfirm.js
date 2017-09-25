$(function(){
	$("#addAddr").click(function(){
        $(".tc-popup").attr('adid','');
        $(".tc-mask").show();
		$(".tc-popup").show();
	})
	$(".tc-popup-hide").click(function(){
		
		$(".tc-popup").hide();
		$(".tc-mask").hide();
	})
	$('.addr').click(function () {
        var _this=$(this);
        var city=_this.find('.city').html();
        city+=_this.find('.dist').html();
        city+=_this.find('.town').html();
        $('.confirmAddr-addr-bd').html(city);
        var name=_this.find('.name').html();
        $('.consignee').html(name);
        $(this).addClass('addr-cur').siblings('.addr').removeClass('addr-cur');

    })
})
