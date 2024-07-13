<?php

include ("connection.php");

if(isset($_POST['submit'])){

    if(!empty($_POST['name']) && !empty($_POST['gender']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['studentnumber']) && !empty($_POST['department'])) {
        $check = "SELECT * FROM mytbl WHERE email = '$_POST[email]'";
        $rs = mysqli_query($conn,$check);
        $data = mysqli_fetch_array($rs, MYSQLI_NUM);
        if($data[0] >= 1 ){
            echo '<script>alert("Email already existed")
            window.location.href="login.php"</script>';
        }else {

        
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        $studentnumber = $_POST['studentnumber'];
        $gender = $_POST['gender'];
        $query = "insert into mytbl(name, gender, email, password, studentnumber, department) values('$name' , '$gender' , '$email' , '$password' , '$studentnumber' , '$department')" ;
    
        $run = mysqli_query($conn, $query) or die(mysqli_error());
        
        if($run) {
            echo '<script>alert("Form submitted successfully")
            window.location.href="login.php"</script>';
        } else {
            echo '<script>alert("Form not submitted")
            window.location.href="login.php"</script>';
            
        }
    }
    }
else {
    echo '<script>alert("All fields required")
    window.location.href="login.php"</script>';
}

}

?>