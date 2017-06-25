<!DOCTYPE html>
<html lang="ru-ru" dir="ltr" class="">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		<meta name="author" content="adsdesign" />
		<meta property="og:type" content="business.business" />
		<meta property="og:title" content="Студия Английского Языка" />
		<meta property="og:url" content="http://ess.adsdesign.ru/" />
		<meta property="og:image" content="http://ess.adsdesign.ru/img/logo.png" />
		<meta property="business:contact_data:locality" content="Санкт-Петербург" />
		<meta property="business:contact_data:country_name" content="Россия" />
		<title>Питомник для кошек</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="shortcut icon" href="img/logo.png" />
		<link rel="stylesheet" href="fonts/exotwo.css" type="text/css" />
		<link rel="stylesheet" href="css/animate.css" type="text/css" />
		<link rel="stylesheet" type="text/css" href="css/style-modal.css" />
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<link rel="stylesheet" href="css/media.css" type="text/css" />
		<link rel="stylesheet" href="css/jquery.bxslider.css" />
		<script>new WOW().init();</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
			function AjaxFormRequest(result_id,formMain,url) {
				jQuery.ajax({
					url:	 url,
					type:	 "POST",
					dataType: "html",
					data: jQuery("#"+formMain).serialize(), 
					success: function(response) {
						document.getElementById(result_id).innerHTML = response;
					},
					error: function(response) {
						document.getElementById(result_id).innerHTML = "<p>Возникла ошибка при отправке формы. Попробуйте еще раз</p>";
					}
				});
				$(':input','#formMain')
				.not(':button, :submit, :reset, :hidden')
				.val('')
				.removeAttr('checked')
				.removeAttr('selected');
			}

			function AjaxFormRequest(result_id,anket,url) {
				jQuery.ajax({
					url:	 url,
					type:	 "POST",
					dataType: "html",
					data: jQuery("#"+anket).serialize(), 
					success: function(response) {
						document.getElementById(result_id).innerHTML = response;
					},
					error: function(response) {
						document.getElementById(result_id).innerHTML = "<p>Возникла ошибка при отправке формы. Попробуйте еще раз</p>";
					}
				});
				$(':input','#anket')
				.not(':button, :submit, :reset, :hidden')
				.val('')
				.removeAttr('checked')
				.removeAttr('selected');
			}
		</script>
		<script src="js/jquery.bxslider.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.fitvids.js"></script>
	</head>
	<body>
		<!-- Модальное окно Форма обратной связи -->
			<a href="#x" class="overlay" id="callBack"></a>
			<div class="popup popup_1">
				<div class="mainForm">
					<div class="form">
						<div id="messegeResult">
							<p style="font-size: 1.5vw; font-weight: 600;">Оставьте ваши контакты<br />и мы обязательно Вам перезвоним</p>
						</div>
						<form method="post" action="" id="formMain" name="formMain">
							<input id="name" type="text" name="name" placeholder="Введите ваше имя" maxlength="30" autocomplete="off" required/>
							<input id="telephone" type="Tel" name="telephone" placeholder="Введите ваш телефон" maxlength="30" autocomplete="off" required/>
							<input id="button" class="applicationButton" type="button" value="перезвоните мне" onclick="AjaxFormRequest('messegeResult', 'formMain', 'callBack.php')"/>
						</form>
					</div>
				</div>
				<a class="close" title="Закрыть" href="#close"></a>
			</div>
<!-- ********************************* -->
<!-- Модальное окно Форма обратной связи -->
			<a href="#x" class="overlay" id="slider1"></a>
			<div class="popup popup_1">
				<div class="mainForm">
					<div class="form">
						<div class="slider">
							<ul class="bxslider">
  								<li><img src="img/cat/0.jpg"></li>
  								<li><img src="img/cat/1.JPG"></li>
  								<li><img src="img/cat/2.JPG"></li>
  								<li><img src="img/cat/3.JPG"></li>
  								<li><img src="img/cat/4.JPG"></li>
  								<li><img src="img/cat/5.JPG"></li>
  								<li><img src="img/cat/6.JPG"></li>
  								<li><img src="img/cat/7.JPG"></li>
  								<li><img src="img/cat/8.JPG"></li>
  								<li><img src="img/cat/9.JPG"></li>
  								<li><img src="img/cat/10.JPG"></li>
  								<li><img src="img/cat/11.JPG"></li>
  								<li><img src="img/cat/12.jpg"></li>
  								<li><img src="img/cat/13.jpg"></li>
  								<li><img src="img/cat/14.jpg"></li>
  								<li><img src="img/cat/15.jpg"></li>
  								<li><img src="img/cat/16.jpg"></li>
							</ul>
						</div>
					</div>
				</div>
				<a class="close" title="Закрыть" href="#close"></a>
			</div>
<!-- ********************************* -->
<!-- Модальное окно Форма обратной связи -->
			<a href="#x" class="overlay" id="slider2"></a>
			<div class="popup popup_1">
				<div class="mainForm">
					<div class="form">
						<div class="slider">
							<ul class="bxslider">
  								<li><img src="img/lada/0.jpg"></li>
  								<li><img src="img/lada/1.jpg"></li>
  								<li><img src="img/lada/2.jpg"></li>
  								<li><img src="img/lada/3.jpg"></li>
  								<li><img src="img/lada/4.jpg"></li>
  								<li><img src="img/lada/5.jpg"></li>
  								<li><img src="img/lada/6.jpg"></li>
  								<li><img src="img/lada/7.jpg"></li>
  								<li><img src="img/lada/8.jpg"></li>
  								<li><img src="img/lada/9.jpg"></li>
  								<li><img src="img/lada/10.jpg"></li>
							</ul>
						</div>
					</div>
				</div>
				<a class="close" title="Закрыть" href="#close"></a>
			</div>
<!-- ********************************* -->
<!-- Модальное окно Форма обратной связи -->
			<a href="#x" class="overlay" id="slider3"></a>
			<div class="popup popup_1">
				<div class="mainForm">
					<div class="form">
						<div class="slider">
							<ul class="bxslider">
								<li><img src="img/afina/0.jpg"></li>
  								<li><img src="img/afina/1.jpg"></li>
  								<li><img src="img/afina/2.jpg"></li>
  								<li><img src="img/afina/3.jpg"></li>
  								<li><img src="img/afina/4.jpg"></li>
  								<li><img src="img/afina/5.jpg"></li>
  								<li><img src="img/afina/6.jpg"></li>
  								<li><img src="img/afina/7.jpg"></li>
  								<li><img src="img/afina/8.jpg"></li>
  								<li><img src="img/afina/9.jpg"></li>
  								<li><img src="img/afina/10.jpg"></li>
  								<li><img src="img/afina/11.jpg"></li>
  								<li><img src="img/afina/12.jpg"></li>
  								<li><img src="img/afina/13.jpg"></li>
  								<li><img src="img/afina/14.jpg"></li>
  								<li><img src="img/afina/15.jpg"></li>
							</ul>
						</div>
					</div>
				</div>
				<a class="close" title="Закрыть" href="#close"></a>
			</div>
<!-- ********************************* -->
<!-- ********************************* -->
<!-- Модальное окно Форма обратной связи -->
			<a href="#x" class="overlay" id="slider4"></a>
			<div class="popup popup_1">
				<div class="mainForm">
					<div class="form">
						<div class="slider">
							<ul class="bxslider">
  								<li><img src="img/kitten/1.JPG"></li>
  								<li><img src="img/kitten/2.JPG"></li>
  								<li><img src="img/kitten/3.JPG"></li>
  								<li><img src="img/kitten/4.JPG"></li>
  								<li><img src="img/kitten/5.JPG"></li>
  								<li><img src="img/kitten/6.JPG"></li>
  								<li><img src="img/kitten/7.JPG"></li>
  								<li><img src="img/kitten/8.JPG"></li>
  								<li><img src="img/kitten/9.JPG"></li>
  								<li><img src="img/kitten/10.JPG"></li>
  								<li><img src="img/kitten/11.JPG"></li>
  								<li><img src="img/kitten/12.JPG"></li>
  								<li><img src="img/kitten/13.JPG"></li>
  								<li><img src="img/kitten/14.JPG"></li>
  								<li><img src="img/kitten/15.JPG"></li>
  								<li><img src="img/kitten/16.JPG"></li>
  								<li><img src="img/kitten/17.JPG"></li>
  								<li><img src="img/kitten/18.JPG"></li>
  								<li><img src="img/kitten/19.JPG"></li>
  								<li><img src="img/kitten/20.JPG"></li>
  								<li><img src="img/kitten/21.JPG"></li>
  								<li><img src="img/kitten/22.JPG"></li>
  								<li><img src="img/kitten/23.JPG"></li>
  								<li><img src="img/kitten/24.JPG"></li>
  								<li><img src="img/kitten/25.JPG"></li>
  								<li><img src="img/kitten/26.JPG"></li>
  								<li><img src="img/kitten/27.JPG"></li>
  								<li><img src="img/kitten/28.JPG"></li>
  								<li><img src="img/kitten/29.JPG"></li>
  								<li><img src="img/kitten/30.JPG"></li>
  								<li><img src="img/kitten/31.JPG"></li>
  								<li><img src="img/kitten/32.JPG"></li>
  								<li><img src="img/kitten/33.JPG"></li>
  								<li><img src="img/kitten/34.JPG"></li>
  								<li><img src="img/kitten/35.JPG"></li>
  								<li><img src="img/kitten/36.JPG"></li>
  								<li><img src="img/kitten/37.JPG"></li>
  								<li><img src="img/kitten/38.JPG"></li>
  								<li><img src="img/kitten/39.JPG"></li>
  								<li><img src="img/kitten/40.JPG"></li>
  								<li><img src="img/kitten/41.JPG"></li>
  								<li><img src="img/kitten/42.JPG"></li>
  								<li><img src="img/kitten/43.JPG"></li>
  								<li><img src="img/kitten/44.JPG"></li>
  								<li><img src="img/kitten/45.JPG"></li>
  								<li><img src="img/kitten/46.JPG"></li>
  								<li><img src="img/kitten/47.JPG"></li>
  								<li><img src="img/kitten/48.JPG"></li>
  								<li><img src="img/kitten/49.JPG"></li>
  								<li><img src="img/kitten/50.JPG"></li>
  								<li><img src="img/kitten/51.JPG"></li>
  								<li><img src="img/kitten/52.JPG"></li>
  								<li><img src="img/kitten/53.JPG"></li>
  								<li><img src="img/kitten/54.JPG"></li>
  								<li><img src="img/kitten/55.JPG"></li>
							</ul>
						</div>
					</div>
				</div>
				<a class="close" title="Закрыть" href="#close"></a>
			</div>
<!-- ********************************* -->
<script>jQuery(document).ready(function(){
 jQuery('.bxslider').bxSlider({
  			mode: 'fade', 
  	        captions: true,                  
            easing: 'easeInOutQuad',
            controls: true,         
            startSlide: 1,         
            infiniteLoop: true,    
            pager: true,            
            auto: true,          
            pause: 9000,            
            speed: 200,
            adaptiveHeight: true,  
            autoHover: true,            
            useCSS: true      
  });
});</script>
		<div class="wrapper">
			<div class="container">
				<header>
					<div class="siteLeft">
					
					</div>
					<div class="siteRight">
						<div class="phone">
							<a href="tel:89045158223">
								<strong>
									+7 (904)
								</strong>
								515 82 23
							</a>
						</div>
						<div class="mail">
							<a href="mailto:luchik444468@mail.ru">
								luchik444468@mail.ru
							</a>
						</div>
						<div class="vk">
							<a href="https://vk.com/id30539398" target="_blank">
								vk.com/id30539398
							</a>
						</div>
					</div>
					<div class="logo">
						
					</div>
				</header>
				<div class="menu">
					<nav>
						<ul>
							<li>
								<a href="\">Главная</a>
							</li>
							<li>
								<a href="cat.php">Кошки</a>
							</li>
							<li>
								<a href="kitten.php">Котята</a>
							</li>
						</ul>
					</nav>
				</div>