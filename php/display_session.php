<html>
<?php
require_once('credentials.php');
?>
<body>
Logged in as: <?php echo $_SESSION['name'].".    "; ?> Click <a href="logout.php">here</a> to logout.
<h4><a href="adminpanel.php">Admin Panel</a></h4>
</body>
</html>
