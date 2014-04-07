<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="news">
<div id="container">
<div class="indexH2 mb15 mt30">
<h2><img src="/html/images/tt_index_01.gif" alt="NEWS" width="100" /></h2>
</div>
<table summary="NEWS" class="transparentTab mb30">

<?php while ( have_posts() ) : the_post(); ?>
<tr>
<th><?php the_time( get_option( 'date_format' ) ); ?></th>
<td>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
</tr>
<?php endwhile; ?>

</table>
</div>

<?php if( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>

<?php get_footer(); ?>