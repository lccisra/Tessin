<?php /*Template Name: Construction*/ ?>
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
				<div class="col-md-7 col-lg-8 bullets">
					<div class="service-single-img wow fadeIn mb40" data-wow-delay="0.2s">
						<div class="path"></div>
						<div class="bg-texture-orange icono-single-service wow fadeInUp" data-wow-delay="0.4s">
							<img loading="lazy" src="<?php echo wp_kses_post( get_field('serv_icono')); ?>" width="60" height="60" alt="" title="">
						</div>
						<img loading="lazy" src="<?php echo wp_kses_post( get_field('serv_img')); ?>" width="" height="" alt="" title="">
					</div>
					<?php the_content(); ?>
					<div class="sectors bg-texture-gray center rounded15 mt40 p40">
						<p class="subtitle"><?php echo wp_kses_post( get_field('sect_subtitle')); ?></p>
						<h3><?php echo wp_kses_post( get_field('sect_title')); ?></h3>
						<ul class="sect pt40">
							<li>
								<div class="icono">
									<img loading="lazy" src="<?php echo wp_kses_post( get_field('sect_icono_1')); ?>" width="40" height="40" alt="Naves industriales para empresas" title="Naves industriales para empresas">
								</div>
								<?php echo wp_kses_post( get_field('sect_name_1')); ?>
							</li>
							<li>
								<div class="icono">
									<img loading="lazy" src="<?php echo wp_kses_post( get_field('sect_icono_2')); ?>" width="40" height="40" alt="Naves industriales Industrias" title="Naves industriales para Industrias">
								</div>
								<?php echo wp_kses_post( get_field('sect_name_2')); ?>
							</li>
							<li>
								<div class="icono">
									<img loading="lazy" src="<?php echo wp_kses_post( get_field('sect_icono_3')); ?>" width="40" height="40" alt="Naves industriales para Fábricas" title="Naves industriales para Fábricas">
								</div>
								<?php echo wp_kses_post( get_field('sect_name_3')); ?>
							</li>
							<li>
								<div class="icono">
									<img loading="lazy" src="<?php echo wp_kses_post( get_field('sect_icono_4')); ?>" width="40" height="40" alt="Naves industriales para Centros Comerciales" title="Naves industriales para Centros Comerciales">
								</div>
								<?php echo wp_kses_post( get_field('sect_name_4')); ?>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-5 col-lg-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>