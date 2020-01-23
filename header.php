<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<div id="header">
		<h1><a href="<?php get_home_url(); ?>">Belle &amp; Carrie <span>Rehabilitation Yoga</span></a></h1>
		<ul id="navigation">
		<?php wp_nav_menu(['theme_location' => 'menu', 'container' => false]); ?>
	</ul>
		<!---
		<ul id="navigation">
			<li class="current">
				<a href="<?php bloginfo('template_url' ) ?>/index.html">Home</a>
			</li>
			<li>
				<a href="<?php bloginfo('template_url' ) ?>/about.html">About</a>
			</li>
			<li>
				<a href="<?php bloginfo('template_url' ) ?>/classes.html">Classes</a>
				<ul>
					<li>
						<a href="<?php bloginfo('template_url' ) ?>/instructors.html">Instructors</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="<?php bloginfo('template_url' ) ?>/contact.html">Contact</a>
			</li>
			<li>
				<a href="<?php bloginfo('template_url' ) ?>/blog.php">Blog</a>
			</li>
		</ul>
	-->
	</div>