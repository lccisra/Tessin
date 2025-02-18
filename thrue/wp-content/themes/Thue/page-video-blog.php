<?php /*Template Name: Video Blog*/ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="stage-medium img-cover">
		<img loading="lazy" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" width="1280" height="360">
		<div class="container">
			<div class="row">
				<div class="col-md-12 wow fadeInLeft" data-wow-delay="0.2s">
					<h1><?php the_title(); ?></h1>
					<div class="brdcrmb">
						<?php if(function_exists('bcn_display')) { bcn_display(); } ?>
					</div>
				</div>
			</div>
		</div>		
	</section>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

	<section class="pt40 pb50 wow fadeIn" data-wow-delay="0.2s">
		<div class="container">
			<div class="row">
				<?php $args = array('numberposts' => -1,'post_type'=> 'v-blog'); $the_query = new WP_Query( $args ); ?>
        <?php if($the_query->have_posts()): while( $the_query->have_posts()) : $the_query->the_post(); ?>
				<div class="col-md-4 pb30">
					<a href="<?php the_field('link_youtube_v_blog'); ?>" class="video-blog-item fancybox-media">
						<div class="video-blog-item-img img-cover">
							<img loading="lazy" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" width="315" height="240">
						</div>	
						<div class="caption">
							<i class="icon-play"></i>
							<p class="date"><?php echo get_the_date('d/m/Y'); ?></p>
							<h2 class="h4"><?php the_title(); ?></h2>
						</div>
					</a>
				</div>
				<?php endwhile; endif; ?>
			</div>
		</div>	
	</section>

<?php get_footer(); ?>