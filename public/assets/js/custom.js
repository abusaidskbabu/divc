jQuery(document).on('click', '.trigger_nav', function() {
    if (jQuery(this).hasClass('triggered')) {
        jQuery(this).removeClass('triggered');
        jQuery('.nav_menu').removeClass('showing');
        jQuery(this).addClass('fa-th-large');
        jQuery(this).removeClass('fa-times');
    } else {
        jQuery(this).addClass('triggered');
        jQuery('.nav_menu').addClass('showing');
        jQuery(this).removeClass('fa-th-large');
        jQuery(this).addClass('fa-times');
    }
});

jQuery(document).on('click', '.f_s_40', function() {
    jQuery('.trigger_nav').removeClass('triggered');
    jQuery('.nav_menu').removeClass('showing');
    jQuery('.trigger_nav').addClass('fa-th-large');
    jQuery('.trigger_nav').removeClass('fa-times');
});