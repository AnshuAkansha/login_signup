<?php
session_start();
header('location:login.php');
$con = mysqli_connect('localhost','tumbler4523');
if ($con) {
	echo "coonection successful";# code...
}else{
	echo"no connection";
}
mysqli_select_db($con,'summer_of_coding');
$name= $_POST['user'];
$pass=$_POST['password'];
$q="select * from sigin where name = '$name' && password='$pass'";
$result= mysqli_query($con,$q);
$num= mysqli_num_rows($result);
if($num==1){
	echo"duplicate data";
}else{
	$qy="insert into signin(name,password) values ('$name','$pass')";
	mysqli_query($con,$qy);
}
}

?>