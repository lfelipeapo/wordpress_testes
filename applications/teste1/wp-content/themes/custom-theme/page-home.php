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
            <section class="hero-cards">
                <div class="container">
                    <?php for ($i = 1; $i <= 4; $i++) : ?>
                        <div class="card">
                            <span class="card-icon">
                                <img src="<?php echo esc_url(get_theme_mod("home_card_{$i}_icon")); ?>" alt="<?php echo esc_attr(get_theme_mod("home_card_{$i}_title")); ?>">
                            </span>
                            <h2><?php echo esc_html(get_theme_mod("home_card_{$i}_title")); ?></h2>
                            <p><?php echo esc_html(get_theme_mod("home_card_{$i}_description")); ?></p>
                            <a class="btn" href="<?php echo esc_url(get_theme_mod("home_card_{$i}_link")); ?>" class="card-link"><strong><?php _e('Simule agora', 'custom'); ?></strong></a>
                        </div>
                    <?php endfor; ?>
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
            <section class="hero-benefits">
                <div class="container">
                    <div class="benefit">
                        <span class="benefit-icon">
                            <img src='<?= get_template_directory_uri() . "/assets/images/section_2_1.webp"; ?>'>
                        </span>
                        <h2>Empréstimo Consignado</h2>
                        <p>para beneficiários do INSS e pagamento a partir de 10 minutos.</p>
                    </div>
                    <div class="benefit">
                        <span class="benefit-icon">
                            <img src='<?= get_template_directory_uri() . "/assets/images/section_2_1.webp"; ?>'>
                        </span>
                        <h2>Empréstimo Consignado</h2>
                        <p>para beneficiários do INSS e pagamento a partir de 10 minutos.</p>
                    </div>
                    <div class="benefit">
                        <span class="benefit-icon">
                            <img src='<?= get_template_directory_uri() . "/assets/images/section_2_1.webp"; ?>'>
                        </span>
                        <h2>Empréstimo Consignado</h2>
                        <p>para beneficiários do INSS e pagamento a partir de 10 minutos.</p>
                    </div>
                    <div class="benefit">
                        <span class="benefit-icon">
                            <img src='<?= get_template_directory_uri() . "/assets/images/section_2_1.webp"; ?>'>
                        </span>
                        <h2>Empréstimo Consignado</h2>
                        <p>para beneficiários do INSS e pagamento a partir de 10 minutos.</p>
                    </div>
                    <div class="benefit">
                        <span class="benefit-icon">
                            <img src='<?= get_template_directory_uri() . "/assets/images/section_2_1.webp"; ?>'>
                        </span>
                        <h2>Empréstimo Consignado</h2>
                        <p>para beneficiários do INSS e pagamento a partir de 10 minutos.</p>
                    </div>
                </div>
            </section>
            <section class="hero-app">
                <div class="container">
                    <div class="content">
                        <div class="cel-bg">
                            <img src='<?= get_template_directory_uri() . "/assets/images/section_4_1.webp"; ?>'>
                        </div>
                        <div class="our-platform">
                            <h3>
                                NOSSA PLATAFORMA
                            </h3>
                            <p>
                                No site ou no aplicativo, as melhores oportunidades de crédito para você
                            </p>
                            <ul class="app-benefits">
                                <li><span><img src='<?= get_template_directory_uri() . "/assets/images/check.svg"; ?>'></span>Fácil acesso e rapidez nos processos de contratação</li>
                                <li><span><img src='<?= get_template_directory_uri() . "/assets/images/check.svg"; ?>'></span>Independência para você verificar suas informações 24h por dia</li>
                                <li><span><img src='<?= get_template_directory_uri() . "/assets/images/check.svg"; ?>'></span>Liberdade para você escolher a sua melhor oportunidade</li>
                                <li><span><img src='<?= get_template_directory_uri() . "/assets/images/check.svg"; ?>'></span>Portabilidade online do seu consignado</li>
                            </ul>
                            <div class="download">
                                <div class="google"><a href="#"><img src='<?= get_template_directory_uri() . "/assets/images/app_google.webp"; ?>'></a></div>
                                <div class="app-store"><a href="#"><img src='<?= get_template_directory_uri() . "/assets/images/app_apple.webp"; ?>'></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="hero-porpose">
                <div class="container">
                    <div class="content">
                        <h3>
                            PROPÓSITO
                        </h3>
                        <p>
                            Melhorar a vida financeira dos brasileiros
                        </p>
                        <span>Temos mais de 2 bilhões em investimento para oferecermos as menores taxas a você.</span>
                        <a href="#" class="btn"><strong>Simule agora</strong></a>
                    </div>
                    <div class="content">
                        <div class="graph"><img src='<?= get_template_directory_uri() . "/assets/images/section_5_1.webp"; ?>'></div>
                    </div>
                </div>
            </section>
            <section class="hero-final">
                <div class="container">
                    <div class="content one">
                        <span><img src='<?= get_template_directory_uri() . "/assets/images/section_6_1.webp"; ?>'></span>
                        <p class="msg">Faça como os <strong>mais de 500 mil brasileiros</strong> que já reduziram o endividamento com meutudo.</p>
                    </div>
                    <div class="content two">
                        <div class="shape">
                            <img class="img" src='<?= get_template_directory_uri() . "/assets/images/shape_3.png"; ?>'>
                            <img class="img2" src='<?= get_template_directory_uri() . "/assets/images/section_7_1.webp"; ?>'>
                        </div>
                        <div class="app">
                            <p class="msg2">Baixe o aplicativo meutudo<strong>.</strong> e confira todas as suas oportunidades.
                            </p>
                            <div class="download2">
                                <div class="google"><a href="#"><img src='<?= get_template_directory_uri() . "/assets/images/app_google.webp"; ?>'></a></div>
                                <div class="app-store"><a href="#"><img src='<?= get_template_directory_uri() . "/assets/images/app_apple.webp"; ?>'></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </main>
    </div>
</div>
<?php get_footer(); ?>