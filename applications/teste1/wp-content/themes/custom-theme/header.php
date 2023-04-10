<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header>
            <section class="top-bar">
                <div class="container">
                    <nav class="main-menu">
                        <div class="menu-items">
                            <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                            ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>"><div class="logo-image"><img src="<?= get_template_directory_uri() . "/assets/images/logo.webp" ?>"></img></div></a>
                            <?php
                        }
                        ?>
                        <?php wp_nav_menu(array('theme_location' => 'custom_main_menu', 'depth' => 2)); ?>
                    </div>
                    </nav>
                </div>
            </section>
        </header>