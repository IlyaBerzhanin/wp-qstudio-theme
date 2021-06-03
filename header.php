
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>
		qstudio
	</title>



	
<?php wp_head();?>

</head>

<body>
	<header class="header">
		<nav class="main-navigation">
		<?php the_custom_logo();?>
		<?php  wp_nav_menu( [
	'theme_location'  => 'header-menu',
	'menu_class'      => 'header-menu',
	'container' => 'null',
] );?>

<div class="user-actions">
<?php  wp_nav_menu( [
	'theme_location'  => 'header-icons-menu',
	'menu_class'      => 'header-icons-menu',
	'container' => 'null',
] );?>
</div>
		</nav>
	</header>