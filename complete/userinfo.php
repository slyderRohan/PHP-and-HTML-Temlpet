<?php 

$con = mysqli_connect('localhost', 'root');

if($con){
	echo "Connection Successful";
}else{
	echo "No Connection";
}

mysqli_select_db($con, 'userdatabase');

$name = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = " insert into userinfodata (user, email, phone, comment) values('$name','$email','$mobile','$comments') ";
mysqli_query($con, $query);

header('location:index.php');
 ?>