<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

  function writelog($s) {
	$debug=false;	
   	if ($debug) {
		$lf=@fopen(dirname(__FILE__).'/'.'mail.log','a');
      		fputs($lf,"$s\n");
		}
	}

	

  $to = $_POST['email'];
  $from = 'hello@vladimirvologin.ru';
  $sub = 'Кое-что важное!';

  $name = $_POST['name'];
	$date = $_POST['date'];
	
	$max_budget = $_POST['send-max-budget'];
	$last_time = $_POST['send-last-time'];
	$site_type = $_POST['send-site-type'];
	$products = $_POST['send-products'];
	$services = $_POST['send-services'];
	$priority = $_POST['send-priority'];
	$market = $_POST['send-market'];
	$average_check = $_POST['send-average-check'];
	$order_per_month = $_POST['send-order-per-month'];
	$promotion_type = $_POST['send-promotion-type'];
	$promotion_geo = $_POST['send-promotion-geo'];
	$tariff = $_POST['send-tariff'];
	$price = $_POST['send-price'];
	$duration = $_POST['send-duration'];
	$format = $_POST['send-format'];
	$messenger = $_POST['send-messenger'];
	$files = $_POST['send-files'];
	$video = $_POST['send-video'];
	$payment = $_POST['send-payment'];

  $orig_file = file_get_contents('mail.html');
  file_put_contents('temp_file.html', $orig_file);
  $name_old = "[[name]]";
  $date_old = "[[time]]";
  $name_new = $name;
  $date_new = $date;
  $file = file_get_contents('temp_file.html');
  $new_content = str_replace(array($name_old, $date_old), array($name_new, $date_new), $file);
  file_put_contents('temp_file.html', $new_content);

  $content_mess = file_get_contents('temp_file.html');

  unlink('temp_file.html');

  $mess = $content_mess;

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
  //require 'vendor/autoload.php';
  require 'phpmailer/Exception.php';
  require 'phpmailer/PHPMailer.php';
  require 'phpmailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
    //Server settings
    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = 4;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.yandex.ru';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'hello@vladimirvologin.ru';                     // SMTP username
    $mail->Password   = 'Test1234';                               // SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('hello@vladimirvologin.ru', 'Владимир Вологин');
    $mail->addAddress($to);     // Add a recipient
    $mail->addReplyTo('hello@vladimirvologin.ru', 'Владимир Вологин');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $sub;
    $mail->Body    = $content_mess;
    $mail->AltBody = 'Письмо от Владимира Вологина';

    $mail->send();
    writelog("Message has been sent: $to");
  } 
  catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    writelog("Message could not be sent ($to). Mailer Error: {$mail->ErrorInfo}");
	}
	
	// ++++++++++++++++++++++++++++

	try {
    //Server settings
    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = 4;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.yandex.ru';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'hello@vladimirvologin.ru';                     // SMTP username
    $mail->Password   = 'Test1234';                               // SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('hello@vladimirvologin.ru', 'Владимир Вологин');
    $mail->addAddress('vologvladimir@mail.ru');     // Add a recipient
    $mail->addReplyTo('hello@vladimirvologin.ru', 'Владимир Вологин');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		$body_mail = "
		<b>Имя клиента:</b> $name<br>	
		<b>E-mail клиента:</b> $to <br>	
		<br>
		<b>Исходные данные</b><br>
		<br>
		<b>Максимальный бюджет:</b> $max_budget <br>	
		<b>Крайний срок:</b> $last_time <br>	
		<b>Тип сайта:</b> $name <br>	
		<b>Количество товаров:</b> $products <br>	
		<b>Количество услуг:</b> $services <br>	
		<b>Приоритет:</b> $priority <br>	
		<b>Рынок:</b> $market <br>	
		<b>Средний чек:</b> $average_check <br>	
		<b>Количество заказов в месяц:</b> $order_per_month <br>	
		<b>Продвижение:</b> $promotion_type <br>	
		<b>География:</b> $promotion_geo <br>	
		<br>
		<b>Выбранное предложение</b>
		<br>
		<b>Тариф:</b> $tariff <br>	
		<b>Стоимость:</b> $price <br>	
		<b>Длительность:</b> $duration <br>	
		<br>
		<b>Модель комунникации</b>
		<br>
		<b>Формат общения:</b> $format <br>	
		<b>Мессенджер:</b> $messenger <br>	
		<b>Обмен файлами:</b> $files <br>	
		<b>Видео связь:</b> $video <br>	
		<b>Оплата:</b> $payment <br>	
		<br>
		<b>Дата следующей беседы: $date</b>
		";
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Заявка: $name";
    $mail->Body    = $body_mail;
    $mail->AltBody = 'Письмо от Владимира Вологина';

    $mail->send();
    writelog("Message has been sent: $to");
  } 
  catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    writelog("Message could not be sent ($to). Mailer Error: {$mail->ErrorInfo}");
  }

  //$headers = 'From: test <'.$from.'>' . "\r\n";
  //$headers .= "Content-type: text/html; charset=\"utf-8\"";
	//mail($to, $sub, $mess, $headers);
	//mail("$to", "$subject", "$message","Content-Type: text/plain; charset='windows-1251'");

?>