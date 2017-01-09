<?php
get_header();
?>



<div class="container">

<div class="row">
<div class="col-md-12">
<?php
 if (have_posts()):

 while (have_posts()):the_post(); 
?>


<article id="post-<?php the_ID(); ?>" <?php post_class();?>>

<?php  the_title('<h1 class="entry-title">','</h1>');?>

<small><?php the_category(' ');?>||<?php the_tags(); ?>|| <?php edit_post_link();?></small>

<!-- large option is also avaible in the parameter -->
<div class="pull-right"><?php the_post_thumbnail('thumbnail'); ?></div>

<p><?php the_content(); ?></p>
<hr>

<div class="row">
	<div class="col-md-6 text-left"><?php previous_post_link(); ?></div>
	<div class="col-md-6 text-right"><?php next_post_link(); ?></div>

</div>



<?php if(comments_open()){ comments_template();}

else{

	echo "<h3 class='text-center'>comments are disabled!! </h3>";
}
?>

</article>


	<?php 
endwhile;

	endif;
	?>

</div>

<div class="">
	
<?php// get_sidebar(); ?>

</div>
</div>
</div>
<?php
get_footer();

?>