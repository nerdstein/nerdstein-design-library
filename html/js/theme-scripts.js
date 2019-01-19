(function($) {

  $(document).ready(function() {

    var $menuButton = $('.grid-cell--menu');

    $menuButton.on('click', function() {
      $menuButton
        .closest('.section')
        .find('.grid-cell--content')
        .toggleClass('show-on-mobile');
    });

  });

})(jQuery);
