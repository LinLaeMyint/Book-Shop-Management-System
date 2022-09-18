
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Side Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> 
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">


    
</head>
  <style>
  *{
   font-family: 'Poppins', sans-serif
  }
  ul li a.cart .cart-basket{
 font-size: .6rem;
 position: absolute;
 top: -6px;
 right: -5px;
 width: 15px;
 height: 15px;
 color: black;
 background-color: #64EBA2;
 border-radius: 50%;
}
ul li a.cart:hover{

 text-decoration:none;
 color: #64EBA2;
 
}
ul li a{
font-size:1.1rem;
color: black;

}
.fas{
font-size: 30px;
}
          
        .custom-toggler.navbar-toggler {
            border-color: black;
        }
          
        .custom-toggler .navbar-toggler-icon {
            background-image: url(
"data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 128, 0, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }
       .dropdown-menu a:hover {
  background-color: #4fc3f7;
}
.navbar a {
    -webkit-transition: color 1s;
    transition: color 1s;
    text-decoration:none;
}
 .navbar a:hover {
    color: #ab47bc;
}
  </style>
<body>


<div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-custom border-bottom fixed-top bg-white">
        <div class="container-fluid">
         <a href="Adminhome.php"><img src="image/logo 7.jpg" style="height:120px;weight:120px;padding-left:5px;"></a>

			<button class="navbar-toggler custom-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav">
                <button class="btn btn-outline-dark border-0" style="border-radius: 40px">
                    <a href="Adminhome.php" class="nav-item nav-link active">Home</a>
                     </button>
                    <!--  <a href="ShowAll.php" class="nav-item nav-link" style="color:black">Products</a>-->
							
					<button class="btn btn-outline-dark border-0" style="border-radius: 40px">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Books</a>
                        <div class="dropdown-menu">
                        	<a href="AddBook.php" class="dropdown-item">Add New Books</a>
                            <a href="ViewAllBooks.php" class="dropdown-item">View All Books List</a>                                            
                        </div>
                    </div>
                    </button>
                     
                   <button class="btn btn-outline-dark border-0" style="border-radius: 40px">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Author</a>
                        <div class="dropdown-menu">
                        	<a href="AddAuthors.php" class="dropdown-item">Add New Author</a>
                            <a href="ViewAllAuthors.php" class="dropdown-item">View All Authors List</a>                                            
                        </div>
                    </div>
                    </button>
                    
                    <button class="btn btn-outline-dark border-0" style="border-radius: 40px">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
                        <div class="dropdown-menu">
                        	<a href="AddCat.php" class="dropdown-item">Add New Category</a>
                            <a href="ViewAllCat.php" class="dropdown-item">View All Categories List</a>                                            
                        </div>
                    </div>
                    </button>
                    <button class="btn btn-outline-dark border-0" style="border-radius: 40px">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Reports</a>
                        <div class="dropdown-menu">
                        	<a href="bestselling.php" class="dropdown-item">Best Selling Books</a>
                            <a href="order.php" class="dropdown-item">Loyal Customer List</a>
                            <a href="stock.php" class="dropdown-item">Stocks Information</a>
                            <a href="profit.php" class="dropdown-item">Monthly Profit</a>
                            <a href="sale.php" class="dropdown-item">Monthly Slae</a>                                            
                        </div>
                    </div>
                    </button>
                </div>
                               
                
                <form class="d-flex" method="POST" action="AdminSearchbar.php">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Here..." name="search">
                        <button type="submit" class="btn btn-dark"><i class="bi-search"></i></button>
                    </div>
                </form>
                
               
                
              
                    <?php 
                    if (isset($_SESSION['adminusername'])) 
                    {
                        $username=$_SESSION['adminusername'];
                    }?> 


<div class="navbar-nav" >
    			<li class="nav-item dropdown">
                		<a class="nav-link dropdown-toggle mb-3 mt-2" href="" data-bs-toggle="dropdown">
                		
                		<img src="https://img.icons8.com/external-kmg-design-detailed-outline-kmg-design/64/000000/external-sign-in-user-interface-kmg-design-detailed-outline-kmg-design.png"
style="height:40px;width:40px"/>
                		
                		</a>
                		<ul class="submenu dropdown-menu">
                			<li><a class="dropdown-item" href="Login.php">Login</a></li>
                			<li><a class="dropdown-item" href="Register.php">Sign Up</a></li>
                		</ul>
                </li>
               <li class="nav-item dropdown">
            		<a class="nav-link dropdown-toggle mb-3 mt-2" href="" data-bs-toggle="dropdown">
            		<?php if (isset($_SESSION['adminusername'])) {
            		    echo $username;
            		}else {?>
            		<img src="https://img.icons8.com/external-kmg-design-detailed-outline-kmg-design/64/000000/external-log-out-user-interface-kmg-design-detailed-outline-kmg-design.png"
style="height:40px;width:40px"/>
            		<?php }
            		?></a>
            		<ul class="submenu dropdown-menu">
            			<li><a class="dropdown-item" href="Signout.php">Logout</a></li>
            		</ul>
            </li>
   </div>           
            </div>
        </div>
    </nav>
</div>

</body>
</html>




