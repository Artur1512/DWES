<HTML>
    <HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
    <BODY>
        <?php
        $ip="192.168.206.204";
        
        //buscamos las posiciones finales de cada subcadena de la IP (el punto antes de la
        //siguiente subcadena)

        $posFinal1= strpos($ip, '.', 0);

        //devolvemos la primera subcadena (comprendida entre '0' y 'posFinal1')

        $subIp1 = substr ($ip, 0, $posFinal1);
        echo "$subIp1</br>";

        // buscamos la posicion final de la segunda subcadena

        $posFinal2= strpos($ip, '.', $posFinal1+1);

        //devolvemos la segunda subcadena (comprendida entre '.' y '.'); 
        //determinamos la longitud de la subcadena restando
        //la posición del primer punto a la del segundo;
        //restamos 1 para no incluir el punto

        $subIp2 = substr ($ip, $posFinal1+1, $posFinal2-$posFinal1-1);

        echo "$subIp2</br>";
      
        //tercera subcadena

        $posFinal3 = strpos($ip, '.', $posFinal2+1);
        $subIp3 = substr($ip, $posFinal2+1, $posFinal3-$posFinal2-1);
        echo"$subIp3</br>";

        //cuarta subcadena; 

        $posFinal4 = strlen($ip);
        $subIp4 = substr($ip, $posFinal3+1, $posFinal4-$posFinal3-1);
        echo"$subIp4</br>";
        
        //

       

        $mensaje=printf("la dirección $ip en binario es: %b", $subIp1);
        $mensaje2=printf(".%b", $subIp2);
        $mensaje3=printf(".%b", $subIp3);
        $mensaje4=printf(".%b",$subIp4);
        
        
        
        
        ?>
    </BODY></HTML>