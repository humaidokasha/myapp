<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Design for Bootstrap</title>

    <!-- Material Design Icons -->
   

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.css" rel="stylesheet">
    
</head>
<style>
.container{ max-width:400px; }
@font-face {
  font-family: 'Material Icons';
  font-style: normal;
  font-weight: 400;
  src: local('Material Icons'), local('MaterialIcons-Regular'), url(font/2fcrYFNaTjcS6g4U3t-Y5ZjZjT5FdEJ140U2DJYC3mY.woff2) format('woff2');
}

.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  white-space: nowrap;
  word-wrap: normal;
  direction: ltr;
  -webkit-font-feature-settings: 'liga';
  -webkit-font-smoothing: antialiased;
}


</style>
<body>


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Material Design Bootstrap -->
    <script type="text/javascript" src="js/mdb.js"></script>
	
	<?php
   if(isset($_POST['submit']))
   {
	   
	   
	   $name=$_POST['username'];
	   $pass=$_POST['pass'];
	   getUsers($name,$pass);
	   
	
	}

function connect(){
	$conn = mysqli_connect("localhost","root","","inventory");
	if($conn){
		return $conn;
	}
	return false;
}
function getUsers($name,$pass){
	$sql = "SELECT * FROM inventory_signup WHERE username='$name' AND password='$pass'";
	$conn = connect();
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		
     header('Location: loginprogress.php');
    
	
	
	}
} else {
    echo "<script type='text/javascript'>alert('Check your name and password');</script>";
}
$conn->close();

}
?>
	
	
	
	
	

<div class="container" style=" margin-top:100px;">
<div class="row" >
		<div class="col-lg-4 col-sm-2 col-xs-3">
			<i class="material-icons large">account_circle</i>
		</div>
   		<div class=" col-lg-8 col-sm-5 col-xs-6">
		<h2 >LOGIN </h2>
		</div>
	
</div>
<div class="row">
		<div class="col-lg-12">
			<form  action="#" method="post" >
				  <div class="row">
					<div class="input-field col-md-12">
					  <input placeholder="enter your name" id="first_name" name="username" type="text" autofocus required>
					  <label for="first_name">User Name</label>
					</div>
				  </div>
      
				  <div class="row">
					<div class="input-field col-md-12">
					  <input id="password" name="pass" type="password" required>
					  <label for="password">Password</label>
					</div>
				  </div>
				  
				  <div class="row">
					<div class=" col-md-12">
					 <button  class="btn btn-default waves-effect waves-light" type="submit" name="submit" value="submit" style="float:right;">Login</button>
					  <button class="btn btn-default waves-effect waves-light" type="submit" name="submit" value="submit" style="float:left;"><a style="text-decoration:none; color:#FFFFFF; " href="signup.php">signup</a></button>
					</div>
				  </div>
   			 </form>
		
		
		</div>

</div>


		
</div>


	

</body>

</html>