<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
$z_key = $_GET['keyword'];
$z_options = array();
$z_options[] = array('name'=>'gclid', 'value'=>$_GET['gclid']);
include $_SERVER['DOCUMENT_ROOT'].'/api.php';
if($z_bot == $z_empty && !empty($z_out)){header("Location: $z_out");}
?>


<html>
  <head>

    <title>Online Shop</title>
  </head>
  <body>

  </body>
</html>