<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Главная страница</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head() ?>
</head>
<body>
<div class="wrapper">
    <header class="main-header">
        <div class="top-header">
            <div class="top-header__wrap">
                <div class="logotype-block">
                    <div class="logo-wrap">
                        <a href="<?php echo site_url() ?>">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/img/logo.svg' ?>" alt="Логотип"
                                 class="logo-wrap__logo-img"></a>
                    </div>
                </div>
                <?php
                $args = array(
                    'theme_location' => 'topmenu',
                    'container' => 'nav',
                    'container_class' => 'main-navigation',
                    'menu_class' => 'nav-list'
                );
                wp_nav_menu($args);
                ?>
            </div>
        </div>
        <div class="bottom-header">
            <div class="search-form-wrap">
                <form class="search-form" action="<? echo site_url() ?>">
                    <input type="text" name="s" placeholder="Поиск..." class="search-form__input">
                    <button class="search-form__btn-search"><i class="icon icon-search"></i></button>
                </form>
            </div>
        </div>
    </header>