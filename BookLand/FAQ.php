<?php session_start();?>
<?php include 'dbconnection.php';?>
<?php include 'Nav.php';?>
<br><br><br><br><br><br><br>
<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>


<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}

/* body { */
/*     background-image: linear-gradient(to right top, #9AF6FB, #7096F8); */
/*     min-height: 100vh */
/* } */

.wrapper {
    max-width: 760px;
    margin: 50px auto;
    padding: 40px 20px
}

.wrapper .search {
    border: 1px solid #c8c8c8;
    overflow: hidden;
    border-radius: 25px;
    padding: 0 10px;
    margin: 15px 0 20px;
    transition: all 0.3s
}

.wrapper .search:hover,
.wrapper .search:focus-within {
    border: 1px solid transparent;
    box-shadow: 2px 5px 8px #1f1f1f10, 0px -4px 5px #1f1f1f10
}

.wrapper .search .form-control {
    box-shadow: none;
    outline: none;
    border: none
}

.wrapper .search .form-control:focus::placeholder {
    opacity: 0
}

.wrapper .accordion-button {
    font-size: 0.9rem;
    font-weight: 500
}

.wrapper .accordion-button:hover {
    background-color: #f8f8f8
}

.wrapper .accordion-button:focus {
    box-shadow: none
}

.wrapper .accordion-button::after {
    background-size: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #c8c8c8;
    background-position: center center;
    border-radius: 50%
}

.wrapper .accordion-button:not(.collapsed) {
    color: #000;
    background-color: #f7f7f7;
    font-weight: 600;
    border-bottom: 1px solid #ddd !important
}

.accordion-button:not(.collapsed)::after {
    border-color: #1E88E5
}

.wrapper .accordion-button.collapsed {
    border-bottom: 1px solid #ddd !important
}

.wrapper .accordion-collapse.show {
    border-bottom: 1px solid #ddd !important
}

.wrapper .accordion-collapse {
    background-color: #eaf3fa
}

.wrapper .accordion-collapse ul li {
    line-height: 2rem;
    width: 100%;
    padding: 0.5rem 1.3rem
}

.wrapper .accordion-collapse ul li:hover {
    background-color: #c9e7ff
}

.wrapper .accordion-collapse ul li a {
    text-decoration: none;
    color: #333;
    font-size: 0.85rem;
    font-weight: 400;
    display: block
}

.wrapper .accordion-collapse ul li:hover a {
    color: #222
}

@media (max-width: 777px) {
    .wrapper {
        margin: 50px 20px
    }
}

@media (max-width: 365px) {
    .wrapper {
        margin: 50px 10px
    }

    .w-75 {
        width: 90% !important
    }
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
<p>Home | <a href="FAQ.php">FAQ</a></p>
</div>

<div class="wrapper bg-white rounded shadow">
<div class="h3 text-primary text-center">How can we help you?</div>

<div class="accordion accordion-flush border-top border-start border-end" id="myAccordion">
<div class="accordion-item">
<h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">How long will it take to receive my order?</button> </h2>
<div id="flush-collapseOne" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
<div class="accordion-body p-0">
<ul class="list-unstyled m-0">
<li><a href="#">Normally, between 2 or 5 days. For standard shipping, it takes 5 days or more but it takes only 2 days for standard shipping. </a></li>
</ul>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">What Information do I need to check out?</button> </h2>
<div id="flush-collapseTwo" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
<div class="accordion-body p-0">
<ul class="list-unstyled m-0">
<li><a href="#">You need to fill such kind of personal information which are Your Name, Personal Email, Contact Person Email and Phone, Your Current Address, Your Phone Number, Your current state.</a></li>
</ul>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">What are your rate for shipping?</button> </h2>
<div id="flush-collapseThree" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
<div class="accordion-body p-0">
<ul class="list-unstyled m-0">
<li><a href="#">2,000 MMK for every orders with standard shipping. And, 4,000 MMK for express shipping.</a></li>
</ul>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour"> Will I get a shipping confirmation?</button> </h2>
<div id="flush-collapseFour" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
<div class="accordion-body p-0">
<ul class="list-unstyled m-0">
<li><a href="#">Yes, you will get shipping confirmation email as soon as your orders shipped successfully. So, Don't worry about it.</a></li>
</ul>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive"> Which payment types do you offer?</button> </h2>
<div id="flush-collapseFive" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
<div class="accordion-body p-0">
<ul class="list-unstyled m-0">
<li><a href="#">We offer four types of payment type which are Cash on delivery,AYA Pay, KBZ Pay and Wave Pay. </a></li>
</ul>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix"> What is your return policy? </button> </h2>
<div id="flush-collapseSix" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
<div class="accordion-body p-0">
<ul class="list-unstyled m-0">
<li><a href="#">You can return the products within 24 hours after purchasing.</a></li>

</ul>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven"> Do you offer free delivery?</button> </h2>
<div id="flush-collapseSeven" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
<div class="accordion-body p-0">
<ul class="list-unstyled m-0">
<li><a href="#">Yes, we offer free shipping on every weekends</a></li>

</ul>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight"> Where do you ship to?</button> </h2>
<div id="flush-collapseEight" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
<div class="accordion-body p-0">
<ul class="list-unstyled m-0">
<li><a href="#">Typically, We are shipping our products to the most townships in yangon and mandalay regions.</a></li>

</ul>
</div>
</div>
</div>
</div><!-- end of accordion -->
</div> <!-- end of wrapper -->
</div><!-- end of container -->
</body>
</html>

<br><br><br>
<?php include 'Footer.php';?>