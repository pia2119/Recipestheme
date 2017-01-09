
<article id="post-<?php the_ID(); ?>" <?php post_class('well');?> >

<?php  the_title(sprintf('<h1 class="entry-title"><a href="%s">',esc_url(get_permalink() ) ),'</a></h1>');?>


<small><?php the_category(' ');?>||<?php the_tags(); ?>|| <?php edit_post_link();?></small>

<!-- large option is also avaible in the parameter -->
<div class="pull-right"><?php the_post_thumbnail('thumbnail'); ?></div>

<p><?php the_excerpt(); ?></p>


</article>