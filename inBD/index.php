<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="addMessage.php" method="POST">
            <p>Имя:</p>
            <input type="text" name="names" style="display: block">
            <p>email:</p>
            <input type="text" name="email" style="display: block">
            <p>Оцените нас от 1 до 10:</p>
            <input type="text" name="view" style="display: block">
            <p>Введите комментарий:</p> 
            <textarea name="content" cols="50" rows="10"></textarea> <br>
            <input type="submit" value="Отправить">
        </form>
</body>
</html>
