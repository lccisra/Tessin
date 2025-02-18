<?php /*Template Name: Newsletter*/ ?>
<?php get_header('flat'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="mt-site pt60 pb80">
		<div class="container">
			<div class="row">
				<div class="col-md-12 newsletter-form">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>