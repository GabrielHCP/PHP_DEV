<?php


/* Die Dump */
function dd($dump) 
{
    var_dump($dump);    
    die();
}

/* Responsável pelas requisições do sistema */
function request() 
{
    $request = $_SERVER['REQUEST_METHOD'];

    if($request == "POST") 
    {
        return $_POST;
    }

    return $_GET;
}