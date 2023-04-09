<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
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
                    <div class="logo">
                        <?php 
                        if( has_custom_logo() ){
                            the_custom_logo();
                        }else{
                            ?>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span><?php bloginfo( 'name' ); ?></span></a>
                            <?php
                        }
                        ?>
                    </div>                  
                </div>
            </section>
            <?php 
            if( is_page( 'home' )): ?>
            <section class="menu-area">
                <div class="container">
                    <nav class="main-menu">
                        <?php wp_nav_menu( array( 'theme_location' => 'custom_main_menu', 'depth' => 2 )); ?>
                    </nav>                    
                </div>
            </section>
            <?php endif; ?>
        </header>