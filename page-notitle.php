<?php


/*

Template Name:Page No Title
*/


get_header();

?>
<div class="container">

<?php
 if (have_posts()):

 while (have_posts()):the_post();
?>


<small>Posted On:<?php the_time(); ?>in,<?php the_category();?></small>

<p><?php the_content(); ?></p>


	<?php 
endwhile;

	endif;
	?>

</div>
<?php
get_footer();

?>