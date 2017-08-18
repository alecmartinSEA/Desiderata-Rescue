
<?php /* Template Name: newdonate */ ?>
<?php get_header(); ?>

<?php if (have_posts() ): while (have_posts() ) : the_post(); ?>
<div class="mainadopt">

  <div id="div-<?php the_ID(); ?>" class="donatetop">
    <h3>Anything helps❤</h3>
    <img class="donatetoppic" src="<?php bloginfo('template_directory'); ?>/images/donate.png" /> 

    <p><?php the_content(); ?></p>
</div>
<?php endwhile; endif; ?>
   
    <div class="donatemiddle sec">
    <h3>Your Support Saves lives!</h3>
    <p>Desiderata Rescue depends on charitable donations to rescue, transport, treat and find home
		for dogs that are currently on death row.</p>
  <p>You love animals. So do we, but we can’t do it alone. The only way we can continue to save so
	many animals is through your generous support!</p>
	<p>
	Can’t donate money put still want to help? Check out our Volunteer page for other opportunities on how you can support Desiderata Rescue!</p>	
    </div>


</div>



<?php get_footer(); ?>
