<?php session_start();?>
<?php include 'dbconnection.php';?>
 <?php include 'Nav.php';?>
 <br> <br> <br> <br> <br>  <br>
<html>
<head>
<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<!--     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

body {
    font-family: "Poppins", sans-serif;
    color: #444444;
}

a,
a:hover {
    text-decoration: none;
    color: inherit;
}

.section-products {
    padding: 80px 0 54px;
}

.section-products .header {
    margin-bottom: 50px;
}

/* .section-products .header h3 { */
/*     font-size: 1rem; */
/*     color: #fe302f; */
/*     font-weight: 500; */
/* } */

.section-products .header h2 {
    font-size: 2.2rem;
    font-weight: 400;
    color: #444444; 
}

.section-products .single-product {
    margin-bottom: 26px;
}

.section-products .single-product .part-1 {
    position: relative;
    height: 290px;
    max-height: 290px;
    margin-bottom: 20px;
    overflow: hidden;
}

.section-products .single-product .part-1::before {
		position: absolute;
		content: "";
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: -1;
		transition: all 0.3s;
}

.section-products .single-product:hover .part-1::before {
		transform: scale(1.2,1.2) rotate(5deg);
}

.section-products #product-1 .part-1::before {
    background: url("image/b2.png") no-repeat center;
    background-size: cover;
		transition: all 0.3s;
}

.section-products #product-2 .part-1::before {
    background: url("image/b4.jpg") no-repeat center;
    background-size: cover;
}

.section-products #product-3 .part-1::before {
    background: url("image/b20.jpg") no-repeat center;
    background-size: cover;
}

.section-products #product-4 .part-1::before {
    background: url("image/b21.jpg") no-repeat center;
    background-size: cover;
}
.section-products #product-5 .part-1::before {
    background: url("image/b22.jpg") no-repeat center;
    background-size: cover;
}
.section-products #product-6 .part-1::before {
    background: url("image/b23.jpg") no-repeat center;
    background-size: cover;
}
.section-products #product-7 .part-1::before {
    background: url("image/b24.jpg") no-repeat center;
    background-size: cover;
}
.section-products #product-8 .part-1::before {
    background: url("image/b35.jpg") no-repeat center;
    background-size: cover;
}
.section-products #product-9 .part-1::before {
    background: url("image/b25.jpg") no-repeat center;
    background-size: cover;
}
.section-products #product-10 .part-1::before {
    background: url("image/b26.jpg") no-repeat center;
    background-size: cover;
}
.section-products #product-11 .part-1::before {
    background: url("image/b27.jpg") no-repeat center;
    background-size: cover;
}
.section-products #product-12 .part-1::before {
    background: url("image/b28.jpg") no-repeat center;
    background-size: cover;
}
.section-products #product-13 .part-1::before {
    background: url("image/b29.jpg") no-repeat center;
    background-size: cover;
		transition: all 0.3s;
}

.section-products #product-14 .part-1::before {
    background: url("image/b30.jpg") no-repeat center;
    background-size: cover;
}

.section-products #product-15 .part-1::before {
    background: url("image/b31.jpg") no-repeat center;
    background-size: cover;
}

.section-products #product-4 .part-1::before {
    background: url("image/b32.jpg") no-repeat center;
    background-size: cover;
}
.section-products #product-16 .part-1::before {
    background: url("image/b33.jpg") no-repeat center;
    background-size: cover;
}
.section-products #product-17 .part-1::before {
    background: url("image/b36.jpg") no-repeat center;
    background-size: cover;
}
.section-products #product-18 .part-1::before {
    background: url("image/b34.jpg") no-repeat center;
    background-size: cover;
}
.section-products #product-19 .part-1::before {
    background: url("image/b35.jpg") no-repeat center;
    background-size: cover;
}
.section-products .single-product .part-1 .discount,
.section-products .single-product .part-1 .new {
    position: absolute;
    top: 15px;
    left: 20px;
    color: #ffffff;
    background-color: #fe302f;
    padding: 2px 8px;
    text-transform: uppercase;
    font-size: 0.85rem;
}

.section-products .single-product .part-1 .new {
    left: 0;
    background-color: #444444;
}

.section-products .single-product .part-1 ul {
    position: absolute;
    bottom: -41px;
    left: 20px;
    margin: 0;
    padding: 0;
    list-style: none;
    opacity: 0;
    transition: bottom 0.5s, opacity 0.5s;
}

.section-products .single-product:hover .part-1 ul {
    bottom: 30px;
    opacity: 1;
}

.section-products .single-product .part-1 ul li {
    display: inline-block;
    margin-right: 4px;
}

.section-products .single-product .part-1 ul li p {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    background-color: #ffffff;
    color: #444444;
    text-align: center;
    box-shadow: 0 2px 20px rgb(50 50 50 / 10%);
    transition: color 0.2s;
}

.section-products .single-product .part-1 ul li p:hover {
    color: #fe302f;
}

.section-products .single-product .part-2 .product-title {
    font-size: 1rem;
}

.section-products .single-product .part-2 h4 {
    display: inline-block;
    font-size: 1rem;
}

.section-products .single-product .part-2 .product-old-price {
    position: relative;
    padding: 0 7px;
    margin-right: 2px;
    opacity: 0.6;
}

.section-products .single-product .part-2 .product-old-price::after {
    position: absolute;
    content: "";
    top: 50%;
    left: 0;
    width: 100%;
    height: 1px;
    background-color: #444444;
    transform: translateY(-50%);
}


.card {
    height: 130px;
    overflow: hidden;
    border: none;
    border-radius: 15px
}

.imagename {
    font-size: 14px;
    font-weight: bold
}
.card:hover {
  transform: scale(1.1);
}
.card {
  transition: transform 0.2s ease;
}
.card {
  box-shadow: 0 4px 6px 0 rgba(22, 22, 26, 0.18);
  border-radius: 0;
  border: 0;
}
.row a {
    -webkit-transition: color 1s;
    transition: color 1s;
    text-decoration:none;
}
.row a:hover {
    color: yellow;
}
 .container .btn-dark {
    color: #fff;
    background-color:black;
    border-color: #357ebd; /*set the color you want here*/
}
.container .btn-dark:hover, .btn-dark:focus, .btn-dark:active, .btn-dark.active, .open>.dropdown-toggle.btn-dark {
    color: #fff;
    background-color:  #ab47bc;
    border-color: #285e8e; /*set the color you want here*/
} 
</style>
<body>

<div class="container" style="color:white">

<div class="row">
<?php include 'Carousel.php';?>
</div>
<br>
<center><button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Shop Now
</button></center>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog text-dark">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-bullhorn"></i> Special Announcement </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Dear Customers, We offer free shippping on weekends! So, Don't lose your chance!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       <a href="ShowAll.php"> <button type="button" class="btn btn-primary">Go Shopping</button></a>
      </div>
    </div>
  </div>
</div>
<script>
 var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()</script>

<div class="row">
<section class="section-products" style="color:black">
		<div class="container">
				<div class="row justify-content-center text-center">
						<div class="col-md-8 col-lg-6">
								<div class="header">
										<h2>BEST SELLING BOOKS</h2>
								</div>
						</div>
				</div>
				<div class="row">
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-1" class="single-product">
										<div class="part-1">
										<span class="discount">Top-1</span>
												<ul>
<!-- 														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li> -->
														<p class="author-title" style="background-color:black;color:white">Author: Pone Nya Khin</p>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Beyonds Mountain</h3>										
												<h4 class="product-price">6,500 MMK</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-2" class="single-product">
										<div class="part-1">
												<span class="discount">Top-2</span>
												<ul>
												<p class="author-title" style="background-color:black;color:white">Author: Pone Nya Khin</p>
														
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Eain Mat Sat Kyo</h3>
												<h4 class="product-price">12,000 MMK</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
					<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-3" class="single-product">
										<div class="part-1">
												<span class="discount">Top-3</span>
												<ul>
												<p class="author-title" style="background-color:black;color:white">Author: Mon Haw Si</p>
														
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Detoxification of the mind</h3>
												<h4 class="product-price">4,000 MMK</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-4" class="single-product">
										<div class="part-1">
												<span class="discount">Top-4</span>
												<ul>
												<p class="author-title" style="background-color:black;color:white">Author: Mon Haw Si</p>
														
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Healthy Divorce</h3>
												<h4 class="product-price">5,000 MMK</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-5" class="single-product">
										<div class="part-1">
												<span class="discount">Top-5</span>
												<ul>
												<p class="author-title" style="background-color:black;color:white">Author: Aung Thin</p>
														
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Young zeal and this wisdom</h3>
												<h4 class="product-price">2,500 MMK</h4>
										</div>
								</div>
						</div>				
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-6" class="single-product">
										<div class="part-1">
												<span class="discount">Top-6</span>
												<ul>
												<p class="author-title" style="background-color:black;color:white">Author: Sat Khon Sa</p>
														
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Millions of light years away from home</h3>
												<h4 class="product-price">2,500 MMK</h4>
										</div>
								</div>
						</div>	
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-7" class="single-product">
										<div class="part-1">
												<span class="discount">Top-7</span>
												<ul>
												<p class="author-title" style="background-color:black;color:white">Author: Su Chi Ko</p>
														
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Ex-pect</h3>
												<h4 class="product-price">6,000 MMK</h4>
										</div>
								</div>
						</div>	
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-8" class="single-product">
										<div class="part-1">
												<span class="discount">Top-8</span>
												<ul>
												<p class="author-title" style="background-color:black;color:white">Author: Nayvel</p>
														
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Petrichor</h3>
												<h4 class="product-price">3,500 MMK</h4>
										</div>
								</div>
						</div>	
						
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-9" class="single-product">
										<div class="part-1">
												<span class="discount">Top-9</span>
												<ul>
												<p class="author-title" style="background-color:black;color:white">Author: Mar Yin Yin</p>
														
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Routine</h3>
												<h4 class="product-price">4,000 MMK</h4>
										</div>
								</div>
						</div>	
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-10" class="single-product">
										<div class="part-1">
												<span class="discount">Top-10</span>
												<ul>
												<p class="author-title" style="background-color:black;color:white">Author: Pyoe</p>
														
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Pollen</h3>
												<h4 class="product-price">4,000 MMK</h4>
										</div>
								</div>
						</div>	
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-11" class="single-product">
										<div class="part-1">
												<span class="discount">Top-11</span>
												<ul>
												<p class="author-title" style="background-color:black;color:white">Author: Ma Har Swe</p>
														
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Zay Cho Thu</h3>
												<h4 class="product-price">6,000 MMK</h4>
										</div>
								</div>
						</div>	
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-12" class="single-product">
										<div class="part-1">
												<span class="discount">Top-12</span>
												<ul>
												<p class="author-title" style="background-color:black;color:white">Author: Nu Nu Yee In wa</p>
														
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Only one person in Bo Kay Ta Prison is persistent</h3>
												<h4 class="product-price">4,000 MMK</h4>
										</div>
								</div>
						</div>	
						<hr >
						<div class="row justify-content-center text-center">
						<div class="col-md-8 col-lg-6">
								<div class="header">
										<h2>NEW RELEASE BOOKS</h2>
								</div>
						</div>
						</div>
				
				<div class="row">
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-13" class="single-product">
										<div class="part-1">
										<span class="new">New</span>
												<ul>
<!-- 														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li> -->
														<p class="author-title" style="background-color:black;color:white">Author: Khit Shay Nyo</p>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Cloudy Sea</h3>										
												<h4 class="product-price">4,000 MMK</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-14" class="single-product">
										<div class="part-1">
												<span class="new">New</span>
												<ul>
												<p class="author-title" style="background-color:black;color:white">Author: Aka Soe Thu</p>
														
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">More Pain</h3>
												<h4 class="product-price">5,000 MMK</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
			
						<!-- Single Product -->
						
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-16" class="single-product">
										<div class="part-1">
												<span class="new">New</span>
												<ul>
												<p class="author-title" style="background-color:black;color:white">Author: Kyi Aye</p>
														
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Outsiders</h3>
												<h4 class="product-price">2,500 MMK</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-17" class="single-product">
										<div class="part-1">
												<span class="new">New</span>
												<ul>
												<p class="author-title" style="background-color:black;color:white">Author: Thu Tay Sit</p>
														
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">The shadow of the shadow</h3>
												<h4 class="product-price">3,500 MMK</h4>
										</div>
								</div>
						</div>				
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-18" class="single-product">
										<div class="part-1">
												<span class="new">New</span>
												<ul>
												<p class="author-title" style="background-color:black;color:white">Author: Navel</p>
														
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Survival for today</h3>
												<h4 class="product-price">4,000 MMK</h4>
										</div>
								</div>
						</div>	
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-19" class="single-product">
										<div class="part-1">
												<span class="new">New</span>
												<ul>
												<p class="author-title" style="background-color:black;color:white">Author: Lin Khant</p>
														
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Forrest Gump</h3>
												<h4 class="product-price">4,500 MMK</h4>
										</div>
								</div>
						</div>					
						
						
						
				</div><!-- end of row -->
		</div>
		
<hr >		
<center><h2 style="font-family: Poppins, sans-serif;
    color: #444444;">EVENTS AND ACTIVITIES</h2></center><br>
<div class="row">
<div class="col-3">
<div class="card h-100" style="width: 16rem;">
  <img src="image/e3.png" class="card-img-top" alt="...">
  <div class="card-body text-black">
    <h5 class="card-title">Blind Date with a Book!</h5>
    <p class="card-text"><span style="font-weight:bold"><img src="https://img.icons8.com/external-filled-outline-icons-maxicons/85/000000/external-calender-wedding-filled-outline-filled-outline-icons-maxicons.png" style="width:40px;height:40px"/></span> February 1-28,2022</p>
   <p class="card-text"><span style="font-weight:bold"><img src="https://img.icons8.com/plasticine/100/000000/marker.png" style="width:40px;height:40px"/></span>  No. 55, Baho Road, Ahlone Township, Yangon,Myanmar.
   </p>
  </div>
</div>
</div>

<div class="col-3">
  <div class="card h-100" style="width: 16rem;">
  <img src="image/e1.jpg" class="card-img-top" alt="...">
  <div class="card-body text-black">
    <h5 class="card-title">World Books Day</h5>
    <p class="card-text"><span style="font-weight:bold"><img src="https://img.icons8.com/external-filled-outline-icons-maxicons/85/000000/external-calender-wedding-filled-outline-filled-outline-icons-maxicons.png" style="width:40px;height:40px"/></span> March 3,2022</p>
   <p class="card-text"><span style="font-weight:bold"><img src="https://img.icons8.com/plasticine/100/000000/marker.png" style="width:40px;height:40px"/></span> No. 55, Baho Road, Ahlone Township, Yangon, Myanmar.
   </p>
  </div>
</div>
</div>


<div class="col-3">
<div class="card h-100" style="width: 16rem;">
  <img src="image/e6.png" class="card-img-top" alt="...">
  <div class="card-body text-black">
    <h5 class="card-title">Super Summer Sale</h5>
   <p class="card-text"><span style="font-weight:bold"><img src="https://img.icons8.com/external-filled-outline-icons-maxicons/85/000000/external-calender-wedding-filled-outline-filled-outline-icons-maxicons.png" style="width:40px;height:40px"/></span> April 1,2022</p>
   <p class="card-text"><span style="font-weight:bold"><img src="https://img.icons8.com/plasticine/100/000000/marker.png" style="width:40px;height:40px"/></span> No. 55, Baho Road, Ahlone Township, Yangon, Myanmar.
   </p>
  </div>
</div>
</div>

<div class="col-3">
<div class="card h-100" style="width: 16rem;">
  <img src="image/e5.jpg" class="card-img-top" alt="...">
  <div class="card-body text-black">
    <h5 class="card-title">Black Friday Sale</h5>
    <p class="card-text"><span style="font-weight:bold"><img src="https://img.icons8.com/external-filled-outline-icons-maxicons/85/000000/external-calender-wedding-filled-outline-filled-outline-icons-maxicons.png" style="width:40px;height:40px"/></span> Every Friday</p>
   <p class="card-text"><span style="font-weight:bold"><img src="https://img.icons8.com/plasticine/100/000000/marker.png" style="width:40px;height:40px"/></span> No. 55, Baho Road, Ahlone Township, Yangon, Myanmar.
   </p>
  </div>
</div>
</div>
</div><!-- end event row -->


</div>


</div>
</section>
</div>
</body>
</html>
<br><br><br><br>
<?php include 'Footer.php';?>