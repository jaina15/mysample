<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>WS name</title>
   </head>
   <body>
   		<nav class="navbar navbar-default navbar-fixed-top">
   			<div class="container-fluid">
   				<div class="navbar-header">
   					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
   						<span class="icon-bar"></span>
   						<span class="icon-bar"></span>
   						<span class="icon-bar"></span>
   					</button>
   					<a class="navbar-brand" href="index.php">WS name</a>
   				</div>
   				<div class="collapse navbar-collapse" id="myNavbar">
   					<ul class="nav navbar-nav">
   						<li class="dropdown">
   							<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span>&nbsp;CSE</a>
   							<ul class="dropdown-menu">
   								<li><a href="#">sem1</a></li>
   								<li><a href="#">sem2</a></li>
   								<li><a href="#">sem3</a></li>
   								<li><a href="#">sem4</a></li>
   								<li><a href="#">sem5</a></li>
   								<li><a href="#">sem6</a></li>
   								<li><a href="#">sem7</a></li>
   								<li><a href="#">sem8</a></li>
   							</ul>
   						</li>
   						<li class="dropdown">
   							<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span>&nbsp;ECE</a>
   							<ul class="dropdown-menu">
   								<li><a href="#">sem1</a></li>
   								<li><a href="#">sem2</a></li>
   								<li><a href="#">sem3</a></li>
   								<li><a href="#">sem4</a></li>
   								<li><a href="#">sem5</a></li>
   								<li><a href="#">sem6</a></li>
   								<li><a href="#">sem7</a></li>
   								<li><a href="#">sem8</a></li>
   							</ul>
   						</li>
   						<li class="dropdown">
   							<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span>&nbsp;IT</a>
   							<ul class="dropdown-menu">
   								<li><a href="#">sem1</a></li>
   								<li><a href="#">sem2</a></li>
   								<li><a href="#">sem3</a></li>
   								<li><a href="#">sem4</a></li>
   								<li><a href="#">sem5</a></li>
   								<li><a href="#">sem6</a></li>
   								<li><a href="#">sem7</a></li>
   								<li><a href="#">sem8</a></li>
   							</ul>
   						</li>
   						<li class="dropdown">
   							<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span>&nbsp;CIVIL</a>
   							<ul class="dropdown-menu">
   								<li><a href="#">sem1</a></li>
   								<li><a href="#">sem2</a></li>
   								<li><a href="#">sem3</a></li>
   								<li><a href="#">sem4</a></li>
   								<li><a href="#">sem5</a></li>
   								<li><a href="#">sem6</a></li>
   								<li><a href="#">sem7</a></li>
   								<li><a href="#">sem8</a></li>
   							</ul>
   						</li>
   						<li class="dropdown">
   							<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span>&nbsp;MAE</a>
   							<ul class="dropdown-menu">
   								<li><a href="#">sem1</a></li>
   								<li><a href="#">sem2</a></li>
   								<li><a href="#">sem3</a></li>
   								<li><a href="#">sem4</a></li>
   								<li><a href="#">sem5</a></li>
   								<li><a href="#">sem6</a></li>
   								<li><a href="#">sem7</a></li>
   								<li><a href="#">sem8</a></li>
   							</ul>
   						</li>
   						<li><a href="about.php">About Us</a></li>
   						<li><a href="contact.php">Contact Us</a></li>
   					</ul>
   					<form class="navbar-form navbar-left">
   						<div class="form-group">
   							<input class="form-control" type="text" name="search" placeholder="search..">
   						</div>
   						<button type="submit" class="btn btn-info">Search</button>
   						<button type="button" class="btn btn-primary">Login</button>
   						<button type="button" class="btn btn-primary" onClick="location.href='signup.php'">Sign Up</button>
   					</form>
   				</div>
   			</div>
   		</nav>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-2">
          </div>
          <div class="col-sm-8">
            <div class="container">
              <h2 id="jhead">Contact Form</h2>
              <form action="" method="POST">
                <input type="text" name="name" placeholder="name"><label for="name">:Name</label><br><br><br>
                <input type="text" name="uid" placeholder="email"><label for="uid">:Email</label><br><br><br>
                <label for="textarea">Message:</label><br>
                <textarea name="text" placeholder="Write your query"></textarea><br><br><br>
                <button type="submit" class="btn btn-primary" id="sb">Submit</button>
              </form>
            </div>
          </div>
          <div class="col-sm-2">
          </div>
        </div>
      </div>
   	</body>
</html>
