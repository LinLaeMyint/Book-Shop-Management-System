<?php session_start();;?>
<?php include 'dbconnection.php';?>
<?php include 'Nav.php';?>
<br><br><br><br><br><br><br>
<html>
<head>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</head>
<style>
body {
    font-family: "Poppins", sans-serif;
    color: #444444;
}
.card {
  transition: transform 0.2s ease;
}
.card {
  box-shadow: 0 4px 6px 0 rgba(22, 22, 26, 0.18);
  border-radius: 0;
  border: 0;
}
</style>
<body>


<div class="container">
<div class="card">
<div class="card-body">
<b><h2>Order Now</h2></b>




<br>

<form method="POST" action="submit-orders.php">
	<input type="hidden" name="usid" value=<?php 
	if(!isset($_SESSION['user_id'])){
	    echo "";    
	}else{
	    echo $_SESSION['user_id'];
	}?>>
	<div class="row mb-3">
        		<label for="name" class="col-sm-4 col-form-label">Your Name</label>
        		<div class="col-sm-8">
            		<input type="text" name="name" class="form-control" id="name" disabled  value=<?php if (!isset($_SESSION['username'])) {
	   echo "" ;
	}
	else{
	    echo $_SESSION['username'];
	}?>>
        		</div>
    </div>
    
	<div class="row mb-3">
        		<label for="email" class="col-sm-4 col-form-label">Email</label>
        		<div class="col-sm-8">
            		<input type="text" name="email" class="form-control" id="email" disabled  value=<?php if (!isset($_SESSION['email'])) {
	   echo "" ;
	}
	else{
	    echo $_SESSION['email'];
	}?>>
        		</div>
    </div>

	<div class="row mb-4">
    <label for="phone" class="col-sm-4 col-form-label">Your Phone</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="phone" name="phone" required placeholder="09-*********">
    </div>
  </div>
  
  	<div class="row mb-4">
    <label for="address" class="col-sm-4 col-form-label">Your Address</label>
    <div class="col-sm-8">
      <textarea name="address" id="address"  class="form-control" required placeholder="No.478/A, Royal Road, North Dagon Township, Yangon"></textarea>
    </div>
  </div>
  
  <div class="row mb-3">
	<div class="col-4">
	<label for="state" class="col-sm-4 col-form-label">State/Division</label>
	</div>
	<div class="col-8">
        <select name="state" id="state" style="float:left" required>
        			<?php if(isset($_SESSION['user_id'])){
        			    $state=$_SESSION['state'];
        			}?>
        			<option value="Yangon Divisoin" >Yangon Divisoin</option>
        			<option value="Mandalay Divisoin">Mandalay Division</option>
        			</select>
	</div>
</div>	
 
<!-- <div class="row mb-3"> -->
<!-- 	<div class="col-4"> -->
<!-- 	<label for="paytype" class="col-sm-4 col-form-label">Delivery Region</label> -->
<!-- 	</div> -->
<!-- 	<div class="col-8"> -->
       <!--  <select name="input_payment" id="payment" style="float:left"> -->
<!--         				<option value="0">Delivery Regions in Yangon</option> -->
<!--         			    <option value="Ahlone Township">Ahlone Township</option> -->
<!--         			    <option value="Bahan Township">Bahan Township</option> -->
<!--         			    <option value="Botataung Township">Botataung Township</option> -->
<!--         			    <option value="Dagon Township">Dagon Township</option> -->
<!--         			    <option value="Hlaing Township">Hlaing Township</option> -->
<!--         			    <option value="Kamarkyut Township">Kamarkyut Township</option> -->
<!--         			    <option value="Kyimyitdaing Township">Kyimyitdaing Township</option> -->
<!--         			    <option value="Lanmadaw Township">Lanmadaw Township</option> -->
<!--         			    <option value="Latha Township">Latha Township</option> -->
<!--         			    <option value="Mayangone Township">Mayangone Township</option> -->
<!--         			    <option value="North Dagon Township">North Dagon Township</option> -->
<!--         			    <option value="North Oakkala Township">North Oakkala Township</option> -->
<!--         			    <option value="South Dagon Township">South Dagon Township</option> -->
<!--         			    <option value="South Oakkala Township">South Oakkala Township</option> -->
<!--         			    <option value="Thingangyun Township">Thingangyun Township</option> -->
<!--         			    <option value="Thaketa Township">Thaketa Township</option> -->
<!--         			</select> -->
<!-- 	</div> -->
<!-- </div>		 -->

<!-- <div class="row mb-3"> -->
<!-- 	<div class="col-4"> -->
<!-- 	<label for="paytype" class="col-sm-4 col-form-label">Delivery Region</label> -->
<!-- 	</div> -->
<!-- 	<div class="col-8"> -->
      <!--   <select name="input_payment" id="payment" style="float:left"> --> 
<!--         				<option value="0">Delivery Regions in Mandalay</option> -->
<!--         			    <option value="Amarapura Township">Amarapura Township</option> -->
<!--         			    <option value="Aungmyethazan Township">Aungmyethazan Township</option> -->
<!--         			    <option value="Chanmyethazan Township">Chanmyethazan Township</option> -->
<!--         			    <option value="Chanmyethazi Township">Chanmyethazi Township</option> -->
<!--         			    <option value="Kyaukpadaung Township">Kyaukpadaung Township</option> -->
<!--         			    <option value="Kyaukse Township">Kyaukse Township</option> -->
<!--         			    <option value="Madaya Township">Madaya Township</option> -->
<!--         			    <option value="Maharaungmye Township">Maharaungmye Township</option> -->
<!--         			    <option value="Mahlaing Township">Mahlaing Township</option> -->
<!--         			    <option value="Meiktila Township">Meiktila Township</option> -->
<!--         			    <option value="Mogok Township">Mogok Township</option> -->
<!--         			    <option value="PyinOoLwin Township">PyinOoLwin Township</option> -->
<!--         			</select> -->
<!-- 	</div> -->
<!-- </div>		 -->
  
  <div class="row mb-4">
    <label for="cphone" class="col-sm-4 col-form-label">Contact Person's Phone</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="cphone" name="cphone" placeholder="09-*********">
    </div>
  </div>
  
	 <p style="font-size:10px">Add your another address to deliver your orders! (Optional)</p>
	 <div class="row mb-4">
    <label for="caddress" class="col-sm-4 col-form-label">Contact Person's Address</label>
    <div class="col-sm-8">
      <textarea name="cperson" id="cperson"  class="form-control" placeholder="No.478/A, Royal Road, North Dagon Township, Yangon"></textarea>
    </div>
  </div>
	
	
	
<div class="row mb-3">
	<div class="col-4">
	<label for="paytype" class="col-sm-4 col-form-label">Payment Type</label>
	</div>
	<div class="col-8">
        <select name="paytype" id="payment" style="float:left">
        			
        			<option value="Cash on Delivery">Cash on Delivery</option>
        			<option value="PayPal">PayPal</option>
        			<option value="Visa">Visa</option>
        			<option value="Apple Pay">Apple Pay</option>
        			</select>
	</div>
</div>	

<div class="row mb-3">
	<div class="col-4">
	<label for="shiptype" class="col-sm-4 col-form-label">Shipping Type</label>
	</div>
	<div class="col-8">
        <div class="form-check">
        
          <input class="form-check-input" type="radio" name="shiptype" id="shiptype" value="Standard Shipping" required checked>
          <label class="form-check-label" for="shiptype">
            Standard Shipping
          </label><span> (2000 MMK)</span>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="shiptype" id="shiptype" value="Express Shipping" required>
          <label class="form-check-label" for="shiptype">
            Express Shipping
          </label>
          <span> (4000 MMK)</span>
        </div>
        
        
	</div>
</div>	


<?php 
 if(isset($_SESSION['user_id'])){?>
 
 <button type="submit" class="btn btn-info" style="float:right" name="Submit">Submit Order</button>

<?php }else {?>
    
    <button type="submit" class="btn btn-info" style="float:right" name="Submit" disabled>Submit Order</button>
    
    
<?php }?>
 


<a href="Novels.php">Continue Shopping</a>

</form>
</div>

</div>
</div>
</body>
</html>
<br>
<?php include 'Footer.php';?>
