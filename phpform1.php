<?php
// define variables and set to empty values
$nameErr = $emailErr =$integerErr="";
$name = $email = $integer="";

if (isset($_POST['submit'])){
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    $name=filter_var($name, FILTER_SANITIZE_STRING);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    $email=filter_var($email, FILTER_SANITIZE_EMAIL);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["integer"])) {
  	# code...
  	$integerErr="integer is required";
  }else{
  	$integer=test_input($_POST["integer"]);
  	// $integer=filter_var($integer, FILTER_SANITIZE_NUMBER_INT);
  	//filter integer
  		# code...
  	if (filter_var($integer, FILTER_VALIDATE_INT) ===0 || !filter_var($integer, FILTER_VALIDATE_INT) === false )
  	 {
  		$integerErr="valid integer";
		}
		else
			{
				$integerErr="integer is not valid";
			}
	}
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

