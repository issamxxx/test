
<?php
require "header.php";
?>
<div class="center" >
			<h1 style="margin-top: -50px;margin-left: 50%; margin-bottom: 20px;font-size: 26px; ">Sign up</h1>
			<form action="includes/signup.inc.php" method="post" class="data">
				<label for="fname">name </label>
				<input type="text" name="name" ><br>
				<label for="fname">username </label>
				<input type="text" name="uid" ><br>
				<label for="fname">email </label>
				<input type="text" name="mail" ><br>
				<label for="fname">passowrd</label>
				<input type="password" name="pwd" ><br>
				<label for="fname">passowrd confirm</label>
				<input type="password" name="pwdrepeat" ><br>

				<button type="submit" name="signup-submit">sign up</button>
			</form>
			<div class="login" style="margin-left: 20%; width: 100%">
			Already have an account? <a href="signin.php" >login</a>
			</div>
			<?php
			if (isset($_GET["error"])) {
				if($_GET["error"]=="emptyinput"){
                  echo "<p>Fill all fields!</p>";
				}
				elseif ($_GET["error"]=="invaliduid") {
				  echo "<p>choose a valid username!</p>";
				}
				elseif ($_GET["error"]=="invalidemail") {
				  echo "<p>choose a valid email!</p>";
				}
				elseif ($_GET["error"]=="usernametaken") {
				  echo "<p>username is already taken</p>";
				}
				elseif ($_GET["error"]=="none") {
				  echo "<p>u are signed up!</p>";
				}

			}

		?>
		</div>

</body>
</html
