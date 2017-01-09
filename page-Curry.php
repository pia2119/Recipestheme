<?php
get_header();
?>



<div class="container">

<div class="row">
<div class="col-md-8">
	
<?php

$lastblog= new WP_Query('type=post&posts_per_page=-1&cat=18');

 if ($lastblog-> have_posts()):
?>
<div class="row">

<?php
 while ($lastblog-> have_posts()):$lastblog-> the_post(); 
?>


<?php get_template_part('content',get_post_format());?>


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