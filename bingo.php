<HTML>
    <HEAD>
        <TITLE> bingo </TITLE>
        <STYLE>
        </STYLE>
    </HEAD>
    <BODY>
    <?php
        //al crear un array ordenado nos aseguramos de que los valores no se van a repetir(1, 2, 3...n)
        //A continuación, mezclaremos estos valores y de esta forma obtendremos valores únicos y desordenados 
         $bombo=range(1, 60);
         $aleatorio=range(1,60); 
         //mezcla el contenido de los dos arrays de forma aleatoria
        shuffle($aleatorio);
        shuffle($bombo);
        //creación de array 'cartón' de 15 posiciones y asignación de valores aleatorios de 1 a 60
        $carton=array();
        echo "CARTÓN 1: ";
             //asignación de los primeros 15 valores de 'aleatorio'
             for($x=0; $x<15; $x++){
                 $carton[$x]=$aleatorio[$x];
                 echo $carton[$x]." ";
                }
        echo "</br>";
 
  
        
        
        //iniciación de dos bucles:
        //se inicia el primer bucle, toma un valor de 'bombo', entra en el segundo bucle, compara el valor de 'bombo' con los de 'carton' 
        //cuando hay un acierto, el segundo bucle termina y se toma el siguiente valor en el primer bucle

        //aciertosTotal se encargará de contar el total de aciertos en el cartón

        //numeroBola indica el total de bolas que han salido en cada momento
        //por ejemplo, si hemos esperado 5 bolas o turnos para 'tachar' un número, mostraremos '17 acertado, bola 5'
        //esto ayudará a seguir el progreso de la partida y determinar al ganador (gana el que menos bolas ha esperado para tachar todos los números) 

        //en lugar de 'tachar' los aciertos, simplemente se sacan por pantalla


      
        $aciertosTotal=0;
        $numeroBola=0;
            for ($x=0; $x<count($bombo) && $aciertosTotal<=15; $x++){
            $aciertos=0;
            $numeroBola++;
                for($y=0; $y<count($carton)&& $aciertos<1; $y++){
                    if($bombo[$x]==$carton[$y]){
                    $aciertos++;
                    $aciertosTotal++;
                    echo $carton[$y]=$carton[$y]. " acertado, bola ".$numeroBola."</br>";
                    }
                }
           
         }
?>

    </BODY>
</HTML>
