<?php
    /*
        Template Name: Contacts Page
    */
?>
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

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/style.css" />
    <title>FAQ — Jast Charger</title>
</head>

<body>
    <!-- Header -->
    <header class="hero hero--contacts">
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
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>about">О Нас</a>
                        </li>
                        <li class="main-nav__item">
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>faq">FAQ</a>
                        </li>
                        <!-- <li class="main-nav__item">
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>news">Новости</a>
                        </li> -->
                        <li class="main-nav__item">
                            <a class="main-nav__link main-nav__link--current" href="<?php echo esc_url(home_url('/')); ?>contacts">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Footer -->
    <footer class="footer">
        <header class="footer__header">
            <h2 class="footer__title">Контакты</h2>
            <p class="footer__address">Россия, г. Калининград <br>ул. Театральная, 35, офис 616 <br>(Морской Бизнес
                Центр)</p>
            <h3 class="footer__subtitle">Отдел продаж:</h3>
            <div class="footer__contacts"><a class="footer__phone" href="tel:+79097782086">+7 909 778-20-86 </a><a
                    class="footer__mail" href="mailto:manager@jast.tech">manager@jast.tech</a></div>
            <div class="footer__social"><a class="social social--vk" href="#">ВКонтакте</a><a class="social social--inst"
                    href="#">Инстаграм</a></div>
        </header>
        <div class="footer__form">
            <script>
                var amo_forms_params = {
                    "id": 361897,
                    "hash": "e7f3326ccdf13ebb3dcacd1535ecdd32",
                    "locale": "ru"
                };
            </script>
            <script id="amoforms_script" async="async" charset="utf-8" src="https://forms.amocrm.ru/forms/assets/js/amoforms.js"></script>
        </div>

        <div class="footer__legals">
            <p>ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ «ВИР&nbsp;ХОЛДИНГ» <br>ИНН 3906359034 <br>КПП 390601001 <br>ОГРН
                1173926025228 <br>Расчетный счет 40702810210000210440 <br>Банк АО «ТИНЬКОФФ БАНК» <br>Юридический адрес
                банка Москва, 123060, 1-й Волоколамский проезд, д. 10, стр. 1 <br>Корр.счет банка 30101810145250000974
                <br>ИНН банка 7710140679 <br>БИК банка 044525974</p><a href="#">Договор оферты</a>
        </div>
    </footer>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/contacts.js"></script>
</body>

</html>