
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=stylesheet href="style.css">
</head>
<body>
    

<?php

$select = $_POST['select']??'';



$tot = 0;
$qt = 0;
$n = [];

switch($select){
    case "mega":
        $qt = 6;
        $tot = 60;   
        break;
    case "mania":
        $qt=50;
        $tot = 100; 
        break;
    case "facil":
        $qt = 15;
        $tot = 25;
        break;
    case "quina":
        $qt=5;
        $tot=80;
        
}

$contador = 1;
while($contador <= $qt){
    $sorteio = rand(1,$tot);
    if(!in_array($sorteio, $n)){
        $n[] = str_pad($sorteio, 2, '0', STR_PAD_LEFT);
        $contador++;
    }

}

sort($n);

echo "Os números gerados são: <br><br> " . implode(' - ', $n) ;


?>


<p><button onclick="javascript:document.location.reload()">Gerar outros números</button></p>

<p><button onclick="javascript:window.location.href='index.html'">Escolher outro jogo</button></p>


</body>
</html>



