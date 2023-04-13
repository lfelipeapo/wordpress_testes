<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php
            $hero_title = 'A gente <strong>transforma</strong> o crédito no Brasil para que você tenha <strong>dinheiro mais barato na hora que precisar</strong>';
            $hero_subtitle = get_theme_mod('set_hero_subtitle', __('Please, type some subtitle', 'custom'));
            $hero_button_link = get_theme_mod('set_hero_button_link', '#');
            $hero_button_text = get_theme_mod('set_hero_button_text', __('Learn More', 'custom'));
            $hero_height = get_theme_mod('set_hero_height', 630);
            $hero_background = wp_get_attachment_url(get_theme_mod('set_hero_background'));
            ?>
            <section class="hero" style="background-image: url('<?= !isset($hero_background) ? esc_url($hero_background) : get_template_directory_uri() . "/assets/images/section_1_1.webp" ?>');">
                <div class="overlay" style="min-height: <?php echo esc_attr($hero_height) ?>px">
                    <div class="container">
                        <div class="title">
                            <h1><?= ($hero_title); ?></h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="hero-cards" style="max-height: 270px;">
                <div class="container">
                    <div class="card">
                        <span class="card-icon">
                            <img src='<?= get_template_directory_uri() . "/assets/images/section_2_1.webp"; ?>'>
                        </span>
                        <h2>Empréstimo Consignado</h2>
                        <p>para beneficiários do INSS e pagamento a partir de 10 minutos.</p>
                        <a href="#" class="btn"><strong>Simule agora</strong></a>
                    </div>
                    <div class="card">
                        <span class="card-icon">
                            <img src='<?= get_template_directory_uri() . "/assets/images/section_2_1.webp"; ?>'>
                        </span>
                        <h2>Empréstimo Consignado</h2>
                        <p>para beneficiários do INSS e pagamento a partir de 10 minutos.</p>
                        <a href="#" class="btn"><strong>Simule agora</strong></a>
                    </div>
                    <div class="card">
                        <span class="card-icon">
                            <img src='<?= get_template_directory_uri() . "/assets/images/section_2_1.webp"; ?>'>
                        </span>
                        <h2>Empréstimo Consignado</h2>
                        <p>para beneficiários do INSS e pagamento a partir de 10 minutos.</p>
                        <a href="#" class="btn"><strong>Simule agora</strong></a>
                    </div>
                    <div class="card">
                        <span class="card-icon">
                            <img src='<?= get_template_directory_uri() . "/assets/images/section_2_1.webp"; ?>'>
                        </span>
                        <h2>Empréstimo Consignado</h2>
                        <p>para beneficiários do INSS e pagamento a partir de 10 minutos.</p>
                        <a href="#" class="btn"><strong>Simule agora</strong></a>
                    </div>
                </div>
            </section>
            <section class="hero-vantages">
                <div class="container">
                    <h3>
                        VANTAGENS
                    </h3>
                    <p>
                        Melhore a sua vida financeira com eficiência e tecnologia
                    </p>
                    <span>Somos contra grandes bancos, financeiras e intermediários que só querem lucrar com você. Nosso pensamento é diferente.</span>
                </div>
            </section>
            <section class="home-blog">
                <div class="container">
                    <h2><?php esc_html_e('Latest News', 'custom') ?></h2>
                    <?php

                    $per_page = get_theme_mod('set_per_page', 3);
                    $category_include = get_theme_mod('set_category_include');
                    $category_exclude = get_theme_mod('set_category_exclude');

                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => esc_html($per_page),
                        'category__in'  => explode(",", esc_html($category_include)),
                        'category__not_in' => explode(",", esc_html($category_exclude))
                    );

                    $postlist = new WP_Query($args);

                    if ($postlist->have_posts()) :
                        while ($postlist->have_posts()) : $postlist->the_post();
                            get_template_part('parts/content', 'latest-news');
                        endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <p><?php esc_html_e('Nothing yet to be displayed!', 'custom') ?></p>
                    <?php endif; ?>
                </div>
            </section>
        </main>
    </div>
</div>
<?php get_footer(); ?>