<html>
	<head>
		<title>MinecraftCMS - login</title>
		<link href="<?=base_url()?>css/login.css" rel="stylesheet">
	</head>
	<body>
		<div class="logo">
			<img src="<?=base_url()?>images/admin/ironviking.png">
		</div>
		<div id="loginbox">
		<?php
			if(isset($failure)){
				if($failure != NULL) {
						echo '<div class="failure">' . $failure . '</div>';
				}
				}
		?>
			<h4>Войти</h4>
			<hr>
			<form action="" method="post">
			<label><strong>Имя пользователя:</strong></label><br>
			<input required name="username" type="textbox"><br>
			<label><strong>Пароль:</strong></label><br>
			<input name="password" required type="password"><br>
			<input type="submit" value="Войти">
			</form>
			<p>Используйте имя пользователя и пароль, установленные в пользовательской конфигурации.</p>
		</div>
		<p style="font-weight: bold; font-family: arial; text-align: center;">MinecraftCMS - Alpha</p>
	</body>
</html>
