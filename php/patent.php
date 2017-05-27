<html>
<?php
session_start();
require_once('credentials.php');
require_once('display_session.php');
?>
<body>
<h3>New patent form:</h3>
Enter details of the new patent:<br/><br/>
<?php
$patent=$title=$id="";
if(isset($_POST['submit']))
{
     $patent=$_POST['pat'];
     $title=$_POST['title'];
     $id=$_POST['id'];
     if(isset($_POST['f']))
     $type=$_POST['f'];
     if((trim($patent)!="")&&(isset($_POST['f']))&&(trim($title)!="")&&(trim($id)!=""))
     {
      $stat=mysqli_connect('localhost','root','pass','nano') or die("Error connecting to database");
      $query="INSERT INTO patent0(name,title,id,type)VALUES('$patent','$title','$id','$type')";
      mysqli_query($stat,$query);
      echo "Data successfully added. Click "."<a href='patent_index.php'>here</a>"." to view it. Click "."<a href='adminpanel.php'>here</a>"." to go back to the admin panel";
     }
     else
     {
      echo "Data missing. Please fill all the data <br/><br/>";
     }
}


?>

<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
Patent Authors:<br/><textarea rows="5" cols="50" name="pat" value="<?php echo $patent; ?>"></textarea>
<br/>
Patent title:<br/><textarea rows="5" cols="50" name="title" value="<?php echo $title; ?>"></textarea>
<br/>
Patent no./Ref ID:<br/><textarea rows="5" cols="50" name="id" value="<?php echo $id; ?>"></textarea>
<br/>

Select type: <input type="radio" name="f" value="published">Published
<input type="radio" name="f" value="filed">Filed<br/>
<input type="submit" name="submit" value="Submit">
</body>
</html>
