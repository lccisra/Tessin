<?php wp_footer(); ?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 pb30">
                <a href="<?php bloginfo('url'); ?>" title="Home">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/ft-logo.svg" width="300" height="118" alt="Thrue" title="Thrue">
                    <p class="ft-consulting">Consultoría y Capacitación</p>
                </a>
            </div>
            <div class="col-md- col-lg-3 pb30">
                <?php dynamic_sidebar('col2'); ?>
            </div>
            <div class="col-md-6 col-lg-3 pb30">
                <?php dynamic_sidebar('col3'); ?>
            </div>
            <div class="col-md-6 col-lg-3 pb30">
                <ul class="social">
                <li><a href="<?=get_post_meta(2, 'linkedin', true)?>" target="_blank" class="icon-linkedin"></a></li>
                <!-- <li><a href="<?=get_post_meta(2, 'youtube', true)?>" target="_blank" class="icon-youtube"></a></li> -->
            </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <?php dynamic_sidebar('Copyright'); ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<script defer type="text/javascript" src='https://code.jquery.com/jquery-1.8.2.min.js'></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/wow.js"></script>
<script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.js"></script>
<script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-media.js"></script>
<script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
<script defer type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>
</body>
</html>

