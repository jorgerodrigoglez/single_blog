<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo ('charset'); ?>">
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
	
	<?php wp_head(); ?>

</head>

	<header>
		<h1><?php bloginfo('name'); ?></h1>
		<h2><?php bloginfo('description'); ?></h2>
		<h2><a href="">-------------------------------</a></h2>
	</header>

	<nav class="main-nav">
		<ul class="menu">
			<?php wp_list_pages ('title_li='); ?>
		</ul>
	</nav>

<section>