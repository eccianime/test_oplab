<?php

function gameOfStones($n) {
	if( $n % 7 < 2 ){
		return "Second";
	}else{
		return "First";
	}
}

$fptr = fopen("out.txt", "w");

$stdin = fopen("txt.txt", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%d\n", $n);

    $result = gameOfStones($n);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);