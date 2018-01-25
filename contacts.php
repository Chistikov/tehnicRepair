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
				<div class="contactsBlock">
					<div class="textBlock">
						<div class="infoWrapper">
							<div class="text">время работы:</div>
							<div class="info"><? echo $workTime; ?></div>
						</div>
						<div class="infoWrapper">
							<div class="text">наш адрес:</div>
							<div class="info"><? echo $address; ?></div>
						</div>
						<div class="infoWrapper">
							<div class="text">наша почта:</div>
							<div class="info"><? echo $mail; ?></div>
						</div>
						<div class="infoWrapper">
							<div class="text">skype:</div>
							<div class="info"><? echo $skypeLogin; ?></div>
						</div>
					</div>
					<div class="contactsB">
						<div class="title">наши телефоны:</div>
						<div class="phonesBlock">
							<div class="phoneImg"></div>
							<div class="phonesWrapper">
								<div class="phone"><? echo $phone1; ?></div>
								<div class="phone"><? echo $phone2; ?></div>
							</div>
						</div>
						<div class="skypeBtn">
							<div class="skypeImg"></div>
							<div class="text">связаться с консультантом</div>
						</div>
					</div>					
				</div>
				<div class="desc">В большинстве случаев выезжаем на дом или офис к заказчику.
При необходимости привести компьютер к нам в офис — согласовывайте заранее по телефону.</div>
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