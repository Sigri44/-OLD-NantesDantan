<div class="sidebar menu-block ps-container">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
        <div class="logo">
            <a href="<?php bloginfo('url'); ?>">
                <center><span>Nantes D'antan</span></center>
            </a>
        </div>
        
        <div class="divider"></div>
        
        <?php include(TEMPLATEPATH . '/searchform.php'); ?>
        
        <div class="divider"></div>
        
        <?php if ( function_exists('wp_list_cats') ) : ?>
        <aside id="category_list" class="widget widget_category">
            <h1 class="widget-title">Catégories</h1>
            <div class="listcategory">
                <?php wp_list_cats('list') ?>
            </div>
        </aside>
        <?php endif; ?>
    <?php endif; ?>
</div>