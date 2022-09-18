<?php session_start();
ob_start();
?>
<?php include 'dbconnection.php';?>
<?php include 'NavAdmin.php';?>
<br><br><br><br><br><br>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Edit Product</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!--           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
        $(document).ready(function(){
        $.ajax({
          url: 'EditBooks.php',
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
	
	<div class="container" >
<!-- 	<div class="card bg-info">	 -->
<u><h2><center>Updating Books Information</center></h2></u>
<br>
				<?php
		$id=$_GET['book_id'];//assigned to id from GET['id'];
		$result=$db1->query("SELECT * FROM bookshop.book WHERE book_id=$id");
		if($result->rowCount()>0){
		    foreach ($result as $rows){
		        $bookid=$rows['book_id'];
		        $catid=$rows['category_id'];
		        $bookname=$rows['book_name'];
		        $author_id=$rows['author_id'];
		        $price=$rows['price'];
		       
		        $photo=$rows['photo'];
		    }		    
		}
        ?>
        <form method="POST" enctype="multipart/form-data" action="" style="color:black;text-align:center;margin:0 auto;width:400;">
        	
        	<input type="hidden" name="id" id="proid" value="<?php echo $bookid?>">
        	<div class="row mb-3">
        		<label for="name" class="col-sm-4 col-form-label">Book Name</label>
        		<div class="col-sm-8">
        		
            		<input type="text" class="form-control" id="name" value="<?php echo $bookname?>" name="name">
        		</div>
    		</div>
    		
    		<div class="row mb-3">
        		<label for="catname" class="col-sm-4 col-form-label">Category_Nmae</label>
        		<div class="col-sm-8">
        			<select name="catname" id="catname" style="float:left">
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
        		<label for="catname" class="col-sm-4 col-form-label">Author Name</label>
        		<div class="col-sm-8">
        			<select name="authorname" id="authorname" style="float:left">
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
        		<label for="price" class="col-sm-4 col-form-label">Price</label>
        		<div class="col-sm-8">
            		<input type="text" class="form-control" id="price"  value="<?php echo $price?>" name="price">
        		</div>
    		</div>
    		    		
    		<div class="row mb-3">
    			
        		<label for="image" class="col-sm-4 col-form-label"><img src="image/<?php echo $photo?>" class="img-responsive img-thumbnail"></label>
        		<div class="col-sm-8">
            		<input type="file" class="form-control" id="image"  name="image">
        		</div>
    		</div>
        	
     
        	                  <button type="submit" class="btn btn-dark" style="float:right" name="btnupdate">Update Book</button>
                 
      <!--     	<input type="submit" name="btnupdate" value="Update Book" class="btn btn-dark  ml-2" style="float:right">   -->        
               
        </form>
<!--         </div> -->
        </div>

	</body>
</html>

<?php 

if(isset($_POST['btnupdate'])){
    echo $id."book_id ...";
    $pro_id=$_POST['id'];
    $pro_name=$_POST['name'];
    $cat_id=$_POST['catname'];
    $author_id=$_POST['authorname'];
    $Price=$_POST['price'];
   
  
    $Photo=$_FILES['image']['name'];
    $tmp=$_FILES['image']['tmp_name'];
    if($Photo){
        move_uploaded_file($tmp, "image/$Photo");
        $sql="UPDATE book SET category_id=?,book_name=?,author_id=?,price=?,photo=? WHERE book_id=?";
        $stmt=$db1->prepare($sql);
        $stmt->execute([$cat_id,$pro_name,$author_id,$Price,$Photo,$pro_id]);
       
    }else {
        $sql="UPDATE book SET category_id=?,book_name=?,author_id=?,price=? WHERE book_id=?";
        $stmt=$db1->prepare($sql);
        $stmt->execute([$cat_id,$pro_name,$author_id,$Price,$pro_id]);
        
    }
//     header("Location:ViewProductLists.php");
    header('Location: ViewAllBooks.php');
       
        
        
}
        
?>
<br><br><br>
<?php include 'Footer.php';?>





