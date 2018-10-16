<?php
    /*
        Template Name: Advertisment Page
    */
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/style.css" />

    <title>Реклама — Jast Charger</title>

    <?php
        wp_head();
    ?>
</head>

<body>
    <!-- Header -->
    <header class="hero hero--advert">
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
                <nav class="main-nav">
                    <ul class="main-nav__list">
                        <li class="main-nav__item">
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>">Франшиза</a>
                        </li>
                        <li class="main-nav__item">
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>business">Для Бизнеса</a>
                        </li>
                        <li class="main-nav__item">
                            <a class="main-nav__link main-nav__link--current" href="<?php echo esc_url(home_url('/')); ?>advert">Реклама</a>
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

        <h1 class="main-title">Эфективная <br><strong>рекламная площадка</strong></h1>

        <div class="hero__cta">
            <a class="cta-button contact-button" href="#">Подробнее</a>
        </div>
    </header>

    <!-- Advantages -->
    <section class="advantages advantages--advert">
        <header class="advantages__header">
            <h2 class="section-title"><strong>Почему вашим клиентам </strong> нужна эта рекламная площадка?</h2>
        </header>
        <div class="advantages__content">
            <ol class="advantages__list">
                <li class="advantages__list-item">
                    <article class="advantage">
                        <h3 class="advantage__title">Почему они это делают</h3>
                        <p class="advantage__text">Рекламная поверхность расположена на зарядном оборудовании</p>
                    </article>
                </li>
                <li class="advantages__list-item">
                    <article class="advantage">
                        <h3 class="advantage__title">Что это значит</h3>
                        <p class="advantage__text">Предоставить человеку возможность зарядить своё устройство, отличный
                            способ сфокусировать его внимание на рекламной продукции, расположенной на поверхности.</p>
                    </article>
                </li>
                <li class="advantages__list-item">
                    <article class="advantage">
                        <h3 class="advantage__title">Ваша выгода</h3>
                        <p class="advantage__text">Мы размещаем Ваши рекламные материалы на наших зарядных устройствах.
                            Каждое устройство делает от&nbsp;5 до&nbsp;20 касаний с&nbsp;клиентом в день.</p>
                    </article>
                </li>
                <li class="advantages__list-item">
                    <article class="advantage">
                        <h3 class="advantage__title">Кому мы рекламируем Ваш продукт</h3>
                        <p class="advantage__text">Мы понимаем, что когда клиент открывает рекламную кампанию, он хочет
                            получить максимальную выгоду от показа своих объявлений. Благодаря уникальным возможностям
                            сегментирования аудитории, наш клиент может быть уверен, что его объявление увидит именно
                            тот человек, который максимально настроен к бренду.</p>
                    </article>
                </li>
            </ol>
        </div>
    </section>

    <!-- Places -->
    <section class="places">
        <header class="places__header">
            <h2 class="section-title section-title--inv"><strong>Где можно размещать вашу рекламу </strong></h2>
        </header>
        <div class="places__content">
            <article class="place">
                <div class="place__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/icons/cafe.svg" alt="Рестораны и кафе" /></div>
                <h2 class="place__title">Рестораны и кафе</h2>
            </article>
            <article class="place">
                <div class="place__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/icons/movie.svg" alt="Кинотеатры" /></div>
                <h2 class="place__title">Кинотеатры</h2>
            </article>
            <article class="place">
                <div class="place__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/icons/beauty.svg" alt="Салоны красоты" /></div>
                <h2 class="place__title">Салоны красоты</h2>
            </article>
            <article class="place">
                <div class="place__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/icons/business.svg" alt="Бизнес-центры" /></div>
                <h2 class="place__title">Бизнес-центры</h2>
            </article>
            <article class="place">
                <div class="place__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/icons/mall.svg" alt="Торговые центры" /></div>
                <h2 class="place__title">Торговые центры</h2>
            </article>
            <article class="place">
                <div class="place__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/icons/bawling.svg" alt="Боулинг-клубы" /></div>
                <h2 class="place__title">Боулинг-клубы</h2>
            </article>
        </div>
        <div class="places__cta"><a class="ghost-button contact-button" href="#">Получить презентацию</a></div>
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
        </div>
    </section>

    <!-- Price plans -->
    <section class="price-plans">
        <header class="price-plans__header">
            <h2 class="section-title"><strong>Стоимость услуг</strong></h2>
        </header>
        <div class="price-plans__content">
            <article class="plan plan--mini">
                <h3 class="plan__title">Mini</h3>
                <div class="plan__desc">
                    <p>Размещение реклама на&nbsp;10&nbsp;устройствах в&nbsp;одном заведении</p>
                    <p>20 рекламных поверхностей</p>
                    <p>100–400 касаний с&nbsp;клиентом в&nbsp;день</p>
                    <p>3&nbsp000–12&nbsp;000 касаний с&nbsp;клиентом в&nbsp;месяц</p>
                </div>
                <div class="plan__price">4&nbsp000.-</div>
            </article>
            <article class="plan plan--standard">
                <h3 class="plan__title">Standard</h3>
                <div class="plan__desc">
                    <p>Размещение реклама на&nbsp;30 устройствах в&nbsp;трёх заведениях</p>
                    <p>60 рекламных поверхностей</p>
                    <p>300–1&nbsp200 касаний с&nbsp;клиентом в&nbsp;день</p>
                    <p>9&nbsp000–36&nbsp;000 касаний с&nbsp;клиентом в&nbsp;месяц</p>
                </div>
                <div class="plan__price">10&nbsp000.-</div>
            </article>
            <article class="plan plan--premium">
                <h3 class="plan__title">Premium</h3>
                <div class="plan__desc">
                    <p>Размещение реклама на&nbsp;100&nbsp;устройствах в&nbsp;10&nbsp;заведениях</p>
                    <p>200 рекламных поверхностей</p>
                    <p>1000–4&nbsp;000 касаний с&nbsp;клиентом в&nbsp;день</p>
                    <p>30&nbsp000–120&nbsp;000 касаний с&nbsp;клиентом в&nbsp;месяц</p>
                </div>
                <div class="plan__price">30&nbsp000.-</div>
            </article>
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

    <script src="<?php bloginfo('stylesheet_directory'); ?>/business.js"></script>

    <?php
        wp_footer();
    ?>
</body>

</html>