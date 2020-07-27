<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Работа с файлами</title>
</head>
<body>
    <form action="write.php" method="post">
        <textarea name="message" id="" cols="80" rows="8"></textarea> <br>
        <button type="submit">Отправить</button>
        
    </form>
    
    <?php
//        $file = fopen('text/data.txt', 'r');
//        echo fread($file, 10);
//        fclose($file);
    
    echo file_get_contents('text/data.txt') . '<br>';           // Читает из файла
//    file_put_contents ('text/data.txt', 'Testing');           // Записывает что-то в файл. Что-то указывается здесь же
    echo file_exists('text/data.txt') . '<br>';                 //Показывает, существует ли файл .Если существует, то выводит единичку. Если не существует, то пустую строку
    echo filesize('text/data.txt'). '<br>';                     //Показывает размер файла в байтах
//    rename ('text/motherfucker.txt', 'text/data.txt')         //Переименовывает файл
//    unlink('text/data.txt');                                    //Удаляет файл с сервера (в нашем случае сервер это наш комп. Удаляется файл именно с компа)
    ?>
</body>
</html>