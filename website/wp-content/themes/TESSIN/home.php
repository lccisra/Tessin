<?php /*Template Name: Home*/ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="col-md-12 col-lg-6 wow fadeIn" data-wow-delay="0.2s"></div>

	<section class="herobanner relative mt-site">
		<div class="path"></div>
		<div class="path crb"></div>
		<div class="path crt"></div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
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


  
<?php endwhile; endif; ?>
<?php get_footer(); ?>