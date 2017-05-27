<html>
<body>
<h3>List of patents</h3>
<?php 
$stat=mysqli_connect('localhost','root','pass','nano')or die("Error connecting to database");
?>
<i><u><b>Published</b></u><br/></i>
<br/>
<?php
$sl=1;
$query="SELECT * FROM patent0";
$result=mysqli_query($stat,$query);
while($row=mysqli_fetch_array($result))
{
   if($row[3]=="published")
     {
     echo $sl.". ".$row[0].", ";?><font color="red"><i><?php echo "\"".$row[1]."\" </i></font color>,"; echo "<b>".$row[2]; echo "<br/>";
     $sl++; 
     }
}
?>
<br/>
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
     $sl++; 
   }
}
?>
</body>
</html>
