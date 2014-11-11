<?php get_header();

  // $buckets = get_field('buckets');

  $args = array(
    'orderby'         => 'menu_order',
    'posts_per_page'  => -1,
    'post_type'       => 'services'
  );
  $corr = get_posts($args);

?>

<div class="row">
  <div class="twenty-four columns content">
    <div class="float-wrap">
    </div>

    <div class="tucker">
      <?php the_content(); ?>

      <div class="content">
        <div class="rac serv stacs">

          <?php
            foreach($corr as $coun => $tac) : $d = $tac->ID; $cs = get_field('rel_cs',$d);
              $ico = get_field('icon',$d); $src = wp_get_attachment_image_src($ico,'full'); ?>

              <a href="#" class="tile" style="background-image:url(<?php echo $src[0]; ?>);" data-id="<?php echo $d; ?>" data-slug="<?php echo $tac->post_name; ?>">
                <h3><?php echo $tac->post_title; ?></h3>
                <p><?php echo $tac->post_excerpt; ?></p>

                <?php if($cs) : foreach($cs as $coun => $casu) : ?>
                  <div class="dta" data-id="<?php echo $casu->ID; ?>" data-slug="<?php echo $casu->post_name; ?>"></div>
                <?php endforeach; endif; ?>
              </a>
          <?php endforeach; ?>

        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
