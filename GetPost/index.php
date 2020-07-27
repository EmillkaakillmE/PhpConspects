<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get&amp;Post</title>
</head>
<body>
   <!--POST---------------------------------------->
    <form action="/GetPost/check.php" method="post">
        <label for="name">Имя</label>
        <input type="text" name="name" placeholder="Ваше имя"> <br>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Ваш Email"> <br>
        <button type="submit">Отправить</button>
    </form>
    
    
    
    <!--GET--------------------------->
    <form action="/GetPost/check.php" method="get">
        <label for="name">Имя</label>
        <input type="text" name="name" placeholder="Ваше имя"> <br>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Ваш Email"> <br>
        <button type="submit">Отправить</button>
    </form>
    
    
</body>
</html>