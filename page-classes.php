<?php 
/*
    Template Name: Classes
*/
?>

<?php 
	get_header(); 
?>



	<div id="body">
		<h2>Classes</h2>
		<div class="content">
			<div>
				<div class="section">
					<h3>Beginners</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in neque condimentum, dignissim libero sit amet, blandit felis.
					</p>
					<span>MWF : 8AM to 9AM</span>
					<span>TTHS : 10AM-11AM</span>
				</div>
				<div class="section">
					<h3>Intermediate</h3>
					<p>
						Cras dignissim est sed lorem suscipit, ut ultrices dolor tempus. Cras venenatis gravida scelerisque. Aenean sit amet massa dui
					</p>
					<span>MWF : 10AM-11AM</span>
					<span>TTHS : 1PM-2PM</span>
				</div>
				<div class="section">
					<h3>Advanced</h3>
					<p>
						Quisque non quam lorem. Nulla eu placerat leo. Suspendisse eros risus, viverra sed fermentum vitae, gravida ac tellus.
					</p>
					<span>MWF : 1PM-2PM</span>
					<span>TTHS : 8AM to 9AM</span>
				</div>
			</div>
			<img src="<?php bloginfo('template_url' ); ?>/images/lady-in-yoga.jpg" alt="lady doing yoga" class="figure">
		</div>
	</div>
<?php 
	get_footer(); 
?>