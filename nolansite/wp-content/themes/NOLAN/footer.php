<?php wp_footer(); ?>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 calltoaction pb30">
					<?php  dynamic_sidebar('calltoaction'); ?>
					<div class="btns d-flex justify-content-center pb20">
						<a href="" class="btn brdr wht mb20">Contáctanos</a>
						<a href="" class="btn white mb20">Contáctanos <i class="icon-whatsapp"></i></a>
					</div>
					<hr>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-6 pb40">
							<?php  dynamic_sidebar('col-1'); ?>
						</div>
						<div class="col-md-6 pb40">
							<?php  dynamic_sidebar('col-2'); ?>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-4 pb40">
							<?php  dynamic_sidebar('col-3'); ?>
						</div>
						<div class="col-md-4 pb40">
							<?php  dynamic_sidebar('col-4'); ?>
						</div>
						<div class="col-md-4 pb40">
							<?php  dynamic_sidebar('col-5'); ?>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="footer-ft">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<a href="<?php bloginfo('url'); ?>" title="NOLAN">
				            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ft-logo-nolan.svg" width="332" height="20" title="NOLAN" alt="NOLAN">
				         </a> 
					</div>
					<div class="col-md-4 copyright">
						<?php  dynamic_sidebar('copyright'); ?>
					</div>
					<div class="col-md-4 certificates">
						<?php  dynamic_sidebar('certificates'); ?>
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