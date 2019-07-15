<form name="search" action="<?php echo home_url( '/' ) ?>" method="get" class="search-form search">
    <input type="text" value="<?php echo get_search_query() ?>" name="s" placeholder="<?php echo __('Search', 'whitesquare'); ?>" class="input">
    <button type="submit" class="button"><i class="fas fa-search"></i></button>
</form>