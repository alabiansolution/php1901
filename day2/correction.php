<?php 

	$students = ["Abass", "Micheal", "Emmanuel", "Sodiq", "Seun"];

	$x = 0;
	while($x < count($students)){
		if($x < count($students) - 1){
			echo $students[$x] . ", ";
		}else{
			echo $students[$x];
		}
		$x++;
	}

	echo "<br>";

	$score = [10, 20, 30, 40, 50, 60, 70];

	$total = 0;
	$x = 0;

	while($x < count($score)){
		$total += $score[$x];
		$x++;
	}

	echo "Total is: ".$total."<br>";

	$upper = 0;

	for($lower = 0; $lower <= 30; $lower++){
			$upper += $lower;
	}

	echo "Total ".$upper . "<br>";


 ?>