<?php /*Template Name: Projects*/ ?>
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
	<section class="pt80 pb60 wow fadeIn" data-wow-delay="0.4s">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-10 col-md-12 intro">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="pb40">
		<div class="container">
			<div class="row">
				<div class="col-6 col-lg-3 sector-item wow fadeInLeft" data-wow-delay="0.2s">
					<img loading="lazy" src="<?php echo wp_kses_post( get_field('sector_icono_1')); ?>" width="60" height="60" alt="sector industrial" title="sector industria">
					<div class="txt"><?php echo wp_kses_post( get_field('sector_name_1')); ?></div>
				</div>
				<div class="col-6 col-lg-3 sector-item wow fadeInLeft" data-wow-delay="0.3s">
					<img loading="lazy" src="<?php echo wp_kses_post( get_field('sector_icono_2')); ?>" width="60" height="60" alt="sector inmobiliario" title="sector inmobiliario">
					<div class="txt"><?php echo wp_kses_post( get_field('sector_name_2')); ?></div>
				</div>
				<div class="col-6 col-lg-3 sector-item wow fadeInLeft" data-wow-delay="0.4s">
					<img loading="lazy" src="<?php echo wp_kses_post( get_field('sector_icono_3')); ?>" width="60" height="60" alt="sector metálico" title="sector metálico">
					<div class="txt"><?php echo wp_kses_post( get_field('sector_name_3')); ?></div>
				</div>
				<div class="col-6 col-lg-3 sector-item wow fadeInLeft" data-wow-delay="0.5s">
					<img loading="lazy" src="<?php echo wp_kses_post( get_field('sector_icono_4')); ?>" width="60" height="60" alt="sector logístico" title="sector logístico">
					<div class="txt"><?php echo wp_kses_post( get_field('sector_name_4')); ?></div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<?php $query = new WP_Query(['post_type' => 'projects']); ?> 
				<?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
				<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
					<a href="<?php echo wp_kses_post( get_field('video_youtube')); ?>" class="fancybox-media">
						<div class="card-project">
							<div class="project-img img-cover">
								<?php echo get_the_post_thumbnail(get_the_ID()); ?>
							</div>
							<div class="project-desc">
								<span class="btn-circle"><i class="bi bi-arrow-right-short"></i></span>
								<h3 class="h4"><?php the_title(); ?></h3>
								<?php the_content(); ?>
							</div>
						</div>
					</a>	
				</div>
				<?php endwhile; wp_reset_postdata(); endif; ?>
			</div>
		</div>
	</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>