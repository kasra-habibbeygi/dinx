$('.FDM_open').click(function(){

    $('.forum_detail_modal').fadeIn();
    $('body').css('overflow' , 'hidden');

    $('.close_FDM').click(function(){

        $('.forum_detail_modal').fadeOut();
        $('body').css('overflow' , 'auto');

    })

});