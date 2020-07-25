<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <!-- <base href="/"> -->

    <title>OptimizedHTML 4</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#000">
    <!-- Custom Browsers Color End -->

<?php wp_head();

$imgLink = OKLAHOMA_URL . '/img/';

if (is_front_page()) :

?>

    <div class="header" style="background-image: url(<?php echo  $imgLink . 'header_bg2.jpg'?>)">

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
                <a class="phone" href="tel:+38 (050) 35-45-678">+38 (097) 99-87-006</a>
                <a class="phone" href="tel:+38 (050) 35-45-678">+38 (066) 03-38-999</a>
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
                        <a class="phone" href="tel:+38 (050) 35-45-678">+38 (097) 99-87-006</a>
                        <a class="phone" href="tel:+38 (050) 35-45-678">+38 (066) 03-38-999</a>
                    </div>
            </div> <!--top-line__wrap-->
            </div> <!--container-->
        </div> <!--top-line-->

        <div class="header-title">
            <div class="header-title__inner">
                <h1>Oklahoma II</h1>
                <p class="header-title__descr">Котеджне містечко</p>
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
                <a class="phone" href="tel:+38 (050) 35-45-678">+38 (097) 99-87-006</a>
                <a class="phone" href="tel:+38 (050) 35-45-678">+38 (066) 03-38-999</a>
            </div>
        </div> <!--top-mobile-->

        <div class="top-line">
            <div class="container">
                <div class="top-line__wrap">
                    <div class="logo">
                        <?php the_custom_logo()?>
                    </div>

                    <div class="top-line__contacts">
                        <a class="phone" href="tel:+38 (050) 35-45-678">+38 (097) 99-87-006</a>
                        <a class="phone" href="tel:+38 (050) 35-45-678">+38 (066) 03-38-999</a>
                    </div>
                </div> <!--top-line__wrap-->
            </div> <!--container-->
        </div> <!--top-line-->

    </div>
    </head>

<?php endif;?>

