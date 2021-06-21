<?php
	/*
	//E1
	$j = 1;

	while ($j <= 20){
    	echo mt_rand(100,200);

		if($j != 20){
			echo "<br>";
		}else{
			echo "<br>" . ".";
		}
		$j++;
	}
	*/

	/*
	//E2
	$n = 1;
	$r = array();
	$t = 0;

	while ($n <= 20){
		$r[] = mt_rand(0,5);

		if($r[$n-1] == 3){
			$t++;
		}
		$n++;
	}

	echo "Vetor: ";
	var_dump ($r);
	echo "\n Quantos Três: " . $t;
	*/

	/*
	//E3
	$l = 1;
	$a = array();
	$men = 10;
	$pos = 0;
	$exc = array();

	while ($l <= 5) {
		$a[] = mt_rand(0,10);
		$l++;
	}

	$l=0;

	foreach($a as $v){

		if ($v < $men){
			$men = $v;
			$pos = $l;
		}elseif ($v == $men){
			$exc[] = $l;
		}

		$l++;
	}

	if (empty($exc)){
		echo "Menor número: ".$men." na posição ".$pos;
	}else{
		echo "Menor número: ".$men." nas posições ".$pos;
	}

	foreach($exc as $v){
	echo ", ".$v;
	}
	*/

	/*
	//E4
	echo implode(" ", array("Maria", "Paula", "Fernanda"));
	*/
