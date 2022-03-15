<?php

$pass = readline('Enter your password: '); 

function validatePassword($password){
    if (strlen($password) <= 8){
        echo 'No puede ser de largo menor a 9' , PHP_EOL;
        return False;
    }
    $specialChars = preg_match('@[^\w]@', $password);
    if ($specialChars){
        echo 'No puede contener caracteres especiales' , PHP_EOL;
        return False;
    }
    return True;
}

echo (validatePassword($pass)) ? 'Es valido' : 'No es valido';
?>