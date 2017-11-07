// Wait for the DOM to be ready
$(function() {
    var $loading = $('.spinner').hide();
    var $btn = $('#submit').show();
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("#registration").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
            password_again: {
                equalTo: "#password"
            },
            birthday:{

                required: true,

                date: true

            }
        },
        // Specify validation error messages
        messages: {
            birthday: "Please enter your birthday",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            password_again: {
                equalTo: "Passwords don't match"
            },
            email: "Please enter a valid email address"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit(
                setTimeout($loading.show(),$btn.hide(), 16000)
            );
        }
    });
    $.validator.addMethod("date", function(value, element) {
        var myDate = new Date(value);
        var today = $.now();
        if (myDate<today) {
            return true;
        }
    });
});
