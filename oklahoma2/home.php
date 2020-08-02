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
                    <?php the_post_thumbnail( $id, 'full' ); ?>
                </div>
            </div>

            <div class="company-right">
                <h2 class="section-title__simple">
                    <?php the_post(); the_title(); ?>
                </h2>
                <div class="company-right__descr">
                    <?php echo get_post_field('post_content', 27); ?>
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
                    <?php $advLeftAll = get_field('adv_left');
                                    if ($advLeftAll) :
                                        foreach ($advLeftAll as $adv) : ?>
                                            <div class="about-item about-item__left">
                                                <div class="about-arrow about-arrow__right"></div>
                                                <p class="about-item__text">
                                                    <?php echo $adv['adv_name_left'] ?>
                                                </p>
                                            </div> <!--about-item-->
                                        <?php endforeach; endif; ?>
                </div> <!--about-column-->


                <div class="about-column__adv">
                    <h2 class="about-title">Переваги</h2>
                </div><!--about-column-->

                <div class="about-column">
                    <?php $advRightAll = get_field('adv_right');
                    if ($advRightAll) :
                        foreach ($advRightAll as $adv) : ?>
                            <div class="about-item about-item__right">
                                <div class="about-arrow about-arrow__left"></div>
                                <p class="about-item__text">
                                    <?php echo $adv['adv_name_right'] ?>
                                </p>
                            </div> <!--about-item-->
                        <?php endforeach; endif; ?>
                </div> <!--about-column-->
            </div>
        </div>

        <div class="documents">
            <div class="documents-title">
                Дозволи на будівництво
            </div>

            <div class="documents-wrap">
                <?php $docsRow = get_field('documents_build', '27');

                if ($docsRow) :
                    foreach ($docsRow as $doc) : ?>
                <a class="documents-item" href="<?php echo $doc['doc_file'] ?>" target="_blank"><?php echo $doc['doc_name'] ?></a>
               <?php endforeach; endif; ?>
<!--                <a class="documents-item" href="#" target="_blank">Дозвіл на виконання будівельних робіт</a>-->
<!--                <a href="#" class="documents-item">Ліцензія</a>-->
<!--                <a href="#" class="documents-item">Дозвіл на виконання будівельних робіт</a>-->
            </div>
        </div>
    </div>  <!--container-->
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

                <?php
                    $cottageItems = new WP_Query([
                        'post_status' => 'publish',
                        'post_type' => 'cottage',
                        'posts_per_page' => 30,
                    ]);
            if ($cottageItems->have_posts()) :
                while ($cottageItems->have_posts()) :
                    $cottageItems->the_post(); ?>
                    <div class="houses-item">

                        <a href="<?php the_permalink(); ?>" class="houses-item__img">
                            <?php
                            $all_cottage_photos = get_field('common_cot_photo');
                            if ($all_cottage_photos) :
                                $first_photo = $all_cottage_photos[0];
                                $first_link = $first_photo['link_photo'];
                                $alt_photo = $first_photo['alt_attr'];
                            endif; ?>
                            <img src="<?php echo $first_link ?>" alt="<?php echo $alt_photo; ?>"/>

                            <div class="houses-item__overlay">
                                <div class="houses-item__overlay-inner">
                                    <span href="<?php the_permalink(); ?>" class="houses-item__btn">Детальніше</span>
                                </div>
                            </div>
                        </a> <!--houses-item__img-->

                        <div class="houses-item__descr">
                            <div class="houses-item__line"></div>
                            <div class="houses-item__bottom">
                                <div class="houses-item__title">
                                    <h2><?php the_title(); ?></h2>
                                </div>

                                <div class="houses-item__spec">
                                    <div class="houses-item__spec-wrap">
                                        <?php
                                            $allCottageSpec = get_field('specs');
                                            if ($allCottageSpec) :
                                                $cottageSquareRow = $allCottageSpec[0];
                                                $cottageSquareRowVal = $cottageSquareRow['spec_value'];
                                        endif; ?>
                                        <span class="houses-item__spec-name">Площа будинку</span>
                                        <span class="spec__name"><?php echo $cottageSquareRowVal; ?></span>
                                    </div>  <!--houses-item__spec-wrap-->

                                    <div class="houses-item__spec-wrap">
                                    <span class="houses-item__spec-name">Ціна, від</span>
                                        <span class="spec__name"><?php the_field('cottage_price');?></span>
                                    </div>  <!--houses-item__spec-wrap-->
                                </div> <!--houses-item__spec-->
                            </div> <!--houses-item__bottom-->
                        </div> <!--houses-item__descr-->

                    </div>
            <?php endwhile;  else :?>
                <p>Строений не найдено.</p>
                <?php  endif;  wp_reset_postdata();?>

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

        while ($galleryItems->have_posts()) :
            $galleryItems->the_post();

            ?>
            <p> <?php the_content(); ?> </p>
        <?php endwhile;
        wp_reset_postdata(); ?>

    </div> <!--container-->
</section>

<!--<section>-->
<!--    <div class="cottage-descr__plan">-->
<!--        --><?php //$planItemsImg = get_field('cottage_plan', '35');
//        if ($planItemsImg) :
//            foreach ($planItemsImg as $itemImg) : ?>
<!--                <a class="image-popup" href="#" data-featherlight="#mylightbox">-->
<!--                    <div id="mylightbox"><img src="--><?php //echo $itemImg['link_plan_photo']?><!--"/></div>-->
<!--                </a>-->
<!--            --><?php //endforeach; endif; ?>
<!--    </div>-->
<!--</section>-->


    <section class="contacts" id="anchor6">
        <div class="contacts-map" id="map">
            <div class="contacts-map__right" style="background-image: url(<?php echo $imgLink . 'map_bg2.png'?>)"></div>
            <div class="contacts-map__out">
                <div class="contacts-map__inner">
                    <h3>Oklahoma II</h3>
                    <div class="contacts-map__text">
                        <h2><?php the_field('cottages_address', 'options'); ?></h2>
                    </div>

                    <a class="button" href="#callback">Записатись на огляд</a>
                    <div class="top-line__contacts">
                        <?php $allPhones = get_field('contacts_phones', 'options');
                        if ($allPhones) :
                            foreach ($allPhones as $phone) : ?>
                                <a class="phone"
                                   href="tel:<?php echo $phone['phone_number'] ?>"><?php echo $phone['phone_number'] ?></a>
                            <?php endforeach; endif; ?>
                    </div>
                </div>

            </div>
        </div> <!--contacts-map-->
    </section>

<?php get_footer();?>