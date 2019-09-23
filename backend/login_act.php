<?php
require('dbconnect.php');
session_start();



$username=isset($_POST['username'])?$_POST['username']:"";

$password=isset($_POST['password'])?$_POST['password']:"";

$password=sha1($password);

if(empty($username)){
    echo "<script>
    alert('username can not be empty');
    location.href='login.php';
    </script>";
}
if(empty($password)){
    echo "<script>
    alert('password can not be empty');
    location.href='login.php';
    </script>";
}



$sql = "select * from user where username = '$username' and password = '$password'";

$result = mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
//var_dump($row);


if($row){

    $_SESSION['id'] = $row['id'];

    echo "<script>
    alert('login successfully');
    location.href='admin.php';
    </script>";
}else{
    echo "<script>
    alert('incorrect username or password');
    location.href='login.php';
    </script>";
}
//$arr = array();
//while($row=mysqli_fetch_assoc($result)){
//     $arr[] = $row;
//}








?>