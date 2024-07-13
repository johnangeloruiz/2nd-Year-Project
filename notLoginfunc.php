<?php
include("connection.php");

if(isset($_POST["notlogin"])) {
    echo '<script>alert("Please Login or Register your account")
            window.location.href="login.php"</script>';
} 

?>