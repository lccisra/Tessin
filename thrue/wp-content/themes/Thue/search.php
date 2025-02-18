<?php get_header('flat'); ?>
	<section class="mt-site pt60 pb80">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="h4"><?php printf( __( 'Resultados de la búsqueda de: %s', 'shape' ), '<span class="txt-yellow">' . get_search_query() . '</span>' ); ?></h1>
				</div>
				<div class="col-md-12">
					<?php get_search_form(); ?>
				</div>
				<div class="col-md-12 bullets">
					<ul class="result">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<strong><?php the_title(); ?><br></strong>
								<?php echo get_the_excerpt(); ?>	
							</a>
						</li>
					<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</section>


<?php get_footer(); ?>