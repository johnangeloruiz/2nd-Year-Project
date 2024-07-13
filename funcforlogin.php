<?php
include ("connection.php");

if(isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$email = validate($_POST['email']);
$password = validate($_POST['password']);

if (empty($email)){
    header ("Location: login.php?erro=Email is required");
    exit();
}
if (empty($password)){
    header ("Location: login.php?erro=Password is required");
    exit();
}

$sql = "SELECT * FROM mytbl WHERE email='$email' AND password='$password'";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    if($row['email'] == $email && $row['password']==$password){
        if($email == "admin@cvsu.edu.ph" && $password == "admin01234") {
            header("Location: admin.php");
            exit();
        } else {
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['id'] = $row['id'];
            $didLogin = "UPDATE mytbl SET isLogin = 'true' WHERE email = '$email'";
            mysqli_query($conn, $didLogin);
            header("Location: products.php");
            exit();
        }
        
    }
    else {
        header("Location: login.php?error=Incorrect Email or Password");
        exit();
    }
}
else {
    header("Location: login.php");
    exit();
}
?>