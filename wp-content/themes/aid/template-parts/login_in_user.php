<?php $userData = get_userdata(get_current_user_id())->data; ?>
<div class="user-profile">
    <img class="user-pic rounded-circle" src="<?php echo get_avatar_url(get_userdata(get_current_user_id())); ?>">
    <span class="user-login-name"><?php echo $userData->user_login; ?></span>
    <span class="icon-down-dir"></span>
</div>