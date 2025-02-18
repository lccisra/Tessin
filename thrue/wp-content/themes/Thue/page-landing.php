<?php /*Template Name: Landing Page*/ ?>
<?php get_header('flat'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="mt-site pt80 pb80">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="single-image">	
						<img loading="lazy" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php the_title(); ?>" title="	<?php the_title(); ?>" width="1110" height="360">
					</div>
					<div class="pt30 pb20 bullets">
						<h1 class="h3 pb20"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
					<div>
						<div class="acc bullets">
					    <div class="acc__card">
					      <div class="acc__title"><?php the_field('title_tab_1'); ?></div>
					      <div class="acc__panel">
					        <?php the_field('txt_tab_1'); ?>
					      </div>
					    </div>
					    <div class="acc__card">
					      <div class="acc__title"><?php the_field('title_tab_2'); ?></div>
					      <div class="acc__panel">
					       <?php the_field('txt_tab_2'); ?>
					      </div>
					    </div>
					    <div class="acc__card">
					      <div class="acc__title"><?php the_field('title_tab_3'); ?></div>
					      <div class="acc__panel">
					        <?php the_field('txt_tab_3'); ?>
					      </div>
					    </div>
					    <div class="acc__card">
					      <div class="acc__title"><?php the_field('title_tab_4'); ?></div>
					      <div class="acc__panel">
					        <?php the_field('txt_tab_4'); ?>
					      </div>
					    </div>
					    <div class="acc__card">
					      <div class="acc__title"><?php the_field('title_tab_5'); ?></div>
					      <div class="acc__panel">
					        <?php the_field('txt_tab_5'); ?>
					      </div>
					    </div>
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