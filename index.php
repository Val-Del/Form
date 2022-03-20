<!DOCTYPE html>
<html lang="en">   
    <?php include("includes/head.php");
    ?>
<body>
<main>


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
