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
          url: 'EditCat.php',
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
<u><h2><center>Updating Category Information</center></h2></u>
<br>
				<?php
		$id=$_GET['category_id'];//assigned to id from GET['id'];
		$result=$db1->query("SELECT * FROM bookshop.category WHERE category_id=$id");
		if($result->rowCount()>0){
		    foreach ($result as $rows){
		        $catid=$rows['category_id'];
		        $catname=$rows['category_name'];
		    }		    
		}
        ?>
        <form method="POST" enctype="multipart/form-data" action="" style="color:black;text-align:center;margin:0 auto;width:400;">
        	
        	<input type="hidden" name="id" id="catid" value="<?php echo $catid?>">
        	<div class="row mb-3">
        		<label for="name" class="col-sm-4 col-form-label">Category Name</label>
        		<div class="col-sm-8">
        		
            		<input type="text" class="form-control" id="name" value="<?php echo $catname?>" name="name">
        		</div>
    		</div>
    		
    	   <button type="submit" class="btn btn-dark" style="float:right" name="btnupdate">Update Category</button>
    		
     
<!--         	<div class="row mb-3"> -->
<!--         	<div class="button"> -->
<!--                  <div class="col-sm-10"> -->
<!--                    	<input type="submit" name="btnupdate" value="Update Category" class="btn btn-dark  ml-2">  -->
<!--                 </div> -->
<!--     		</div> -->
<!--     		</div> -->
        
        </form>
<!--         </div> -->
        </div>

	</body>
</html>

<?php 

if(isset($_POST['btnupdate'])){
    echo $id."category_id ...";
    $category_id=$_POST['id'];
    $category_name=$_POST['name'];
   
        $sql="UPDATE category SET category_name=? WHERE category_id=?";
        $stmt=$db1->prepare($sql);
        $stmt->execute([$category_name,$category_id]);
   
    header('Location: ViewAllCat.php');
       
        
        
}
        
?>
<br><br><br>
<?php include 'Footer.php';?>




