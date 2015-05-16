<?php //
$msg_box = ""; // в этой переменной будем хранить сообщения формы
    $errors = array(); // контейнер для ошибок
    // проверяем корректность полей
    if($_POST['user_name'] == "")            $errors[] = "Укажите Ваше имя";
    if($_POST['user_telephone'] == "") 	$errors[] = "Введите пожалуйста Ваш номер телефона";
    
    // если форма без ошибок
    if(empty($errors)){		
        // собираем данные из формы
        $message  = "Имя пользователя: " . $_POST['user_name'] . "<br/>";
        $message .= "Телефон пользователя: " . $_POST['user_telephone'] . "<br/>";
        send_mail($message); // отправим письмо
        // выведем сообщение об успехе
        $msg_box = "<p style='color: green;'>Cообщение успешно отправлено.</p>";
    }else{
        // если были ошибки, то выводим их
        $msg_box = "";
        foreach($errors as $one_error){
                $msg_box .= "<p style='color: red;'>$one_error</p><br/>";
        }
    }

    // делаем ответ на клиентскую часть в формате JSON
    echo json_encode(array(
        'result' => $msg_box
    ));


    // функция отправки письма
    function send_mail($message){
        // почта, на которую придет письмо
        $mail_to = "sael.seal@gmail.com"; 
        // тема письма
        $subject = "Письмо с обратной связи";

        // заголовок письма
        $headers= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
        $headers .= "From: Тестовое письмо <no-reply@test.com>\r\n"; // от кого письмо            no-reply@test.com

        // отправляем письмо 
        mail($mail_to, $subject, $message, $headers);
    }