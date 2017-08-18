jQuery(document).ready(function($) {
    $("#search-button").click(function(){
       $(".show-search").show("slow");
   });
	$("#toggle").click(function() { // when toggle is clicked...
	$("#mobile-nav").toggle(); // ... open or close the navigation
	
	});
	var loadWidth = window.innerWidth; // save window load width as a variable

$(window).resize(function() { // when the window is resized...

if ( loadWidth !== window.innerWidth ) { // trigger for width only...

if (window.innerWidth < 768) { // if width is less than 801px...

$("#nav-left").hide(); // hide main navigation items

} else { // else ...

$("#nav-left").show(); // show main navigation items
}

} // end trigger for width only

}); // end window resize

	
});








