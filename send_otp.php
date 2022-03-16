<?php
error_reporting(E_ERROR | E_PARSE);
$con=mysqli_connect('localhost','root','');
echo $email=$_POST['email'];
$res=mysqli_query($con,"select * from user where email='$email'");
//$count=mysqli_num_rows($res);
if($email>0){
	echo "yes";
}else{
	echo "Not_Exist";
}
?>