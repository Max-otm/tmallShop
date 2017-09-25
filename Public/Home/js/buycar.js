$(function() {
    var allSelected = false;
    var num=$(".td-sum .td-inner .number");
    var priceNow=$('.price-line .price-now');
    var sum=0;
    $("input[name=select-all]").click(function() {
        if(allSelected) {
            $(".submit-btn").addClass("submit-btn-disabled");
            $("input:checkbox").removeAttr('checked');
            $('.check-cod').hide();
            $(".price-sum .price .sum").html(0.00);
            sum=0.00;
            allSelected=false;
        } else {
            $(".cart-checkbox").addClass("cart-checkbox-checked");
            $('.check-cod').show();
            $("input:checkbox").prop('checked',true)
            $(".submit-btn").removeClass("submit-btn-disabled");
            for (var i = 0;i< num.length; i++){
                var price=parseInt(num.eq(i).html());
                sum=sum+price;
            }
            $(".account").html(sum+'.00');
            $(".price-sum .price .sum").html(sum+'.00');
            allSelected=true;
        }

    })
    var check=false;
    $('.check-cod .s-checkbox').click(function () {
        if(check){
            $(this).css({
                'background-position':'0 0px',
            })
            check=false;
        }else{
            $(this).css({
                'background-position':'0 -20px',
            })
            check=true;
        }

    })
    //加减
    $('.minus').click(function () {
        var val=$(this).siblings('input').val();
        var _this=$(this).parent().parent().parent('.item-content').index();
        if(val>1){
            val=val-1;
            $(this).siblings('input').val(val);
        }else{
            $(this).siblings('input').val(1);
        }
    })
    $('.plus').click(function () {
        var val=$(this).siblings('input').val();
        val=parseInt(val);
        val=val+1;
        $(this).siblings('input').val(val);
    })
})