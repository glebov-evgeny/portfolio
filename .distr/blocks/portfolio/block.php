{% from './data.njk' import data as items %}
<section class="portfolio" id="portfolio">
    <div class="container">
        <h2 class="portfolio__title section__title">Примеры работ</h2>
        <div class="portfolio__block">
            <div class="portfolio__content">
                {% for item in items %}
                <a href="{{ item.url | safe}}" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/{{ item.pic | safe}}" alt="" class="lazy">
                    <p class="portfolio__item-title">{{ item.title | safe}}</p>
                </a>
                {% endfor %}
            </div>
            <div class="portfolio__btn">еще немного</div>
        </div>
    </div>
</section>




