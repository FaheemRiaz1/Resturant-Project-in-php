<?php
if(isset($_POST['submit'])){
  $ID=$_POST['first'];
  $pass=$_POST['pw'];

$servername = "localhost";
$username = "root";
$password = "";
$db="resturant";

// Create connection
$sqli = new mysqli($servername, $username, $password,$db);
if($sqli === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql1 = "SELECT  ID,password FROM signup where id=$ID AND password=$pass";
$result = mysqli_query($sqli, $sql1);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $i=$row['ID'];
      $p=$row["password"];

}
      if($ID==$i && $pass==$p){
        echo "<script>alert('LOGIN SUUCESSFULLY');</script>";
      }
}
else{
  echo "<script>alert('USERNAME OR PASSWORD ERROR');</script>";
}


}

 ?>


<link rel="stylesheet" href="styles.css">
<form class="" name ="resgitser"action="login.php" method="post">

  <div class="reg" >
      <h1 >Login Form</h1>
    </div>

      <div class="container">
        <p>ID  <input type="text" placeholder="Enter ID" name="first" required></p>

        <p>password <input type="password" placeholder="Enter Password" name="pw" required></p>

        <button class="button button2" name="submit" value="sign in">Log in</button>


</form>
