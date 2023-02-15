<?php

get_header();
pageBanner(array(
  'title' => 'Our Campuses',
  'subtitle' => 'We have several conveniently located campuses.'
));
 ?>

<div class="container container--narrow page-section">


<?php
  while(have_posts()) {
    the_post();
   
   ?>
    <div class="marker">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      
    </div>
  <?php } ?>
</div>



</div>

<?php get_footer();

?>