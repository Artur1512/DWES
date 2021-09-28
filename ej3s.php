<HTML>
    <HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
    <BODY style="background-color:lightblue;">>
	
	
        <?php
      
      
        echo "IP ".$ipMascara="192.168.16.100/16</br>";
        $posicionMascara = strpos($ipMascara, '/', 0);

        //vamos a definir como $ip la dirección IP sin la máscara

        $ip= substr($ipMascara, 0, $posicionMascara)."</br>";
        echo "Mascara ".$mascara=substr($ipMascara, $posicionMascara+1, strlen($ipMascara));
        settype($mascara, "integer");
        //buscamos las posiciones finales de cada octeto de la IP (el punto antes de la
        //siguiente subcadena)

        $posFinal1= strpos($ip, '.', 0);

        

        //devolvemos el primero octeto (comprendido entre '0' y 'posFinal1')

        $octeto1 = substr ($ip, 0, $posFinal1);
        

    
        // buscamos la posicion final del segundo octeto

        $posFinal2= strpos($ip, '.', $posFinal1+1);

        //devolvemos la segunda subcadena (comprendida entre '.' y '.'); 
        //determinamos la longitud de la subcadena restando
        //la posición del primer punto a la del segundo;
        //restamos 1 para no incluir el punto

        $octeto2 = substr ($ip, $posFinal1+1, $posFinal2-$posFinal1-1);
      
        //tercer octeto

        $posFinal3 = strpos($ip, '.', $posFinal2+1);
        $octeto3 = substr($ip, $posFinal2+1, $posFinal3-$posFinal2-1);
        
        //cuarto octeto; 

        $posFinal4 = strlen($ip);
        $octeto4 = substr($ip, $posFinal3+1, $posFinal4-$posFinal3-1);
                
        //

        
   
        $octeto1bin=decbin($octeto1);
       
        $octeto2bin=decbin($octeto2);
        
        $octeto3bin=decbin($octeto3);
       
        $octeto4bin=decbin($octeto4);
     
        //este ejercicio tiene la peculiaridad de que, tras pasar los octetos a binario, estos pueden estar representados con cualquier cantidad de bits (ejemplo 16=10000, 5 bits)
        //sin embargo, para poder operar con octetos, necesitamos que estos tengan la representación completa de 8 bits (16=00010000, 8 bits)
        
        $bitsFaltan1 =8-strlen($octeto1bin);     
        $bitsFaltan2 =8-strlen($octeto2bin);     
        $bitsFaltan3 =8-strlen($octeto3bin);  
        $bitsFaltan4 =8-strlen($octeto4bin);  
       
        
        for($x=0; $x<$bitsFaltan1; $x++){
            $octeto1bin="0".$octeto1bin;

        }
        
        

        for($x=0; $x<$bitsFaltan2; $x++){
            $octeto2bin="0".$octeto2bin;

        }
        
        

        for($x=0; $x<$bitsFaltan3; $x++){
            $octeto3bin="0".$octeto3bin;
           
        }
        
       

        for($x=0; $x<$bitsFaltan4; $x++){
            $octeto4bin="0".$octeto4bin;

        }
        
       

       //concatenamos los octetos y obtenemos la IP en binario, lista para operar  
       $ipbin=$octeto1bin.$octeto2bin.$octeto3bin.$octeto4bin;
      
   
       $ipbinRed0 =substr($ipbin, 0, -(32-$mascara));
      
       $ipbinRed=$ipbinRed0; 
      

       for($x=0; $x<$mascara; $x++){
        $ipbinRed=$ipbinRed."0";

         }        
       
 
	   
	   
       echo "Dirección Red ".$ipRed = bindec(substr($ipbinRed, 0, 8)).".".bindec(substr($ipbinRed, 8, 8)).".".bindec(substr($ipbinRed, 16, 8)).".".bindec(substr($ipbinRed, 24, 8));
	   echo "</br>";
	   
	   $ipbinBroadcast =$ipbinRed0;
	   for($x=0; $x<$mascara; $x++){
		   $ipbinBroadcast=$ipbinBroadcast."1";
		   
	   }
		
		
		
		echo "Dirección Broadcast ".$ipBroadcast= bindec(substr($ipbinBroadcast, 0, 8)).".".bindec(substr($ipbinBroadcast, 8, 8)).".".bindec(substr($ipbinBroadcast, 16, 8)).".".bindec(substr($ipbinBroadcast, 24, 8));
		echo "</br>";
		$ipbinPrimerHost = substr($ipbinRed, 0, -1)."1";
		$ipbinUltimoHost = substr($ipbinBroadcast, 0, -1)."0";
		echo "Rango: ".$ipPrimerHost = bindec(substr($ipbinPrimerHost, 0, 8)).".".bindec(substr($ipbinPrimerHost, 8, 8)).".".bindec(substr($ipbinPrimerHost, 16, 8)).".".bindec(substr($ipbinPrimerHost, 24, 8));
		echo " a ".$ipUltimoHost = bindec(substr($ipbinUltimoHost, 0, 8)).".".bindec(substr($ipbinUltimoHost, 8, 8)).".".bindec(substr($ipbinUltimoHost, 16, 8)).".".bindec(substr($ipbinUltimoHost, 24, 8));
		
      ?>
    </BODY></HTML>