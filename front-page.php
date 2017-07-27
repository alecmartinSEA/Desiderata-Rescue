<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>
	<header>
		
		<img src="<?php bloginfo('template_directory'); ?>/searchbar-fpo.png"> 
	<div>
        <!--
		<ul id="nav-left">
			<li><a href="#">About</a></li>
   			 <li><a href="#">Adopt</a>
        		<!--<ul class="sub-navigation">
            <li><a href="#">Dogs</a></li>
            <li><a href="#">Cats</a></li>
        </ul> 
    </li>
   		 
    <li><a href="#">Foster</a></li>
</ul>-->
<?php wp_nav_menu(array('theme_location'=>'main-menu','items_wrap'=>'<ul id="nav-left"></ul>'));?>
<img id="logo" src="<?php bloginfo('template_directory'); ?>/logo-fpo.png">       
<?php wp_nav_menu(array('theme_location'=>'main-menu', 'container' => 'div', 'container_id' => 'navigation', 'items_wrap'=>'<ul id="nav-right"></ul>'));?>
<!--        
<ul id="nav-right">
    <li><a href="#">Volunteer</a></li>
    <li><a href="#">News</a></li>
    <li><a href="#">Donate</a></li>
    <li><a href="#">Contact</a></li>
</ul>
-->
</div>	
	</header>
	<div id="content">
		<img src="<?php bloginfo('template_directory'); ?>/fullsize-fpo.png">
		<img class="square" src="<?php bloginfo('template_directory'); ?>/square-fpo.png">
		<img class="square" src="<?php bloginfo('template_directory'); ?>/square-fpo.png">
		<img class="square" id="last" src="<?php bloginfo('template_directory'); ?>/square-fpo.png">
	
		<p>this is our content area</p>
	</div>
	<div id="footer">
		<div id="left">
			<p>Sign up for news from Desiderata Rescue</p>
			<img src="<?php bloginfo('template_directory'); ?>/emailsignup-fpo.png">
		</div>
		<div id="right">
		<p>Get in touch: 206-777-7777</p>
		<p>desideratarescue@gmail.com</p>
		<img src="<?php bloginfo('template_directory'); ?>/icon-fpo.png">
		<img src="<?php bloginfo('template_directory'); ?>/icon-fpo.png">
	</div>
		
		<img class="square" src="<?php bloginfo('template_directory'); ?>/sponser-fpo.png">
		<img class="square" src="<?php bloginfo('template_directory'); ?>/sponser-fpo.png">
<img class="square" id="last" src="<?php bloginfo('template_directory'); ?>/sponser-fpo.png">
		<p>&copy All Rights Reserved to Desiderata Rescue</p>
        <small>front-page.php</small>
	</div>

</body>
</html>