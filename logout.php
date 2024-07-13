<?php

include ("connection.php");

$sql = "SELECT email FROM mytbl WHERE isLogin='true'";
$login = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($login);
if($login->num_rows > 0) {
    echo $row["email"];
    $logoutacc = $row["email"];

    $logout = "UPDATE mytbl SET isLogin = 'false' WHERE isLogin = 'true'";
    
    mysqli_query($conn, $logout);
    header("Location: products.php");
            exit();
}
?>