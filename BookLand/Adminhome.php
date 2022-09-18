<?php session_start();?>
<?php include 'dbconnection.php';?>
<?php include 'NavAdmin.php';?>
<br><br><br><br><br><br>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
       
    
    
</head>
<style>

    img:hover {
        transform: scale(1.08);
    }
    img:hover::before {
        left: 10px;
        top: 10px;
    }
    img:hover::after {
        right:  10px;
        bottom:  10px;
    }
        body {
   background: linear-gradient(to bottom, #E6E9B5,#E9E560 100%) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;;
}

  .row .btn-dark {
    color: #fff;
    background-color:black;
    border-color: #357ebd; /*set the color you want here*/
}
.row .btn-dark:hover, .btn-dark:focus, .btn-dark:active, .btn-dark.active, .open>.dropdown-toggle.btn-dark {
    color: #fff;
    background-color:  #4fc3f7;
    border-color: #285e8e; /*set the color you want here*/
}  
.list-group-hover .list-group-item:hover {
    background-color: #ab47bc;
}

</style>
<body>
<div class="container">
<div class="row">
<p>Books | <a href="Adminhome.php">Show All Books</a></p>
</div>
  
               
                <div class="row">
<div class="col-lg-9 center-block">


<form method="POST" action="Adminhome.php" class="d-md-flex">
        <h1 class="h5 align-self-center col-3">Search Books By</h1>
        <div class="btn-group align-self-center col-12 col-sm-12 col-md-9 col-lg-9"> <select name="searchType" class="btn btn-light col-3 col-sm-3">
                <option value="AuthorName">Author's Name</option>
                <option value="BookName">Book's Name</option>

            </select> <input type="search" name="searchcat" class="col-6 col-sm-6"> <input type="submit" value="Search" class="btn btn-dark col-3 col-sm-3"> </div>
    </form>
<!--  				<form class="d-flex" method="POST" action="Technology.php"> -->
<!--  				<div class="col-3"> -->
<!--  				<label for="name" class="col-form-label">Enter Book Name</label> -->
<!--  				</div> -->
<!--  				<div class="col-9"> -->
<!--                     <div class="input-group"> -->
<!--                         <input type="text" class="form-control" placeholder="Search" name="searchcat"> -->
<!--                         <button type="submit" class="btn btn-dark"><i class="fa fa-search"></i></button> -->
<!--                     </div> -->
<!--                  </div> -->
<!--                 </form> -->
</div>
</div>
<br>
  <div class="row cat ">

    
    	
    
   
   <?php 
   $searchresult=0;
   if(isset($_POST['searchcat'])){
       
  
   if(isset($_POST['searchcat'])&&($_POST['searchType'])=="BookName"){?>
       <?php 
       $search=$_POST['searchcat'];
        $sql="SELECT * FROM book WHERE  book_name like '%$search%'";
        $searchresult=$db1->query($sql);?>
   


<div class="col-lg-9 col-md-9 col-sm-12">
    	<div class="row pro ">
    		<?php foreach ($searchresult as $rows){?>
    			<div class="col-3">
    				
                    <a href="#" class="d-block mb-4 mt-3">
                     <img class="img-responsive  img-fluid bg-image" src="image/<?php echo $rows['photo'];?>" alt="" style="width: 100%;height: 230px;" > </a>
                    <div class="row  mx-auto"> 
                        <div class="text-center"><?php echo $rows['book_name'];?></div> 
                    </div>
                    <div class="row  mx-auto"> 
                         <div class=" text-center"> <span class="new" style="font-weight:bold"><?php echo $rows['price'];?> MMK</span> </div>
                    </div>
              
                <div class="row  border mx-auto"> 
 					<button type="button" class="btn btn-dark"> 
                  			<a href="add-to-cart.php?book_id=<?php echo $rows['book_id'] ?>" style="text-decoration:none;color:white;">
                            <img src="https://img.icons8.com/fluency/48/000000/buy.png" style="width:30px;height:30px"/><div class="vr"></div>          
                  			Buy Now</a>
        			 </button> 
                    

      </div>
                 </div>
                 <?php }?>
                 </div>
                 </div>
              <?php   }else if(isset($_POST['searchcat'])&&($_POST['searchType'])=="AuthorName"){?>
      <?php  
       $search=$_POST['searchcat'];
        $sql="SELECT author.author_name,book.* FROM book JOIN author ON book.author_id=author.author_id WHERE author_name like '%$search%'";
        $searchresult=$db1->query($sql);?> 
        <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="row pro ">
        <?php foreach ($searchresult as $rows){?>
    			<div class="col-3">
    				
                    <a href="#" class="d-block mb-4 mt-3">
                     <img class="img-responsive  img-fluid bg-image" src="image/<?php echo $rows['photo'];?>" alt="" style="width: 100%;height: 230px;" > </a>
                    <div class="row  mx-auto"> 
                        <div class="text-center"><?php echo $rows['book_name'];?></div> 
                    </div>
                    <div class="row  mx-auto"> 
                         <div class=" text-center"> <span class="new" style="font-weight:bold"><?php echo $rows['price'];?> MMK</span> </div>
                    </div>
              
                <div class="row  border mx-auto"> 
 					<button type="button" class="btn btn-dark"> 
                  			<a href="add-to-cart.php?book_id=<?php echo $rows['book_id'] ?>" style="text-decoration:none;color:white;">
                            <img src="https://img.icons8.com/fluency/48/000000/buy.png" style="width:30px;height:30px"/><div class="vr"></div>          
                  			Buy Now</a>
        			 </button> 
                  
                  
                  
      </div>
                 </div>
                 <?php }?>
                 </div>
                 </div>
               

      <?php   }}else{
        
        if (isset($_GET['author_id'])) {
            $author_id=$_GET['author_id'];
          
            $result="SELECT * FROM book WHERE author_id=$author_id";
            $resproductall=$db1->query($result);
        }
        else
        {
            $result="SELECT * FROM book";
            $resproductall=$db1->query($result);
            
        }?>
          
        
        <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="row pro ">
        <?php foreach ($resproductall as $rows){?>
    			<div class="col-3">
    				
                    <a href="#" class="d-block mb-4 mt-3">
                    
                     <img class="img-responsive  img-fluid bg-image" src="image/<?php echo $rows['photo'];?>" alt="" style="width: 100%;height: 230px;" > </a>
                    <div class="row  mx-auto"> 
                        <div class="text-center"><?php echo $rows['book_name'];?></div> 
                    </div>
                    
                    <div class="row  mx-auto"> 
                         <div class=" text-center"> <span class="new" style="font-weight:bold"><?php echo $rows['price'];?> MMK</span> </div>
                    </div>
                    
              
                
                <div class="row  border mx-auto"> 
 					<button type="button" class="btn btn-dark"> 
                  			<a href="add-to-cart.php?book_id=<?php echo $rows['book_id'] ?>" style="text-decoration:none;color:white;">
                   			<img src="https://img.icons8.com/fluency/48/000000/buy.png" style="width:30px;height:30px"/><div class="vr"></div>                 			
                  			Buy Now</a>
        			 </button> 
                    

      </div>
                 </div>
               <?php } ?>       

    	</div>
    
    </div>
        
        
   <?php } ?> 
    
    
 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

    	<ul class="list-group-hover">
    	<li style="list-style: none" class="list-group-item list-group-item-info">
    	 	<b><a href="Adminhome.php" style="text-decoration:none;color:black">Show all Authors</a></b> 
    	</li>
    
   
    	<?php                           
                            $sql='SELECT * From author ORDER BY author_name';
                            $statement=$db1->query($sql);
                            $result=$statement->fetchAll(PDO::FETCH_ASSOC);
                            
                            if($result){
                                foreach ($result as $rows){?>
                                	<li style="list-style:none" class="list-group-item">
                                		<a href="Adminhome.php?author_id=<?php echo $rows['author_id']?>" style="text-decoration:none;">
                                	 	<?php echo $rows['author_name']?>
                                		</a>
                                	
                                	</li>
 								
 								      	
                            <?php } 
                            
                          }
                          
                          ?> 
                          </ul>
                            </div>
    	   
    
    
   </div>
   </div>
</body>
</html>
<br><br><br>
<?php include 'Footer.php';?>