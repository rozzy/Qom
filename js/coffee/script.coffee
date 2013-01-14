$ ->
    $('code').each ->
        $(this).attr 'data-language', 'html'
        if $(this).parent().get(0).tagName != 'PRE'
            $(this).wrap '<pre />'
    $.getScript "js/rainbow.min.js"
    $.getScript "js/rainbow.linecount.js"
    $.getScript "js/language/generic.js"
    $(['c','coffeescript','csharp','css','go','html','java','javascript','lua','php','python','r','ruby','scheme','shell','smalltalk']).each (key, filename) ->
        $.getScript "js/language/#{filename}.js"