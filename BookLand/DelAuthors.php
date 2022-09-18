<?php session_start();ob_start();?>
<?php include 'dbconnection.php';?>
<?php include 'NavAdmin.php';?>
<br><br><br><br><br><br>
<?php 
$msg = '';

if (isset($_GET['author_id'])) {
    $stmt = $db1->prepare('SELECT * FROM author WHERE author_id = ?');
    $stmt->execute([ $_GET['author_id'] ]);
    $pro = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$pro) {
        exit('Author information doesn\'t exist with that ID!');
    }
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            $stmt = $db1->prepare('DELETE FROM author WHERE author_id = ?');
            $stmt->execute([ $_GET['author_id'] ]);
            

            header('Location: ViewAllAuthors.php?author_id=' . $_GET['author_id']);
        } else {
            header('Location: ViewAllAuthors.php');

        }
    }//end if
} else {
    exit('No ID specified!');
}
?>

<html>
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
          url: 'DelAuthors.php',
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
<u><h2><center>Removing Authors Information</center></h2></u>
<br>	
	<h4 style="font-weight:bold">Delete Author ID <?=$pro['author_id']?></h4>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Are you sure you want to delete Author ID <?=$pro['author_id']?>?</p>
    <div class="yesno">
        <a href="DelAuthors.php?author_id=<?=$pro['author_id']?>&confirm=yes">Yes</a>
        <a href="DelAuthors.php?author_id=<?=$pro['author_id']?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>

</body>
</html>



