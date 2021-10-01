<HTML>
<HEAD><TITLE> EJ1B – Conversor decimal a binario</TITLE>
</HEAD>
<BODY>
<?php
$num="168";
$outputFinal=$num;
$resto;
$binario="";
while($num>=1){
$resto=$num%2;
$binario=$resto.$binario;


	if($num%2==0){
	$num=$num/2;
	}
	else{
	$num=$num/2-0.5;
	}

}
echo $outputFinal." en binario es ".$binario;

?>
</BODY>
