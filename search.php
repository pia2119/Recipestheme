<?php
get_header();
?>



<div class="container">

<div class="row">
<h4>Search Results</h4>
<div class="col-md-8">
<?php
 if (have_posts()):

 while (have_posts()):the_post(); 
?>


<?php get_template_part('content','search');?>


	<?php 
endwhile;

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