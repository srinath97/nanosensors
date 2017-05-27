<html>
<title>Update/Add new assets</title>
<body>
<?php/*
session_start();
require_once('credentials.php');
if(isset($_POST['submit']))
{

$stat=mysqli_connect('localhost','root','pass','nano') or die("Error connecting to database");
$query="INSERT INTO asset(name,model,sl,spec,mname,address,city,pin,state,phone,fax,email,sname,saddress,scity,spin,sstate,sphone,sfax,semail,sfcost,sicost,uses)VALUES("
mysqli_query($stat,$query);
echo "Data inserted successfully <br/>";
header("Location:adminpanel.php;Refresh:5");
*/?>
Fill the details below to add a new asset:
<br/>
<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
Model Number<input type="text" name="" maxlength="">
<br/>
Sl. No.<input type="text" name="" maxlength=""><br/>
Complete Specifications<input type="text" name="" maxlength=""><br/>

<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">
<input type="text" name="" maxlength="">

