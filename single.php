<!-- single.php: template de posts -->
<?php get_header(); ?>
<main>  
    <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'content-single', get_post_format() );
        endwhile; endif; 
    ?>
</main>
<?php/* get_sidebar(); */?>
<?php get_footer(); ?>