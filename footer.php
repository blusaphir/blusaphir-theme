


    <!-- Footer -->
    <footer>

    <div class="footer-jayrome-and-nav">
      <div class="footer-jayrome-social-links">
        <?php 
          $footerPost = new WP_Query(array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'footer'
          ));

          while($footerPost->have_posts()) {
            $footerPost->the_post(); ?>
            <?php echo get_the_content(); ?>
          <?php }
        ?>
      </div>

      <div class="footer-nav-links">
        <?php 
          wp_nav_menu()
        ?>
      </div>
    </div>

      <p id="copyright">2019© Blu Saphir Recordings Limited.</p>
      <p>Website designed and developed by Darshan Patel</p>
      <p>Blu Saphir Recs<br>Eduard Suess Gasse 24 Top 15-16<br>1150 Wien<br>Tax-Nr. ATU72169235

    </footer>
    <!-- End of Footer -->

    <?php wp_footer(); ?>
  </body>
</html>
