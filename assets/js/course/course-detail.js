for(let i = 0 ; i <= $('.session_row_title').length ; i++){

    $('.session_row_title').eq(i).click(function(){

        if($('.CSF_S_field').eq(i).css('display') == 'block'){

            $('.CSF_S_field').eq(i).slideUp();            
            $('.session_angle').removeClass('active_angle');

        }else if(($('.CSF_S_field').eq(i).css('display') == 'none')){

            $('.CSF_S_field').slideUp();
            $('.CSF_S_field').eq(i).slideDown();
            $('.session_angle').removeClass('active_angle');
            $('.session_angle').eq(i).addClass('active_angle');

        }
    
    });

}