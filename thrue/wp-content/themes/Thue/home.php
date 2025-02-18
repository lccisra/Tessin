<?php /*Template Name: Home*/ ?>
<?php get_header(); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="stage relative">
    <div class="herobanner">
      <?php if(get_post_meta($post->ID,'img_slide_1',true)): ?>
      <div>
        <div class="img-cover">
          <img src="<?php the_field('img_slide_1'); ?>" alt="<?php the_field('alt_slide_1'); ?>" title="<?php the_field('alt_slide_1'); ?>" width="1280" height="760">
          <div class="container caption">
            <div class="row">
              <div class="col-md-12 center wow fadeInRight" data-wow-delay="0.2s">
              	<div class="content-box">
              		<?php the_field('txt_slide_1'); ?>
                  <div class="btns"> 
                    <?php if(get_post_meta($post->ID,'link_slide_1',true)): ?>
              		  <a href="<?php the_field('link_slide_1'); ?>" class="btn btn-blue">Conocer más</a>
                    <?php endif; ?>
                    <?php if(get_post_meta($post->ID,'link_youtube_slide_1',true)): ?>
                    <a href="<?php the_field('link_youtube_slide_1'); ?>" class="fancybox-media icon-play play-video white">Ver video</a>
                    <?php endif; ?>
                  </div>  
              	</div>
              </div>
            </div>
          </div> 
        </div>
      </div>
      <?php endif; ?>
      <?php if(get_post_meta($post->ID,'img_slide_2',true)): ?>
      <div>
        <div class="img-cover">
          <img src="<?php the_field('img_slide_2'); ?>" alt="<?php the_field('alt_slide_2'); ?>" title="<?php the_field('alt_slide_2'); ?>" width="1280" height="760">
          <div class="container caption">
            <div class="row">
              <div class="col-md-12 center wow fadeInRight" data-wow-delay="0.2s">
                <div class="content-box">
                  <?php the_field('txt_slide_2'); ?>
                  <div class="btns"> 
                    <?php if(get_post_meta($post->ID,'link_slide_2',true)): ?>
                    <a href="<?php the_field('link_slide_2'); ?>" class="btn btn-blue">Conocer más</a>
                    <?php endif; ?>
                    <?php if(get_post_meta($post->ID,'link_youtube_slide_2',true)): ?>
                    <a href="<?php the_field('link_youtube_slide_2'); ?>" class="fancybox-media icon-play play-video white">Ver video</a>
                    <?php endif; ?>
                  </div>  
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
      <?php endif; ?>
      <?php if(get_post_meta($post->ID,'img_slide_3',true)): ?>
      <div>
        <div class="img-cover">
          <img src="<?php the_field('img_slide_3'); ?>" alt="<?php the_field('alt_slide_3'); ?>" title="<?php the_field('alt_slide_3'); ?>" width="1280" height="760">
          <div class="container caption">
            <div class="row">
              <div class="col-md-12 center wow fadeInRight" data-wow-delay="0.2s">
                <div class="content-box">
                  <?php the_field('txt_slide_3'); ?>
                  <div class="btns"> 
                    <?php if(get_post_meta($post->ID,'link_slide_3',true)): ?>
                    <a href="<?php the_field('link_slide_3'); ?>" class="btn btn-blue">Conocer más</a>
                    <?php endif; ?>
                    <?php if(get_post_meta($post->ID,'link_youtube_slide_3',true)): ?>
                    <a href="<?php the_field('link_youtube_slide_3'); ?>" class="fancybox-media icon-play play-video white">Ver video</a>
                    <?php endif; ?>
                  </div>  
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
      <?php endif; ?>
    </div> 
  </section>
  <?php endwhile; endif; wp_reset_query(); ?>    
  <section class="pt80 bg-dark-blue">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="subtitle green"><?php the_field('subtitle_service'); ?></p>
          <div class="txt-white"><?php the_field('txt_service'); ?></div>
        </div>
        <?php $args = array('numberposts' => -1,'post_type'=> 'services'); $the_query = new WP_Query( $args ); ?>
        <?php $i=0; if($the_query->have_posts()): while( $the_query->have_posts()) : $the_query->the_post(); $i++; ?>
        <div class="col-md-3 d-flex pb30">
          <div class="box-service wow fadeInUp" data-wow-delay="0.<?php echo $i; ?>s">
            <div class="service-icon">
              <img src="<?php the_field('icono_service'); ?>" width="40" height="40" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
            </div>
            <h3 class="h4"><?php the_title(); ?></h3>
            <a href="<?php the_permalink('9'); ?>#<?php the_field('id'); ?>" class="read-more new">Seguir leyendo <i class="icon-cta-arrow"></i></a>
          </div>
        </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </section>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="pt50 pb50">
    <div class="container">
      <div class="row">
        <div class="col-md-6 pb30">
          <img loading="lazy" src="<?php the_field('img_about'); ?>" height="490" height="490" alt="<?php the_field('subtitle_about'); ?>" title="<?php the_field('subtitle_about'); ?>" class="wow fadeInRight" data-wow-delay="0.2s">
        </div>
        <div class="col-md-6 pb30 bullets">
          <p class="subtitle"><?php the_field('subtitle_about'); ?></p>
          <?php the_field('txt_about'); ?>
          
          <div class="d-flex">
            <a href="<?php the_permalink('7'); ?>" class="btn btn-blue">Conócenos</a>
            <div class="call-box">
              <i class="icon-phone"></i><?php the_field('txt_call'); ?>
            </div>  
          </div>   
        </div>
        <div class="col-md-6 pb30">
          <div class="years years-box-h">
            <span class="years">
              +<span class="count" style="--tonum:<?php the_field('years'); ?>"></span>
            </span>
            <span class="txt-years"><?php the_field('txt_years'); ?></span>
          </div>
        </div>
        <div class="col-md-6 pb30">
          <div class="bullets">
            <?php the_field('txt_about_2'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="banner img-cover">
    <img loading="lazy" src="<?php the_field('img_banner'); ?>" alt="<?php the_field('subtitle_banner'); ?>" title="<?php the_field('subtitle_banner'); ?>" width="1280" height="480">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-10 wow fadeInUp" data-wow-delay="0.2s">
          <p class="subtitle"><?php the_field('subtitle_banner'); ?></p>
          <div class="txt-banner"><?php the_field('txt_banner'); ?></div>
          <div class="d-flex justify-content-center">  
            <a href="<?php the_permalink('20'); ?>" class="btn btn-aqua">Contáctanos</a>
          </div>  
        </div>
      </div>
    </div>
  </section>
  <section class="pt80 pb50 wow fadeIn relative" data-wow-delay="0.2s">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php the_field('txt_blog'); ?>
        </div>
      </div>
      <div class="row">        
        <div class="col-md-12 col-lg-6">
          <?php $args = array('category' => -1,'numberposts' => 1, 'orderby' => 'date', 'order' => 'DESC' ); ?>
          <?php $myposts = get_posts( $args ); ?>
          <?php foreach( $myposts as $post ) : setup_postdata($post); ?>
          <a href="<?php the_permalink(); ?>" class="item-blog img-cover">
            <img loading="lazy" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" width="490" height="490">
            <div class="caption">
              <div class="caption-title">
                <h3><?php the_title(); ?></h3>
                <ul class="entry-meta">
                  <li class="icon-calendar"><?php echo get_the_date('d/m/Y'); ?></li>
                  <li class="icon-tag"> <?php echo strip_tags(get_the_tag_list('',' , ','')); ?></li>
                </ul>
              </div>  
              <div class="caption-txt">
                <p><?php echo get_the_excerpt(); ?></p>
                <div class="read-more">Seguir leyendo <i class="icon-arrow-right"></i></div>
              </div>
            </div>
          </a>
          <?php endforeach; wp_reset_query(); ?>
        </div>
        <div class="col-md-12 col-lg-6">
          <?php $args = array('category' => -1,'numberposts' => 1, 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 2,
          'offset' => 1, ); ?>
          <?php $myposts = get_posts( $args ); ?>
          <?php foreach( $myposts as $post ) : setup_postdata($post); ?>
          <a href="<?php the_permalink(); ?>" class="item-blog small img-cover">
            <img loading="lazy" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" width="490" height="490">
            <div class="caption">
              <div class="caption-title">
                <h3><?php the_title(); ?></h3>
                <ul class="entry-meta">
                  <li class="icon-calendar"><?php echo get_the_date('d/m/Y'); ?></li>
                  <li class="icon-tag"> <?php echo strip_tags(get_the_tag_list('',' , ','')); ?></li>
                </ul>
              </div>  
            </div>
          </a>
          <?php endforeach; wp_reset_query(); ?>
        </div>
      </div>
    </div>
  </section>
  <?php endwhile; endif; wp_reset_query(); ?>  
  <section class="bg-aqua testi pt80 pb60">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-6 d-flex justify-content-center flex-column">
          <?php the_field('txt_quote'); ?>
          <img src="<?php bloginfo('template_url'); ?>/assets/img/firm.svg" width="300" height="32" title="Thrue" alt="Thrue">
        </div>
        <div class="col-md-6">
          <div class="sld-wrp">
            <div class="slider-for">
              <?php $args = array('numberposts' => -1,'post_type'=> 'testimonios'); $the_query = new WP_Query( $args ); ?>
              <?php $i=0; if($the_query->have_posts()): while( $the_query->have_posts()) : $the_query->the_post(); $i++; ?>
              <div class="slide-container">
                <div class="quote-image">
                  <img loading="lazy" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" width="200" height="200">
                </div>
              </div>
              <?php endwhile; endif; ?>
            </div>
            <div class="slider-nav">
              <?php $args = array('numberposts' => -1,'post_type'=> 'testimonios'); $the_query = new WP_Query( $args ); ?>
              <?php $i=0; if($the_query->have_posts()): while( $the_query->have_posts()) : $the_query->the_post(); $i++; ?>
              <div class="center quote-txt">
                <?php the_content(); ?>
                <div class="pt10">
                  <h3 class="h4"><?php the_title(); ?></h3>
                  <p class="position"><?php the_field('position'); ?></p>
                  <p class="company">- <?php the_field('company'); ?> -</p>
                </div>  
              </div>
              <?php endwhile; endif; ?>
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
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="customers">
              <?php if(get_post_meta($post->ID,'logo_client_1',true)): ?>
              <div>
                <img loading="lazy" src="<?php the_field('logo_client_1'); ?>" width="175" height="50">
              </div>
              <?php endif; ?>
              <?php if(get_post_meta($post->ID,'logo_client_2',true)): ?>
              <div>
                <img loading="lazy" src="<?php the_field('logo_client_2'); ?>" width="175" height="50">
              </div>
              <?php endif; ?>
              <?php if(get_post_meta($post->ID,'logo_client_3',true)): ?>
              <div>
                <img loading="lazy" src="<?php the_field('logo_client_3'); ?>" width="175" height="50">
              </div>
              <?php endif; ?>
              <?php if(get_post_meta($post->ID,'logo_client_4',true)): ?>
              <div>
                <img loading="lazy" src="<?php the_field('logo_client_4'); ?>" width="175" height="50">
              </div>
              <?php endif; ?>
              <?php if(get_post_meta($post->ID,'logo_client_5',true)): ?>
              <div>
                <img loading="lazy" src="<?php the_field('logo_client_5'); ?>" width="175" height="50">
              </div>
              <?php endif; ?>
              <?php if(get_post_meta($post->ID,'logo_client_6',true)): ?>
              <div>
                <img loading="lazy" src="<?php the_field('logo_client_6'); ?>" width="175" height="50">
              </div>
              <?php endif; ?>
              <?php if(get_post_meta($post->ID,'logo_client_7',true)): ?>
              <div>
                <img loading="lazy" src="<?php the_field('logo_client_7'); ?>" width="175" height="50">
              </div>
              <?php endif; ?>
              <?php if(get_post_meta($post->ID,'logo_client_8',true)): ?>
              <div>
                <img loading="lazy" src="<?php the_field('logo_client_8'); ?>" width="175" height="50">
              </div>
              <?php endif; ?>
              <?php if(get_post_meta($post->ID,'logo_client_9',true)): ?>
              <div>
                <img loading="lazy" src="<?php the_field('logo_client_9'); ?>" width="175" height="50">
              </div>
              <?php endif; ?>
              <?php if(get_post_meta($post->ID,'logo_client_10',true)): ?>
              <div>
                <img loading="lazy" src="<?php the_field('logo_client_10'); ?>" width="175" height="50">
              </div>
              <?php endif; ?>
              <?php if(get_post_meta($post->ID,'logo_client_11',true)): ?>
              <div>
                <img loading="lazy" src="<?php the_field('logo_client_11'); ?>" width="175" height="50">
              </div>
              <?php endif; ?>
              <?php if(get_post_meta($post->ID,'logo_client_12',true)): ?>
              <div>
                <img loading="lazy" src="<?php the_field('logo_client_12'); ?>" width="175" height="50">
              </div>
              <?php endif; ?>
              <?php if(get_post_meta($post->ID,'logo_client_13',true)): ?>
              <div>
                <img loading="lazy" src="<?php the_field('logo_client_13'); ?>" width="175" height="50">
              </div>
              <?php endif; ?>
              <?php if(get_post_meta($post->ID,'logo_client_14',true)): ?>
              <div>
                <img loading="lazy" src="<?php the_field('logo_client_14'); ?>" width="175" height="50">
              </div>
              <?php endif; ?>
              <?php if(get_post_meta($post->ID,'logo_client_15',true)): ?>
              <div>
                <img loading="lazy" src="<?php the_field('logo_client_15'); ?>" width="175" height="50">
              </div>
              <?php endif; ?>
              <?php if(get_post_meta($post->ID,'logo_client_16',true)): ?>
              <div>
                <img loading="lazy" src="<?php the_field('logo_client_16'); ?>" width="175" height="50">
              </div>
              <?php endif; ?>
              <?php if(get_post_meta($post->ID,'logo_client_17',true)): ?>
              <div>
                <img loading="lazy" src="<?php the_field('logo_client_17'); ?>" width="175" height="50">
              </div>
              <?php endif; ?>
              <?php if(get_post_meta($post->ID,'logo_client_18',true)): ?>
              <div>
                <img loading="lazy" src="<?php the_field('logo_client_18'); ?>" width="175" height="50">
              </div>
              <?php endif; ?>
            </div>
          <?php endwhile; endif; wp_reset_query(); ?>   
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>