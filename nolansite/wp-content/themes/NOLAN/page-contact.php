<?php /*Template Name: Contact*/ ?>
<?php get_header('flat'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="mt-site pt80 pb80">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="box-contact">
						<div class="row">
							<div class="col-md-12 col-lg-7 wow fadeIn" data-wow-delay="0.2s">
								<div class="contact-form">
									<?php the_content(); ?>
									<?php echo do_shortcode('[contact-form-7 id="e58299a" title="Contacto"]'); ?>
								</div>
							</div>
							<div class="col-md-12 col-lg-5 txt-right contact-img wow fadeInRight" data-wow-delay="0.2s">
								<?php echo get_the_post_thumbnail(get_the_ID()); ?>
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