<?php session_start();?>
<?php include 'dbconnection.php';?>
<?php include 'Nav.php';?>
<br><br><br><br><br><br>
<html>
<head>
 	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<style>

*{
 font-family: 'Poppins', sans-serif
}
.container .row a {
    -webkit-transition: color 1s;
    transition: color 1s;
    text-decoration:none;
}
.container .row a:hover {
    color: yellow;
}
</style>
<body>

	



	<div class="container">
	<div class="row">
<p>Home | <a href="ContactUs.php">Contact Us</a></p>
</div>
	<div class="row "> 
	<div class="col">
	<div class="text-center" style="font-family:Copperplate, Papyrus, fantasy;">
	<b><a href="ContactUs.php" style="font-size:30px">Customer Care</a></b>
	<p style="font-weight:bold">"Our customers mean the world to us, and we love hearing from you"</p>
	<i class="fas fa-phone fa-1x"> Office-Phone : 09-750041129</i><br>
	<i class="fas fa-envelope fa-1x">   Cc_Department : customercare@mtbookshop.com.mm</i><br>
	<i class="fas fa-map-marker-alt fa-1x"> Head Office : No.44/A, Pyi Road, Kamaryut, Yangon</i>
	</div>
	</div>
	</div><br><br>
	<div class="row">
	<div class="col">
	<div class="card h-100">
	<div class="card-body">
	<h2>Contact Us</h2><br>
	<form>
	<div class="mb-3">
    <label for="firstname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="fname" required>

  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lname" required>

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="ph" required>

  </div>
  <div class="mb-3">
    <label for="msg" class="form-label">Message</label>
    <textarea name="msg" id="msg" required class="form-control"></textarea>
  </div>
  <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Submit
</button>
 <!--  <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-dark" style="float:right">Submit</button> -->
</form>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Thanks for mesagging us.We will contact you soon! <i class="fa fa-heart"></i>      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
 var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()</script>
	</div>
	</div>
	</div>
	<div class="col">
	<div class="card h-100">
      <?php include 'googlemap.php';?>
<!--       <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top" alt="Hollywood Sign on The Hill"/> -->
      <div class="card-body">
       <center> <h5 class="card-title">Yangon Shop</h5></center>
       <p>No. 55, Baho Road, Corner of Baho Road & Ahlone Road, (Near Eugenia Restaurant), Ahlone Township, Yangon, Myanmar.</p>
		<p>(951) 221 271, 212 409, 09 730 15993, 09 731 47732</p>
<p>info@mtbookshop.com</p>

       
      </div>
    </div>
	
	</div>
	</div>
	
	</div>
	
</body>
</html>
<br><br><br>

<?php include 'Footer.php';?>

