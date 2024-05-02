<?php
if(isset($_GET['user_id'])){
    require_once 'connect.php';
    $user_id=$_GET['user_id'];
    $sql = "DELETE FROM users where user_id='$user_id'";
    mysqli_query($connection,$sql); 
    header('location:register.php');
}else{
    header('location:register.php');
}