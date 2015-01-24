    <!-- About Section
    ================================================== -->
    <section id="bsocials">
      <div class="container wow bounceIn" data-wow-delay="0.8s">
        <p><?php _e( 'To get the latest update of me and my works', 'rokophotolite' ); ?></p>
        <p>  &gt;&gt; <span class="follow"> <?php _e( 'Follow Me', 'rokophotolite' ); ?> </span>  &lt;&lt; </p>
        <ol class="social">
        <?php
          $facebookurl = get_theme_mod('rokophotolite_facebook_link');
          $twitterurl = get_theme_mod('rokophotolite_twitter_link');
          $behanceurl = get_theme_mod('rokophotolite_behance_link');
          $dribbbleurl = get_theme_mod('rokophotolite_dribbble_link');
          $flickrurl = get_theme_mod('rokophotolite_flickr_link');
          $googleplusurl = get_theme_mod('rokophotolite_googleplus_link');
          $instagramurl = get_theme_mod('rokophotolite_instagram_link');
          if(!empty($facebookurl)) {
              echo '<li><a href="'.$facebookurl.'"><i class="fa fa-facebook fa-2x"></i></a></li>';
          } else {
              echo '<li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>';
          }

          if(!empty($twitterurl)) {
              echo '<li><a href="'.$twitterurl.'"><i class="fa fa-twitter fa-2x"></i></a></li>';
          } else {
              echo '<li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>';
          }

          if(!empty($behanceurl)) {
              echo '<li><a href="'.$behanceurl.'"><i class="fa fa-behance fa-2x"></i></a></li>';
          } else {
              echo '<li><a href="#"><i class="fa fa-behance fa-2x"></i></a></li>';
          }

          if(!empty($dribbbleurl)) {
              echo '<li><a href="'.$dribbbleurl.'"><i class="fa fa-dribbble fa-2x"></i></a></li>';
          } else {
              echo '<li><a href="#"><i class="fa fa-dribbble fa-2x"></i></a></li>';
          }

          if(!empty($flickrurl)) {
              echo '<li><a href="'.$flickrurl.'"><i class="fa fa-flickr fa-2x"></i></a></li>';
          } else {
              echo '<li><a href="#"><i class="fa fa-flickr fa-2x"></i></a></li>';
          }
          
          if(!empty($googleplusurl)) {
              echo '<li><a href="'.$googleplusurl.'"><i class="fa fa-google-plus fa-2x"></i></a></li>';
          } else {
              echo '<li><a href="#"><i class="fa fa-google-plus fa-2x"></i></a></li>';
          }
          
          if(!empty($instagramurl)) {
              echo '<li><a href="'.$instagramurl.'"><i class="fa fa-instagram fa-2x"></i></a></li>';
          } else {
              echo '<li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>';
          }
         ?>
        </ol>
      </div>
    </section>

    <div id="footer-nav">  <!-- Copyright notice on the bottom -->
      <span>© <?php echo date("Y");  _e( ' Awesome Phtography. All Rights Reserved.', 'rokophotolite' ); ?></span>
    </div>

<?php wp_footer(); ?>

  </body>
</html>