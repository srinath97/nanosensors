<!DOCTYPE html>
<title>Admin Login</title>
<body>
<?php
session_start();
if(isset($_SESSION['name']))
    header("Location:adminpanel.php");
$name=$pass='';
$err="";

if(isset($_POST['submit']))
{
    $name=trim($_POST['name']);
    $stat=mysqli_connect('localhost','root','pass','nano') or die("Error connecting to server");
    $query="SELECT * from reg0;";
    $result=mysqli_query($stat,$query);
    $flag=0;
    while($row=mysqli_fetch_array($result))
    {
        if(!strcasecmp($name,$row[0]))
        {
          if(crypt($_POST['pass'],$row['pass'])==$row['pass'])
          {  
             $_SESSION['name']=$row[0];
             //$err="You have successfully logged in!. You will be redirected to the admin panel in 5 seconds <br/>";
             header("Location:adminpanel.php");
             $flag=1;
             break;
          }
        }
    }
    if($flag==0)
    {
       $err="Invalid username(or)password. Please try again";
    }

}
?>
Enter your login credentials:<br/><br/>
<?php echo $err."<br/>"; ?>
<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
Username:<input type="text" value="<?php echo $name; ?>" name="name" maxlength='20'>
<br/>
Password:<input type="password" name="pass" value="<?php echo $pass; ?>"maxlength='16'>
<br/>
<input type="submit" name='submit' value="Login">
</form>
<br/>
Click <a href="regindex.php">here</a> to register for an admin account.
</body>
</html>
