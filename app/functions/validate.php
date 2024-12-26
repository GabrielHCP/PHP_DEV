<?php

/* Função responsável por sanitizar inputs */
function validate(array $fields) 
{
   
    /* Requisição HTTP */
    $request = request(); 

    $validate = [];

    foreach($fields as $field => $type) 
    {
        switch($type)
        {
            case 's':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_STRING);
                break;
            case 'e':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_EMAIL);
                break;
            case 'i':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_NUMBER_INT);
                break;
        }
    }

    return (object) $validate;
}



/* Resposável por validar se existe campos vazios no form*/
function isEmpty() {

    $request = request();

    $empty = false;

    foreach($request as $key => $value) {
        if(empty($request[$key])) {
            $empty = true;
        }
    }

    return $empty;
}