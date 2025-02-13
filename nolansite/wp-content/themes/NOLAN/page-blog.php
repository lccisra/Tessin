<?php /*Template Name: Blog*/ ?>
<?php get_header('flat'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="mt-site pt80 pb80">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<h1 class="center"><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>