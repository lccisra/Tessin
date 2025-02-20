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
										<a href="<?php the_permalink('19'); ?>" class="btn">Servicios <i class="bi bi-arrow-right-short"></i></a>
										<a href="<?php the_permalink('23'); ?>" class="btn white">Nosotros <i class="bi bi-arrow-right-short"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slider-for">
						<div class="img-cover"><img src="<?php echo wp_kses_post( get_field('stage_img_1')); ?>" width="1440" height="800" alt="Especialistas en construcción de naves industriales" title="Especialistas en construcción de naves industriales"></div>
						<div class="img-cover"><img src="<?php echo wp_kses_post( get_field('stage_img_2')); ?>" width="1440" height="800" alt="Expertos en construcción de instalaciones industriales" title="Expertos en construcción de instalaciones industriales"></div>
						<div class="img-cover"><img src="<?php echo wp_kses_post( get_field('stage_img_3')); ?>" width="1440" height="800" alt="Profesionales en edificación de naves industriales" title="Profesionales en edificación de naves industriales"></div>
					</div>
					<div class="slider-nav">
						<div class="slider-nav-item img-cover"><img src="<?php echo wp_kses_post( get_field('stage_img_1')); ?>" width="80" height="80" alt="Especialistas en desarrollo de naves industriales" title="Especialistas en desarrollo de naves industriales"></div>
						<div class="slider-nav-item img-cover"><img src="<?php echo wp_kses_post( get_field('stage_img_2')); ?>" width="80" height="80" alt="Contratistas en construcción de naves industriales" title="Contratistas en construcción de naves industriales"></div>
						<div class="slider-nav-item img-cover"><img src="<?php echo wp_kses_post( get_field('stage_img_3')); ?>" width="80" height="80" alt="Consultores en edificación de instalaciones industriales" title="Consultores en edificación de instalaciones industriales"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="pt80 pb80" id="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="intro-img relative wow fadeInUp" data-wow-delay="0.4s">
						<div class="path crt"></div>
						<div class="bg-texture-orange card-years wow fadeInDown" data-wow-delay="0.4s">
							<div class="year-numb">
								<div class="count" style="--tonum:<?php echo wp_kses_post( get_field('years_num')); ?>"></div>
							</div>
							<div class="year-txt">
								<?php echo wp_kses_post( get_field('years_txt')); ?>	
							</div>
						</div>
						<img loading="lazy" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID )); ?>" class="rounded15" width="416" height="686" alt="Acerca de Tessin constructora de naves industriales" title="Acerca de Tessin constructora de naves industriales">
					</div>	
				</div>
				<div class="col-md-8 intro-txt wow fadeIn" data-wow-delay="0.4s">
					<?php the_content(); ?>
					<div class="btns pt20 d-flex">
						<a href="<?php the_permalink('23'); ?>" class="btn">Conocer más <i class="bi bi-arrow-right-short"></i></a>
						<a href="tel:<?php echo wp_kses_post( get_field('call_number')); ?>" class="call"><span><?php echo wp_kses_post( get_field('call_title')); ?></span><?php echo wp_kses_post( get_field('call_number')); ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-structure pb20">
		<div class="container">
			<div class="wor">
				<div class="col-md-12 pb20 wow fadeIn" data-wow-delay="0.2s">
					<?php echo wp_kses_post( get_field('serv_txt')); ?>
				</div>
				<div class="col-md-12 pb80 wow fadeInUp" data-wow-delay="0.2s">
					<div class="services">
					<?php $args = array('post_type'=>'page','posts_per_page'=> -1,'post_parent'=>19,'orderby'=>'date','order'=>'DESC'); ?>
					<?php $parent = new WP_Query($args); ?>
					<?php if($parent->have_posts()): while($parent->have_posts()): $parent->the_post(); ?>
					<a href="<?php the_permalink(); ?>">	
						<div>
							<div class="card-service">
								<div class="img-cover">
									<img loading="lazy" src="<?php echo wp_kses_post( get_field('serv_img')); ?>" width="500" height="450" alt="tessin <?php the_title(); ?>" title="tessin <?php the_title(); ?>">
								</div>
								<img loading="lazy" src="<?php echo wp_kses_post( get_field('serv_icono_orange')); ?>" class="icono" width="60" height="60" alt="Servicio de <?php the_title(); ?>" title="Servicio de <?php the_title(); ?>">
								<h4><?php the_title(); ?></h4>
								<?php echo wp_kses_post( get_field('serv_intro')); ?>
								<span class="more">Leer más <i class="bi bi-arrow-right-short"></i></span>
							</div>
						</div>	
					</a>	
					<?php the_title(); ?>
					<?php endwhile; endif; wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
					<div class="item-num">
						<div class="year-numb">
							<div class="count" style="--tonum:<?php echo wp_kses_post( get_field('num_1')); ?>"></div>
						</div>
						<div class="year-txt">
							<?php echo wp_kses_post( get_field('num_txt_1')); ?>	
						</div>
					</div>	
				</div>
				<div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
					<div class="item-num">
						<div class="year-numb">
							<div class="count" style="--tonum:<?php echo wp_kses_post( get_field('num_2')); ?>"></div>
						</div>
						<div class="year-txt">
							<?php echo wp_kses_post( get_field('num_txt_2')); ?>	
						</div>
					</div>	
				</div>
				<div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
					<div class="item-num">
						<div class="year-numb">
							<div class="count" style="--tonum:<?php echo wp_kses_post( get_field('num_3')); ?>"></div>
						</div>
						<div class="year-txt">
							<?php echo wp_kses_post( get_field('num_txt_3')); ?>	
						</div>
					</div>	
				</div>
				<div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
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
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner img-cover rounded15">
						<div class="path"></div>
						<img loading="lazy" src="<?php echo wp_kses_post( get_field('banner_bg')); ?>" width="1400" height="402" alt="Nave industrial" title="Nave industrial">
						<div class="relative">
							<img loading="lazy" src="<?php echo wp_kses_post( get_field('banner_isotipo')); ?>" class="isotipo wow bounceIn" width="52" height="60" alt="isotipo tessin" title="isotipo tessin" data-wow-delay="0.6s">
							<div class="wow fadeIn" data-wow-delay="0.2s">
								<?php echo wp_kses_post( get_field('banner_txt')); ?>
							</div>
						</div>
						<div class="btns wow fadeInUp" data-wow-delay="0.2s">
							<ul>
								<li><a title="Contáctanos" href="<?php the_permalink('368'); ?>" class="btn">Contáctanos <i class="bi bi-arrow-right-short"></i></a></li>
								<li><a title="Conócenos" href="<?php the_permalink('23'); ?>" class="btn dark">Conócenos <i class="bi bi-arrow-right-short"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="img-cover pb60 bg-texture-gray relative bg-projects">
		<div class="container relative">
			<div class="row">
				<div class="col-md-6 pb10">
					<p class="subtitle wow fadeInLeft" data-wow-delay="0.2s"><?php echo wp_kses_post( get_field('project_subtitle')); ?></p>
					<h2 class="orange wow fadeInLeft" data-wow-delay="0.4s"><?php echo wp_kses_post( get_field('project_title')); ?></h2>
				</div>
				<div class="col-md-5 d-flex justify-content-end">
					<a href="<?php the_permalink('21'); ?>" class="btn wow fadeInRight" data-wow-delay="0.2s">Ver todos los proyectos <i class="bi bi-arrow-right-short"></i></a>
				</div>
				<div class="col-md-11 p0 wow fadeInUp" data-wow-delay="0.2s">
					<div class="projects">
						<?php $query = new WP_Query(['post_type' => 'projects', 'posts_per_page'=> 6]); ?> 
						<?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
						<div class="div">
							<a href="<?php echo wp_kses_post( get_field('video_youtube')); ?>" class="fancybox-media">
								<div class="card-project">
									<div class="project-img img-cover">
										<?php echo get_the_post_thumbnail(get_the_ID()); ?>
									</div>
									<div class="project-desc">
										<span class="btn-circle"><i class="bi bi-arrow-right-short"></i></span>
										<h3 class="h4"><?php the_title(); ?></h3>
										<?php the_content(); ?>
									</div>
								</div>
							</a>	
						</div>
						<?php endwhile; wp_reset_postdata(); endif; ?>
					</div>	
				</div>
			</div>
		</div>
	</section>
  	<section class="pt80 pb80">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-12 pb20 center">
  					<p class="subtitle"><?php echo wp_kses_post( get_field('clients_subtitle')); ?></p>
					<h2 class="orange"><?php echo wp_kses_post( get_field('clients_title')); ?></h2>
  				</div>
  				<div class="col-md-12">
  					<div class="clients">
  						<?php if(get_post_meta($post->ID,'client_1',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_1')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_1')); ?>" title="<?php echo wp_kses_post( get_field('client_name_1')); ?>">
	  					</div>
	  					<?php endif; ?>	
	  					<?php if(get_post_meta($post->ID,'client_2',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_2')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_2')); ?>" title="<?php echo wp_kses_post( get_field('client_name_2')); ?>">
	  					</div>
	  					<?php endif; ?>	
	  					<?php if(get_post_meta($post->ID,'client_3',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_3')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_3')); ?>" title="<?php echo wp_kses_post( get_field('client_name_3')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_4',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_4')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_4')); ?>" title="<?php echo wp_kses_post( get_field('client_name_4')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_5',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_5')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_5')); ?>" title="<?php echo wp_kses_post( get_field('client_name_5')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_6',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_6')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_6')); ?>" title="<?php echo wp_kses_post( get_field('client_name_6')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_7',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_7')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_7')); ?>" title="<?php echo wp_kses_post( get_field('client_name_7')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_8',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_8')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_8')); ?>" title="<?php echo wp_kses_post( get_field('client_name_8')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_9',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_9')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_9')); ?>" title="<?php echo wp_kses_post( get_field('client_name_9')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_10',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_10')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_10')); ?>" title="<?php echo wp_kses_post( get_field('client_name_10')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_11',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_11')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_11')); ?>" title="<?php echo wp_kses_post( get_field('client_name_11')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_12',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_12')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_12')); ?>" title="<?php echo wp_kses_post( get_field('client_name_12')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_13',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_13')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_13')); ?>" title="<?php echo wp_kses_post( get_field('client_name_13')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_14',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_14')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_14')); ?>" title="<?php echo wp_kses_post( get_field('client_name_14')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_15',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_15')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_15')); ?>" title="<?php echo wp_kses_post( get_field('client_name_15')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_16',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_16')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_16')); ?>" title="<?php echo wp_kses_post( get_field('client_name_16')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_17',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_17')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_17')); ?>" title="<?php echo wp_kses_post( get_field('client_name_17')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_18',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_18')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_18')); ?>" title="<?php echo wp_kses_post( get_field('client_name_18')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_19',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_19')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_19')); ?>" title="<?php echo wp_kses_post( get_field('client_name_19')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_20',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_20')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_20')); ?>" title="<?php echo wp_kses_post( get_field('client_name_20')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_21',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_21')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_21')); ?>" title="<?php echo wp_kses_post( get_field('client_name_21')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_22',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_22')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_22')); ?>" title="<?php echo wp_kses_post( get_field('client_name_22')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_23',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_23')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_23')); ?>" title="<?php echo wp_kses_post( get_field('client_name_23')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_24',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_24')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_24')); ?>" title="<?php echo wp_kses_post( get_field('client_name_24')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_25',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_25')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_25')); ?>" title="<?php echo wp_kses_post( get_field('client_name_25')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_26',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_26')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_26')); ?>" title="<?php echo wp_kses_post( get_field('client_name_26')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_27',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_27')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_27')); ?>" title="<?php echo wp_kses_post( get_field('client_name_27')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_28',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_28')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_28')); ?>" title="<?php echo wp_kses_post( get_field('client_name_28')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_29',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_29')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_29')); ?>" title="<?php echo wp_kses_post( get_field('client_name_29')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_30',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_30')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_30')); ?>" title="<?php echo wp_kses_post( get_field('client_name_30')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_31',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_31')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_31')); ?>" title="<?php echo wp_kses_post( get_field('client_name_31')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_32',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_32')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_32')); ?>" title="<?php echo wp_kses_post( get_field('client_name_32')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_33',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_33')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_33')); ?>" title="<?php echo wp_kses_post( get_field('client_name_33')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_34',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_34')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_34')); ?>" title="<?php echo wp_kses_post( get_field('client_name_35')); ?>">
	  					</div>
	  					<?php endif; ?>
	  					<?php if(get_post_meta($post->ID,'client_35',true)): ?>
	  					<div>
	  						<img loading="lazy" src="<?php echo wp_kses_post( get_field('client_35')); ?>" width="140" height="30" alt="<?php echo wp_kses_post( get_field('client_name_35')); ?>" title="<?php echo wp_kses_post( get_field('client_name_35')); ?>">
	  					</div>
	  					<?php endif; ?>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>