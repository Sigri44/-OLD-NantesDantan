<html>
<head>
    <title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>
    <link rel="canonical" href="http://nantesdantan.free-h.net/" rel="nofollow" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="author" content="Sigri44" />
    <meta name="contact" content="contact@creawest.com" />
    <meta name="dcterms.rightHolder" content="Copyright (c) 2016-2017 Créa'West. Tous droits réservés." />
	<meta property="og:type" content="article" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" id="ndt-google-font-css" href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700|Open+Sans:300,400,700" type="text/css" media="all">
    <link rel="stylesheet" id="magnific-popup-css" href="<?php bloginfo('template_directory'); ?>/magnific-popup.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>magnific-popup.css" />
    <?php wp_head(); ?>
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php //comments_popup_script(); <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="menu-toggler-p">
        <a href="#" class="menu-toggler">
            <i class="fa os-icon-bars"></i>
            <span class="menu-toggler-label">Menu</span>
        </a>
        <a href="#" class="sidebar-toggler">
            <i class="fa os-icon-bars"></i>
            <span class="sidebar-toggler-label">Sidebar</span>
        </a>
        <a href="http://nantesdantan.free-h.net/" class="logo">
            <img class="logoNDT" src="<?php bloginfo('template_directory'); ?>/images/logo-nantes-dantan.svg" alt="Nantes D'antan" />
        </a>
    </div>
    <div class="sidebar-main-toggler">
        <i class="fa os-icon-bars"></i>
    </div>