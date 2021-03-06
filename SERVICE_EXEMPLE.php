<?php	require_once "info.php"; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>РЕМ ТЕХ</title>
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/all_styles.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/fonts.css">
</head>
<body>

	<div class="wrapper">
		<header>
			<? require_once "headerAndMenu.php" ?>
		</header>	
		<article>
			<div class="serviceBlock">						
				<div class="infoBlock">
					<div class="img"></div>
					<div class="textBlock">
						<div class="title">ремонт телефонов и планшетов</div>
						<div class="text">Наш сервис центр по ремонту планшетов взаимодействует с официальными поставщиками комплектующих и запасных частей на компьютерную технику любой марки и любого производителя. Владельцы гаджетов от Apple, Lenovo, Samsung, Asus, Acer, Microsoft, Sony, Huawei и других компаний, могут быть уверены, что в сервисе в их планшеты «вдохнут вторую жизнь». Специалисты доподлинно знают все сильные и слабые стороны каждого бренда, имеют представление об основных поломках и способах их устранения. Богатый опыт и знания позволяют решать задачи за считанное время.</div>						
					</div>
				</div>
				<div class="serviceListBlock">
					<div class="title">наши услуги по ремонту телефонов и планшетов</div>
					<div class="serviceWrp">
						<div class="arrow"></div>
						<div class="text">диагностика устройства</div>
					</div>
					<div class="serviceWrp">
						<div class="arrow"></div>
						<div class="text">диагностика устройства диагностика устройства диагностика устройства диагностика устройства диагностика устройства</div>
					</div>
					<div class="serviceWrp">
						<div class="arrow"></div>
						<div class="text">диагностика устройства</div>
					</div>
				</div>
				<div class="detailsBlock">*подробную информацию по ценам можно узнать, позвонив в  наш сервисный центр</div>
			</div>
			<? require_once "questionsBlock.php"; ?>	
		</article>
		<footer>
			<? require_once "footerBlock.php" ?>	
			<? require_once "authorInfoBlock.php" ?>	
		</footer>
	</div>

	<? require_once "skype_btn.php" ?>

	<? require_once "scripts.php" ?>	
	</div>	
</body>
</html>