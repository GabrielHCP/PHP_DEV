<?php


$validate = validate([
    'name' => 's',
    'lastname' => 's',
    'email' => 'e', 
    'city' => 's',
    'state' => 's',
    'zip' => 's'
]);


dd($validate);