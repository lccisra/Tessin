<?php get_header(); ?>
<?php if(function_exists('bcn_display')){ bcn_display(); } ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>