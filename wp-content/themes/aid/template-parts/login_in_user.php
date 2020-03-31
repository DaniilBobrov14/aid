<?php $userData = get_userdata(get_current_user_id())->data; ?>
<div class="user-profile">
    <img class="user-pic rounded-circle" src="http://aid/wp-content/uploads/2020/03/40-409597_male-user-filled-icon-man-icon-png.png.jpg">
    <span class="user-login-name"><?php echo $userData->user_login; ?></span>
    <span class="icon-down-dir"></span>
</div>