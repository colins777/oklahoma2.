<?php get_header(); ?>

<section class="cottage">
    <div class="container">
        <div class="cottage-wrap">
            <div class="section-title">
                <h2 class="section-title__main" id="anchor4"><?php the_title(); ?></h2>
                <div class="section-title__wrap">
                    <span class="section-title__small">Котеджне містечко</span>
                    <span class="section-title__name">Oklahoma Cottage Town II</span>
                </div>
            </div>

            <div class="cottage-top">
                <div class="cottage-slider">
                    <?php $allPhotos = get_field('common_cot_photo');
                    if ($allPhotos) :
                        foreach ($allPhotos as $photo) : ?>
                            <div class="slider-item"
                                 style="background-image: url(<?php echo $photo['link_photo']; ?>)">
                            </div>
                        <?php endforeach; endif; ?>
                </div> <!--cottage-slider-->

                <div class="cottage-param">
                    <div class="cottage-param__outer">
                        <div class="cottage-param__inner">
                            <h3 class="cottage-param__title">
                                Параметри об'єкту
                            </h3>

                            <?php $allSpecs = get_field('specs');
                            if ($allSpecs) :
                                foreach ($allSpecs as $row) : ?>
                                    <div class="cottage-param__wrap">
                                        <span class="cottage-param__name"><?php echo $row['spec_name']; ?></span>
                                        <span class="cottage-param__val"><?php echo $row['spec_value']; ?></span>
                                    </div> <!--cottage-param__wrap-->
                                <?php endforeach; endif; ?>
                        </div> <!--cottage-param__inner-->
                    </div> <!--cottage-param__outer-->
                </div> <!--cottage-param-->
            </div> <!--cottage-top-->

            <div class="cottage-bottom">
                <div class="cottage-form">
                    <div id="callback">
                        <h3>Дізнайтесь більш детальну інформацію</h3>
                        <?php echo do_shortcode ('[contact-form-7 id="21" title="Main Contact Form"]') ?>
                    </div>
                </div>
                <div class="cottage-descr">
                    <div class="cottage-title__price">
                        <span class="cottage-title-price__name">Ціна об'єкту:</span>
                        <span class="cottage-title-price__val"><?php the_field('cottage_price');?></span>
                    </div>

                    <div class="cottage-descr__house">
                        <div class="cottage-descr__text">
                            <?php the_post(); the_content();?>
                        </div>
                        <div class="cottage-descr__plan">
                            <?php $planItemsImg = get_field('cottage_plan');
                            if ($planItemsImg) :

                                $counter = 0;
                                foreach ($planItemsImg as $itemImg) :
                                    $counter++;
                                    ?>

                                    <a class="image-popup" href="#" data-featherlight="#mylightbox<?php echo $counter;?>">
                                        <div id="mylightbox<?php echo $counter;?>"><img src="<?php echo $itemImg['link_plan_photo']?>" alt="<?php echo $itemImg['alt_plan_cot_photo'] ?>"/></div>
                                    </a>
                                <?php endforeach; endif; ?>
                        </div> <!--cottage-descr__plan-->
                    </div>
                </div>

            </div>
        </div> <!--container-->
    </div> <!--cottage-->
</section>

<?php
get_footer();
?>

<!--//custom popup ssettings https://github.com/noelboss/featherlight/#content-filters-->