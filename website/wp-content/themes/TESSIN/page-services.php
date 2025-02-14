<?php /*Template Name: Services*/ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="mt-site wow fadeIn" data-wow-delay="0.2s">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="img-cover stage-medium">
						<div class="path"></div>
						<div class="path crt"></div>
						<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID )); ?>" width="1400" height="360" alt="<?php the_title(); ?> tessin naves industriales" title="<?php the_title(); ?> tessin naves industriales">
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
				<div class="col-md-10 intro">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="pb40">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php $args = array('post_type'=>'page','posts_per_page'=> -1,'post_parent'=>19,'orderby'=>'date','order'=>'DESC'); ?>
					<?php $parent = new WP_Query($args); ?>
					<?php $i=0; if($parent->have_posts()): while($parent->have_posts()): $parent->the_post(); $i++; ?>
					<div class="row row-service reverse-md">	
						<?php if($i%2 == 1) { ?>
						<div class="col-md-5 wow fadeInRight" data-wow-delay="0.2s">
							<a href="<?php the_permalink(); ?>">
								<div class="card-single-img img-cover rounded15">
									<img loading="lazy" src="<?php echo wp_kses_post( get_field('serv_img')); ?>" width="500" height="450" alt="tessin <?php the_title(); ?>" title="tessin <?php the_title(); ?>">
								</div>
							</a>	
						</div>
						<div class="col-md-5 txt d-flex wow fadeInLeft" data-wow-delay="0.2s">
							<div class="bg-texture-orange icono-single-service relative">
								<img loading="lazy" src="<?php echo wp_kses_post( get_field('serv_icono')); ?>" width="60" height="60" alt="mexico <?php the_title(); ?>" title="mexico <?php the_title(); ?>">
							</div>
							<h2 class="h3"><?php the_title(); ?></h2>
							<?php echo wp_kses_post( get_field('serv_intro')); ?>
							<a href="<?php the_permalink(); ?>" class="btn dark">Conocer más <i class="bi bi-arrow-right-short"></i></a>
						</div>
						<div class="col-md-5"></div>
						<?php }else{ ?>	
						<div class="col-md-5 txt d-flex wow fadeInRight col-a" data-wow-delay="0.2s">
							<a href="<?php the_permalink(); ?>">
								<div class="bg-texture-orange icono-single-service relative">
									<img loading="lazy" src="<?php echo wp_kses_post( get_field('serv_icono')); ?>" width="60" height="60" alt="mexico <?php the_title(); ?>" title="mexico <?php the_title(); ?>">
								</div>
							</a>	
							<h2 class="h3"><?php the_title(); ?></h2>
							<?php echo wp_kses_post( get_field('serv_intro')); ?>
							<a href="<?php the_permalink(); ?>" class="btn dark">Conocer más <i class="bi bi-arrow-right-short"></i></a>
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-5 wow fadeInLeft col-b" data-wow-delay="0.2s">
							<div class="card-single-img img-cover rounded15">
								<img loading="lazy" src="<?php echo wp_kses_post( get_field('serv_img')); ?>" width="500" height="450" alt="tessin <?php the_title(); ?>" title="tessin <?php the_title(); ?>">
							</div>
						</div>
						<?php } ?>	
					</div>	
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="pb80">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="pt80 process bg-texture-gray rounded15">
						<div class="row">
							<div class="col-md-12 col-xl-8 wow fadeInLeft" data-wow-delay="0.2s">
								<p class="subtitle"><?php echo wp_kses_post( get_field('process_subtitle')); ?></p>
								<?php echo wp_kses_post( get_field('process_txt')); ?>
							</div>
							<ol>
								<li class="wow fadeIn" data-wow-delay="0.2s">
									<i class="arrow wow"></i>
									<?php echo wp_kses_post( get_field('item_process_1')); ?>
								</li>
								<li class="wow fadeIn" data-wow-delay="0.4s">
									<i class="arrow top">
									</i><?php echo wp_kses_post( get_field('item_process_2')); ?>
								</li>
								<li class="wow fadeIn" data-wow-delay=".6s">
									<i class="arrow wow"></i>
									<?php echo wp_kses_post( get_field('item_process_3')); ?>
								</li>
								<li class="wow fadeIn" data-wow-delay=".8s">
									<?php echo wp_kses_post( get_field('item_process_4')); ?>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>