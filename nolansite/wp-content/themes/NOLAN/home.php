<?php /*Template Name: Home*/ ?>
<?php get_header(); ?>

<!-- <div class="col-md-12 col-lg-6 wow fadeIn" data-wow-delay="0.2s"></div> -->

<section class="video wow fadeIn" data-wow-delay="0.2s">
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
  </section>

  <section class="pt80">
      <div class="container">
          <div class="row">
              <div class="col-md-6 pb40 wow fadeInRight" data-wow-delay="0.2s">
                  <?php echo wp_kses_post( get_field('intro_txt')); ?>
              </div>
              <div class="col-md-6 pb40 wow fadeInLeft" data-wow-delay="0.2s">
                  <img loading="lazy" src="<?php echo wp_kses_post( get_field('intro_img')); ?>" width="640" height="370" alt="Transformamos ideas en realidades tangibles" title="Transformamos ideas en realidades tangibles">
              </div>
          </div>
      </div>
  </section>
  

<?php get_footer(); ?>