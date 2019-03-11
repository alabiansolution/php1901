<?php 

	if(isset($_POST["send"])){
		$errors = [];

		$requiredField = ['firstname', 'surname', 'email', 'phone', 'gender', 'edu'];
		$errors = array_merge($errors, checkRequiredField($requiredField));

		$fieldLength = array('phone' => 11, 'firstname' => 10);
		$errors = array_merge($errors, checkForLength($fieldLength));

		if(empty($errors)){
			$to = ["uwazie.benedict@alabiansolutions.com", "nonwaz78@gmail.com"];
			$subject = "From Contact Us email";
			$subHeader = [
					"From"=>$firstname."<uwazie.benedict@gradedinfo.com>", 
					"CC" => "info@alabiansolutions.com",
				    ];
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
			if(mailer($to, $subject, $body, $subHeader,$charset='charset=iso-8859-1')){
				header("Location: contact.php?status=success");
			}else{
				$notSent = "Email not sent";
			}
		}else{
			$errorMessage = "";
			foreach($errors as $theError){
				$errorMessage .= $theError."<br>";
			}
		}
	}


 ?>