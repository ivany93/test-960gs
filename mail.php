<?php
/**
 * Created by PhpStorm.
 * User: Ivany
 * Date: 11.05.2016
 * Time: 20:19
 */

$name = $_POST['name'];
$number = $_POST['number'];
// Сообщение
$message = "Здраствуйте ".$name."! \n Мы позвоним вам за номером ".$number;

// На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Отправляем
mail('myemail@example.com', 'Тестовое задание', $message);
?>
<script type="text/javascript">
    location="index.php";
</script>
