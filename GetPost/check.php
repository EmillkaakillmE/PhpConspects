<?php
header ('Location: /GetPost/');
die();

        if($_POST['name'] == "") {
            echo 'Введите ваше имя'.'<br>';
        } else {
            echo $_POST['name'].'<br>';
        }

        if($_POST['email'] == "") {
            echo 'Введите ваш эмейл'.'<br>';
        } else {
            echo $_POST['email'].'<br>';
        }

        echo '<br>';
        if($_GET['name'] == "") {
            echo 'Введите ваше имя';
        } else {
            echo $_GET['name'].'<br>';
        }
        echo '<br>';

        if($_GET['email'] == "") {
            echo 'Введите ваш эмейл';
        } else {
            echo $_GET['email'].'<br>';
        }
        
    ?>