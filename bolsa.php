<HTML>
    <HEAD><TITLE> bolsa </TITLE></HEAD>
    <BODY>
        <?php
        //crear un array con los nombres de las empresas (empresa1, empresa2, etc...)
        $nombres = [];
        for($x=1; $x<=35; $x++){
            $empresa{$x} = [];
            echo "empresa".$x."-> ";
            for($y=1; $y<=5; $y++){
                $valor{$y} = "valor aleatorio ".$y." ";
                $empresa{$x}[$y] = $valor{$y};
                echo $valor{$y};
            }
            echo "</br>";
            $nombres[$x] = $empresa{$x};
        }
        
    
        

        ?>

    </BODY>
</HTML>