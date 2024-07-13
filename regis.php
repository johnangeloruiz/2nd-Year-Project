<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" type="text/css" href="css/registrationpage.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    <div class="inputBox">
        <form action="register.php" method="post">
            
                 <br>        
                 <br>
                <input type="text" required= "required" name="name">
                <span>Name</span>
                <br>        
                <br>
                <input type="text" required= "required" name="email">
                <span>Email</span>
                <br>        
                <br>
                <input type="text" required= "required" name="gender">
                <span>Gender</span>
                <br>        
                <br>
                <input type="password" required="required" name="password" id="passwordInput">
                <span>Password</span>
                <br>
                <br>
                <input type="text" required= "required" name="studentnumber">
                <span>Student Number</span>
                <br>        
                <br>
                <input type="text" required= "required" name="department">
                <span>Department</span>
                <br>        
                <br>
            <button type="submit" name="submit">Submit</button>
        </form>      
      
        <br>
        <br>  
    </div>
    <a href="login.php" style="--clr:#00dfc4" ><span>Go back to Login Page</span><i></i></a>
</body>
</html>