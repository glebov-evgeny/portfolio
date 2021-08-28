<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$version = isset($_GET['version']) ? urldecode( strtolower($_GET['version']) ) : '';
$partner = isset($_GET['partner']) ? urldecode( strtolower($_GET['partner']) ) : '';

include_once $ROOT . 'version.php';

?>

<!DOCTYPE html>
<html lang="ru">

<head>

  <base href="<?= $BASE_HREF ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="description" content="<?= $description ?>">
  <title><?= $title ?></title>
  <meta property="og:title" content="<?= $title ?>">
  <meta property="og:description" content="<?= $description ?>">
  <meta property="og:url" content="//<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
  <meta property="og:image" content="//<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>img/common/share.jpg">
  <link rel="image_src" href="//<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>img/common/share.jpg">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.css">

  
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  

	<link href="https://ea-glebov.ru/img/common/favicon.ico" type="image/x-icon" rel="icon">
	<link href="https://ea-glebov.ru/img/common/favicon.ico" type="image/x-icon" rel="shortcut icon">
  <link href="https://ea-glebov.ru/img/common/favicon.ico" rel="apple-touch-icon">


</head>



<body class="<?= $version ? 'version-' . $version : '' ?>">


  

  <div class="wrapper">
    <canvas id="stars"></canvas>
    
    
    <header class="header" id="header">
    <div class="container">
        <nav class="header__nav">
            
            <a href="#about" class="header__nav-link scroll">Обо мне</a>
            <a href="#portfolio" class="header__nav-link scroll">Портфолио</a>
            <a href="#contacts" class="header__nav-link scroll">Контакты</a>
            
        </nav>
        <div class="header__menu">
            <svg class="ham hamRotate hamR" viewBox="0 0 100 100" width="50" onclick="this.classList.toggle('active')">
                <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                <path class="line middle" d="m 70,50 h -40" />
                <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
            </svg>
        </div>
        <nav class="header__nav-mobile">
        
            <a href="#about" class="header__nav-mobile-link scroll">Обо мне</a>
            <a href="#portfolio" class="header__nav-mobile-link scroll">Портфолио</a>
            <a href="#contacts" class="header__nav-mobile-link scroll">Контакты</a>
            
        </nav>
    </div>
</header>
    <section class="about" id="about">
    <div class="container">
       <div class="about__content about__content--start">
            <div class="about__content-aside nonactive">
                <div class="about__content-aside_pic"></div>
            </div>
            <div class="about__content-main nonactive">
                <h2 class="about__content-title">Добрый день!!!</h2>
                <p class="about__content-text">Меня зовут Глебов Евгений, и&nbsp;я&nbsp;рад приветствовать Вас на&nbsp;страничке моего портфолио.</p>
            </div>
       </div>
    </div>
</section>
    
<section class="portfolio" id="portfolio">
    <div class="container">
        <h2 class="portfolio__title section__title">Примеры работ</h2>
        <div class="portfolio__block">
            <div class="portfolio__content">
                
                <a href="https://synergy.ru/lp/triz/webinar" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-20.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">triz-webinar</p>
                </a>
                
                <a href="https://moicapital.ru/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-19.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">moicapital</p>
                </a>
                
                <a href="https://synergy.ru/lp/sport/v1/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-18.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">sport</p>
                </a>
                
                <a href="https://open-skolkovo.ru/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-21.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">skolkovo</p>
                </a>
                
                <a href="https://intellect.synergy.ru/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-01.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">intellect.synergy</p>
                </a>
                
                <a href="https://synergyproduction.ru/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-09.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">synergyproduction</p>
                </a>
                
                <a href="https://synergydigital.com/lp/marketplaces/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-17.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">marketplaces</p>
                </a>
                
                <a href="https://synergy.ru/lp/openday/management/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-22.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">management</p>
                </a>
                
                <a href="https://synergyclub.ru/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-16.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">synergyclub</p>
                </a>
                
                <a href="https://synergydigitalacademy.ru/lp/smmforbusiness/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-02.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">smmforbusiness</p>
                </a>
                
                <a href="https://synergy.ru/bs/vzlet/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-23.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">vzlet</p>
                </a>
                
                <a href="https://smm.synergy.ru/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-26.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">creative agency</p>
                </a>
                
                <a href="https://edurosv.ru/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-04.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">edurosv.ru</p>
                </a>
                
                <a href="https://synergytravel.ru/mirtravel/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-27.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">mirtravel</p>
                </a>
                
                <a href="https://synergyglobal.ru/forums/mba2021/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-24.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">mba2021</p>
                </a>
                
                <a href="https://synergy.ru/lp/design/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-05.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">design</p>
                </a>
                
                <a href="https://synergy.online/lp/turizm/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-08.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">turizm</p>
                </a>
                
                <a href="https://programiss.ru/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-06.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">programiss</p>
                </a>
                
                <a href="https://kids.synergy.ru/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-03.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">kids.synergy</p>
                </a>
                
                <a href="https://synergy.online/lp/ulanude/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-10.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">ulanude</p>
                </a>
                
                <a href="https://brain2020.ru/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-12.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">brain2020</p>
                </a>
                
                <a href="https://mixtrainingcamp.ru/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-11.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">mixtrainingcamp</p>
                </a>
                
                <a href="https://synergybelfort.ru/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-13.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">synergybelfort</p>
                </a>
                
                <a href="https://synergy.ru/bs/self-employed/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-14.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">self-employed</p>
                </a>
                
                <a href="https://arsenaldigital.ru/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-07.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">arsenaldigital</p>
                </a>
                
                <a href="https://synergy.ru/agency/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-15.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">Speakers Agency</p>
                </a>
                
                <a href="https://synergydigital.com/lp/marketer/" class="portfolio__item" target="_blank">
                    <img src="img/portfolio/pic-25.jpg" alt="" class="lazy">
                    <p class="portfolio__item-title">marketer</p>
                </a>
                
            </div>
            <div class="portfolio__btn">еще немного</div>
        </div>
    </div>
</section>





    
<section class="skills" id="skills">
    <div class="container">
        <h2 class="skills__title section__title">Навыки</h2>
        <div class="swiper-container skills__container">
            <div class="swiper-wrapper">
                
                    <div class="swiper-slide skills__item" style="background-image:url(img/skills/pic-01.jpg)">
                        <div class="skills__item-content">HTML</div>
                    </div>
                
                    <div class="swiper-slide skills__item" style="background-image:url(img/skills/pic-02.jpg)">
                        <div class="skills__item-content">SCSS</div>
                    </div>
                
                    <div class="swiper-slide skills__item" style="background-image:url(img/skills/pic-03.jpg)">
                        <div class="skills__item-content">JS/Jquery</div>
                    </div>
                
                    <div class="swiper-slide skills__item" style="background-image:url(img/skills/pic-04.jpg)">
                        <div class="skills__item-content">Gulp</div>
                    </div>
                
                    <div class="swiper-slide skills__item" style="background-image:url(img/skills/pic-05.jpg)">
                        <div class="skills__item-content">Git</div>
                    </div>
                
                    <div class="swiper-slide skills__item" style="background-image:url(img/skills/pic-06.jpg)">
                        <div class="skills__item-content">БЭМ</div>
                    </div>
                
                    <div class="swiper-slide skills__item" style="background-image:url(img/skills/pic-07.jpg)">
                        <div class="skills__item-content">Fancybox</div>
                    </div>
                
                    <div class="swiper-slide skills__item" style="background-image:url(img/skills/pic-08.jpg)">
                        <div class="skills__item-content">Bootstrap</div>
                    </div>
                
                    <div class="swiper-slide skills__item" style="background-image:url(img/skills/pic-09.jpg)">
                        <div class="skills__item-content">Swiper</div>
                    </div>
                
                    <div class="swiper-slide skills__item" style="background-image:url(img/skills/pic-10.jpg)">
                        <div class="skills__item-content">PHP</div>
                    </div>
                
                    <div class="swiper-slide skills__item" style="background-image:url(img/skills/pic-11.jpg)">
                        <div class="skills__item-content">Figma</div>
                    </div>
                
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
    
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
                    
<form action="" class="form form_horisontal nolander" method="post">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Или отправьте форму, и я перезвоню вам <br>в ближайшее время.</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div>

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div>

            

            

            

            <div class="form__item form__button">
                <button class="btn " type="submit" name="submit">Отправить</button>
            </div>
        </div>

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Отправляя форму, вы соглашаетесь с <a href="/privacy" class="form__more-link">политикой обработки персональных данных</a></div>
            </label>
        </div>

        
    </div>
</form>

                </div>
            </div>
        </div>
    </div>
</section>





    <footer class="footer" id="footer">
    <div class="container">
        <p class="footer__text">&#169; Разработка, продвижение, etc.</p>
    </div>
</footer>


    <section class="popups" hidden>
			
    <div class="popup popup-registration" id="popup-reg">
    <a class="popup__close" data-fancybox-close title="Закрыть"></a>
    
<form action="" class="form form_horisontal nolander" method="post">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Заполни форму, чтобы начать учиться!</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div>

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div>

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div>

            

            

            <div class="form__item form__button">
                <button class="btn " type="submit" name="submit">Отправить</button>
            </div>
        </div>

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Отправляя форму, вы соглашаетесь с <a href="/privacy" class="form__more-link">политикой обработки персональных данных</a></div>
            </label>
        </div>

        
    </div>
</form>

</div>


		</section>


  </div><!-- wrapper -->


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.js" defer></script>
 	
    <script src="js/main.js"></script>

</body>
</html>