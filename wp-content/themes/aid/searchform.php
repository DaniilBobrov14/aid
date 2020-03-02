<form role="search" method="get" id="searchformheader" action="<?php echo home_url( '/' ) ?>" >
    <label class="screen-reader-text" for="s">Поиск: </label>
    <input type="text" placeholder="Поиск..." class="searchTypeHeader" value="<?php echo get_search_query() ?>" name="s" id="s" />
    <input type="submit" class="searchSubmitHeader" value="найти" />
</form>