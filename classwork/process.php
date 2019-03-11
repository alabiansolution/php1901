<?php 

	  if ($_SERVER["REQUEST_METHOD"] == "POST") {
		    // collect value of input field
			$firstname = $_POST['firstname'];
			$surname = $_POST['surname'];
			$message = $_POST['message'];
			$email = $_POST['email'];

			$to = "uwazie.benedict@alabiansolutions.com";
			$subject = "Illustration of HTML Email Sending";
			$header = "From: $email <uwazie.benedict@gradedinfo.com> \r\n";
			$header .= "Cc: afgh@somedomain.com \r\n";
			$header .= "MIME-Version: 1.0\r\n";
			$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
			$message = "
			        <html>
			        <head>
			          <title>Birthday Reminders for August</title>
			        </head>
			        <body style='background-color:#cfcfcf;'>
			        <h1 style='color:#f00; text-align:center'>Hurrah Your HTML Email is  Working</h1>
			          <table>
			            <tr>
			              <th>Firstname</th>
			              <th>Surname</th>
			              <th>Email</th>
			              <th>Message</th>
			            </tr>
			            <tr>
			              <td>$firstname</td>
			              <td>$surname</td>
			              <td>$email</td>
			              <td>$message</td>
			            </tr>
			           
			          </table>
			        </body>
			        </html>
			      ";
			    $sendEmail = mail($to,$subject,$message,$header);
			    if( $sendEmail == true ) {
			       echo "Message sent successfully...";
			    }else {
			       echo "Message could not be sent...";
			    }     
		
	   }




 ?>