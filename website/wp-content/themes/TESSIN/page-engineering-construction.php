<?php /*Template Name: Engineering and construction*/ ?>
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
	<section class="pt80 pb80">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-lg-8 bullets">
					<div class="service-single-img wow fadeIn mb40" data-wow-delay="0.2s">
						<div class="path"></div>
						<div class="bg-texture-orange icono-single-service wow fadeInUp" data-wow-delay="0.4s">
							<img loading="lazy" src="<?php echo wp_kses_post( get_field('serv_icono')); ?>" width="60" height="60" alt="" title="">
						</div>
						<img loading="lazy" src="<?php echo wp_kses_post( get_field('serv_img')); ?>" width="" height="" alt="" title="">
					</div>
					<?php the_content(); ?>
					<div class="accordion accordion-flush bg-light" id="accordionFlushExample">
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="flush-headingOne">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
					        <?php echo wp_kses_post( get_field('acc_title_1')); ?>
					      </button>
					    </h2>
					    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body"><?php echo wp_kses_post( get_field('acc_txt_1')); ?></div>
					    </div>
					  </div>
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="flush-headingTwo">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
					      	<?php echo wp_kses_post( get_field('acc_title_2')); ?>
					      </button>
					    </h2>
					    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body"><?php echo wp_kses_post( get_field('acc_txt_2')); ?></div>
					    </div>
					  </div>
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="flush-headingThree">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
					        <?php echo wp_kses_post( get_field('acc_title_3')); ?>
					      </button>
					    </h2>
					    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body"><?php echo wp_kses_post( get_field('acc_txt_3')); ?></div>
					    </div>
					  </div>
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="flush-headingFour">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
					        <?php echo wp_kses_post( get_field('acc_title_4')); ?>
					      </button>
					    </h2>
					    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body"><?php echo wp_kses_post( get_field('acc_txt_4')); ?></div>
					    </div>
					  </div>
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="flush-headingFive">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
					        <?php echo wp_kses_post( get_field('acc_title_5')); ?>
					      </button>
					    </h2>
					    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body"><?php echo wp_kses_post( get_field('acc_txt_5')); ?></div>
					    </div>
					  </div>
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="flush-headingSix">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
					        <?php echo wp_kses_post( get_field('acc_title_6')); ?>
					      </button>
					    </h2>
					    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body"><?php echo wp_kses_post( get_field('acc_txt_6')); ?></div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="col-md-5 col-lg-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>