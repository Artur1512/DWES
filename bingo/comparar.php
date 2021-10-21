<?php
	function comparar($a, $b, $c){
		$array=array($a, $b, $c);
		if($b<=$a){
		$array[0]=$b;
		$array[1]=$a;
		}
		if($c<=$array[0]){
		$array[0]=$c;
		}
		return $array[0];
		
	}

?>