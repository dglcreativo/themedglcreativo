(function($) {

    "use strict";

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 99) {
            $(".navbar-expand-lg").addClass("is-scrolling");
        } else {
            $(".navbar-expand-lg").removeClass("is-scrolling");
        }
    });

    function mostrarreg(e){
        e.preventDefault();
        $('.boxext-reg').show();
    };
    function ocultarreg(){
        $('.boxext-reg').fadeOut('fast');
    };

    $('.popupw').mouseover(function(){
        $(this).addClass('mostrarregistro');
        $('.mostrarregistro').click(mostrarreg);
    });
    $('.cerrarregistro').click(ocultarreg);


})(jQuery);


