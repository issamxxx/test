<?php  
include_once "header.php";
?>

<div class="center" >
			<h1 style="margin-top: -50px;margin-left: 50%; margin-bottom: 20px;font-size: 26px; ">Sign in</h1>
			<form action="includes/login.inc.php" method="post" class="data">
				<label for="fname">username or email</label>
				<input type="text" name="mailuid" ><br>
				<label for="fname">passowrd</label>
				<input type="password" name="pwd" ><br>
				<button type="submit" name="login-submit">Login</button>
			</form>
			<div class="signup">
			New? <a href="signup.php">signup</a>
			</div>
			<form action="includes/logout.inc.php" method="post">
				<button type="submit" name="logout-submit">Logout</button>
				
			</form>
		</div>
</body>
</html>