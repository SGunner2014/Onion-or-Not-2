<!DOCTYPE html>
  <html>
    <head>
      <!-- Import css -->
      <link rel="stylesheet" href="assets/css/main.css"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

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
      <h1>Admin Panel</h1>
      <h2>Edit articles in Pool</h2>
      <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th class="col-sm-1">#</th>
            <th class="col-sm-3">Title</th>
            <th class="col-sm-2">URL</th>
            <th class="col-sm-1">Onion?</th>
            <th class="col-sm-1">NSFW?</th>
            <th class="col-sm-4">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>British astronaut to run London Marathon in space</td>
            <td><a href="http://olympics.nbcsports.com/2015/12/04/british-astronaut-london-marathon-space-tim-peake/">http://olympics.nbcsports.com/2015/12/04/briti...</td>
            <td>No</td>
            <td>No</td>
            <td>
              <a href="#" class="btn btn-danger btn-xs">Remove</a>
              <a href="#" class="btn btn-primary btn-xs">Edit Title</a>
              <a href="#" class="btn btn-danger btn-xs">Mark NSFW</a>
            </td>

          </tr>
          <tr>
            <td>2</td>
            <td>British astronaut to run London Marathon in space</td>
            <td><a href="http://olympics.nbcsports.com/2015/12/04/british-astronaut-london-marathon-space-tim-peake/">http://olympics.nbcsports.com/2015/12/04/briti...</td>
            <td>No</td>
            <td>No</td>
            <td>
              <a href="#" class="btn btn-danger btn-xs">Remove</a>
              <a href="#" class="btn btn-primary btn-xs">Edit Title</a>
              <a href="#" class="btn btn-danger btn-xs">Mark NSFW</a>
            </td>
          </tr>
  </tbody>
</table> 


    </div>
    <!-- Display at start -->
      <script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    </body>
  </html>
