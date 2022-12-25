<?php 

// LOGİN SAYFASI

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: ../index.php");
						die;
					}
				}
			}
			
			echo "<script> alert('wrong username or password!')</script>";
			// echo "";
		}else
		{
			// echo "wrong username or password!";
			echo "<script> alert('wrong username or password!')</script>";

		}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Giriş Yap</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="login.css">
<link rel="shortcut icon" href="favicon.png" />

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="login-form">
    <form  method="post">	
		<h2>Giriş Yap</h2>	
        <div class="text-center social-btn">
            <a href="#" class="btn btn-primary btn-lg btn-block"><i class="fa fa-facebook"></i><b>Facebook</b> ile giriş yap</a>
            <a href="#" class="btn btn-info btn-lg btn-block"><i class="fa fa-twitter"></i><b>Twitter</b> ile giriş yap</a>
			<a href="#" class="btn btn-danger btn-lg btn-block"><i class="fa fa-google"></i><b>Google</b> ile giriş yap</a>
        </div>
		<div class="or-seperator"><b>veya</b></div>
        <div class="form-group">
        	<input type="text" class="form-control input-lg" name="user_name" placeholder="Kullanıcı Adı" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control input-lg" name="password" placeholder="Şifre" required="required">
        </div>        
        <div class="form-group">
            <button type="submit" value="login"name="login" class="btn btn-success btn-lg btn-block login-btn">Giriş Yap</button>
        </div>
    </form>
    <div class="text-center"><span style="color:white">Hesabınız yok mu?</span> <a href="registration.html">Buradan kayıt olabilirsiniz</a></div>
</div>
</body>
</html>