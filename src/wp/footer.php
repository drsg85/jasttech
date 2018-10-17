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
            <p class="footer__legals"><a href="#">Договор оферты</a></p>
        </div>
    </div>
</footer>