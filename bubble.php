<?php

function bubble( $arr ){
	do{
		$try_again = false;
		for( $i = 0, $c = count( $arr ) - 1; $i < $c; $i++ ){
			if( $arr[$i] > $arr[$i + 1] ){
				$extra = $arr[$i+1];
				$arr[$i+1] = $arr[$i];
				$arr[$i] = $extra;
				$try_again = true;
			}
		}
	}while( $try_again );
	return $arr;
}

$proof = array(5, 40, -5, -5, -5.5, -40, 0, 25, 87, -97);
echo "Original Array :<br/>";
echo implode(', ',$proof );
echo "<br/>Sorted Array:<br/>";
echo implode(', ',bubble($proof)). PHP_EOL;

?>