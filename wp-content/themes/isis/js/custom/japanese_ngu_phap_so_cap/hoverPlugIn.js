(function($) {
    $.fn.hoverText = function(fade) {
        $(this).before('<div class="hover_text"></div>');

        $(this).mouseover(function() {
            title = $(this).next().html();
        }).mousemove(function(e) {
            var top = 0;
            var left = 0;
            if ($(this).closest('ul').closest('div').hasClass('popup_content')) {
                top  = $(this).position().top + 20;
                popupLeft = $(this).closest('.toPopup').css('left');
                left = e.pageX - popupLeft.substring(0, popupLeft.length - 2) + 40;
            } else {
                var offset = $('.post_info_wrap').offset();
                top = e.pageY - 120;
                left = e.pageX - 100 - offset.left;
            }
            
            $(this).prev().css('top', top).css('left', left).html(title);
            if ($(this).next().is('.translate')) {
                if (fade === true) {
                    $(this).prev().fadeIn('normal');
                } else {
                    $(this).prev().show();
                }
            }
        }).mouseout(function(e) {
            $('.hover_text').hide();
        });
    };
})(jQuery);