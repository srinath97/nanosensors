<html>
<title>Admin Panel</title>
<body>
<?php
session_start();
require_once('credentials.php');
require_once('display_session.php');
?>
<h2>
Welcome to the admin panel</h2>
<h4>Edit contents of the site. Contact the administrator for queries. </h4>
<h5><a href="update_assets.php">Add asset details</a></h5>
<h5><a href="fund.php">Add funding agency details</a></h5>
<h5><a href="patent.php">Add patent details</a></h3>
<br/>
</body>
</html>

