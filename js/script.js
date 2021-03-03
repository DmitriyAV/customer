$(document).ready(function () {
    $(".form-content").submit(function (event) {
        event.preventDefault();
        // validate and process form here

        $(".btn-primary").click({

        })

        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false

        });
    });

});



