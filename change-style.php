<?php 
$brand = $_GET['brand'];
setcookie ('style',$brand,false,"/",false);

 $backURL = $_SERVER['HTTP_REFERER'];
// echo $brand;

 header("Location: ".$backURL); 
?>