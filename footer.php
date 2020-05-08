


    <!-- Footer -->
    <footer>

      <div class="footer-nav-links">
        <?php 
          wp_nav_menu()
        ?>
      </div>

      <div class="footer-jayome-social-links">
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

      <p id="copyright">2019© Blu Saphir Recordings Limited.</p>
      <p>Website designed and developed by Darshan Patel</p>
    </footer>
    <!-- End of Footer -->

    <?php wp_footer(); ?>
  </body>
</html>
