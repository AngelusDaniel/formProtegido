<?php


function send(array $data){

    $email = new PHPMailer\PHPMailer\PHPMailer;
    $email->CharSet = "UTF-8";
    $email->SMTPSecure = "plain"; //ssl;
    $email->isSMTP();
    $email->Host = "*";
    $email->Port = "";
    $email->SMTPAuth = true;
    $email->Username = "*";
    $email->Password = "*";
    $email->isHTML(true);
    $email->setFrom("*");
    $email->FromName = $data["quem"];
    $email->addAddress($data["para"]);
    $email->Body = $data["mensagem"];
    $email->Subject = $data["assunto"];
    $email->AltBody = "Para ver esse email, tenha certeza de estar vendo em um programa que aceite HTML";
    $email->msgHTML($data["mensagem"]);


    return $email->send();


}