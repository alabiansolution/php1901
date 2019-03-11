<?php 

	if(isset($_POST["upload"])){

		var_dump($_FILES);
		$name = $_FILES["img"]["name"];
		$type = $_FILES["img"]["type"];
		$tmpName = $_FILES["img"]["tmp_name"];
		$size = $_FILES["img"]["size"];

		$filesAllowed = ["image/png", "image/jpg", "image/jpeg", "image/gif"];
		$errors = "";
		if(in_array($type, $filesAllowed)){
			if($size > 150000){
				$errors .= "$name is too large";
			}else{
				copy($tmpName, "uploads/$name");
			}
		}else{
			$errors .= "File not allowed";
		}
	}



 ?>