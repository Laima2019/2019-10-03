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
<?php
$laikas=strtotime("+2day");
print date ("Y/m/d H:i:sa" , $laikas) ."<br>";
$tekstas ="labas as krabas";
echo strtoupper($tekstas) ."<br>";
print_r(explode(" ", $tekstas))."<br>";
var_dump(explode(" ", $tekstas));

$array =[
  "vyrai" =>["lukas", "gytis","pijus",],
  "moterys" =>["kornelija", "ieva","laima",],
];
foreach ($array["vyrai"] as $key => $value) {
  print $value; //atvaizduoja visus vyrus
}
foreach ($array["moterys"] as $key => $value) {
  print $value; //atvaizduoja visas moteris
}

//=================
$kintamasis =1;
if ($kintamasis===1) {
  print "kintamasis kintamasis yra identiskas";
}elseif ($kintamasis==1) {
  print "$kintamasis yra lygus vienam";
}else{
  print "kintamasis yra kazkoks";
}
/*--for tik skaiciams prasideda nuo 10, trunka kol tenkinama salyga <20
--$i++ dideja kas skaiciu-; $1+=2 dideja kas du-*/

for ($i=10; $i<25; $i+=2) {
  print "$i <br>";
}
  $skaicius = 8;
  print $skaicius .=2
  /*--prasideda nuo 1.37, trunka kol tenkinama salyga <25
  --$i++ dideja kas skaiciu-; $1+=2 dideja kas du-*/
  for ($i=1; $i<25; $i++) {
    print "$i <br>";
  }
?>

<!--bootstrap js-->
<script src="./assets/js/jqery.js"></script>
<script src="./assets/js/bootstrap.js"></script>
<script src="./assets/js/bootstrap.bundle.js"></script>
</body>
</html>
