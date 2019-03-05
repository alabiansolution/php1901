<?php 
	
	for($x = 1; $x <= 10; $x++){
		echo $x . ", ";
	}

	echo "<br>";

	for($x = 1; $x <= 20; $x++){
		if($x % 2 == 0){
			echo $x . ", ";
		}
	}

	echo "<br>";

	for($x = 1; $x <= 25; $x++){
		if($x % 2 == 0){
			if($x < 20){
				echo $x . ", ";
			}else{
				echo $x . " ";

			}
		}
	}

 ?>