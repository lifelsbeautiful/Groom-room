<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="public/css/styles.css">
	<title>Grooming</title>
</head>

<body>
	<div class="ret">
		<header>
			<div class="header-container">
				<div class="logo">
					<h1 class="logo-title">GROOMING</h1>
					<font class="logo-text">Service for dogs and cats</font>
				</div>
				<div>
					<a class="nav-button" href="index">Главная</a>
					<a class="nav-button active" href="auth">Вход</a>
				</div>
			</div>
		</header>
		<div class="section-container">
			<div class="left-section">
				<div class="text-name"><span>Профессиональная укладка<br> для ваших домашних<br> питомцев</span></div>
			</div>
			<div class="right-section">
				<div class="text-box">Создайте заявку</div>
				<form action="">
					<input type="text" class="polev" v-bind:value="znachName" v-on:input="vhodName" placeholder="Введите кличку питомца">
					<input type="text" class="polev" v-bind:value="znachService" v-on:input="vhodService" placeholder="Введите название услуги">
					<button class="otprav" type="button" v-on:click="submissionForm">Записаться</button>
			</div>
			</form>
		</div>
		<div class="section-project">
			<div class="text-project">Наши работы</div>
			<div class="project">
				<div class="one-project" v-for="myjobs in projects">
					<img :src="myjobs.img" alt="" class="dog">
					<div class="name-project">{{myjobs.nickname}}</div>
					<select>
						<option>
							<div class="service">Название услуги: <b>{{myjobs.service}}</b></div>
						</option>
					</select>
					<div class="stage">{{myjobs.stage}}</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="name-footer">groom-salon.com 2000-2999</div>
		</footer>
		<script src="public/js/script.js"></script>
		<script src="public/js/vue.js"></script>
	</div>
</body>

</html>