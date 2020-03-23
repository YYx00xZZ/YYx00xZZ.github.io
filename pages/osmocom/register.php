<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register-stylesheet.css">
    <title>netit test</title>
  </head>
  <body>
    <header>
      <div class="jumbotron jumbotron-fluid">
        <div class="container text-left">
          <h1>&nbsp;</h1>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div>
      </div>
    </header>
    <nav class="navbar navbar-dark fixed-top navbar-expand-md ml-1 mr-2">
      <span class="navbar-brand mb-0 h1"><img src="img/osmocom1.png"></span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mb-1" id="navbarSupportedContent">
        <ul class="nav navbar-nav nav-tabs mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="search.html">Contents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Coming soon</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container p-3">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center">Success!</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <h3 class="text-center">Welcome <?php echo $_POST["fullName"]; ?></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <h5 class="text-center">Your account details:</h5>
        </div>
      </div>
      <div class="row mt-3 mb-3">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <h6 class="text-center">Email</h6>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <h6 class="text-center"><?php echo $_POST["userEmail"]; ?></h6>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <h6 class="text-center">Username:</h6>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <h6 class="text-center"><?php echo $_POST["userName"]; ?></h6>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="script/jquery.form-validation.min.js"></script>
    <script src="script/jquery.form-validation.js"></script>
    <script type="text/javascript">
    $(document).on('blur','[data-validator]',function () {
    new Validator($(this));
    });
    </script>
  </body>
</html>