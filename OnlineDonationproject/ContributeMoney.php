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
		<title>Donate Cash</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://kit.fontawesome.com/fa2aacf6e7.js" crossorigin="anonymous"></script>
        <link href="home.component.css" rel="stylesheet" />
        <link href="header.component.css" rel="stylesheet" type="text/css">
        <link href="footer.component.css" rel="stylesheet" type="text/css">
        <link href="contact.component.css" rel="stylesheet" />		
        <link href="userdonate.component.css" rel="stylesheet" />		
<header>
 
      <nav class ="navbar navbar-expand-md navbar-dark bg-dark">
        <div><a id="left-nav" class="navbar-brand">OnlineDonation inc.</a></div>
        
<ul class="navbar-nav">

<li><a href="index.html" class="nav-link">Home</a></li>

<li ><a href="ContributeMoney.php" class="nav-link">Contribute Money</a></li>

<li ><a href="DonateItems.php" class="nav-link">Donate Items</a></li>

<li><a href="ContactUs.html" class="nav-link">Contact Us</a></li>

<li><a href="AboutUs.html" class="nav-link">About Us</a></li>

<button type="button" onclick="window.open('SignIn.html');" class="btn btn-success" style='margin-right:16px'>Sign in</button>
<script>
   
</script>
</ul>

</nav>
</header>

	</head>


<br>
<br>
<br>
 <h1 style="text-align:center" id="ourteam">Thank You for your contribution! Please scroll down to continue</h1>
 
  <section class="container">
    <div class="illustration text-center img-fluid">
        <img src="donation.svg" class="img-fluid" alt="Donate"> 
    </div>
        </section>


  <br>
  <br>
<div class="container">
  <div class="row">
      <div class="col-md-6 col-lg-6 offset-lg-3">
          
          <form action="cashdonate.php" method="POST">
              <fieldset>
                  <div class="form-group">
                      <label for="Firstname">First Name</label>
                      <input required type="text" name="Firstname" id="Firstname"
                          class="form-control phone" maxlength="15" placeholder="First Name" data-validate = "Please Enter First Name" />
                  </div> <br>

                  <div class="form-group">
                      <label for="Lastname">Last Name</label>
                      <input class="form-control" type="text" name="Lastname" id="Lastname" required
                          placeholder="Last Name" maxlength="15" data-validate = "Please Enter Last Name"/>
                  </div> <br>

                  <div class="form-group">
                      <label for="Email">Email</label>
                      <input class="form-control" type="text" name="Email" id="Email"
                          placeholder="Email" required maxlength="25" data-validate = "Valid email is required: ex@abc.xyz"/>
                      
                  </div> <br>

                  <div class="form-group">
                      <label for="phoneno">Phone No.</label>
                      <input class="form-control" type="text" name="phoneno" id="phoneno"
                          placeholder="Phone Number" maxlength="11" required data-validate = "Phone Number is Required"/>
                      
                  </div> <br>
                  <div class="form-group">
                      <label for="foundation">Foundation</label>
                      <select class="form-control" name="foundation">
                      <?php


$sqli = "SELECT * FROM foundation";
$result = mysqli_query($con, $sqli);
while ($row = mysqli_fetch_array($result)) {
echo '<option>'.$row['FName'].'</option>';
}

echo '</select>';

?>

                  </div> <br>

                  <div class="form-group">
                    <label for="Accnum">Bank Account</label>
                    <input class="form-control" required type="number" name="Accnum"
                        id="Accnum" maxlength="13" placeholder="IBAN" data-validate = "IBAN is required to Donate"/>
                </div> <br>
                <div class="form-group">
                  <label for="passcode">Passcode</label>
                  <input class="form-control" required type="Password"
                  maxlength="4" name="passcode"
                      id="passcode" placeholder="Passcode" data-validate = "Please Enter Passcode of your Account"/>
              </div> <br>
              <div class="form-group">
                <label for="amount">Amount</label>
                <input class="form-control" required type="number" name="amount"
                    id="amount" maxlength="5" placeholder="Amount" data-validate ="Amount cannot be empty!"/>
            </div> <br>
            
                                      <div class="form-group">
                      <input class="btn btn-success" style='margin-right:16px' type="submit" name="submit_reg" onclick="myfunc()" value="Donate">
                      <input class="btn btn-danger" style='margin-right:16px' type="reset" name="resetfed" value="Reset">
                      <script>function myfunc(){
alert("Thank You for your contribution!");

    }</script>
                    </div>
              </fieldset>
          </form>
      </div>

  </div>
</div>

<br>
<br>


		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</html>
<?php mysqli_close($con); ?>