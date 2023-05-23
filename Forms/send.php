<?php 
/*
if($_POST['subject'] == 1) {
    $subject = '1';
} elseif($_POST['subject'] == 2) {
    $subject = '2';
} elseif($_POST['subject'] == 3) {
    $subject = '3';
} elseif($_POST['subject'] == 4) {
    $subject = '4';
} elseif($_POST['subject'] == 5) {
    $subject = '5';
} elseif($_POST['subject'] == 6) {
    $subject = '6';
} elseif($_POST['subject'] == 7) {
    $subject = '7';
} elseif($_POST['subject'] == 8) {
    $subject = '7';
} elseif($_POST['subject'] == 9) {
    $subject = '9';
} elseif($_POST['subject'] == 10) {
    $subject = '10';
} else {
    $subject = 'Ваша оценка';
}
*/
$subject = ($_POST['subject'] >= 1 && $_POST['subject'] <= 10) ? strval($_POST['subject']) : 'Ваша оценка';
//$from = trim($_POST['email']);
$names = trim($_POST['names']);

if (strlen($names) > 20) {
    echo 'Имя слишком длинное';
    exit;
}

$email = trim($_POST['email']);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Email недействительный';
} else {
    
    $message = htmlspecialchars($_POST['message']);
    $message = urldecode($message);
    $message = trim($message);

    if(mail($names, $email, $subject, $message,)) {
        echo 'Отправлено';
    } else {
        echo 'Ошибка';
    }
    }
