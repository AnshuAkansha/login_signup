<?php

session_start();

if(!isset($_SESSION['username'])){
header('location:login.php');
}



$con = mysql1('localhost','root');

}
mysqli_select_db($con,'summer_of_coding');
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		<link rel="stylesheet" type="text/css" href="bootstarp.css">
	</title>
</head>
<body>
	<div class="container">

<br><h1 class="text-center text-primary">The examination world awaits for you</h1><br>


	<br><h2 class="text-center text-success">Welcome<?php echo $_SESSION_['username'];?></h2><br>
<div class="col-lg-8 m-auto d-block">
	<div class=
	'card'>
		
		<h3 class="text-center card-header"> welcome <?php echo $_SESSION['username'];?>, you have to select only one from these.</h3>
	</div><br>
<form action=" check.php" method="post">

	<?php
 for($i=1; $i<6;$i++){
$q="select * from question qid=$i";
$query = mysqli_query($con,$q);
while ($rows = mysqli_fetch_array($query)) {?>
	<div class="card">
		
		<h4 class="card-header"><?php echo $rows['question']?>;</h4>
	}
<?php
  
$q="select * from answers ans_id=$i";
$query = mysqli_query($con,$q);
while ($rows = mysqli_fetch_array($query)) {?>
<div class="card-body">
	<input type="radio" name="quizcheck[<? echo $rows['ans_id'] value="<?php echo $rows['aid'];?>">
<?

echo $rows['answer'];?></div>

?>
	?>
	<?php
}
}
?>

<input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d-block">
</form>
</div>
</div><br><br>
<div class="m-auto d-block">
		<a href="logout.php" class="btn btn-primary">LOGOUT</a>
</div><br>

<div>
	<h5 class="text-center"> thank you</h5><br><br>
</div>
</div>
</body>
</!DOCTYPE html>
</html>
