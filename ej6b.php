<!DOCTYPE HTML>
<HTML>
    <HEAD><TITLE> EJ6B - Factorial</TITLE></HEAD>
    <BODY style="background-color:lightblue;">
	
		<?php
			$num=5;
			$resultado=$num;
			$cadenaFinal;

			for($multiplo=$num-1; $multiplo > 0; $multiplo--){
			$resultado=$resultado*$multiplo;
			$cadenaFinal=$cadenaFinal."x".$multiplo;
			}
			 
			echo "!$num=$num".$cadenaFinal."=$resultado";



		?>
    </BODY>
	</HTML>