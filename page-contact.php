<?php get_header(); ?>
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
			<li class="current">
				<a href="<?php echo get_home_url(); ?>/contact/">Contact</a>
			</li>
			<li>
				<a href="<?php echo get_home_url(); ?>/blog/">Blog</a>
			</li>
		</ul>
	
	</div>
	<div id="body">
		<h2>Contact</h2>
		<form action="index.html">
			<h3>Inquiries</h3>
			<label for="name">
				<span>Name</span>
				<input type="text" id="name">
			</label>
			<label for="email">
				<span>Email</span>
				<input type="text" id="email">
			</label>
			<label for="subject">
				<span>Subject</span>
				<input type="text" id="subject">
			</label>
			<label for="message">
				<span>Message</span>
				<textarea name="message" id="message" cols="30" rows="10"></textarea>
			</label>
			<input type="submit" id="send" value="Send">
		</form>
	</div>
	<?php 
	get_footer(); 
	?>