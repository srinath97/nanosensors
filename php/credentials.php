<?php
if(!isset($_SESSION['name']))
{
  header("Location:unauthorized.php");
}
?>
