<?php 
	$title = "Contact";
	require_once "head.php" 
?>
<body>
	<?php require_once "menu.php" ?>
	<h1>Home Page</h1>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	  <label for="labelFirstname">Firstname</label><br>
	  <input type="text" name="firstname" placeholder="Enter Firstname" id="labelFirstname"><br><br>  
	  <label for="labelSurname">Surname</label><br>
	  <input type="text" name="surname" placeholder="Enter Surname" id="labelSurname"><br><br> 
	  <label for="labelEmail">Email</label><br>
	  <input type="text" name="email" placeholder="Enter Email" id="labelEmail"><br><br> 
	  <label for="labelMessage">Message</label><br>
	  <textarea name="message" id="labelMessage" cols="30" rows="10"></textarea>
	  <input type="submit" name="send" value="Send">
	</form>
	<?php require_once "footer.php" ?>
	
</body>
</html>