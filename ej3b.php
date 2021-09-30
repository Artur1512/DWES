<!DOCTYPE html>
<html>
	<head>
	<title>EJ3B - Conversor decimal a hexadecimal</title>

	</head>

	<body>
<?php
	$num=188143;
    $numOutput=$num;
	$base=16;
	$convertido="";
	$resto;
	while($num>=1)
	{
		$resto=$num%$base;
		
		if($num%$base==0)
		{
			$num=$num/$base;
		}
		else{
			$num=($num-($num%$resto))/$base;
		}
    	if($resto==10){
				$resto="A";
		}
			else if($resto==11){
				$resto="B";
		}
			else if($resto==12){
				$resto="C";
			}
			else if($resto==13){
				$resto="D";
			}
			else if($resto==14){
				$resto="E";
			}
			else if($resto==15){
				$resto="F";
			}

		$convertido=$resto.$convertido;
	}
	echo "$numOutput en base a $base = $convertido";

	?>
	</body>

</html>
