<?php 
/*
    Template Name: Blog
*/
?>

<?php 
	get_header(); 
?>

<div id="body">
<h2>Blog</h2>
<ul class="blog">
 
<?php 
    $wp_query = new WP_Query(); 
    $wp_query->query('showposts=3' . '&paged=' . $paged);
    while ($wp_query->have_posts()) : 
        $wp_query->the_post(); ?>
        <li>
 			<?php the_post_thumbnail(); ?>
        	<h3>
        		<a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a>
        	</h3>
        	<span><?php the_time('F j, Y'); ?></span>
        	<p>
        		<?php the_excerpt(); ?>
        	</p>
        </li>
 
        <?php endwhile; ?>
 
        <?php if ($paged > 1) { ?>
 
	        <nav id="nav-posts">
	            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
	            <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
	        </nav>
	 
	        <?php } else { ?>
	 
	        <nav id="nav-posts">
	            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
	        </nav>
	 
	    <?php } ?>
 
        <?php wp_reset_postdata(); ?>
 
    </ul>
	</div>

<?php 
	get_footer(); 
?>