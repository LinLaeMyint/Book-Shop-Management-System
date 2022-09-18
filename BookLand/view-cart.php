<?php session_start();
ob_start();?>
<?php include 'dbconnection.php';?>
<?php include 'Nav.php';?>
<?php 
if (!isset($_SESSION['cart'])) { //for empty cart
    
    header("location:ShowAll.php");
    exit();
}
?>

<html>
<head>
<title>View Cart</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 

     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">



</head>
<style>
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
</style>
<div class="container">


<div class="row">
<div class="col lg-6 col-md-12 col-sm-12 ">
<a href="view-cart.php"><i class="fas fa-shopping-basket" style="height: 10px;color:black;">My Cart</i></a>
<br><br><br>
<div class="container">
<div class="row">
  <div class="col-9"><a href="home.php" style="text-decoration:none;">&laquo; Home Page</a></div>
    <!--  <div class="col-3"><a href="clear-cart.php" class="del" style="float:right;text-decoration:none">&times;Clear Cart</a></div>-->
</div>
</div>
<br>
<div class="main shadow-lg">
<form action="view-cart.php" method="post">
<table class="table table-striped table-hovers bg-white" border="1">

<thead>
    <tr style="background-color:white;color:black">
   	<th scope="col">Image</th>
      <th scope="col">Book Name</th>
      <th scope="col">Quantity</th>				
      <th scope="col">Price</th>
      <th scope="col">Total</th>
      <th scope="col"> </th>
      <th scope="col"><a href="clear-cart.php">Remove All</a></th>
    </tr>
  </thead>
  <?php 
  $total=0; //for total amount
  $p=0;
  foreach ($_SESSION['cart'] as $id=>$qty):
  $result=("SELECT book_name,price,photo FROM book WHERE book_id=$id");
  foreach ($db1->query($result) as $rows){
      
      $p=$rows['price'];
  }
  $total += $rows['price'] * $qty;
  ?>
  
  <tbody >
    <tr style="color:black">
    <td> <img src="image/<?php echo $rows['photo'];?>" width="80" height="80"></td> 
    
      <td><?php echo $rows['book_name']?></td>
      <td>
       <input onclick="save(this);" size="2" type="number" name="qty" step="1" id="<?php echo $id?>" value="<?php echo $qty?>"> 
      </td>
      <td><?php echo $rows['price']?> MMK</td>
      <td><?php echo $rows['price'] * $qty?> MMK</td>
     <td> <button type="submit" class="btn btn-success" title="Update Quantity">Update</button>
<script>
      	function save(obj){ 
      	alert ("updating");
      	var quantity= $(obj).val();
      	var code=$(obj).attr("id");
      	$.ajax({
      	url: "update-pro-cat.php",
      	type: "POST",
      	data: 'code='+code+'&quantity='+quantity,
      	
      	});
      	
      	}
      </script>       </td>    
      
      
     
 <td>
       	<a href="product_del_from-cart.php?book_id=<?php echo $id?>" class="trash" title="Delete Product"><button type="button" class="btn btn-danger">Delete</button></a>
 
 </td>
   
   
    </tr>
    <?php endforeach;?>
    
<!--     <tr> -->
<!--       <td colspan="3" align="right"><b>SubTotal: </b></td> -->
     <!--  <td><?php //echo $total;?> MMK</td> -->
<!--     </tr> -->

  </tbody>
</table>
</form>

</div>


<div class="row">


<div class="col">
<a href="ShowAll.php"  title="Continue Shopping"><button type="button" class="btn btn-success">Continue Shoppping</button></a>
</div>


<div class="col">

 
    <div class="card text-center" style="width: 18rem;float:right">
      <div class="card-body">
        <h5 class="card-title"><b>SubTotal: <?php echo $total?> MMK</b></h5><br>
      
        
<!--         <label for="inputpayment" class="col-sm-4 col-form-label"><h5><b>Payment Type:</b></h5></label> -->
        		
        			<!-- <select name="input_payment" id="payment" style="float:left"> -->
        			
<!--         			<option value="Cash on Delivery">Cash on Delivery</option> -->
<!--         			<option value="KBZ Pay">KBZ Pay</option> -->
<!--         			<option value="AYA Pay">AYA Pay</option> -->
<!--         			<option value="Wave Pay">Wave Pay</option> -->
<!--         			</select> -->
        		<?php if(isset($_SESSION['username'])){?>
        		     <a href="OrderForm.php" class="btn btn-info" style="float:right">PROCEED TO CHECKOUT</a>
        		    
        		    
        	<?php }else{?>	
        <a href="CustomerLogin.php" class="btn btn-info justify-content-center" >PROCEED TO CHECKOUT</a>
        <?php }?>
        </div>		
        
       
        
        
      </div>
    </div>
  </div>
  
</div>
    
   
</div> 
 
</div>




</html>
<br><br><br>
<?php include 'Footer.php';?>