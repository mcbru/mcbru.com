

  </div> <!-- /.container -->

  <footer class='footer'>
    <div class="container">
      <?php dynamic_sidebar( 'Footer' ); ?>
      <p>&copy; <?php echo date( "Y" ); echo " "; //bloginfo( 'name' ); ?><a href="<?php echo site_url(); ?>">mcbru.com</a></p>
    </div>
  </footer>


  <?php if(is_page('connect')) : ?>
    <script charset="utf-8" src="//js.hsforms.net/forms/current.js"></script>
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

</div> <!-- /.full-wrap -->

<?php wp_footer(); ?>

<div class="load-cloak"><div class="icon"><i class="fa fa-gear fa-spin"></i></div></div>

<!-- Start of Async HubSpot Analytics Code -->
  <script type="text/javascript">
    (function(d,s,i,r) {
      if (d.getElementById(i)){return;}
      var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
      n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/448074.js';
      e.parentNode.insertBefore(n, e);
    })(document,"script","hs-analytics",300000);
  </script>
<!-- End of Async HubSpot Analytics Code -->

</body>
</html>
