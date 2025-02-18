<?php get_header(); ?>
	<section class="stage-medium img-cover">
		<img loading="lazy" src="<?php echo z_taxonomy_image_url('2'); ?>" title="<?php the_title(); ?>" width="1280" height="360">
		<div class="container">
			<div class="row">
				<div class="col-md-12 wow fadeInLeft" data-wow-delay="0.2s">
					<h1><?php echo single_cat_title(); ?></h1>
					<div class="brdcrmb">
						<?php if(function_exists('bcn_display')) { bcn_display(); } ?>
					</div>
				</div>
			</div>
		</div>		
	</section>
	<section class="pt60 pb60">
		<div class="container">
			<div class="row">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="col-md-6">
					<a href="<?php the_permalink(); ?>" class="item-blog img-cover">
            <img loading="lazy" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" width="490" height="490">
            <div class="caption">
              <h3><?php the_title(); ?></h3>
              <ul class="entry-meta">
                <li class="icon-calendar"><?php echo get_the_date('d/m/Y'); ?></li>
                <li class="icon-tag"> <?php echo strip_tags(get_the_tag_list('',' , ','')); ?> <?php //echo get_the_tag_list('',', ',''); ?></li>
              </ul>
              <p><?php echo get_the_excerpt(); ?></p>
              <div class="read-more">Seguir leyendo <i class="icon-cta-arrow"></i></div>
            </div>
          </a>
				</div>
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
				<div class="col-md-12">
					<?php if(function_exists('wp_paginate')): wp_paginate(); endif;?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>