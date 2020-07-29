<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="" type="text/css" charset="utf-8">

	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="Описание страницы"/>
	<link href="#" rel="shortcut icon" type="image/x-icon"/>
	<meta name="keywords" content="ключевые слова"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:locale" content="ru_RU">
	<meta property="og:type" content="article">
	<meta property="og:title" content="Заголовок страницы">
	<meta property="og:description" content="Описание страницы">
	<meta property="og:image" content="#">
	<meta property="og:url" content="#">
	<meta property="og:site_name" content="название сайта">

	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="Имя автора">
	<meta name="twitter:title" content="Название страницы">
	<meta name="twitter:description" content="Описание страницы">
	<meta name="twitter:image" content="#">
</head>
<body>
	<?
/**
 *Основной класс Car, с характеристиками цвета, скорости и колёс.
 */
		class Car {
			protected $speed;
			protected $wheels;
			protected $color;
			
			function __construct($speed, $color) {
				$this->speed = $speed;
				$this->color = $color;
			}
			
			function ShowInfo() {
				echo "Скорость автомобиля: " . $this->speed . '<br>';
			}
		}
		
		/**
		 *Класс наследник BMW, с уникальным параметром "модель"
		 */
		class BMW extends Car {					/*А вот это произошло наследование*/
			private $model;
			
			function __construct($speed, $color , $model) {
				//Помимо изменения функции мы подключаем всё то, что было у родительского класса в этой функции. (Перегрузка)
				parent::__construct($speed, $color);
				$this->model = $model;
			}
			
			function ShowInfo() {					/*Это ща кстати Полиморфизм был*/
				echo "Скорость автомобиля: " . $this->speed . '<br>';
				echo "Модель автомобиля: " . $this->model . '<br>';
				echo "Цвет автомобиля: " . $this->color . '<br>';
			}
			
			// function setModel() {
			// 	echo "Модель автомобиля: " . $this->model . '<br>';
			// 	echo "Цвет автомобиля: " . $this->color . '<br>';
			// }
		}
		
		class Audi extends Car {}
		
		$m3 = new BMW(340, "Белый", "M3");
		$m3->ShowInfo();
		// $m3->setModel();
		echo "<br>";
		$x5 = new BMW(250, "Синий", "X5");
		$x5->ShowInfo();
		// $x5->setModel();
	?>
</body>
</html>