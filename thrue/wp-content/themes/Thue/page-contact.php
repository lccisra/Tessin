<?php /*Template Name: Contact*/ ?>
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
	<section class="pt40 pb40 wow fadeIn" data-wow-delay="0.2s">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-7 col-xl-8 pb40 d-flex">
					<div class="contact-box bg-lght">
						<div class="intro">
							<?php the_field('txt_formr'); ?>		
						</div>
						<div class="form">
							<?php echo do_shortcode('[contact-form-7 id="6" title="Contacto"]'); ?>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-5 col-xl-4 pb40 d-flex">
					<div class="bg-yellow contact-info">
						<ul>
							<li class="icon-amil"><?php the_field('txt_email'); ?></li>
							<li class="icon-tel"><?php the_field('txt_tel'); ?></li>
							<li class="icon-pin"><?php the_field('txt_address'); ?></li>
							<li class="icon-oclock"><?php the_field('txt_hour'); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>	
	</section>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>