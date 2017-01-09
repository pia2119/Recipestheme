<?php
get_header();
?>



<div class="container">

<div class="row">
<div class="col-md-8">
<?php
 if (have_posts()):

 while (have_posts()):the_post(); 
?>


<?php get_template_part('content',get_post_format());?>


	<?php 
endwhile;?>

<div class="col-md-6 text-left">
	
<?php 

next_posts_link('<< Older posts');



?>

</div>
<div class="col-md-6 text-right">
	
<?php 

previous_posts_link('>> Newer posts');



?>

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