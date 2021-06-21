$("#file_upload").change(function () {

    readURL(this);

    let img_name = ''

    if (this.files && this.files.length) {

        img_name = this.files[0].name;
        $('.fa-times-circle').show();

    } else {

        img_name = '';
        $('.fa-times-circle').hide();

    }

    $('.link_of_attach_file').text(img_name);

});

// when click on remove btn , remove file from inp
$('.fa-times-circle').click(function () {

    $("#file_upload").val('');
    $('.link_of_attach_file').text('');
    $('.fa-times-circle').hide();
    $('#delete_portfolio_inp').attr('value', '1');

});

// in edit page show remove icon in chose file
if ($('.link_of_attach_file').text() !== '')
    $('.fa-times-circle').show();


function readURL(input) {

    if (input.files && input.files[0]) {

        var reader = new FileReader();

        reader.readAsDataURL(input.files[0]);

    }

};