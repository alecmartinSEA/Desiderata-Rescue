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
<?php wp_nav_menu(array('theme_location'=>'Main1', 'container' => false,  'items_wrap' => '<ul id="nav-left" 
class="%2$s">%3$s</ul>', ) ); ?>
<img id="logo" src="<?php bloginfo('template_directory'); ?>/logo-fpo.png">       
<?php wp_nav_menu(array('theme_location'=>'Main2', 'container' => false, 'items_wrap' => '<ul id="nav-right" 
class="%2$s">%3$s</ul>', ) ); ?>

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