


<form action="/" method="get" class="search">
    <label for="search">Search in <?php echo home_url( '/' ); ?></label>
    <input class="search-box" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input class="search-icon" type="image" alt="Search" src="<?php echo get_template_directory_uri(); ?>/images/search-icon.png" />
</form>

