<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-7">
					<div class="login-wrap">
					<form action="" class="signin-form d-md-flex" method="POST">
							<div class="half p-4 py-md-5">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
			      		<div class="form-group mt-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" class="form-control" placeholder="Username" name="username" required>
			      		</div>
		            <div class="form-group">
		            	<label class="label" for="password">Password</label>
		              <input name="password" type="password" class="form-control" placeholder="Password" required>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		          </div>
							<div class="half p-4 py-md-5 bg-primary">
		            <div class="form-group">
		            	<input type="submit" name="submit" class="form-control btn btn-secondary rounded submit px-3" value="Login"/>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div>
		            <p class="w-100 text-center" style="color:white;">&mdash; Or Sign In With &mdash;</p>
			          <div class="w-100">
									<p class="social-media d-flex justify-content-center">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
		          </div>
	          </form>
              <?php
              if (isset($_POST['submit'])) {
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $_SESSION['username'] = "Lisa";
                  $_SESSION['password'] = "1111";

                  if ($username == $_SESSION['username'] && $password == $_SESSION['password']) {  
               header('Location:admin.php');                
                  } else {
                      echo "Username atau password salah!";
                  }
                }
              ?>

	        </div>
	      </div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

