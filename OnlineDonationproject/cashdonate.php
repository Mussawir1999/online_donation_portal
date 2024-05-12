<?php
session_start();
$DonatorID=mt_rand(1000,9999);
$TransactionID=mt_rand(1000,9999);
$PaymentID=mt_rand(1000,9999);
$Firstname=$_POST['Firstname'];
$Lastname=$_POST['Lastname'];
$Email=$_POST['Email'];
$PhoneNo=$_POST['phoneno'];
$foundation=$_POST['foundation'];
$IBAN=$_POST['Accnum'];
$pincode=$_POST['passcode'];
$amount=$_POST['amount'];
$query ="SELECT * from foundation where FName='$foundation' ";
$conn = new mysqli('localhost','root','','onlinedonation');







if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
      
  }else{
    $query_run= mysqli_query($conn,$query);

   while( $row = mysqli_fetch_array($query_run)){

    $FID = $row['FID'];
   }

  $stmt2 = $conn->prepare("insert into donators(DonatorID, Firstname, lastname, email, phonenumber) values(?,?,?,?,?)");
  $stmt2->bind_param("issss", $DonatorID, $Firstname, $Lastname, $Email, $PhoneNo);
  $stmt = $conn->prepare("insert into cashdonation(TransactionID, DonatorID, FID, PaymentID, Amount) values(?,?,?,?,?)");
  $stmt->bind_param("iiiii", $TransactionID, $DonatorID, $FID, $PaymentID, $amount);
  $stmt3=$conn->prepare("insert into paymentdetails(PaymentID, DonatorIBAN, pincode)values(?,?,?)");
  $stmt3->bind_param("iss",$PaymentID, $IBAN, $pincode);
  $stmt->execute();
  $stmt2->execute();
  $stmt3->execute();
  $stmt->close();
  $stmt2->close();
  $stmt3->close();
  $conn->close();
  $_SESSION['message'] = "Thank you for your Donation!";
  $_SESSION['msg_type'] = "Success";
  header("location: ContributeMoney.php");
}









?>