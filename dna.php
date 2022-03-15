
<?php
// probar funcion  match para hacerlo
$dna = str_split(strtoupper(readline('Enter your dna: ')));

function convert($c){
    $a = match($c) {
        'G' => 'C',
        'C' => 'G',
        'T' => 'A',
        'A' => 'U'
    };
    echo $a;
}

foreach ($dna as $char){
    convert($char);
}


// Se puede usar la funcion strtr que ya agarra el array de la izquierda y hace las transformaciones de la derecha
//$trans = array("h" => "-", "hello" => "hi", "hi" => "hello");
//echo strtr("hi all, I said hello", $trans);


/*
$dna = strtoupper(readline('Enter your dna: '));
#turn into rna
$rna = '';
#convert string to array 
$array = str_split($dna);
$valid = True;
foreach ($array as $char){
    if (strcmp($char, 'G') == 0){
        $char = 'C';
    } elseif ((strcmp($char, 'C') == 0)){
        $char = 'G';
    } elseif ((strcmp($char, 'T') == 0)){
        $char = 'A';
    } elseif ((strcmp($char, 'A') == 0)){
        $char = 'U';
    } else {
        echo "La secuencia ingresada no es válida";
        $valid = False;
        break;
    }
    $rna .= $char;
} 
if ($valid){
    echo $rna;
}
*/
?>