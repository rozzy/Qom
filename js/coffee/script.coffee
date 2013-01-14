$ ->
    $('code').each ->
        $(this).attr 'data-language', ($(this).attr('data-language') || 'html')
        if $(this).parent().get(0).tagName != 'PRE'
            $(this).wrap '<pre />'
    $.getScript "themes/Qom/js/rainbow.min.js"
    $.getScript "themes/Qom/js/rainbow.linecount.js"
    $.getScript "themes/Qom/js/language/generic.js"
    $(['c','coffeescript','csharp','css','go','html','java','javascript','lua','php','python','r','ruby','scheme','shell','smalltalk']).each (key, filename) ->
        $.getScript "themes/Qom/js/language/#{filename}.js"