
<?php


if(isset($_POST['submit'])){

  $name=$_POST['pname'];



$servername = "localhost";
$username = "root";
$password = "";
$db="resturant";

// Create connection
$sqli = new mysqli($servername, $username, $password,$db);
if($sqli === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
  echo "sucessfull";
}

$sql = "INSERT INTO cart( name) VALUES('breakfast')";


if($sqli->query($sql) === true){
  echo "<script>alert('SECCESFULLY ADDED TO CART');</script>";}
else{
  echo "ERROR";
}
}

 ?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Restaurant</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
  </head>
<body>
  <header>
    <nav id="header-nav" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a href="index.html" class="pull-left visible-md visible-lg">
            <div id="logo-img"></div>
          </a>

          <div class="navbar-brand">
            <a href="index.html"><h1>My Restaurant</h1></a>

          </div>

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div id="collapsable-nav" class="collapse navbar-collapse">
           <ul id="nav-list" class="nav navbar-nav navbar-right">
            <li class="visible-xs">
              <a href="index.php">
                <span class="glyphicon glyphicon-home"></span> Home</a>
            </li>
            <li>
              <a href="signup.php">
                <span class="glyphicon glyphicon-plus"></span><br class="menu"> Sign up</a>
            </li>
            <li>
              <a href="login.php">
                <span class="glyphicon glyphicon-user"></span><br class=""> Login</a>
            </li>

            <li>
              <a href="menu-categories.php">
                <span class="glyphicon glyphicon-cutlery"></span><br class="hidden-xs"> Menu</a>
            </li>
            <li>
              <a href="#">
                <span class="glyphicon glyphicon-info-sign"></span><br class="hidden-xs"> About</a>
            </li>
              <li>
              <a href="menu-categories.php">
                <span class="glyphicon glyphicon-cutlery"></span><br class="hidden-xs"> Order</a>
            </li>  <li id="phone" class="hidden-xs">
              <a href="tel:(051)4445556">
                <span>(051)4445556</span></a><div>* We Deliver</div>
            </li>
          </ul><!-- #nav-list -->
        </div><!-- .collapse .navbar-collapse -->
      </div><!-- .container -->
    </nav><!-- #header-nav -->
  </header>

  <div id="call-btn" class="visible-xs">
    <a class="btn" href="tel:(051)4445556">
    <span class="glyphicon glyphicon-earphone"></span>
    410-602-5008
    </a>
  </div>
  <div id="xs-deliver" class="text-center visible-xs">* We Deliver</div>

  <div id="main-content" class="container">
    <h2 id="menu-categories-title" class="text-center">Menu Categories</h2>
    <div class="text-center">
      Substituting white rice with brown rice or fried rice after 3:00pm will be $1.50 for a pint and $2.50 for a quart.
    </div>

    <section class="row">
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="single-category.php">
          <div class="category-tile">
            <img width="200" height="200" src="images/menu/B/B.jpg" alt="Breakfast">

            <span name="pname">Breakfast</span>

          </div>
            <a href="info.php">
          <button class="button5" type="button" name="submit">Order</button>
        </a>



<a href="menu-categories.php">


  <button class="button4" type="button" name="submit" >Add to cart</button>
</a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="single-category.php">
          <div class="category-tile">
            <img width="270" height="200" src="images/download.jpg" alt="Lunch">
            <span name="pname">Lunch</span>
          </div>
          <a href="info.php">
        <button class="button5" type="button" name="button">Order </button>

        <button class="button4" type="button" name="button" >Add to cart</button>
      </a>

        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="single-category.php">
          <div class="category-tile">
            <img width="270" height="200" src="images/discount-tile.jpg" alt="Meal">
            <span>Meal</span>
          </div>
          <a href="info.php">
        <button class="button5" type="button" name="button" >Order</button>

        <button class="button4" type="button" name="button" >Add to cart</button>
      </a>
        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="single-category.php">
          <div class="category-tile">
            <img width="270" height="200" src="images/menu1.jpg" alt="Light Dinner">
            <span>Light Dinner</span>
          </div>
          <a href="info.php">
        <button class="button5" type="button" name="button" >Order</button>

        <button class="button4" type="button" name="button" >Add to cart</button>
      </a>
        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="single-category.php">
          <div class="category-tile">
            <img width="200" height="200" src="images/menu2.jpg" alt="Tea">
            <span>Tea</span>
          </div>
          <a href="info.php">
        <button class="button5" type="button" name="button" >Order</button>

        <button class="button4" type="button" name="button" >Add to cart</button>
      </a>
        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="single-category.php">
          <div class="category-tile">
            <img width="200" height="200" src="images/menu13.jpg" alt="Full Dinner">
            <span>Full Dinner</span>
          </div>
          <a href="info.php">
        <button class="button5"  type="button" name="button" >Order</button>

        <button class="button4" type="button" name="button" >Add to cart</button>
      </a>
        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="single-category.php">
          <div class="category-tile">
            <img width="200" height="200" src="images/menu4.jpg" alt="Party">
            <span>Party</span>
          </div>
          <a href="info.php">
        <button class="button5" type="button" name="button" >Order</button>

        <button class="button4" type="button" name="button" >Add to cart</button>
      </a>
        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="single-category.php">
          <div class="category-tile">
            <img width="200" height="200" src="images/menu5.jpg" alt="Lunch">
            <span>Dinner part</span>
          </div>
          <a href="info.php">
        <button class="button5" type="button" name="button" >Order</button>

        <button class="button4" type="button" name="button" >Add to cart</button>
      </a>
        </a>
      </div>

    </section>

  </div><!-- End of #main-content -->

  <footer class="panel-footer">
    <div class="container">
      <div class="row">
        <section id="hours" class="col-sm-4">
          <span>Hours:</span><br>
          Sun-Thurs: 11:15am - 10:00pm<br>
          Fri: 11:15am - 2:30pm<br>
          Saturday Closed
          <hr class="visible-xs">
        </section>
        <section id="address" class="col-sm-4">
          <span>Address:</span><br>
          Main Road<br>
          Islamabad, 44300
          <p>* Delivery area within 3-4 miles, with minimum order of $20 plus $3 charge for all deliveries.</p>
          <hr class="visible-xs">
        </section>
        <section id="testimonials" class="col-sm-4">
          <p>"The best Chinese restaurant I've been to! And that's saying a lot, since I've been to many!"</p>
          <p>"Amazing food! Great service! Couldn't ask for more! I'll be back again and again!"</p>
        </section>
      </div>
    </div>
  </footer>

  <!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
