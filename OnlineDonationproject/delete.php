<?php
$nm = $_GET['delete'];
echo $_GET['delete'];
$conn = new mysqli('localhost','root','','onlinedonation');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
$quer="DELETE from foundation where FID='$nm'";
if ($conn->query($quer) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
header("location: Foundations.php");


?>