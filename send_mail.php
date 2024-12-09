<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = "ooo.integration@yandex.ru"; // Укажите ваш email
    $subject = "Новая заявка с сайта Интегратор";
    $body = "Вы получили новую заявку:\n\n" .
            "Имя: $firstName\n" .
            "Фамилия: $lastName\n" .
            "Email: $email\n" .
            "Телефон: $phone\n" .
            "Сообщение: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
