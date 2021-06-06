// change login page to register
$('.GT_register').click(function () {

    $('#login').fadeOut();
    $('#login_header').fadeOut();

    setTimeout(() => {

        $('#registem').fadeIn();
        $('#register_header').fadeIn();

    }, 400);

});

// change register to login
$('.GT_login').click(function () {

    $('#registem').fadeOut();
    $('#register_header').fadeOut();

    setTimeout(() => {

        $('#login').fadeIn();
        $('#login_header').fadeIn();

    }, 400);

});

// change login page to recovery password
$('#FT_recovery').click(function () {

    $('#login').fadeOut();
    $('#login_header').fadeOut();

    setTimeout(() => {

        $('#recovery').fadeIn();
        $('#recovery_header').fadeIn();

    }, 400);

});

// change recovery to login
$('.GT_login2').click(function () {

    $('#recovery').fadeOut();
    $('#recovery_header').fadeOut();

    setTimeout(() => {

        $('#login').fadeIn();
        $('#login_header').fadeIn();

    }, 400);

});

// open modal
$('.LRR_modal').click(function () {

    $('.login_modal').fadeIn();
    $('#recovery').hide();
    $('#recovery_header').hide();
    $('#registem').hide();
    $('#register_header').hide();
    $('#login').fadeIn();
    $('#login_header').fadeIn();

    // remove modal
    $('.remove_RLR_modal').click(function () {

        $('.login_modal').fadeOut();

    });

});