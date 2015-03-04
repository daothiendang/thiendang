jQuery(document).ready(function() {
    jQuery('a.topopup').click(function() {
        loading(); // loading
        var js = jQuery(this);
        setTimeout(function() { // then show popup, deley in .5 second            
            loadPopup(js); // function show popup 
        }, 500); // .5 second
        return false;
    });

    /* close popup */
    jQuery('.btn_close, #backgroundPopup').click(function() {
        disablePopup();  // function close pop up
    });
    jQuery(this).keyup(function(event) {
        if (event.which === 27) { // 27 is 'Ecs' in the keyboard
            disablePopup();  // function close pop up
        }
    });
});

function openPopup(element) {
    loading(); // loading
    var js = element;
    setTimeout(function() { // then show popup, deley in .5 second            
        loadPopup(js); // function show popup 
    }, 500); // .5 second
    return false;
}
function loading() {
    jQuery('div.loader').show();
}
function closeloading() {
    jQuery('div.loader').fadeOut('normal');
}

var popupStatus = 0; // set value
function loadPopup(js) {
    if (popupStatus === 0) { // if value is 0, show popup            
        closeloading(); // fadeout loading
        jQuery('#' + js.attr('data')).fadeIn(0500); // fadein popup div
        jQuery('#backgroundPopup').css('opacity', '0.7'); // css opacity, supports IE7, IE8
        jQuery('#backgroundPopup').fadeIn(0001);
        popupStatus = 1; // and set value to 1
        
        jQuery('body').css('overflow', 'hidden');
    }
}

function disablePopup() {
    if (popupStatus === 1) { // if value is 1, close popup
        jQuery('.toPopup').fadeOut('normal');
        jQuery('#backgroundPopup').fadeOut('normal');
        popupStatus = 0;  // and set value to 0
        
        jQuery('body').css('overflow', 'inherit');
    }
}