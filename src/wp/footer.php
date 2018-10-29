<!-- Footer -->
<footer class="footer">
    <header class="footer__header">
        <h2 class="footer__title">Контакты</h2>
    </header>

    <div class="footer__content">
        <div class="footer__a-n-c">
            <p class="footer__address"><?php echo the_field('c-address', 14); ?></p>
            <div class="footer__contacts">
                <h3 class="footer__subtitle">Отдел продаж:</h3>
                <a class="footer__phone" href="tel:<?php echo the_field('c-phone-link', 14); ?>"><?php echo the_field('c-phone', 14); ?></a><br>
                <a class="footer__mail" href="mailto:<?php echo the_field('c-email', 14); ?>"><?php echo the_field('c-email', 14); ?></a>
            </div>
        </div>
        <div class="footer__social">
            <a class="social social--vk" href="<?php echo the_field('c-vk', 14); ?>">ВКонтакте</a>
            <a class="social social--inst" href="<?php echo the_field('c-instagram', 14); ?>">Инстаграм</a>
            <p class="footer__legals"><a href="<?php bloginfo('stylesheet_directory'); ?>/oferta.pdf">Договор оферты</a></p>
        </div>
    </div>
</footer>

<!-- Popup -->
<div class="contact-popup contact-popup--hidden">
    <button class="contact-popup__close"></button>
    <div class="contact-popup__cover"></div>
    <div class="contact-popup__form">
        <form class="form" action="<?php echo esc_url(home_url('/')); ?>order/" method="post">
            <h2 class="form__title">Оставьте заявку</h2>
            <div class="form__input-grp"><input class="form__input" type="text" name="contact_name" placeholder="Имя" required="required" /></div>
            <div class="form__input-grp"><input class="form__input" type="text" name="contact_city" placeholder="Ваш город" required="required" /></div>
            <div class="form__input-grp"><input class="form__input" type="email" name="contact_email" placeholder="Email" required="required" /></div>
            <div class="form__input-grp"><input class="form__input" type="tel" name="contact_phone" placeholder="Телефон" required="required" /></div><input
                class="form__submit cta-button" type="submit" value="Отправить" />
        </form>
    </div>
</div>