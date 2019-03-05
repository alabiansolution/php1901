<?php 
	
	$students  = ["Paul","Peter","Kehinde","Obajimi","Akintola","Ibitoye", "Benedict"];

	$students[] = "Alabi";

	$count = count($students);

   $list = "<ol>";
	for($x = 1; $x < $count; $x++){
		$list .= "<li>".$students[$x] . "</li>";
	}
  $list .= "</ol>";

  echo $list;

 ?>