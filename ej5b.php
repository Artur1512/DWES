<!DOCTYPE HTML>
    <HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
    <BODY style="background-color:lightblue;">
	<style>
	 table, th, td{
		 border:1px solid black;
		 border-collapse: collapse;
		 padding-right: 35px;
	 }
	</style>
	
	
        <?php
     
			$num=5;
			$igual;
			echo "<table>";	 
			for($x=1; $x<=9; $x++){
				$igual=$num*$x;
				echo "<tr>
				<td> $num x $x</td>
				<td> $igual</td>
				</tr>";
			}
			echo "</table>";
		?>
    </BODY></HTML>