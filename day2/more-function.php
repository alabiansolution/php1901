<?php 
	
	function add($var1, $var2){
		$sum = $var1 + $var2;
		return $sum;
	}

	$result = add(5, 4);
	echo $result;
	echo "<br>";

	if($result == 9){
		echo "Weldone sir!";
	}

	function sum($var1, $var2){
		$addition = $var1 + $var2;
		echo $addition;
	}

	sum(4, 7);

	if(sum(4, 7) == 11){
		echo "Halleluyah!!!";
	}

	echo "<br>";

	$outsideTest = "Just a value";
	function test(){
		global $outsideTest;
		$insideTest = "Just another value";
		echo $outsideTest;
	}
	test();


	$var1 = 5;

	function increement(){
		global $var1;
		$var1 += 2;
		echo $var1;
	}

	increement();





 ?>