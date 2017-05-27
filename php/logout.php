<html>
<body>
<?php
session_start();
require_once("credentials.php");
echo "You are being logged out,".$_SESSION['name'];
unset($_SESSION['name']);
header("Refresh:5;admin.php");
?>
</body>
</html>
