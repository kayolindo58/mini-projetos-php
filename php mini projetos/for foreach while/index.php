<?php



for($i = 0 ; $i <= 10; $i++){
    echo $i . "\n";
}

$array = ["sala de wagner", 1, 3, 7];

foreach($array as $value){
    echo $value . "\n";
}


$i = ["aura mais ego", 67, 20];

while ($i){
    foreach ($i as $retorno){
        
     echo $retorno . "\n"; 
        break;
    }
}