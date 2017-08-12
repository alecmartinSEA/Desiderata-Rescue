<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
   <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
</head>
<body>
    <header>
    <!--Test-->



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
<a href="#t"><img id="logo" src="<?php bloginfo('template_directory'); ?>/images/desiderata_logo.png"></a>

<?php wp_nav_menu(array('theme_location'=>'Main1', 'container' => false,  'items_wrap' => '<ul id="nav-left"
class="%2$s">%3$s</ul>', ) ); ?>

<img id="search-button" src="<?php bloginfo('template_directory'); ?>/images/search.png">
</div>
<?php
if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
    <div id="header-widget-area" class="chw-widget-area widget-area show-search" role="complementary">
    <?php dynamic_sidebar( 'custom-header-widget' ); ?>
    </div>
    
<?php endif; ?>





<!--
<ul id="nav-right">
    <li><a href="#">Volunteer</a></li>
    <li><a href="#">News</a></li>
    <li><a href="#">Donate</a></li>
    <li><a href="#">Contact</a></li>
</ul>
-->
<?php wp_head(); ?>
</header>
