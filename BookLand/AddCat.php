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
          url: 'AddCat.php',
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
 
<div class="container">
<div class="row">
<p>Category | <a href="AddCat.php">Add New Category</a></p>
</div>
<!-- <div class="card bg-info w-100"> -->
<u><h2><center>Adding New Category Information</center></h2></u>
<br>
    	<form method="POST" action="" style="color:black;text-align:center;margin:0 auto;width:400;" enctype="multipart/form-data">
			<div class="row mb-3">
        		<label for="inputProName" class="col-sm-4 col-form-label">Category Name</label>
        		<div class="col-sm-8">
            		<input type="text" class="form-control" id="input_catname" placeholder="" value="" name="input_cat">
        		</div>
    		</div>
    			
    			<button type="submit" class="btn btn-dark" style="float:right" name="Submit">Add Category</button>
    			
    	</form>
<!--     	</div> -->
    	</div>


<?php 
if(isset($_POST['Submit'])){
    $catname=$_POST['input_cat'];  
      
    $sql="INSERT INTO bookshop.category(category_name) VALUES(?)";    
    $stmt=$db1->prepare($sql);
    $stmt->execute([$catname]);
  
   header('Location: ViewAllCat.php');
}?>

	

</body>
</html>








