<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/logincs.css">
    <title>Login Page</title>
</head>
<body>
    <div>
    
        <div>
            <form action="funcforlogin.php" method="post">
            
            <?php if(isset($_GET['error'])) {?>
                    <p class="error"> <?php echo $_GET['error'];?> </p>
               <?php } 
                ?>


                <div class="box">
    <div class="container">
        <div class="top">
            <span>Have an account?</span>
            <header>Sign In</header>
        </div>
        <div class="input-field">
            <input type="text" class="input" name="email" placeholder="Username" id="email">
        </div>
        <div class="input-field">
            <input type="Password" class="input" name="password" placeholder="Password" id="password">

        </div>
        <div class="input-field">
            <input type="submit" class="submit" value="Login" name="login" id="login">
        </div>
        <div class="two-col">
            <div class="one">
               <input type="checkbox" name="" id="check">
               <label for="check"> Remember Me</label>
            </div>
            <div class="two">
                <label><a href="forgotpass.php">Forgot password?</a></label>
            </div>
        </div>
    </div>
</div>  
                
            </form>
            
            <a class="itik" href="regis.php" style="--clr:#00dfc4" ><span class="">Register</span><i></i></a>
        </div>
    </div>
</body>
</html>