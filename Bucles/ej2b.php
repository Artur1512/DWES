<!DOCTYPE html>
<html>
	<head>
	<title>EJ2B - Conversor decimal a base n</title>

	</head>

	<body>
	<?php
	$num=48;
	$numOutput=$num;
	$base=8;
	$convertido="";
	$resto;
	while($num>=1)
	{
		$resto=$num%$base;
		$convertido=$resto.$convertido;
		if($num%$base==0)
		{
			$num=$num/$base;
		}
		else{
			$num=($num-($num%$resto))/$base;
		}

	}
	echo "$numOutput en base a $base = $convertido";

	?>
	</body>

</html>
