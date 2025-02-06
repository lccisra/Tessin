<?php /*Template Name: Contact*/ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="herobanner-medium mt-site img-cover">
		<?php echo get_the_post_thumbnail(get_the_ID()); ?>
		<div class="container">
			<div class="row">
				<div class="col-md-12 caption">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>	
		</div>
		<div class="container breadcrumb">
			<div class="row">
				<div class="col-md-12">
					<?php if(function_exists('bcn_display')) { bcn_display(); } ?>
				</div>
			</div>	
		</div>
	</section>
	<section class="pt-80 pb-80 bg-isotipo-gray">
		<div class="container">
			<div class="row reverse-md">
				<div class="col-md-5 google-map col-a">
					<?=get_post_meta(14,'google_map', true)?>
				</div>
				<div class="col-md-7 col-b">
					<div class="contact-box bg-blue">
						<div class="title"><?php the_content(); ?></div>
						<div class="form">
							<?php echo do_shortcode('[contact-form-7 id="5" title="Contacto"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>