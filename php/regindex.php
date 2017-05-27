<!DOCTYPE HTML>
<title>Registration details</title>
<body>
Enter your registration details:
<br/>
<?php
$name=$pass=$pass2=$email='';
$nameerr="";
$passerr="";
$pass2err="";
$emailerr="";
$flag=1;
if(isset($_POST['submit']))
{
    $name=trim($_POST['name']);
    $email=$_POST['email'];
    $pass=$_POST['pass'];
      if(empty(trim($name)))
           {
           $flag=0;
           $nameerr="Name needs to be entered";
           }
      if(!empty(trim($name)))
      {
         if(strlen(trim($name))<5)
         {   $nameerr="Name has to be atleast 5 characters in length!";
             $flag=0;
         }
         if(strlen(trim($name))>25)
         {
             $nameerr="Name cannot exceed 25 characters!";
             $flag=0;
         }
      }
      if($flag==1)
      {
         if(!(preg_match('/^[a-z\d_]{5,20}$/i', $name))) {
          $nameerr="Name can contain only letters and underscore";
          $flag=0;
          }
      }
      if(!empty($_POST['pass']))
      {
          if(strlen($_POST['pass'])<6)
          {
             $passerr="Password needs to be atleast 6 characters in length!";
             $flag=0;
          }
          if(strlen($pass)>16)
         {
             $passerr="Password cannot exceed 16 characters!";
             $flag=0;
         }
      }        
      if(empty($_POST['pass']))
           {
              $flag=0;
              $passerr="Password needs to be entered";
           }
      if(empty($_POST['pass2']))
           {
              $pass2err="Password needs to be retyped";
              $flag=0;
           }
      
      if(!empty($_POST['pass'])&&!empty($_POST['pass2'])&&($_POST['pass']!=$_POST['pass2']))
      {
             $pass2err="Passwords do not match";
              $flag=0;
      }  
      if(empty($_POST['email']))
      { 
            $emailerr="Email needs to be entered";
            $flag=0;
      }
      if(strlen($_POST['email'])>40)
      {
         $flag=0;
         $emailerr="Email cannot exceed 40 characters!";
      }
      if(!empty($_POST['email'])&&(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)))
      {
          $emailerr="Invalid email format";
      }

if($flag==1)
{
  $nameerr="";
$passerr="";
$pass2err="";
$emailerr="";
$stat=mysqli_connect('localhost','root','pass','nano') or die('Error connecting to server.Try again later');
$query2="SELECT * from reg0;";
$result=mysqli_query($stat,$query2);
$flag1=1;
while($row=mysqli_fetch_array($result))
{
    if(!(strcasecmp($name,$row[0])))
    {
     $flag1=0;
     echo "Username already exists. Use a different username. <br/>";
    }
    if(!(strcasecmp($email,$row[2])))
    {
      $flag1=0;
      echo "The email ID has been already registered! <br/>";
    }
    if($flag1==0)
       break;
}
if($flag1==1)
{
$blowfish_salt=bin2hex(openssl_random_pseudo_bytes(22));
$hash=crypt($_POST['pass'],"$2a$12$".$blowfish_salt);

$query="INSERT INTO reg0(name,pass,email)values('$name','$hash','$email')";
mysqli_query($stat,$query);
echo "Account has been successfully registered";
mysqli_close($stat);
$name="";
$email="";
}
}

}
?>
<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
Name:<input type="text" name="name" value="<?php echo $name;?>" maxlength='20'><?php echo $nameerr; ?><br/>
Enter Password:<input type="password" name="pass" value="<?php echo $pass; ?>" maxlength='16'><?php echo $passerr; ?><br/>
Retype Password:<input type="password" name="pass2" maxlength='16'><?php echo $pass2err; ?><br/>
Email:<input type="text" value ="<?php echo $email; ?>" name="email" maxlength='40'><?php echo $emailerr; ?><br/>
<input type="submit" value="Register" name="submit">
</form>
</body>
</html>

