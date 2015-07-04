$(function() {
  
  var $window = $(window);
  var $peekaboo = $('[data-peeka]');
  var viewText = 'Read More';
  var hideText = 'Close';
  var peekaButton = '<button class="peekabutton">'+viewText+'</button>';
  var $peekabutton;  
  
  $peekaboo.append(peekaButton);
  $peekabutton = $('.peekabutton');

  $peekabutton.on('click', function(e) {
    var $eventTarget = $(e.currentTarget);
    var $target = $(e.currentTarget).closest('[data-peeka]');
    var contentVisible = $target.attr('data-peeka') === '';
    if(contentVisible) {
      $target.attr('data-peeka','boo');
      $eventTarget.text(hideText);
    } else {
      $target.attr('data-peeka','');
      $eventTarget.text(viewText);
      $window.scrollTop($target.offset().top - parseInt($target.css('margin-top')));
    }
  });

}());
