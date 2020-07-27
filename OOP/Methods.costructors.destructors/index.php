<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Методы, конструкторы и деструкторы класса</title>
</head>
<body>

<?
	class User
	{
		const PASS = "password";
		
		public $name;
		private $surname = "None";
		private $email;
		private $login;
		private $pass;


		function __costruct($name, $surname, $login) {
			$this->name = $name;
			$this->surname = $surname;
			$this->login = $login;
			$this->showAll("Пользователь: ");
			echo self::PASS . '<br>';
		}
		
		function showAll($text = "") {
			echo $text . $this->name . ", " . $this->surname . $this->login . '<br>';
		}
		
		function getSurname() {
			return $this->surname;
		}
		
		function __destruct() {
			print 'Уничтожается ' . __CLASS__ . '<br>';
		}
	}
	
	echo User::PASS . '<br>';
	
	$admin = new User("John", "Marley", "Admin");
	
	$redacrtor = new User("Bob", "Marley", "Redactor");
	// $redactor->showAll("Пользователь: ");

	$moderator = new User("George", "Marley", "Moderator");
	// $moderator->showAll();
?>

</body>
</html>