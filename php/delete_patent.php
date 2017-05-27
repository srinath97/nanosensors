<html>
<title>Remove patent</title>
<body>
<h4>Remove a patent</h4>
<p>Please select the patent which you wish to delete </p>
<i><u><b>Published</b></u><br/></i><br/>
<?php
$stat=mysqli_connect('localhost','root','pass','nano')or die("Error connecting to database");
$query="SELECT * FROM patent0";
$sl=1;
$result=mysqli_query($stat,$query);

while($row=mysqli_fetch_array($result))
{
   if($row[3]=="published")
     {
     echo $sl.". ".$row[0].", ";?><font color="red"><i><?php echo "\"".$row[1]."\" </i></font color>,"; echo "<b>".$row[2]; echo "<br/>";
     
     echo '<a href="remove_patent.php?id='.$sl.'&amp;name='.$row['name'].'&amp;title='.$row['title'].'&amp;id='.$row['id'].'&amp;type='.$row['type'].'">Remove</a>';
     echo "<br/>";
     $sl++;      
}
}
?>
<br/>
<i><u><b>Filed</b></u><br/><br/></i></b>

<?php
$sl=1;
$query="SELECT * FROM patent0";
$result=mysqli_query($stat,$query);
while($row=mysqli_fetch_array($result))
{
   if($row[3]=="filed")
   {
     echo $sl.". ".$row[0].", ";?><font color="red"><i><?php echo "\"".$row[1]."\" </i></font color>,"; echo "<b>Ref ID:".$row[2]; echo "<br/>";
      echo "<br/>";
     echo '<a href="remove_patent.php?sl='.$sl.'&amp;name='.$row['name'].'&amp;title='.$row['title'].'&amp;id='.$row['id'].'&amp;type='.$row['type'].'">Remove</a>';
     echo "<br/>";
     $sl++; 
   }
}
?>
</body>
</html>
