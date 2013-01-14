$ ->
    $('code').each ->
        $(this).attr 'data-language', 'ruby'
        $(this).wrap '<pre />'
    $.getScript "js/rainbow.min.js"
    $.getScript "js/language/generic.js"
    $.getScript "js/rainbow.linecount.js"