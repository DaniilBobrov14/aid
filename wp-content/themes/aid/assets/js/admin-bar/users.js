jQuery(function ($) {

    $('.add-button').click(function () {

        $('.tbody-data-user').append('<tr class="row-data-user"><td><input type="text" name="user_login" id="user_login" class="input" size="20" value=""></td><td><input type="text" name="user_fullname" id="usesr_fullname" class="input" size="20" value=""></td><td><input type="email" name="user_email" id="user_email" size="20" value=""></td><td><input type="password" name="user_passwordVerify" id="user_passwordVerify" size="20" value=""></td></tr>');

    });

});