<?php /*Template Name: Contact*/ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="mt-site wow fadeIn" data-wow-delay="0.2s">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="img-cover stage-medium">
						<div class="path"></div>
						<div class="path crt"></div>
						<?php echo get_the_post_thumbnail(get_the_ID()); ?>
						<div class="container">
							<div class="row">
								<div class="col-md-12 caption">
									<div class="wow fadeInLeft" data-wow-delay="0.4s">
										<h1><?php the_title(); ?></h1>
									</div>	
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="pt-80 pb-80 wow fadeInUp" data-wow-delay="0.2s">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="contaier-contact">
						<div class="row reverse-xl">
							<div class="col-md-12 col-xl-4 col-a">
								<div class="card-contact-info wow fadeInRight" data-wow-delay="0.4s">
									<div class="info-icono bg-texture-orange">
										<img loading="lazy" src="<?php echo wp_kses_post( get_field('mc_icono_1')); ?>" width="50" height="50" alt="" title="">
									</div>	
									<div class="info-txt">
										<?php echo wp_kses_post( get_field('mc_txt_1')); ?>
									</div>
								</div>
								<div class="card-contact-info wow fadeInRight" data-wow-delay="0.5s">
									<div class="info-icono bg-texture-orange">
										<img loading="lazy" src="<?php echo wp_kses_post( get_field('mc_icono_2')); ?>" width="50" height="50" alt="" title="">
									</div>	
									<div class="info-txt">
										<?php echo wp_kses_post( get_field('mc_txt_2')); ?>
									</div>
								</div>
								<div class="card-contact-info wow fadeInRight" data-wow-delay="0.6s">
									<div class="info-icono bg-texture-orange">
										<img loading="lazy" src="<?php echo wp_kses_post( get_field('mc_icono_3')); ?>" width="50" height="50" alt="" title="">
									</div>	
									<div class="info-txt">
										<?php echo wp_kses_post( get_field('mc_txt_3')); ?>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-8 col-b">
								<div class="pb20">
									<?php the_content(); ?>
								</div>
								<div class="contact-box">
									<?php echo do_shortcode('[contact-form-7 id="44fe407" title="Contacto"]'); ?>
								</div>	
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>	
	</section>
	<section class="map pb80 pt80 wow fadeInRUp" data-wow-delay="0.2s">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php echo get_post_meta($post->ID,'map',true); ?>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>