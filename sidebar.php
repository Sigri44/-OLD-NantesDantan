<div class="sidebar menu-block ps-container">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
    
    <!-- LOGO -->
    <div class="logo">
        <a href="<?php bloginfo('url'); ?>">
            <center><span>Nantes D'antan</span></center>
        </a>
    </div>
    
    <div class="divider"></div>
    
    <!-- RECHERCHE -->
    <?php include(TEMPLATEPATH . '/searchform.php'); ?>
    
    <div class="divider"></div>
    
    <!-- MENU 
    <div class="os_menu">
        <ul id="menu-principal" class="menu">
            <li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-14">
                <a title="Accueil" href="<?/*php bloginfo('url');*/ ?>">Accueil</a>
            </li>
        </ul>
    </div>
    -->
    
    <!-- NUAGE TAGS -->
    <?php if ( function_exists('wp_tag_cloud') ) : ?>
    <aside id="tag_cloud-3" class="widget widget_tag_cloud">
        <h1 class="widget-title">Mots-clés</h1>
        <div class="tagcloud">
            <?php wp_tag_cloud(); ?>
        </div>
    </aside>
    <?php endif; ?>
    <?php endif; ?>
</div>