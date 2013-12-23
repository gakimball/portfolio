(function($) {

  var $modal = $('[data-resume-modal]');
  var $body  = $('body');

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

})(window.Zepto);