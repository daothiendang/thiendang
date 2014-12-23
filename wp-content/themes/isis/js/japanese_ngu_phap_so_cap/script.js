jQuery(document).ready(function() {
    jQuery('.example').hoverText();
    
    jQuery('.link_popup').click(function() {
        // set popup to very center of screen
        screenWidth = jQuery(window).width();
        popUpCalled = jQuery(this).attr('data');
        popupWidth = jQuery('#' + popUpCalled).width();
        leftDistance = (screenWidth - popupWidth) / 2;
        jQuery('#' + popUpCalled).css('left', leftDistance);
        
        // open popup
        openPopup(jQuery(this));
    });
    
    jQuery('.popup_content a').click(function() {
        disablePopup();
    });
    
    jQuery('.summarize').click(function() {
        jQuery(this).next().slideToggle();
        jQuery(this).toggleClass('underline');
    });
});