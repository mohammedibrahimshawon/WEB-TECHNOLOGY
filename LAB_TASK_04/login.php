
<?php 
	session_start();

	$username = "admin";
	$password = "admin";

	if (isset($_POST['uname'])) {
		if ($_POST['uname']==$username && $_POST['pass']==$password) {
			$_SESSION['uname'] = $username;
			header("location:DashBoard.php");
		}
		else{
			$msg = "username or password invalid";
		}
	}
 ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
	<span><?php
		if (isset($msg)) {
			echo $msg;
		}

	 ?>	 
	 <?php 
		include 'Head.php';
		
	 ?>	
	 </span>
	 <br>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
            <div class="container" style="width:800px;">  
	  <h3 align="">LOGIN</h3><br />
	Username:
	<input type="text" name="uname">
	<br>
	Password:
	<input type="password" name="pass">
	<br>
	<br>
<input id="remember" type="checkbox" name="remember" <?php if(isset($_COOKIE['username'])) {echo "checked";} ?>> <label for="remember">Remember Me</label>
	<br>
	<input type="submit" name="DashBoard" value="Login">

</form>
 <a href="Forgotpassword.php">Forgot Password?</a>
</div>
 <?php 
		include 'footer.php';
		
	 ?>
</form>
