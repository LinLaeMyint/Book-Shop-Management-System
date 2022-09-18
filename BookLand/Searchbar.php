
<?php session_start();?>
<?php include 'dbconnection.php';?>
<?php include 'Nav.php';?>
<br>
<br><br>
<br><br>
<br>
<br>

<html>
    <head>
    	<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    	
    
    
    <style>
    *{
     font-family: 'Poppins', sans-serif
    }
   .cat{
   margin-top: 10px; padding: 10px;
   }
   .pro{
   margin-left: 10px; padding: 0px;
  
   }
   .list-group a{
   color:black;
   }

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
background-image: url(image/snowbg4.gif);
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
    background-color: #4fc3f7;
}
</style>
    </head>
    <body>
   	



<div class="container">
<div class="row">
<p>Home | <a href="ShowAll.php">Show All Books</a> | <a href="Searchbar.php">Search Result</a></p>
</div>

  <div class="row cat ">

    
    	
    
   
   <?php 
   $searchresult=0;
 
  
   if(isset($_POST['search'])){?>
       <?php 
       $search=$_POST['search'];
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
              <?php   }else{
        
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
    	 	<b><a href="Searchbar.php" style="text-decoration:none;color:black">Show all Authors</a></b> 
    	</li>
    
   
    	<?php                           
                            $sql='SELECT * From author ORDER BY author_name';
                            $statement=$db1->query($sql);
                            $result=$statement->fetchAll(PDO::FETCH_ASSOC);
                            
                            if($result){
                                foreach ($result as $rows){?>
                                	<li style="list-style:none" class="list-group-item">
                                		<a href="Searchbar.php?author_id=<?php echo $rows['author_id']?>" style="text-decoration:none;">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<br>
<?php include 'Footer.php';?>
