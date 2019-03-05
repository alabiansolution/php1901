<?php 
	
	$score = 120;
	if($score >= 70 && $score <= 100){
		$result = "Your score is ".$score." and this is Excellent";
	}elseif ($score >= 60 && $score < 70) {
		$result = "Your score is ".$score." and this is Very Good";
	}elseif ($score >= 50 && $score < 60) {
		$result = "Your score is ".$score." and this is Good";
	}elseif ($score >= 45 && $score < 50){
		$result = "Your score is ".$score." and this is Fair";
	}elseif ($score >= 40 && $score < 45) {
		$result = "Your score is ".$score." and this is Pass";
	}elseif ($score >= 0 && $score < 40) {
		$result = "Your score is ".$score." and this is Fail";
	}else{
		$result = "Out of range or invalid score";
	}

	echo $result;

 ?>