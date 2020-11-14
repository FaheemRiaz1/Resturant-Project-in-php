<?php
if(isset($_POST['submit'])){
  $firstname=$_POST['first'];
  $email=$_POST['email'];
  $last=$_POST['last'];
  $pass=$_POST['pw'];


$servername = "localhost";
$username = "root";
$password = "";
$db="resturant";

// Create connection
$mysqli = new mysqli($servername, $username, $password,$db);
if($mysqli === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}



if(isset($_POST['submit'])){
      $sql = "INSERT INTO ordering (firstname,email,address,phonenumber) VALUES('$firstname','$email','$last','$pass')";
      if($mysqli->query($sql) === true){
      echo "<br />Inserted";
      }
      else{
        echo "ERROR". $mysqli -> error;
      }
}

}

 ?>

<link rel="stylesheet" href="styles.css">
<form class="" name ="resgitser"action="info.php" method="post">

    <div class="reg" >
        <h1 >Information </h1>
      </div>

      <div class="container">
        <p>First name  <input type="text" placeholder="Enter first name" name="first" required></p>

        <p>Email<input type="email" placeholder="Enter email" name="email" required></p>

        <p>Complete address<input type="text" placeholder="Enter address" name="last" required></p>

        <p>Phone number<input type="number" placeholder="Enter Phone number" name="pw" required></p>

        <button class="button button2" name="submit" value="sign in">Order</button>


</form>
