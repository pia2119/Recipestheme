<div class="well col-md-12" >
<?php  the_title(sprintf('<h3 class="entry-title"><a href="%s">',esc_url(get_permalink() ) ),'</a></h3>');?>

<small>Posted On:<?php the_time(); ?>in,<?php the_category();?></small>
<div class="col-md-4" >
<div class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
</div>
<div class="col-md-8" >
<p><?php the_excerpt(); ?></p>
</div>
</div>