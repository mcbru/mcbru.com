<?php

  // give me my content
  $ee       = $post->ID;
  // $hero_img    = get_field('hero_image',$ee);
  // $hero_cont     = get_field('hero_content',$ee);
  // $hero_link     = get_field('hero_link',$ee);
  // $hero_link_lbl   = get_field('hero_link_label',$ee);
  $sub_left     = get_field('sub_hero_left',$ee);
  $sub_right    = get_field('sub_hero_right',$ee);

  get_header();
  require_once('TwitterAPIExchange.php');

  // Set access tokens here - https://dev.twitter.com/apps/
  $settings = array(
    'oauth_access_token' => TW_OAUTH_ACCESS_TOKEN,
    'oauth_access_token_secret' => TW_OAUTH_ACCESS_TOKEN_SECRET,
    'consumer_key' => TW_CONSUMER_KEY,
    'consumer_secret' => TW_CONSUMER_SECRET
  );
  $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
  $requestMethod = "GET";
  $getfield = "?count=4";
  $twitter = new TwitterAPIExchange($settings);
  $string = json_decode($twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest(),$assoc = TRUE);


  // TODO: use Twitter's official wrapper library instead of regex function
  // https://github.com/mzsanford/twitter-text-php
  function parseTwitterText($text) {
    $returnText = $text;
    $hashPattern = '/\#([A-Za-z0-9\_]+)/i';
    $mentionPattern = '/\@([A-Za-z0-9\_]+)/i';
    $urlPattern = '/(http[s]?\:\/\/[^\s]+)/i';
    $robotsFollow = false;

    $returnText = preg_replace($urlPattern,
        '<a href="$1" ' .
        (($robotsFollow)? '' : 'rel="nofollow"') .
        '>$1</a>', $returnText);

    $returnText = preg_replace($hashPattern,
        '<a href="https://twitter.com/#!/search?q=%23$1" ' .
        (($robotsFollow)? '':'rel="nofollow"') .
        '>#$1</a>', $returnText);

    $returnText = preg_replace($mentionPattern,
        '<a href="https://twitter.com/$1" ' .
        (($robotsFollow)? '':'rel="nofollow"') .
        '>@$1</a>', $returnText);
    return $returnText;
  }

?>


<div class="row">
  <div class="twelve columns bump18">
    <?php echo apply_filters('the_content', $sub_left); ?>
  </div>
  <div class="twelve columns bump18">
    <?php echo apply_filters('the_content', $sub_right); ?>
  </div>
</div>

<div class="row bump42">
  <div class="twelve columns">
    <h3 class="head-it clearfix">Recent Posts<i class="fa fa-comments"></i></h3>
    <?php


      // Must be tested with ===, as in if(isXML($xml) === true){}
      // Returns the error message on improper XML
      // function isXML($xml){
      //     libxml_use_internal_errors(true);

      //     $doc = new DOMDocument('1.0', 'utf-8');
      //     $doc->loadXML($xml);

      //     $errors = libxml_get_errors();

      //     if(empty($errors)){
      //         return true;
      //     }

      //     $error = $errors[0];
      //     if($error->level < 3){
      //         return true;
      //     }

      //     $explodedxml = explode("r", $xml);
      //     $badxml = $explodedxml[($error->line)-1];

      //     $message = $error->message . ' at line ' . $error->line . '. Bad XML: ' . htmlentities($badxml);
      //     // echo var_dump($message);
      //     return $message;
      // }

      function get_rss_feed($feedstring) {

        $curl = curl_init();

        curl_setopt_array($curl, Array(
          CURLOPT_URL => 'http://blog.mcbru.com/rss.xml',
          CURLOPT_USERAGENT => 'spider',
          CURLOPT_TIMEOUT => 120,
          CURLOPT_CONNECTTIMEOUT => 30,
          CURLOPT_RETURNTRANSFER => TRUE,
          CURLOPT_ENCODING => 'UTF=8'
        ));

        $data = curl_exec($curl);
        curl_close($curl);

        $xml = simplexml_load_string($data, 'SimpleXmlElement', LIBXML_NOCDATA);
        //die('<pre>' . print_r($xml], TRUE) . '</pre>');

        // $content = file_get_contents($feedstring);
        // $x = new SimpleXmlElement($content);

        echo '<ul class="link-list">';

        $i = 0;
        foreach($xml->channel->item as $entry) {
          if($i == 4) break;
          $timestamp = strtotime($entry->pubDate);
          $format_time = date("F jS, Y", $timestamp);
          echo "<li><a class='titulo' href='{$entry->link}' title='{$entry->title}'>" . $entry->title . "</a><span class='meta'>$format_time</span></li>";
          $i++;
        }
        echo "</ul>";
      }

      // $feedstring = "http://blog.mcbru.com/rss.xml";

      // if(isXML($feedstring) === true) {
        // get_rss_feed($feedstring);
      // }

    ?>
    <?php /*
    <ul class="link-list">
      <?php $core = get_posts(array(
        'posts_per_page'   => 4,
        // 'offset'           => 0,
        // 'category'         => '',
        // 'orderby'          => 'post_date',
        // 'order'            => 'DESC',
        // 'include'          => '',
        // 'exclude'          => '',
        // 'meta_key'         => '',
        // 'meta_value'       => '',
        'post_type'        => 'post',
        // 'post_mime_type'   => '',
        // 'post_parent'      => '',
        'post_status'      => 'publish',
        'suppress_filters' => true
      ));

      foreach($core as $coun => $post) : // print_r($post); ?>
        <li>
          <a href="<?php echo get_permalink($post->ID); ?>" class="titulo"><?php echo $post->post_title; ?></a>
          <span class="meta"><?php echo date('F jS, Y', strtotime($post->post_date)); ?></span>
        </li>
      <?php endforeach; ?>

    </ul>
     */ ?>

    <!--HubSpot Call-to-Action Code -->
    <span class="hs-cta-wrapper" id="hs-cta-wrapper-82947bf7-548c-4641-a6d7-fbf1afaad3f7">
        <span class="hs-cta-node hs-cta-82947bf7-548c-4641-a6d7-fbf1afaad3f7" id="hs-cta-82947bf7-548c-4641-a6d7-fbf1afaad3f7">
            <!--[if lte IE 8]><div id="hs-cta-ie-element"></div><![endif]-->
            <a href="http://cta-redirect.hubspot.com/cta/redirect/448074/82947bf7-548c-4641-a6d7-fbf1afaad3f7"><img class="hs-cta-img" id="hs-cta-img-82947bf7-548c-4641-a6d7-fbf1afaad3f7" style="border-width:0px;" src="https://no-cache.hubspot.com/cta/default/448074/82947bf7-548c-4641-a6d7-fbf1afaad3f7.png" /></a>
        </span>
        <script charset="utf-8" src="https://js.hscta.net/cta/current.js"></script>
            <script type="text/javascript">
                hbspt.cta.load(448074, '82947bf7-548c-4641-a6d7-fbf1afaad3f7');
            </script>
    </span>
    <!-- end HubSpot Call-to-Action Code -->
  </div>
  <div class="twelve columns">
    <h3 class="head-it clearfix">Follow Us<i class="fa fa-twitter"></i></h3>
    <?php
      if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
    ?>
    <ul class="link-list non">
      <?php
        foreach($string as $items)
        {
          echo "<li>";
          echo '<span class="meta"><a href="https://twitter.com/McBru" rel="nofollow">@'. $items['user']['screen_name']. "</a> ";
          echo human_time_diff(strtotime($items['created_at']), current_time('timestamp') ) . ' ago</span>';
          echo parseTwitterText($items['text']). "<br />";
          echo "</li>";
        }
      ?>
    </ul>
  </div>
</div>

  <?php /*if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section id="main" role="main">

    <article class="post" id="post-<?php the_ID(); ?>">

      <h1><?php the_title(); ?></h1>

      <div class="entry">

        <?php the_content(); ?>

        <?php //wp_link_pages( array( 'before' => 'Pages: ', 'next_or_number' => 'number' ) ); ?>

      </div>

    </article>

    <?php endwhile; endif; ?>

  </section> <!-- /#main -->

<?php get_sidebar(); */?>

<?php get_footer(); ?>
