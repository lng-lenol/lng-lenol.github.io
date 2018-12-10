<?php

if((isset($_POST['phone'])&&$_POST['phone']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они

        $to = 'maxim@semadis.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Заявка с сайта Регистратор - Юридический центр'; //Загаловок сообщения
		$data = $_POST['phone'];
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <h1>Заказать звонок</h1>
						<p>Здравствуйте! Вы получили заявку с сайта Регистратор - Юридический центр.</p>
                        <p>Имя: '.$_POST['fname'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p> 
                        <p>E-mail: '.$_POST['email'].'</p> 	
						<p>Сообщение: '.$_POST['message'].'</p> 						
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Сайт Регистратор <no-reply@semadis.ru>\r\n"; //Наименование и почта отправителя
        $a = mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
		if ($a) {
        echo 'Спасибо! Ваше сообщение успешно отправлено!';
		} else {
			echo 'Ваше сообщение не отправлено!';
		}

		

}
?>
<script type="text/javascript"> 
setTimeout('location.replace("<?php $_SERVER['SERVER_NAME'] ?>")', 3000);
</script> 