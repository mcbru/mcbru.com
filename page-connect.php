<?php get_header();


  $o_address = get_field('address', 'Options');
  $o_email = get_field('email', 'Options');
  $o_phone = get_field('phone', 'Options');

  $call = preg_replace('/(\W*)/', '', $o_phone);

  $url_twitter = get_field('twitter_url','Options');
  $url_linkedin = get_field('linkedin_url','Options');
  $url_gplus = get_field('gplus_url','Options');
  $url_sshare = get_field('slideshare_url','Options');
  $url_youtube = get_field('youtube_url','Options');
  $url_facebook = get_field('facebook_url','Options');
?>

<!--  <div class="row">
    <div class="twenty-four columns">
      <h1 class="head-it clearfix">Connect<i class="fa fa-link"></i></h3>
    </div>
  </div> -->

  <div class="connect row">
    <div id="map-canvas" class="twelve columns map">
    </div>
    <div class="twelve columns">
      <div class="content">
        <?php the_content(); ?>

        <a href="#" class="cta cloaker">Inquire Today</a>

        <p class="address">
          <?php echo $o_address; ?>
        </p>

        <div class="clearfix">
          <div class="email"><a class="cta trans" href="mailto:<?php echo $o_email; ?>"><i class="fa fa-envelope-o"></i> <?php echo $o_email; ?></a></div>
          <div class="phone"><a class="cta trans" href="tel:<?php echo $call; ?>"><i class="fa fa-phone"></i> <?php echo $o_phone; ?></a></div>
        </div>

        <ul class="social-rack tiles six_up">
          <li><a href="<?php echo $url_twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li><a href="<?php echo $url_linkedin; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="<?php echo $url_gplus; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="<?php echo $url_sshare; ?>" target="_blank"><i class="fa fa-slideshare"></i></a></li>
          <li><a href="<?php echo $url_youtube; ?>" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
          <li><a href="<?php echo $url_facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
        </ul>
      </div>
    </div>
  </div>

<h3 class="head-it clearfix bump28"><a href="http://instagram.com/mcbrugram/">@mcbrugram</a> on Instagram<i class="fa fa-instagram"></i></h3>

<div class="row rac">
  <div id="iggy" class="instagram">
  </div>
</div>



  <?php /*
  <section id="main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'templates/partials/content', 'page' ); ?>

    <?php endwhile; ?>

  </section> <!-- /#main -->

get_sidebar();*/ ?>

<?php get_footer(); ?>
