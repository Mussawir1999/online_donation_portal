<?php
$server="localhost";
$userid ="root";
$Password = "";
$myDB = "onlinedonation";$con = mysqli_connect($server,$userid,$Password,$myDB);
if (mysqli_connect_errno()) {
# code...
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Item Contributions</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://kit.fontawesome.com/fa2aacf6e7.js" crossorigin="anonymous"></script>
        <link href="home.component.css" rel="stylesheet" />
        <link href="header.component.css" rel="stylesheet" type="text/css">
        <link href="footer.component.css" rel="stylesheet" type="text/css">
        <link href="contact.component.css" rel="stylesheet" />
        <link href="itemtransaction.component.css" rel="stylesheet" />		
        <link rel="stylesheet" href="milestone.component.css" media="screen">
        <header>
 
      <nav class ="navbar navbar-expand-md navbar-dark bg-dark">
        <div><a id="left-nav" class="navbar-brand">OnlineDonation inc.</a></div>
        
<ul class="navbar-nav">

<li><a href="index_Admin.php" class="nav-link">Home</a></li>

<li><a href="Donators.php" class="nav-link">Donators</a></li>

<li><a href="Foundations.php" class="nav-link">Foundations</a></li>

<li><a href="CashTransactions.php" class="nav-link">Cash Transactions</a></li>

<li ><a href="ItemDonations.php" class="nav-link">Item Donations</a></li>

<li><a href="AddFoundations.html" class="nav-link" >Add Foundation</a></li>

<li><a href="Emails.php" class="nav-link">Emails</a></li>

<button onclick= "window.close();" class = "btn btn-danger" style='margin-right:16px'>Logout</button>

</ul>

</nav>
</header>

	</head>

<div class="panel panel-primary">
    <div class="panel-heading">
      <h2 id='Nametag'>Item Donations</h2>
    </div>
<br>
    <div class = "container">
        <div class = "row col-lg-12 col-sm-12">
      <table id="example" class="table table-striped table-bordered table-sm row-border hover" cellspacing="0" width="100%">

        <thead>
        
        <tr>
            <th >ItemID</th>
            <th >DonatorID</th>
            <th >FID</th>
            <th >Item Type</th>
            <th >Item Quantity</th>
        </tr>
        </thead>
        <tbody>
<?php $sqli = "SELECT * FROM itemdonations";
$result = mysqli_query($con, $sqli);
while ($row = mysqli_fetch_array($result)) {
?>
        <tr>
            <td><?php echo $row['ItemID'];?></td>
            <td><?php echo $row['DonatorID'];?></td>
            <td><?php echo $row['FID'];?></td>
            <td><?php echo $row['ItemType'];?></td>
            <td><?php echo $row['ItemQuantity'];?></td>
            </tr>

          <?php  } ?>
        </tbody>
      </table>
    </div>
  </div>
  </div>


		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</html>