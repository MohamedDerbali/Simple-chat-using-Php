<!DOCTYPE html>
<?php session_start();
{
?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>LOGIN</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <body>
<div class="container">
	<section id="content">
		<form method="POST" action="chat.php" >
			<h1>Login Form</h1>
			<div>
				<input type="text" name="username" placeholder="Username" required="" id="username" />
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="password" />
			</div>
			<div>
				<input type="submit" value="Log in" />
				<a href="#">Lost your password?</a>

                <a href="register.php">Register</a>
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->
</body>
  
  

    <script  src="js/index.js"></script>




</body>

</html>
<?php }?>