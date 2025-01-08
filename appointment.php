<?php
include('conn.php');


$fnameError = '';
$lnameError = '';
$emailError = '';
$addressError = '';
$mobileError = '';
$dcnameError = '';
$dateError = '';
$apnoError = '';


$fname= '';
$lname= '';
$email= '';
$address= '';
$mobile= '';
$dcname= '';
$date= '';
$apno= '';
 



if (isset($_POST['submit'])) {

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$dcname = $_POST['dcname'];
$date = $_POST['date'];
$apno = $_POST['apno'];

 




    if (empty($_POST['fname'])) {
        $fnameError = "First Name is Required";
    } else {
        $fname = ($_POST["fname"]);
    }


	if (empty($_POST['lname'])) {
        $lnameError = "Last Name is Required";
    } else {
        $lname = ($_POST["lname"]);
    }


    if (empty($_POST['email'])) {
        $emailError = "Email is Required";
    } else
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $femailError = "Please enter a valid email";
    }

	if (empty($_POST['address'])) {
        $addressError = "Address is Required";
    } else {
        $address = ($_POST["address"]);
    }


	if (empty($_POST['mobile'])) {
        $mobileError = "Enter Mobile No";
    } else {

        if (!preg_match('/^[0-9]{10}+$/', $mobile) == true) {
            $mobileError = "Please enter valid mobile number";
        }
    }


    if (($_POST['dcname']) == 'Select') {
        $dcnameError = "Doctor Name is Required";
    }




    if (empty($_POST['date'])) {
        $dateError = "Date is Required";
    } else {
        $date = ($_POST["date"]);
    }


	if (empty($_POST['apno'])) {
        $apnoError = "Appointment is required";
    } else {
        $apno = ($_POST["apno"]);
    }




    if (!$fnameError &&!$lnameError &&!$emailError &&!$addressError &&!$mobileError &&!$dcnameError &&!$dateError &&!$apnoError  	)

	 {
        $query = "insert into appointment (fname,lname,email,address,mobile,dcname,date,apno) values
	( '$fname','$lname','$email','$address','$mobile','$dcname','$date','$apno')";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));


                 //get data from form  
// $name = $_POST['name'];
// $email= $_POST['email'];
// $number= $_POST['number'];

$to = "sapiensclinic@gmail.com";
$subject = "Mail From website";

$txt ="fname = ". $fname . "\r\n  Email = " . $email . "\r\n mobile =" . $mobile  . "\r\n dcname =" . $dcname ;
$headers = "From: noreply@yoursite.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
echo "<script type='text/javascript'>alert('Sent Successfull');
window.location='contact.php';
</script>";
    }
}


?>


















<?php
include('header.php');
?>
		<!-- Start Page Banner Area -->
		<div class="page-banner-area bg-8 pt-100">
			<div class="container">
				<div class="page-banner-content">
					<h2>Appointment</h2>
					<ul>
						<li>
							<a href="index-2.html">
								<i class="ri-home-8-line"></i>
								Home 
							</a>
						</li>
						 
						<li>
							<span>Appointment</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Banner Area -->
 
		<!-- Start Appointment Area -->
		<div class="appointments-area ptb-100">
			<div class="container">
				 

				<div class="appointments-form">
					<h2 style="color: #bb3225;">Book a <span style="color:  orange;">Appointment</span></h2>

					<form action="" method="POST">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label style="color: #bb3225;">First NAME</label>
									<input type="text" class="form-control" name="fname"  value="<?php echo $fname; ?>">
									<span class="error" style="color:red;"> <?php echo $fnameError; ?></span>
								</div>
                                

							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label style="color:  orange;">LAST NAME</label>
									<input type="text" class="form-control" name="lname"  value="<?php echo $lname; ?>">
									<span class="error" style="color:red;"> <?php echo $lnameError; ?></span>

								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label style="color: #bb3225;">EMAIL</label>
									<input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
									<span class="error" style="color:red;"> <?php echo $emailError; ?></span>

								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label style="color:  orange;">ADDRESS</label>
									<input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
									<span class="error" style="color:red;"> <?php echo $addressError; ?></span>

								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label style="color: #bb3225;">PHONE</label>
									<input type="number"  class="form-control" name="mobile" value="<?php echo $mobile; ?>">
									<span class="error" style="color:red;"> <?php echo $mobileError; ?></span>

								</div>
							</div>
							 
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label style="color:  orange;">CHOOSE DOCTOR NAME</label>
									<select class="form-select form-control" name="dcname" value="<?php echo $dcname; ?>">
									<option>
                                                <?php if (!empty($_POST['dcname'])) {print $_POST['dcname'];} else {print 'Select';}?>
                                            </option>
										<option value="Dr. Darshan Kumar . A jain">Dr. Darshan Kumar . A jain</option>
										<option value="Dr.Divya Sundaresh">Dr.Divya Sundaresh</option>
									</select>
									<span class="error" style="color:red;"> <?php echo $dcnameError; ?></span>

								</div>

							</div>
							 
							
				
							 
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label style="color: #bb3225;">DATE</label>
									<input type="datetime-local" class="form-control" name="date" value="<?php echo $date; ?>">
									<span class="error" style="color:red;"> <?php echo $dateError; ?></span>

								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label style="color:  orange;">APPOINTMENT NOTE</label>
									<textarea class="form-control" cols="30" rows="10" name="apno" value="<?php echo $apno; ?>"></textarea>
									<span class="error" style="color:red;"> <?php echo $apnoError; ?></span>

								</div>
							</div>

							 

							<div class="col-lg-12">
								<button type="submit" name="submit" class="default-btn active">
									Make an appointment
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- End Appointment Area -->

		<!-- Start Dark Mode Area -->
		 
		<!-- End Dark Mode Area -->

		<!-- Start Footer Area -->
		 <?php
		 include('footer.php');
		 ?>
		<!-- End Footer Area -->

		<!-- Start Copyright Area -->
	 
		<!-- End Copyright Area -->

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="ri-arrow-up-s-fill"></i>
			<i class="ri-arrow-up-s-fill"></i>
		</div>
		<!-- End Go Top Area -->

        <!-- Links of JS File -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/meanmenu.min.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
		<script src="assets/js/swiper-bundle.min.js"></script>
		<script src="assets/js/appear.min.js"></script>
		<script src="assets/js/odometer.min.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script src="assets/js/jspdf.debug.js"></script>
		<script src="assets/js/form-validator.min.js"></script>
		<script src="assets/js/contact-form-script.js"></script>
		<script src="assets/js/ajaxchimp.min.js"></script>
		<script src="assets/js/custom.js"></script>
    </body>


</html>