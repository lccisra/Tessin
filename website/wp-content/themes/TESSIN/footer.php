<?php wp_footer(); ?>
	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="ft-container">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-6 cta">
									<?php dynamic_sidebar('calltoaction'); ?>
									<div class="btns d-flex">
										<a href="<?php the_permalink('368'); ?>" class="btn">Cotizar <i class="bi bi-arrow-right-short"></i></a>
										<a href="" class="btn white">Llámanos <i class="bi bi-arrow-right-short"></i></a>
									</div>
								</div>
							</div>
							<div class="row pt100">
								<div class="col-md-3 pb30">
									<a href="<?php bloginfo('url'); ?>" title="TESSIN">
							            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ft-logo-tessin.svg" width="220" height="55" title="TESSIN" alt="TESSIN">
							         </a> 
								</div>
								<div class="col-md-3 ft-nav pb30">
									<?php dynamic_sidebar('Footer-col-1'); ?>
								</div>
								<div class="col-md-3 ft-contact-nav pb30">
									<?php dynamic_sidebar('Footer-col-2'); ?>
								</div>
								<div class="col-md-3 pb30">
									<?php dynamic_sidebar('Footer-col-3'); ?>
									<ul class="social">
										<li><a href="" title="linkedin" class="icon-linkedin" target="_blank"></a></li>
										<li><a href="" title="instagram" class="icon-instagram" target="_blank"></a></li>
										<li><a href="" title="facebook" class="icon-facebook" target="_blank"></a></li>
									</ul>
								</div>
								<div class="col-md-12 copyright">
									<hr>
									<?php dynamic_sidebar('copyright'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script defer type="text/javascript" src='https://code.jquery.com/jquery-1.8.2.min.js'></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/wow.js"></script> 
	<script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script> 
	<script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.js"></script>
	<script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-media.js"></script>
	<script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script> 
	<script defer type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>
</body>
</html>