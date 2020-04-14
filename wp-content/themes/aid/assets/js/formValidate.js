jQuery(function ($) {


    if ($('form').is('#registerform'))
    {
        $('#registerform').submit(function () {

            event.preventDefault();

            if ($('#user_login').val() == '')
            {
                $('.user_login_empty').removeAttr('hidden');
            }
            else if ($('#user_fullname').val() == '')
            {
                $('.user_fullname_empty').removeAttr('hidden');
            }

            else if ($('#user_email').val() == '')
            {
                $('.user_email_empty').removeAttr('hidden');
            }

            else if ($('#user_password').val() == '')
            {
                $('.user_password_empty').removeAttr('hidden');
            }
            else if ($('#user_passwordVerify').val() == '')
            {
                $('.user_passwordVerify_empty').removeAttr('hidden');
            }

            console.log('действие совершено');

        });
    }

});