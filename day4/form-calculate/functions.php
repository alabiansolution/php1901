<?php 

	function sanitize($data){
		$data = trim($data);
		$data = strip_tags($data);
		$data = stripslashes($data);
		return $data;
	}


	function addNumbers($var1, $var2, $var3){
		$sum = $var1 + $var2 + $var3;
		return $sum;
	}






 ?>