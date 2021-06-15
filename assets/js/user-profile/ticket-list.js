$('.new_ticket_M').click(function(){

    $('.new_ticket_modal').fadeIn();
    $('body').css('overflow' , 'hidden');

    $('.close_NTM').click(function(){

        $('.new_ticket_modal').fadeOut();
        $('body').css('overflow' , 'auto');

    })

});