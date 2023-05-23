<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="send.php" method="POST">
        <p>Имя:</p>
            <input type="text" name="names" style="display: block">
        <p>email:</p>
            <input type="text" name="email" style="display: block"> <br>
        <select name="subject" style="display: block">
            <option disabled selected>Ваша оценка</option> <br>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option> 
        </select> <br>
        <textarea name="message" cols="50" rows="10" placeholder="Введите Ваше сообщение"></textarea> <br>
            <input type="submit" value="Отправить">
    </form>
</body>
</html>
