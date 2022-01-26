<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="public/css/styles.css">
	<title>Grooming</title>
</head>

<body>
	<header>
		<div class="header-container">
			<div class="logo">
				<h1 class="logo-title">GROOMING</h1>
				<font class="logo-text">Service for dogs and cats</font>
			</div>
			<div>
				<a class="nav-button active" href="index">Главная</a>
				<a class="nav-button" href="#">Заявки</a>
				<a class="nav-button active" href="auth">Кабинет</a>
			</div>
		</div>
	</header>
	<section>
		<div class="section-container-zaya">
			<div class="left-section">
				<div class="text-name-zaya"><span>Мои заявки</span></div>
				<div class="zayavki">
					<div class="zayavka">
						<img class="mini-dog" src="public/img/dog.png" alt="">
						<span class="number-zaya">Заявка №1</span>
						<span class="info"></span>
					</div>
					<div class="zayavka">
						<img class="mini-dog" src="public/img/dog.png" alt="">
						<span class="number-zaya">Заявка №1</span>
						<span class="info"></span>
					</div>
					<div class="zayavka">
						<img class="mini-dog" src="public/img/dog.png" alt="">
						<span class="number-zaya">Заявка №1</span>
						<span class="info"></span>
					</div>
				</div>
			</div>
			<div class="right-section zaya">
				<div class="text-box">Создайте заявку</div>
				<form action="">
					<input class="polev" type="text" name="" placeholder="Текстовое поле">
					<input class="polev" type="text" name="" placeholder="Текстовое поле">
					<input class="otprav" type="submit" value="Записаться" id="input">
				</form>
			</div>
		</div>
	</section>
	<footer>
		<div class="name-footer">groom-salon.com 2000-2999</div>
	</footer>
	<script src="public/js/script.js"></script>
	<script src="public/js/vue.js"></script>
</body>

</html>