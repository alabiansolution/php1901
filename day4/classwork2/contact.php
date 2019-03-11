<?php 
	require_once("functions.php");
	require_once("contact-process.php");
	$title = "Contact";
	require_once "templates/head.php"; 
?>
<body>
	<?php require_once "templates/menu.php" ?>
	<h1>Home Page</h1>
	<?php 

			if(isset($_GET["status"]) && $_GET["status"] == "success"){
				echo "<div style='background-color:green;color:#fff'>Mail sent</div>";
			}elseif (isset($notSent)) {
				echo "<div style='background-color:red;color:#fff'>$notSent</div>";
			}elseif (isset($errorMessage)) {
				echo "<div style='background-color:red;color:#fff'>$errorMessage</div>";
			}

	 ?>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	  <label for="labelFirstname">Firstname*</label><br>
	  <input type="text" name="firstname" placeholder="Enter Firstname" id="labelFirstname"><br><br>  
	  <label for="labelSurname">Surname*</label><br>
	  <input type="text" name="surname" placeholder="Enter Surname" id="labelSurname"><br><br> 
	  <label for="labelEmail">Email*</label><br>
	  <input type="text" name="email" placeholder="Enter Email" id="labelEmail"><br><br>
	  <label for="labelPhone">Phone*</label><br>
	  <input type="text" name="phone" placeholder="Enter Phone" id="labelPhone"><br><br> 
	  <label for="labelReferer">How did you here about us</label><br>
	  <select name="referer" id="labelReferer">
	  	<option value="">Please Choose</option>
	  	<option value="Facebook">Facebook</option>
	  	<option value="Twitter">Twitter</option>
	  	<option value="Linkedin">Linkedin</option>
	  	<option value="Nairaland">Nairaland</option>
	  </select><br><br>
	  <label for="">Gender*</label>
	  <label>
	  	<input type="radio" name="gender" value="Male">
	  	Male
	  </label>
	  <label>
	  	<input type="radio" name="gender" value="Female">
	  	Female
	  </label><br><br>

	  <label>Education*</label>
	  <label>
	  	<input type="checkbox" name="edu[]" value="IMSU">
	  	IMSU
	  </label>
	  <label>
	  	<input type="checkbox" name="edu[]" value="ABSU">
	  	ABSU
	  </label>
	  <label>
	  	<input type="checkbox" name="edu[]" value="LASU">
	  	LASU
	  </label>
	  <label>
	  	<input type="checkbox" name="edu[]" value="UNILAG">
	  	UNILAG
	  </label><br><br>

	  <label for="labelMessage">Message</label><br>
	  <textarea name="message" id="labelMessage" cols="30" rows="10"></textarea><br>
	  <input type="submit" name="send" value="Send">
	</form>
	<?php require_once "templates/footer.php" ?>
	
</body>
</html>