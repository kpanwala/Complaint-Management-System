<!doctype html>
<title>Home</title>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php
// session_start();
// $id=$_SESSION["id"];
// $name=$_SESSION["name"];
// $department=$_SESSION["department"];
// $designation=$_SESSION["designation"];
?>
<?php include 'start.php';?>

</head>
<body>
<h1>Logged in as <?php echo $designation.' '.$name.' from '.$department.' department'?></h1>
</body>
</html>