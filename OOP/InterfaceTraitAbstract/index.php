<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Интерфейсы, трейты и абстрактный класс</title>
</head>
<body>
	
	<h2>Интерфейсы</h2>
	<p>
		В PHP отсутствует множественное наследование. Нельзя одному классу наследовать сразу 2-3 или более классов.
	</p>
	<?/*

		class Parent1{
			
			function __construct($argument) {

			}
		}
		class Parent2{
			
			function __construct($argument) {

			}
		}


		class Child extends Parent1, Parent2 {				//Вот так делать нельзя
			
			function __construct(argument) {
				# code...
			}
		}
	*/?>

<p>
	Но необходимость такая на самом деле есть. Эту проблему решают интерфейсы. Интерфейсы это лишь шаблоны, которые описывают какие константы или методы должен содержать наследуемый класс. А наследовать он будет именно эти самые интерефейсы. Но созданные в интерфейсе методы не реализуются там же. Они там только создаются. Реализуются они уже непосредственно в самом классе-наследнике. Ключевая особенность интерфейсов в том, что один класс может наследовать сколько угодно интерфейсов.
</p>

<?/*
	interface Human {
		public function talk();
		public function walk();
	}
	
	interface Mutant {
		public function fly();
	}
	
	class Person implements Human, Mutant{
		function talk() {
			echo 'Человек говорит <br>';
		}
		
		function walk() {
			echo "Человек ходит <br>";
		}
		
		function fly() {
			echo "Мутант летает <br>";
		}
	}
	
	$Clark = new Person();
	$Clark->talk();
	$Clark->walk();
	$Clark->fly();
*/?>

<p>
	Если реализовать не все методы из интерфейса, то будет ошибка.
</p>

<p>
	Также интерфейсы могут наследовать друг друга. Таким образом мы сможем создавать некие матрёшки из интерфейсов.
</p>

<?/*
interface Human {
		public function talk();
		public function walk();
	}
	
	interface Mutant extends Human {				//Наследование интерфейса
		public function fly();
	}
	
	class Person implements Mutant{			//Теперь можно использовать только один интерфейс, который унаследовал первый интерефейс
		function talk() {
			echo 'Человек говорит <br>';
		}
		
		function walk() {
			echo "Человек ходит <br>";
		}
		
		function fly() {
			echo "Мутант летает <br>";
		}
	}
	
	$Clark = new Person();
	$Clark->talk();
	$Clark->walk();
	$Clark->fly();
*/?>


<h2>Трейты</h2>

<?/*
	trait PrintSome {
		public function talk() {
			echo "Привет мир! <br>";
		}

		public function sayBye() {
			echo "Пока всем <br>";
		}
	}
	
	trait PrintSome_2{
		public function something() {
			echo "Ещё один трейт <br>";
		}
	}
	


	class TestClass{
		use PrintSome, PrintSome_2;
	}
	
	
	$obj = new TestClass();
	$obj->talk();
	$obj->sayBye();
	$obj->something();
*/?>

<h2>Абстрактные классы</h2>

<p>
	Это такие классы, на основе которых нельзя создать объекты. В этих классах создаются абстрактные методы, которые обязательны к реализации (все до единого) в классах-наследниках
</p>

<?
	abstract class Car {
		protected $speed;
		protected $color;
		
		abstract protected function showInfo();
	}
	
	class BMW extends Car{
		
		function __construct ($speed) {
			$this->speed = $speed;
			
		}
		
		function showInfo() {
			echo "Скорость автомобиля: " . $this->speed;
		}
	}
?>


<p>
	Если не написать модификатор доступа методу, то он по умолчанию будет - public
</p>

<?
	$m3 = new BMW(333);
	$m3->showInfo();
?>
</body>
</html>