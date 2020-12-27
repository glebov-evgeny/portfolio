<div class="popup popup-registration" id="popup-reg">
    <a class="popup__close" data-fancybox-close title="Закрыть"></a>
    {{ form.form( 'form-reg', title='Заполни форму, чтобы начать учиться!', button='Отправить') }}
</div>


<div class="popup popup-price" id="popup-month3">
    <a class="popup__close" data-fancybox-close title="Закрыть"></a>
    {%
			set add_fields=[
			{
			name: 'product_id',
			type: 'hidden',
			value: '69359796'
			},
			{
			name: 'unit',
			type: 'hidden',
			value: 'payments'
            },
            {
			name: 'type',
			type: 'hidden',
			value: 'ticketless'
            },
            {
			name: 'callbackSuccess',
			type: 'hidden',
			value: 'https://synergy.ru/bs/kids/thanks/'
            },
            {
			name: 'new_tab',
			type: 'hidden',
			value: '1'
			},
			{
			name: 'mergelead',
			type: 'hidden',
			value: '<?= $get_mergelead ?>'
			}
			]
		%}

    {{ form.form( 'form-reg', title='Заполни форму, чтобы начать учиться!', button='Отправить',	add_fields=add_fields) }}
</div>
