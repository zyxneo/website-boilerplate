

ScrollPosStyler.init();

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