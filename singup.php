<?php

require_once"./conn.php";

if(isset($_POST['Singup'])){
    $NAME=$_POST["Username"];
    $FIRSTNAME=$_POST["Firstname"];
    $LASTNAME=$_POST["Lastname"];
    $Password=$_POST["Password"];
    
    $sql="INSERT INTO users(Username, Password, Firstname, Lastname)values('{$NAME}','{$Password}','{$FIRSTNAME}' ,'{$LASTNAME}')";
    
    if($conn->query($sql)){
        $success = "account ban gya";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="singup.css">
</head>

<body>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <?php
if(isset($success)){

    ?>

    <p><?= $success ?></p>
    <?php
}
        ?>
        <form action="singup.php" method="POST">
            <div class="form-group">
                <input type="text" id="username" name="Username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="text" id="username" name="Firstname" placeholder="Firstname" required>
            </div>
            <div class="form-group">
                <input type="text" id="username" name="Lastname" placeholder="Lastname" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="Password" placeholder="Password" required>
            </div>
            <button type="submit" name="Singup">Sign Up</button>
            <p>
            don't have an accont?
            <a href="./login.php">Login</a>
</p>
        </form>
    </div>








    

    
</body>
</html>