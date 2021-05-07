<?php
if (isset($_POST))
{
  $string = htmlentities($_POST['str']);

  echo str_replace(" ","_",$string);

}

 ?>
