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

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/style.css" />
    <title>О Нас — Jast Charger</title>
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
                            <a class="main-nav__link main-nav__link--current" href="<?php echo esc_url(home_url('/')); ?>about">О Нас</a>
                        </li>
                        <li class="main-nav__item">
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>faq">FAQ</a>
                        </li>
                        <!-- <li class="main-nav__item">
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>news">Новости</a>
                        </li> -->
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
    <footer class="footer">
        <header class="footer__header">
            <h2 class="footer__title">Контакты</h2>
            <p class="footer__address">Россия, г. Калининград <br>ул. Театральная, 35, офис 616 <br>(Морской Бизнес
                Центр)</p>
            <h3 class="footer__subtitle">Отдел продаж:</h3>
            <div class="footer__contacts">
                <a class="footer__phone" href="tel:+79097782086">+7 909 778-20-86 </a><br>
                <a class="footer__mail" href="mailto:manager@jast.tech">manager@jast.tech</a>
            </div>
            <div class="footer__social"><a class="social social--vk" href="#">ВКонтакте</a><a class="social social--inst"
                    href="#">Инстаграм</a></div>
        </header>
        <!-- <div class="footer__form">
            <form class="form" action="">
                <h3 class="form__title">Заполните форму и мы свяжемся с вами как можно скорее:</h3><input class="form__input"
                    id="name" type="text" name="name" placeholder="Ваше имя" /><input class="form__input" id="email"
                    type="email" name="email" placeholder="Ваш e-mail" /><input class="form__input" id="phone" type="text"
                    name="phone" placeholder="Ваш телефон" /><input class="form__input" id="city" type="text" name="city"
                    placeholder="Ваш город" /><input class="cta-button" type="submit" value="Отправить" />
            </form>
        </div> -->
        <p class="footer__legals"><a href="#">Договор оферты</a></p>
    </footer>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/about.js"></script>
</body>

</html>