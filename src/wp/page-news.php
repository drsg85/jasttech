<?php
    /*
        Template Name: News Page
    */
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/apple-touch-icon.png?v=2b09qvQG6Y">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>/favicon-32x32.png?v=2b09qvQG6Y">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/favicon-16x16.png?v=2b09qvQG6Y">
    <link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/site.webmanifest?v=2b09qvQG6Y">
    <link rel="mask-icon" href="<?php bloginfo('stylesheet_directory'); ?>/safari-pinned-tab.svg?v=2b09qvQG6Y" color="#5bbad5">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico?v=2b09qvQG6Y">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="<?php echo $meta_description; ?>" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/style.css?v=2" />

    <title>Новости — Jast Charger</title>

    <?php
        wp_head();
    ?>
</head>

<body>
    <!-- Header -->
    <header class="hero hero--inner">
        <button class="menu-button">
            <div class="menu-button__middle"></div>
        </button>

        <div class="hero__top">
            <div class="logo">
                <div class="logo__image">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/img/logo.svg" alt="" />
                </div>
                <div class="logo__text">Jast&nbsp;Charger</div>
            </div>

            <div class="hero__nav">
                <nav class="main-nav main-nav--inv">
                    <ul class="main-nav__list">
                        <li class="main-nav__item">
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>">Франшиза</a>
                        </li>
                        <li class="main-nav__item">
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>business">Для Бизнеса</a>
                        </li>
                        <li class="main-nav__item">
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>advert">Реклама</a>
                        </li>
                        <li class="main-nav__item">
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>about">О Нас</a>
                        </li>
                        <li class="main-nav__item">
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>faq">FAQ</a>
                        </li>
                        <li class="main-nav__item">
                            <a class="main-nav__link main-nav__link--current" href="<?php echo esc_url(home_url('/')); ?>news">Новости</a>
                        </li>
                        <li class="main-nav__item">
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>contacts">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- News -->
    
    <section class="news">
        <header class="news__header">
            <h2 class="section-title">Новости о&nbsp;самом <em>главном</em></h2>
        </header>

        <div class="news__content">
            <?php
                $args = array(
                    'category_name' => 'news'
                );

                query_posts($args);

                if (have_posts()) {
                    while(have_posts()) {
                        the_post();

                        // vars
                        $news_image     = get_field('news-image');
            ?>

                <a class="news-item" href="<?php the_permalink(); ?>">
                    <div class="news-item__image">
                        <img src="<?php echo $news_image; ?>" alt="<?php the_title(); ?>" />
                    </div>
                    <h3 class="news-item__title"><?php the_title(); ?></h3>
                </a>

            <?php
                    }
                }
            ?>
    </section>

    <!-- Footer -->
    <?php
        get_footer();
    ?>

    <!-- Popup -->
    <!-- <div class="contact-popup contact-popup--hidden"><button class="contact-popup__close"></button>
        <div class="contact-popup__cover"></div>
        <div class="contact-popup__form">
            <script>
                var amo_forms_params = {
                    "id": 361897,
                    "hash": "e7f3326ccdf13ebb3dcacd1535ecdd32",
                    "locale": "ru"
                };
            </script>
            <script id="amoforms_script" async="async" charset="utf-8" src="https://forms.amocrm.ru/forms/assets/js/amoforms.js"></script>
        </div>
    </div> -->

    <script src="<?php bloginfo('stylesheet_directory'); ?>/faq.js"></script>

    <?php
        wp_footer();
    ?>
</body>

</html>