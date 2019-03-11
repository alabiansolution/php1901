<?php require_once("functions.php") ?>
<?php require_once("processs.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculator</title>
	<style type="text/css">
		.main{
			width: 700px;
			margin: auto;
			overflow: hidden;
		}

		.column1, .column2{
			width: 350px;
			float: left;
		}

		.success, .danger{
			color:#fff;
			display: inline-block;
			padding:10px;
			border-radius: 10px;
		}

		.success{
			background-color: green;
		}

		.danger{
			background-color: red;
		}
	</style>
</head>
<body>

	<div class="main">
		<div class="column1">
			<h1>Content</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam rerum non molestias et unde animi eligendi, harum ipsum debitis earum vel architecto obcaecati praesentium iure quam sint, corporis! Vero, voluptatibus.</p>
			<p>Minima ut hic, assumenda iusto dolorum similique tenetur ab amet architecto saepe, totam eligendi pariatur accusamus corporis tempore esse eius voluptatum. Rem, laborum. Ullam soluta ipsum, exercitationem id, qui accusantium?</p>
			<p>Sapiente nostrum enim inventore eum nihil obcaecati saepe officiis necessitatibus illum maiores suscipit beatae odio architecto sunt itaque aspernatur et dolores, voluptates, totam temporibus quod consequuntur sit nesciunt. Maiores, natus?</p>
			<p>Expedita iste aspernatur dolores nesciunt quo alias ex dolorum, velit debitis optio, voluptas nostrum repudiandae tempora, earum pariatur eligendi ratione autem magnam adipisci. Rem reiciendis mollitia corporis, odio soluta voluptatibus!</p>
			<p>Blanditiis, hic expedita labore, deleniti fuga illo, rerum perspiciatis voluptas laborum debitis earum. Voluptates quidem incidunt eveniet id voluptatibus ipsa alias quis dolorem, beatae, provident optio explicabo facilis laborum saepe!</p>
		</div>
		<div class="column2">
			<?php 

				if(isset($error)){
					echo "<div class='danger'>$error</div>";
				}elseif(isset($add)){
					echo "<div class='success'>$add</div>";
				}
			 ?>
			<form method="post" action="<?php echo htmlentities('my-calculate.php') ?>">
				<label for="labelNum1">Num1*:</label><br>
				<input type="text" name="num1" id="labelNum1"><br><br>
				+<br>
				<label for="labelNum2">Num2*:</label><br>
				<input type="text" name="num2" id="labelNum2"><br><br>
				+<br>
				<label for="labelNum3">Num3*:</label><br>
				<input type="text" name="num3" id="labelNum3"><br><br>
				<input type="submit" name="send" value="Calculate">
			</form>
		</div>
	</div>
	

	
	
</body>
</html>