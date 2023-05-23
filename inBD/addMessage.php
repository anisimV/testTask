<?php

if (isset($_POST["names"]) && isset($_POST["email"]) && isset($_POST["view"]) && isset($_POST["content"])) {

$conn = mysqli_connect("localhost", "root", "", "feedback");
if (!$conn) {
    die("Ошибка: " . mysqli_connect_error());
}

$names = mysqli_real_escape_string($conn, $_POST["names"]);
if (strlen($names) > 20) {
    echo "Имя слишком длинное";
} else {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Некорректный email";
    } else {
        $view = mysqli_real_escape_string($conn, $_POST["view"]);
        $content = mysqli_real_escape_string($conn, $_POST["content"]);
        $sql = "INSERT INTO message (names, email, view, content) VALUES ('$names', '$email', $view, '$content')";
        if (mysqli_query($conn, $sql)) {
            echo "Данные успешно добавлены";
        } else {
            echo "Ошибка: " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
}
