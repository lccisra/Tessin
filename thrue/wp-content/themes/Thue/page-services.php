<?php /*Template Name: Servicios*/ ?>
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
	<section class="pt80">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="intro">
						<?php the_content(); ?>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<?php endwhile; endif; ?>
	<section class="pb40">
		<div class="container">
			<div class="row">
				<?php $args = array('numberposts' => -1,'post_type'=> 'services'); $the_query = new WP_Query($args); ?>
        <?php $i=0; if($the_query->have_posts()): while( $the_query->have_posts()) : $the_query->the_post(); $i++; ?>
        <div class="col-md-12 mb40" id="<?php the_field('id'); ?>">
          <div class="item-service <?php if($i%2==0){echo'item-reverse';}?>">
          	<div class="item-service img-item-service img-cover wow fadeInRight" data-wow-delay="0.2s">
          		<img loading="lazy" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" width="570" height="400">
          		<div class="service-icon">
	              <img src="<?php the_field('icono_service'); ?>" width="40" height="40" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
	            </div>
          	</div>
          	<div class="txt-item-service wow fadeInLeft" data-wow-delay="0.2s">
          		<h2 class="h3"><?php the_title(); ?></h2>
          		<?php the_content(); ?>
          	</div>
          </div>
        </div>
        <?php endwhile; endif; ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>