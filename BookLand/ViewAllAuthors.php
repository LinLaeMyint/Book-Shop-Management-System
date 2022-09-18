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
          url: 'ViewAllAuthors.php',
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
.fa-edit {
  color: black;
}
.fa-trash-alt{
color: black;
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

<div class="container">
<u><h2><center>View All Authors Information</center></h2></u><br><br>
    	
    	<div class="container">
    	<form method="POST" action="ViewAllAuthors.php" >
<div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="search"> <i class="fa fa-search"></i> <input name="search" type="text" class="form-control" placeholder="Search Author By Name"> <button type="submit" class="btn btn-dark">Search</button></div>
        
        </div>
        <div class="col">
        <div class="form-group">
 <button type="submit" class="btn btn-dark" style="height:46px">View All</button>
         <a href="AddAuthors.php"><button type="button" class="btn btn-dark" style="height:46px">Add New</button></a>
        
    </div>
  
  </div>
 
  </div>
    </form>

	<br>
	<div class="main shadow-lg">	
    		<form method="post" action="ViewAllAuthors.php" >
				<table class="table table-striped table-hover table-bordered bg-white" border="1">
					<thead class="table-white">
            			<tr>
                          <th scope="col" >Author-ID</th>
                          <th scope="col" >Author Name</th>
                          <th scope="col" >Actions</th>
            			</tr>
  					</thead>
  					<tbody>
<?php
$result=0;
if(isset($_POST['search'])){
    $search=$_POST['search'];
    $sql="SELECT * FROM author WHERE author_name like '%$search%'";
    $result=$db1->query($sql);
}

?>

						<?php if($result){
						    foreach($result as $row): ?>
						 <tr>
						 	<td><?=$row['author_id']?></td> 
						 	<td><?=$row['author_name']?></td>
                            <td class="actions">
            					<a href="EditAuthors.php?author_id=<?=$row['author_id']?>" class="edit" title="Edit Authors"><i class="fas fa-edit"></i></a>
                                <a href="DelAuthors.php?author_id=<?=$row['author_id']?>" class="remove" title="Remove Authors"><i class="fas fa-trash-alt"></i></a>
                            </td>
            			</tr>
            			<?php endforeach; ?> 
            			<?php }	?>
  					</tbody>
				</table>
			</form>
    		</div>
    	</div>

</div>	

</body>
</html>
<br><br><br>
<?php include 'Footer.php';?>







