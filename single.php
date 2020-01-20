<?php 
	/**
	 * single.php
	 */
	get_header(); 
?>

<?php get_header(); ?>
<p>test css</p>
	<div class="middle">
		<?php the_post(); ?>
		
		<h1><?php the_title() ?></h1>
		<?php the_content(); ?>
		<div>
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="author">
			Автор поста: <?php the_author(); ?>
		</div>
		<div class="date">

			Дата:
			<?php
			$d = 'd.m.Y';
			the_time( $d );
			?>
		</div>
	</div>
<?php get_footer(); ?>