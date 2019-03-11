<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
  </head>  
  <body id="admin">
    <form method="POST" action="form-process.php">
      <label for="labelFirstname">Firstname</label><br>
      <input type="text" name="firstname" placeholder="Enter Firstname" id="labelFirstname"><br><br>  
      <label for="labelMiddlename">Middlename</label><br>
      <input type="text" name="middlename" placeholder="Enter Middlename" id="labelMiddlename"><br><br>
      <label for="labelSurname">Surname</label><br>
      <input type="text" name="surname" placeholder="Enter Surname" id="labelSurname"><br><br> 
      <input type="submit" name="send" value="Send">
    </form>
  </body>
</html>