if (window.Rainbow) window.Rainbow.linecount = (function(Rainbow) {
    Rainbow.onHighlight(function(block) {
        var $block = $(block);
        var $dummy = $block.clone().empty();
        var $lines = $('<div />', {class: 'rainbow'}).appendTo($dummy);
        var $header = $('<div />', {class: 'rainbow-header'}).appendTo($lines);

        $('<div />').appendTo($header);
        $('<div />', {class: 'rainbow-language'}).text($block.data('language')).appendTo($header);

        var lines = $block.html().trim().split('\n');

        $.each(lines, function(index, value) {
            index++;

            var $row = $('<div />', {class: 'rainbow-line rainbow-line-' + index});

            $('<div />', {class: 'rainbow-line-number', 'data-number': index}).appendTo($row);
            $('<div />', {class: 'rainbow-line-code'}).html(value).appendTo($row);

            $lines.append($row);
        });
        $block.replaceWith($lines);
    });
})(window.Rainbow);