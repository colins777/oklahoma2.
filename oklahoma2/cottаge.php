
<?php
/*
Template Name: Cottage Page
*/

get_header();
?>


<section class="cottage">
   <div class="container">
       <div class="cottage-wrap">
           <div class="section-title">
               <h2 class="section-title__main" id="anchor4">Red River</h2>
               <div class="section-title__wrap">
                   <span class="section-title__small">Котеджне містечко</span>
                   <span class="section-title__name">Oklahoma Cottage Town II</span>
               </div>
           </div>

           <div class="cottage-top">
               <div class="cottage-slider">
                    <div class="slider-item" style="background-image: url(<?php echo get_template_directory_uri(). '/img/houses/Edmond/edmond_1.jpg'?>)">

                    </div>

                   <div class="slider-item" style="background-image: url(<?php echo get_template_directory_uri(). '/img/houses/Edmond/edmond_2.jpg'?>)">

                   </div>
               </div>

               <div class="cottage-param">
                   <div class="cottage-param__outer">
                       <div class="cottage-param__inner">
                           <h3 class="cottage-param__title">
                               Параметри об'єкту
                           </h3>
                           <div class="cottage-param__wrap">
                               <span class="cottage-param__name">Площа будинку:</span>

                               <span class="cottage-param__val">84 кв. м</span>
                           </div> <!--cottage-param__wrap-->

                           <div class="cottage-param__wrap">
                               <span class="cottage-param__name">Кількість поверхів:</span>

                               <span class="cottage-param__val">1</span>
                           </div> <!--cottage-param__wrap-->

                           <div class="cottage-param__wrap">
                               <span class="cottage-param__name">Площа спальні:</span>

                               <span class="cottage-param__val">12.4 кв. м</span>
                           </div> <!--cottage-param__wrap-->

                           <div class="cottage-param__wrap">
                               <span class="cottage-param__name">Площа вітальні/кухні:</span>

                               <span class="cottage-param__val">36.9 кв. м</span>
                           </div> <!--cottage-param__wrap-->

                           <div class="cottage-param__wrap">
                               <span class="cottage-param__name">Площа гостьової:</span>

                               <span class="cottage-param__val">8.9 кв. м</span>
                           </div> <!--cottage-param__wrap-->

                           <div class="cottage-param__wrap">
                               <span class="cottage-param__name">Площа кабінету:</span>

                               <span class="cottage-param__val">8.9 кв. м</span>
                           </div> <!--cottage-param__wrap-->

                           <div class="cottage-param__wrap">
                               <span class="cottage-param__name">Площа санвузла:</span>

                               <span class="cottage-param__val">5 кв. м</span>
                           </div> <!--cottage-param__wrap-->

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
                       <span class="cottage-title-price__val">від 1 200 000 грн.</span>
                   </div>

                   <div class="cottage-descr__house">
                       <div class="cottage-descr__text">
                           <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Ему встретил всеми заголовок речью текст, переписывается буквенных решила несколько родного! Большого рот заглавных раз, живет языком то текстами проектах свой рыбного себя! Переписали города всеми ведущими переписывается рыбными точках выйти, сих речью, даль не родного продолжил коварных подзаголовок рыбного.</p>
                       </div>
                       <div class="cottage-descr__plan">
                           <a class="image-popup" href="#" data-featherlight="#mylightbox">
                               <div id="mylightbox"><img src="<?php echo get_template_directory_uri(). '/img/houses/Edmond/edmond_plan.jpg'?>" alt="" /></div>

                           </a>
                       </div>
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