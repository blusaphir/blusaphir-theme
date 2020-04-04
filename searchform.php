<div id="search-icon-close">
  <div>
    <span>&nbsp;</span>
    <span>&nbsp;</span>
    <span>&nbsp;</span>
  </div>
</div>

<form id="searchform" class="search" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
  <input class="search-box" id="s" type="text" name="s" placeholder="Search" value="<?php the_search_query(); ?>">
  <input class="search-icon" type="image" src="<?php echo get_template_directory_uri(); ?>/images/search-icon.png">
</form>

