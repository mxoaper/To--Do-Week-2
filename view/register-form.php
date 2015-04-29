<?php
    require_once(__DIR__ . "/../model/config.php");

 ?>

<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
	<div>
		<label for="username">Username: </label>
		<input type="text" name="username" />
	</div>

	<div>
		<label for="password">Password: </label>
		<input type="password" name="password" />
	</div>

	<div>
		<button type="submit">Submit:</button>
	</div>
</form>


  <div id="background">
  <div id="backgroundOverlay">
    <div id="login">

          <form action="">
              <input type="text" placeholder="Email" id="topText" required/>
              <input type="password" placeholder="Password" id="textBox" required/>
              <input type="password" placeholder="Confirm password" id="botText" required/>

              <input type="submit" id="loginButton" value="Sign up"></input>
            <a href="login.php" id="signUp">Already an account? <b>Login!</b></a>
          </form>

        </div>
    </div>
</div>