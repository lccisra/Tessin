<?php get_header(); ?>
	<section class="mt-site wow fadeIn" data-wow-delay="0.2s">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="img-cover stage-medium">
						<div class="path"></div>
						<div class="path crt"></div>
						<img src="<?php bloginfo('template_url'); ?>/assets/img/error-404.webp" width="1440" height="800" alt="error 404" title="error 404">
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
	<section class="mt-site">
		<div class="container">
			<div class="row">
				<div class="col-md-12 pt80 pb80 center">
					<h1 class="h2">ERROR 404</h1>
					<p>Contenido no encontrado</p>
					<div class="d-flex justify-content-center pt-40">
						<a href="/" title="inicio" class="btn">Ir a inicio <i class="bi bi-arrow-right-short"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>