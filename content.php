<!-- content.php: conteudo da home -->
<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php   if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); the_excerpt(); } 
        else { the_excerpt(); } ?>