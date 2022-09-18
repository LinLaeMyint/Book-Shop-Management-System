<?php session_start();?>
<?php include 'dbconnection.php';?>
<?php
if(isset($_POST['register'])){
$usrname = $_POST['username'];
$usremail = $_POST['email'];
$usrpsw = $_POST['password'];
$usrrole="User";

$q = "SELECT * FROM users where (email = '$usremail') AND (username='$usrname')";

$statement1=$db1->query($q);

if ($statement1->rowCount() > 0) {
    echo"This account is already register!";
}

else{    
    if ($_POST["password"] == $_POST["confirmpassword"]) {
        try {
            if(filter_var($usremail, FILTER_VALIDATE_EMAIL)) {
                
                if(preg_replace("/[^A-Za-z0-9]/","",$_POST['username'])){
        $sql="INSERT INTO users(username,email,password,role) VALUE(?,?,?,?)";
        $stmt=$db1->prepare($sql);
        $stmt->execute([$usrname,$usremail,$usrpsw,$usrrole]);
        $uid=$db1->lastInsertId();        
        if(isset($usrname)&&isset($usremail)&&isset($usrpsw)){
            
            
            if( $usrrole="User")
            {
                header('Location: view-cart.php?user_id=' . $uid);
                $_SESSION['user_id']=$uid;
                $_SESSION['username']=$usrname;
                $_SESSION['email']=$usremail;
            }
            else{
                echo "Invalid";
                
            }
        }}//end if
        
        else{echo "Please Enter Valid UserName!";}//valid username
            } //valild email
            else{
                echo "Please Enter Valid Email Format";
                
            }//valid email
    }//end try
    catch(PDOException $error)
    {
        echo $msg=$error->getMessage();
    }
        
    }

    else{
        echo "Your password do not match!";
    }
    
    

}
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

background: url(image/bg8.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
/*   font-family:Copperplate, Papyrus, fantasy; */
}
h1{
color: white;
text-align: center;
font-weight:bold;
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
<br><br><br>
<h1>Sign Up an Account</h1>
<br><br>
    <form method="POST" action="" style="color:white;text-align:center;margin:0 auto;width:400;font-weight:bold" enctype="multipart/form-data">
    <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="username" >UserName</label>
            		<div class="col-sm-8">
            		    <input type="text" class="form-control form-control-lg" name="username" required/>
            		</div>
    </div>
    <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="email" >Email</label>
            		<div class="col-sm-8">
            		    <input type="text" class="form-control form-control-lg" name="email" required/>
            		</div>
    </div>             
 	<div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="password" >Password</label>
            		<div class="col-sm-8">
            		    <input type="password" class="form-control form-control-lg" name="password" required/>
            		</div>
    </div>
    <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="password" >Confirm Password</label>
            		<div class="col-sm-8">
            		    <input type="password" class="form-control form-control-lg" name="confirmpassword" required/>
            		</div>
    </div>  
<br>
    <div class="mb-4">
                    <input class="btn btn-dark btn-lg btn-block" type="submit" name="register" style="float:right" value="Register">
    </div>               
                  <p class="mb-5 pb-lg-2" style="color:black">Already have an account? <a href="CustomerLogin.php">Login here</a></p>
                </form>
</body>
</html>