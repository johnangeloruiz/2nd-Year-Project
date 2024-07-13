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
    <link rel="stylesheet" type="text/css" href="css/locationcs.css">
    <title>Location</title>
</head>
<body>

    <br>
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

        <img  class="pic" src="css/img/sample.JPG"  alt="CVSU 1st Building">
        
    <div class="container">
       <div class="column">
        <h4>Location.</h4>
        
    </div>     
    <div class="column1">
        <p>Nestled within the sprawling grounds of Cavite State University (CVSU) - Silang Campus,
            this vibrant shop, under the efficient management of the esteemed Business Affairs division of CVSU,
            proudly stands tall at the distinguished 1st building, beckoning patrons to ascend to its welcoming 
            domain on the well-appointed 2nd floor. With its prime location amidst the academic hub, this shop 
            serves as a bustling hub of activity, catering to the diverse needs and desires of the university
            community and beyond, offering a captivating array of products and services to enrich the lives 
            and experiences of all who venture through its doors.   
           </p>
    </div>     
  
    </div>
    
    <br>
    <br>
    <br>
    <br>
            <div class="hrd">
                  <hr>
                  <h1> Google Map </h1>
                  <hr>
            </div>
    
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3867.2083610044087!2d120.97445748746397!3d14.241064240743476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd7e7d0744eafd%3A0xf25bff0f1b1deb7b!2sCavite%20State%20University%2C%20Silang%20Campus!5e0!3m2!1sen!2sph!4v1687056320905!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
       

</body>
</html> 
<?php
} else {
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/locationcs.css">
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
       <div class="column">
        <h4>Location.</h4>
        <img class="pic"  src="css/img/sample.JPG" alt="CVSU 1st Building">
    </div>     
    <div class="column1">
        <p>Nestled within the sprawling grounds of Cavite State University (CVSU) - Silang Campus,
            this vibrant shop, under the efficient management of the esteemed Business Affairs division of CVSU,
            proudly stands tall at the distinguished 1st building, beckoning patrons to ascend to its welcoming 
            domain on the well-appointed 2nd floor. With its prime location amidst the academic hub, this shop 
            serves as a bustling hub of activity, catering to the diverse needs and desires of the university
            community and beyond, offering a captivating array of products and services to enrich the lives 
            and experiences of all who venture through its doors.   
           </p>
    </div>     
  
    </div>
    
    <br>
    <br>
    <br>
    <br>
            <div class="hrd">
                  <hr>
                  <h1> Google Map </h1>
                  <hr>
            </div>
    
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3867.2083610044087!2d120.97445748746397!3d14.241064240743476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd7e7d0744eafd%3A0xf25bff0f1b1deb7b!2sCavite%20State%20University%2C%20Silang%20Campus!5e0!3m2!1sen!2sph!4v1687056320905!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </body>
</html> 
       

        

<?php
}
?>
