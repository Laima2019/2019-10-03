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
<form action="" method="post" class="col-5 mx-auto">
  <select class="form-control" id="exampleformcontrolselect1" name="">
    <?php foreach ($uzsakymai ["kebabas"]["kebabotipas"] as $kebabokey =>$kebabotipas):?>
      <option value="<?php print $kebabokey; ?>"><?php print $kebabotipas; ?></option>
      <?php endforeach; ?>
  </select>
  <select class="form-control" id="exampleformcontrolselect1" name="">
    <?php foreach ($uzsakymai ["kebabas"]["dydis"] as $kebabokey =>$kebabotipas):?>
      <option value="<?php print $kebabokey; ?>"><?php print $kebabotipas; ?></option>
      <?php endforeach; ?>
  </select>
  <select class="form-control" id="exampleformcontrolselect1" name="">
    <?php foreach ($uzsakymai ["kebabas"]["mesa"] as $kebabokey =>$kebabotipas):?>
      <option value="<?php print $kebabokey; ?>"><?php print $kebabotipas; ?></option>
      <?php endforeach; ?>
  </select>
  <select class="form-control" id="exampleformcontrolselect1" name="">
    <?php foreach ($uzsakymai ["kebabas"]["padazai"] as $kebabokey =>$kebabotipas):?>
      <option value="<?php print $kebabokey; ?>"><?php print $kebabotipas; ?></option>
      <?php endforeach; ?>
  </select>

  <select class="form-control" id="exampleformcontrolselect1" name="gerimai">
    <?php foreach ($uzsakymai["gerimas"] as $gerimukey => $gerimas): ?>
    <option value="<?php echo $gerimukey; ?>"><?php echo $gerimas ["name"]; ?></option>
<?php endforeach; ?>
</select>
  <input type="submit" value="submit">
</form>



<section class="order col-6 mx-auto d-flex">
  <h3><?php print $_POST["$kebabotipas = $uzsakymai["kebabas"]["kebabotipas"][0]; ?></h3>
  <h3><?php print $_POST["$kebabodydis"]; ?></h3>
  <h3><?php print $_POST["$kebabomesa"]; ?></h3>
  <h3><?php print $_POST["$kebabopadazai"]; ?></h3>

</section>
<?php var_dum($uzsakymai["kebabas"]["kebabotipas"][0]); ?>

// I budas
<select name="spalvos" id="">
  <option value="1">raudona</option>
  <option value="2">zalia</option>
</select>
<br>
// II budas
<select name="spalvos" id="">
  <?php foreach ($masyvasspalvos as $key => $value): ?>
    <option value="<?php print $key; ?>"><?php print $value; ?></option>
    <?php endforeach; ?>
  </select>

<!--bootstrap js-->
<script src="./assets/js/jqery.js"></script>
<script src="./assets/js/bootstrap.js"></script>
<script src="./assets/js/bootstrap.bundle.js"></script>
</body>
</html>
