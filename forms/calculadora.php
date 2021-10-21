<HTML>
    <HEAD></HEAD>
    <BODY>

<?php
 

function sumar($a, $b){
    $a=intval($a);
    $b=intval($b);
    return $a+$b;
}

function restar($a, $b){
    $a=intval($a);
    $b=intval($b);
    return $a-$b;
}

function multiplicar($a,$b){
    $a=intval($a);
    $b=intval($b);
    return $a*$b;
}

function dividir($a,$b){
    $a=intval($a);
    $b=intval($b);
    return $a/$b;
}

if(isset($_POST['suma'])){
    echo "suma: ".sumar($_POST['operando1'], $_POST['operando2']);
}

else if(isset($_POST['resta'])){
    echo "resta: ".restar($_POST['operando1'], $_POST['operando2']);
}

else if(isset($_POST['producto'])){
    echo "producto: ".multiplicar($_POST['operando1'], $_POST['operando2']);
}

else if(isset($_POST['division'])){
    echo "division: ".dividir($_POST['operando1'], $_POST['operando2']);
}


?>


</BODY>
</HTML>