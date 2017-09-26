<form method="get" class="search-form" action="<?php bloginfo('home'); ?>/">
    <label>
        <span class="screen-reader-text">Rechercher&nbsp;:</span>
        <input type="search" class="search-field" placeholder="Recherche …" value="<?php the_search_query(); ?>" name="s" title="Rechercher&nbsp;:" />
    </label>
    <input type="submit" class="search-submit" value="Rechercher" />
</form>