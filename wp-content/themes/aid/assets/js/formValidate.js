jQuery(function ($) {


    if ($('form').is('#registerform'))
    {
        $('#registerform').submit(function () {

            if ($('#user_login').val() == '')
            {
                event.preventDefault();
                $('.user_login_empty').removeAttr('hidden');
            }
            else if ($('#user_fullname').val() == '')
            {
                event.preventDefault();
                $('.user_fullname_empty').removeAttr('hidden');
            }

            else if ($('#user_email').val() == '')
            {
                event.preventDefault();
                $('.user_email_empty').removeAttr('hidden');
            }

            else if ($('#user_password').val() == '')
            {
                event.preventDefault();
                $('.user_password_empty').removeAttr('hidden');
            }
            else if ($('#user_passwordVerify').val() == '')
            {
                event.preventDefault();
                $('.user_passwordVerify_empty').removeAttr('hidden');
            }

            console.log('действие совершено');

        });
    }

});