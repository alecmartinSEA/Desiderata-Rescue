jQuery(document).ready(function($) {
    $("#search-button").click(function(){
       $(".show-search").show("slow");
   });

});

var slideIndex = 1;
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }
    function timeSlides() {
        window.setInterval("plusSlides(1)", 5000);
    }
    function showSlides(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }
    showSlides(slideIndex);
    timeSlides();
