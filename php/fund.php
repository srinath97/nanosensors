<html>
<title>Add funding agencies</title>
<body>
<?php
session_start();
require_once('credentials.php');
require_once('display_session.php');
?>
Enter details of the new funding agency:<br/>
<?php
$no=$title=$agency=$amount=$duration="";
if(isset($_POST['post']))
{
$title=$_POST['title'];
$agency=$_POST['fund'];
$amount=$_POST['amount'];
$duration=$_POST['duration'];
if(isset($_POST['f']))
$type=$_POST['f'];
if(isset($_POST['f1']))
$type2=$_POST['f1'];
$check=0;
if((trim($title)!='')&&(trim($agency)!='')&&(trim($amount)!='')&&(trim($duration)!='')&&(trim($type)!='')&&(trim($type2)!=''))
$check=1;
$stat=mysqli_connect('localhost','root','pass','nano')or die('Error connecting to database');
if($check==1)
{
    $query="INSERT INTO fund0(title,agency,amount,duration,type,type2)VALUES('$title','$agency','$amount','$duration','$type','$type2')";
mysqli_query($stat,$query);
echo "Data successfully added. Click "."<a href='fund_index.php'>here</a>"." to view it. Click "."<a href='adminpanel.php'>here</a>"." to go back to the admin panel";
}
else
{
echo "Data missing. Please fill all the entries<br/>";
}
}
?>
<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
Title of project: <br/><textarea rows="5" cols="50" name="title" value="<?php echo $title;?>"></textarea><br/><!--<input type="text" name="title" value="<?php echo $title;?>"><br/>-->
Funding agencies:<input type="text" name="fund" value="<?php echo $agency;?>"><br/>
Amount(in Lakhs):<input type="text" name="amount" value="<?php echo $amount;?>"><br/>
Duration:<input type="text" name="duration" value="<?php echo $duration;?>"><br/>
Select project type: <input type="radio" name="f" value="Completed">Completed<input type="radio" name="f" value="Being implemented">Being implemented<br/>
Select project type: <input type="radio" name="f1" value="Principal Investigator">Principal Investigator<input type="radio" name="f1" value="Co- Principal Investigator">Co- Principal Investigator
<br/><input type="submit" value="Submit" name="post">
</form>
</body>
</html>
