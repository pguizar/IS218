<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
  <link rel="stylesheet" href="design1.css">      		
</head>
<body>
    <nav> 
      <ul>
        <li> <a href = "login.php" > Login </a> </li>
        <li> <a href = "newQuestionForm.php" > New Question Form </a> </li>
      </ul>
  </nav>
<?php
  $fName = ($_POST["fName"]);
  $lName = ($_POST["lName"]);
  $birthday = ($_POST["birthday"]);
  $email = ($_POST["email"]);
  $password = ($_POST["password"]);

if(isset($_POST['submit'])){
  if (empty($_POST["fName"])) {
    $nameErr = "<p class='error'>First Name is required </p><br>";
      echo $nameErr ;
    }
  if (empty($_POST["lName"])) {
    $nameErr = "<p class='error'>Last Name is required </p><br>";
      echo $nameErr ;
    }
  if (empty($_POST["birthday"])) {
    $nameErr = "<p class='error'>Birthday is required </p><br>";
      echo $nameErr ;
    }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo(" <p class='error'>Email is invalid </p><br> ");
  } else { 
    echo (" ");
  }

  if (empty($_POST["password"])) {
    $nameErr = "<p class='error'>Password is required. </p> ";
      echo $nameErr ;
    }
  if(strlen($password) < 8) {
    echo ("<p class='error'>Password should be at least 8 characters in length. </p> ");
}else{
    echo ' ';
}
}

?>
<div class= "form">
    	<form action="registration.php" method="POST">
            <label for="fName"> First Name:
            <input type="text" id="fName" name="fName" required /> </label>
            <br />
            <label for="lName"> Last Name:
            <input type="text" id="lName" name="lName" required/></label>
             <br />


            <label for="Birthday"> Birthday:
            <input type="date" id="birthday" name="birthday" required /> </label>
            <br />
            <label for="Email"> Email:
            <input type="text" id="email" name="email" required/> </label>
             <br />
            <label for="password"> Password:
            <input type="password" id="Password" name="password" required /> </label>
             <br />
             <br />
             <input type="submit" name="submit" value="Register" class="submit"/>
        </form>
  </div>
    <?php
			echo "<h2>Your Input:</h2>";
			echo $fName;
			echo "<br>";
			echo $lName;
      echo "<br>";
      echo $birthday;
      echo "<br>";
      echo $email;
      echo "<br>";
      echo $password;

		?>


</body>
</html>