$('.MObile_fielter').click(function(){

    $('body').css('overflow' , 'hidden');
    $('.right_field').fadeIn();

    $('.close_modal').click(function(){

        $('body').css('overflow' , 'auto');
        $('.right_field').fadeOut();

    });

});

$(window).resize(function(){

    if($(window).width() > 900){

        $('.right_field').show();

    }else if($(window).width() < 900){

        $('.right_field').hide();

    }

});