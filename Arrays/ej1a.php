<HTML>
    <HEAD>
        <TITLE> bolsa </TITLE>
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
                <th>Suma</th>
            </tr>
        <?php
           $impares=0;
           $arrayImpares=[];
           $suma=0;
           for($x=1; $impares<20; $x++){
                if($x%2!==0){
                    echo "<tr><td>".$impares."</td>";
                    echo "<td>".$arrayImpares[$impares]=$x."</td>";
                    $impares++;
                    echo "<td>".$suma=$suma+$x;
                    echo "</td></tr>";
                                      
                }
           }
           
        ?>
        </table>
    </BODY>
</HTML>