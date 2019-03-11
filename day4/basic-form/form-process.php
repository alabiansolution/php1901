<?php

	if(isset($_POST["send"])){

		var_dump($_POST);

		$firstname = $_POST["firstname"];
		$middlename = $_POST["middlename"];
		$surname = $_POST["surname"];

		echo "Here are your details ".$firstname." ".$middlename." ".$surname;
	}



 ?>