<form action="get" action="index.php">
<input type="submit" name="callform" value="callform">
</form>


<?php

if(isset($_GET["callform"]))
{
include (form.php);
}
 ?>