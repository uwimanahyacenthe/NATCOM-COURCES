<?php
require_once 'connect.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user_id = $_POST['user_id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    try {
        $sql = "UPDATE users SET name='$name', email='$email', password='$password' WHERE user_id='$user_id'";
        $result= mysqli_query($connection, $sql);
    } catch (\Throwable $th) {
        throw $th;
    }
    

    if($result){
        header('location:register.php');
        mysqli_close($connection);
    }else{
        echo 'update failed';
        mysqli_close($connection);
    }
}