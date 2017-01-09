<?php
get_header();
?>



<div class="container">

<div class="row">
<div class="col-md-8">
<?php
 if (have_posts()):
?>

<header class="page-header">
<?php
 the_archive_title('<h2 class="page-title">','</h2>'); 
the_archive_description('<div class="taxonomy-description">','</div>'); 
?>
<header>
<?php
 while (have_posts()):the_post(); 
?>


<?php get_template_part('content','archive');?>


	<?php 
endwhile;?>

<div class="col-md-12 text-center">
	
<?php  the_posts_navigation();?>

</div>
<?php
	endif;
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