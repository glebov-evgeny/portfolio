{% macro form(form, form_class='form_horisontal', title_class='', button_class='', title='Участвовать<br> бесплатно', button='Участвовать бесплатно', form_text='', add_fields, exclude_fields) %}
<form action="" class="form {{form_class}} nolander" method="post">
    <div class="form__wrapper">
        {% if title.length %}
        <h3 class="form__title {{ title_class }}">{{ title | safe }}</h3>
        {% endif %}

        {% if form_text.length %}
        <div class="form__text">{{ form_text | safe }}</div>
        {% endif %}

        <div class="form__items">
            {% if not exclude_fields.name %}
            {{ form_item( 'name', 'text', 'Имя', true ) }}
            {% endif %}

            {% if not exclude_fields.phone %}
            {{ form_item( 'phone', 'text', 'Телефон', true ) }}
            {% endif %}

            {% if not exclude_fields.email %}
            {{ form_item( 'email', 'email', 'E-mail', true ) }}
            {% endif %}

            {% if add_fields.length %}
            {% for item in add_fields %}
            {{ form_item( item.name, item.type, item.placeholder, item.required, item.value ) }}
            {% endfor %}
            {% endif %}

            <div class="form__item form__button">
                <button class="btn {{button_class}}" type="submit" name="submit">{{ button }}</button>
            </div>
        </div>

        <div class="form__more">
            <label class="form__footer {{ form__footer_class }}">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Отправляя форму, вы соглашаетесь с <a href="/privacy" class="form__more-link">политикой обработки персональных данных</a></div>
            </label>
        </div>

        
    </div>
</form>
{% endmacro %}

{% macro form_item(name, type, placeholder, required, value) %}
<div class="form__item form__item_{{ type }} {{ 'd-none' if type == 'hidden' }}">
    {% if type == 'textarea' %}
    <textarea name="{{ name }}" placeholder="{{ placeholder }}" class="form__input form__input_textarea" {{ 'required' if required }}></textarea>
    {% else %}
    <input name="{{ name }}" type="{{ type }}" placeholder="{{ placeholder }}" class="form__input" {{ 'min=1' if type == 'number' }} {{ 'required' if required }} value="{{ value }}">
    {% endif %}
</div>
{% endmacro %}