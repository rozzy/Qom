// Generated by CoffeeScript 1.3.3
(function() {

  $(function() {
    $('code').each(function() {
      $(this).attr('data-language', $(this).attr('data-language') || 'html');
      if ($(this).parent().get(0).tagName !== 'PRE') {
        return $(this).wrap('<pre />');
      }
    });
    $.getScript("themes/Qom/js/rainbow.min.js");
    $.getScript("themes/Qom/js/rainbow.linecount.js");
    $.getScript("themes/Qom/js/language/generic.js");
    return $(['c', 'coffeescript', 'csharp', 'css', 'go', 'html', 'java', 'javascript', 'lua', 'php', 'python', 'r', 'ruby', 'scheme', 'shell', 'smalltalk']).each(function(key, filename) {
      return $.getScript("themes/Qom/js/language/" + filename + ".js");
    });
  });

}).call(this);
