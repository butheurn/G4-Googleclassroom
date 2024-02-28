<?php
require_once 'utils/url.php';
require_once 'database/database.php';
if (urlIs('/signin') || urlIs('/signup') || urlIs('/signout')) {
    require "account.router.php";
} else if (urlIs('/home') || urlIs('/todo') || urlIs('/teach') || urlIs('/enrollment') || urlIs('/archive')) {
    require "user.router.php";
} else if (urlIs('/join-class') || urlIs('/create-class') || urlIs('/change-banner-class')) {
    require "user.router.php";
} else {
    require 'router.php';
}
