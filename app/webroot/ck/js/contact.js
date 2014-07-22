/* Contact form is based on following tutorial 
http://ajtroxell.com/build-a-simple-php-jquery-and-ajax-powered-contact-form/
Please refer about tutorial for more info.
*/

// Validate contact form

$(function() {
    $('#contactForm').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true,
				minlength: 10
            }
        },
        messages: {
            name: {
                required: "Please enter your name.",
                minlength: "Your name must have atleast 2 Characters."
            },
            email: {
                required: "Please enter your email."
            },
            message: {
                required: "Please enter your message.",
                minlength: "Your message should have altesat 10 Characters."
            }
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"process.php",
                success: function() {
                    $('#success').fadeIn();
                },
                error: function() {
                    $('#error').fadeIn();
                }
            });
        }
    });
}); 