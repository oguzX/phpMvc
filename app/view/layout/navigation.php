<ul class="nav nav-tabs">
    <li>
        <a href="<?php echo URL;?>/default/index"><h6 class="mt-1 ml-3 display-4 text-dark">Zugneon Blog <span class="text-muted font-size-07">beta</span></h6></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo URL;?>/default/index">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo URL;?>/post/post">Post</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo URL;?>/default/aboutme">About Me</a>
    </li>
    <li class="nav-item position-relative userBtn">
        <?php if(!auth::isLoggedIn()){ ?>
            <a class="nav-link" href="<?php echo URL;?>/user/login">Login</a>
        <?php }else{ ?>
            <a class="nav-link" href="<?php echo URL; ?>/user/profile">Profile</a>
            <a href="<?php echo URL; ?>/user/logout" class="logoutBtn text-dark"><small>logout</small></a>
        <?php } ?>
    </li>
</ul>
<!-- class ="active" -->
<div class="clear"></div>