<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?
		$config[CURLOPT_URL] = "https://weburl/index.action";
		$config[CURLOPT_VERBOSE] = 0;
		$config[CURLOPT_SSLVERSION] = 3;
		$config[CURLOPT_SSL_VERIFYPEER] = FALSE;
		$config[CURLOPT_SSL_VERIFYHOST] = 2;
		$config[CURLOPT_FOLLOWLOCATION] = 0;
		//Подключаем CURL
		$curl = curl_init();
		
		//Настройка CURL. Первый параметр это переменная с подключением, вторая параметр настройки, третье - его значение.
		foreach($config as $key => $val) {
			curl_setopt($curl, $key, $val);
		}
		
		
		//Выполнение CURL с теми настройками, что мы произвели в curl_setopt
		curl_exec($curl);
		
		//Закрываем CURL. Эт обязательно
		curl_close($curl);
	?>
</body>
</html>