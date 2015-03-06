//$(document).ready(function() {
    $('.example').hoverText();
    
    $('.link_popup').click(function() {
        // set popup to very center of screen
        screenWidth = $(window).width();
        popUpCalled = $(this).attr('data');
        popupWidth = $('#' + popUpCalled).width();
        leftDistance = (screenWidth - popupWidth) / 2;
        $('#' + popUpCalled).css('left', leftDistance);
        
        // open popup
        openPopup($(this));
    });
    
    $('.popup_content a').click(function() {
        disablePopup();
    });
    
    $('.summarize').click(function() {
        $(this).next().slideToggle();
        $(this).toggleClass('underline');
    });
//});
$(document).ready(function() {
    $('#loading_message').html('Click vào tiêu đề màu đỏ để hiện nội dung bài học');
});