<?php get_header();

  $imag = get_field('clients_img');
  ?>

  <div class="row">
    <div class="twenty-four columns content">
      <?php the_content(); ?>
      <?php if($imag) : echo wp_get_attachment_image($imag,'full'); endif; ?>
    </div>
  </div>


  <!-- <div class="row stacs"> -->
  <!--   <div class="content"> -->


  <?php get_footer(); ?>
