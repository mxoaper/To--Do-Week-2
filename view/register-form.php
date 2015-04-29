<?php
    require_once(__DIR__ . "/../model/config.php");

 ?>
<div class="surround">
  <div id="background">
  <div id="backgroundOverlay">
    <div id="login">

		<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
	<div>
		<input type="text" name="username" placeholder="Username" id="topText" required/>
	</div>

	<div>
		<input type="password" name="password" placeholder="Password" id="textBox" required />
	</div>

	<div>
		<input type="submit" id="loginButton" value="Sign up"></input>
	</div>
	<div>
		<a href="login.php" id="signUp">Already have an account? <b>Login!</b></a>
	</div>
			</form>
        </div>
    </div>
 </div>
</div>
