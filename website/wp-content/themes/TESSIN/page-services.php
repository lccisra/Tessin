<?php /*Template Name: Services*/ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<section class="container-fluid">
		<div class="path"></div>
		<div class="path crb"></div>
		<div class="path crt"></div>
		
		<div class="img-cover stage-medium">
			<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID )); ?>" width="" height="" alt="" title="">
			<div class="row">
				<div class="col-md-12">
					
				</div>
			</div>
		</div>
	</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>