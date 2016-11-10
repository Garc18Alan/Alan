<!DOCTYPE html>
<html>
<head>
	<title>Bem vindo!</title>
</head>
<body>
	<form action="<?php echo $view['router']->path('window1') ?>" method="post">
		<label>Nome</label>
		<input type="text" name="nome">
		<label>Senha</label>
		<input type="password" name="senha">
		<input type="submit" name="enviar">
	</form>
</body>
</html>
