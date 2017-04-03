<?php
include 'conn.php';


$first=$_POST['first'];
$last=$_POST['last'];
$branch=$_POST['branch'];
$sem=$_POST['sem'];
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

$encrypted_password=password_hash($pwd, PASSWORD_DEFAULT);
$sql="INSERT into details( first, last, branch, sem, uid, pwd) values('$first','$last','$branch','$sem','$uid','$encrypted_password')";
$result=mysqli_query($conn,$sql);
header('Location:index.php');