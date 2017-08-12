Skip to content
This repository
Search
Pull requests
Issues
Marketplace
Gist
 @ka0191
 Sign out
 Watch 2
  Star 0
  Fork 0 alecmartinSEA/Desiderata-Rescue
 Code  Issues 0  Pull requests 0  Projects 0  Wiki Insights
Branch: master Find file Copy pathDesiderata-Rescue/donate.php
23778a4  4 days ago
 nataliewang919 adopt and donate page style
0 contributors
RawBlameHistory
Executable File  46 lines (39 sloc)  3.71 KB
<?php /* Template Name: donate */ ?>
<?php get_header(); ?>

<div class="mainadopt">

    <div id="div-<?php the_ID(); ?>" class="donatetop">
    <h3>Anything helps . .❤</h3>
    <img class="donatetoppic" src="<?php bloginfo('template_directory'); ?>/images/donate.png" /> </br>
    <button class="buttonclick1 donatebut" type="button" onclick="location.href='http://google.com';">Donate through PAYPAL</button>
    </div>
    <?php endwhile; endif; ?>

    <div class="donatemiddle sec">
    <h3>Help us to save lives!</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada elit ac neque mattis, ut sollicitu din lacus dapibus. Ut quis ligula in leo euismod sodales. Maecenas porttitor consequat erat sit amet por ttitor. Suspendisse tristique vestibulum molestie. Proin eu ex a lectus gravida porta et nec tortor. Proin porta leo a dolor dignissim tempus. Pellentesque vel sagittis neque. Sed non enim neque. Suspen disse id nisl hendrerit, fermentum purus a, molestie est. Donec mattis nisi vel erat condimentum, vel pre tium erat pellentesque. Nullam et convallis magna. Quisque eleifend maximus iaculis. Nulla vitae pelle ntesque risus.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada elit ac neque mattis, ut sollicitu din lacus dapibus. Ut quis ligula in leo euismod sodales. Maecenas porttitor consequat erat sit amet por ttitor. Suspendisse tristique vestibulum molestie. Proin eu ex a lectus gravida porta et nec tortor. Proin porta leo a dolor dignissim tempus. Pellentesque vel sagittis neque. Sed non enim neque. Suspen disse id nisl hendrerit, fermentum purus a, molestie est. Donec mattis nisi vel erat condimentum, vel pre tium erat pellentesque. Nullam et convallis magna. Quisque eleifend maximus iaculis. Nulla vitae pelle ntesque risus.</p>
    </div>


</div>



<?php get_footer(); ?>
Contact GitHub API Training Shop Blog About
© 2017 GitHub, Inc. Terms Privacy Security Status Help
