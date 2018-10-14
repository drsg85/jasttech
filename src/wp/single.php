<?php
    // vars
    $device_name        = get_field('device-name');
    $device_subtitle    = get_field('device-subtitle');
    $device_image       = get_field('device-image');
    $device_desc        = get_field('device-desc');
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/style.css" />

    <title><?php echo $device_name; ?> — Jast Charger</title>

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
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>about">О Нас</a>
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
        <article class="device">
            <div class="device__image"><img src="<?php bloginfo('stylesheet_directory') ?>/img/devices/pandora.png" alt="Зарядная станция Pandora" /></div>
            <div class="device__header-n-content">
                <header class="device__header">
                    <h3 class="device__title">Pandora</h3>
                    <p class="device__subtitle">Зарядная станция из&nbsp;10 зарядных устройств. Ёмкость
                        аккумулятора 3200&nbsp;mAh</p>
                </header>
                <div class="device__content">
                    <p>Зарядная станция PANDORA представляет собой 10 зарядных дисков, которые
                        установлены на платформе. Каждый диск оснащен двумя съемными проводами Apple
                        Lightning и Micro USB. Диски заряжаются на платформе благодаря электромагнитной
                        индукции - на каждом диске есть световой индикатор, показывающий состояние
                        аккумулятора. Данная зарядная станция идеально подходит для работы с общепитом,
                        кальянными, lounge-барами. Один диск одновременно заряжает два мобильных
                        устройства. Поверхность дисков можно использовать для размещения рекламы.</p>
                </div>
            </div>
        </article>
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

    <script src="<?php bloginfo('stylesheet_directory'); ?>/device.js"></script>
    
    <?php
        wp_footer();
    ?>
</body>

</html>