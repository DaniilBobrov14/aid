jQuery(function ($) {

    //добавить классы к оставшимся и удалить комментарий

    let idUser = 2;

    $('.add-button').click(function () {

        $('.tbody-data-user').append('<tr class="row-data-user"><td><input type="text" name="user_login" id="user_login" class="input user_login_input" size="20" value=""></td><td><input type="text" name="user_fullname" id="usesr_fullname" class="input user_fullname_input" size="20" value=""></td><td><input type="email" class="user_email_input" name="user_email" id="user_email" size="20" value=""></td><td><input type="password" class="user_passwordVerify_input" name="user_passwordVerify" id="user_passwordVerify" size="20" value=""></td><td hidden><input id="user_id" name="user_id" class="user_id_input" value="' + idUser++ +'" hidden></td></tr>');

    });

});