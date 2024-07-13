<link rel="stylesheet" type="text/css" href="css/accountcss.css">
<?php
include ("connection.php");
$sql = "SELECT email FROM mytbl WHERE isLogin='true'";
$login = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($login);

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/accountcss.css">
    <title>Cart Page</title>
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
        <a href="account.php"><?php echo $row["email"]; ?></a></a>
          </li>
        </ul> 
      </nav>
            
        </div>
    </div>
</body>
</html>
<?php
include ("connection.php");
$sql = "SELECT * FROM mytbl WHERE isLogin='true'";
$login = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($login);
$name = $row["name"];
$gender = $row["gender"];
$email = $row["email"];
$studnumber = $row["studentnumber"];
$department = $row["department"];

if($login->num_rows > 0) {

  
    echo "<div class='container'>
    <p>Name: $name</p>
    <p>Gender: $gender</p>
    <p>Email: $email</p>
    <p>Student Number: $studnumber</p>
   <p>Department: $department</p>
    
    </div>
  ";
}
?>