<article id="post-<?php the_ID(); ?>" <?php post_class();?>>
<header class="entry-header">
<?php  the_title(sprintf('<h1 class="entry-title"><a href="%s">',esc_url(get_permalink() ) ),'</a></h1>');?>

</header>
<small>Posted On:<?php the_time(); ?>in,<?php the_category();?></small>

<!-- large option is also avaible in the parameter -->
<div class=""><?php the_post_thumbnail('thumbnail'); ?></div>

<p><?php the_excerpt(); ?></p>
</article>