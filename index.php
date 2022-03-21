<!DOCTYPE html>
<html lang="en">   
    <?php include("includes/head.php");
    ?>
<body>
<main>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/diablo" alt="Card image cap">
  <div class="card-body">
    <?php


$diablo = array('nom:' => 'diablo3',
'développeur:'=>'blizzard',
'date:'=>'2012',
'platform:' => 'multi');
foreach($diablo as $x => $x_value) {
  echo $x ." " . $x_value . "<br>";
}
echo "<br>";
?>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/hs" alt="Card image cap">
  <div class="card-body">
  <?php

$hearthstone = array('nom:' => 'hearthstone',
'développeur:'=>'blizzard',
'date:'=>'2014',
'platform:' => 'multi');


foreach($hearthstone as $x => $x_value) {
  echo $x ." " . $x_value . "<br>";
}
?>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>



<br>
<?php 
$testprint = "on s'amuse avec print";
print_r ($testprint);

?>

<br>
<?php
$testimplode = array('on','implode','mot');
echo implode("espace", $testimplode);
?>

<br>

<?php 
$premiermot = "ajoute";
$secondemot = "sprintf";
$txtentier = sprintf("on %s des mots avec la function %s", $premiermot, $secondemot);
echo $txtentier;


?>

<br>

<?php

echo date("H \h\ i \m\ s");

?>
<br>
<!-- <?php
$stagiairesnoms = array('valentin', 'Anne', 'JR', 'JB','yulliah', 'Omar');
echo $stagiairenoms [array_rand($stagiairesnoms)];
?> -->

<br>
<?php
echo (rand(1,100));
?>
<br>
<?php
$longueurstr = "c'est bien long";
echo strlen($longueurstr);

?>
<br>

<a href="index.php?add"><button>afficher formulaire</button></a>
<?php if(isset($_GET['add'])) {
  include('includes/form.php');
}
?>

<br>

<?php

$exemple0 = "Je devieNs MeIlLeur";
$exemple01 = strtolower($exemple0);

echo $exemple01;
for ($i = 0; $i <= 50; $i++) {
  echo "$i $exemple01 <br>";
}

?>

<?php

$exemple1 = "mooouaaaaaaaahhhhhhhhhhhh";
$str1 = strtoupper($exemple1);

echo $str1;

?>
<br>


<?php 
$exemple2 = 28.6;

$exemplevirgule = str_replace(".", ",","$exemple2");


echo "$exemplevirgule <br>";

?>





   <?php include("includes/header.php");
    ?>
  

  <?php include("includes/form.php");

   ?> 
  
   <?php include("includes/footer.php");
   ?>
</main>
</body>
</html>
