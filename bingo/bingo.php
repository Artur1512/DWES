<HTML>
    <HEAD>
        <TITLE> bingo </TITLE>
        <STYLE>
            table, th, td{
                background-color: #c6d6ff;
                border:2px solid black;
                border-collapse: collapse;
                padding-left: 10px;
                padding-right: 10px;
            }
        </STYLE>
    </HEAD>
    <BODY>
    <?php include 'carton.php';
	include 'comparar.php';
//al crear un array ordenado nos aseguramos de que los valores no se van a repetir(1, 2, 3...n)
//A continuación, mezclaremos estos valores y de esta forma obtendremos valores únicos y desordenados 
 $bombo=range(1, 60);
 shuffle($bombo);
 $jugador1=1;
 $jugador2=2;
 $jugador3=3;
 
 function jugar($x, $bombo){
 $numCarton1=1;
 $numCarton2=2;
 $numCarton3=3;

echo "<h1> Jugador ".$x."</h1>";

$ultimaBola1=carton($bombo, $numCarton1)."</br>";
$ultimaBola2=carton($bombo, $numCarton2)."</br>";
$ultimaBola3=carton($bombo, $numCarton3)."</br>";

return $cartonGanador=comparar($ultimaBola1, $ultimaBola2, $ultimaBola3);
 }

 $cartonGanador1=jugar($jugador1, $bombo);
 $cartonGanador2=jugar($jugador2, $bombo);
 $cartonGanador3=jugar($jugador3, $bombo);
 
 
 $a=$cartonGanador1;
 $b=$cartonGanador2;
 $c=$cartonGanador3;
$array=array($a, $b, $c);
		if($b<=$a){
		$array[0]=$b;
		$array[1]=$a;
		}
		if($c<=$array[0]){
		$array[0]=$c;
		}
if($array[0]==$a){
	echo "<h2> Gana Jugador 1</h2>";
	}
else if($array[0]==$b){
	echo "<h2> Gana Jugador 2</h2>";
	}
else if($array[0]==$c){
	echo "<h2> Gana Jugador 3</h2>";
}
 
?>
        </table>
    </BODY>
</HTML>