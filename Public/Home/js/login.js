$(function() {

	$('.iconfont').click(function() {
		$(this).parent().parent('.login-form').hide().siblings('.login-form').show();
	})
})