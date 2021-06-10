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