// Generated by CoffeeScript 1.3.3
(function() {

  $(function() {
    $('code').each(function() {
      $(this).attr('data-language', 'ruby');
      return $(this).wrap('<pre />');
    });
    $.getScript("js/rainbow.min.js");
    $.getScript("js/language/generic.js");
    return $.getScript("js/rainbow.linecount.js");
  });

}).call(this);
