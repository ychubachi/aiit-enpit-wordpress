<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="container">
<div id="news-detail">

<?php while ( have_posts() ) : the_post(); ?>
<div class="indexH2 mb15 mt30">
<h2><?php the_title(); ?></h2>
</div>

<?php the_content(); ?>
<?php endwhile; ?>

</div>
<div id="nav-below" class="navigation">
<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span>&nbsp;前へ&nbsp;', true ); ?></span>&nbsp;<span class="nav-next"><?php next_post_link( '%link', '&nbsp;次へ&nbsp;<span class="meta-nav">&raquo;</span>', true ); ?></span>
<!-- /nav-below --></div>

<?php get_footer(); ?>
