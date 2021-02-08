
<section class="contacts" id="contacts">
    <div class="container">
        <h2 class="contacts__title section__title">Контакты</h2>
        <div class="contacts__block">
            <div class="contacts__item contacts__item-1">
                <p class="contacts__item-title">Телефон:</p>
                <a class="contacts__item-link" href="tel:<?=$phone_link?>"><?=$phone?></a>
            </div>
            <div class="contacts__item contacts__item-2">
                <p class="contacts__item-title">Почта:</p>
                <a class="contacts__item-link" href="mailto:<?=$email?>"><?=$email?></a>
            </div>
            <div class="contacts__item contacts__item-3">
                <div class="contacts__form">
                    {{ form.form( 
                        'form-reg', title='Или отправьте форму, и я перезвоню вам <br>в самое ближайшее время.', button='Отправить', exclude_fields={email: true}) 
                    }}
                </div>
            </div>
        </div>
    </div>
</section>




