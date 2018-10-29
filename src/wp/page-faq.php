<?php
    /*
        Template Name: Faq Page
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

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/style.css?v=4" />

    <title>FAQ — Jast Charger</title>

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
                            <a class="main-nav__link main-nav__link--current" href="<?php echo esc_url(home_url('/')); ?>faq">FAQ</a>
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

    <!-- FAQ -->
    <section class="faq faq--inner">
        <header class="faq__header">
            <h2 class="section-title">Часто задаваемые <em>вопросы</em></h2>
        </header>
        <div class="faq__content">
            <article class="question">
                <h3 class="question__definition">Какие устройства могут заряжать станции Jast&nbsp;Charger?</h3>
                <p class="question__answer">Устройство подходит для зарядки практически любых телефонов, смартфонов, а
                    также планшетов, оснащено разъемами для 99% предлагаемых на рынке моделей: Apple, Samsung, Nokia,
                    Sony, HTC, Fly, Philips, Vertu, LG и многих других.</p>
            </article>
            <article class="question">
                <h3 class="question__definition">Как будут работать станции в моём заведении?</h3>
                <p class="question__answer">Для того чтобы исполнить просьбу клиента, вашим официантам достаточно
                    просто захватить с собой портативное зарядное устройство Jast Charger и элегантно преподнести его.
                    Без надобности распутывать клубок из десятка разных зарядок, рискуя сломать провод. Без
                    необходимости следить за смартфоном клиента на кухне. Без переходников, валяющихся в ящике.
                    Официанты будут обслуживать гостей так же быстро, как и прежде, ни на что не отвлекаясь.</p>
            </article>
            <article class="question">
                <h3 class="question__definition">Что получит организация от этой услуги в своём заведении?</h3>
                <p class="question__answer">Как только клиентам понадобится зарядить свой гаджет, а они будут не дома,
                    они вспомнят о месте где это можно сделать. Вспомнят о том, с каким комфортом они в прошлый раз
                    подзарядили свой телефон. А затем зайдут и зарядят его снова, попутно заказав латте или
                    бизнес-ланч. Заведение получает лояльность клиентов: его рекомендуют, как отличное заведение, в
                    котором всегда можно зарядить любую модель смартфона на 10 столиках одновременно. К тому же, теперь
                    есть новая уникальная рекламная площадка на устройствах и станции, где можно разместить рекламу
                    одного из заведений или партнеров.</p>
            </article>
            <article class="question">
                <h3 class="question__definition">Какие дополнительные затраты я понесу?</h3>
                <p class="question__answer">Никаких! На устройство действует гарантия 6 месяцев.</p>
            </article>
            <article class="question">
                <h3 class="question__definition">Есть ли защита от воровства?</h3>
                <p class="question__answer">Конечно, мы предусмотрели этот момент. Наше устройство нельзя зарядить ни
                    от одного из существующих зарядных устройств, т.к. разъемы устройства работают только с
                    оригинальной зарядной станцией. К тому же, зарядное устройство затруднительно незаметно украсть. А
                    также, почти всем заведения заносят услугу зарядки телефона в R-keeper, в компьютерное меню, чтобы
                    зарядка отражалась в чеке наравне с другими позициями. Таким образом, официанты всегда в курсе за
                    каким столиком сидят гости с зарядкой.</p>
            </article>
            <article class="question">
                <h3 class="question__definition">Зачем нужны зарядки, если есть разетки / power banks (аккумуляторы)?</h3>
                <p class="question__answer">Разумеется, в каждом заведении есть розетки, которыми клиенты могут
                    воспользоваться. Тем не менее, клиенты редко носят зарядки с собой, а еще реже розетки
                    располагаются у каждого столика, что, несомненно, вызывает массу неудобств для современного
                    человека. Power banks (портативные аккумуляторы) не являются хорошим решением для заведения по
                    следующим причинам: их могут украсть (устройства Jast Charger обладают защитой от воровства);
                    неудобство при перезарядке (потребуется много розеток и проводов, а также дополнительные временные
                    затраты персонала); отсутствие гарантии и сервисного обслуживания; отсутствие дополнительной
                    уникальной рекламной площадки (размещается на наших устройствах и станциях). К тому же,
                    аккумулятору также необходимо восполнять заряд, что вынуждает персонал постоянно контролировать
                    этот процесс, подключая устройства к розеткам, в связи с чем возникает дополнительная нагрузка и
                    возникают сложности в оказании данной услуги. Наши устройства – отличное решение данной проблемы.
                    Портативные зарядные устройства Jast Charger заряжают 99% современных смартфонов и планшетов. Также
                    клиент имеет полную свободу действий со своим смартфоном, ведь теперь он не привязан проводами к
                    розетке.</p>
            </article>
            <article class="question">
                <h3 class="question__definition">Насколько востребована данная услуга?</h3>
                <p class="question__answer">Еще каких-то 8 лет назад, наличие Wi-Fi интернета в кафе и ресторанах
                    являлось атрибутом успешного, идущего в ногу со временем заведения, соответствующего изменчивым
                    запросам своих клиентов. Такие заведения сразу оказались на хорошем счету у своих посетителей.
                    Сегодня в 9 общественных местах из 10 имеется доступ к Wi-Fi и его наличие обязательно, так же как
                    и заряженный смартфон для пользования интернет сетью. Зарядные станции Jast Charger – это
                    обеспечение энергетических потребностей каждого клиента в комплексе с уникальной рекламной
                    площадкой и удобством использования. До тех пор, пока будут существовать смартфоны, электронные
                    планшеты и другие устройства, требующие своевременной подзарядки, решение от Jast Charger будет
                    оставаться актуальным и востребованным.</p>
            </article>
        </div>
    </section>

    <!-- Footer -->
    <?php
        get_footer();
    ?>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/faq.js"></script>

    <?php
        wp_footer();
    ?>
</body>

</html>