<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
    <label for="username">Username:</label>
    <input type="text"  id="username" name="username"><br>
    <label for="email">email:</label>
    <input type="email"  id="email" name="email"><br>
    <label for="password">Password:</label>
    <input type="password"  id="password" name="password"><br>

  <button type="submit">Submit</button>
</form>
<?php
if(isset($_GET['user_id'])){
    $name=$_POST['name']
}
?>
</body>
</html>