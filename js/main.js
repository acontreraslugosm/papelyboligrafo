$(document).on( 'click', function(e){
		
    /* OPEN CART IN NAV */
    if( $(e.target).parents('.cart-trigger').length !== 0 ){
        e.preventDefault();
        if( $(window).width() > 768 ){
            $('.cart-content').css('right', '').toggle();
        }
        else{
            $('.cart-content').css({
                right: '0px',
                display: 'block'
            });
            setTimeout(function(){
                $('.close-sidecart').css({
                    left: $(window).width() - $('.cart-content').outerWidth() - 15
                }).show();
            }, 200);
        }
    }
    else{
        if( $(window).width() > 768 ){
            $('.cart-content').hide();
        }
        else{
            $('.cart-content').css('right', '-1000px');
            $('.close-sidecart').hide();
        }
    }

});