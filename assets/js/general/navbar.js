function menuHover() {

    for (let i = 0; i <= $('.special').length; i++) {

        $('.special').eq(i).hover(function () {

            if ($('.menu_item').eq(i).css('display') == 'none') {

                $('.menu_item').hide();
                $('.menu_item').eq(i).show();

            } else if ($('.menu_item').eq(i).css('display') == 'block') {

                $('.menu_item').eq(i).hide();

            }

        });

    }

}

function subMenuHover() {

    for (let j = 0; j <= $('.sub_sub_menu').length; j++) {

        $('.sub_sub_menu').eq(j).hover(function () {

            $('.sub_menu').hide();
            $('.sub_menu').eq(j).show();

        });

    }

}

function menuClick() {

    for (let i = 0; i <= $('.OSM').length; i++) {

        $('.OSM').eq(i).click(function () {

            if ($('.menu_item').eq(i).css('display') == 'none') {

                $('.menu_item').slideUp();
                $('.menu_item').eq(i).slideDown();

            } else if ($('.menu_item').eq(i).css('display') == 'block') {

                $('.menu_item').eq(i).slideUp();

            }

            $('.sub_menu').slideUp();

        });

    }

}

function subMenuClick() {

    for (let j = 0; j <= $('.sub_sub_menu').length; j++) {

        $('.sub_sub_menu').eq(j).click(function () {

            if ($('.sub_menu').eq(j).css('display') == 'none') {

                $('.sub_menu').slideUp();
                $('.sub_menu').eq(j).slideDown();

            } else if ($('.sub_menu').eq(j).css('display') == 'block') {

                $('.sub_menu').slideUp();

            }

        });

    }

}

$('.mobile_SN').click(function () {

    $('.core_navbar .right_field ul').addClass('active_nav');
    $('.MNL').fadeIn();
    $('body').css('overflow' , 'hidden');

    $('.remove_nav').click(function () {

        $('.core_navbar .right_field ul').removeClass('active_nav');
        $('.MNL').fadeOut();
        $('.sub_menu').slideUp();
        $('.menu_item').slideUp();
        $('body').css('overflow' , 'auto');

    });

});


if ($(window).width() < 1100) {

    menuClick();
    subMenuClick();

} else if ($(window).width() > 1100) {

    subMenuHover();
    menuHover();

}

$(window).resize(function(){

    if($(window).width() > 1100){

        $('body').css('overflow' , 'auto');
        $('.MNL').fadeOut();
        $('.core_navbar .right_field ul').removeClass('active_nav');

    }

})