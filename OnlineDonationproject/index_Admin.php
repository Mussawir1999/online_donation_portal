<?php
$server="localhost";
$userid ="root";
$Password = "";
$myDB = "onlinedonation";
$con = mysqli_connect($server,$userid,$Password,$myDB);
if (mysqli_connect_errno()) {
# code...
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT COUNT(*) FROM foundation";
$result = mysqli_query($con, $sql);
$foundation = mysqli_fetch_assoc($result)['COUNT(*)'];

$sql2 = "SELECT COUNT(*) FROM itemdonations";
$result = mysqli_query($con, $sql2);
$item = mysqli_fetch_assoc($result)['COUNT(*)'];

$sql3 = "SELECT COUNT(*) FROM donators";
$result = mysqli_query($con, $sql3);
$user = mysqli_fetch_assoc($result)['COUNT(*)'];

$sql4 = "SELECT COUNT(*) FROM cashdonation";
$result = mysqli_query($con, $sql4);
$cash = mysqli_fetch_assoc($result)['COUNT(*)'];





?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1>
		<title>Admin</title>
        <meta name="keywords" content="Our Milestones, 16, 700, 37, 40">
        <title>Admin</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://kit.fontawesome.com/fa2aacf6e7.js" crossorigin="anonymous"></script>
        <link href="home.component.css" rel="stylesheet" />
        <link href="header.component.css" rel="stylesheet" type="text/css">
        <link href="footer.component.css" rel="stylesheet" type="text/css">
        <link href="contact.component.css" rel="stylesheet" />		
        <link rel="stylesheet" href="milestone.component.css" media="screen">
        <script class="u-script" type="text/javascript" src="/src/assets/jquery.js" defer=""></script>
        <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
        <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">

      <script type="application/ld+json">{
          "@context": "http://schema.org",
          "@type": "Organization",
          "name": ""
  }</script>
      <meta name="theme-color" content="#478ac9">
      <meta property="og:title" content="About">
      <meta property="og:type" content="website">




<header >
 
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

<body data-home-page="About.html" data-home-page-title="About" class="bg-primary">


      <div class="u-align-center u-section-1" id="carousel_63cd" data-image-width="1125" data-image-height="750">
        <div class="u-clearfix u-sheet u-valign-bottom u-sheet-1">
          <h1 class="u-text u-text-body-alt-color u-text-1">Our Milestones</h1>
          <p class="u-text u-text-body-alt-color u-text-2">We connects nonprofits, donors, and companies in nearly every country in the world. We help fellow nonprofits access the funding, tools, training, and support they need to serve their communities.</p>
          <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
              <div class="u-align-center u-container-style u-list-item u-palette-2-base u-repeater-item u-list-item-1">
                <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-1">
                  <h2 class="u-align-center u-text u-text-3" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"> <?php echo $cash?></h2>
                  <p class="u-text u-text-4">Monetary Donations</p>
                </div>
              </div>
              <div class="u-align-center u-container-style u-list-item u-palette-2-base u-repeater-item u-list-item-2">
                <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
                  <h2 class="u-align-center u-text u-text-5" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"> <?php echo $user?></h2>
                  <p class="u-text u-text-6">Total Contributers</p>
                </div>
              </div>
              <div class="u-align-center u-container-style u-list-item u-palette-2-base u-repeater-item u-list-item-3">
                <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3">
                  <h2 class="u-align-center u-text u-text-7" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"><?php echo $foundation?></h2>
                  <p class="u-text u-text-8">Foundations registered </p>
                </div>
              </div>
              <div class="u-align-center u-container-style u-list-item u-palette-2-base u-repeater-item u-list-item-4">
                <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-4">
                  <h2 class="u-align-center u-text u-text-9" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"> <?php echo $item?></h2>
                  <p class="u-text u-text-10">Item Donations</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      

	<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>     
      
    </body>

</html>