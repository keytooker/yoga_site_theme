<?php 
/*
    Template Name: Instructors
*/
?>

<?php 
	get_header(); 
?>

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