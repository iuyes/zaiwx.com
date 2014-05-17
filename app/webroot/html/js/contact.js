/* Contact form is based on following tutorial 
http://ajtroxell.com/build-a-simple-php-jquery-and-ajax-powered-contact-form/
Please refer about tutorial for more info.
*/

// Validate contact form

$(function() {
    $('#contactForm').validate({
        rules: {
            FName: {
                required: true,
                minlength: 2
            },
            FEMail: {
                required: true,
                email: true
            },
            FMessage: {
                required: true,
				minlength: 10
            }
        },
        messages: {
            FName: {
                required: "请输入您的姓名",
                minlength: "不少于两个字符"
            },
            FEMail: {
                required: "请输入您的邮箱"
            },
            FMessage: {
                required: "请输入您的留言",
                minlength: "不少于10个字符"
            }
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type: "POST",
                data: $(form).serialize(),
                url: BASE_URL + 'welcome/message',
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