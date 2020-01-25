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
			<li>
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
		<h2>Single Post</h2>
		<div class="content">
			<div class="article">
				
				<?php
					if (have_posts()) {
						while (have_posts()) {
							the_post();
							
							if (is_single()) {
								echo '<h3>'. get_the_title() .'</h3>';
								?>
								<span><?php echo date('F j, Y'); ?></span>
								<?php
								the_content(); // используем функцию вне условия
							} else {
								echo '<h3><a href="'. get_permalink() .'">'. get_the_title() .'</a></h3>';
							}
							
						}
					} else {
						echo '<p>Записей нет...</p>';
					}
				?>
			</div>
			<div class="sidebar">
				<h3>Recent Posts</h3>
	
				<ul>
 
				<?php 
				//
$args = [
	'posts_per_page'      => 3,
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_status'      => 'publish',
	'suppress_filters' => true,
]; 

				//
				    $wp_query = new WP_Query(); 
				    $wp_query->query($args );
				    while ($wp_query->have_posts()) : 
				        $wp_query->the_post(); ?>
				        <li>
				        	<h4>
				        		<a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a>
				        	</h4>
				        	<span><?php the_time('F j, Y'); ?></span>
				        </li>
				 
				        <?php endwhile; ?>
				 
				        <?php wp_reset_postdata(); ?>
				 
				    </ul>
			</div>
		</div>
	</div>
	<?php 
	get_footer(); 
	?>