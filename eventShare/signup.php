<!DOCTYPE html>
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

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

<div class="container">
  <div class="col-md-4">
  </div>
    <div class="row">
    <div class="col-md-4">

      <form class="form-signup" action="register.php" method="post">

        <h2 class="form-signup-heading">Sign up</h2>
        <label for="inputName" class="sr-only">Name</label>
        <input id="fullname" name="fullname" class="form-control" placeholder="Name" required="" autofocus="" type="text">
          <br>
        <label for="inputGender" class="sr-only">Gender</label>
        <input id="gender" name="gender" class="form-control" placeholder="Gender" required="" autofocus="" type="text">
          <br>
        <label for="inputAge" class="sr-only">Age</label>
        <input id="age" name="age" class="form-control" placeholder="Age" required="" autofocus="" type="text">
          <br>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input id="email" name="email" class="form-control" placeholder="Email address" required="" autofocus="" type="text">
          <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input id="password" name="password" class="form-control" placeholder="Password" required="" type="text">
          <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
      </form> 
      </div>
      </div>

    </div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
