<?php

$DonatorID=mt_rand(1000,9999);
$ItemID=mt_rand(1000,9999);
$Firstname=$_POST['Firstname'];
$Lastname=$_POST['Lastname'];
$Email=$_POST['Email'];
$PhoneNo=$_POST['phoneno'];
$foundation=$_POST['foundation'];
$itemtype=$_POST['a'];
$itemquantity=$_POST['q'];
$query ="SELECT * from foundation where FName='$foundation' ";
$conn = new mysqli('localhost','root','','onlinedonation');


session_start();




if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
      
  }else{
    $query_run= mysqli_query($conn,$query);

   while( $row = mysqli_fetch_array($query_run)){

    $FID = $row['FID'];
   }

  $stmt2 = $conn->prepare("insert into donators(DonatorID, Firstname, lastname, email, phonenumber) values(?,?,?,?,?)");
  $stmt2->bind_param("issss", $DonatorID, $Firstname, $Lastname, $Email, $PhoneNo);
  $stmt = $conn->prepare("insert into itemdonations(ItemID, DonatorID, FID, ItemType, ItemQuantity) values(?,?,?,?,?)");
  $stmt->bind_param("iiiss", $ItemID, $DonatorID, $FID, $itemtype, $ItemID);
  $stmt->execute();
  $stmt2->execute();
  $stmt->close();
  $stmt2->close();
  $conn->close();
  $_SESSION['message'] = "Thank you for your Donation!";
  $_SESSION['msg_type'] = "Success";
  header("location: DonateItems.php");

  
}









?>