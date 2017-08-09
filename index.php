<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>shopkeeper</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 5px;
      border-radius: 0;
	  padding: 5px;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 20px;
      margin-top: 20px;
    }
    .carousel

    {
      margin-bottom:50px;
      margin-top: 50px;
    }
    .row
    {
      margin-top: 50px;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #F0F0E9;
      padding: 25px;
    }
  </style>
</head>
<body>
 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ShopKeeper</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
	  </ul>
	<ul class="nav navbar-nav"> 
	<li><form class="form-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!-- search here:-->
    <input type="text" class="form-control" size="50" placeholder="Search Here:">
    <button type="button" class="btn btn-danger">Search</button>
  </form></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
	<?php if(isset($_SESSION['username'])): ?>
	  <li><a href="new 2.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php echo $_SESSION['username'];?></a></li>
	  <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      <?php else:?>      	 
      <li><a href="new 2.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="new 3.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	  <?php endif;?>
    </ul>
  </div>
</nav>


<!--<div class="jumbotron">
  <!--<div class="container text-center">
    <h1>Store Keeper</h1>      
    <p>Mission, Vission & Values</p>
  </div>-->
   <!--<div class="container">
  <br>-->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/1.jpg" alt="Chania"  >
      </div>

      <div class="item">
        <img src="images/2.jpg" alt="Chania" >
      </div>
    
      <div class="item">
        <img src="images/3.jpg" alt="Flower" >
      </div>

      <div class="item">
        <img src="images/4.jpg" alt="Flower" >
      </div>
    <!--</div>-->

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!--</div>
</div>-->


<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">WOMEN FASHION</div>
        <div class="panel-body" ><a href="fashion.php"><img src="1. (2).jpg" class="img-responsive" style="width:62%" alt="Image" ></a></div>
        <div class="panel-footer">Click for More</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">KIDS COLLECTIONS</div>
        <div class="panel-body"><a href="kids.php"><img src="kids.png" class="img-responsive" style="width:90%" alt="Image"></a></div>
        <div class="panel-footer">Click for More</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">UTENSILS</div>
        <div class="panel-body"><a href="crockery.php"><img src="utensil.jpg" class="img-responsive" style="width:90%" alt="Image"></a></div>
        <div class="panel-footer">Click for More</div>
      </div>
    </div>
  </div>
</div>


<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Laptops & Peripherals</div>
        <div class="panel-body"><a href="laptop_and.php"><img src="LCDs-and-LED.jpg" class="img-responsive" style="width:90%" alt="Image"></a></div>
        <div class="panel-footer">Click for More</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Footwear for Men & Women</div>
        <div class="panel-body"><a href="footwear.php"><img src="1482929129309.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
        <div class="panel-footer">Click for More</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Home Appliances</div>
        <div class="panel-body"><a href="Home-Appliances.php"><img src="Home-Appliances-Online-Shopping-in-Dubai-UAE.jpg" class="img-responsive" style="width:90%" alt="Image"></a></div>
        <div class="panel-footer">Click for More</div>
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>@ShopKeeper Copyright</p>  
  
</footer>

</body>
</html>
