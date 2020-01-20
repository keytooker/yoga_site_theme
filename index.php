<?php get_header(); 


if( is_front_page() ){
   ?>
  <div id="body">
  


        <div id="tagline">
        <h1>Yoga</h1>
        <p>
          For Better Health &amp; Flexibility
        </p>
        </div>
        <img src="<?php bloginfo('template_url' ); ?>/images/lady-in-yoga.jpg" alt="lady doing yoga" class="figure">



    </div>
    <?php
}
else {
  echo '<h1>'. get_the_title() .'</h3>';
  echo get_the_content();
}
?>

<?php


get_footer(); ?>