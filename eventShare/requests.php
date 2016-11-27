<?php

include('httpful.phar');
session_start();

/*$get_request = 'http://127.0.0.1/aula8/user/search?first_name="'.$_GET['search'].'"';

$response2 = \Httpful\Request::get($get_request)->send();

echo  $response->body;
*/$session = $_SESSION['user'];
	$id = $_SESSION['id'];
	$uri = 'http://localhost/events/user/search?id='.$id;
	
	$response = \Httpful\Request::get($uri)->send();
	
	$array = json_decode($response->body, true);

	foreach ($array as $value => $key) {
	  echo ' <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signup Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../eventShare/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../eventShare/css/signup.css" rel="stylesheet">

    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../eventShare/perfil.php">Event Share</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
         
          <ul class="nav navbar-nav navbar-left">
            <li><a href="upload.html">Uploads</a></li>
            <li><a href="eventos.html">Events</a></li>
            <li><a href="updateUser.html">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-nav">
            <form class="navbar-form navbar-nav" action="search.php" method="get">
            <input type="text" class="form-control" placeholder="Search...">
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br>
    <br>
    <br>
<form class="form-signup" action="updateUser.php" method="post">
<div class="container">
  <div class="col-md-4">
  </div>
    <div class="row">
    <div class="col-md-4">
        <h2 class="form-signup-heading">Update Information</h2>
         <label for="inputName" class="sr-only">Id</label>
        <input id="id" name="id" class="form-control" value="'.$id.'" type="hidden">
          <br>
        <label for="inputName class="sr-only">Name</label>
        <input id="fullname" name="fullname" class="form-control" value="'.$key['fullname'].'" required="required"  type="text">
          <br>
        <label for="inputGender" class="sr-only">Gender</label>
        <input id="gender" name="gender" class="form-control" value="'.$key['gender'].'" required="required" type="text">
          <br>
        <label for="inputAge" class="sr-only">Age</label>
        <input id="age" name="age" class="form-control" value="'.$key['age'].'" required="required"  type="text">
          <br>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input id="email" name="email" class="form-control" value="'.$key['email'].'" required="required" type="email">
          <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input id="password" name="password" class="form-control" value="'.$key['password'].'" required="required" type="text">
          <br>
          <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Update</button>
      </form> 
      </div>
      </div>
    </div>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>';
          

}

