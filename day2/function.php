<?php 
	
	
	function multiplicationTable($multipler, $stop){
		for($multiplyBy = 1; $multiplyBy <= $stop; $multiplyBy++){
			echo "$multiplyBy X ".$multipler." = ".($multiplyBy*$multipler) . "<br>";
		}
	}

	multiplicationTable(3, 5);
	echo "<br>";
	multiplicationTable(4, 7);
	echo "<br>";
	multiplicationTable(5, 6);

	function office($name, $color="Yellow"){
		echo "The color of ".$name." office is ".$color."<br>";
	}

	office("MTN");
	office("Alabian", "Blue");

	function customFont($font, $size=1.5){
			echo "<div style='font-family: $font; font-size:
			{$size}em;'>Hello, world!</div>";
	}

	customFont("Arial");
	customFont("Courier New", 2);

	function timesTable($multipler, $stop= 12){
		for($multiplyBy = 1; $multiplyBy <= $stop; $multiplyBy++){
			echo "$multiplyBy X ".$multipler." = ".($multiplyBy*$multipler) . "<br>";
		}
	}

	timesTable(4);
	echo "<br>";
	timesTable(6, 5);



 ?>