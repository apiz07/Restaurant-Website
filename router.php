<?php
include 'connect.php';
$success = false;

$username = $_POST['username'];
$password = $_POST['psswrd'];

$result = mysqli_query($conn, "SELECT *FROM admin WHERE username='$username' AND password='$password'");
while($row = mysqli_fetch_array($result))
{
    $success = true;
    $user_id = $row['id'];
}
if($success == true)
{
    session_start();
    $_SESSION['admin_id']==session_id();
    $_SESSION['user_id'] = $user_id;

    header("location: admin.php");
}
else
{
    header("location: login.php");
}


?>