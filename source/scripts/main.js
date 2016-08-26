

(function ($) {

var transparentNav = true;
var navSwitchScrollPos = 300;

$( document ).ready(function() {
    
    // init
    $('.parallax').parallax();

    // js-cookie
    // https://github.com/js-cookie/js-cookie/tree/v2.1.2#readme

    // function for "The website uses cookies." bar
    if($('#cookie-message')) {
        if(Cookies.get('accept-cookies')) {
            $('#cookie-message').remove();
        } else {
            $('#cookie-message').addClass('in');
            $('.cookie-close').click(function(){
                Cookies.set('accept-cookies', 'true', { expires: new Date(9999, 1, 1) });
            })
        }
    }

});

$(window).on('scroll',function(){

    if($(document).scrollTop() > navSwitchScrollPos ) {
        if(transparentNav) {
            transparentNav = false;
            $('.navbar').addClass('navbar-transparent');
        }
    } else {
        if( !transparentNav ) {
            transparentNav = true;
            $('.navbar').removeClass('navbar-transparent');
        }
    } 
});


}( jQuery ));
