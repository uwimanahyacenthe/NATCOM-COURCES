<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <div class="form">
    <form action="register.php" method="post">
        <div class="labels">
        <label for="name">Name</label>
        <input type="text"name="name" id="name"><br>
        <label for="email">EMAIL</label>
        <input type="email"email="email" name="email" id="email"><br>
        <label for="password">PASSWORD</label>
        <input type="password"password="password" name="password" id="password" required><br>
        </div>
        <div class="submit">
        <input type="submit" name="submit" value="register">
        </div>
    </form>
    </div>
<?php
include("connect.php");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    
  $query ="INSERT INTO users(name,password,email) VALUES ('$name','$password','$email');
  ";
  $result = mysqli_query($connection,$query);
  header('location: index.php?message=success');
  mysqli_close($connection);
}
?>
<table>
    <tr>
    <th>user id</th>
    <th>name</th>
    <th>password</th>
    <th>email</th>
    <th>created_at</th></tr>

<?php
 $connection =mysqli_connect('localhost','root','','crud'); 
$query = "SELECT * FROM users";
//$query = $connection->query($query);
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row['user_id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td>".$row['created_at']."</td>";
        echo "<td>"."<a href='update.php?user_id={$row['user_id']}'>update</a>"."</td>";
        echo "<td>"."<a href='delete.php?user_id={$row['user_id']}'>delete</a>"."</td>";
        echo "</tr>";
    }
}
else{
    echo"<td> no data found.</td>";
}

?>
</table>
</body>
</html>