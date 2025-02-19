<?php /*Template Name: Industrial maintenance*/ ?>
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
									<div class="brdcrmb">
										<div class="wow fadeInUp" data-wow-delay="0.4s">	
											<?php if(function_exists('bcn_display')) {bcn_display();} ?>
										</div>	
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="pt80 pb80">
		<div class="container">
			<div class="row">
				<div class="col-md-8 bullets">
					<div class="service-single-img wow fadeIn mb40" data-wow-delay="0.2s">
						<div class="path"></div>
						<div class="bg-texture-orange icono-single-service wow fadeInUp" data-wow-delay="0.4s">
							<img loading="lazy" src="<?php echo wp_kses_post( get_field('serv_icono')); ?>" width="60" height="60" alt="" title="">
						</div>
						<img loading="lazy" src="<?php echo wp_kses_post( get_field('serv_img')); ?>" width="" height="" alt="" title="">
					</div>
					<?php the_content(); ?>
					
				</div>
				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>