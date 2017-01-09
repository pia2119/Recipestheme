<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php wp_head();?>
</head>

<?php
if(is_home()):

$learnword_classes=array('learn-word','my-class');

else:

$learnword_classes=array('no-learn-word');
	
endif;


?>



<body <?php body_class($learnword_classes); ?>>


<?php 
//the_custom_logo();
wp_nav_menu(array('theme_location'=>'primary'));
?>	


<div class="search-form-container jumbotron">
	<div class="col-md-4 col-md-offset-4">
<?php get_search_form(); ?>
</div>
</div>

