<?php get_header();

// $buckets = get_field('buckets');

$args = array(
  'orderby'         => 'menu_order',
  'posts_per_page'  => -1,
  'post_type'       => 'services'
);
$corr = get_posts($args);

$ee = $post->ID;
$sub_left = get_field('sub_hero_left',$ee);
$sub_right = get_field('sub_hero_right',$ee);
$raw_html = get_field('raw_html_content',$ee);

?>

  <div class="row">
    <div class="twelve  columns">
      <div class="callout--lede">
        <p>At McBru, we begin each client engagement with a fundamental question: <strong>what business problem will marketing solve?</strong></p>
      </div>
    </div>
    <div class="twelve  columns  text-large">
      <ul class="mcbru-bullet">
        <li>Are you looking to rebrand or better tell the story of your existing brand?</li>
        <li>Are you looking to increase brand awareness and preference?</li>
        <li>Are you looking to increase sales leads or support sales enablement?</li>
      </ul>
    </div>
  </div>

  <div class="row  text-large">
    <div class="twenty-four columns">
      <div class="callout">
        <div class="rule  rule--all">
          <p>McBru has more than two decades of experience helping tech B2B clients craft winning marketing programs. Over that time we’ve honed our skills across a wide array of disciplines and are adept at creating custom, integrated programs that deliver marketing results in support of business goals.</p>
        </div>
      </div>
    </div>
  </div>

  <?php /*
  <?php the_content(); ?>
   */ ?>

</div>
  <div class="band  band--highlight">
    <div class="row  text-large">
      <div class="twelve  columns  bump-bottom">
        <h2 class="icon  icon--brand-development">Brand Development</h2>
        <h3>Need to tell the brand story</h3>
        <p>For clients who need help with branding or presenting the story of their brand in a fresh way, McBru offers Brand Development programs. We believe brands resonate most strongly when they are created with customer personas in mind. Our branding, messaging, websites and content are compelling because they start by addressing the pain points and challenges our clients’ customers face in an authentic, engaging way.</p>
        <!--HubSpot Call-to-Action Code -->
        <span class="hs-cta-wrapper" id="hs-cta-wrapper-20f3ae58-ada1-4760-9554-a1528d2251fd">
            <span class="hs-cta-node hs-cta-20f3ae58-ada1-4760-9554-a1528d2251fd" id="hs-cta-20f3ae58-ada1-4760-9554-a1528d2251fd">
                <!--[if lte IE 8]><div id="hs-cta-ie-element"></div><![endif]-->
                <a href="http://cta-redirect.hubspot.com/cta/redirect/448074/20f3ae58-ada1-4760-9554-a1528d2251fd" ><img class="hs-cta-img" id="hs-cta-img-20f3ae58-ada1-4760-9554-a1528d2251fd" style="border-width:0px;" src="https://no-cache.hubspot.com/cta/default/448074/20f3ae58-ada1-4760-9554-a1528d2251fd.png"  alt="CONTACT US to Learn More"/></a>
            </span>
            <script charset="utf-8" src="https://js.hscta.net/cta/current.js"></script>
            <script type="text/javascript">
                hbspt.cta.load(448074, '20f3ae58-ada1-4760-9554-a1528d2251fd', {});
            </script>
        </span>
        <!-- end HubSpot Call-to-Action Code -->
      </div>
      <div class="twelve  columns">
        <object type="image/svg+xml" data="<?php echo THEME; ?>/assets/images/brand-development.svg" class="svg-image">
          <!-- fallback image in CSS -->
        </object>
      </div>
    </div>
  </div>

  <div class="row  text-large">
    <div class="rule  rule--all  clearfix">
      <div class="twelve  columns">
        <object type="image/svg+xml" data="<?php echo THEME; ?>/assets/images/brand-narrative.svg" class="svg-image">
          <!-- fallback image in CSS -->
        </object>
      </div>
      <div class="twelve  columns  bump-bottom">
        <h2 class="icon  icon--brand-narrative">Brand Narrative</h2>
        <h3>Need increased awareness, preference and consideration</h3>
        <p>For clients who need to drive increased brand awareness, preference and affinity, McBru offers Brand Narrative programs. Traditional PR programs are necessary but not sufficient; instead a blend of PR, social media, content and more helps our clients tell omni-channel stories that drive measureable increases in awareness.</p>
        <!--HubSpot Call-to-Action Code -->
        <span class="hs-cta-wrapper" id="hs-cta-wrapper-20f3ae58-ada1-4760-9554-a1528d2251fd">
            <span class="hs-cta-node hs-cta-20f3ae58-ada1-4760-9554-a1528d2251fd" id="hs-cta-20f3ae58-ada1-4760-9554-a1528d2251fd">
                <!--[if lte IE 8]><div id="hs-cta-ie-element"></div><![endif]-->
                <a href="http://cta-redirect.hubspot.com/cta/redirect/448074/20f3ae58-ada1-4760-9554-a1528d2251fd" ><img class="hs-cta-img" id="hs-cta-img-20f3ae58-ada1-4760-9554-a1528d2251fd" style="border-width:0px;" src="https://no-cache.hubspot.com/cta/default/448074/20f3ae58-ada1-4760-9554-a1528d2251fd.png"  alt="CONTACT US to Learn More"/></a>
            </span>
            <script charset="utf-8" src="https://js.hscta.net/cta/current.js"></script>
            <script type="text/javascript">
                hbspt.cta.load(448074, '20f3ae58-ada1-4760-9554-a1528d2251fd', {});
            </script>
        </span>
        <!-- end HubSpot Call-to-Action Code -->
      </div>
    </div>
  </div>

  <div class="band  band--highlight">
    <div class="row  text-large">
      <div class="twelve  columns  bump-bottom">
        <h2 class="icon  icon--brand-demand">Brand Demand</h2>
        <h3>Need sales leads and to drive sales growth</h3>
        <p>For clients who need sales leads or sales enablement support, McBru offers Brand Demand programs. A mix of paid placements, nurturing, content, social media selling and more delivers marketing qualified leads that fill the funnel and drive revenue growth.</p>
        <!--HubSpot Call-to-Action Code -->
        <span class="hs-cta-wrapper" id="hs-cta-wrapper-20f3ae58-ada1-4760-9554-a1528d2251fd">
            <span class="hs-cta-node hs-cta-20f3ae58-ada1-4760-9554-a1528d2251fd" id="hs-cta-20f3ae58-ada1-4760-9554-a1528d2251fd">
                <!--[if lte IE 8]><div id="hs-cta-ie-element"></div><![endif]-->
                <a href="http://cta-redirect.hubspot.com/cta/redirect/448074/20f3ae58-ada1-4760-9554-a1528d2251fd" ><img class="hs-cta-img" id="hs-cta-img-20f3ae58-ada1-4760-9554-a1528d2251fd" style="border-width:0px;" src="https://no-cache.hubspot.com/cta/default/448074/20f3ae58-ada1-4760-9554-a1528d2251fd.png"  alt="CONTACT US to Learn More"/></a>
            </span>
            <script charset="utf-8" src="https://js.hscta.net/cta/current.js"></script>
            <script type="text/javascript">
                hbspt.cta.load(448074, '20f3ae58-ada1-4760-9554-a1528d2251fd', {});
            </script>
        </span>
        <!-- end HubSpot Call-to-Action Code -->
      </div>
      <div class="twelve  columns">
        <object type="image/svg+xml" data="<?php echo THEME; ?>/assets/images/brand-demand.svg" class="svg-image">
          <!-- fallback image in CSS -->
        </object>
      </div>
    </div>
  </div>

    <div class="row">
      <div class="twenty-four  columns">
        <div class="callout  callout--single  rule  rule--top">
          So what business problem can marketing solve for you?
        </div>
      </div>
    </div>

<?php get_footer(); ?>
