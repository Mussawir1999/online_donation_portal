<?php
$ID = mt_rand(1000,9999);
$foundationName = $_POST['foundationname'];
$city = $_POST['city'];
$postalcode = $_POST['postalcode'];
$IBAN = $_POST['FIban'];
$Desc = $_POST['Description'];
//database connection

$conn = new mysqli('localhost','root','','onlinedonation');
if($conn->connect_error){
  die('Connection Failed : ' .$conn->connect_error);
    
}else{
$stmt = $conn->prepare("insert into foundation(FID, FName, FLocation, FPostal, FIBAN, FDESC) values(?,?,?,?,?,?)");
$stmt->bind_param("isssss", $ID, $foundationName, $city, $postalcode, $IBAN, $Desc);
$stmt->execute();
$stmt->close();
$conn->close();
echo 'Record Added successfully! click <a href="index_Admin.php">here</a> to go back';
}
?>