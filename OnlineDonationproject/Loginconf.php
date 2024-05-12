<?php
$Username =$_POST['username'];
$Password =$_POST['password'];

if($Username=="admin"&&$Password=="password"){
 header("location: index_Admin.php");
exit();
}

?>