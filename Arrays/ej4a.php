<HTML>
    <HEAD>
        <TITLE> ej4a</TITLE>
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
                <th>Binario</th>
                <th>Octal</th>
            </tr>
                    <?php
                    $arrayInverso = array();
                        for($x=20; count($arrayInverso)<21; $x--){
                        	echo "<td>".$x."</td>";
                            echo "<td>".$arrayInverso[$x]=decbin($x)."</td>";
                            echo "<td>".decoct($x)."</td></tr>";
                            
                        }
                      


                    ?>
        </table>
    </BODY>
</HTML>