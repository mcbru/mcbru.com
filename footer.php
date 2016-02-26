
      </div> <!-- /.container -->

      <footer class='footer'>
        <div class="container  clearfix">

          <!--HubSpot Call-to-Action Code -->
          <span class="hs-cta-wrapper" id="hs-cta-wrapper-97bdb81f-eff9-423f-b792-9c5dbd6b688f">
            <span class="hs-cta-node hs-cta-97bdb81f-eff9-423f-b792-9c5dbd6b688f" id="hs-cta-97bdb81f-eff9-423f-b792-9c5dbd6b688f">
              <!--[if lte IE 8]><div id="hs-cta-ie-element"></div><![endif]-->
              <a href="http://cta-redirect.hubspot.com/cta/redirect/448074/97bdb81f-eff9-423f-b792-9c5dbd6b688f"><img class="hs-cta-img" id="hs-cta-img-97bdb81f-eff9-423f-b792-9c5dbd6b688f" style="border-width:0px;" src="https://no-cache.hubspot.com/cta/default/448074/97bdb81f-eff9-423f-b792-9c5dbd6b688f.png" /></a>
            </span>
            <script charset="utf-8" src="https://js.hscta.net/cta/current.js"></script>
            <script type="text/javascript">
              hbspt.cta.load(448074, '97bdb81f-eff9-423f-b792-9c5dbd6b688f');
            </script>
          </span>
          <!-- end HubSpot Call-to-Action Code -->

          <div class="boilerplate">
            <ul class="menu">
              <li><a href="/privacy-policy/">Privacy Policy</a></li>
              <li>
                &copy; <?php echo date( "Y" ); echo " "; //bloginfo( 'name' ); ?>McClenahan Bruer
              </li>
            </ul>
          </div>
        </div>
      </footer>

      <!-- HubSpot Contact Form -->
      <?php if(is_page('connect')) : ?>
        <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
        <div class="cloak">
          <div class="container">
            <div class="form-pop">
              <h3>Connect With Us</h3>
              <script>
                hbspt.forms.create({
                  portalId: '448074',
                  formId: '87b1eea4-e974-4901-bedb-dc3b553cd65e'
                });
              </script>
              <a href="#" class="close">×</a>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <!-- end HubSpot Contact Form -->

    </div> <!-- /.full-wrap -->

    <div class="load-cloak">
      <div class="icon">
        <i class="fa fa-gear fa-spin"></i>
      </div>
    </div>

    <?php wp_footer(); ?>

  </body>
</html>
