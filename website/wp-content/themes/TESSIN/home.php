<?php /*Template Name: Home*/ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="herobanner relative mt-site wow fadeIn" data-wow-delay="0.2s">
		<div class="path"></div>
		<div class="path crb"></div>
		<div class="path crt"></div>
		<a href="#intro" class="page-scroll">SCROLL DOWN <i class="bi bi-arrow-right"></i></a>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 container-caption">
					<div class="caption">
						<div class="container">
							<div class="row">
								<div class="col-md-9">
									<div class="wow fadeInLeft" data-wow-delay="0.4s">
										<?php echo wp_kses_post( get_field('stage_txt')); ?>
									</div>
									<div class="herobanner-btns wow fadeInLeft" data-wow-delay="0.7s">
										<a href="" class="btn">Servicios <i class="bi bi-arrow-right-short"></i></a>
										<a href="" class="btn white">Nosotros <i class="bi bi-arrow-right-short"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slider-for">
						<div class="img-cover"><img src="<?php echo wp_kses_post( get_field('stage_img_1')); ?>" width="" height="" alt="" title=""></div>
						<div class="img-cover"><img src="<?php echo wp_kses_post( get_field('stage_img_2')); ?>" width="" height="" alt="" title=""></div>
						<div class="img-cover"><img src="<?php echo wp_kses_post( get_field('stage_img_3')); ?>" width="" height="" alt="" title=""></div>
					</div>
					<div class="slider-nav">
						<div class="slider-nav-item img-cover"><img src="<?php echo wp_kses_post( get_field('stage_img_1')); ?>" width="" height="" alt="" title=""></div>
						<div class="slider-nav-item img-cover"><img src="<?php echo wp_kses_post( get_field('stage_img_2')); ?>" width="" height="" alt="" title=""></div>
						<div class="slider-nav-item img-cover"><img src="<?php echo wp_kses_post( get_field('stage_img_3')); ?>" width="" height="" alt="" title=""></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="pt80 pb80" id="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="intro-img relative">
						<div class="path crt"></div>
						<div class="bg-texture-orange card-years wow fadeInUp" data-wow-delay="0.4s">
							<div class="year-numb">
								<div class="count" style="--tonum:<?php echo wp_kses_post( get_field('years_num')); ?>"></div>
							</div>
							<div class="year-txt">
								<?php echo wp_kses_post( get_field('years_txt')); ?>	
							</div>
						</div>
						<img loading="lazy" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID )); ?>" class="rounded15" width="" height="" alt="" title="">
					</div>	
				</div>
				<div class="col-md-8 intro-txt wow fadeIn" data-wow-delay="0.4s">
					<?php the_content(); ?>
					<div class="btns pt20 d-flex">
						<a href="" class="btn">Conocer más <i class="bi bi-arrow-right-short"></i></a>
						<a href="" class="call"><span>Llámanos</span>+52 81 2620 5789</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-structure pb20">
		<div class="container">
			<div class="wor">
				<div class="col-md-12 pb20">
					<?php echo wp_kses_post( get_field('serv_txt')); ?>
				</div>
				<div class="col-md-12 pb80">
					<!---->
					<div class="services">
					<?php $args = array('post_type'=>'page','posts_per_page'=> -1,'post_parent'=>19,'orderby'=>'date','order'=>'DESC'); ?>
					<?php $parent = new WP_Query($args); ?>
					<?php if($parent->have_posts()): while($parent->have_posts()): $parent->the_post(); ?>
					<a href="<?php the_permalink(); ?>">	
						<div>
							<div class="card-service">
								<img loading="lazy" src="<?php echo wp_kses_post( get_field('serv_icono_orange')); ?>" class="icono" width="60" height="60" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
								<h4><?php the_title(); ?></h4>
								<?php echo wp_kses_post( get_field('serv_intro')); ?>
								<span class="more">Leer más <i class="bi bi-arrow-right-short"></i></span>
							</div>
						</div>	
					</a>	
					<?php the_title(); ?>
					<?php endwhile; endif; wp_reset_postdata(); ?>
					<!---->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="item-num">
						<div class="year-numb">
							<div class="count" style="--tonum:<?php echo wp_kses_post( get_field('num_1')); ?>"></div>
						</div>
						<div class="year-txt">
							<?php echo wp_kses_post( get_field('num_txt_1')); ?>	
						</div>
					</div>	
				</div>
				<div class="col-md-3">
					<div class="item-num">
						<div class="year-numb">
							<div class="count" style="--tonum:<?php echo wp_kses_post( get_field('num_2')); ?>"></div>
						</div>
						<div class="year-txt">
							<?php echo wp_kses_post( get_field('num_txt_2')); ?>	
						</div>
					</div>	
				</div>
				<div class="col-md-3">
					<div class="item-num">
						<div class="year-numb">
							<div class="count" style="--tonum:<?php echo wp_kses_post( get_field('num_3')); ?>"></div>
						</div>
						<div class="year-txt">
							<?php echo wp_kses_post( get_field('num_txt_3')); ?>	
						</div>
					</div>	
				</div>
				<div class="col-md-3">
					<div class="item-num">
						<div class="year-numb">
							<div class="count" style="--tonum:<?php echo wp_kses_post( get_field('num_4')); ?>"></div>
						</div>
						<div class="year-txt">
							<?php echo wp_kses_post( get_field('num_txt_4')); ?>	
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<section class="pt80 pb80">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="banner img-cover rounded15">
						<div class="path"></div>
						<img loading="lazy" src="<?php echo wp_kses_post( get_field('banner_bg')); ?>" width="1400" height="402" alt="Nave industrial" title="Nave industrial">
						<div class="relative">
							<img loading="lazy" src="<?php echo wp_kses_post( get_field('banner_isotipo')); ?>" class="isotipo wow bounceIn" width="52" height="60" alt="isotipo tessin" title="isotipo tessin" data-wow-delay="0.2s">
							<div class="wow fadeIn" data-wow-delay="0.2s">
								<?php echo wp_kses_post( get_field('banner_txt')); ?>
							</div>
						</div>
						<div class="btns wow fadeInUp" data-wow-delay="0.2s">
							<ul>
								<li><a title="Contáctanos" href="" class="btn">Contáctanos <i class="bi bi-arrow-right-short"></i></a></li>
								<li><a title="Conócenos" href="" class="btn dark">Conócenos <i class="bi bi-arrow-right-short"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
  
<?php endwhile; endif; ?>
<?php get_footer(); ?>