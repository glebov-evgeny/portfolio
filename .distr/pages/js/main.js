$(document).ready(function () {
  mainAnimation();
  initHeader();
  initHeaderBurger();
  initScroll();
  initMoreBtn();


  function initMoreBtn() {

    let portfolioList = $(".portfolio__content"),
        listSizePortfolio = portfolioList.children().length,
        defaultSizePortfolio,
        step,
        scrollPosition;

    if ( document.body.clientWidth > 769 ) { 
      defaultSizePortfolio = 8;
      step = 4; }
    else if ( document.body.clientWidth > 576 ) { 
      defaultSizePortfolio = 6;
      step = 3; }
    else if ( document.body.clientWidth < 576 ) { 
      defaultSizePortfolio = 4;
      step = 4; }
      portfolioList.children().hide();
      portfolioList.children().slice(0, defaultSizePortfolio).fadeIn();

    $('.portfolio__btn').click(function (e) {
        scrollPosition = window.pageYOffset;
        e.preventDefault();
        var portfolioList = $(".portfolio__content");

        defaultSizePortfolio = (defaultSizePortfolio + step <= listSizePortfolio) ? 
                                                    defaultSizePortfolio + step : 
                                                    listSizePortfolio;
                                                    portfolioList.children().slice(0, defaultSizePortfolio).fadeIn();

        window.scrollTo( 0, scrollPosition );

        if (defaultSizePortfolio == listSizePortfolio) {
            $('.portfolio__btn').hide();
        }
    })
  };

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
    $('.ham').on('click', function () {
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


    // Маски
    $('input[name=\'phone\']').inputmask({"mask": "+7 (999) 999-9999"});
    $('input[name=\'email\']').inputmask("email");



// Settings
var particleCount = 0,
flareCount = 50,
motion = 0.15,
tilt = 0.05,
color = '#FFEED4',
particleSizeBase = 0.5,
particleSizeMultiplier = 0.5,
flareSizeBase = 100,
flareSizeMultiplier = 100,
lineWidth = 1,
linkChance = 75, // chance per frame of link, higher = smaller chance
linkLengthMin = 5, // min linked vertices
linkLengthMax = 7, // max linked vertices
linkOpacity = 0.25; // number between 0 & 1
linkFade = 9, // link fade-out frames
linkSpeed = 1, // distance a link travels in 1 frame
glareAngle = -60,
glareOpacityMultiplier = 0.05,
renderParticles = true,
renderParticleGlare = true,
renderFlares = true,
renderLinks = true,
renderMesh = false,
flicker = true,
flickerSmoothing = 15, // higher = smoother flicker
blurSize = 0,
orbitTilt = true,
randomMotion = true,
noiseLength = 1000,
noiseStrength = 1;

var canvas = document.getElementById('stars'),
//orbits = document.getElementById('orbits'),
context = canvas.getContext('2d'),
mouse = { x: 0, y: 0 },
m = {},
r = 0,
c = 1000, // multiplier for delaunay points, since floats too small can mess up the algorithm
n = 0,
nAngle = (Math.PI * 2) / noiseLength,
nRad = 100,
nScale = 0.5,
nPos = {x: 0, y: 0},
points = [],
vertices = [],
triangles = [],
links = [],
particles = [],
flares = [];

function init() {
var i, j, k;

// requestAnimFrame polyfill
window.requestAnimFrame = (function(){
  return  window.requestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      function( callback ){
        window.setTimeout(callback, 1000 / 60);
      };
})();

resize();

mouse.x = canvas.clientWidth / 2;
mouse.y = canvas.clientHeight / 2;

// Create particle positions
for (i = 0; i < particleCount; i++) {
  var p = new Particle();
  particles.push(p);
  points.push([p.x*c, p.y*c]);
}


// Tell all the particles who their neighbors are
for (i = 0; i < particles.length; i++) {
  // Loop through all tirangles
  for (j = 0; j < triangles.length; j++) {
    // Check if this particle's index is in this triangle
    k = triangles[j].indexOf(i);
    // If it is, add its neighbors to the particles contacts list
    if (k !== -1) {
      triangles[j].forEach(function(value, index, array) {
        if (value !== i && particles[i].neighbors.indexOf(value) == -1) {
          particles[i].neighbors.push(value);
        }
      });
    }
  }
}


if (renderFlares) {
  // Create flare positions
  for (i = 0; i < flareCount; i++) {
    flares.push(new Flare());
  }
}

// Motion mode
//if (Modernizr && Modernizr.deviceorientation) {
if ('ontouchstart' in document.documentElement && window.DeviceOrientationEvent) {
  console.log('Using device orientation');
  window.addEventListener('deviceorientation', function(e) {
    mouse.x = (canvas.clientWidth / 2) - ((e.gamma / 90) * (canvas.clientWidth / 2) * 2);
    mouse.y = (canvas.clientHeight / 2) - ((e.beta / 90) * (canvas.clientHeight / 2) * 2);
  }, true);
}
else {
  document.body.addEventListener('mousemove', function(e) {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
  });
}

// Animation loop
(function animloop(){
  requestAnimFrame(animloop);
  resize();
  render();
})();
}

function render() {
if (randomMotion) {
  n++;
  if (n >= noiseLength) {
    n = 0;
  }
  nPos = noisePoint(n);
}

// Clear
context.clearRect(0, 0, canvas.width, canvas.height);

if (blurSize > 0) {
  context.shadowBlur = blurSize;
  context.shadowColor = color;
}

if (renderFlares) {
  // Render flares
  for (var j = 0; j < flareCount; j++) {
    flares[j].render();
  }
}

}

function resize() {
canvas.width = window.innerWidth * (window.devicePixelRatio || 1);
canvas.height = canvas.width * (canvas.clientHeight / canvas.clientWidth);
}

function startLink(vertex, length) {
links.push(new Link(vertex, length));
}


// Flare class
var Flare = function() {
this.x = random(-0.25, 1.25, true);
this.y = random(-0.25, 1.25, true);
this.z = random(0,2);
this.color = color;
this.opacity = random(0.001, 0.01, true);
};
Flare.prototype.render = function() {
var pos = position(this.x, this.y, this.z),
  r = ((this.z * flareSizeMultiplier) + flareSizeBase) * (sizeRatio() / 1000);

context.beginPath();
context.globalAlpha = this.opacity;
context.arc(pos.x, pos.y, r, 0, 2 * Math.PI, false);
context.fillStyle = this.color;
context.fill();
context.closePath();
context.globalAlpha = 1;
};


function noisePoint(i) {
var a = nAngle * i,
  cosA = Math.cos(a),
  sinA = Math.sin(a),
  //value = simplex.noise2D(nScale * cosA + nScale, nScale * sinA + nScale),
  //rad = nRad + value;
  rad = nRad;
return {
  x: rad * cosA,
  y: rad * sinA
};
}

function position(x, y, z) {
return {
  x: (x * canvas.width) + ((((canvas.width / 2) - mouse.x + ((nPos.x - 0.5) * noiseStrength)) * z) * motion),
  y: (y * canvas.height) + ((((canvas.height / 2) - mouse.y + ((nPos.y - 0.5) * noiseStrength)) * z) * motion)
};
}

function sizeRatio() {
return canvas.width >= canvas.height ? canvas.width : canvas.height;
}

function random(min, max, float) {
return float ?
  Math.random() * (max - min) + min :
  Math.floor(Math.random() * (max - min + 1)) + min;
}


// init
if (canvas) init();

});
