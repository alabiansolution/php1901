<?php 
	
	$score = -54;
	if($score >= 70){
		$grade = "A";
	}elseif ($score >= 60 && $score < 70) {
		$grade = "B";
	}elseif ($score >= 50 && $score < 60) {
		$grade = "C";
	}elseif ($score >= 45 && $score < 50){
		$grade = "D";
	}elseif ($score >= 40 && $score < 45) {
		$grade = "E";
	}else{
		$grade = "F";
	}

	echo $grade;

 ?>