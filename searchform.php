<form class="search" role="search" method="get" action="<?php echo home_url('/'); ?>">
  <input class="search-box" type="text" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>">
  <input class="search-icon" type="image" src="<?php echo get_template_directory_uri(); ?>/images/search-icon.png">
</form>

