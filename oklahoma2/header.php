<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <!-- <base href="/"> -->

    <title><?php bloginfo();?></title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#000">
    <!-- Custom Browsers Color End -->

<?php wp_head();

$imgLink = OKLAHOMA_URL . '/img/';

if (is_front_page()) : ?>

    <div class="header" style="background-image: url(<?php the_field('header_banner', 'options');?>)">

        <div class="top-mobile">
            <div class="mobile-btn-wrap">
                <div class="sandwich">
                    <div class="sandwich__line sandwich__line--top"></div>
                    <div class="sandwich__line sandwich__line--middle"></div>
                    <div class="sandwich__line sandwich__line--bottom"></div>
                </div>
            </div>

            <nav class="top-mobile-menu">
                <ul class="top-mobile__wrap">
                    <li class="top-mobile__item"><a class="top-mobile__link"  href="#anchor1">Про компанію</a></li>
                    <li class="top-mobile__item"><a class="top-mobile__link" href="#anchor2">Переваги</a></li>
                    <li class="top-mobile__item"><a class="top-mobile__link" href="#anchor3">Будинки</a></li>
                    <li class="top-mobile__item"><a class="top-mobile__link" href="#anchor4">Галерея</a></li>
                    <li class="top-mobile__item"><a class="top-mobile__link" href="#anchor6">Контакти</a></li>
                </ul>
            </nav> <!--top-menu-->

            <div class="logo">
                <?php the_custom_logo()?>
            </div>

            <div class="top-line__contacts">
                <?php $allPhones = get_field('contacts_phones', 'options');
                if ($allPhones) :
                    foreach ($allPhones as $phone) : ?>
                        <a class="phone"
                           href="tel:<?php echo $phone['phone_number'] ?>"><?php echo $phone['phone_number'] ?></a>
                    <?php endforeach; endif; ?>
            </div>
        </div> <!--top-mobile-->

        <div class="top-line">
            <div class="container">
                <div class="top-line__wrap">
                    <div class="logo">
                        <?php the_custom_logo()?>
                    </div>
                <nav class="top-menu">
                    <ul class="top-menu__wrap">
                        <li class="top-menu__item"><a class="top-menu__link"  href="#anchor1">Про компанію</a></li>
                        <li class="top-menu__item"><a class="top-menu__link" href="#anchor2">Переваги</a></li>
                        <li class="top-menu__item"><a class="top-menu__link" href="#anchor3">Будинки</a></li>
                        <li class="top-menu__item"><a class="top-menu__link" href="#anchor4">Галерея</a></li>
                        <li class="top-menu__item"><a class="top-menu__link" href="#anchor6">Контакти</a></li>
                    </ul>
                </nav> <!--top-menu-->
                    <div class="top-line__contacts">
                        <?php $allPhones = get_field('contacts_phones', 'options');
                        if ($allPhones) :
                            foreach ($allPhones as $phone) : ?>
                                <a class="phone"
                                   href="tel:<?php echo $phone['phone_number'] ?>"><?php echo $phone['phone_number'] ?></a>
                            <?php endforeach; endif; ?>
                    </div>
            </div> <!--top-line__wrap-->
            </div> <!--container-->
        </div> <!--top-line-->

        <div class="header-title">
            <div class="header-title__inner">
                <h1><?php the_field('banner_title', 'options');?></h1>
                <p class="header-title__descr"><?php the_field('banner_text', 'options');?></p>
                <a class="button button-header" href="#callback">Замовити дзвінок</a>
            </div>
        </div>
    </div>
</head>

<?php else :?>
    <div class="header header--not-home">

        <div class="top-mobile">
            <div class="logo">
                <?php the_custom_logo()?>
            </div>

            <div class="top-line__contacts">
                <?php $allPhones = get_field('contacts_phones', 'options');
                if ($allPhones) :
                    foreach ($allPhones as $phone) : ?>
                        <a class="phone"
                           href="tel:<?php echo $phone['phone_number'] ?>"><?php echo $phone['phone_number'] ?></a>
                    <?php endforeach; endif; ?>
            </div>
        </div> <!--top-mobile-->

        <div class="top-line">
            <div class="container">
                <div class="top-line__wrap">
                    <div class="logo">
                        <?php the_custom_logo()?>
                    </div>
                    <div class="top-line__contacts">
                        <?php $allPhones = get_field('contacts_phones', 'options');
                        if ($allPhones) :
                            foreach ($allPhones as $phone) : ?>
                                <a class="phone"
                                   href="tel:<?php echo $phone['phone_number'] ?>"><?php echo $phone['phone_number'] ?></a>
                            <?php endforeach; endif; ?>
                    </div>
                </div> <!--top-line__wrap-->
            </div> <!--container-->
        </div> <!--top-line-->

    </div>
    </head>

<?php endif;?>

