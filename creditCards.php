<?php
# (int)
# 
$card = readline('Enter your credit card number: ');
$card = strrev($card);
$card = str_split($card);
$i = 0;
$suma = 0;
foreach($card as $num){
    if ($i == 0) {
        $i += 1;
        continue;
    }
    if ($i & 1){
        $num *= 2;
        if ($num > 9){
            $suma += intdiv($num, 10) + $num % 10 ;
        } else {
            $suma += $num;
        }
    } else {
        $suma += $num;
    }
    # echo $suma , PHP_EOL; # fin de linea php
    
    $i += 1;
}
$valid = ($card[0] == (10 - ($suma % 10) % 10)); 
echo ($valid) ? 'Es valido' : 'No es valido';
?>