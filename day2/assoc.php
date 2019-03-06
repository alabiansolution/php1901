<?php 
	
	// $paulScore = ["English"=>40,"Maths"=>50,"Geography"=>80];

	// echo $paulScore["English"];

	//numeric array
	// $paulScore = [];
	// $paulScore[] = 40;
	// $paulScore[] = 50;
	// $paulScore[] = 80;
	// var_dump($paulScore); //more about var_dump function later

	$paulScore = [];
	$paulScore["English"] = 40;
	$paulScore["Maths"] = 50;
	$paulScore["Geography"] = 80;
	$paulScore["French"] = 75;
	// var_dump($paulScore);

	// foreach($arrayName as $index => $value){
	// 	$index . $value; //any code you want execute
	// }

	foreach($paulScore as $subject => $score){
		echo $subject." ".$score . "<br>";
	}

	$table =  "<table width='650' border='1'>";
	$table .=  "<tr>";
	$table .=  "<th>Subject</th>";
	$table .=  "<th>Score</th>";
	$table .=  "</tr>";
	foreach($paulScore as $subject => $score){
		$table .="<tr>";
		$table .="<td>".$subject."</td>";
		$table .="<td>".$score."</td>";
		$table .="</tr>";
	}

	$table .=  "</table>";

	echo $table;

	$students =[
		"REG001"=>["Name"=>"Paul","English"=>70,"Maths"=>80,"Physics"=>72],
		"REG002"=>["Name"=>"Andrew","English"=>60,"Maths"=>75,"Physics"=>90],
		"REG003"=>["Name"=>"James","English"=>55,"Maths"=>80,"Physics"=>40]
	];

	$list = "<ol>";
			foreach($students as $regNo => $studentRecord){
		 $list .= "<li>".$studentRecord["Name"];
				 $list .= "<ul>";
						foreach($studentRecord as $subject => $score){
							$list .= "<li>".$subject." : ".$score."</li>";
						}
				 $list .= "</ul>";
		 $list .= "</li>";
			}
	$list .= "</ol>";

	echo $list;




 ?>