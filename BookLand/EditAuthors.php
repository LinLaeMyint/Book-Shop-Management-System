<?php session_start();
ob_start();
?>
<?php include 'NavAdmin.php';?>
<br><br><br><br><br><br>
<?php include 'dbconnection.php';?>
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
          url: 'EditAuthors.php',
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
<u><h2><center>Updating Authors Information</center></h2></u>
<br>
				<?php
		$id=$_GET['author_id'];//assigned to id from GET['id'];
		$result=$db1->query("SELECT * FROM bookshop.author WHERE author_id=$id");
		if($result->rowCount()>0){
		    foreach ($result as $rows){
		        $authorid=$rows['author_id'];
		        $authorname=$rows['author_name'];
		    }		    
		}
        ?>
        <form method="POST" enctype="multipart/form-data" action="" style="color:black;text-align:center;margin:0 auto;width:400;">
        	
        	<input type="hidden" name="id" id="authorid" value="<?php echo $authorid?>">
        	<div class="row mb-3">
        		<label for="name" class="col-sm-4 col-form-label">Author Name</label>
        		<div class="col-sm-8">
        		
            		<input type="text" class="form-control" id="name" value="<?php echo $authorname?>" name="name">
        		</div>
    		</div>
    		
    		<button type="submit" class="btn btn-dark" style="float:right" name="btnupdate">Update Author</button>
    		
     
<!--         	<div class="row mb-3"> -->
<!--         	<div class="button"> -->
<!--                  <div class="col-sm-10"> -->
<!--                    	<input type="submit" name="btnupdate" value="Update Author" class="btn btn-dark  ml-2">  -->
<!--                 </div> -->
<!--     		</div> -->
<!--     		</div> -->
        
        </form>
        </div>
<!--         </div> -->
       
	</body>
</html>

<?php 

if(isset($_POST['btnupdate'])){
    echo $id."author_id ...";
    $author_id=$_POST['id'];
    $author_name=$_POST['name'];
   
        $sql="UPDATE author SET author_name=? WHERE author_id=?";
        $stmt=$db1->prepare($sql);
        $stmt->execute([$author_name,$author_id]);
   
    header('Location: ViewAllAuthors.php');
       
        
        
}
        
?>
<br><br><br>
<?php include 'Footer.php';?>





