<?php
include ('httpful.phar');

$uri = 'http://localhost/events/user/search?fullname="'.$_GET["fullname"].'"';

$response = \Httpful\Request::get($uri)->send();

$array = json_decode($response->body, true);

foreach ($array as $key => $value) {
		echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../eventShare/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../eventShare/css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Dont actually copy these 2 lines! -->
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
                <li><a href="dispatch.php">Upload events</a></li>
               <li><a href="eventos.php">Events by Category</a></li>
                <li><a href="update.php">Update User</a></li>
                <li><a href="searchEvent.php">Search events</a></li>
              </ul>
              <form class="navbar-form navbar-nav">
              <form class="navbar-form navbar-nav" action="search.php" method="get">
                <input type="text" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="../eventShare/signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
              </ul>
            </div>
          </div>
        </nav>
          <br>
          <br>
          <br>
         <table>
          <link href="../../eventShare/css/table.css" rel="stylesheet">
          <tr>
          <th>fullname</th>
          <th>email</th>
          <th>gender</th>
          <th>age</th>
        </tr>
        <tr>
          <td>'.$value['fullname'].'</td>
          <td>'.$value['email'].'</td>
          <td>'.$value['gender'].'</td>
          <td>'.$value['age'].'</td>
        </tr>

            </div>
          
          </div>

        </div>

      </div>

    </div>

    
  </body>
</html>';
}

//echo $response->body;