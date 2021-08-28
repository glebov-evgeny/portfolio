{% from './data.njk' import data as items %}
<section class="skills" id="skills">
    <div class="container">
        <h2 class="skills__title section__title">Навыки</h2>
        <div class="swiper-container skills__container">
            <div class="swiper-wrapper">
                {% for item in items %}
                    <div class="swiper-slide skills__item" style="background-image:url({{ item.pic | safe}})">
                        <div class="skills__item-content">{{ item.title | safe}}</div>
                    </div>
                {% endfor %}
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>