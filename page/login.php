<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->

</head>
<body>

<br><br>
<div class="container">
	<div class="well text-center"><h3>Login</h3></div>
	<form method="POST">
		Username:<input type="text" name="username" class="form-control">

		<br><br>

		Password:<input type="text" name="password" class="form-control">

		<br><br>

		<input type="submit" value="Login" name="btn" class="btn btn-primary">

	</form>




</div>

<?php

	if(isset($_POST['btn']))
	{

		$unm=$_POST['username'];
		$ps=$_POST['password'];

		if($unm=="" && $ps=="")
		{
			echo "<script>alert('Please enter username and password')</script>";
		}
		else
		{
			$_SESSION['user']=$unm;
			header("location:profile.php");
		}
		
	}


?>






<!--- Javascript--->

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
</html>