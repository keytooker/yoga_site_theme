<?php 
/*
    Template Name: Instructors
*/
?>

<?php 
	get_header(); 
?>
	<div id="header">
		<h1><a href="<?php echo get_home_url(); ?>">Belle &amp; Carrie <span>Rehabilitation Yoga</span></a></h1>
		<ul id="navigation">
			<li>
				<a href="<?php echo get_home_url(); ?>">Home</a>
			</li>
			<li>
				<a href="<?php echo get_home_url(); ?>/about/">About</a>
			</li>
			<li class="current">
				<a href="<?php echo get_home_url(); ?>/classes/">Classes</a>
				<ul>
					<li>
						<a href="<?php echo get_home_url(); ?>/instructors/">Instructors</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="<?php echo get_home_url(); ?>/contact/">Contact</a>
			</li>
			<li>
				<a href="<?php echo get_home_url(); ?>/blog/">Blog</a>
			</li>
		</ul>
	
	</div>
	<div id="body">
		<h2>Instructors</h2>
		<div class="content">
			<div>
				<ul class="section">
					<li>
						<img src="<?php bloginfo('template_url' ); ?>/images/instructor1.jpg" alt="Yoga instructor one">
						<h4>Belle Humpfree</h4>
					</li>
					<li>
						<img src="<?php bloginfo('template_url' ); ?>/images/instructor2.jpg" alt="Yoga instructor two">
						<h4>Jacob Collern</h4>
					</li>
				</ul>
				<ul class="section">
					<li>
						<img src="<?php bloginfo('template_url' ); ?>/images/instructor3.jpg" alt="Yoga instructor three">
						<h4>Edward Blanche</h4>
					</li>
					<li>
						<img src="<?php bloginfo('template_url' ); ?>/images/instructor4.jpg" alt="Yoga instructor four">
						<h4>Carrie Waldorf</h4>
					</li>
				</ul>
			</div>
			<img src="<?php bloginfo('template_url' ); ?>/images/lady-in-yoga.jpg" alt="lady doing yoga" class="figure">
		</div>
	</div>
	<?php 
	get_footer(); 
	?>