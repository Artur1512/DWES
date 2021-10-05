<HTML>
    <HEAD>
        <TITLE> Media Impares </TITLE>
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
        <table>
            <tr>
                <th>Indice</th>
                <th>Valor</th>
                <th>Media Valores Pares</th>
                <th>Media Valores Impares</th>
                
            </tr>
        <?php
           $indice=0;
           $arrayImpares=[];
           $sumaIndicePar=0;
           $sumaIndiceImpar=0;
           $indiceImpar=0;
           $indicePar=0;
           for($x=1; $indice<20; $x++){
                if($x%2!==0){
                    echo "<tr><td>".$indice."</td>";
                    echo "<td>".$arrayImpares[$indice]=$x."</td>";
                    if($indice!==0 && $indice%2!==0){
                        $sumaIndiceImpar=$sumaIndiceImpar+$x;
                        $indiceImpar++;
                    }
                    else if($indice!==0 && $indice%2==0){
                        $sumaIndicePar=$sumaIndicePar+$x;
                        $indicePar++;
                    }
                $indice++;
                }
                
                }
                echo "<td rowspan=2>".$sumaIndicePar/$indicePar."</td>";     
           echo "<td rowspan=2>".$sumaIndiceImpar/$indiceImpar."</td></tr>";
           
           
        ?>
        </table>
    </BODY>
</HTML>