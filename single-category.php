<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Restaurant</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#buttonHide").click(function(){
        $("p").hide();
      });
        $("#buttonShow").click(function(){
        $("p").show();
      });

    	});
    });
    </script>

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
            </li><li id="phone" class="hidden-xs">
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

  <div id="main-content" class="container cont">
    <h2 id="menu-categories-title" class="text-center">Lunch Menu</h2>
    <div class="text-center">Lunch is not served until after 1pm.</div>

    <section class="row">
      <div class="menu-item-tile col-md-6">
        <div class="row">
          <div class="col-sm-5">
            <div class="menu-item-photo">
              <div>D01</div>
              <img class="img-responsive" width="250" height="150" src="images/menu/B/B-1.jpg" alt="Item">
            </div>
            <div class="menu-item-price">$10.95<span> (pint)</span> $14.95 <span>(quart)</span></div>
          </div>
          <div class="menu-item-description col-sm-7">
            <h3 class="menu-item-title">Veal with Vegetables</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots1">...</span><span id="more1">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
    <button onclick="myFunction1()" id="myBtn1">Read more</button>

          </div>
        </div>
        <hr class="visible-xs">
      </div>

      <div class="menu-item-tile col-md-6">
        <div class="row">
          <div class="col-sm-5">
            <div class="menu-item-photo">
              <div>D02</div>
              <img class="img-responsive" width="250" height="150" src="images/menu/B/B-7.jpg" alt="Item">
            </div>
            <div class="menu-item-price">$10.95<span> (pint)</span> $14.95 <span>(quart)</span></div>
          </div>
          <div class="menu-item-description col-sm-7">
            <h3 class="menu-item-title">Mixed Vegetables</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots2">...</span><span id="more2">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
    <button onclick="myFunction2()" id="myBtn2">Read more</button>

          </div>
        </div>
        <hr class="visible-xs">
      </div>
      <!-- Add after every 2nd menu-item-tile -->
      <div class="clearfix visible-lg-block visible-md-block"></div>

      <div class="menu-item-tile col-md-6">
        <div class="row">
          <div class="col-sm-5">
            <div class="menu-item-photo">
              <div>D03</div>
              <img class="img-responsive" width="250" height="150" src="images/menu/B/B-16.jpg" alt="Item">
            </div>
            <div class="menu-item-price">$10.95<span> (pint)</span> $14.95 <span>(quart)</span></div>
          </div>
          <div class="menu-item-description col-sm-7">
            <h3 class="menu-item-title">Vegetables</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots3">...</span><span id="more3">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
    <button onclick="myFunction3()" id="myBtn3">Read more</button>

          </div>

        </div>
        <hr class="visible-xs">
      </div>

      <div class="menu-item-tile col-md-6">
        <div class="row">
          <div class="col-sm-5">
            <div class="menu-item-photo">
              <div>D04</div>
              <img class="img-responsive" width="250" height="150" src="images/menu/B/B-8.jpg" alt="Item">
            </div>
            <div class="menu-item-price">$10.95<span> (pint)</span> $14.95 <span>(quart)</span></div>
          </div>
          <div class="menu-item-description col-sm-7">
            <h3 class="menu-item-title">Beaf</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots4">...</span><span id="more4">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
    <button onclick="myFunction4()" id="myBtn4">Read more</button>

          </div>
        </div>
        <hr class="visible-xs">
      </div>
      <!-- Add after every 2nd menu-item-tile -->
      <div class="clearfix visible-lg-block visible-md-block"></div>

      <div class="menu-item-tile col-md-6">
        <div class="row">
          <div class="col-sm-5">
            <div class="menu-item-photo">
              <div>D05</div>
              <img class="img-responsive" width="250" height="150" src="images/menu/B/B-5.jpg" alt="Item">
            </div>
            <div class="menu-item-price">$10.95<span> (pint)</span> $14.95 <span>(quart)</span></div>
          </div>
          <div class="menu-item-description col-sm-7">
            <h3 class="menu-item-title">Mutton</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots5">...</span><span id="more5">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
    <button onclick="myFunction5()" id="myBtn5">Read more</button>

          </div>
        </div>
        <hr class="visible-xs">
      </div>

      <div class="menu-item-tile col-md-6">
        <div class="row">
          <div class="col-sm-5">
            <div class="menu-item-photo">
              <div>D06</div>
              <img class="img-responsive" width="250" height="150" src="images/menu/B/B-6.jpg" alt="Item">
            </div>
            <div class="menu-item-price">$10.95<span> (pint)</span> $14.95 <span>(quart)</span></div>
          </div>
          <div class="menu-item-description col-sm-7">
            <h3 class="menu-item-title">Chicken</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots6">...</span><span id="more6">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
    <button onclick="myFunction6()" id="myBtn6">Read more</button>
          </div>
        </div>
        <hr class="visible-xs">
      </div>
      <!-- Add after every 2nd menu-item-tile -->
      <div class="clearfix visible-lg-block visible-md-block"></div>

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
