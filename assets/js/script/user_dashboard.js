$('.login_modal').remove();

function openAside() {

    $('.LRR_modal').click(function () {

        $('.user_dashboard_field').addClass('show_aside');
        $('.AML').fadeIn();
        $('body').css('overflow', 'hidden');

        $('.remove_aside , .AML').click(function () {

            $('.user_dashboard_field').removeClass('show_aside');
            $('.AML').fadeOut();
            $('body').css('overflow', 'auto');

        })

    });

}

if ($(window).width() > 1200) {

    $('.LRR_modal').click(function () {

        $('body').css('overflow', 'auto');

    })

}

if ($(window).width() < 1200) {

    openAside();

}

$(window).resize(function () {

    if ($(window).width() > 1200) {

        $('.LRR_modal').click(function () {

            $('body').css('overflow', 'auto');

        });

        $('.user_dashboard_field').removeClass('show_aside');
        $('.AML').fadeOut();

    }

    if ($(window).width() < 1200) {

        openAside();

    }

});

// user dashboard sub menu collaps
for (let i = 0; i <= $('.UD_menu_btn').length; i++) {

    let menu_item = $('.UD_submenu').eq(i);

    $('.UD_menu_btn').eq(i).click(function () {

        if (menu_item.hasClass('active')) {

            menu_item.removeClass('active');

        } else {

            $('.UD_submenu').removeClass('active');
            menu_item.addClass('active');

        }

    });

}

// open exit modal
$('#Logout').click(function () {

    $('.exit_modal').fadeIn();
    $('body').css('overflow', 'hidden');

    $('#dont_logout').click(function () {

        $('.exit_modal').fadeOut();
        $('body').css('overflow', 'auto');

    })

});