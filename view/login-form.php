<?php
    require_once(__DIR__ . "/../model/config.php");

 ?>


<div class="login-card">
 <h1>Login</h1>
 <form method="post" action="<?php echo $path . "controller/login-user.php"; ?>"> 	
      <div>
		<label for="username">Username: </label>
		<input type="text" name="username" />
	</div>

	<div>
		<label for="password">Password: </label>
		<input type="password" name="password" />
	</div>

	<div>
		<input type="submit" name="login" class="login login-submit" value="login!">
	</div>
 </form>
   <div class="login-help">
    <a href="register.php">Register</a>
  </div>
 </div>


