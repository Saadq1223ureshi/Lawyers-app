<?php
$conn = new mysqli('localhost','root','','lawyers');

if($conn->connect_error){
    die("connection failed!");
} else{
    echo "";
}

?>