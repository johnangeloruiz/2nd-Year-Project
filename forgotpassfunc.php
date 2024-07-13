
    

    <?php
    if(isset($_POST['fpassword'])) {
        $pass = $_POST['fpass'];

        if(empty($_POST['fpass'])){
            
            echo '<script>alert("Please input your email.")</script>';
            readfile("forgotpass.php");
        } else {
            
            echo '<script>alert("We sent your password on your email!")</script>';
            readfile("login.php");
        } 
        
    }   
    
    ?>
 