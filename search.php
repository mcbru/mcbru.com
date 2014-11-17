<?php get_header(); ?>

  <?php include 'inc/blog-search.php'; ?>

  <hr class="dotter" />

  <h1 class="search-title">Viewing Results for "<span><?php the_search_query(); ?></span>"</h1>

  <hr class="dotter" />



  <section id="main" role="main">

    <?php 

    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
      if($post->post_type=='post') :


      include 'inc/list-results.php';

      else :

      endif;
      endwhile;
    ?>

      

      <?php /*get_template_part( 'templates/partials/inc', 'nav' ); ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

          <?php get_template_part( 'templates/partials/inc', 'meta' ); ?>

          <div class="entry">

            <?php the_excerpt(); ?>

          </div>

        </article>

      <?php endwhile; ?>

      <?php get_template_part( 'templates/partials/inc', 'nav' ); ?>

    <?php*/ else : ?>

      <h2>Nothing found.</h2>

    <?php endif; ?>

  </section> <!-- /#main -->


<?php get_footer(); ?>
