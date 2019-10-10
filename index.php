<?php

// ERROR REPORTING
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "app/php/php.php";
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-grid.css">

    <link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./app/views/first.php">First</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./app/views/second.php">Second</a>
            </li>
        </ul>
    </div>
</nav>

  <form>
    <div class="form-row">
      <div class="form-group col-md-6">

        <input type="Name" class="form-control" id="inputName" placeholder="Name">
<?php foreach ($jayParsedAry as $country): ?>
  <option value="<?php echo $country ["dial_code"]; ?>"><?php echo $country ["name"]; </option>
  <?php endforeach;?>
      </div>
      <div class="form-group col-md-6">

        <input type="Surname" class="form-control" id="inputSurname" placeholder="Surname">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">

        <input type="text" class="form-control" id="inputPcode"placeholder="Pcode">
      </div>
      <div class="form-group col-md-4">

        <select id="Pnumber" class="form-control"id="inputPnumber"placeholder="Pnumber">
          <option selected>Choose...</option>
          <option>...</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>


<!--bootstrap js-->
<script src="./assets/js/jqery.js"></script>
<script src="./assets/js/bootstrap.js"></script>
<script src="./assets/js/bootstrap.bundle.js"></script>
</body>
</html>
