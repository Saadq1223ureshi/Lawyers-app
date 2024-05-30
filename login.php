<?php

session_start();

if(isset($_SESSION['id'])){
    header('location: home.php');
}
require_once"./conn.php";

if(isset($_POST['login-btn'])){
    $email=$_POST['email'];
    $password= $_POST['password'];

    $sql="SELECT * FROM users WHERE Email = '{$email}' AND Password='{$password}'";
   $result = $conn->query($sql);

  if($result->num_rows > 0){
    header('location: ./home.php');
    while($row = $result->fetch_assoc()){
        $_SESSION['id'] = $row['id'];
    }
  } 
  else{
    echo"Invaild credintials!";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Login</button>
            
        <p>
            don't have an accont?
            <a href="./singup.php">Signup</a>
</p>
        </form>
    </div>
    
    <br><br>

<br><br>

    
<br><br>
</body>
</body>
</html>










