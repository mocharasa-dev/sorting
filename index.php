<?php

$array = array(77, 49, 10, 28, 16);
$n = count($array);

for($i = 0; $i < $n ; $i++){
	$min = $i;
	for($j = $i + 1; $j < $n ; $j++){
		if ($array[$j] < $array[$min]){
			$min = $j;
		}
	}

	if ($array[$i] > $array[$min]){
      $temp = $array[$i];
      $array[$i] = $array[$min];
      $array[$min] = $temp;
	}
}

for ($i = 0; $i < $n; $i++){
	echo $array[$i]." ";
}

?>
