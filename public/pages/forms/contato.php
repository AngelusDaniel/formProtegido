<?php

// $name = htmlspecialchars($_POST["name"], ENT_QUOTES);
// $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
// $subject = htmlspecialchars($POST["subject"], ENT_QUOTES);
// $message = htmlspecialchars($POST["messahe"], ENT_QUOTES);

require "../../../bootstrap.php";

//dd($_POST);

if(isEmpty()){
   flash("message", "Preencha todos os campos");

   return redirect("contato");
}

$validation = validate([
    "name" => "s",
    "email" => "e",
    "subject" => "s",
    "message" => "s"
]);


$data = [
    "quem" => $validation->email,
    "para" => "danielangelus@gmail.com.br",
    "mensagem" => $validation->message,
    "assunto" => $validation->subject,
];



if(send($data)){
    flash("message", "Email enviado com sucesso!", "success");
    return redirect("contato");
}
