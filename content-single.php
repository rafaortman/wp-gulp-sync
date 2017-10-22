<!-- content-single.php: conteudo de posts -->
<h2 class="blog-post-title"><?php the_title(); ?></h2>
<?php if ( has_post_thumbnail() ) {
  the_post_thumbnail();
} ?>
<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
<?php the_content(); ?>