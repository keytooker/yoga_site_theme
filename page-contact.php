<?php get_header(); ?>

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