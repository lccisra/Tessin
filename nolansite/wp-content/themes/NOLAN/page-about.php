<?php /*Template Name: About*/ ?>
<?php get_header('flat'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="img-cover pt80">
		<img src="<?php echo wp_kses_post( get_field('about_background')); ?>" width="1300" height="1180" alt="Nosotros Nolan" title="Nosotros Nolan"> 
		<div class="container relative">
			<div class="row pt80">
				<div class="col-md-4 d-flex flex-column justify-content-center wow fadeInRight" data-wow-delay="0.2s">
					<?php the_content(); ?>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-6 center wow fadeInUp" data-wow-delay="0.2s">
					<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID )); ?>" width="525" height="468" alt="Somos Nolan" title="Somos Nolan">
				</div>
				<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
					<img src="<?php echo wp_kses_post( get_field('team_img')); ?>" width="550" height="480" alt="Equipo Nolan" title="Equipo Nolan">
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-4 txt-right d-flex flex-column justify-content-center wow fadeInLeft" data-wow-delay="0.2s">>
					<?php echo wp_kses_post( get_field('team_txt')); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="pt80 pb80 bg-n">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
					<?php echo wp_kses_post( get_field('compromise_txt')); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="pt80 pb80 ">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					Servivios
				</div>
			</div>
		</div>
	</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>