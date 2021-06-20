$('.HWM_open').click(function(){

    $('.home_work_detrail_modal').fadeIn();
    $('body').css('overflow' , 'hidden');

    $('.close_HWM').click(function(){

        $('.home_work_detrail_modal').fadeOut();
        $('body').css('overflow' , 'auto');

    })

});