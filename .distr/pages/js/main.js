$(document).ready(function () {
  mainAnimation();
  initHeader();
  initHeaderBurger();
  initScroll();


  function initHeader() {
    if ($(window).width() > 320) {
      var menu = $('.header');
      var topOfMenu = $(menu).offset().top;

      $(window).scroll(function () {
        if ($(window).scrollTop() > topOfMenu) {
          $(menu).addClass('header__fixed');
        } else {
          $(menu).removeClass('header__fixed');
        }
      })
    }
  }

  function initHeaderBurger() {
    $('.header__menu').on('click', function () {
      $('.header__nav-mobile').toggleClass('active');
    })
    $('.header__nav-mobile-link').on('click', function () {
      $('.ham, .header__nav-mobile').removeClass('active');
    });
  }

  function initScroll() {
    if (!$('.scroll').length) return;

    $(document).on('click scroll.init', '.scroll', function (event) {
      event.preventDefault();
      $.fancybox.close();

      var
        hrefId = $(this).attr('href') || $(this).data('href'),
        posTop = $(hrefId).offset().top;
      $('html, body').animate({ scrollTop: posTop}, 1000);
    });
  }

  function mainAnimation() {
    // let mainBg1 = document.querySelector('.main__bg-1');
    // let mainBg2 = document.querySelector('.main__bg-2');


    // mainBg1.style.transform = 'translate3d(0, 0, 0)';
    // mainBg2.style.transform = 'translate3d(0, 0, 0)';
    headerShow();
    setTimeout(function(){
      aboutShow();
    }, 400);
  }

  function headerShow(){
    let elements = document.querySelectorAll('.header__nav > .header__nav-link');
    let quant = 1;
    elements.forEach(element => {
        element.style.animationDelay = quant+'s';
        quant += 0.25;
    });
  }

  function aboutShow(){
    let aboutContent = document.querySelector('.about__content');
    let aboutContentAside = document.querySelector('.about__content-aside');
    let aboutContentMain = document.querySelector('.about__content-main');

    aboutContent.style.opacity = '1';
    aboutContent.style.transform = 'scale(1)';
    aboutContent.classList.remove('about__content--start');
    setTimeout(function(){
      aboutContentAside.classList.remove('nonactive');
      aboutContentMain.classList.remove('nonactive');
      aboutContentMain.style.opacity = '1';
    }, 1000);

    /* Конструктор, разбивающий на отдельные буквы + компановка в слова */
    class AccentTypographyBuild {
      constructor(
        elementSelector,
        timer,
        classForActivate,
        property
      ) {
        this._TIME_SPACE = 100;

        this._elementSelector = elementSelector;
        this._timer = timer;
        this._classForActivate = classForActivate;
        this._property = property;
        this._element = document.querySelector(this._elementSelector);
        this._timeOffset = 0;

        this.prePareText();
      }

      createElement(letter) {
        const span = document.createElement(`span`);
        span.textContent = letter;
        span.style.transition = `${this._property} ${this._timer}ms ${this._timeOffset}ms`;
        this._timeOffset += 20;
        return span;
      }

      prePareText() {
        if (!this._element) {
          return;
        }
        const text = this._element.textContent.trim().split(` `).filter((latter)=>latter !== '');

        const content = text.reduce((fragmentParent, word) => {
          const wordElement = Array.from(word).reduce((fragment, latter) => {
            fragment.appendChild(this.createElement(latter));
            return fragment;
          }, document.createDocumentFragment());
          const wordContainer = document.createElement(`span`);
          wordContainer.classList.add(`about__content-title__word`);
          wordContainer.appendChild(wordElement);
          fragmentParent.appendChild(wordContainer);
          return fragmentParent;
        }, document.createDocumentFragment());

        this._element.innerHTML = ``;
        this._element.appendChild(content);
      }

      runAnimation() {
        if (!this._element) {
          return;
        }
        this._element.classList.add(this._classForActivate);
      }

      destroyAnimation() {
        this._element.classList.remove(this._classForActivate);
      }
    }

    /* Передаем целевой класс */
    const animationTopScreenTextLine = new AccentTypographyBuild(`.about__content-title`, 500, `active`, `transform`);

    /* Вызов */
    setTimeout(()=>{
      animationTopScreenTextLine.runAnimation();
    }, 1200);
  }

});
