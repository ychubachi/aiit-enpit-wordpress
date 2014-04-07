<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php remove_filter('the_content', 'wpautop'); ?>
<?php the_content(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>
