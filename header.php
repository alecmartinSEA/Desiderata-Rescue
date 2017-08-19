<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
   <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
   <!-- Begin Toggle Menu -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function upon window load
$("#toggle").click(function() {
$("#mobile-nav").slideToggle(); // toggle main-menu
return false; // disable anchor tag target
});

var loadWidth = window.innerWidth; // save window load width as a variable

$(window).resize(function() { // when the window is resized...

if ( loadWidth !== window.innerWidth ) { // trigger for width only...

if (window.innerWidth < 801) { // if width is less than 801px...

$("#mobile-nav").hide(); // hide main navigation items

} else { // else ...

$("#mobile-nav").show(); // show main navigation items
}

} // end trigger for width only

}); // end window resize

}); // end window load
</script>





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
<a href="/wordpress">
<img id="logo" src="<?php bloginfo('template_directory'); ?>/images/desiderata_logo.png">
</a>


<div id="toggle">
<a href="#"><span class="glyph">&#8801;</span>&nbsp;</a>
</div>


<?php wp_nav_menu(array('theme_location'=>'Main1', 'container' => false,  'items_wrap' => '<ul id="nav-left"
class="hide">%3$s</ul>', ) ); ?>

<?php wp_nav_menu(array('theme_location'=>'Main2', 'container' => false,  'items_wrap' => '<ul id="mobile-nav"
class="hide">%3$s</ul>', ) ); ?>










   









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
