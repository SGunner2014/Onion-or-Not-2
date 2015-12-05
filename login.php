<!DOCTYPE html>
  <html>
    <head>
    <!-- Import google font thing -->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Import css -->
      <link rel="stylesheet" href="assets/css/main.css"/>
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
            <li><a href="https://github.com/SGunner2014/Onion-or-Not-2"><i class="fa fa-github"></i></a></li>
            <li><a href="login.php"><i class="fa fa-sign-in"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
      <div class="bs-component">
              <div class="alert alert-dismissible alert-warning">
                <h4>Note!</h4>
                <p>This is a login page for website admins. User accounts do not exist (yet)!</p>
              </div>
        <h1 class="form-signin-heading">Administrator login</h1>
        <hr/>
        <div class="well">
          <label for="text" class="sr-only">Username</label>
          <input type="text" id="inputEmail" class="form-control" placeholder="Username" required=""/>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required=""/>
          <br/>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </div>
      </form>
    </div>
    <hr/>
    <div class="container well navbar-fixed-bottom">
      <div class="col-sm-2">
        <h3>Useful Links</h3>
        <a href="https://twitter.com/JamesHurc"><h6>ElephantLocator's Twitter</h6></a>
        <a href="https://twitter.com/rennuGmaS"><h6>SGunner2014's Twitter</h6></a>
      </div>
      <div class="col-sm-3">
        <h3>Some of our own links</h3>
        <a href="http://onionornot.net/about.html"><h6>About us</h6></a>
        <a href="http://onionornot.net/privacy.html"><h6>Privacy &#38; Security</h6></a>
      </div>
      <div class="col-sm-7">
        <h3>The boring, legal stuff</h3>
        <h6>Copyright &copy; 2015, Sam Gunner &amp; James Hurcomb. Do not redistribute or modify without express permission from the copyright holders.</h6>
      </div>
    </div>
    <!-- Display at start -->
      <script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    </body>
  </html>
