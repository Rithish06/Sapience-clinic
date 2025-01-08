<?php
$title = "Contact Us | Sapiens Clinic";
$description = "Choose Bangalore’s premier hand surgery hospital and Ophthalmologist hospital for expert care and advanced treatment options. Book your consultation today";
include('conn.php');


$nameError = '';
$mobileError = '';
$emailError = '';
$subjectError = '';
$messageError = '';

$name = '';
$mobile = '';
$email = '';
$subject = '';
$message = '';




if (isset($_POST['submit'])) {

    $name = $_POST['name'];
	$email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];




    if (empty($_POST['name'])) {
        $nameError = "Name is required";
    } else {
        $name = ($_POST["name"]);
    }



    if (empty($_POST['email'])) {
        $emailError = "Email is required";
    } else {
        $email = ($_POST["email"]);
    }

    if (empty($_POST['mobile'])) {
        $mobileError = "Mobile is required";
    } else {
        $mobile = ($_POST["mobile"]);
    }


    if (empty($_POST['subject'])) {
        $subjectError = "subject is required";
    } else {
        $subject = ($_POST["subject"]);
    }




    if (empty($_POST['message'])) {
        $messageError = "Message is required";
    } else {
        $message = ($_POST["message"]);
    }




    if (!$nameError && !$emailError && !$mobileError && !$subjectError && !$messageError) {
        $query = "insert into enquiry (name,email,mobile,subject,message) values
	('$name','$email','$mobile','$subject','$message')";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));


         //get data from form  
// $name = $_POST['name'];
// $email= $_POST['email'];
// $number= $_POST['number'];

$to = "naveenjessie21@gmail.com";
$subject = "Mail From website";

$txt ="name = ". $name . "\r\n  Email = " . $email . "\r\n mobile =" . $mobile  . "\r\n subject =" . $subject ;
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
<div class="page-banner-area bg-23 pt-100" style="background-image: url(images/SC7.jpg)">
	<div class="container">
		<div class="page-banner-content">
			<h2>Contact Us</h2>
			<ul>
				<li>
					<a href="">
						<i class="ri-home-8-line"></i>
						Home
					</a>
				</li>
				<li>
					<span>Contact Us</span>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Page Banner Area -->

<!-- Start Map Area -->

<div class="contact-informetion-area ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<h4>Clinic Location</h4>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.475084671423!2d77.56893461220703!3d13.005390086790818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae172329d41e0b%3A0x415cd1c76d7ec943!2sDr%20Darshan%20Kumar%20A.%20Jain!5e0!3m2!1sen!2sin!4v1683783254060!5m2!1sen!2sin" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 			</div>

			 <div class="col-lg-2 col-md-4">
			 </div>

			 <div class="col-lg-4 col-md-4">
			 <h4>Parking Location</h4>

			 <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3887.417989085552!2d77.56890187507713!3d13.009032987309787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTPCsDAwJzMyLjUiTiA3N8KwMzQnMTcuMyJF!5e0!3m2!1sen!2sin!4v1691076582394!5m2!1sen!2sin" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					
			
 			</div>
		</div>
	</div>
 
<!-- End Map Area -->

<!-- Start Contact Informetion Area -->
<div class="contact-informetion-area ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<div class="left-informetion">
					<h2 style="color: orange;">Contact Information</h2>
					<ul>
						<li>
							<span>ADDRESS:</span>
							18/3, 1st Main Ranganathapura 18th cross, entrance, opposite Sankey tank, Malleshwaram, Bengaluru, Karnataka 560003
						</li>
						<li>
							<span>EMAIL US:</span>
							<a href=""> sapiensclinic@gmail.com </a>
						</li>

						<li>
							<span>PHONE:</span>
							<a href="tel: 7892556378"> 7892556378</a>
						</li>
						<br>
						<li>
						<span><b>For Emergency Contact Details:</b></span>
						</li>
						<br>
						<li>
							<span>Dr Darshan Kumar A Jain <a href="tel: 8095679126"> 8095679126</a></span>
						</li>
						<li>
							<span class="mt-5">Dr Divya Sundaresh :
								<a href="tel: 6364675657"> 6364675657</a></span>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-lg-4 col-md-4">
				<div class="right-informetion">
					<h1 style="color: rgb(187,50,37);">Orthopedic</h1>


					<h5> Sapiens clinic: Mon to sat 12:00 noon to 8:00 PM, Sunday Holiday</h5>

					<br><br>

					<h5> Appollo Spectra - Koramangala : Wednesday and Saturday, 10:00 AM to 1:00 PM</h5>
					
					<br>
					
					<h5> Rxdx Healthcare, Whitefiled : Every Monday Morning, 10:00 AM to 12:00 PM</h5>


				</div>
			</div>


			<div class="col-lg-4 col-md-4">
				<div class="right-informetion">


					<h1 style="color: rgb(187,50,37);">Ophthalmology </h1>


					<h5> Sapiens clinic : Ophthalmology : Morning 10:00am to 03:00pm </h5>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Contact Informetion Area -->

<!-- Start Contact Area -->
<div class="contact-area pb-100">
	<div class="container">
		<div class="contact-form">
			<h3>Send message</h3>

			<form method="POST" action="">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<label>NAME</label>
							<input type="text" name="name" class="form-control">
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<label>EMAIL</label>
							<input type="email" name="email" class="form-control">
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<label>PHONE</label>
							<input type="text" name="mobile" class="form-control">
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<label>SUBJECT</label>
							<input type="text" name="subject" class="form-control">
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="col-lg-12">
						<div class="form-group">
							<label>YOUR MESSAGE</label>
							<textarea name="message" class="form-control" cols="30" rows="6"></textarea>
							<div class="help-block with-errors"></div>
						</div>
					</div>


					<div class="col-lg-12 col-md-12 text-center">
						<button type="submit" name="submit" class="default-btn active">
							Send message
						</button>
						<div id="msgSubmit" class="h3 text-center hidden"></div>
						<div class="clearfix"></div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- End Contact Area -->

<!-- Start Knock us Area -->

<!-- End Knock us Area -->

<!-- Start Dark Mode Area -->

<!-- End Dark Mode Area -->

<!-- Start Footer Area -->
 
<!-- End Copyright Area -->

<!-- Start Go Top Area -->
<div class="go-top">
	<i class="ri-arrow-up-s-fill"></i>
	<i class="ri-arrow-up-s-fill"></i>
</div>
<!-- End Go Top Area -->

<!-- Links of JS File -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
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