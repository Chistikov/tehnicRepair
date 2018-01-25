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
					<div class="textBlock"></div>
					<div class="contactsB">
						<div class="title">наши телефоны:</div>
						<div class="phonesBlock">
							<div class="phonesWrapper">
								<div class="phone"><? echo $phone1; ?></div>
								<div class="phone"><? echo $phone2; ?></div>
							</div>
						</div>
						<div class="skypeBtn"></div>
					</div>
				</div>
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