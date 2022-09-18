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
</style>
<body>
<div class="row">
<section class="section-products" style="color:black">
		<div class="container">
				<div class="row justify-content-center text-center">
						<div class="col-md-8 col-lg-6">
								<div class="header">
										<h2>NEW AND PRE-ORDER BOOKS</h2>
								</div>
						</div>
				</div>
				<div class="row">
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-1" class="single-product">
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
								<div id="product-2" class="single-product">
										<div class="part-1">
												<span class="discount">Pre-order</span>
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
					<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-3" class="single-product">
										<div class="part-1">
											
												<ul>
												<p class="author-title" style="background-color:black;color:white">Author: Nine Nine Sa Nay</p>
														
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Thorns that disappear with time</h3>
												<h4 class="product-price">2,000 MMK</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-4" class="single-product">
										<div class="part-1">
												<span class="discount">Pre-order</span>
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
								<div id="product-5" class="single-product">
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
								<div id="product-6" class="single-product">
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
								<div id="product-7" class="single-product">
										<div class="part-1">
												<span class="discount">Pre-order</span>
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
						
						
						
						
						
				</div>
		</div>
</section>
</div>
</body></html>