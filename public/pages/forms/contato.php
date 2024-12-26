<?php

require '../../../bootstrap.php';


if (isEmpty()) {

    flash('message', 'Preencha todos os campos');

    return redirect("contato");
}



$validate = validate([
    'name' => 's',
    'lastname' => 's',
    'email' => 'e', 
    'city' => 's',
    'state' => 's',
    'zip' => 's'
]);


