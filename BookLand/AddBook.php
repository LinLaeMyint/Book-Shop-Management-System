<?php include 'dbconnection.php';ob_start();?>
<?php session_start();?>
<?php include 'NavAdmin.php';?>
<br><br><br><br><br><br><br>
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
          url: 'AddBooks.php',
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
  background-size: cover;;
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
    
<div class="container">
<div class="row">
<p>Books | <a href="AddBook.php">Add New Book</a></p>
</div>
<!-- <div class="card bg-lg w-100"> -->
<u><h2><center>Adding New Book Information</center></h2></u>
<br>
    	<form method="POST" action="" style="color:black;text-align:center;margin:0 auto;width:400;" enctype="multipart/form-data">
			<div class="row mb-3">
        		<label for="inputProName" class="col-sm-4 col-form-label">Book Name</label>
        		<div class="col-sm-8">
            		<input type="text" class="form-control" id="input_proname" placeholder="" value="" name="input_bookname">
        		</div>
    		</div>
    		
    		<div class="row mb-3">
        		<label for="inputCatName" class="col-sm-4 col-form-label">Category Name</label>
        		<div class="col-sm-8">
        			<select name="input_category" id="Category" style="float:left">
        			<option value="0">-------- Choose---------</option>
        			<?php 
        			$result="SELECT category_id,category_name From category";
        			foreach ($db1->query($result) as $rows){?>
        			<option value="<?php echo $rows['category_id']?>">
        			<?php echo $rows['category_name']?>
        			</option>
        			<?php }?>
        			</select>
<!--             		<input type="text" class="form-control" id="input_catid" placeholder="1" value="" name="input_catid"> -->
        		</div>
    		</div>
    		
    		<div class="row mb-3">
        		<label for="inputAuthorName" class="col-sm-4 col-form-label">Author Name</label>
        		<div class="col-sm-8">
        			<select name="input_author" id="Author" style="float:left">
        			<option value="0">-------- Choose---------</option>
        			<?php 
        			$result="SELECT author_id,author_name From author";
        			foreach ($db1->query($result) as $rows){?>
        			<option value="<?php echo $rows['author_id']?>">
        			<?php echo $rows['author_name']?>
        			</option>
        			<?php }?>
        			</select>
<!--             		<input type="text" class="form-control" id="input_catid" placeholder="1" value="" name="input_catid"> -->
        		</div>
    		</div>
    		
    		
    		
    		
    		
    		
    		<div class="row mb-3">
        		<label for="inputPrice" class="col-sm-4 col-form-label">Price</label>
        		<div class="col-sm-8">
            		<input type="text" class="form-control" id="input_price" placeholder="1000" value="" name="input_price">
        		</div>
    		</div>
    		
    		<div class="row mb-3">
        		<label for="inputphoto" class="col-sm-4 col-form-label">Photo</label>
        		<div class="col-sm-8">
            		<input type="file" class="form-control" id="input_photo" name="input_photo">
        		</div>
    		</div>
    			
    			<button type="submit" class="btn btn-dark" style="float:right" name="Submit">Add Book</button>
    			
    	</form>
<!--     	</div> -->
    	
    	</div><!-- end of container -->


<?php 
if(isset($_POST['Submit'])){
    $bookname=$_POST['input_bookname'];  
    $catid=$_POST['input_category'];
    $authorid=$_POST['input_author'];
    
    $price=$_POST['input_price'];
   
    
    $pPhoto=$_FILES['input_photo']['name'];
    $tmp=$_FILES['input_photo']['tmp_name'];
    
    if($pPhoto){
        move_uploaded_file($tmp, "image/$pPhoto");
    }
    
    $sql="INSERT INTO bookshop.book(category_id,book_name,author_id,price,photo) VALUES(?,?,?,?,?)";    
    $stmt=$db1->prepare($sql);
   // $stmt->execute('Water 2',4,800,'test.jpg');
    $stmt->execute([$catid,$bookname,$authorid,$price,$pPhoto]);
    //$catid=$db1->lastInsertId();
  
   header('Location: ViewAllBooks.php');
}?>
    		


</body>
</html>
<br><br><br>
<?php include 'Footer.php';?>







