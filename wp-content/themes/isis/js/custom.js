var $ = jQuery;
$('#toggle_sidebar').click(function () {
    if ($(window).width() > 992 ) {
        widthRatio = '70%';
    } else {
        widthRatio = '60%';
    }
    
    var text = $(this).text();
    if (text === 'Ẩn sidebar') {
        $('#sidebar').hide();
        $('#content .top-content').animate({width: '100%'}, 500);
        $(this).css('position', 'absolute');
        text = 'Hiện sidebar';
    } else {
        $('#content .top-content').animate({width: widthRatio}, 500);
        $('#sidebar').show();
        $(this).css('position', 'relative');
        text = 'Ẩn sidebar';
    }
    $(this).text(text);
});

$(window).resize(function() {
    if ($('#sidebar').is(':visible')) {
        if ($(window).width() > 992 ) {
            $('#content .top-content').css('width', '70%');
        } else {
            $('#content .top-content').css('width', '60%');
        }
    }
});