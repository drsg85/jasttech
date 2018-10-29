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
    
    <title>Контакты — Jast Charger</title>

    <?php
        wp_head();
    ?>
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
            <p class="footer__address"><?php echo get_field('c-address'); ?></p>

            <h3 class="footer__subtitle footer__subtitle--contacts">Отдел продаж:</h3>
            <div class="footer__contacts">
                <a class="footer__phone" href="tel:<?php echo get_field('c-phone-link'); ?>"><?php echo get_field('c-phone'); ?></a><br>
                <a class="footer__mail" href="mailto:<?php echo get_field('c-email'); ?>"><?php echo get_field('c-email'); ?></a>
            </div>
            <div class="footer__social">
                <a class="social social--vk" href="<?php echo get_field('c-vk'); ?>">ВКонтакте</a>
                <a class="social social--inst" href="<?php echo get_field('c-instagram'); ?>">Инстаграм</a>
            </div>
        </header>

        <div class="footer__form">
            <form class="form" action="<?php echo esc_url(home_url('/')); ?>order/" method="post">
                <h2 class="form__title">Оставьте заявку</h2>
                <div class="form__input-grp"><input class="form__input" type="text" name="contact_name" placeholder="Имя" required="required" /></div>
                <div class="form__input-grp"><input class="form__input" type="text" name="contact_city" placeholder="Ваш город" required="required" /></div>
                <div class="form__input-grp"><input class="form__input" type="email" name="contact_email" placeholder="Email" required="required" /></div>
                <div class="form__input-grp"><input class="form__input" type="tel" name="contact_phone" placeholder="Телефон" required="required" /></div><input
                    class="form__submit cta-button" type="submit" value="Отправить" />
            </form>
        </div>

        <div class="footer__legals">
            <p><?php echo get_field('c-info'); ?></p>
            <a href="<?php bloginfo('stylesheet_directory'); ?>/oferta.pdf">Договор оферты</a>
        </div>
    </footer>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/contacts.js"></script>

    <?php
        wp_footer();
    ?>
</body>

</html>