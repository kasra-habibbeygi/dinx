// open and close collapse
for (let i = 0; i <= $('.session_row_title').length; i++) {

    $('.session_row_title').eq(i).click(function () {

        if ($('.CSF_S_field').eq(i).css('display') == 'block') {

            $('.CSF_S_field').eq(i).slideUp();
            $('.session_angle').removeClass('active_angle');

        } else if (($('.CSF_S_field').eq(i).css('display') == 'none')) {

            $('.CSF_S_field').slideUp();
            $('.CSF_S_field').eq(i).slideDown();
            $('.session_angle').removeClass('active_angle');
            $('.session_angle').eq(i).addClass('active_angle');

        }

    });

}

// active bts tooltips
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
})

// open upload modal
$('.upload').click(function(){

    $('.upload_modal').fadeIn();
    $('body').css('overflow' , 'hidden');

    $('.close_UM').click(function(){

        $('.upload_modal').fadeOut();
        $('body').css('overflow' , 'auto');

    })

});

// open exam modal
$('.exam').click(function(){

    $('.exsm_modal').fadeIn();
    $('body').css('overflow' , 'hidden');

    $('.EM_close').click(function(){

        $('.exsm_modal').fadeOut();
        $('body').css('overflow' , 'auto');

    })

});

// master modal
$('.master_question').click(function(){

    $('.question_master_modal').fadeIn();
    $('body').css('overflow' , 'hidden');

    $('.close_QM').click(function(){

        $('.question_master_modal').fadeOut();
        $('body').css('overflow' , 'auto');

    })

});