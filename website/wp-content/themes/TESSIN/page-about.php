<?php /*Template Name: About*/ ?>
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
	<section class="pt80 pb50">
		<div class="container">
			<div class="row reverse-md">
				<div class="col-md-6 pb30 col-a">
					<div class="intro-img img-cover intro-about relative wow fadeInUp" data-wow-delay="0.4s">
						<div class="path crt"></div>
						<div class="path crb"></div>
						<div class="bg-texture-orange card-years wow fadeInDown" data-wow-delay="0.4s">
							<div class="year-numb">
								<div class="count" style="--tonum:<?php echo wp_kses_post( get_field('year_numer_about')); ?>"></div>
							</div>
							<div class="year-txt">
								<?php echo wp_kses_post( get_field('year_txt_about')); ?>	
							</div>
						</div>
						<img loading="lazy" src="<?php echo wp_kses_post( get_field('year_img_about_1')); ?>" class="rounded15 first-image" width="416" height="686" alt="Acerca de Tessin constructora de naves industriales" title="Acerca de Tessin constructora de naves industriales">
						<div class="img-cover second-image">
							<img loading="lazy" src="<?php echo wp_kses_post( get_field('year_img_about_2')); ?>" class="rounded15" width="416" height="686" alt="Acerca de Tessin constructora de naves industriales" title="Acerca de Tessin constructora de naves industriales">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-b txt-about pt40 pb30 bullets wow fadeIn" data-wow-delay="0.4s">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
	<section >
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="bg-texture-gray rounded15 numerals">
						<div class="row">
							<div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
								<div class="item-num">
									<div class="year-numb">
										<div class="count" style="--tonum:<?php echo wp_kses_post( get_field('numeral_num_1')); ?>"></div>
									</div>
									<div class="year-txt">
										<?php echo wp_kses_post( get_field('numeral_txt_1')); ?>	
									</div>
								</div>	
							</div>
							<div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
								<div class="item-num">
									<div class="year-numb">
										<div class="count" style="--tonum:<?php echo wp_kses_post( get_field('numeral_num_2')); ?>"></div>
									</div>
									<div class="year-txt">
										<?php echo wp_kses_post( get_field('numeral_txt_2')); ?>	
									</div>
								</div>	
							</div>
							<div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
								<div class="item-num">
									<div class="year-numb">
										<div class="count" style="--tonum:<?php echo wp_kses_post( get_field('numeral_num_3')); ?>"></div>
									</div>
									<div class="year-txt">
										<?php echo wp_kses_post( get_field('numeral_txt_3')); ?>	
									</div>
								</div>	
							</div>
							<div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
								<div class="item-num">
									<div class="year-numb">
										<div class="count" style="--tonum:<?php echo wp_kses_post( get_field('numeral_num_4')); ?>"></div>
									</div>
									<div class="year-txt">
										<?php echo wp_kses_post( get_field('numeral_txt_4')); ?>	
									</div>
								</div>	
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<section class="pt80 pb40">
		<div class="container">
			<div class="row">
				<div class="col-md-6 pb40 wow fadeIn" data-wow-delay="0.2s">
					<div class="pb20">
						<p class="subtitle"><?php echo wp_kses_post( get_field('second_subtitle')); ?></p>
						<?php echo wp_kses_post( get_field('second_txt')); ?>
					</div>
					<div class="accordion ab accordion-flush" id="accordionFlushExample">
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="flush-headingOne">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
					        <?php echo wp_kses_post( get_field('mision_title')); ?>
					      </button>
					    </h2>
					    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body"><?php echo wp_kses_post( get_field('mision_txt')); ?></div>
					    </div>
					  </div>
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="flush-headingTwo">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
					      	<?php echo wp_kses_post( get_field('vision_title')); ?>
					      </button>
					    </h2>
					    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body"><?php echo wp_kses_post( get_field('vision_txt')); ?></div>
					    </div>
					  </div>
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="flush-headingThree">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
					        <?php echo wp_kses_post( get_field('value_title')); ?>
					      </button>
					    </h2>
					    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
					      <div class="accordion-body"><?php echo wp_kses_post( get_field('value_txt')); ?></div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="col-md-6 wow fadeInUp" data-wow-delay="0.4s">
					<img loading="lazy" src="<?php echo wp_kses_post( get_field('second_img')); ?>" class="rounded15" width="610" height="480" alt="Tessin compromiso constante" title="Tessin compromiso constante">
				</div>
			</div>
		</div>
	</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>