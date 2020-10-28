<!DOCTYPE html>
<html>
<head>
	<title>New Question Form</title>
  <link rel="stylesheet" href="design1.css">      		
</head>
<body>

<?php
if(isset($_POST['submit'])){
//Question Validation
  $question = ($_POST["question"]);
  $qBody = ($_POST["qBody"]);
  $qSkills = ($_POST["qSkills"]);

//Question Validation
if (empty($_POST["question"])) {
    $nameErr = "<p class='error'> Question is required </p> ";
      echo $nameErr ;}
if(strlen($question) < 3) {
    echo ("<p class='error'> Question should be at least 3 characters in length. </p>");
}else{
    echo ' ';
}
//Question Body Validation 
if (empty($_POST["qBody"])) {
    $nameErr = "<p class='error'> Question body is required </p> ";
      echo $nameErr ;}
if(strlen($qBody) > 50) {
    echo ("<p class='error'>Question body needs to be less than 500 characters. </p>");
}else{
    echo ' ';
}
//Question Skills Validation
$skills = explode(",", $qSkills);
if (count($skills) >= 2) {
  echo '  ';
} else {
    echo ("<p class='error'> 2 or more skills are required </p>");
}
}


?>
		<nav> 
		  <ul>
			  <li> <a href = "registration.php" > Registration Form </a> </li>
			  <li> <a href = "login.php" > Login </a> </li>
			</ul>
	</nav>
  <div class= "form">
    	<form action="newQuestionForm.php" method="POST">
            <label for="question"> Question Name
            <input type="text" id="question" name="question" /> </label>

            <br />
            <label for="qSkills"> Question Skills (Separated by Commas):
            <input type="qSkills" id="qSkills" name="qSkills" /> </label>
             <br> <br>

            <label for="qBody"> Question Body:</label> <br>
            <textarea name="qBody" rows="10" cols="30"> </textarea> 
             <br />
             <input type="submit" name="submit" value="Submit" class="submit" />
        </form>
 </div>
<?php


			echo "<h2>Your Input:</h2>";
			echo $question;
			echo "<br>";
			print_r($skills);
      echo "<br>";
      echo $qBody;
		?>


</body>
</html>