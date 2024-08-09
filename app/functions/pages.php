<?php

function load(){

    $page = htmlspecialchars($_GET["page"], ENT_QUOTES);

    $page = (!$page) ? "pages/home.php" : "pages/{$page}.php";

    if(!file_exists($page)){
        throw new \Exception("Opa, alguma coisa errada aconteceu");
    }

    return $page;

}