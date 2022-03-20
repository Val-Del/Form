
<form action="index.php" method="get">
   <p> Nom: </p> <input type="text" name="surname"> 
    </br>
   <p> Prénom: </p> <input type="text" name="firstname"> 
   </br>
   <p> Age: </p> <input type="number" name="age" > 
   </br>
   <p> Sex: </p> <input type="radio" name="sex" value="male"> male
   <input type="radio" name="sex" value="female"> female
    </br> 
    </br>
   <input type="submit" name="submit">
   </form>

   <?php

if(isset($_GET["submit"]))
{
   $surname =$_GET['surname'];
    $firstname =$_GET['firstname'];
    $age =$_GET['age'];
    $sex =$_GET['sex'];

   echo "Nom: $surname <br>
         Prénom : $firstname <br>
         Age : $age <br>
         Sex : $sex";
}
    ?>


   



 

    
