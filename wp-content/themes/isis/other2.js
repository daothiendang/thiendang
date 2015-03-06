/* <![CDATA[ */
//isis JavaScript 

jQuery(window).load(function ($) {
    var $ = jQuery;

    //MENU Animation
     if ($(window).width() > 768) {
	$('#navmenu ul > li').hoverIntent(function () {
	    $(this).find('.sub-menu:first, ul.children:first').slideDown({duration: 200});
	    $(this).find('a').not('.sub-menu a').stop().animate({"color": primarycolor}, 200);
	}, function () {
	    $(this).find('.sub-menu:first, ul.children:first').slideUp({duration: 200});
	    $(this).find('a').not('.sub-menu a').stop().animate({"color": menutext}, 200);

	});

	$('#navmenu ul li').not('#navmenu ul li ul li').hover(function () {
	    $(this).addClass('menu_hover');
	}, function () {
	    $(this).removeClass('menu_hover');
	});
	$('#navmenu li').has("ul").addClass('zn_parent_menu');
	$('.zn_parent_menu > a').append('<span></span>');
     }

    if ($(window).width() < 768) {
	$('#navmenu li').has("ul").addClass('zn_parent_menu');
	$('.zn_parent_menu > a').append('<span></span>');
	
	$('#navmenu ul > li a').each(function() {
	    if ($(this).find('span').length !== 0) {
		//$(this).find('span').css('float', 'right').append('background', 'url(../wp-content/themes/isis/images/menu_down_arrow.png)');
		$(this).append('<div class="menu_hover_custom"></div>')
	    }
	});
	$('.menu_hover_custom').hover(function() {
	    $(this).closest('li').find('.sub-menu:first, ul.children:first').slideDown({duration: 200});
	    $(this).closest('li').find('a').not('.sub-menu a').stop().animate({"color": primarycolor}, 200);
	});
    }

    // Comment Form
    $('.comment-form-author, .comment-form-email, .comment-form-url').wrapAll('<div class="field_wrap" />');

    $(".comment-reply-link").click(function () {
	$('#respond_wrap .single_skew_comm, #respond_wrap .single_skew').hide();
    });
    $("#cancel-comment-reply-link").click(function () {
	$('#respond_wrap .single_skew_comm, #respond_wrap .single_skew').show();
    });
});
