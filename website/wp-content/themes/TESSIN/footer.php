<?php wp_footer(); ?>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="bg-white ft-contact">
						<div class="row d-flex">
							<div class="col-md-4 d-flex">
								<div class="box-gray">
									<?php dynamic_sidebar('Telefono'); ?>
								</div>
							</div>
							<div class="col-md-4 d-flex">
								<div class="box-gray">
									<?php dynamic_sidebar('Direcion'); ?>
								</div>	
							</div>
							<div class="col-md-4 d-flex">
								<div class="box-gray">
									<?php dynamic_sidebar('Correo'); ?>
								</div>	
							</div>
						</div>
					</div>	
				</div>	
			</div>
		</div>
		<div class="container ft-navigation">
			<div class="row">
				<div class="col-md-2 pb-40">
					<a href="<?php bloginfo('url'); ?>" title="Inicio">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ft-logo.svg" class="logo" width="73" height="70" title="Blukey" alt="Blukey">
          </a> 
				</div>
				<div class="col-md-3">
					<?php dynamic_sidebar('Navegacion'); ?>
					<?php wp_nav_menu(array('theme_location'=>'footer-menu-col-1','container'=>false,'menu_class'=>'ft-nav')); ?>
				</div>
				<div class="col-md-6">
					<?php dynamic_sidebar('Servicios'); ?>
					<?php wp_nav_menu(array('theme_location'=>'footer-menu-col-2','container'=>false,'menu_class'=>'ft-nav')); ?>
				</div>
				<div class="col-md-1">
					<ul class="social">
  					<li><a href="<?=get_post_meta(7,'linkedin', true)?>" class="icon-in" title="linkedin" target="_blank"></a></li>
  					<li><a href="https://api.whatsapp.com/send?phone=<?=get_post_meta(7,'whatsapp', true)?>" class="icon-whatsapp" title="whatsapp" target="_blank"></a></li>
  				</u>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php dynamic_sidebar('Copyright'); ?>
					</div>
				</div>
			</div>
		</div>	
	</footer>
  <script defer type="text/javascript" src='https://code.jquery.com/jquery-1.8.2.min.js'></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/wow.js"></script> 
  <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script> 
  <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.js"></script>
  <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-media.js"></script>
  <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script> 
  <script defer type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>
</body>
</html>