<?php
// Файлы phpmailer
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';
// Переменные, которые отправляет пользователь
$order0 = $_POST['order-0'];
$order1 = $_POST['order-1'];
$order2 = $_POST['order-2'];
$order3 = $_POST['order-3'];
$order4 = $_POST['order-4'];
$order5 = $_POST['order-5'];
$order6 = $_POST['order-6'];
$order7 = $_POST['order-7'];
$order8 = $_POST['order-8'];
$order9 = $_POST['order-9'];
$order10 = $_POST['order-10'];
$order11 = $_POST['order-11'];
$order12 = $_POST['order-12'];
$order13 = $_POST['order-13'];
$order14 = $_POST['order-14'];
$order15 = $_POST['order-15'];
$order16 = $_POST['order-16'];
$order17 = $_POST['order-17'];
$order18 = $_POST['order-18'];
$order19 = $_POST['order-19'];
$order20 = $_POST['order-20'];
$order21 = $_POST['order-21'];
$order22 = $_POST['order-22'];
$order23 = $_POST['order-23'];
$order24 = $_POST['order-24'];
$order25 = $_POST['order-25'];
$order26 = $_POST['order-26'];
$order27 = $_POST['order-27'];
$order28 = $_POST['order-28'];
$order29 = $_POST['order-29'];
$order30 = $_POST['order-30'];
$order31 = $_POST['order-31'];
$order32 = $_POST['order-32'];
$order33 = $_POST['order-33'];
$order34 = $_POST['order-34'];
$order35 = $_POST['order-35'];
$order36 = $_POST['order-36'];
$order37 = $_POST['order-37'];
$order38 = $_POST['order-38'];
$order39 = $_POST['order-39'];
$order40 = $_POST['order-40'];
$order41 = $_POST['order-41'];
$order42 = $_POST['order-42'];
$order43 = $_POST['order-43'];
$order44 = $_POST['order-44'];
$order45 = $_POST['order-45'];
$order46 = $_POST['order-46'];
$order47 = $_POST['order-47'];
$order48 = $_POST['order-48'];
$order49 = $_POST['order-49'];
$order50 = $_POST['order-50'];
$order51 = $_POST['order-51'];
$order52 = $_POST['order-52'];
$order53 = $_POST['order-53'];
$order54 = $_POST['order-54'];
$order55 = $_POST['order-55'];
$order56 = $_POST['order-56'];
$order57 = $_POST['order-57'];
$order58 = $_POST['order-58'];
$order59 = $_POST['order-59'];
$order60 = $_POST['order-60'];
$order61 = $_POST['order-61'];
$order62 = $_POST['order-62'];
$order63 = $_POST['order-63'];
$order64 = $_POST['order-64'];
$order65 = $_POST['order-65'];
$order66 = $_POST['order-66'];
$order67 = $_POST['order-67'];
$order68 = $_POST['order-68'];
$order69 = $_POST['order-69'];
$order70 = $_POST['order-70'];
$order71 = $_POST['order-71'];
$order72 = $_POST['order-72'];
$order73 = $_POST['order-73'];
$order74 = $_POST['order-74'];
$order75 = $_POST['order-75'];
$order76 = $_POST['order-76'];
$order77 = $_POST['order-77'];
$order78 = $_POST['order-78'];
$order79 = $_POST['order-79'];
$order80 = $_POST['order-80'];
$order81 = $_POST['order-81'];
$order82 = $_POST['order-82'];
$order83 = $_POST['order-83'];
$order84 = $_POST['order-84'];
$order86 = $_POST['order-86'];
$order87 = $_POST['order-87'];
$order88 = $_POST['order-88'];
$order89 = $_POST['order-89'];
$order90 = $_POST['order-90'];
$order91 = $_POST['order-91'];
$order92 = $_POST['order-92'];
$order93 = $_POST['order-93'];
$order94 = $_POST['order-94'];
$order95 = $_POST['order-95'];
$order96 = $_POST['order-96'];
$order97 = $_POST['order-97'];
$order98 = $_POST['order-98'];
$order99 = $_POST['order-99'];
$name = $_POST['name'];
$tel = $_POST['tel'];
$comment = $_POST['comment'];

$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "ok";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth   = true;
    // Настройки вашей почты
    $mail->Host       = 'smtp.mail.ru'; // SMTP сервера GMAIL
    $mail->Username   = 'uralprokat96@createers.tech'; // Логин на почте
    $mail->Password   = '7y0peKwx;KJR'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('uralprokat96@createers.tech', 'URALPROKAT96'); // Адрес самой почты и имя отправителя
    // Получатель письм 
    $mail->addAddress('vologvladimir@mail.ru');
    $mail->addAddress('uralprokat96@yandex.ru');
    // Прикрипление файлов к письму
/*if (!empty($_FILES['myfile']['name'][0])) {
    for ($ct = 0; $ct < count($_FILES['myfile']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['myfile']['name'][$ct]));
        $filename = $_FILES['myfile']['name'][$ct];
        if (move_uploaded_file($_FILES['myfile']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Неудалось прикрепить файл ' . $uploadfile;
        }
    }   
}*/
        // -----------------------
        // Само письмо
        // -----------------------
        $mail->isHTML(true);
    
        $mail->Subject = 'Новый заказ!';
        $mail->Body    = "У вас новый заказ на аренду инструментов!
        <b>$name</b> хочет взять в аренду следующее:<br>
        $order0
        $order1
        $order2
        $order3
        $order4
        $order5
        $order6
        $order7
        $order8
        $order9
        $order10
        $order11
        $order12
        $order13
        $order14
        $order15
        $order16
        $order17
        $order18
        $order19
        $order20
        $order21
        $order22
        $order23
        $order24
        $order25
        $order26
        $order27
        $order28
        $order29
        $order30
        $order31
        $order32
        $order33
        $order34
        $order35
        $order36
        $order37
        $order38
        $order39
        $order40
        $order41
        $order42
        $order43
        $order44
        $order45
        $order46
        $order47
        $order48
        $order49
        $order50
        $order51
        $order52
        $order53
        $order54
        $order55
        $order56
        $order57
        $order58
        $order59
        $order60
        $order61
        $order62
        $order63
        $order64
        $order65
        $order66
        $order67
        $order68
        $order69
        $order70
        $order71
        $order72
        $order73
        $order74
        $order75
        $order76
        $order77
        $order78
        $order79
        $order80
        $order81
        $order82
        $order83
        $order84
        $order85
        $order86
        $order87
        $order88
        $order89
        $order90
        $order91
        $order92
        $order93
        $order94
        $order95
        $order96
        $order97
        $order98
        $order99
        Связь с клиентом <b>$name</b> по номеру телефона: <b>$tel</b><br>
        <b>Дополнительная информация:</b>$comment";
// Проверяем отравленность сообщения
if ($mail->send()) {
    echo "$msg";
} else {
echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
}
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}