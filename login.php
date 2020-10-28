<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="design1.css">
        		
</head>
<body>

<?php

  $email = ($_POST["email"]);
  $password = ($_POST["password"]);
  $regexSpecial = "/[!@#$.]/";


if(isset($_POST['submit'])){
  if (empty($_POST["password"])) {
    $nameErr = "Password is required";
    	echo $nameErr ;
  	}
  if(strlen($password) < 8) {
    echo ("<p class='error'>Password should be at least 8 characters in length. </p>");
}else{
    echo ' ';
}
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  echo(" <p class='error'>Email is invalid  </p>");
	} else { 
		echo ("");
	}
}

?>
		<div class = "nav"> 
		  <ul>
			  <li> <a href = "registration.php" > Registration Form </a> </li>
			  <li> <a href = "newQuestionForm.php" > New Question Form </a> </li>
			</ul>
	</div>
	<div class= "form">
    	<form action="login.php" method="POST">
            <label for="email"> Email:
            <input type="text" id="email" name="email" /> </label>
            <?php 
            	  
            ?>
            <br />
            <label for="password"> Password:
            <input type="password" id="password" name="password" /> </label>
             <br />
             <input type="submit" name="submit" value="Sign In" class="submit" />
        </form>
     </div>
        <?php
			echo "<h2>Your Input:</h2>";
			echo $email;
			echo "<br>";
			echo $password;
		?>


</body>
</html>