<?php


  //$log = get_field('logo','Options');




  define('WP_USE_THEMES', false);
  require('../../../../wp-blog-header.php');

  //$p = $_POST['i'];
  $it = get_post($_POST['i']);
  $d = $it->ID;

  $hero = get_field('hero_image',$d);
  $blox = get_field('blocks',$d);
  $bux = get_field('bottom_buckets',$d);
  $subt = get_field('subtitle',$d);

?>

  <div class="row">
    <div class="columns twenty-four">

      <div class="content float non">

          <h2><?php echo $it->post_title; ?></h2>
            <p><?php echo $subt; ?></p>
            <a href="#" id="close" class="close">×</a>
      </div>

      <?php if($hero) : ?><img src="<?php echo $hero; ?>" class="hero  proj-desc-hero" alt="" /><?php endif; ?>

      <div class="content">

        <?php foreach($blox as $coun => $bloc) :

          $fin = $bloc['finisher'];
          if($fin!='none') :
            $fin_con = $bloc['fin_con'];
            $fin_quo = $bloc['fin_quo'];
            endif;
          ?>

          <?php if($coun>0) : ?><hr class="dotter" /><?php endif; ?>

          <h2 class="head-it no-base"><?php echo $bloc['title']; ?></h2>

          <?php echo apply_filters('the_content',$bloc['content']);

          if($fin=='fact') : ?>
            <p class="fun-fact binocs"><?php echo $fin_con; ?></p>
          <?php endif;
          if($fin=='quo') : ?>
            <div class="bloc-quote">
              <p><span class="quo">"</span>
              <?php echo $fin_con; ?>
              <span class="quo">"</span></p>
              <p class="attr"><?php echo $fin_quo; ?></p>
            </div>
          <?php endif;

          endforeach; ?>




        <hr class="dotter" />

        <div class="row buckets">

          <div class="columns twelve">
            <div class="bucket search">
              <h3><?php echo $bux[0]['title'] ?></h3>
              <p><?php echo $bux[0]['content'] ?></p>
            </div>
          </div>

          <?php if(count($bux) > 1) : ?>
          <div class="columns twelve">
            <div class="bucket search">
              <h3><?php echo $bux[1]['title'] ?></h3>
              <p><?php echo $bux[1]['content'] ?></p>
            </div>
          </div>
          <?php endif; ?>

        </div>
      </div>

    </div>
  </div>
