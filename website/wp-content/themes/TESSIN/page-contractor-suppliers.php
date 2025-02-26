<?php /*Template Name: Contractor and suppliers*/ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="mt-site wow fadeIn" data-wow-delay="0.2s">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="img-cover stage-medium">
						<div class="path"></div>
						<div class="path crt"></div>
						<?php echo get_the_post_thumbnail(get_the_ID()); ?>
						<div class="container">
							<div class="row">
								<div class="col-md-12 caption">
									<div class="wow fadeInLeft" data-wow-delay="0.4s">
										<h1><?php the_title(); ?></h1>
									</div>	
									<div class="brdcrmb">
										<div class="wow fadeInUp" data-wow-delay="0.4s">	
											<?php if(function_exists('bcn_display')) {bcn_display();} ?>
										</div>	
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="pt80 intro">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-10">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="pt20 pb20">
		<div class="container">
			<div class="row">
				<div class="col-md-12 bullets">
					<?php echo wp_kses_post( get_field('contractor_txt')); ?>	
				</div>
			</div>
		</div>
	</section>
	<section class="pb80">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!---->
					<div class="accordion accordion-flush bg-light" id="accordionFlushExample">
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="flush-headingOne">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
					        <?php echo wp_kses_post( get_field('tab_title_1')); ?>
					      </button>
					    </h2>
					    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body"><?php echo do_shortcode('[contact-form-7 id="d8ce7a0" title="Proveedor"]'); ?></div>
					    </div>
					  </div>
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="flush-headingTwo">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
					      	<?php echo wp_kses_post( get_field('tab_title_2')); ?>
					      </button>
					    </h2>
					    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body">Formulario</div>
					    </div>
					  </div>
					</div>
					<!---->	
				</div>
			</div>
		</div>
	</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>