<?php 

 
require('config.php');

session_start();

session_unset();

session_destroy();

header("Location: http://localhost/AumClassproject/login/");

mysqli_close($conn);

?>