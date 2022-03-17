
<form action="index.php" method="get">
   Nom: <input type="text" name="surname"> 
    </br>
   Prénom: <input type="text" name="firstname"> 
   </br>
   Age: <input type="number" name="age" > 
   </br>
   Sex: <input type="radio" name="sex" value="male"> male
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

    echo "Nom: $surname <br> Prénom : $firstname <br>
    Age : $age <br> Sex : $sex";
}
    ?>


   



 

    
