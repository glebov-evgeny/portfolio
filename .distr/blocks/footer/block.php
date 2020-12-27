<footer class="footer {{class}}">
    <div class="container footer__flex">
        <div class="footer__item footer__item-first">
            <img src="img/footer/logo.svg" alt="" class="lazy">
            <a href="#privacy" class="fancybox footer-link">Политикa конфиденциальности</a>
            <a href="https://synergy.ru/bs/kids/files/offer.docx" class="footer-link" download>Договор оферты</a>
        </div>
        {% if IS_MAIN == true %}
        <div class="footer__item footer__nav">
            <a href="#about" class="footer__nav-link scroll">О курсе</a>
            <a href="#format" class="footer__nav-link scroll">Формат обучения</a>
            <a href="#program" class="footer__nav-link scroll">Программа</a>
            <a href="#result" class="footer__nav-link scroll">Результаты</a>
        </div>
        {% endif %}
        <div class="footer__item footer__item-last">
            <a href="tel:<?=$phone_link?>" class="footer-phone"><span><?=$phone?></span></a>
        </div>
    </div>
</footer>