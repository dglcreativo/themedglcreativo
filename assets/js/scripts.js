jQuery(document).ready(function($){
    
    $(".owl-carousel").owlCarousel({
        stagePadding: 0,
        items: 1,
        loop:true,
        margin:0,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        singleItem:true,
        nav:true,
        dots:false
    });

    if ($('.search-btn').length) {
        $('.search-btn').on('click', function () {
            $('body').addClass('open');
            setTimeout(function () {
                $('.search-input').focus();
            }, 500);
            return false;
        });
        $('.close_icon').on('click', function () {
            $('body').removeClass('open');
            return false;
        });
    }
    
    $(".popupw").on("click",function(){
        $("header.alt-bg .navbar").addClass('backpopup');
        $(".backpopup").css("background", "#ffffff");
    });
    $(".cerrarregistro").on("click",function(){
        $("header.alt-bg .navbar").removeClass('backpopup');
        $("header.alt-bg .navbar").css("background", "");
    });
    
});