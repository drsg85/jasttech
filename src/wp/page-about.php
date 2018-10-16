<?php
    /*
        Template Name: About Page
    */

    $video_file     = get_field('video-file');
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

    <title>О Нас — Jast Charger</title>

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

        <div class="hero__top hero__top--inv">
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
                            <a class="main-nav__link main-nav__link--current" href="<?php echo esc_url(home_url('/')); ?>about">О Нас</a>
                        </li>
                        <li class="main-nav__item">
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>faq">FAQ</a>
                        </li>
                        <li class="main-nav__item">
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>news">Новости</a>
                        </li>
                        <li class="main-nav__item">
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>contacts">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- About -->
    <section class="about">
        <header class="about__header">
            <h2 class="section-title">Мы сможем <em>зарядить!</em></h2>
        </header>
        <div class="about__content">
            <p>JAST CHARGER – одна из лидирующий компаний в сфере HORECA (услуги индустрии гостеприимства с
                непосредственным потреблением продукции в месте продажи). Наша бизнес модель построена на реализации
                зарядных станций заведениям, которые желают улучшить сервис на своем предприятии либо увеличить средний
                чек. Именно поэтому мы разработали не только различные модели сотрудничества, но и сформировали свою
                линейку зарядных станций таким образом, чтобы удовлетворить потребности каждого из заведений.</p>
            <p>Наша компания была основана в 2014 году. После успешного подтверждения действующей бизнес модели на
                региональном рынке, было получено крупное финансирование, благодаря которому стало возможно
                масштабирование на мировой рынок за счет франчайзинговой модели.</p>
            <ul>
                <li>На данный момент мы представлены в более чем 2 500 заведениях в регионах России и стран СНГ</li>
                <li>Имеем более 80 действующих партнеров</li>
            </ul>
            <div class="about__buttons">
                <a class="ghost-button contact-button" href="#">Получить презентацию</a>
            </div>
        </div>
    </section>

    <!-- Video -->
    <section class="video">
        <header class="video__header">
            <h2 class="section-title section-title--inv-d">Франшиза на&nbsp;<strong>универсальные зарядные устройства</strong></h2>
        </header>
        <div class="video__content">
            <div class="video__trigger"></div>
            <div class="video__cover"></div><video id="promo-vid" src="<?php echo $video_file; ?>"></video>
        </div>
    </section>

    <!-- Footer -->
    <?php
        get_footer();
    ?>

    <!-- Popup -->
    <div class="contact-popup contact-popup--hidden"><button class="contact-popup__close"></button>
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
    </div>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/about.js"></script>
    
    <?php
        wp_footer();
    ?>
</body>

</html>