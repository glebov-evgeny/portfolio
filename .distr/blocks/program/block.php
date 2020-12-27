{% from './data.njk' import data as items %}
<section class="program lazy" id="program">
    <div class="container">
        <h2 class="program__title">Программа</h2>
        <p class="program__text">Обучение строится на&nbsp;основе грамотного баланса: 80% практики и&nbsp;20% теории. Вашего ребенка ждут встречи с&nbsp;единомышленниками и&nbsp;поддержка в&nbsp;формате 24/7&nbsp;с наставниками, которым можно задать любые вопросы и&nbsp;проконсультироваться по&nbsp;учебному процессу.</p>    
        <div class="program__block">
        {% for item in items %}
            <div class="program__item">
                <div class="program__item-head">
                    <div class="program__item-nmb">{{ item.nmb | safe }}</div>
                    <p class="program__item-title">{{ item.title | safe }}</p>
                    <div class="program__item-arrow">
                        <img src="img/program/arrow.svg" alt="" class=" lazy">
                    </div>
                </div>
                <div class="program__item-content">
                    <ul class="program__item-list">
                        {{ item.list | safe }}
                    </ul>
                </div>
            </div>
            {% endfor %} 
        </div>
        <p class="program__text">По&nbsp;результатам программы ребенок научится находить потенциал для развития своих идей, сформирует требования к&nbsp;собственному бизнес-плану, сможет применять лучшие практики на&nbsp;личном опыте.</p>
    </div>
</section>




