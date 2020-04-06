jQuery(function ($) {

    $('.registration-link').click(function () {

       $('#loginform').attr('hidden' , '');
       $('#registerform').removeAttr('hidden');

    });
    $('.login-link').click(function () {

        $('#loginform').removeAttr('hidden');
        $('#registerform').attr('hidden', '');

    });

});