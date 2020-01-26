<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	    <div id="header">
        <h1><a href="<?php echo get_home_url(); ?>">Belle &amp; Carrie <span>Rehabilitation Yoga</span></a></h1>
              <!--
        
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
            <li class="current">
                <a href="<?php echo get_home_url(); ?>/blog/">Blog</a>
            </li>
            -->
        
    
    
    </div>
    <?php 
            wp_nav_menu( array(
                'menu_class'=>'menu',
                'theme_location'=>'top',
                'container'=>''
            ) );
        ?>
