<?php include'phpform1.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container container-fluid">
<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="padding" method="POST">
	<div class="row">
		<div class="col">
			<div class="form-group padding">
    			<label for="name"><strong>Name:</strong></label>
   				 <input type="text" name="name" value="<?php echo $name;?>" class="form-control border-gradient"  placeholder="Enter name">
  				<span class="error"> <?php echo $nameErr;?></span>
  				<br><br>
 			 </div>
 			 <div class="form-group padding">
    			<label for="email"><strong>Email Address:</Strong></label>
   				<input type="text" name="email" value="<?php echo $email;?>" class="form-control border-gradient"  placeholder="Enter email">
  				<span class="error"> <?php echo $emailErr;?></span>
  				<br><br>
 			 <div class="form-group padding">
    			<label for="integer"><strong>Integer:</strong></label>
   				 <input type="text" name="integer" value="<?php echo $integer;?>" class="form-control border-gradient" placeholder="Enter integer" id="integer" >
   				 <span class="error"> <?php echo $integerErr;?></span>
  				<br><br>
 			 </div>
 			 <div><input type="submit" name="submit" value="submit" class="btn btn-lg btn-success border-gradient padding "></div>
		</div>
	</div>
</form>
</div>


<?php
echo "<h2>Your Input:</h2>";
if ($nameErr=="Only letters and white space allowed") {
	# code...
	echo "Please input valid name";
}else{
	echo "Name:".$name;}

echo "<br>";
if ($emailErr== "Invalid email format") {
	# code...
   echo "Please input valid email address";
}else{	
	echo "Email:" .$email;}

echo "<br>";

echo "Integer:" .$integer;
if ($integerErr=="integer is required" ||$integerErr=="integer is not valid") {
	
    		echo "Please input valid integer ";
   		
	}

?>
</body>
</html>

