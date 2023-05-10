<?php
while(true){
$num = intval(fgets(STDIN));
if($num == 0){
    break;
}
$resultados = explode(" ", fgets(STDIN));
$maria = 0;
$joao = 0;
for($i = 0; $i < $num; $i++){
    if($resultados[$i] == 0){
        $maria ++;
    }else{
        $joao++;
        
    }
}
echo "Mary won $maria times and John won $joao times\n";
}
?>