<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
}else{
	echo "No connection";
}

mysqli_select_db($con,'portfoliouserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];


$query = " insert into userinfodata (user, email, mobile, comment) values('$user','$email','$mobile','$comment')";

echo "$query";

mysqli_query($con, $query);

header('location:index.html')


 ?>
