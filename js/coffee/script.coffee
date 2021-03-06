$ ->
    $(window).scroll ->
        if $(window).scrollTop() > $('.admin-menu').height()
            $('.admin-menu').addClass 'riding'
        else
            $('.admin-menu').removeClass 'riding'
    $('a img').each ->
        if $(this).parent().find('*').length == 1
            $(this).addClass 'no-style'

        if $(this).hasClass 'no-style'
            $(this).parent().addClass 'no-style'
    $('code').each ->
        lang = $(this).attr('data-language') || 'html'
        $(this).html $(this).html().replace /<br\/?>/g, '\r\n' if lang != 'html'?
        $(this).attr 'data-language', lang
        if $(this).parent().get(0).tagName != 'PRE'
            $(this).wrap '<pre />'
    $.getScript "themes/Qom/js/rainbow.min.js"
    $.getScript "themes/Qom/js/rainbow.linecount.js"
    $.getScript "themes/Qom/js/language/generic.js"
    $(['c','coffeescript','csharp','css','go','html','java','javascript','lua','php','python','r','ruby','scheme','shell','smalltalk']).each (key, filename) ->
        $.getScript "themes/Qom/js/language/#{filename}.js"