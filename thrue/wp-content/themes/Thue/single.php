<?php get_header('flat'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="mt-site pt80 pb60">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="single-image">	
						<img loading="lazy" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php the_title(); ?>" title="	<?php the_title(); ?>" width="825" height="390">
						<div class="caption">
							<ul class="entry-meta">
                <li class="icon-calendar"><?php echo get_the_date('d/m/Y'); ?></li>
                <li class="icon-tag">  <?php echo get_the_tag_list('',', ',''); ?></li>
              </ul>
						</div>
					</div>
					<div class="pt30 bullets">
						<h1 class="h3 pb20"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
				</div>
				<div class="col-md-3">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>