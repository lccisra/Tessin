<?php /*Template Name: Home*/ ?>
<?php get_header(); ?>

<!-- <div class="col-md-12 col-lg-6 wow fadeIn" data-wow-delay="0.2s"></div> -->

<section class="video">
    <div class="caption">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo wp_kses_post( get_field('stage_txt')); ?>
                </div>
            </div>
        </div>
    </div>
    <video autoplay="autoplay" muted loop="loop" playsinline poster="">
      <source src="https://www.carza.com/wp-content/uploads/2023/08/0803.mp4" type="video/mp4" />
    </video>
    <ul class="social">
        <li><a href="<?php echo wp_kses_post( get_field('instagram')); ?>" class="icon-instagram" target="_blank"></a></li>
        <li><a href="<?php echo wp_kses_post( get_field('linkedin')); ?>" class="icon-linkedin" target="_blank"></a></li>
    </ul>
  </section>
  

<?php get_footer(); ?>