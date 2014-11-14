<?php

  define('WP_USE_THEMES', false);
  require('../../../../wp-blog-header.php');

  $it = get_post($_POST['i']);
  $ee = $it->ID;

  $cs = get_field('rel_cs',$ee);

  if($cs) :

    $cs_lab_core = get_posts( array( 'name' => 'services', 'post_type' => 'page' ) );
    $cs_lab = get_field('cs_lab',$cs_lab_core[0]->ID);

  endif;

?>

<div class="float content">
  <div class="clearfix">
    <h2><?php echo $it->post_title; ?></h2>
    <!-- <h3> --><?php /* echo $it->post_excerpt; */ ?><!-- </h3> -->

    <?php if(has_post_thumbnail($it->ID)) : $img = wp_get_attachment_image_src( get_post_thumbnail_id($it->ID), 'full' ); ?>
      <img src="<?php echo TIM . $img[0] . BL_PORT; ?>" alt="" class="work-logo" />
    <?php endif; ?>

    <?php echo apply_filters('the_content',$it->post_content); ?>
  </div>
  <div>
    <?php if($cs) : ?>
      <h3 class="head-it"><?php echo $cs_lab; ?><i class="fa fa-folder"></i></h3>
      <div class="rac row rels">

        <?php foreach($cs as $coun => $tac) :
          $d = $tac->ID;
          $i = get_field('thumbnail', $d);
          $t = wp_get_attachment_image( $i, 'bl-port' );
          $st = get_field('subtitle', $d); ?>
          <a class="tile cs" data-id="<?php echo $d; ?>" data-slug="<?php echo $tac->post_name; ?>">
            <?php echo $t; ?>
            <div class="screen">
              <h3><?php echo $tac->post_title; ?></h3>
              <?php if($st) : echo '<p>'.$st.'</p>'; endif; ?>
            </div>
          </a>
        <?php endforeach; ?>

      </div>
    <?php endif; ?>
  </div>

  <a href="#" id="close" class="close">×</a>
</div>
