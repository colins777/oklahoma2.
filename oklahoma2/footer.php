<?php wp_footer();?>
</body>

<div class="footer">
    <div class="hidden">
        <div id="callback" class="white-popup mfp-hide">
            <h3>Дізнайтесь більш детальну інформацію</h3>
            <?php echo do_shortcode ('[contact-form-7 id="21" title="Main Contact Form"]') ?>
        </div>
    </div>

    <div class="container">
        <div class="footer-content"><p><?php the_field('footer_copyright', 'options');?></p></div>

    </div>
</div>

</html>