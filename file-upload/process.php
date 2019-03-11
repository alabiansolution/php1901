<?php 


		if(isset($_POST["upload"])){
			 var_dump($_FILES);
			 if($upg = uploadFile($_FILES["img"], "ben", 100000, ["jpg", "jpeg", "png", "gif"])){
			 	
			 }
		}
		function uploadFile($file, $name, $size, $exts, $path =  ""){

		    $uploaded = ['uploaded' => false, 'error' => 'unknown error'];
				$noError = true;
				$ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
				
				if(!in_array($ext, $exts)){
				  $uploaded = ['uploaded' => false, 'error' => 'unpermitted file ext'];
					$noError = false;
				}
				
				if($file['size'] > $size){
			    $uploaded['uploaded'] = false;
			    $uploaded['error'] = ($uploaded['error'] == 'unpermitted file ext') ? $uploaded['error'] = "{$uploaded['error']}, file larger than $size " : " file larger than $size";
					$noError = false;
				}
				
				if($noError){
					if($path){
						copy($file["tmp_name"], "$path/$name.$ext");
					}
					else {
						copy($file["tmp_name"], "$name.$ext");
					}
		    	$uploaded = ['uploaded' => "$name.$ext", 'error' => null];			
				}
		    return $uploaded;
		}



		



 ?>