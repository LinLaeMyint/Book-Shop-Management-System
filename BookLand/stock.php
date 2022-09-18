
<?php include 'dbconnection.php';?>
<?php session_start();?>
<?php include 'NavAdmin.php';?>
<br><br><br><br><br><br>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!--   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
        $(document).ready(function(){
        $.ajax({
          url: 'ViewProductLists.php',
          success: function(data) {
           
        //      location.reload();
            	e.preventDefault();
          }
        });
        });
        </script>
</head>
<style>
    body {
   background: linear-gradient(to bottom, #E6E9B5 0%,#E9E560 100%) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.container h2 {
    -webkit-transition: color 1s;
    transition: color 1s;
    text-decoration:none;
}
 .container h2:hover {
    color: #ab47bc;
}
.table-hover tbody tr:hover td {
    background: #ab47bc;
}
@import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");

.height {
    height:60vh;
}

.search {
    position: relative;
    box-shadow: 0 0 40px rgba(51, 51, 51, .1)
}

.search input {
    height: 50px;
    text-indent: 25px;
    border: 2px solid #d6d4d4
}

.search input:focus {
    box-shadow: none;
    border: 2px solid #ab47bc
}

.search .fa-search {
    position: absolute;
    top: 20px;
    left: 16px
}

.search button {
    position: absolute;
    top: 5px;
    right: 5px;
    height: 40px;
    width: 110px;
    background: #ab47bc
}
.form-group .btn-dark {
    color: #fff;
    background-color:black;
    border-color: #357ebd; /*set the color you want here*/
}
.form-group .btn-dark:hover, .btn-dark:focus, .btn-dark:active, .btn-dark.active, .open>.dropdown-toggle.btn-dark {
    color: #fff;
    background-color: #ab47bc ;
    border-color: black; /*set the color you want here*/
} 

</style>
<body>

<br>
<div class="container">
<u><h2><center>Stocks Information</center></h2></u><br><br>

    	<div class="container">
    		<form method="POST" action="stock.php" >
<div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="search"> <i class="fa fa-search"></i> <input name="search" type="text" class="form-control" placeholder="Search Stocks By Remaining Qty"> <button class="btn btn-dark">Search</button> </div>
        </div>
        <div class="col">
        <div class="form-group">
        <button onclick="Export()" class="btn btn-dark" style="height:46px">Export to CSV File</button>
    </div>
    <!--  /Content   -->

    <script>
        function Export()
        {
            var conf = confirm("Export Stocks Information to CSV?");
            if(conf == true)
            {
                window.open("export_stock.php", '_blank');
            }
        }
    </script>
        </div>
    </div>
   
    </form>
     <br>
    
    <div class="main shadow-lg"> 
    		<form method="post" action="stock.php" >
				<table class="table table-striped table-hover table-bordered bg-white" border="1">
					<thead class="table-white">
            			<tr>                         
                         
                          <th scope="col" >Book Name</th>
                          <th scope="col" >Quantity Sold</th>
                          <th scope="col" >In-stock Quantity</th>
                          <th scope="col" >Remaing Quantity</th> 
 						  <th scope="col" >Stock Status</th>   
                          
            			</tr>
  					</thead>
  					<tbody>
<?php
$rquant=0;
$searchresult=0;
if(isset($_POST['search'])){
    $search=$_POST['search'];
    $sql="SELECT
    
purchase_detail.book_id,book.book_name, SUM(orders_detail.qty) as Quant,  (purchase_detail.quantity)-SUM(orders_detail.qty) as Rquant,purchase_detail.quantity    
FROM purchase_detail JOIN book ON purchase_detail.book_id=book.book_id JOIN orders_detail ON orders_detail.book_id=book.book_id
WHERE (purchase_detail.quantity)-(orders_detail.qty) like '%$search%'
GROUP BY purchase_detail.book_id ORDER BY SUM(orders_detail.qty) ASC
;";
    $searchresult=$db1->query($sql);
   if($searchresult){
        foreach($searchresult as $row): ?>
						 <tr>
						 	
						 	
						 	<td><?=$row['book_name']?></td>
  							<td><?=$row['Quant']?></td>
  							<td><?=$row['quantity']?></td>
  							<td><?=$row['Rquant']?></td>
  						<?php $rquant=$row['Rquant']?>
  							<td><?php if($rquant<100){
  							    $status="Out of stock";
  							    echo $status;
 							}else{
							    echo "In stock";
  							    
  							}?></td>
            			</tr>
            			
            			<?php endforeach; ?> 
            			<?php }	 ?>
            			
  					</tbody>
<?php }else{ ?>
<?php $total=0;
$rquant=0;
$result=0;
$status=0;
$sql="SELECT 

purchase_detail.book_id,book.book_name, SUM(orders_detail.qty) as Quant,(purchase_detail.quantity)-SUM(orders_detail.qty) as Rquant, purchase_detail.quantity

FROM purchase_detail JOIN book ON purchase_detail.book_id=book.book_id JOIN orders_detail ON orders_detail.book_id=book.book_id
GROUP BY purchase_detail.book_id ORDER BY SUM(orders_detail.qty) ASC
;";
$result=$db1->query($sql);
    
//     $sql="SELECT
//   orders_detail.order_id, SUM(qty) as Quantity FROM orders_detail GROUP BY orders_detail.order_id ORDER BY SUM(qty) DESC";
//     $result=$db1->query($sql);

?>



						<?php if($result){
						    foreach($result as $row): ?>
						 <tr>
						 	
						 	
						 	<td><?=$row['book_name']?></td>
  							<td><?=$row['Quant']?></td>
  							<td><?=$row['quantity']?></td>
  							<td><?=$row['Rquant']?></td>
  							<?php $rquant=$row['Rquant']?>
  							
  							<td><?php if($rquant<100){
  							    
  							    $status="Out of stock";
  							    echo $status;
  							    
  							}else{
  							    echo "In stock";
  							    
  							}?></td>
            			</tr>
            			
            			<?php endforeach; ?> 
            			<?php }	 ?>
            			
  					</tbody>
  					<?php }?>
				</table>
				
				
				
				
				
			</form>
    		</div>
    	</div>
</div>


</body>
</html>
<br><br><br>
<?php include 'Footer.php';?>






