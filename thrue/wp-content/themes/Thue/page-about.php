<?php /*Template Name: About*/ ?>
<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="stage-medium img-cover">
		<img loading="lazy" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" width="1280" height="360">
		<div class="container">
			<div class="row">
				<div class="col-md-12 wow fadeInLeft" data-wow-delay="0.2s">
					<h1><?php the_title(); ?></h1>
					<div class="brdcrmb">
						<?php if(function_exists('bcn_display')) { bcn_display(); } ?>
					</div>
				</div>
			</div>
		</div>		
	</section>
	<section class="pt80 pb60 bullets">
		<div class="container">
			<div class="row">
				<div class="col-md-6 pb20">
					<div class="relative">
						<img loading="lazy" src="<?php the_field('img_about'); ?>" width="" height="" alt="<?php the_field('alt_about'); ?>" title="<?php the_field('alt_about'); ?>">
						<div class="years-esperience bg-yellow">
							<span class="years">
	            	+<span class="count" style="--tonum:<?php the_field('number_years_about'); ?>"></span>
	            </span>
	            <span class="txt-years-about"><?php the_field('txt_years_about'); ?></span>
						</div>
					</div>	
				</div>
				<div class="col-md-6 p40 wow fadeIn" data-wow-delay="0.2s">
					<p class="subtitle"><?php the_field('about_subtitle'); ?></p>
					<?php the_content(); ?>
					<a href="<?php the_field('video_youtube_about'); ?>" class="fancybox-media icon-play play-video yellow">Ver video</a>
				</div>
				<div class="col-md-12 pt40">
					<?php the_field('txt_about'); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-yellow pt40 pb40">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="numeral">
						<span class="number">
            	<?php the_field('simbolo_1'); ?><span class="count" style="--tonum:<?php the_field('number_1'); ?>"></span>
            </span>
            <span class="desc-number">
            	<?php the_field('desc_number_1'); ?>
            </span>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="numeral">
						<span class="number">
            	<?php the_field('simbolo_2'); ?><span class="count" style="--tonum:<?php the_field('number_2'); ?>"></span>
            </span>
            <?php the_field('desc_number_2'); ?>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="numeral">
						<span class="number">
            	<?php the_field('simbolo_3'); ?><span class="count" style="--tonum:<?php the_field('number_3'); ?>"></span>
            </span>
            <?php the_field('desc_number_3'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endwhile; endif; ?>
  <section class="bg-lght bg-quotes pt80 pb60">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-8 center">
          <p class="subtitle"><?=get_post_meta(2,'subtitle_quote', true)?></p>
          <?=get_post_meta(2,'txt_quote', true)?>
        </div>
        <div class="col-md-12">
          <div class="sld-wrp">
            <div class="slider-for">
              <?php $args = array('numberposts' => -1,'post_type'=> 'testimonios'); $the_query = new WP_Query( $args ); ?>
              <?php $i=0; if($the_query->have_posts()): while( $the_query->have_posts()) : $the_query->the_post(); $i++; ?>
              <div class="slide-container">
                <div class="quote-image">
                  <i class="icon-quote"></i>
                  <img loading="lazy" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" width="200" height="200">
                </div>
              </div>
              <?php endwhile; endif; ?>
            </div>
            <div class="slider-nav">
              <?php $args = array('numberposts' => -1,'post_type'=> 'testimonios'); $the_query = new WP_Query( $args ); ?>
              <?php $i=0; if($the_query->have_posts()): while( $the_query->have_posts()) : $the_query->the_post(); $i++; ?>
              <div class="center quote-txt">
                <?php the_content(); ?>
                <div class="pt10">
                  <h3 class="h4"><?php the_title(); ?></h3>
                  <p class="position"><?php the_field('position'); ?></p>
                  <p class="company">- <?php the_field('company'); ?> -</p>
                </div>  
              </div>
              <?php endwhile; endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="pt80 pb50">
		<div class="container">
			<div class="row">
				<div class="col-md-12 center">
					<p class="subtitle"><?php the_field('subtitle_clients'); ?></p>
					<?php the_field('txt_clients'); ?>
				</div>
				<div class="col-md-12 clients-logos pt20">
					<?php the_field('logos_clients'); ?>
				</div>
			</div>
		</div>
	</section>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>