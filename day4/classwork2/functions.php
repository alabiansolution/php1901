<?php 

	function sanitize($data){
		$data = trim($data);
		$data = strip_tags($data);
		$data = stripslashes($data);
		return $data;
	}


	/**
	 * used to send mail 
	 * @param array $to an array('name'=>'email') that contains the list of receipent
	 * @param string $subject the subject of the email been sent
	 * @param string $message the  body of the email been sent
	 * @param array $subHeader an array('FromName'=>email,'CcName'=>email,'BccName'=>email) that contain more info need in the header
	 * @param string $charset the charset to be support by email reader
	 * @return boolean $sent true if mail is send out of the server and false otherwise
	 */
	
	function mailer($to,$subject,$message,$subHeader,$charset='charset=iso-8859-1'){
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= "Content-type: text/html; $charset" . "\r\n";
			$recepient="";
			foreach ($to as $name => $email) {
				$recepient.="$name <$email>, ";
			}
			$recepient=rtrim($recepient, ", ");
			// Additional headers
			$headers .= "To: $recepient" . "\r\n";
			$kanter=0;
			foreach ($subHeader as $key => $email) {
				if($kanter==0) $headers .= "From: $key <$email>" . "\r\n";
				if($kanter==1) $headers .= "Cc: $key <$email>" . "\r\n";
				if($kanter==2) $headers .= "Bcc: $key <$email>" . "\r\n";
				++$kanter;
			}
			// Mail it
			$sent=mail($recepient, $subject, $message, $headers);
			return $sent;
		}	


		//requiredField = array(name, email, password)
		function checkRequiredField($requiredField){
			$formErrors = array();
			foreach($requiredField as $nameOfField){
				if(!isset($_POST[$nameOfField]) || $_POST[$nameOfField] == NULL){
					$formErrors[] = $nameOfField . " is required";
				}
			}
			return $formErrors;
		}

		//$fieldLength = array(username => 4, password => 6)
			function checkForLength($fieldLength){
				$formErrors = array();
				foreach($fieldLength as $nameOfField => $minLengthRequired){
					if(strlen(trim($_POST[$nameOfField])) < $minLengthRequired){
						$formErrors[] = $nameOfField." is too short must be {$minLengthRequired} character long";
					}
				}
				return $formErrors;
			}


			/**
			 * Used to upload file from HTML form to the server
			 * @param array $file the equivalent of $_FILES['nameAttributeValue']
			 * @param string $name the name the file uploaded file should be called on the server
			 * @param number $size the maxmium size of the file in byte
			 * @param array $exts collection of permitted file extension for the image to be uploaded
			 * @param string $path the directory path where file will be stored, if not supplied, its store in same directory as running script
			 * @return array $uploaded ['uploaded'=>'filename or false if not upload', 'error'=>'error msg if upload file or null if uploaded']
			 */
			
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