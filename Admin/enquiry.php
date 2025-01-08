<?php
include('header.php');
include('conn.php');


$query="select * from enquiry";
$result=mysqli_query($conn,$query) or die(mysqli_error($conn));

?>

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Enquiry</h3>
 
</div>
<!-- <div class="col-auto text-end float-end ms-auto">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="add-student.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div> -->
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card card-table">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0 datatable">
<thead>
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Message</th>

</tr>
</thead>
<?php

while($row=mysqli_fetch_array($result))

{

    $id=$row['id'];
 

?>

<tbody>
<tr>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><a class="tt-location-tel" href="tel: <?php echo $row['mobile'];?>"><?php echo $row['mobile'];?></a></td>
<td><?php echo $row['subject'];?></td>
<td><?php echo $row['message'];?></td>

 

</tr>

</tbody>
<?php
}
            ?>
</table>
</div>
</div>
</div>
</div>
</div>
</div>

<footer>
<p>Designed by <a href=" " target="_blank">Invention Minds </a>| Copyright © 2023 Sapiens Clinic. All rights reserved.</p>
</footer>

</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- <script src="assets/plugins/datatables/datatables.min.js"></script> -->

<script src="assets/js/script.js"></script>
</body>


</html>