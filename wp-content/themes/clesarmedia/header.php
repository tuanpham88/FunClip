<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<meta name = "viewport" content = "user-scalable=no, width=device-width">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
        <div id="header-top">
            <div class="title-menu">
                 <?php
                    $menu_location = 'Top';
                    $menu_locations = get_nav_menu_locations();
                    $menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
                    $menu_name = (isset($menu_object->name) ? $menu_object->name : '');
                    echo esc_html($menu_name);
                    ?>
            </div>
            <div class="social-sec section-social">
                <?php // Sanitization is done to clean user input before saving it to database
                    $rss_clesarmedia = get_theme_mod( 'clesarmedia_rss' , ''  );
                    $facebook_clesarmedia = get_theme_mod( 'clesarmedia_facebook' , ''  );
                    $google_clesarmedia = get_theme_mod( 'clesarmedia_google' , ''  );
                    $vk_clesarmedia = get_theme_mod( 'clesarmedia_vk' , ''  );
                    $twitter_clesarmedia = get_theme_mod( 'clesarmedia_twitter' , ''  );
                ?>
                <?php if ($rss_clesarmedia !== '') { ?><a href="<?php echo esc_url($rss_clesarmedia); ?>"><i class="fa fa-rss"></i></a> <?php } ?>
                <?php if ($facebook_clesarmedia !== '') { ?><a href="<?php echo esc_url($facebook_clesarmedia); ?>"><i class="fa fa-facebook"></i></a><?php } ?>
                <?php if ($google_clesarmedia !== ''){ ?><a href="<?php echo esc_url($google_clesarmedia); ?>"><i class="fa fa-google-plus"></i></a><?php } ?>
                <?php if ($vk_clesarmedia !== '') { ?><a href="<?php echo esc_url($vk_clesarmedia); ?>"><i class="fa fa-vk"></i></a><?php } ?>
                <?php if ($twitter_clesarmedia !== '') { ?><a href="<?php echo esc_url($twitter_clesarmedia); ?>"><i class="fa fa-twitter"></i></a><?php } ?>
            </div>
            <div class="menu_bar_top">
                <button class="bt-menu-top"><i class="fa fa-bars"></i></button>
            </div>
            <nav class="menu">
                <?php wp_nav_menu( array( 'theme_location' => 'Top', 'menu_class' => 'active' ) ); ?>
            </nav>
            <div id="search_top">
                <?php get_search_form(); ?>
            </div>
        </div>
        <div class="clear"></div>
        <?php get_template_part( 'breakingnews'); ?>
        <div id="menu_principale" role="navigation">
                <?php if (get_header_image() != '') {?>
                <div id="logo">
                    <div id="logo-center-responsive">
                    <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
                    </div>
                </div>
                <div class="menu2_bar">
                    <button class="bt-menu2"><i class="fa fa-bars"></i></button>
                </div>
                <nav class="menu2">
                    <?php wp_nav_menu( array( 'theme_location' => 'header', 'menu_class' => 'active' ) ); ?>
                </nav>
                <?php } else { ?>
                <div class="menu2_bar">
                    <button class="bt-menu2"><i class="fa fa-bars"></i></button>
                </div>
                <nav class="menu2">
                    <?php wp_nav_menu( array( 'theme_location' => 'header', 'menu_class' => 'active' ) ); ?>
                </nav>
                <?php } ?>
        </div>
    </header>
