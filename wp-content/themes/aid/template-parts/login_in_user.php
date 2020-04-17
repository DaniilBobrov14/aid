<?php $userData = get_userdata(get_current_user_id())->data; ?>
<div class="user-profile">
    <ul class="nav nav-tabs">
        <li class="nav-item dropdown border rounded">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img class="user-pic rounded-circle" src="<?php echo get_avatar_url(get_userdata(get_current_user_id())); ?>">
                <span class="user-login-name"><?php echo $userData->user_login; ?></span>
            </a>
            <div class="dropdown-menu">
                <a href="<?php echo admin_url('profile.php'); ?>" class="dropdown-item">adminAid</a>
                <a href="<?php echo admin_url('profile.php'); ?>" class="dropdown-item">Изменить профиль</a>
                <div class="dropdown-divider"></div>
                <a href="<?php echo wp_login_url(site_url('/login/'))?>" class="dropdown-item">Выйти</a>
            </div>
        </li>
    </ul>
</div>