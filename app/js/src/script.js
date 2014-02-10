(function($) {

  var $body  = $('body');
  var $modal = $('[data-resume-modal]');

  // Animation stuff
  $(window)
    .on('focus', function() {
      $body.removeClass('sketches-on').addClass('sketches-on');
    })
    .trigger('focus');

  // Modal stuff
  $('[data-resume-open]').click(function() {
    $modal.addClass('is-open');
    $body.addClass('modal-open');
    return false;
  });
  $('[data-resume-close]').click(function() {
    $modal.removeClass('is-open');
    $body.removeClass('modal-open');
    return false;
  });

  // Doge stuff
  var doge = function() {
    $body
      .addClass('doge')
      .scrollTop(0);
    $('.tagline').html('wow<br> such design<br> very pizza');
  }
  var kkeys = [], konami = "38,38,40,40,37,39,37,39,66,65";
  $(document).keydown(function(e) {
    kkeys.push(e.keyCode);
    if (kkeys.toString().indexOf(konami) >= 0){
      $(this).off('keydown', arguments.callee);
      doge();
    }
  });

  console.log("Ye findeth yeself in yon inspector. Ye see a CONSOLE.");

})(window.Zepto);