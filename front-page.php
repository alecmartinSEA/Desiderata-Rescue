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
         <h4>From wanted to love</h4>
        
            <div class="padding-left">
            <div class="button"> <a href="https://www.paypal.com/donate/?token=L920vrSHJ30KiXPuvjuIzoL7Z0rtcNIpfr6qQoAnoaj9GzNalAhBnYAThuBQFnbQDDZFY0&country.x=US&locale.x=">DONATE</a></div>
          </div>
            </div><!--end inner_box-->

            
       </div> <!--end slideImages-->
   
		<div id="content">
			


      <a href="wordpress/foster">
			<div class="square">
       
                <img src="<?php bloginfo('template_directory'); ?>/images/foster_icon.png">
                <p>Want to adopt but can't commit? </br>Here's a soultion</p>
                <button class="square-button">foster</button>
        
            </div>
      </a>
      <a href="wordpress/adopt">
            <div class="square">
                <img src="<?php bloginfo('template_directory'); ?>/images/adoption_icon.png">
                <p>Browse our cats and dogs </br> avaliable for adoption today</p>
                <button class="square-button">adopt</button>
            </div>
          </a>
          <a href="wordpress/donate">
            <div class="square" id="last">
                <img src="<?php bloginfo('template_directory'); ?>/images/donation_icon.png">
                <p>Anything helps</br>  &#x2764;</p>
                
                <button class="square-button">donate</button>
            </div>
          </a>
        </div>

		
        
<?php get_footer(); ?>