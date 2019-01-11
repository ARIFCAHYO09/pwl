<?php
session_start();
if(isset($_SESSION["ea"])) {
    ?>
    <script type="text/javascript">
        alert("anda sudah login");
        window.location="index.php";
    </script>
    <?php
}
?>

<!DOCTYPE html>
<html>
  <head>
   <title>Login Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
   
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Admin Local Croft</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Sign In</h6>
			                <div class="social">
	                            
	                            <div class="division">
	                                <hr class="left">
	                                <span>Admin</span>
	                                <hr class="right">
	                            </div>
	                        </div>
	                        <form action="loginproses.php" method="post">
			                <input class="form-control" type="text" placeholder="E-mail address" name="email">
			                <input class="form-control" type="password" placeholder="Password" name="password">
			                <div class="action">
			                    <button class="btn btn-primary signup" type="submit" name="submit" value="submit" >Login</button>
			                </div>
			                </form>
			            </div>
			        </div>

			        
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>