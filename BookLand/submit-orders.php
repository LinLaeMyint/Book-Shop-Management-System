<?php session_start();?>
<?php include 'dbconnection.php';?>
<?php include 'Nav.php';?>
<br><br><br><br><br><br><br>
<?php 

if(isset($_SESSION['user_id'])){
    
    $shiptype=$_POST['shiptype'];
    $address= $_POST['address'];
    $state=$_POST['state'];
    $phone=$_POST['phone'];
    $paytype=$_POST['paytype'];
    $contactperson=$_POST['cperson'];
    $cphone=$_POST['cphone'];
    
   
    $u=$_SESSION['user_id'];
   
    
    $db1->query("INSERT INTO bookshop.orders(orders.user_id,orders.order_date,orders.phone,orders.address,orders.state,orders.cphone,orders.caddress,orders.payment_type,orders.shipping_type) 
    VALUES ('$u',now(),'$phone','$address','$state','$cphone','$contactperson','$paytype','$shiptype')");
    $order_id=$db1->lastInsertId();
    foreach ($_SESSION['cart'] as $id => $qty){
        $db1->query("INSERT INTO orders_detail(order_id,book_id,qty) VALUES ($order_id,$id,$qty)");
        
    }
  session_destroy(); 
//echo "Your Orders have been submitted";

?>
 <?php }// elseif (!isset($_SESSION['uid'])){?>
 <!-- <script>window.location.href='acceptOrders.php';</script> -->

<?php //}?>
<html>
<head>
<title>Product Order Submitted!</title>
<!-- <meta http-equiv="refresh" content="1"> -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 

</head>
<style>
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
 
    <div class="ms">
    
    	<a href="home.php" class="done" style="margin-left:100px;text-decoration:none">&laquo; Home Page</a>
    </div>
    
    
     <?php
    if (isset($_SESSION['username']))
    {
        $username=$_SESSION['username'];
    }?> 
 
    
    <div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="text-left logo p-2 px-5"> <img src="image/logo 7.jpg" width="100px" height="100px"> </div>
                <div class="invoice p-5">
                    <h5>Your order Confirmed!</h5>
                    <?php 
                    if(isset($_SESSION['username'])){?>
	               <span class="font-weight-bold d-block mt-4">Hello, <?php echo $username?></span> 
					<?php }?>   
                    <span>You order has been confirmed and will be shipped in next two days!</span>
                    <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Order Date</span> <span><?php echo date("Y/m/d") ?></span> </div><!-- To modify -->
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Order No</span> <span><?php echo $order_id?></span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Payment</span> <span><?php echo $paytype?></span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Shiping Address</span><span> <?php echo $address?></span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Shiping Type</span><span> <?php echo $shiptype?></span> </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="product border-bottom table-responsive">
                        <table class="table table-borderless">
                        <thead>
    <tr style="background-color:black;color:white">
      <th scope="col">Book Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Unit Price</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <?php 
  $total=0; //for total amount
  $p=0;
  foreach ($_SESSION['cart'] as $id=>$qty):
     // echo $id."product id<br>";
  $result=("SELECT book_name,price FROM book WHERE book_id=$id");
  foreach ($db1->query($result) as $rows){
      
      $p=$rows['price'];
  }
  $total += $rows['price'] * $qty;
  ?>
  <tbody>
    <tr>
      <td><?php echo $rows['book_name']?></td>
            
      
      <td><?php echo $qty?></td>
      <td><?php echo $rows['price']?> MMK</td>
      <td><?php echo $rows['price'] * $qty?> MMK</td>
    </tr>
    <?php endforeach;?>
    
    <tr>
      <td colspan="3" align="right"><b>Total: </b></td>
      <td><?php echo $total;?> MMK</td>
      <?php $subtotal=0;?>
    </tr>

  </tbody>
</table>
<!--                             <tbody> -->
<!--                                 <tr> -->
<!--                                     <td width="20%"> <img src="https://i.imgur.com/u11K1qd.jpg" width="90"> </td> -->
<!--                                     <td width="60%"> <span class="font-weight-bold">Men's Sports cap</span> -->
<!--                                         <div class="product-qty"> <span class="d-block">Quantity:1</span> <span>Color:Dark</span> </div> -->
<!--                                     </td> -->
<!--                                     <td width="20%"> -->
<!--                                         <div class="text-right"> <span class="font-weight-bold">$67.50</span> </div> -->
<!--                                     </td> -->
<!--                                 </tr> -->
<!--                                 <tr> -->
<!--                                     <td width="20%"> <img src="https://i.imgur.com/SmBOua9.jpg" width="70"> </td> -->
<!--                                     <td width="60%"> <span class="font-weight-bold">Men's Collar T-shirt</span> -->
<!--                                         <div class="product-qty"> <span class="d-block">Quantity:1</span> <span>Color:Orange</span> </div> -->
<!--                                     </td> -->
<!--                                     <td width="20%"> -->
<!--                                         <div class="text-right"> <span class="font-weight-bold">$77.50</span> </div> -->
<!--                                     </td> -->
<!--                                 </tr> -->
<!--                             </tbody> -->
<!--                         </table> -->
<!--                     </div> -->
                    <div class="row d-flex justify-content-end">
                        <div class="col-md-5">
                            <table class="table table-borderless">
                                <tbody class="totals">
<!--                                     <tr> -->
<!--                                         <td> -->
<!--                                             <div class="text-left"> <span class="text-muted">Subtotal</span> </div> -->
<!--                                         </td> -->
<!--                                         <td> -->
<!--                                             <div class="text-right"> <span>$168.50</span> </div> -->
<!--                                         </td> -->
<!--                                     </tr> -->
                                    <tr>
                                        <td>
                                            <div class="text-left"> <span class="text-muted">Shipping Fee</span> </div>
                                        </td>
                                         <td>
                                        <?php if($shiptype=="Standard Shipping"){?>
                                       
                                            <div class="text-right"> <span>2000 MMK</span> </div>
                                           
                                         <?php }if($shiptype=="Express Shipping"){?>
                                         
                                             <div class="text-right"> <span>4000 MMK</span> </div> 
                                             
                                      <?php }?>
                                     </td> 
                                            
                                        
                                    </tr>
<!--                                     <tr> -->
<!--                                         <td> -->
<!--                                             <div class="text-left"> <span class="text-muted">Tax Fee</span> </div> -->
<!--                                         </td> -->
<!--                                         <td> -->
<!--                                             <div class="text-right"> <span>$7.65</span> </div> -->
<!--                                         </td> -->
<!--                                     </tr> -->
<!--                                     <tr> -->
<!--                                         <td> -->
<!--                                             <div class="text-left"> <span class="text-muted">Discount</span> </div> -->
<!--                                         </td> -->
<!--                                         <td> -->
<!--                                             <div class="text-right"> <span class="text-success">$168.50</span> </div> -->
<!--                                         </td> -->
<!--                                     </tr> -->
                                    <tr class="border-top border-bottom">
                                        <td>
                                            <div class="text-left"> <span class="font-weight-bold">Subtotal</span> </div>
                                        </td>
                                        <td> 
                                        <?php if($shiptype=="Standard Shipping"){?>
                                           
                                            <div class="text-right"> <span class="font-weight-bold"><?php echo $subtotal=$total+2000;?> MMK</span> </div>
                                       
                                         <?php }if ($shiptype=="Express Shipping") {?>
                                        
                                             <div class="text-right"> <span class="font-weight-bold"><?php echo $subtotal=$total+4000;?> MMK</span> </div>
                                             
                                        <?php }?> 
                                        </td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>We will be sending shipping confirmation email when the item shipped successfully!</p>
                    <p class="font-weight-bold mb-0">Thanks for shopping with us!</p> <span>MT Team</span>
                </div>
                <div class="d-flex justify-content-between footer p-3"><span><?php echo date("Y/m/d");?></span> </div>
            </div>
        </div>
    </div>
</div>
   </div> 
</body>
</html>
<?php include 'Footer.php';?>



