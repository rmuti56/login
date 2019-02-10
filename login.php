<?php
require __DIR__ . '/db.php';
$db = DB();
session_start();
ob_start();
$email = @$_POST['email'];
$password = @$_POST['password'];
$sql = mysqli_query($db,"SELECT * FROM user_tbl WHERE email='".@$_POST['email']."' AND password='". md5(@$_POST['password'])."'");
if(mysqli_num_rows($sql) > 0){
    setcookie('email',$email);
    setcookie('password',$password);
    header("location: ./home.php");
    ob_end_flush();
}
else{
    header("location: ./login1.html");
}
?>