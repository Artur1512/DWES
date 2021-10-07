<HTML>
    <HEAD>
        <TITLE> ej5a</TITLE>
        <STYLE>
        </STYLE>
    </HEAD>
    <BODY>
                    <?php
                    //Unir los 3 arrays en uno único sin utilizar funciones de arrays
                        $array1=array("Bases Datos", "Entornos Desarrollo", "Programación");  
                        $array2=array("Sistemas Informáticos","FOL", "Mecanizado");
                        $array3=array("Desarrollo Web ES","Desarrollo Web EC","Despliegue","Desarrollo Interfaces", "Inglés");
                        $arrayUnido=$array1;
                        $x=count($array1);
                        while($x<count($array1)+count($array2)+count($array3)){
                            for($y=0; $y<count($array2); $y++){
                                $arrayUnido[$x]=$array2[$y];
                                $x++;
                            }
                            for($z=0; $z<count($array3); $z++){
                                $arrayUnido[$x]=$array3[$z];
                                $x++;
                            }
                        }
                        print_r($arrayUnido);

                    //Unir los 3 arrays en uno único usando la función 'array_merge()'

                        $array1=array("Bases Datos", "Entornos Desarrollo", "Programación");  
                        $array2=array("Sistemas Informáticos","FOL", "Mecanizado");
                        $array3=array("Desarrollo Web ES","Desarrollo Web EC","Despliegue","Desarrollo Interfaces", "Inglés");
                        $arrayUnido=array_merge($array1, $array2, $array3);
                        print_r($arrayUnido);
                        
                    //Unir los 3 arrays en uno único usando la función array_push()
                        
                        $array1=array("Bases Datos", "Entornos Desarrollo", "Programación");  
                        $array2=array("Sistemas Informáticos","FOL", "Mecanizado");
                        $array3=array("Desarrollo Web ES","Desarrollo Web EC","Despliegue","Desarrollo Interfaces", "Inglés");
                        $arrayUnido=$array1;
                        array_push($arrayUnido, $array2, $array3);
                        print_r($arrayUnido);
                          
                              
                    
                        
                   ?>

    </BODY>
</HTML>