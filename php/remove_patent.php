<html>
<title>Confirm patent removal</title>
<body>
<?php
$name=$_GET['name'];
$title=$_GET['title'];
$id=$_GET['id'];
$type=$_GET['type'];
if(isset($_POST['remove']))
{
   if(isset($_POST['f']))
   {
     if($_POST['f']=="yes")
      {
        $stat=mysqli_connect('localhost','root','pass','nano')or die("Error connecting to database");
        $query="DELETE FROM patent0 WHERE name=$name AND title=$title AND id=$id AND type=$type";
       mysqli_query($stat,$query);
       echo "The patent has been successfully removed <br/>";
      }
      else
      {
        echo "not deleted <br/>";
      }
    }
    else
    {
        echo "Confirm deletion below! Yes/No <br/>";
    }
}
?>
<h4>Confirm removal of following patent:</h4>
Patent authors: <?php echo $_GET['name']; ?> <br/>
Patent title: <?php echo $_GET['title']; ?> <br/>
Patent no./Ref ID: <?php echo $_GET['id']; ?> <br/>
Type: <?php echo $_GET['type']; ?> <br/>
<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
Are you sure you want to remove this patent? <input type="radio" name="f" value="yes">Yes <input type="radio" name="f" value="no">No
<br/>
<input type="submit" value="REMOVE PATENT" name="remove">
</body>
</html>

