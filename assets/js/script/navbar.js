function mobile_menu() {

    // when user click on the menu item is open
    for (let i = 0; i <= $('.OSM').length; i++) {

        let menu_item = $('.menu .menu_item').eq(i);

        $('.OSM').eq(i).click(function () {

            if (menu_item.hasClass('active_click')) {

                menu_item.removeClass('active_click');

            } else {

                $('.menu .menu_item').removeClass('active_click');
                menu_item.addClass('active_click');

            }

        });

    }

    // when user click on the sub menu , sub menu item is open
    for (let j = 0; j <= $('.sub_sub_menu').length; j++) {

        let sub_menu_item = $('.menu .sub_menu').eq(j);

        $('.sub_sub_menu').eq(j).click(function () {

            if (sub_menu_item.hasClass('active_click'))
                sub_menu_item.removeClass('active_click');

            else {

                $('.menu .sub_menu').removeClass('active_click');
                sub_menu_item.addClass('active_click');

            }

        });

    }

}

function close_navbar() {

    $('.core_navbar .right_field ul').removeClass('active_nav');
    $('.MNL').fadeOut();
    $('body').css('overflow', 'auto');
    $('.menu .menu_item').removeClass('active_click');
    $('.menu .sub_menu').removeClass('active_click');

}

// reponsive nav bar click and hover when user refresh browser
if ($(window).width() < 1100) {

    $('#main_MN_field').removeClass('hover_mode');
    mobile_menu();


} else if ($(window).width() > 1100) {

    $('#main_MN_field').addClass('hover_mode');

}

// responsive navbar when user resize browser
$(window).resize(function () {

    if ($(window).width() < 1100) {

        mobile_menu();
        $('#main_MN_field').addClass('mobile_mode');
        $('#main_MN_field').removeClass('hover_mode');

    } else if ($(window).width() > 1100) {

        $('#main_MN_field').removeClass('mobile_mode');
        $('#main_MN_field').addClass('hover_mode');
        close_navbar();

    }

})

// open navbar
$('.mobile_SN').click(function () {

    $('.core_navbar .right_field ul').addClass('active_nav');
    $('.MNL').fadeIn();
    $('body').css('overflow', 'hidden');

    // close navbar
    $('.MNL').click(function () {

        close_navbar();

    })

    // close navbar
    $('.remove_nav').click(function () {

        close_navbar();

    });

});