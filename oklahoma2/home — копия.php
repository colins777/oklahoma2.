<?php
/*
Template Name: Home Page
*/
get_header();
$imgLink = get_template_directory_uri() . '/img/';
?>


<body>

<!-- Custom HTML -->

<section class="company-s">
    <div class="container">
        <div class="company-wrap">
            <div class="company-left" id="anchor1">
                <div class="company-left__img">
                    <img src="<?php echo  $imgLink . 'about_bg.jpg'?>" alt="">
                </div>
            </div>

            <div class="company-right">
                <h2 class="section-title__simple">
                    Про компанію
                </h2>
                <div class="company-right__descr">
                    <p>Oklahoma Cottage Town 2 — коттеджный эко-городок в американском стиле в 15 минутах от Киева. Одно- и двухэтажные коттеджи из дерева, стекла и кирпича гармонично вписались в самобытную архитектуру села Дмитровка. Рядом с комплексом Гореницкий лесной заповедник, на территории которого сохранились редкие виды деревьев и растений, а также несколько озер, на берегах которых жильцы смогут отдыхать и наслаждаться общением с природой. Собственная парковая зона с фонтаном, местами для отдыха и площадками для барбекю будет и на территории городка.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-s">
    <div class="container">
        <div class="about-outer" style="background-image: url(<?php echo  $imgLink . 'about_bg.jpg'?>)">
            <div class="about-inner" id="anchor2">
                <div class="about-column">
                    <div class="about-item about-item__left">
                        <div class="about-arrow about-arrow__right"></div>
                        <p class="about-item__text">
                            вдале розташування - 15 км від Києва, поруч ліс, озера і заповідник
                        </p>
                    </div> <!--about-item-->

                    <div class="about-item about-item__left">
                        <div class="about-arrow about-arrow__right"></div>
                        <p class="about-item__text">
                            система «розумний будинок» в кожному котеджі
                        </p>
                    </div> <!--about-item-->

                    <div class="about-item about-item__left">
                        <div class="about-arrow about-arrow__right"></div>
                        <p class="about-item__text">
                            подача води з артезіанської свердловини
                        </p>
                    </div> <!--about-item-->


                    <div class="about-item about-item__right">
                        <div class="about-arrow about-arrow__left"></div>
                        <p class="about-item__text">
                            возможна замена строительных материалов с сохранением дизайна и архитектуры коттеджа
                        </p>
                    </div> <!--about-item-->

                </div> <!--about-column-->


                <div class="about-column__adv">
                    <h2 class="about-title">Переваги</h2>
                </div><!--about-column-->

                <div class="about-column">
                    <div class="about-item about-item__right">
                        <div class="about-arrow about-arrow__left"></div>
                        <p class="about-item__text">
                            власна прибудинкова територія і тераса в кожному котеджі
                        </p>
                    </div> <!--about-item-->

                    <div class="about-item about-item__right">
                        <div class="about-arrow about-arrow__left"></div>
                        <p class="about-item__text">
                            вхід на територію через пропускний пункт, цілодобовий консьєрж-сервіс, охорона і відеоспостереження
                        </p>
                    </div> <!--about-item-->

                    <div class="about-item about-item__right">
                        <div class="about-arrow about-arrow__left"></div>
                        <p class="about-item__text">
                            централизованная система пожаротушения
                        </p>
                    </div> <!--about-item-->

                    <div class="about-item about-item__right">
                        <div class="about-arrow about-arrow__left"></div>
                        <p class="about-item__text">
                            парковки навколо комплексу і паркінг для електромобілів
                        </p>
                    </div> <!--about-item-->

                    <div class="about-item about-item__left">
                        <div class="about-arrow about-arrow__right"></div>
                        <p class="about-item__text">
                            опалення - електричні котли
                        </p>
                    </div> <!--about-item-->
                </div>
            </div>
        </div>
    </div>
</section>


    <section class="houses-s">
        <div class="container">
                <div class="section-title">
                    <h2 class="section-title__main">Будинки</h2>
                    <div class="section-title__wrap">
                        <span class="section-title__small">Котеджне містечко</span>
                        <span class="section-title__name">Oklahoma Cottage Town II</span>
                    </div>
                </div>
            </div> <!--container-->

        <div class="container" id="anchor3">
            <div class="houses-wrap">
                <div class="houses-item">

                    <a href="#" class="houses-item__img">
                        <img src="<?php echo $imgLink . 'houses/1.jpg'?>" alt="" />
                        <div class="houses-item__overlay">
                            <div class="houses-item__overlay-inner">
                                <span class="houses-item__btn">Детальніше</span>
                            </div>
                        </div>
                    </a> <!--houses-item__img-->

                    <div class="houses-item__descr">
                        <div class="houses-item__line"></div>

                        <div class="houses-item__bottom">

                            <div class="houses-item__title">
                                <h2>Red River</h2>
                            </div>

                            <div class="houses-item__spec">
                                <div class="houses-item__spec-wrap">
                                    <span class="houses-item__spec-name">
                                        Площа будинку
                                    </span>
                                    <span class="houses-item__spec-num">
                                        <span class="spec__name">123.2 кв. м
                                    </span>
                                </div>  <!--houses-item__spec-wrap-->

                                <div class="houses-item__spec-wrap">
                                    <span class="houses-item__spec-name">
                                        Ціна, від
                                    </span>
                                    <span class="houses-item__spec-num">
                                        <span class="spec__name">1 400 000 грн.
                                    </span>
                                </div>  <!--houses-item__spec-wrap-->
                            </div> <!--houses-item__spec-->
                    </div> <!--houses-item__bottom-->
                </div> <!--houses-item__descr-->

            </div> <!--houses-item-->

                <div class="houses-item">
                    <a href="#" class="houses-item__img">
                        <img src="<?php echo $imgLink . 'houses/red-river.jpg'?>" alt="" />
                        <div class="houses-item__overlay">
                            <div class="houses-item__overlay-inner">
                                <span class="houses-item__btn">Детальніше</span>
                            </div>
                        </div>
                    </a> <!--houses-item__img-->


                    <div class="houses-item__descr">
                        <div class="houses-item__line"></div>
                        <div class="houses-item__bottom">
                            <div class="houses-item__title">
                                <h2>Edmond</h2>
                            </div>

                            <div class="houses-item__spec">
                                <div class="houses-item__spec-wrap">
                                    <span class="houses-item__spec-name">
                                        Площа будинку
                                    </span>
                                    <span class="houses-item__spec-num">
                                        <span class="spec__name">54.2 кв. м
                                    </span>
                                </div>  <!--houses-item__spec-wrap-->

                                <div class="houses-item__spec-wrap">
                                    <span class="houses-item__spec-name">
                                        Ціна
                                    </span>
                                    <span class="houses-item__spec-num">
                                        <span class="spec__name">1 200 000 грн.
                                    </span>
                                </div>  <!--houses-item__spec-wrap-->
                            </div> <!--houses-item__spec-->
                        </div> <!--houses-item__bottom-->
                    </div> <!--houses-item__descr-->


                </div> <!--houses-item-->


                <div class="houses-item">

                    <a href="#" class="houses-item__img">
                        <img src="<?php echo $imgLink . 'houses/1.jpg'?>" alt="" />
                        <div class="houses-item__overlay">
                            <div class="houses-item__overlay-inner">
                                <span class="houses-item__btn">Детальніше</span>
                            </div>
                        </div>
                    </a> <!--houses-item__img-->


                    <div class="houses-item__descr">
                        <div class="houses-item__line"></div>

                        <div class="houses-item__bottom">

                            <div class="houses-item__title">
                                <h2>Edmond</h2>
                            </div>

                            <div class="houses-item__spec">
                                <div class="houses-item__spec-wrap">
                                    <span class="houses-item__spec-name">
                                        Площа будинку
                                    </span>
                                    <span class="houses-item__spec-num">
                                        <span class="spec__name">54.2 кв. м
                                    </span>
                                </div>  <!--houses-item__spec-wrap-->

                                <div class="houses-item__spec-wrap">
                                    <span class="houses-item__spec-name">
                                        Ціна
                                    </span>
                                    <span class="houses-item__spec-num">
                                        <span class="spec__name">1 200 000 грн.
                                    </span>
                                </div>  <!--houses-item__spec-wrap-->
                            </div> <!--houses-item__spec-->
                        </div> <!--houses-item__bottom-->
                    </div> <!--houses-item__descr-->


                </div> <!--houses-item-->


                <div class="houses-item">

                    <a href="#" class="houses-item__img">
                        <img src="<?php echo $imgLink . 'houses/1.jpg'?>" alt="" />
                        <div class="houses-item__overlay">
                            <div class="houses-item__overlay-inner">
                                <span class="houses-item__btn">Детальніше</span>
                            </div>
                        </div>
                    </a> <!--houses-item__img-->


                    <div class="houses-item__descr">
                        <div class="houses-item__line"></div>

                        <div class="houses-item__bottom">

                            <div class="houses-item__title">
                                <h2>Edmond</h2>
                            </div>

                            <div class="houses-item__spec">
                                <div class="houses-item__spec-wrap">
                                    <span class="houses-item__spec-name">
                                        Площа будинку
                                    </span>
                                    <span class="houses-item__spec-num">
                                        <span class="spec__name">54.2 кв. м
                                    </span>
                                </div>  <!--houses-item__spec-wrap-->

                                <div class="houses-item__spec-wrap">
                                    <span class="houses-item__spec-name">
                                        Ціна
                                    </span>
                                    <span class="houses-item__spec-num">
                                        <span class="spec__name">1 200 000 грн.
                                    </span>
                                </div>  <!--houses-item__spec-wrap-->
                            </div> <!--houses-item__spec-->
                        </div> <!--houses-item__bottom-->
                    </div> <!--houses-item__descr-->


                </div> <!--houses-item-->


                <div class="houses-item">

                    <a href="#" class="houses-item__img">
                        <img src="<?php echo $imgLink . 'houses/1.jpg'?>" alt="" />
                        <div class="houses-item__overlay">
                            <div class="houses-item__overlay-inner">
                                <span class="houses-item__btn">Детальніше</span>
                            </div>
                        </div>
                    </a> <!--houses-item__img-->


                    <div class="houses-item__descr">
                        <div class="houses-item__line"></div>

                        <div class="houses-item__bottom">

                            <div class="houses-item__title">
                                <h2>Edmond</h2>
                            </div>

                            <div class="houses-item__spec">
                                <div class="houses-item__spec-wrap">
                                    <span class="houses-item__spec-name">
                                        Площа будинку
                                    </span>
                                    <span class="houses-item__spec-num">
                                        <span class="spec__name">54.2 кв. м
                                    </span>
                                </div>  <!--houses-item__spec-wrap-->

                                <div class="houses-item__spec-wrap">
                                    <span class="houses-item__spec-name">
                                        Ціна
                                    </span>
                                    <span class="houses-item__spec-num">
                                        <span class="spec__name">1 200 000 грн.
                                    </span>
                                </div>  <!--houses-item__spec-wrap-->
                            </div> <!--houses-item__spec-->
                        </div> <!--houses-item__bottom-->
                    </div> <!--houses-item__descr-->

                </div> <!--houses-item-->
        </div> <!--houses-wrap-->
        </div> <!--container-->

        </div>
    </section>

    <section class="gallery-s">
        <div class="container">
            <div class="section-title">
                <h2 class="section-title__main" id="anchor4">Галерея</h2>
                <div class="section-title__wrap">
                    <span class="section-title__small">Котеджне містечко</span>
                    <span class="section-title__name">Oklahoma Cottage Town II</span>
                </div>
            </div>

            <?php $galleryItems = new WP_Query(['category_name' => 'gallery']);

           // var_dump($galleryItems);
            while ($galleryItems->have_posts()) :
                $galleryItems->the_post();

           ?>
               <p> <?php    the_content(); ?> </p>
            <?php   endwhile; wp_reset_postdata(); ?>


        </div> <!--container-->
    </section>


    <section class="contacts" id="anchor6">
        <div class="contacts-map" id="map">
<!--            --><?php //echo do_shortcode('[leaflet-map lat=50.464681 lng=30.153079 zoom=14 zoomcontrol scrollwheel detect-retina] [leaflet-marker]Київська обл. с. Дмитрівка Oklahoma Cottage Town 2[/leaflet-marker]')?>

            <div class="contacts-map__right" style="background-image: url(<?php echo $imgLink . 'map_bg2.png'?>)">

            </div>
            <div class="contacts-map__out">
                <div class="contacts-map__inner">
                    <h3>Oklahoma II</h3>
                    <div class="contacts-map__text">
                        <h2>Київська область, Києво-Святошинський р-н, с. Дмитрівка</h2>
                    </div>

                    <a class="button" href="#callback">Записатись на огляд</a>
                    <div class="top-line__contacts">
                        <a class="phone" href="tel:+38 (050) 35-45-678">+38 (097) 99-87-006</a>
                        <a class="phone" href="tel:+38 (050) 35-45-678">+38 (066) 03-38-999</a>
                    </div>
                </div>

            </div>
        </div> <!--contacts-map-->
    </section>

<?php get_footer();?>