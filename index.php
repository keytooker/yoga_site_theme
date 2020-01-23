<?php get_header(); 


if( is_front_page() ){
   ?>
    <div id="header">
    <h1><a href="<?php echo get_home_url(); ?>">Belle &amp; Carrie <span>Rehabilitation Yoga</span></a></h1>
    <ul id="navigation">
      <li  class="current">
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