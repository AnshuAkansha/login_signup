  <?php

session_start();

if(!isset($_SESSION['username'])){
header('location:login.php');
}



$con = mysql1('localhost','root');

}
mysqli_select_db($con,'summer_of_coding');
if?(isset($_POST['submit'])){
	if(!empty($_POST['quizcheck'])){
		$count= count($_POST['quizcheck']);
		echo"Out of3 you have selected ".$count."options" ;

$result=0;
		$selected=$_POST['quizcheck'];
		print_r($selected);

		$q= "select *from question";
		$query= mysqli_query($con,$q);
		
		while($rows= mysqli_fetch array($query)){
			print_r($rows['ans_id']);


			$checked= $rows['ans_id']==$selected[$i];
			if($checked){
				$result++;
			}
			i++;
		}
		echo="<br> ur total score is".$result;
	}
}



$name= $_SESSION['username'];
$finalresult="insert into user(name,totalques,answercorrect) values ('$name','5','
result')";
$quesry= mysqli_query($con,$finalresult);

?>