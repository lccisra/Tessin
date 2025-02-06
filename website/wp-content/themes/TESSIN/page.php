<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="mt-site pb-80">
		<div class="container">
			<div class="row">
				<div class="col-md-12 pt-80">
					<h1 class="h2 center"><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>