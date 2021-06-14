function addFav() {

    let fav_temp = `<span>${$('#add_fav').val()} <i class="fal fa-times remove_fav"></i></span>`;
    $('.add_fav_field').append(fav_temp);
    $('#add_fav').val('')

}

$('.add_fav').click(function () {

    addFav();

});

$('#add_fav').keypress(function(e){

    let key = e.which;

    if (key == 13) {

        addFav();
        e.preventDefault();

    }

})


$(document).on('click', '.remove_fav', function () {

    $(this).parent().remove();

})