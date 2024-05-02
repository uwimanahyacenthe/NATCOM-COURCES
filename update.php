<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_GET['user_id'])){
    $user_id=$_GET['user_id'];
    require_once 'connect.php';
    $query = "SELECT * FROM `users` WHERE user_id=$user_id;";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        echo"
        <form action='handle_update.php' method='post'>
        <div>
        <label for='name'>Name</label>
        <input type='hidden' name='user_id' id='user_id' value='{$row['user_id']}'><br>
        <input type='text' name='name' id='name' value='{$row['name']}'><br>
        <label for='email'>EMAIL</label>
        <input type='email' name='email' id='email' value='{$row['email']}'><br>
        <label for='password'>PASSWORD</label>
        <input type='text' name='password' id='password' value='{$row['password']}' required><br>
        </div>
        <div class='submit'>
        <input type='submit' name='submit' value='register'>
        </div>
    </form>
       ";

    }else{
        echo"user doesnot exist";
        mysqli_close($connection);
    }

}else{
    header('location:register.php');
}
?>
</form>
</body>
</html>