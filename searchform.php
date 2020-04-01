<!-- <form class="search" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
  <input class="search-box" type="text" name="s" placeholder="Search" value="<?php the_search_query(); ?>">
  <input class="search-icon" type="image" src="<?php echo get_template_directory_uri(); ?>/images/search-icon.png">
</form>-->


<form action=<?php echo esc_url(home_url('/')); ?> method="get" class="search">
    <label for="search"></label>
    <input class="search-box" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input class="search-icon" type="image" alt="Search" src="<?php echo get_template_directory_uri(); ?>/images/search-icon.png" />
</form>

