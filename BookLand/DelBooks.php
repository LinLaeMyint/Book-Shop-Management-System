<?php session_start();ob_start();?>
<?php include 'dbconnection.php';?>
<?php include 'NavAdmin.php';?>
<br><br><br><br><br><br>
<?php 
$msg = '';

if (isset($_GET['book_id'])) {
    $stmt = $db1->prepare('SELECT * FROM book WHERE book_id = ?');
    $stmt->execute([ $_GET['book_id'] ]);
    $pro = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$pro) {
        exit('Books information doesn\'t exist with that ID!');
    }
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            $stmt = $db1->prepare('DELETE FROM book WHERE book_id = ?');
            $stmt->execute([ $_GET['book_id'] ]);
            

            header('Location: ViewAllBooks.php?book_id=' . $_GET['book_id']);
        } else {
            header('Location: ViewAllBooks.php');

        }
    }//end if
} else {
    exit('No ID specified!');
}
?>

<html>
   <head>
		<meta charset="UTF-8">
		<title>Edit Books</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!--           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
        $(document).ready(function(){
        $.ajax({
          url: 'DelBooks.php',
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


  .yesno {
      display: flex;
}
 .yesno a {
      display: inline-block;
      text-decoration: none;
      background-color: black;
      font-weight: bold;
      color: white;
      padding: 10px 15px;
      margin: 15px 10px 15px 0;
      border-radius: 5px;
}


</style>
<body>

	<div class="container" >	
<u><h2><center>Removing Books Information</center></h2></u>
<br>	
	<h4 style="font-weight:bold">Delete Books ID <?=$pro['book_id']?></h4>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Are you sure you want to delete Books ID <?=$pro['book_id']?>?</p>
    <div class="yesno">
        <a href="DelBooks.php?book_id=<?=$pro['book_id']?>&confirm=yes">Yes</a>
        <a href="DelBooks.php?book_id=<?=$pro['book_id']?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>


</body>
</html>



