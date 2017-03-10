<?php

 $name = htmlspecialchars( $_POST['name'] );
    $email = htmlspecialchars( $_POST['email'] );
    $comment = htmlspecialchars( $_POST['message'] );
    
    $to = 'slevko88@gmail.com'; 
    $subject = 'Письмо от ' . $name;
    $message = '
        Имя: <b>' . $name . '</b><br>		
        Email: <b>' . $email . '</b><br>
        Комментарий: <b>' . $comment . '</b><br>
    ';										
    $headers = "From: levko.zzz.com.ua <viacheslav@levko.zzz.com.ua>\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "MIME-Version: 1.0\r\n";

    $mail = mail($to, $subject, $message, $headers);
    echo $mail;
?>