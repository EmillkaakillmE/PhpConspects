<?
    //session_start(); //Позволяет работать с сессиями на странице поля ввода
    setcookie("email", $_POST['email'], time() - 3600); //Удаление куки
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie и Session</title>
</head>
<body>
    <form action="action.php" method="post">
       <label for="name">Имя</label>
        <input type="text" name="name"> <br>
        
        <label for="email">Email</label>
        <input type="email" name="email"> <br>
        
        <button type="submit">Отправить</button>
    </form>
    
    <?
//    session_destroy(); //Не работает (Должна удалять сессию и не выводить её вообще...)
//        if($_SESSION['name'] != "" && $_SESSION['email'] != ""){ //Проверка на наличие данных
//            
//            echo 'Имя пользователя:' . " " . $_SESSION['name'] . '<br>';  //Вывод данных
//            echo 'Email пользователя:' . " " . $_SESSION['email'] . '<br>';
//        }
//        else {
//            echo 'Введите хоть что-нибудь <br>';  //Вывод фразы на случай отсутствия данных
//        }
        
        // Удаление куки
		// setcookie("name", $_POST['name']. time() - 3600);
		// setcookie("email", $_POST['email']. time() - 3600);
		
        if($_COOKIE['name'] != "" && $_COOKIE['email'] != ""){		//Всё те же условия проверки наличия данных
                
                echo 'COOKIE: Имя пользователя:' . " " . $_COOKIE['name'] . '<br>';     //Вывод данных куки
                echo 'COOKIE: Email пользователя:' . " " . $_COOKIE['email'] . '<br>';  //Вывод данных куки
            }
            else {
                echo 'Введите хоть что-нибудь <br>';
            }
    
    ?>
</body>
</html>