<?php
get_header();
?>



<div class="container">

<div class="row">
<div class="col-md-8">
	
<?php

//$lastblog= new WP_Query('type=post&posts_per_page=1');

 if (have_posts()):

 while ( have_posts()): the_post(); 
?>


<?php// get_template_part('content',get_post_format());?>

<p><?php the_content(); ?></p>
	<?php 
endwhile;

	endif;
	//wp_reset_postdata();
?>

</div>
<div class="col-md-4">
	
<?php get_sidebar(); ?>

</div>



</div>




<hr>
</div>
<?php
get_footer();

?>