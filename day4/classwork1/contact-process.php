<?php 
	// C:\wamp64\www\wd1901\day4\classwork1\contact-process.php:4:
	// array (size=9)
	//   'firstname' => string '' (length=0)
	//   'surname' => string '' (length=0)
	//   'email' => string '' (length=0)
	//   'phone' => string '' (length=0)
	//   'referer' => string '' (length=0)
	//   'gender' => string 'Male' (length=4)
	//   'edu' => 
	//     array (size=2)
	//       0 => string 'IMSU' (length=4)
	//       1 => string 'ABSU' (length=4)
	//   'message' => string '' (length=0)
	//   'send' => string 'Send' (length=4)

	if(isset($_POST["send"])){
		var_dump($_POST);
		$errors = [];

		$firstname = sanitize($_POST["firstname"]);
		$surname = sanitize($_POST["surname"]);
		$email = sanitize($_POST["email"]);
		$phone = sanitize($_POST["phone"]);
		$referer = sanitize($_POST["referer"]);
		$message = sanitize($_POST["message"]);

		if($firstname == ""){
			$errors[] = "Firstname is required";
		}
		if($surname == ""){
			$errors[] = "Surname is required";
		}
		if($phone == ""){
			$errors[] = "Phone is required";
		}
		if($email == ""){
			$errors[] = "Email is required";
		}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errors[] = "This email is invalid";
		}

		if(!isset($_POST["gender"])){
			$errors[] = "Gender is required";
		}else{
			$gender = $_POST["gender"];
		}

		if(!isset($_POST["edu"])){
			$errors[] = "Education is required";
		}else{
			$education = implode(", ", $_POST["edu"]);
		}


		if(empty($errors)){
			$to = "uwazie.benedict@alabiansolutions.com";
			$subject = "From Contact us email";
			$header = "From: $email <uwazie.benedict@gradedinfo.com> \r\n";
			$header .= "Cc: nonwaz78@gmail.com \r\n";
			$header .= "MIME-Version: 1.0\r\n";
			$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
			$body = "
			        <html>
			        <head>
			          <title>Contact Us form</title>
			        </head>
			        <body style='background-color:#cfcfcf;'>
			        <h1 style='color:#f00; text-align:center'>Hurrah Your HTML Email is  Working</h1>
			          <table>
			            <tr>
			              <th>Firstname</th>
			              <th>Surname</th>
			              <th>Email</th>
			              <th>Phone</th>
			              <th>Gender</th>
			              <th>Referer</th>
			              <th>Message</th>
			            </tr>
			            <tr>
			              <td>$firstname</td>
			              <td>$surname</td>
			              <td>$email</td>
			              <td>$phone</td>
			              <td>$gender</td>
			              <td>$referer</td>
			              <td>$message</td>
			            </tr>
			           
			          </table>
			        </body>
			        </html>
			      ";

			 if(mail($to, $subject, $body, $header)){
			 	$mailSent = "Email sent successfully";
			 }else{
			 	$notSent = "Email could not send";
			 }
		}else{
				$errorMessage = "";
			foreach($errors as $theError){
				$errorMessage .= $theError . "<br>";
			}
		}




	}




 ?>