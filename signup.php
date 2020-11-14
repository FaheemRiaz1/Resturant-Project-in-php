<?php
if(isset($_POST['submit'])){
  $firstname=$_POST['first'];
  $lastname=$_POST['last'];
  $email=$_POST['email'];
  $pass=$_POST['pw'];
  $cpass=$_POST['cpw'];


$servername = "localhost";
$username = "root";
$password = "";
$db="resturant";

// Create connection
$mysqli = new mysqli($servername, $username, $password,$db);
if($mysqli === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$rand1=rand(0,10000) ;

if($pass === $cpass){

if(isset($_POST['submit'])){
      echo "<script>alert('Your ID is: $rand1 and your password is: $pass');</script>";
      $sql = "INSERT INTO signup (id,firstname,lastname,email,password,cpassword) VALUES('$rand1','$firstname','$lastname','$email','$pass','$cpass')";
      if($mysqli->query($sql) === true){
      echo "<br />Inserted";
      }
      else{
        echo "ERROR";
      }
}
}
else{
    echo "<script>alert('Passwords doen't match');</script>";
  }

}

 ?>

<link rel="stylesheet" href="styles.css">
<form class="" name ="resgitser"action="signup.php" method="post">

    <div class="reg" >
        <h1 >Registration Form</h1>
      </div>

      <div class="container">
        <p>First name  <input type="text" placeholder="Enter first name" name="first" required></p>

        <p>Last name<input type="text" placeholder="Enter last name" name="last" required></p>

        <p>Email<input type="email" placeholder="Enter email" name="email" required></p>

        <p>password <input type="password" placeholder="Enter Password" name="pw" required></p>

        <p>confirm password <input type="password" placeholder="confirm Password" name="cpw" required></p>

        <p>Already have an account <a href="login.php">Login</a></p>
        <button class="button button2" name="submit" value="sign in">Register</button>


</form>
