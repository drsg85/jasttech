<?php
    /*
        Template Name: Home Page
    */

    // Hero
    $hero_motto     = get_field('hero-motto');

    // About
    $about_title    = get_field('about-title');
    $about_text     = get_field('about-text');

    // Video
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

    <title>Франшиза — Jast Charger</title>

    <!-- v-credit.su -->
    <script type="text/javascript" src="https://v-credit.su/services/easycredit/inc.js"></script>

    <?php wp_head(); ?>
</head>

<body>
    <!-- Header -->
    <header class="hero">
        <button class="menu-button"><div class="menu-button__middle"></div></button>

        <div class="hero__top">
            <div class="logo">
                <div class="logo__image"><img src="<?php bloginfo('stylesheet_directory') ?>/img/logo.svg" alt="" /></div>
                <div class="logo__text">Jast&nbsp;Charger</div>
            </div>

            <div class="hero__nav">
                <nav class="main-nav">
                    <ul class="main-nav__list">
                        <li class="main-nav__item">
                            <a class="main-nav__link main-nav__link--current" href="<?php echo esc_url(home_url('/')); ?>">Франшиза</a>
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

        <div class="hero__dummy"></div>

        <h1 class="main-title"><?php echo $hero_motto; ?></h1>

        <div class="hero__cta">
            <a class="cta-button contact-button" href="#">Подробнее</a>
        </div>
    </header>

    <!-- About -->
    <section class="about">
        <header class="about__header">
            <h2 class="section-title">
                <?php echo $about_title; ?>
            </h2>
        </header>
        <div class="about__content">
            <p class="about__text">
                <?php echo $about_text; ?>
            </p>
            <div class="about__buttons">
                <a class="ghost-button contact-button" href="#">Скачать презентацию</a>
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

    <!-- Why -->
    <section class="why">
        <header class="why__header">
            <h2 class="section-title">Почему <strong>Jast&nbsp;Charger?</strong></h2>
        </header>
        <div class="why__content">
            <ol class="why-list">
                <li class="why-list__item">Средний доход партнёров от 250&nbsp;000 рублей в&nbsp;месяц</li>
                <li class="why-list__item">Минимальный срок окупаемости от&nbsp;1 до&nbsp;4 месяцев</li>
                <li class="why-list__item">Возможность начать с&nbsp;минимальными вложениями</li>
                <li class="why-list__item">Даём возможность приобрести франшизу и&nbsp;оборудование в&nbsp;кредит</li>
                <li class="why-list__item">Быстрая <br>обучаемость</li>
                <li class="why-list__item">Несколько вариантов монетизации бизнеса</li>
                <li class="why-list__item">Данный вид деятельность легко масштабируется в&nbsp;регионы</li>
                <li class="why-list__item">До 3&nbsp;рабочих дней в&nbsp;месяц</li>
            </ol>
        </div>
    </section>

    <!-- Turnkey -->
    <section class="turnkey">
        <header class="turnkey__header">
            <h2 class="section-title section-title--inv">После оплаты Вы&nbsp;получаете <strong>бизнес под ключ
                    в&nbsp;своём городе</strong></h2>
        </header>
        <div class="turnkey__content">
            <article class="feature">
                <div class="feature__icon"><img src="<?php bloginfo('stylesheet_directory') ?>/img/icons/customer-support.svg" alt="Поддержка клиентов" /></div>
                <h3 class="feature__title">Мы подберём клиентов в&nbsp;Вашем городе</h3>
            </article>
            <article class="feature">
                <div class="feature__icon"><img src="<?php bloginfo('stylesheet_directory') ?>/img/icons/box.svg" alt="Продукты" /></div>
                <h3 class="feature__title">Дадим весь материал для&nbsp;продажи</h3>
            </article>
            <article class="feature">
                <div class="feature__icon"><img src="<?php bloginfo('stylesheet_directory') ?>/img/icons/number-1.svg" alt="Номер 1" /></div>
                <h3 class="feature__title">Обеспечим узнаваемость в&nbsp;городе</h3>
            </article>
            <article class="feature">
                <div class="feature__icon"><img src="<?php bloginfo('stylesheet_directory') ?>/img/icons/cash.svg" alt="Окупаемость" /></div>
                <h3 class="feature__title">Гарантия окупаемости или мы&nbsp;выкупим ваши устройства обратно</h3>
            </article>
        </div>
    </section>

    <!-- Packages -->
    <section class="packages">
        <header class="packages__header">
            <h2 class="section-title">Пакеты франшиз</h2>
        </header>

        <div class="packages__content">

        <?php
            $args = array(
                'category_name' => 'package'
            );

            query_posts($args);

            if (have_posts()) {
                while(have_posts()) {
                    the_post();

                    // vars
                    $pack_name      = get_field('pack-name');
                    $pack_image     = get_field('pack-image');
                    $pack_desc      = get_field('pack-desc');
                    $pack_price     = get_field('pack-price');
        ?>

            <article class="package">
                <div class="package__image">
                    <img src="<?php echo $pack_image; ?>" alt="Пакет <?php echo $pack_name; ?> от Jast Charger" />
                </div>

                <div class="package__container">
                    <header class="package__header">
                        <h3 class="package__title creditgoods">Пакет <strong><?php echo $pack_name; ?></strong></h3>
                        <p class="package__income">Средний месячный доход: <em>23&nbsp;000 рублей</em></p>
                    </header>
                    <div class="package__content">
                        <?php echo $pack_desc; ?>
                    </div>
                    <footer class="package__footer">
                        <p class="package__price creditprice"><?php echo $pack_price; ?>.-</p>
                        <div class="package__buttons">
                            <a class="ghost-button contact-button" href="#">Купить</a>
                            <a class="ghost-button gocredit" href="javascript:void(0);">Купить в кредит</a>
                            <!-- <br><a href="javascript:void(0);" class="gocredit show_rate"data-tpl="В кредит от руб/мес"><span>Купить вкредит</span></a> -->
                        </div>
                        <a class="package__more contact-button" href="#">Подробнее</a>
                    </footer>
                </div>
            </article>

        <?php
                }
            }
        ?>

        </div>
    </section>

    <!-- Devices -->
    <section class="devices">
        <header class="devices__header">
            <h2 class="section-title">Устройства, благодаря которым вы&nbsp;можете обеспечить себе <strong>стабильный
                    пассивный доход</strong></h2>
        </header>

        <div class="devices__content">
            <?php
                $args = array(
                    'category_name' => 'device'
                );

                query_posts($args);

                if (have_posts()) {
                    while (have_posts()) {
                        the_post();

                        // vars
                        $device_name    = get_field('device-name');
                        $device_thumb   = get_field('device-thumb');
            ?>

                <article class="device-item">
                    <div class="device-item__image">
                        <img src="<?php echo $device_thumb; ?>" alt="Устройство <?php echo $device_name; ?>" />
                    </div>
                    <header class="device-item__header">
                        <h3 class="device-item__title"><?php echo $device_name; ?></h3>
                        <a class="device-item__more" href="<?php the_permalink(); ?>">Подробнее</a>
                    </header>
                </article>

            <?php
                    }
                }
            ?>
            <!-- <div class="slider">
                <button class="slider__prev">&larr;</button>
                <button class="slider__next">&rarr;</button>
                <div class="slider__slides">
                    <div class="slider__slide">
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
                    </div>
                    <div class="slider__slide">
                        <article class="device">
                            <div class="device__image"><img src="<?php bloginfo('stylesheet_directory') ?>/img/devices/bion.png" alt="Зарядная станция Bion" /></div>
                            <div class="device__header-n-content">
                                <header class="device__header">
                                    <h3 class="device__title">Bion</h3>
                                    <p class="device__subtitle">Зарядная станция из&nbsp;10 зарядных устройств. Ёмкость
                                        аккумулятора 3000&nbsp;mAh</p>
                                </header>
                                <div class="device__content">
                                    <p>Зарядная станция BION обладает неповторимым, ярким и запоминающимся дизайном. На
                                        каждом зарядном блоке есть вытянутый световой индикатор, который показывает
                                        состояние аккумулятора. В комплекте идут провода Apple Lightning, Micro USB и
                                        USB Type-C. Заряжаются блоки также благодаря электромагнитной индукции от
                                        зарядной платформы. Зарядная станция BION идеально подходит для работы с
                                        общепитом, фитнес центрами, кальянными, lounge-барами. Поверхность дисков можно
                                        использовать для размещения рекламы.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="slider__slide">
                        <article class="device">
                            <div class="device__image"><img src="<?php bloginfo('stylesheet_directory') ?>/img/devices/astra.jpg" alt="Зарядная станция Astra" /></div>
                            <div class="device__header-n-content">
                                <header class="device__header">
                                    <h3 class="device__title">Astra</h3>
                                    <p class="device__subtitle">Зарядная станция из&nbsp;10 зарядных устройств. Ёмкость
                                        аккумулятора 3000&nbsp;mAh</p>
                                </header>
                                <div class="device__content">
                                    <p>Зарядная станция ASTRA оборудована 10 компактными зарядными блоками.
                                        Поддерживаются Apple Lightning, Micro USB и USB Type-C. Подзарядка
                                        осуществляется путем прямого контакта каждого из блоков. Зарядная станция ASTRA
                                        идеально подходит для работы с фитнес клубами.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="slider__slide">
                        <article class="device">
                            <div class="device__image"><img src="<?php bloginfo('stylesheet_directory') ?>/img/devices/prometheus.jpg" alt="Зарядная станция Prometheus" /></div>
                            <div class="device__header-n-content">
                                <header class="device__header">
                                    <h3 class="device__title">Prometheus</h3>
                                    <p class="device__subtitle">Зарядная станция из&nbsp;16 зарядных устройств. Ёмкость
                                        аккумулятора&nbsp;1600 mAh</p>
                                </header>
                                <div class="device__content">
                                    <p>Зарядные блоки станции Prometheus выполнены в необычном стиле, напоминающем всем
                                        до боли знакомые пальчиковые батарейки. Поддерживаются Apple Lightning, Micro
                                        USB и USB Type-C. Prometheus это решение для больших lounge-баров и для
                                        заведений, в которых отдыхают большие компании.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="slider__slide">
                        <article class="device">
                            <div class="device__image"><img src="<?php bloginfo('stylesheet_directory') ?>/img/devices/volt8.png" alt="Зарядная станция Volt 8" /></div>
                            <div class="device__header-n-content">
                                <header class="device__header">
                                    <h3 class="device__title">Volt 8</h3>
                                    <p class="device__subtitle">Зарядная станция из&nbsp;8 зарядных устройств. Ёмкость
                                        аккумулятора 8000&nbsp;mAh</p>
                                </header>
                                <div class="device__content">
                                    <p>Это настоящий монстр среди зарядных станций. Станция оснащена 8 зарядными
                                        блоками по 8000 mA каждый! Помимо этого, зарядные устройства оснащены большой
                                        площадью для рекламы: её можно размещаться как на внешнюю сторону, так и на
                                        внутреннюю (на устройстве есть крышка). Поддерживаются Apple Lightning, Micro
                                        USB и USB Type-C. Зарядная станция VOLT-8 идеально подходит для работы с
                                        общепитом, кальянными, lounge-барами.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="slider__slide">
                        <article class="device">
                            <div class="device__image"><img src="<?php bloginfo('stylesheet_directory') ?>/img/devices/volt3.png" alt="Зарядная станция Volt 3" /></div>
                            <div class="device__header-n-content">
                                <header class="device__header">
                                    <h3 class="device__title">Volt 3</h3>
                                    <p class="device__subtitle">Зарядная станция из&nbsp;3 зарядных устройств. Ёмкость
                                        аккумулятора 8000&nbsp;mAh</p>
                                </header>
                                <div class="device__content">
                                    <p>Аналог зарядной станции VOLT-8. Единственное отличие — это количество зарядных
                                        устройств, установленных на станцию, тут их 3. Поддерживаются Apple Lightning,
                                        Micro USB и USB Type-C. Аналогичные возможности по размещению рекламы. Идеально
                                        подходит для небольших заведений в сфере общепита.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="slider__slide">
                        <article class="device">
                            <div class="device__image"><img src="<?php bloginfo('stylesheet_directory') ?>/img/devices/volt2.png" alt="Зарядная станция Volt 2" /></div>
                            <div class="device__header-n-content">
                                <header class="device__header">
                                    <h3 class="device__title">Volt 2</h3>
                                    <p class="device__subtitle">Зарядная станция из&nbsp;2 зарядных устройств. Ёмкость
                                        аккумулятора 8000&nbsp;mAh</p>
                                </header>
                                <div class="device__content">
                                    <p>Аналог зарядной станции VOLT-8. Единственное отличие — это количество зарядных
                                        устройств, установленных на станцию, тут их 2. Поддерживаются Apple Lightning,
                                        Micro USB и USB Type-C. Аналогичные возможности по размещению рекламы. Идеально
                                        подходит для тестирования услуги в небольших заведениях в сфере общепита,
                                        фитнеса, кальян-баров, lounge-баров.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="slider__slide">
                        <article class="device">
                            <div class="device__image"><img src="<?php bloginfo('stylesheet_directory') ?>/img/devices/atlant.png" alt="Зарядная станция Atlant" /></div>
                            <div class="device__header-n-content">
                                <header class="device__header">
                                    <h3 class="device__title">Pandora</h3>
                                    <p class="device__subtitle">Зарядная станция. Ёмкость аккумулятора 13000&nbsp;mAh</p>
                                </header>
                                <div class="device__content">
                                    <p>Зарядная станция ATLANT это идеальное решение для заведений в сфере общепита.
                                        Все мы с Вами каждый день видим тейбл-тенты в кафе, узнаем из них новые акции,
                                        скидки, новости. Теперь они будут еще и заряжать мобильные устройства. Подходит
                                        для работы с общепитом, кальянными, lounge-барами.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <!-- You Get -->
    <section class="u-get">
        <header class="u-get__header">
            <h2 class="section-title section-title--inv">Что получает <strong>франчайзи</strong></h2>
        </header>
        <div class="u-get__content">
            <article class="item">
                <div class="item__icon"><img src="<?php bloginfo('stylesheet_directory') ?>/img/icons/plug.svg" alt="Набор устройств" /></div>
                <h3 class="item__title">Комплект зарядных станций и&nbsp;набор проводов</h3>
            </article>
            <article class="item">
                <div class="item__icon"><img src="<?php bloginfo('stylesheet_directory') ?>/img/icons/shipping.svg" alt="Доставка" /></div>
                <h3 class="item__title">Бесплатная доставка и&nbsp;хранение</h3>
            </article>
            <article class="item">
                <div class="item__icon"><img src="<?php bloginfo('stylesheet_directory') ?>/img/icons/online-support.svg" alt="Поддержка онлайн" /></div>
                <h3 class="item__title">Персональный менеджер</h3>
            </article>
            <article class="item">
                <div class="item__icon"><img src="<?php bloginfo('stylesheet_directory') ?>/img/icons/layer.svg" alt="Юридическая поддержка" /></div>
                <h3 class="item__title">Юридическая поддержка</h3>
            </article>
            <article class="item">
                <div class="item__icon"><img src="<?php bloginfo('stylesheet_directory') ?>/img/icons/portal.svg" alt="Диллерский портал" /></div>
                <h3 class="item__title">Дилерский портал</h3>
            </article>
            <article class="item">
                <div class="item__icon"><img src="<?php bloginfo('stylesheet_directory') ?>/img/icons/clients.svg" alt="Клиенты" /></div>
                <h3 class="item__title">Предоставление конечных клиентов из&nbsp;вашего города</h3>
            </article>
            <article class="item">
                <div class="item__icon"><img src="<?php bloginfo('stylesheet_directory') ?>/img/icons/web-site.svg" alt="Веб сайт" /></div>
                <h3 class="item__title">Представительский сайт</h3>
            </article>
            <article class="item">
                <div class="item__icon"><img src="<?php bloginfo('stylesheet_directory') ?>/img/icons/wires.svg" alt="Устройства" /></div>
                <h3 class="item__title">Доступ к&nbsp;широкой линейке устройств</h3>
            </article>
            <article class="item">
                <div class="item__icon"><img src="<?php bloginfo('stylesheet_directory') ?>/img/icons/target.svg" alt="Цель" /></div>
                <h3 class="item__title">Маркетинговая поддержка</h3>
            </article>
        </div>
        <div class="u-get__buttons">
            <a class="cta-button contact-button" href="#">Подробнее</a>
        </div>
    </section>

    <!-- Monetization Models -->
    <section class="models">
        <header class="models__header">
            <h2 class="section-title">4 модели <strong>монетизации бизнеса:</strong></h2>
        </header>
        <div class="models__set">
            <h3 class="models__title">Основные:</h3>
            <div class="models__content">
                <article class="model">
                    <div class="model__icon"><img src="<?php bloginfo('stylesheet_directory') ?>/img/icons/charging.svg" alt="Зарядка гаджетов" /></div>
                    <h4 class="model__title">от 15&nbsp;000 рублей</h4>
                    <p class="model__text">Заряжая гаджеты клиентов, 1 станция <strong>принесёт Вам доход от
                            15&nbsp;000 до 60&nbsp;000 рублей в месяц</strong></p>
                </article>
                <article class="model">
                    <div class="model__icon"><img src="<?php bloginfo('stylesheet_directory') ?>/img/icons/megaphone.svg" alt="Реклама" /></div>
                    <h4 class="model__title">от 3000 рублей</h4>
                    <p class="model__text">Размещая самостоятельно рекламу на своих зарядных станциях Вы можете
                        получать <strong>до 3&nbsp;000 рублей в месяц с одной зарядной станции</strong></p>
                </article>
            </div>
        </div>
        <div class="models__set">
            <h3 class="models__title">Дополнительные:</h3>
            <div class="models__content">
                <article class="model">
                    <div class="model__icon"><img src="<?php bloginfo('stylesheet_directory') ?>/img/icons/rent.svg" alt="Сдача в аренду" /></div>
                    <h4 class="model__title">от 70&nbsp;000 рублей</h4>
                    <p class="model__text">На сдаче зарядных станций в аренду. Например, аренда одной станции компании
                        Jast Charger составляет от 7&nbsp;000 до 15&nbsp;000 рублей в месяц. Сдавая в аренду 10 станций
                        Ваш доход в месяц составит <strong>от 70&nbsp;000 до 150&nbsp;000 рублей в месяц</strong></p>
                </article>
                <article class="model">
                    <div class="model__icon"><img src="<?php bloginfo('stylesheet_directory') ?>/img/icons/resale.svg" alt="Перепродажа" /></div>
                    <h4 class="model__title">от 150&nbsp;000 рублей</h4>
                    <p class="model__text">На перепродаже зарядного оборудования. Доход при реализации проектов
                        франшизы варьируется <strong>от 150&nbsp;000 до 600&nbsp;000 рублей</strong></p>
                </article>
            </div>
        </div>
    </section>

    <!-- Our Clients -->
    <section class="clients">
        <div class="clients__left">
            <header class="clients__header">
                <h2 class="section-title">Наши <strong>клиенты</strong></h2>
            </header>
            <div class="clients__left-content">
                <div class="clients__image"><img src="<?php bloginfo('stylesheet_directory') ?>/img/clients/sberbank.png" alt="Сбербанк" /></div>
                <div class="clients__image"><img src="<?php bloginfo('stylesheet_directory') ?>/img/clients/oldboy.png" alt="сеть барбершопов Oldboy" /></div>
                <div class="clients__image"><img src="<?php bloginfo('stylesheet_directory') ?>/img/clients/yakitoriya.png" alt="сеть ресторанов японской кухни Якитория" /></div>
                <div class="clients__image"><img src="<?php bloginfo('stylesheet_directory') ?>/img/clients/radisson.png" alt="сеть отелей Radisson" /></div>
                <div class="clients__image"><img src="<?php bloginfo('stylesheet_directory') ?>/img/clients/subway.png" alt="сеть ресторанов быстрого питания Subway" /></div>
                <div class="clients__image"><img src="<?php bloginfo('stylesheet_directory') ?>/img/clients/the-office.png" alt="" /></div>
            </div>
        </div>
        <div class="clients__right">
            <div class="clients__subheader">
                <h3 class="section-title section-title--inv">Нам доверяют <strong>крупнейшие порталы</strong> франшиз</h3>
            </div>
            <div class="clients__right-content">
                <div class="clients__image clients__image--mb40"><img src="<?php bloginfo('stylesheet_directory') ?>/img/clients/businesmens.png" alt="Бизнесменс" /></div>
                <div class="clients__image clients__image--mb40"><img src="<?php bloginfo('stylesheet_directory') ?>/img/clients/topfranchise.png" alt="TopFranchise.ru" /></div>
                <div class="clients__image clients__image--mb40"><img src="<?php bloginfo('stylesheet_directory') ?>/img/clients/beboss.png" alt="БиБосс" /></div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <header class="testimonials__header">
            <h2 class="section-title">Отзывы</h2>
        </header>

        <div class="testimonials__content" id="comments">
            <?php
                $args = array(
                    'category_name' => 'testimonial'
                );

                query_posts($args);

                if (have_posts()) {
                    while(have_posts()) {
                        the_post();

                        // vars
                        $comment_title      = get_field('comment-title');
                        $comment_text       = get_field('comment-text');
                        $comment_video      = get_field('comment-video');
                        $comment_image      = get_field('comment-image');
            ?>
            
                <article class="comment">
                    <div class="comment__content">
                        <video src="<?php echo $comment_video; ?>"></video>
                        <div class="comment__trigger"></div>
                        <div class="comment__cover"></div>
                    </div>
                    <header class="comment__header">
                        <h3 class="comment__title">
                            <?php echo $comment_title; ?>
                        </h3>
                        <p class="comment__text"><?php echo $comment_text; ?></p>
                    </header>
                </article>

            <?php

                    }
                }
            ?>
        </div>
        <div class="testimonials__cta"><a class="ghost-button contact-button" href="#">Присоединиться</a></div>
    </section>

    <!-- Footer -->
    <?php
        get_footer();
    ?>

    <!-- Popup -->
    <div class="contact-popup contact-popup--hidden">
        <button class="contact-popup__close"></button>
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

    <?php wp_footer(); ?>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/main.js"></script>
</body>

</html>