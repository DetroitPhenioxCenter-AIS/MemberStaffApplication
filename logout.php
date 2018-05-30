<?php
session_start();
unset($_SESSION['u_id']);
session_destroy();
if(isset($_GET['logout']) && $_GET['logout'] == 'admin'){ 
 header("Location: adminlogin.php");
}
if(isset($_GET['logout']) && $_GET['logout'] == 'staff'){ 
 header("Location: userlogin.php");
}
if(isset($_GET['logout']) && $_GET['logout'] == 'mem'){ 
 header("Location: memberlogin.php");
}
exit;
?>
