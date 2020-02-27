<form method="get" action="<?php echo home_url();?>">
    <input type="search" name="s" placeholder="Search here..." value="<?php echo get_search_query(); ?>">
    <button type="submit" id="search-btn">
        <i class="fas fa-search"></i>
    </button>

</form>