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

  {% block styles %}
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  {% endblock %}

	<link href="https://ea-glebov.ru/img/common/favicon.ico" type="image/x-icon" rel="icon">
	<link href="https://ea-glebov.ru/img/common/favicon.ico" type="image/x-icon" rel="shortcut icon">
  <link href="https://ea-glebov.ru/img/common/favicon.ico" rel="apple-touch-icon">


</head>



<body class="<?= $version ? 'version-' . $version : '' ?>">


  {% import 'form/macro.php' as form %}

  <div class="wrapper">
    <canvas id="stars"></canvas>
    {% block blocks %}
    {% endblock %}

    <section class="popups" hidden>
			{% block popups %}
			{% endblock %}
		</section>


  </div><!-- wrapper -->


  <?php if (isset($_POST["submit"])) {
    $to = "egoji@mail.ru";
    $subject = "Письмо с лендинга-портолио";
    $charset = "utf-8";
    $headerss ="Content-type: text/html; charset=$charset\r\n";
    $headerss.="MIME-Version: 1.0\r\n";
    $headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";
    $msg = "<b>Имя:</b> ".$_POST["name"]."\n";
    $msg .= "<br><b>Телефон:</b>: ".$_POST["phone"]."\n";
    mail($to, $subject, $msg, $headerss);
    print "<script>alert(\"Сообщение успешно отправлено!\");window.location = window.location.href</script>";
    }
  ?>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.js" defer></script>
 	{% block script %}
  {% endblock %}
</body>
</html>