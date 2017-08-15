
<?php /* Template Name: newdonate */ ?>
<?php get_header(); ?>

<?php if (have_posts() ): while (have_posts() ) : the_post(); ?>
<div class="mainadopt">

  <div id="div-<?php the_ID(); ?>" class="donatetop">
    <h3>Anything helps . .❤</h3>
    <img class="donatetoppic" src="<?php bloginfo('template_directory'); ?>/images/donate.png" /> 

    <p><?php the_content(); ?></p>
</div>
<?php endwhile; endif; ?>
   
    <div class="donatemiddle sec">
    <h3>Help us to save lives!</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada elit ac neque mattis, ut sollicitu din lacus dapibus. Ut quis ligula in leo euismod sodales. Maecenas porttitor consequat erat sit amet por ttitor. Suspendisse tristique vestibulum molestie. Proin eu ex a lectus gravida porta et nec tortor. Proin porta leo a dolor dignissim tempus. Pellentesque vel sagittis neque. Sed non enim neque. Suspen disse id nisl hendrerit, fermentum purus a, molestie est. Donec mattis nisi vel erat condimentum, vel pre tium erat pellentesque. Nullam et convallis magna. Quisque eleifend maximus iaculis. Nulla vitae pelle ntesque risus.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada elit ac neque mattis, ut sollicitu din lacus dapibus. Ut quis ligula in leo euismod sodales. Maecenas porttitor consequat erat sit amet por ttitor. Suspendisse tristique vestibulum molestie. Proin eu ex a lectus gravida porta et nec tortor. Proin porta leo a dolor dignissim tempus. Pellentesque vel sagittis neque. Sed non enim neque. Suspen disse id nisl hendrerit, fermentum purus a, molestie est. Donec mattis nisi vel erat condimentum, vel pre tium erat pellentesque. Nullam et convallis magna. Quisque eleifend maximus iaculis. Nulla vitae pelle ntesque risus.</p>
    </div>


</div>



<?php get_footer(); ?>
