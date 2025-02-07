<?php /*Template Name: Home*/ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


		<section class="herobanner relative mt-site wow fadeIn" data-wow-delay="0.2s">
			<div class="path"></div>
			<div class="path crb"></div>
			<div class="path crt"></div>
			<a href="#intro" class="page-scroll">SCROLL DOWN <i class="bi bi-arrow-right"></i></a>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 container-caption">
						<div class="caption">
							<div class="container">
								<div class="row">
									<div class="col-md-9">
										<div class="wow fadeInLeft" data-wow-delay="0.4s">
											<?php echo wp_kses_post( get_field('stage_txt')); ?>
										</div>
										<div class="herobanner-btns wow fadeInLeft" data-wow-delay="0.7s">
											<a href="" class="btn">Servicios <i class="bi bi-arrow-right-short"></i></a>
											<a href="" class="btn white">Nosotros <i class="bi bi-arrow-right-short"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="slider-for">
							<div class="img-cover"><img src="<?php echo wp_kses_post( get_field('stage_img_1')); ?>" width="" height="" alt="" title=""></div>
							<div class="img-cover"><img src="<?php echo wp_kses_post( get_field('stage_img_2')); ?>" width="" height="" alt="" title=""></div>
							<div class="img-cover"><img src="<?php echo wp_kses_post( get_field('stage_img_3')); ?>" width="" height="" alt="" title=""></div>
						</div>
						<div class="slider-nav">
							<div class="slider-nav-item img-cover"><img src="<?php echo wp_kses_post( get_field('stage_img_1')); ?>" width="" height="" alt="" title=""></div>
							<div class="slider-nav-item img-cover"><img src="<?php echo wp_kses_post( get_field('stage_img_2')); ?>" width="" height="" alt="" title=""></div>
							<div class="slider-nav-item img-cover"><img src="<?php echo wp_kses_post( get_field('stage_img_3')); ?>" width="" height="" alt="" title=""></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="pt80 pb80" id="intro">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="intro-img relative">
							<div class="path crt"></div>
							<div class="bg-texture-orange card-years wow fadeInUp" data-wow-delay="0.4s">
								<div class="year-numb">
									<div class="count" style="--tonum:<?php echo wp_kses_post( get_field('years_num')); ?>"></div>
								</div>
								<div class="year-txt">
									<?php echo wp_kses_post( get_field('years_txt')); ?>	
								</div>
							</div>
							<img loading="lazy" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID )); ?>" class="rounded15" width="" height="" alt="" title="">
						</div>	
					</div>
					<div class="col-md-8 intro-txt wow fadeIn" data-wow-delay="0.4s">
						<?php the_content(); ?>
						<div class="btns pt20 d-flex">
							<a href="" class="btn">Conocer más <i class="bi bi-arrow-right-short"></i></a>
							<a href="" class="call"><span>Llámanos</span>+52 81 2620 5789</a>
						</div>
					</div>
				</div>
			</div>
		</section>

  
<?php endwhile; endif; ?>
<?php get_footer(); ?>