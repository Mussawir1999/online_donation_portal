<?php
$ID = mt_rand(1000,9999);
$CName = $_POST['cname'];
$CEmail = $_POST['cemail'];
$Cdesc = $_POST['cdesc'];

//database connection

$conn = new mysqli('localhost','root','','onlinedonation');
if($conn->connect_error){
  die('Connection Failed : ' .$conn->connect_error);
    
}else{
$stmt = $conn->prepare("insert into contact(Cid, CName, CEmail, CDesc) values(?,?,?,?)");
$stmt->bind_param("isss", $ID, $CName, $CEmail, $Cdesc);
$stmt->execute();
$stmt->close();
$conn->close();
header("location: ContactUs.html");
}
?>