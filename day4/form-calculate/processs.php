<?php 

	if(isset($_POST["send"])){

		$num1 = sanitize($_POST["num1"]);
		$num2 = sanitize($_POST["num2"]);
		$num3 = sanitize($_POST["num3"]);

		if($num1 == "" || $num2 == "" || $num3 == ""){
			$error = "All fields are required";
		}else{
			$add = addNumbers($num1, $num2, $num3);
		}
		
	}


	






 ?>