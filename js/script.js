$(document).ready(function () {
    $(".form-content").submit(function (event) {
        event.preventDefault();

        let name = $('#name').val();
        let phone = $('#phone').val();
        let category = $('#category').val();
        // validate and process form here
        $(".input-error").remove();

        if (name.length< 1) {
            $('#name').after('<span class="input-error">This field is required</span>');
        }
        if (phone.length< 1) {
            $('#phone').after('<span class="input-error">This field is required</span>');

        }
        else if (isNaN(phone)){
            $('#phone').after('<span class="input-error">Enter Numeric value only</span>');
            return false;
        }
        if (category.length< 1) {
            $('#category').after('<span class="input-error">This field is required</span>');
        } else {


        $(".form-content").load($(this).attr('action'), {
            name: name,
            phone: phone,
            category: category
        },'/incloud/autoload.php')


        }});
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false

        });
    });





