jQuery(document).ready(function($) {

    $("#contactForm").submit(function(event) {

        event.preventDefault();

        var $form = $(this);

        var data = {
            name: $form.find('input[name="name"]').val(),
            mailFrom: $form.find('input[name="email"]').val(),
            message: $form.find('textarea[name="message"]').val(),
            subject: $form.find('input[name="subject"]').val(),
        };

        $.post("../form-to-email.php", data)
            .done(function(response) {
                alert(response);
                $('#contactForm')[0].reset();
            });

        var dataString = JSON.stringify(data);

    });
});
