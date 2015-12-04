<!DOCTYPE html>
  <html>
    <head>
    <!-- Import google font thing -->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Import css -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html"><i class="fa fa-play"></i></a></li>
            <li><a href="about.html"><i class="fa fa-question"></i></a></li>
            <li><a href="https://github.com/SGunner2014/Onion-or-Not-2"><i class="fa fa-github"></i></a></li>
            <li><a href="login.php"><i class="fa fa-sign-in"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
      <div class="bs-component">
              <div class="alert alert-dismissible alert-warning">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <h4>Note!</h4>
                <p>This is a login page for website admins. User accounts do not exist (yet)!</p>
              </div>
        <h2 class="form-signin-heading">Administrator login</h2>
        <label for="text" class="sr-only">Username</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Username" required="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div>
    <!-- Display at start -->
      <script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    </body>
  </html>
