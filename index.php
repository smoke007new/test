<!DOCTYPE html>
<html lang='ru'>
<head>
	<title>Простейший PHP- сценарий</title>
	<meta charset='utf-8'>
</head>
<body>
<h1>Здравствуйте!</h1>

<dl>
	<dt><strong>Твой IP:</strong></dt>
	<dd><em><?php print($_SERVER['REMOTE_ADDR']); ?></em></dd>

	<dt><strong>Твоя операционная система</strong></dt>
	<dd><em><?php print(get_browser()->platform); ?></em></dd>

	<dt><strong>Твой браузер</strong></dt>
	<dd><em>
		<?php print(get_browser() ->browser); ?> версии 
		<?php print(get_browser() ->vetsion); ?>
	</em></dd>
</dl>
	
</body>
</html>