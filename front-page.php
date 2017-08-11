<?php get_header(); ?>
	<div class="slideImage">

<div class="mySlides">
  <img src="<?php bloginfo('template_directory'); ?>/images/slider1.png">
</div>

<div class="mySlides">
  <img src="<?php bloginfo('template_directory'); ?>/images/slider2.png">
</div>
      
<div class="mySlides">
  <img src="<?php bloginfo('template_directory'); ?>/images/slider3.png">
</div>  
             
<br>

  <span  onclick="currentSlide(1)"></span> 
  <span  onclick="currentSlide(2)"></span> 
  <span onclick="currentSlide(3)"></span> 

     
        <div class="inner_box">
         <h1>Desiderata Rescue</h1>
         <p>From wanted to love</p><br>
        
        
            <div class="button"> <a href="donate.html">DONATE</a></div>
            </div><!--end inner_box-->
            
       </div> <!--end slideImages-->
   
		<div id="content">
			



			<div class="square">
                <img src="<?php bloginfo('template_directory'); ?>/images/foster_icon.png">
                <p>Want to adopt but can't commit? </br>Here's a soultion</p>
                <button>foster</button>
            </div>
            <div class="square">
                <img src="<?php bloginfo('template_directory'); ?>/images/adoption_icon.png">
                <p>Browse our cats and dogs </br> avaliable for adoption today</p>
                <button>adopt</button>
            </div>
            <div class="square" id="last">
                <img src="<?php bloginfo('template_directory'); ?>/images/donation_icon.png">
                <p>Anything helps</br>  &#x2764;</p>
                
                <button>donate</button>
            </div>
        </div>

		</div>
		
        
<?php get_footer(); ?>