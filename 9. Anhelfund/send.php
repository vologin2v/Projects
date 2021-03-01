
<?php
// Файлы phpmailer
require 'php/PHPMailer.php';
require 'php/SMTP.php';
require 'php/Exception.php';


// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$text = $_POST['text'];

// Формирование самого письма
$title = "Новая заявка!";
$body = "
<h2>Новая заявка на сайте</h2>
<b>Имя:</b> $name<br>
<b>Номер телефона:</b> $tel<br>
<b>Почта:</b> $email<br>
<b>Сообщение:</b><br>$text
";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'anfund01'; // Логин на почте
    $mail->Password   = 'k1705r2512'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('anfund01@yandex.ru', 'ANHELFUND'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('anfund01@gmail.com');  

// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
?>
<?php

//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "1443457122:AAGWkJZGMjocC2KQYp6hShSgzcHfnw_RXWc";

//Сюда вставляем chat_id
$chat_id = "-273073478";

//Определяем переменные для передачи данных из нашей формы
if ($_POST['act'] == 'order') {
    $tgname = ($_POST['name']);
    $tgtel = ($_POST['tel']);
    $tgemail = ($_POST['email']);
    $tgtext = ($_POST['text']);

//Собираем в массив то, что будет передаваться боту
    $arr = array(
        'Имя:' => $tgname,
        'Телефон:' => $tgtel,
        'E-mail:' => $tgemail,
        'Вопрос:' => $tgtext
    );

//Настраиваем внешний вид сообщения в телеграме
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

//Передаем данные боту
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text=<b>Новая заявка!</b>{$txt}","r");

//Выводим сообщение об успешной отправке
    if ($sendToTelegram) {
        alert('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');
    }

//А здесь сообщение об ошибке при отправке
    else {
        alert('Что-то пошло не так. ПОпробуйте отправить форму ещё раз.');
    }
}

?>