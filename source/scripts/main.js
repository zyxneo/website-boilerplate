

(function ($) {

$( document ).ready(function() {

    // js-cookie
    // https://github.com/js-cookie/js-cookie/tree/v2.1.2#readme

    // init
    $('.parallax').parallax();

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

    $('.content_vote select').barrating({
      theme: 'fontawesome-stars',
      onSelect: function(value, text, event) {
        if (typeof(event) !== 'undefined') {
          // rating was selected by a user
          var form = $($(event.target).closest('form')[0]);
          var action = form.attr('action');
          console.log(form);

          $.post(action, form.serialize());
        } else {
          // rating was selected programmatically
          // by calling `set` method
        }
      }
    });
});


}( jQuery ));
