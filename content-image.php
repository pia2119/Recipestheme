<div class="well col-md-6 cusheight" >
<header class="entry-header">
<?php  the_title(sprintf('<h3 class="entry-title"><a href="%s">',esc_url(get_permalink() ) ),'</a></h3>');?>

</header>
<small>Posted On:<?php the_time(); ?>in,<?php the_category();?></small>


<?php
 //get_attached_media( 'image' );
?>
<div class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>

<p><?php the_excerpt(); ?></p>
</div>



<!-- large option is also avaible in the parameter -->




