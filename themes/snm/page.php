<?php get_header(); ?>
  <div class="main container contained">
    <span class="gross-border border-left"></span>
  <?php 
  while (have_posts()) : the_post();
    get_template_part( 'content', 'page' ); 
  endwhile;
  ?>
    <span class="gross-border border-right"></span>
  </div>
<?php get_footer(); ?>
