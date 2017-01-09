<?php


/*

Template Name:Page Title Below
*/



get_header();
?>



<div class="container">

<div class="row">
<div class="col-md-8">
	
<?php

$lastblog= new WP_Query('type=post&posts_per_page=-1&cat=17');

 if ($lastblog-> have_posts()):
?>
<div class="row">

<?php
 while ($lastblog-> have_posts()):$lastblog-> the_post(); 
?>

<div class="col-md-6 cusheight" >
<header class="entry-header">

</header>
<small>Posted On:<?php the_time(); ?>in,<?php the_category();?></small>


<?php
 //get_attached_media( 'image' );
?>
<div class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
<?php  the_title(sprintf('<h3 class="entry-title"><a href="%s">',esc_url(get_permalink() ) ),'</a></h3>');?>

<p><?php the_excerpt(); ?></p>
</div>



<!-- large option is also avaible in the parameter -->






	<?php 
endwhile;
?>
</div>
<?php
	endif;
	wp_reset_postdata();
?>

</div>
<div class="col-md-4">
	
<?php get_sidebar(); ?>

</div>



</div>



</div>
<?php
get_footer();

?>