(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space

$('.message a').click(function(){
  $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.materialboxed');
  var instances = M.Materialbox.init(elems, options);
});

// Or with jQuery

$(document).ready(function(){
  $('.materialboxed').materialbox();
});

var instance = M.Tabs.init(el, options);

// Or with jQuery

$(document).ready(function(){
  $('.tabs').tabs();
});
    
$(document).ready(function() {
  $('input#input_text, textarea#textarea2').characterCounter();
});
