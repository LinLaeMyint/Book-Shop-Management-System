<?php session_start();?>
<?php include 'dbconnection.php';?>
<?php 
$msg='';
try {
    if(isset($_POST["login"])){
        $email=$_POST["email"];
        $pass=$_POST["password"];
       
        
        
        $query="SELECT * FROM users WHERE email='$email' AND password='$pass' AND role='User'";
        $statement1=$db1->query($query);
        
    


        $admin=$statement1->fetchAll(PDO::FETCH_ASSOC);
        $countUser=$statement1->rowCount();//for admin role
        
        

        
        if($countUser>0){
            foreach ($admin as $rows){
                $_SESSION['user_id']=$rows['user_id'];
                $_SESSION['username']=$rows['username'];
                $_SESSION['email']=$rows['email'];
                header('Location: view-cart.php' );
                
            }

        }//for admin role
        
    }
} catch (PDOException $error) {
    $msg=$error->getMessage();
}
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<style>
body{

background: url(image/bg16.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
h1{
color: white;
text-align: center;
}
.btn-dark {
    color: #fff;
    background-color:black;
    border-color: #357ebd; /*set the color you want here*/
}
.btn-dark:hover, .btn-dark:focus, .btn-dark:active, .btn-dark.active, .open>.dropdown-toggle.btn-dark {
    color: black;
    background-color:  yellow;
    border-color: yellow; /*set the color you want here*/
}  
a {
    -webkit-transition: color 1s;
    transition: color 1s;
    
}
a:hover {
    color: yellow;
}
</style>
<body>
<br><br><br><br>
<h1>Login Form</h1>
<br>
    <form method="POST" action="" style="color:black;text-align:center;margin:0 auto;width:400;" enctype="multipart/form-data">
    <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="username" style="color:white">UserName</label>
            		<div class="col-sm-8">
            		    <input type="text" class="form-control form-control-lg" name="username" required/>
            		</div>
    </div>
    <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="email" style="color:white">Email</label>
            		<div class="col-sm-8">
            		    <input type="text" class="form-control form-control-lg" name="email" required/>
            		</div>
    </div>             
 	<div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="password" style="color:white">Password</label>
            		<div class="col-sm-8">
            		    <input type="password" class="form-control form-control-lg" name="password" required/>
            		</div>
    </div>  
<br>
    <div class="mb-4">
                    <input class="btn btn-dark btn-lg btn-block" type="submit" name="login" style="float:right" value="Login">
    </div>               
                  <p class="mb-5 pb-lg-2" style="color: white;">Don't have an account? <a href="CustomerRegister.php">Register here</a></p>
                </form>


</body>
</html>