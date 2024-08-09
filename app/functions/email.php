<?php


function send(array $data){

    $email = new PHPMailer\PHPMailer\PHPMailer;
    $email->CharSet = "UTF-8";
    $email->SMTPSecure = "plain"; //ssl;
    $email->isSMTP();
    $email->Host = "sandbox.smtp.mailtrap.io";
    $email->Port = 465;
    $email->SMTPAuth = true;
    $email->Username = "f73fc6a3de1741";
    $email->Password = "0d140f7ad72676";
    $email->isHTML(true);
    $email->setFrom("jjjoel35@gmail.com");
    $email->FromName = $data["quem"];
    $email->addAddress($data["para"]);
    $email->Body = $data["mensagem"];
    $email->Subject = $data["assunto"];
    $email->AltBody = "Para ver esse email, tenha certeza de estar vendo em um programa que aceite HTML";
    $email->msgHTML($data["mensagem"]);


    return $email->send();


}