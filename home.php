<?php
include ("connection.php");
$sql = "SELECT email FROM mytbl WHERE isLogin='true'";
$login = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($login);

if($login->num_rows > 0) {
    
    

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/homecs.css">
    
    
    <title>Home Page</title>
</head>
<body>
<div class="hero">
    <nav>
        <h2 class="logo"> CVSU Uniform <span>Inventory System</span></h2>
        <ul>
          <li>
            <a href="home.php">Home</a>
        </li>
          <li>
            <a href="location.php">Location</a>
          </li>
          <li>
            <a href="products.php">Products</a>
          </li>
          <li>
          <a href="account.php"> <a href="account.php"><?php echo $row["email"]; ?></a></a>
          </li>
        </ul> 
      </nav>
            
        </div>
         
          
        
        <div class="container">
            <div>
                <a href="products.php">
                    <img src="css/img/poloM.png" alt="Polo Male">
                    <p>Description</p>
                </a>
            </div>
            <div>
                <a href="products.php">

                    <img src="css/img/poloF.png" alt="Polo Female">
                    <p>Description</p>
                </a>
            </div>
            <div>
                <a href="products.php">

                    <img src="css/img/pantsM.png" alt="Pants Male">
                    <p>Description</p>
                </a>
                  </div>
            <div>
                <a href="products.php">
  
                    <img src="css/img/slacksF.png" alt="Slacks Female">
                    <p></p>
                </a>
            </div>
            <div>
                <a href="products.php">

                    <img src="css/img/peTShirt.png" alt="PE T-Shirt">
                    <p></p>
                </a>
            </div>
            <div>
                <a href="products.php">

                    <img src="css/img/peJPants.png" alt="PE Jogging Pants">
                    <p></p>
                </a>
            </div>
            <div>
                <a href="products.php">

                    <img src="css/img/lanyard.png" alt="Lanyard / ID Lace">
                    <p></p>
                </a>
            </div>
        </div>
        <div>
            <h4>Time and Date</h4>
           
</div>
    </div>
</body>
</html>
<?php
}else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/homecs.css">
    <title>Home Page</title>
</head>
<body>
    <div>
    <div class="hero">
    <nav>
        <h2 class="logo"> CVSU Uniform <span>Inventory System</span></h2>
        <ul>
          <li>
            <a href="home.php">Home</a>
        </li>
          <li>
            <a href="location.php">Location</a>
          </li>
          <li>
            <a href="products.php">Products</a>
          </li>
          <li>
          <a href="login.php">Login</a>
          </li>
        </ul> 
      </nav>
            
        </div>
        
        <div class="container">
            <div>
                <a href="products.php">
                    <h3></h3>
                    <img src="css/img/poloM.png" alt="Polo Male">
                    <p></p>
                </a>
            </div>
            <div>
                <a href="products.php">
                    <h3></h3>
                    <img src="css/img/poloF.png" alt="Polo Female">
                    <p></p>
                </a>
            </div>
            <div>
                <a href="products.php">
                    <h3></h3>
                    <img src="css/img/pantsM.png" alt="Pants Male">
                    <p></p>
                </a>
                  </div>
            <div>
                <a href="products.php">
                    <h3></h3>
                    <img src="css/img/slacksF.png" alt="Slacks Female">
                    <p></p>
                </a>
            </div>
            <div>
                <a href="products.php">
                    <h3></h3>
                    <img src="css/img/peTShirt.png" alt="PE T-Shirt">
                    <p></p>
                </a>
            </div>
            <div>
                <a href="products.php">
                    <h3></h3>
                    <img src="css/img/peJPants.png" alt="PE Jogging Pants">
                    <p></p>
                </a>
            </div>
            <div>
                <a href="products.php">
                    <h3></h3>
                    <img src="css/img/lanyard.png" alt="Lanyard / ID Lace">
                    <p></p>
                </a>
            </div>
        </div>
        <div>
        <div>
            <h4>Time and Date</h4>
            <div id="DigitalCLOCK" class="clock" onload="showTime()"></div>
            <script  src="function.js"></script>
        </div>
    </div>
</body>
</html>
<?php
}
?>