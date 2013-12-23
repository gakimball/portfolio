(function($){

  var $pictureContainer = $('.pictures');
  var $heroPictures     = $('.pictures > div');

  $heroPictures.on({
    'mouseenter': function(e) {
      $pictureContainer.addClass('is-hover');
    },
    'mouseleave': function(e) {
      $pictureContainer.removeClass('is-hover');
    }
  })

})(window.Zepto || window.jQuery);