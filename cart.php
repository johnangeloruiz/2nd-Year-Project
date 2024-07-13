
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
</head>
<body>
    <div>
        <a href="home.php">Home</a>
        <a href="products.php">Products</a>
        <a href=""></a>
        <a href=""></a>
    </div>
</body>
</html>

<?php
include("connection.php");
    $cartpoloMSinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Male' && productSize = 'Small' ";
    $cartpoloMSQueryinserted = mysqli_query($conn, $cartpoloMSinserted);
    $cartrowStockMSinserted = mysqli_fetch_assoc($cartpoloMSQueryinserted);
    
    $poloMMinserted = $cartrowStockMSinserted['inserted'];
    if($poloMMinserted == 'true'){
        $cartpoloMS = "SELECT * FROM carttbl WHERE productName = 'Polo Male' && productSize = 'Small'";
        $cartpoloMSQuery = mysqli_query($conn, $cartpoloMS);
        $cartrowStockMS = mysqli_fetch_assoc($cartpoloMSQuery);
        if($cartrowStockMS["productName"] == null && $cartrowStockMS["productSize"] == null && $cartrowStockMS["productPrice"] == null && $cartrowStockMS["productQuantity"] == null && $cartrowStockMS["productTotalPrice"] == null) {

        } else {
            $cartPoloMSNvar = $cartrowStockMS["productName"];
            $cartPoloMSSvar = $cartrowStockMS["productSize"];
            $cartPoloMSPvar = $cartrowStockMS["productPrice"];
            $cartPoloMSQvar = $cartrowStockMS["productQuantity"];
            $cartPoloMSTPvar = $cartrowStockMS["productTotalPrice"];
        
            
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartPoloMSNvar</p>
            <p>Product Size: $cartPoloMSSvar</p>
            <p>Product Price: $cartPoloMSPvar</p>
            <p>Product Quantity: $cartPoloMSQvar</p>
            <p>Product Total Price: $cartPoloMSTPvar</p>
                
            <button name='PoloMSDelete'>Remove</button>
    
            </form>";
        }
    }
    
    $cartpoloMMinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Male' && productSize = 'Medium' ";
    $cartpoloMMQueryinserted = mysqli_query($conn, $cartpoloMMinserted);
    $cartrowStockMMinserted = mysqli_fetch_assoc($cartpoloMMQueryinserted);
    
    $poloMMinserted = $cartrowStockMMinserted['inserted'];
    if($poloMMinserted == 'true'){

        $cartpoloMM = "SELECT * FROM carttbl WHERE productName = 'Polo Male' && productSize = 'Medium'";
        $cartpoloMMQuery = mysqli_query($conn, $cartpoloMM);
        $cartrowStockMM = mysqli_fetch_assoc($cartpoloMMQuery);
        if($cartrowStockMM["productName"] == null && $cartrowStockMM["productSize"] && $cartrowStockMM["productPrice"] && $cartrowStockMM["productQuantity"] && $cartrowStockMM["productTotalPrice"]) {

        }else {
            $cartPoloMMNvar = $cartrowStockMM["productName"];
            $cartPoloMMSvar = $cartrowStockMM["productSize"];
            $cartPoloMMPvar = $cartrowStockMM["productPrice"];
            $cartPoloMMQvar = $cartrowStockMM["productQuantity"];
            $cartPoloMMTPvar = $cartrowStockMM["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartPoloMMNvar</p>
            <p>Product Size: $cartPoloMMSvar</p>
            <p>Product Price: $cartPoloMMPvar</p>
            <p>Product Quantity: $cartPoloMMQvar</p>
            <p>Product Total Price: $cartPoloMMTPvar</p>
                
            <button name='PoloMMDelete'>Remove</button>
    
            </form>";
        }
       
    }
    $cartpoloMLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Male' && productSize = 'Large' ";
    $cartpoloMLQueryinserted = mysqli_query($conn, $cartpoloMLinserted);
    $cartrowStockMLinserted = mysqli_fetch_assoc($cartpoloMLQueryinserted);
    
    $poloMLinserted = $cartrowStockMLinserted['inserted'];
    if($poloMLinserted == 'true'){

        $cartpoloML = "SELECT * FROM carttbl WHERE productName = 'Polo Male' && productSize = 'Large'";
        $cartpoloMLQuery = mysqli_query($conn, $cartpoloML);
        $cartrowStockML = mysqli_fetch_assoc($cartpoloMLQuery);
        if($cartrowStockML["productName"] == null && $cartrowStockML["productSize"] && $cartrowStockML["productPrice"] && $cartrowStockML["productQuantity"] && $cartrowStockML["productTotalPrice"]) {

        }else {
            $cartPoloMLNvar = $cartrowStockML["productName"];
            $cartPoloMLSvar = $cartrowStockML["productSize"];
            $cartPoloMLPvar = $cartrowStockML["productPrice"];
            $cartPoloMLQvar = $cartrowStockML["productQuantity"];
            $cartPoloMLTPvar = $cartrowStockML["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartPoloMLNvar</p>
            <p>Product Size: $cartPoloMLSvar</p>
            <p>Product Price: $cartPoloMLPvar</p>
            <p>Product Quantity: $cartPoloMLQvar</p>
            <p>Product Total Price: $cartPoloMLTPvar</p>
                
            <button name='PoloMLDelete'>Remove</button>
    
            </form>";
        }
       
    }
    $cartpoloMXLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Male' && productSize = 'XL' ";
    $cartpoloMXLQueryinserted = mysqli_query($conn, $cartpoloMXLinserted);
    $cartrowStockMXLinserted = mysqli_fetch_assoc($cartpoloMXLQueryinserted);
    
    $poloMXLinserted = $cartrowStockMXLinserted['inserted'];
    if($poloMXLinserted == 'true'){

        $cartpoloMXL = "SELECT * FROM carttbl WHERE productName = 'Polo Male' && productSize = 'XL'";
        $cartpoloMXLQuery = mysqli_query($conn, $cartpoloMXL);
        $cartrowStockMXL = mysqli_fetch_assoc($cartpoloMXLQuery);
        if($cartrowStockMXL["productName"] == null && $cartrowStockMXL["productSize"] && $cartrowStockMXL["productPrice"] && $cartrowStockMXL["productQuantity"] && $cartrowStockMXL["productTotalPrice"]) {

        }else {
            $cartPoloMXLNvar = $cartrowStockMXL["productName"];
            $cartPoloMXLSvar = $cartrowStockMXL["productSize"];
            $cartPoloMXLPvar = $cartrowStockMXL["productPrice"];
            $cartPoloMXLQvar = $cartrowStockMXL["productQuantity"];
            $cartPoloMXLTPvar = $cartrowStockMXL["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartPoloMXLNvar</p>
            <p>Product Size: $cartPoloMXLSvar</p>
            <p>Product Price: $cartPoloMXLPvar</p>
            <p>Product Quantity: $cartPoloMXLQvar</p>
            <p>Product Total Price: $cartPoloMXLTPvar</p>
                
            <button name='PoloMXLDelete'>Remove</button>
    
            </form>";
        }
       
    }

    $cartpoloM2XLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Male' && productSize = '2XL' ";
    $cartpoloM2XLQueryinserted = mysqli_query($conn, $cartpoloM2XLinserted);
    $cartrowStockM2XLinserted = mysqli_fetch_assoc($cartpoloM2XLQueryinserted);
    
    $poloM2XLinserted = $cartrowStockM2XLinserted['inserted'];
    if($poloM2XLinserted == 'true'){

        $cartpoloM2XL = "SELECT * FROM carttbl WHERE productName = 'Polo Male' && productSize = '2XL'";
        $cartpoloM2XLQuery = mysqli_query($conn, $cartpoloM2XL);
        $cartrowStockM2XL = mysqli_fetch_assoc($cartpoloM2XLQuery);
        if($cartrowStockM2XL["productName"] == null && $cartrowStockM2XL["productSize"] && $cartrowStockM2XL["productPrice"] && $cartrowStockM2XL["productQuantity"] && $cartrowStockM2XL["productTotalPrice"]) {

        }else {
            $cartPoloM2XLNvar = $cartrowStockM2XL["productName"];
            $cartPoloM2XLSvar = $cartrowStockM2XL["productSize"];
            $cartPoloM2XLPvar = $cartrowStockM2XL["productPrice"];
            $cartPoloM2XLQvar = $cartrowStockM2XL["productQuantity"];
            $cartPoloM2XLTPvar = $cartrowStockM2XL["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartPoloM2XLNvar</p>
            <p>Product Size: $cartPoloM2XLSvar</p>
            <p>Product Price: $cartPoloM2XLPvar</p>
            <p>Product Quantity: $cartPoloM2XLQvar</p>
            <p>Product Total Price: $cartPoloM2XLTPvar</p>
                
            <button name='PoloM2XLDelete'>Remove</button>
    
            </form>";
        }
       
    }
    $cartpoloFXSinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Female' && productSize = 'Extra Small' ";
    $cartpoloFXSQueryinserted = mysqli_query($conn, $cartpoloFXSinserted);
    $cartrowStockFXSinserted = mysqli_fetch_assoc($cartpoloFXSQueryinserted);
    
    $poloFXSinserted = $cartrowStockFXSinserted['inserted'];
    if($poloFXSinserted == 'true'){

        $cartpoloFXS = "SELECT * FROM carttbl WHERE productName = 'Polo Female' && productSize = 'Extra Small'";
        $cartpoloFXSQuery = mysqli_query($conn, $cartpoloFXS);
        $cartrowStockF = mysqli_fetch_assoc($cartpoloFXSQuery);
        if($cartrowStockF["productName"] == null && $cartrowStockF["productSize"] && $cartrowStockF["productPrice"] && $cartrowStockF["productQuantity"] && $cartrowStockF["productTotalPrice"]) {

        }else {
            $cartPoloFNvar = $cartrowStockF["productName"];
            $cartPoloFSvar = $cartrowStockF["productSize"];
            $cartPoloFPvar = $cartrowStockF["productPrice"];
            $cartPoloFQvar = $cartrowStockF["productQuantity"];
            $cartPoloFTPvar = $cartrowStockF["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartPoloFNvar</p>
            <p>Product Size: $cartPoloFSvar</p>
            <p>Product Price: $cartPoloFPvar</p>
            <p>Product Quantity: $cartPoloFQvar</p>
            <p>Product Total Price: $cartPoloFTPvar</p>
                
            <button name='PoloFXSDelete'>Remove</button>
    
            </form>";
        }
       
    }
    $cartpoloFSinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Female' && productSize = 'Small' ";
    $cartpoloFSQueryinserted = mysqli_query($conn, $cartpoloFSinserted);
    $cartrowStockFSinserted = mysqli_fetch_assoc($cartpoloFSQueryinserted);
    
    $poloFSinserted = $cartrowStockFSinserted['inserted'];
    if($poloFSinserted == 'true'){

        $cartpoloFXS = "SELECT * FROM carttbl WHERE productName = 'Polo Female' && productSize = 'Small'";
        $cartpoloFXSQuery = mysqli_query($conn, $cartpoloFXS);
        $cartrowStockF = mysqli_fetch_assoc($cartpoloFXSQuery);
        
        if($cartrowStockF["productName"] == null && $cartrowStockF["productSize"] && $cartrowStockF["productPrice"] && $cartrowStockF["productQuantity"] && $cartrowStockF["productTotalPrice"]) {

        }else {
            $cartPoloFNvar = $cartrowStockF["productName"];
            $cartPoloFSvar = $cartrowStockF["productSize"];
            $cartPoloFPvar = $cartrowStockF["productPrice"];
            $cartPoloFQvar = $cartrowStockF["productQuantity"];
            $cartPoloFTPvar = $cartrowStockF["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartPoloFNvar</p>
            <p>Product Size: $cartPoloFSvar</p>
            <p>Product Price: $cartPoloFPvar</p>
            <p>Product Quantity: $cartPoloFQvar</p>
            <p>Product Total Price: $cartPoloFTPvar</p>
                
            <button name='PoloFSDelete'>Remove</button>
    
            </form>";
        }
       
    }
    
    $cartpoloFMinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Female' && productSize = 'Medium' ";
    $cartpoloFMQueryinserted = mysqli_query($conn, $cartpoloFMinserted);
    $cartrowStockFMinserted = mysqli_fetch_assoc($cartpoloFMQueryinserted);
    
    $poloFMinserted = $cartrowStockFMinserted['inserted'];
    if($poloFMinserted == 'true'){
        
        $cartpoloFXS = "SELECT * FROM carttbl WHERE productName = 'Polo Female' && productSize = 'Medium'";
        $cartpoloFXSQuery = mysqli_query($conn, $cartpoloFXS);
        $cartrowStockF = mysqli_fetch_assoc($cartpoloFXSQuery);
        if($cartrowStockF["productName"] == null && $cartrowStockF["productSize"] && $cartrowStockF["productPrice"] && $cartrowStockF["productQuantity"] && $cartrowStockF["productTotalPrice"]) {

        }else {
            $cartPoloFNvar = $cartrowStockF["productName"];
            $cartPoloFSvar = $cartrowStockF["productSize"];
            $cartPoloFPvar = $cartrowStockF["productPrice"];
            $cartPoloFQvar = $cartrowStockF["productQuantity"];
            $cartPoloFTPvar = $cartrowStockF["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartPoloFNvar</p>
            <p>Product Size: $cartPoloFSvar</p>
            <p>Product Price: $cartPoloFPvar</p>
            <p>Product Quantity: $cartPoloFQvar</p>
            <p>Product Total Price: $cartPoloFTPvar</p>
                
            <button name='PoloFMDelete'>Remove</button>
    
            </form>";
        }
       
    }
    
    $cartpoloFLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Female' && productSize = 'Large' ";
    $cartpoloFLQueryinserted = mysqli_query($conn, $cartpoloFLinserted);
    $cartrowStockFLinserted = mysqli_fetch_assoc($cartpoloFLQueryinserted);
    
    $poloFLinserted = $cartrowStockFLinserted['inserted'];
    if($poloFLinserted == 'true'){

        $cartpoloFXS = "SELECT * FROM carttbl WHERE productName = 'Polo Female' && productSize = 'Large'";
        $cartpoloFXSQuery = mysqli_query($conn, $cartpoloFXS);
        $cartrowStockF = mysqli_fetch_assoc($cartpoloFXSQuery);
        if($cartrowStockF["productName"] == null && $cartrowStockF["productSize"] && $cartrowStockF["productPrice"] && $cartrowStockF["productQuantity"] && $cartrowStockF["productTotalPrice"]) {

        }else {
            $cartPoloFNvar = $cartrowStockF["productName"];
            $cartPoloFSvar = $cartrowStockF["productSize"];
            $cartPoloFPvar = $cartrowStockF["productPrice"];
            $cartPoloFQvar = $cartrowStockF["productQuantity"];
            $cartPoloFTPvar = $cartrowStockF["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartPoloFNvar</p>
            <p>Product Size: $cartPoloFSvar</p>
            <p>Product Price: $cartPoloFPvar</p>
            <p>Product Quantity: $cartPoloFQvar</p>
            <p>Product Total Price: $cartPoloFTPvar</p>
                
            <button name='PoloFLDelete'>Remove</button>
    
            </form>";
        }
       
    }
    
    $cartpoloFXLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Female' && productSize = 'XL' ";
    $cartpoloFXLQueryinserted = mysqli_query($conn, $cartpoloFXLinserted);
    $cartrowStockFXLinserted = mysqli_fetch_assoc($cartpoloFXLQueryinserted);
    
    $poloFXLinserted = $cartrowStockFXLinserted['inserted'];
    if($poloFXLinserted == 'true'){

        $cartpoloFXS = "SELECT * FROM carttbl WHERE productName = 'Polo Female' && productSize = 'XL'";
        $cartpoloFXSQuery = mysqli_query($conn, $cartpoloFXS);
        $cartrowStockF = mysqli_fetch_assoc($cartpoloFXSQuery);
        if($cartrowStockF["productName"] == null && $cartrowStockF["productSize"] && $cartrowStockF["productPrice"] && $cartrowStockF["productQuantity"] && $cartrowStockF["productTotalPrice"]) {

        }else {
            $cartPoloFNvar = $cartrowStockF["productName"];
            $cartPoloFSvar = $cartrowStockF["productSize"];
            $cartPoloFPvar = $cartrowStockF["productPrice"];
            $cartPoloFQvar = $cartrowStockF["productQuantity"];
            $cartPoloFTPvar = $cartrowStockF["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartPoloFNvar</p>
            <p>Product Size: $cartPoloFSvar</p>
            <p>Product Price: $cartPoloFPvar</p>
            <p>Product Quantity: $cartPoloFQvar</p>
            <p>Product Total Price: $cartPoloFTPvar</p>
                
            <button name='PoloFXLDelete'>Remove</button>
    
            </form>";
        }
       
    }
    
    $cartpoloF2XLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Female' && productSize = '2XL' ";
    $cartpoloF2XLQueryinserted = mysqli_query($conn, $cartpoloF2XLinserted);
    $cartrowStockF2XLinserted = mysqli_fetch_assoc($cartpoloF2XLQueryinserted);
    
    $poloF2XLinserted = $cartrowStockF2XLinserted['inserted'];
    if($poloF2XLinserted == 'true'){

        $cartpoloFXS = "SELECT * FROM carttbl WHERE productName = 'Polo Female' && productSize = '2XL'";
        $cartpoloFXSQuery = mysqli_query($conn, $cartpoloFXS);
        $cartrowStockF = mysqli_fetch_assoc($cartpoloFXSQuery);
        if($cartrowStockF["productName"] == null && $cartrowStockF["productSize"] && $cartrowStockF["productPrice"] && $cartrowStockF["productQuantity"] && $cartrowStockF["productTotalPrice"]) {

        }else {
            $cartPoloFNvar = $cartrowStockF["productName"];
            $cartPoloFSvar = $cartrowStockF["productSize"];
            $cartPoloFPvar = $cartrowStockF["productPrice"];
            $cartPoloFQvar = $cartrowStockF["productQuantity"];
            $cartPoloFTPvar = $cartrowStockF["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartPoloFNvar</p>
            <p>Product Size: $cartPoloFSvar</p>
            <p>Product Price: $cartPoloFPvar</p>
            <p>Product Quantity: $cartPoloFQvar</p>
            <p>Product Total Price: $cartPoloFTPvar</p>
                
            <button name='PoloF2XLDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartpantsMSinserted = "SELECT * FROM quantitytbl WHERE productName = 'Pants Male' && productSize = 'Small' ";
    $cartpantsMSQueryinserted = mysqli_query($conn, $cartpantsMSinserted);
    $cartrowStockMSinserted = mysqli_fetch_assoc($cartpantsMSQueryinserted);
    
    $pantsMSinserted = $cartrowStockMSinserted['inserted'];
    if($pantsMSinserted == 'true'){

        $cartpantsM = "SELECT * FROM carttbl WHERE productName = 'Pants Male' && productSize = 'Small'";
        $cartpantsMQuery = mysqli_query($conn, $cartpantsM);
        $cartrowStockM = mysqli_fetch_assoc($cartpantsMQuery);
        if($cartrowStockM["productName"] == null && $cartrowStockM["productSize"] && $cartrowStockM["productPrice"] && $cartrowStockM["productQuantity"] && $cartrowStockM["productTotalPrice"]) {

        }else {
            $cartPoloMNvar = $cartrowStockM["productName"];
            $cartPoloMSvar = $cartrowStockM["productSize"];
            $cartPoloMPvar = $cartrowStockM["productPrice"];
            $cartPoloMQvar = $cartrowStockM["productQuantity"];
            $cartPoloMTPvar = $cartrowStockM["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartPoloMNvar</p>
            <p>Product Size: $cartPoloMSvar</p>
            <p>Product Price: $cartPoloMPvar</p>
            <p>Product Quantity: $cartPoloMQvar</p>
            <p>Product Total Price: $cartPoloMTPvar</p>
                
            <button name='PantsMSDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartpantsMMinserted = "SELECT * FROM quantitytbl WHERE productName = 'Pants Male' && productSize = 'Medium' ";
    $cartpantsMMQueryinserted = mysqli_query($conn, $cartpantsMMinserted);
    $cartrowStockMMinserted = mysqli_fetch_assoc($cartpantsMMQueryinserted);
    
    $pantsMMinserted = $cartrowStockMMinserted['inserted'];
    if($pantsMMinserted == 'true'){

        $cartpantsM = "SELECT * FROM carttbl WHERE productName = 'Pants Male' && productSize = 'Medium'";
        $cartpantsMQuery = mysqli_query($conn, $cartpantsM);
        $cartrowStockM = mysqli_fetch_assoc($cartpantsMQuery);
        if($cartrowStockM["productName"] == null && $cartrowStockM["productSize"] && $cartrowStockM["productPrice"] && $cartrowStockM["productQuantity"] && $cartrowStockM["productTotalPrice"]) {

        }else {
            $cartPoloMNvar = $cartrowStockM["productName"];
            $cartPoloMSvar = $cartrowStockM["productSize"];
            $cartPoloMPvar = $cartrowStockM["productPrice"];
            $cartPoloMQvar = $cartrowStockM["productQuantity"];
            $cartPoloMTPvar = $cartrowStockM["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartPoloMNvar</p>
            <p>Product Size: $cartPoloMSvar</p>
            <p>Product Price: $cartPoloMPvar</p>
            <p>Product Quantity: $cartPoloMQvar</p>
            <p>Product Total Price: $cartPoloMTPvar</p>
                
            <button name='PantsMMDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartpantsMLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Pants Male' && productSize = 'Large' ";
    $cartpantsMLQueryinserted = mysqli_query($conn, $cartpantsMLinserted);
    $cartrowStockMLinserted = mysqli_fetch_assoc($cartpantsMLQueryinserted);
    
    $pantsMLinserted = $cartrowStockMLinserted['inserted'];
    if($pantsMLinserted == 'true'){

        $cartpantsM = "SELECT * FROM carttbl WHERE productName = 'Pants Male' && productSize = 'Large'";
        $cartpantsMQuery = mysqli_query($conn, $cartpantsM);
        $cartrowStockM = mysqli_fetch_assoc($cartpantsMQuery);
        if($cartrowStockM["productName"] == null && $cartrowStockM["productSize"] && $cartrowStockM["productPrice"] && $cartrowStockM["productQuantity"] && $cartrowStockM["productTotalPrice"]) {

        }else {
            $cartPoloMNvar = $cartrowStockM["productName"];
            $cartPoloMSvar = $cartrowStockM["productSize"];
            $cartPoloMPvar = $cartrowStockM["productPrice"];
            $cartPoloMQvar = $cartrowStockM["productQuantity"];
            $cartPoloMTPvar = $cartrowStockM["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartPoloMNvar</p>
            <p>Product Size: $cartPoloMSvar</p>
            <p>Product Price: $cartPoloMPvar</p>
            <p>Product Quantity: $cartPoloMQvar</p>
            <p>Product Total Price: $cartPoloMTPvar</p>
                
            <button name='PantsMLDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartpantsMXLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Pants Male' && productSize = 'XL' ";
    $cartpantsMXLQueryinserted = mysqli_query($conn, $cartpantsMXLinserted);
    $cartrowStockMXLinserted = mysqli_fetch_assoc($cartpantsMXLQueryinserted);
    
    $pantsMXLinserted = $cartrowStockMXLinserted['inserted'];
    if($pantsMXLinserted == 'true'){

        $cartpantsM = "SELECT * FROM carttbl WHERE productName = 'Pants Male' && productSize = 'XL'";
        $cartpantsMQuery = mysqli_query($conn, $cartpantsM);
        $cartrowStockM = mysqli_fetch_assoc($cartpantsMQuery);
        if($cartrowStockM["productName"] == null && $cartrowStockM["productSize"] && $cartrowStockM["productPrice"] && $cartrowStockM["productQuantity"] && $cartrowStockM["productTotalPrice"]) {

        }else {
            $cartPoloMNvar = $cartrowStockM["productName"];
            $cartPoloMSvar = $cartrowStockM["productSize"];
            $cartPoloMPvar = $cartrowStockM["productPrice"];
            $cartPoloMQvar = $cartrowStockM["productQuantity"];
            $cartPoloMTPvar = $cartrowStockM["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartPoloMNvar</p>
            <p>Product Size: $cartPoloMSvar</p>
            <p>Product Price: $cartPoloMPvar</p>
            <p>Product Quantity: $cartPoloMQvar</p>
            <p>Product Total Price: $cartPoloMTPvar</p>
                
            <button name='PantsMXLDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartpantsM2XLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Pants Male' && productSize = '2XL' ";
    $cartpantsM2XLQueryinserted = mysqli_query($conn, $cartpantsM2XLinserted);
    $cartrowStockM2XLinserted = mysqli_fetch_assoc($cartpantsM2XLQueryinserted);
    
    $pantsM2XLinserted = $cartrowStockM2XLinserted['inserted'];
    if($pantsM2XLinserted == 'true'){

        $cartpantsM = "SELECT * FROM carttbl WHERE productName = 'Pants Male' && productSize = '2XL'";
        $cartpantsMQuery = mysqli_query($conn, $cartpantsM);
        $cartrowStockM = mysqli_fetch_assoc($cartpantsMQuery);
        if($cartrowStockM["productName"] == null && $cartrowStockM["productSize"] && $cartrowStockM["productPrice"] && $cartrowStockM["productQuantity"] && $cartrowStockM["productTotalPrice"]) {

        }else {
            $cartPoloMNvar = $cartrowStockM["productName"];
            $cartPoloMSvar = $cartrowStockM["productSize"];
            $cartPoloMPvar = $cartrowStockM["productPrice"];
            $cartPoloMQvar = $cartrowStockM["productQuantity"];
            $cartPoloMTPvar = $cartrowStockM["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartPoloMNvar</p>
            <p>Product Size: $cartPoloMSvar</p>
            <p>Product Price: $cartPoloMPvar</p>
            <p>Product Quantity: $cartPoloMQvar</p>
            <p>Product Total Price: $cartPoloMTPvar</p>
                
            <button name='PantsM2XLDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartslacksFXSinserted = "SELECT * FROM quantitytbl WHERE productName = 'Slacks Female' && productSize = 'Extra Small' ";
    $cartslacksFXSQueryinserted = mysqli_query($conn, $cartslacksFXSinserted);
    $cartrowStockFXSinserted = mysqli_fetch_assoc($cartslacksFXSQueryinserted);
    
    $slacksFXSinserted = $cartrowStockFXSinserted['inserted'];
    if($slacksFXSinserted == 'true'){

        $cartslacksF = "SELECT * FROM carttbl WHERE productName = 'Slacks Female' && productSize = 'Extra Small'";
        $cartslacksFQuery = mysqli_query($conn, $cartslacksF);
        $cartrowStockF = mysqli_fetch_assoc($cartslacksFQuery);
        if($cartrowStockF["productName"] == null && $cartrowStockF["productSize"] && $cartrowStockF["productPrice"] && $cartrowStockF["productQuantity"] && $cartrowStockF["productTotalPrice"]) {

        }else {
            $cartslacksFNvar = $cartrowStockF["productName"];
            $cartslacksFSvar = $cartrowStockF["productSize"];
            $cartslacksFPvar = $cartrowStockF["productPrice"];
            $cartslacksFQvar = $cartrowStockF["productQuantity"];
            $cartslacksFTPvar = $cartrowStockF["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartslacksFNvar</p>
            <p>Product Size: $cartslacksFSvar</p>
            <p>Product Price: $cartslacksFPvar</p>
            <p>Product Quantity: $cartslacksFQvar</p>
            <p>Product Total Price: $cartslacksFTPvar</p>
                
            <button name='slacksXSDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartslacksFSinserted = "SELECT * FROM quantitytbl WHERE productName = 'Slacks Female' && productSize = 'Small' ";
    $cartslacksFSQueryinserted = mysqli_query($conn, $cartslacksFSinserted);
    $cartrowStockFSinserted = mysqli_fetch_assoc($cartslacksFSQueryinserted);
    
    $slacksFSinserted = $cartrowStockFSinserted['inserted'];
    if($slacksFSinserted == 'true'){

        $cartslacksF = "SELECT * FROM carttbl WHERE productName = 'Slacks Female' && productSize = 'Small'";
        $cartslacksFQuery = mysqli_query($conn, $cartslacksF);
        $cartrowStockF = mysqli_fetch_assoc($cartslacksFQuery);
        if($cartrowStockF["productName"] == null && $cartrowStockF["productSize"] && $cartrowStockF["productPrice"] && $cartrowStockF["productQuantity"] && $cartrowStockF["productTotalPrice"]) {

        }else {
            $cartslacksFNvar = $cartrowStockF["productName"];
            $cartslacksFSvar = $cartrowStockF["productSize"];
            $cartslacksFPvar = $cartrowStockF["productPrice"];
            $cartslacksFQvar = $cartrowStockF["productQuantity"];
            $cartslacksFTPvar = $cartrowStockF["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartslacksFNvar</p>
            <p>Product Size: $cartslacksFSvar</p>
            <p>Product Price: $cartslacksFPvar</p>
            <p>Product Quantity: $cartslacksFQvar</p>
            <p>Product Total Price: $cartslacksFTPvar</p>
                
            <button name='slacksSDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartslacksFMinserted = "SELECT * FROM quantitytbl WHERE productName = 'Slacks Female' && productSize = 'Medium' ";
    $cartslacksFMQueryinserted = mysqli_query($conn, $cartslacksFMinserted);
    $cartrowStockFMinserted = mysqli_fetch_assoc($cartslacksFMQueryinserted);
    
    $slacksFMinserted = $cartrowStockFMinserted['inserted'];
    if($slacksFMinserted == 'true'){

        $cartslacksF = "SELECT * FROM carttbl WHERE productName = 'Slacks Female' && productSize = 'Medium'";
        $cartslacksFQuery = mysqli_query($conn, $cartslacksF);
        $cartrowStockF = mysqli_fetch_assoc($cartslacksFQuery);
        if($cartrowStockF["productName"] == null && $cartrowStockF["productSize"] && $cartrowStockF["productPrice"] && $cartrowStockF["productQuantity"] && $cartrowStockF["productTotalPrice"]) {

        }else {
            $cartslacksFNvar = $cartrowStockF["productName"];
            $cartslacksFSvar = $cartrowStockF["productSize"];
            $cartslacksFPvar = $cartrowStockF["productPrice"];
            $cartslacksFQvar = $cartrowStockF["productQuantity"];
            $cartslacksFTPvar = $cartrowStockF["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartslacksFNvar</p>
            <p>Product Size: $cartslacksFSvar</p>
            <p>Product Price: $cartslacksFPvar</p>
            <p>Product Quantity: $cartslacksFQvar</p>
            <p>Product Total Price: $cartslacksFTPvar</p>
                
            <button name='slacksMDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartslacksFLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Slacks Female' && productSize = 'Large' ";
    $cartslacksFLQueryinserted = mysqli_query($conn, $cartslacksFLinserted);
    $cartrowStockFLinserted = mysqli_fetch_assoc($cartslacksFLQueryinserted);
    
    $slacksFLinserted = $cartrowStockFLinserted['inserted'];
    if($slacksFLinserted == 'true'){

        $cartslacksF = "SELECT * FROM carttbl WHERE productName = 'Slacks Female' && productSize = 'Large'";
        $cartslacksFQuery = mysqli_query($conn, $cartslacksF);
        $cartrowStockF = mysqli_fetch_assoc($cartslacksFQuery);
        if($cartrowStockF["productName"] == null && $cartrowStockF["productSize"] && $cartrowStockF["productPrice"] && $cartrowStockF["productQuantity"] && $cartrowStockF["productTotalPrice"]) {

        }else {
            $cartslacksFNvar = $cartrowStockF["productName"];
            $cartslacksFSvar = $cartrowStockF["productSize"];
            $cartslacksFPvar = $cartrowStockF["productPrice"];
            $cartslacksFQvar = $cartrowStockF["productQuantity"];
            $cartslacksFTPvar = $cartrowStockF["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartslacksFNvar</p>
            <p>Product Size: $cartslacksFSvar</p>
            <p>Product Price: $cartslacksFPvar</p>
            <p>Product Quantity: $cartslacksFQvar</p>
            <p>Product Total Price: $cartslacksFTPvar</p>
                
            <button name='slacksLDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartslacksFXLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Slacks Female' && productSize = 'XL' ";
    $cartslacksFXLQueryinserted = mysqli_query($conn, $cartslacksFXLinserted);
    $cartrowStockFXLinserted = mysqli_fetch_assoc($cartslacksFXLQueryinserted);
    
    $slacksFXLinserted = $cartrowStockFXLinserted['inserted'];
    if($slacksFXLinserted == 'true'){

        $cartslacksF = "SELECT * FROM carttbl WHERE productName = 'Slacks Female' && productSize = 'XL'";
        $cartslacksFQuery = mysqli_query($conn, $cartslacksF);
        $cartrowStockF = mysqli_fetch_assoc($cartslacksFQuery);
        if($cartrowStockF["productName"] == null && $cartrowStockF["productSize"] && $cartrowStockF["productPrice"] && $cartrowStockF["productQuantity"] && $cartrowStockF["productTotalPrice"]) {

        }else {
            $cartslacksFNvar = $cartrowStockF["productName"];
            $cartslacksFSvar = $cartrowStockF["productSize"];
            $cartslacksFPvar = $cartrowStockF["productPrice"];
            $cartslacksFQvar = $cartrowStockF["productQuantity"];
            $cartslacksFTPvar = $cartrowStockF["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartslacksFNvar</p>
            <p>Product Size: $cartslacksFSvar</p>
            <p>Product Price: $cartslacksFPvar</p>
            <p>Product Quantity: $cartslacksFQvar</p>
            <p>Product Total Price: $cartslacksFTPvar</p>
                
            <button name='slacksXLDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartslacksF2XLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Slacks Female' && productSize = '2XL' ";
    $cartslacksF2XLQueryinserted = mysqli_query($conn, $cartslacksF2XLinserted);
    $cartrowStockF2XLinserted = mysqli_fetch_assoc($cartslacksF2XLQueryinserted);
    
    $slacksF2XLinserted = $cartrowStockF2XLinserted['inserted'];
    if($slacksF2XLinserted == 'true'){

        $cartslacksF = "SELECT * FROM carttbl WHERE productName = 'Slacks Female' && productSize = '2XL'";
        $cartslacksFQuery = mysqli_query($conn, $cartslacksF);
        $cartrowStockF = mysqli_fetch_assoc($cartslacksFQuery);
        if($cartrowStockF["productName"] == null && $cartrowStockF["productSize"] && $cartrowStockF["productPrice"] && $cartrowStockF["productQuantity"] && $cartrowStockF["productTotalPrice"]) {

        }else {
            $cartslacksFNvar = $cartrowStockF["productName"];
            $cartslacksFSvar = $cartrowStockF["productSize"];
            $cartslacksFPvar = $cartrowStockF["productPrice"];
            $cartslacksFQvar = $cartrowStockF["productQuantity"];
            $cartslacksFTPvar = $cartrowStockF["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartslacksFNvar</p>
            <p>Product Size: $cartslacksFSvar</p>
            <p>Product Price: $cartslacksFPvar</p>
            <p>Product Quantity: $cartslacksFQvar</p>
            <p>Product Total Price: $cartslacksFTPvar</p>
                
            <button name='slacks2XLDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartpeShirtSinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE TShirt' && productSize = 'Small' ";
    $cartpeShirtSQueryinserted = mysqli_query($conn, $cartpeShirtSinserted);
    $cartrowStockpeSSinserted = mysqli_fetch_assoc($cartpeShirtSQueryinserted);
    
    $peShirtSinserted = $cartrowStockpeSSinserted['inserted'];
    if($peShirtSinserted == 'true'){

        $cartpeShirt = "SELECT * FROM carttbl WHERE productName = 'PE TShirt' && productSize = 'Small'";
        $cartpeShirtQuery = mysqli_query($conn, $cartpeShirt);
        $cartrowStock = mysqli_fetch_assoc($cartpeShirtQuery);
        if($cartrowStock["productName"] == null && $cartrowStock["productSize"] && $cartrowStock["productPrice"] && $cartrowStock["productQuantity"] && $cartrowStock["productTotalPrice"]) {

        }else {
            $cartpeShirtNvar = $cartrowStock["productName"];
            $cartpeShirtSvar = $cartrowStock["productSize"];
            $cartpeShirtPvar = $cartrowStock["productPrice"];
            $cartpeShirtQvar = $cartrowStock["productQuantity"];
            $cartpeShirtTPvar = $cartrowStock["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartpeShirtNvar</p>
            <p>Product Size: $cartpeShirtSvar</p>
            <p>Product Price: $cartpeShirtPvar</p>
            <p>Product Quantity: $cartpeShirtQvar</p>
            <p>Product Total Price: $cartpeShirtTPvar</p>
                
            <button name='peShirtSDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartpeShirtMinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE TShirt' && productSize = 'Medium' ";
    $cartpeShirtMQueryinserted = mysqli_query($conn, $cartpeShirtMinserted);
    $cartrowStockpeSMinserted = mysqli_fetch_assoc($cartpeShirtMQueryinserted);
    
    $peShirtMinserted = $cartrowStockpeSMinserted['inserted'];
    if($peShirtMinserted == 'true'){

        $cartpeShirt = "SELECT * FROM carttbl WHERE productName = 'PE TShirt' && productSize = 'Medium'";
        $cartpeShirtQuery = mysqli_query($conn, $cartpeShirt);
        $cartrowStock = mysqli_fetch_assoc($cartpeShirtQuery);
        if($cartrowStock["productName"] == null && $cartrowStock["productSize"] && $cartrowStock["productPrice"] && $cartrowStock["productQuantity"] && $cartrowStock["productTotalPrice"]) {

        }else {
            $cartpeShirtNvar = $cartrowStock["productName"];
            $cartpeShirtSvar = $cartrowStock["productSize"];
            $cartpeShirtPvar = $cartrowStock["productPrice"];
            $cartpeShirtQvar = $cartrowStock["productQuantity"];
            $cartpeShirtTPvar = $cartrowStock["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartpeShirtNvar</p>
            <p>Product Size: $cartpeShirtSvar</p>
            <p>Product Price: $cartpeShirtPvar</p>
            <p>Product Quantity: $cartpeShirtQvar</p>
            <p>Product Total Price: $cartpeShirtTPvar</p>
                
            <button name='peShirtMDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartpeShirtLinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE TShirt' && productSize = 'Large' ";
    $cartpeShirtLQueryinserted = mysqli_query($conn, $cartpeShirtLinserted);
    $cartrowStockpeSLinserted = mysqli_fetch_assoc($cartpeShirtLQueryinserted);
    
    $peShirtLinserted = $cartrowStockpeSLinserted['inserted'];
    if($peShirtLinserted == 'true'){

        $cartpeShirt = "SELECT * FROM carttbl WHERE productName = 'PE TShirt' && productSize = 'Large'";
        $cartpeShirtQuery = mysqli_query($conn, $cartpeShirt);
        $cartrowStock = mysqli_fetch_assoc($cartpeShirtQuery);
        if($cartrowStock["productName"] == null && $cartrowStock["productSize"] && $cartrowStock["productPrice"] && $cartrowStock["productQuantity"] && $cartrowStock["productTotalPrice"]) {

        }else {
            $cartpeShirtNvar = $cartrowStock["productName"];
            $cartpeShirtSvar = $cartrowStock["productSize"];
            $cartpeShirtPvar = $cartrowStock["productPrice"];
            $cartpeShirtQvar = $cartrowStock["productQuantity"];
            $cartpeShirtTPvar = $cartrowStock["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartpeShirtNvar</p>
            <p>Product Size: $cartpeShirtSvar</p>
            <p>Product Price: $cartpeShirtPvar</p>
            <p>Product Quantity: $cartpeShirtQvar</p>
            <p>Product Total Price: $cartpeShirtTPvar</p>
                
            <button name='peShirtLDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartpeShirtXLinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE TShirt' && productSize = 'XL' ";
    $cartpeShirtXLQueryinserted = mysqli_query($conn, $cartpeShirtXLinserted);
    $cartrowStockpeSXLinserted = mysqli_fetch_assoc($cartpeShirtXLQueryinserted);
    
    $peShirtXLinserted = $cartrowStockpeSXLinserted['inserted'];
    if($peShirtXLinserted == 'true'){

        $cartpeShirt = "SELECT * FROM carttbl WHERE productName = 'PE TShirt' && productSize = 'XL'";
        $cartpeShirtQuery = mysqli_query($conn, $cartpeShirt);
        $cartrowStock = mysqli_fetch_assoc($cartpeShirtQuery);
        if($cartrowStock["productName"] == null && $cartrowStock["productSize"] && $cartrowStock["productPrice"] && $cartrowStock["productQuantity"] && $cartrowStock["productTotalPrice"]) {

        }else {
            $cartpeShirtNvar = $cartrowStock["productName"];
            $cartpeShirtSvar = $cartrowStock["productSize"];
            $cartpeShirtPvar = $cartrowStock["productPrice"];
            $cartpeShirtQvar = $cartrowStock["productQuantity"];
            $cartpeShirtTPvar = $cartrowStock["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartpeShirtNvar</p>
            <p>Product Size: $cartpeShirtSvar</p>
            <p>Product Price: $cartpeShirtPvar</p>
            <p>Product Quantity: $cartpeShirtQvar</p>
            <p>Product Total Price: $cartpeShirtTPvar</p>
                
            <button name='peShirtXLDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartpeShirt2XLinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE TShirt' && productSize = '2XL' ";
    $cartpeShirt2XLQueryinserted = mysqli_query($conn, $cartpeShirt2XLinserted);
    $cartrowStockpeS2XLinserted = mysqli_fetch_assoc($cartpeShirt2XLQueryinserted);
    
    $peShirt2XLinserted = $cartrowStockpeS2XLinserted['inserted'];
    if($peShirt2XLinserted == 'true'){

        $cartpeShirt = "SELECT * FROM carttbl WHERE productName = 'PE TShirt' && productSize = '2XL'";
        $cartpeShirtQuery = mysqli_query($conn, $cartpeShirt);
        $cartrowStock = mysqli_fetch_assoc($cartpeShirtQuery);
        if($cartrowStock["productName"] == null && $cartrowStock["productSize"] && $cartrowStock["productPrice"] && $cartrowStock["productQuantity"] && $cartrowStock["productTotalPrice"]) {

        }else {
            $cartpeShirtNvar = $cartrowStock["productName"];
            $cartpeShirtSvar = $cartrowStock["productSize"];
            $cartpeShirtPvar = $cartrowStock["productPrice"];
            $cartpeShirtQvar = $cartrowStock["productQuantity"];
            $cartpeShirtTPvar = $cartrowStock["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartpeShirtNvar</p>
            <p>Product Size: $cartpeShirtSvar</p>
            <p>Product Price: $cartpeShirtPvar</p>
            <p>Product Quantity: $cartpeShirtQvar</p>
            <p>Product Total Price: $cartpeShirtTPvar</p>
                
            <button name='peShirt2XLDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartpeShirt3XLinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE TShirt' && productSize = '3XL' ";
    $cartpeShirt3XLQueryinserted = mysqli_query($conn, $cartpeShirt3XLinserted);
    $cartrowStockpeS3XLinserted = mysqli_fetch_assoc($cartpeShirt3XLQueryinserted);
    
    $peShirt3XLinserted = $cartrowStockpeS3XLinserted['inserted'];
    if($peShirt3XLinserted == 'true'){

        $cartpeShirt = "SELECT * FROM carttbl WHERE productName = 'PE TShirt' && productSize = '3XL'";
        $cartpeShirtQuery = mysqli_query($conn, $cartpeShirt);
        $cartrowStock = mysqli_fetch_assoc($cartpeShirtQuery);
        if($cartrowStock["productName"] == null && $cartrowStock["productSize"] && $cartrowStock["productPrice"] && $cartrowStock["productQuantity"] && $cartrowStock["productTotalPrice"]) {

        }else {
            $cartpeShirtNvar = $cartrowStock["productName"];
            $cartpeShirtSvar = $cartrowStock["productSize"];
            $cartpeShirtPvar = $cartrowStock["productPrice"];
            $cartpeShirtQvar = $cartrowStock["productQuantity"];
            $cartpeShirtTPvar = $cartrowStock["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartpeShirtNvar</p>
            <p>Product Size: $cartpeShirtSvar</p>
            <p>Product Price: $cartpeShirtPvar</p>
            <p>Product Quantity: $cartpeShirtQvar</p>
            <p>Product Total Price: $cartpeShirtTPvar</p>
                
            <button name='peShirt3XLDelete'>Remove</button>

            </form>";
        }
       
    }



    $cartpeJPantsSinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE JPants' && productSize = 'Small' ";
    $cartpeJPantsSQueryinserted = mysqli_query($conn, $cartpeJPantsSinserted);
    $cartrowStockpeJPSinserted = mysqli_fetch_assoc($cartpeJPantsSQueryinserted);
    
    $peJPantsSinserted = $cartrowStockpeJPSinserted['inserted'];
    if($peJPantsSinserted == 'true'){

        $cartpeJPants = "SELECT * FROM carttbl WHERE productName = 'PE JPants' && productSize = 'Small'";
        $cartpeJPantsQuery = mysqli_query($conn, $cartpeJPants);
        $cartrowStock = mysqli_fetch_assoc($cartpeJPantsQuery);
        if($cartrowStock["productName"] == null && $cartrowStock["productSize"] && $cartrowStock["productPrice"] && $cartrowStock["productQuantity"] && $cartrowStock["productTotalPrice"]) {

        }else {
            $cartpeJPantsNvar = $cartrowStock["productName"];
            $cartpeJPantsSvar = $cartrowStock["productSize"];
            $cartpeJPantsPvar = $cartrowStock["productPrice"];
            $cartpeJPantsQvar = $cartrowStock["productQuantity"];
            $cartpeJPantsTPvar = $cartrowStock["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartpeJPantsNvar</p>
            <p>Product Size: $cartpeJPantsSvar</p>
            <p>Product Price: $cartpeJPantsPvar</p>
            <p>Product Quantity: $cartpeJPantsQvar</p>
            <p>Product Total Price: $cartpeJPantsTPvar</p>
                
            <button name='peJPantsSDelete'>Remove</button>

            </form>";
        }
       
    }
    
    $cartpeJPantsSinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE JPants' && productSize = 'Medium' ";
    $cartpeJPantsSQueryinserted = mysqli_query($conn, $cartpeJPantsSinserted);
    $cartrowStockpeJPSinserted = mysqli_fetch_assoc($cartpeJPantsSQueryinserted);
    
    $peJPantsSinserted = $cartrowStockpeJPSinserted['inserted'];
    if($peJPantsSinserted == 'true'){

        $cartpeJPants = "SELECT * FROM carttbl WHERE productName = 'PE JPants' && productSize = 'Medium'";
        $cartpeJPantsQuery = mysqli_query($conn, $cartpeJPants);
        $cartrowStock = mysqli_fetch_assoc($cartpeJPantsQuery);
        if($cartrowStock["productName"] == null && $cartrowStock["productSize"] && $cartrowStock["productPrice"] && $cartrowStock["productQuantity"] && $cartrowStock["productTotalPrice"]) {

        }else {
            $cartpeJPantsNvar = $cartrowStock["productName"];
            $cartpeJPantsSvar = $cartrowStock["productSize"];
            $cartpeJPantsPvar = $cartrowStock["productPrice"];
            $cartpeJPantsQvar = $cartrowStock["productQuantity"];
            $cartpeJPantsTPvar = $cartrowStock["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartpeJPantsNvar</p>
            <p>Product Size: $cartpeJPantsSvar</p>
            <p>Product Price: $cartpeJPantsPvar</p>
            <p>Product Quantity: $cartpeJPantsQvar</p>
            <p>Product Total Price: $cartpeJPantsTPvar</p>
                
            <button name='peJPantsMDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartpeJPantsSinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE JPants' && productSize = 'Large' ";
    $cartpeJPantsSQueryinserted = mysqli_query($conn, $cartpeJPantsSinserted);
    $cartrowStockpeJPSinserted = mysqli_fetch_assoc($cartpeJPantsSQueryinserted);
    
    $peJPantsSinserted = $cartrowStockpeJPSinserted['inserted'];
    if($peJPantsSinserted == 'true'){

        $cartpeJPants = "SELECT * FROM carttbl WHERE productName = 'PE JPants' && productSize = 'Large'";
        $cartpeJPantsQuery = mysqli_query($conn, $cartpeJPants);
        $cartrowStock = mysqli_fetch_assoc($cartpeJPantsQuery);
        if($cartrowStock["productName"] == null && $cartrowStock["productSize"] && $cartrowStock["productPrice"] && $cartrowStock["productQuantity"] && $cartrowStock["productTotalPrice"]) {

        }else {
            $cartpeJPantsNvar = $cartrowStock["productName"];
            $cartpeJPantsSvar = $cartrowStock["productSize"];
            $cartpeJPantsPvar = $cartrowStock["productPrice"];
            $cartpeJPantsQvar = $cartrowStock["productQuantity"];
            $cartpeJPantsTPvar = $cartrowStock["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartpeJPantsNvar</p>
            <p>Product Size: $cartpeJPantsSvar</p>
            <p>Product Price: $cartpeJPantsPvar</p>
            <p>Product Quantity: $cartpeJPantsQvar</p>
            <p>Product Total Price: $cartpeJPantsTPvar</p>
                
            <button name='peJPantsLDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartpeJPantsSinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE JPants' && productSize = 'XL' ";
    $cartpeJPantsSQueryinserted = mysqli_query($conn, $cartpeJPantsSinserted);
    $cartrowStockpeJPSinserted = mysqli_fetch_assoc($cartpeJPantsSQueryinserted);
    
    $peJPantsSinserted = $cartrowStockpeJPSinserted['inserted'];
    if($peJPantsSinserted == 'true'){

        $cartpeJPants = "SELECT * FROM carttbl WHERE productName = 'PE JPants' && productSize = 'XL'";
        $cartpeJPantsQuery = mysqli_query($conn, $cartpeJPants);
        $cartrowStock = mysqli_fetch_assoc($cartpeJPantsQuery);
        if($cartrowStock["productName"] == null && $cartrowStock["productSize"] && $cartrowStock["productPrice"] && $cartrowStock["productQuantity"] && $cartrowStock["productTotalPrice"]) {

        }else {
            $cartpeJPantsNvar = $cartrowStock["productName"];
            $cartpeJPantsSvar = $cartrowStock["productSize"];
            $cartpeJPantsPvar = $cartrowStock["productPrice"];
            $cartpeJPantsQvar = $cartrowStock["productQuantity"];
            $cartpeJPantsTPvar = $cartrowStock["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartpeJPantsNvar</p>
            <p>Product Size: $cartpeJPantsSvar</p>
            <p>Product Price: $cartpeJPantsPvar</p>
            <p>Product Quantity: $cartpeJPantsQvar</p>
            <p>Product Total Price: $cartpeJPantsTPvar</p>
                
            <button name='peJPantsXLDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartpeJPantsSinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE JPants' && productSize = '2XL' ";
    $cartpeJPantsSQueryinserted = mysqli_query($conn, $cartpeJPantsSinserted);
    $cartrowStockpeJPSinserted = mysqli_fetch_assoc($cartpeJPantsSQueryinserted);
    
    $peJPantsSinserted = $cartrowStockpeJPSinserted['inserted'];
    if($peJPantsSinserted == 'true'){

        $cartpeJPants = "SELECT * FROM carttbl WHERE productName = 'PE JPants' && productSize = '2XL'";
        $cartpeJPantsQuery = mysqli_query($conn, $cartpeJPants);
        $cartrowStock = mysqli_fetch_assoc($cartpeJPantsQuery);
        if($cartrowStock["productName"] == null && $cartrowStock["productSize"] && $cartrowStock["productPrice"] && $cartrowStock["productQuantity"] && $cartrowStock["productTotalPrice"]) {

        }else {
            $cartpeJPantsNvar = $cartrowStock["productName"];
            $cartpeJPantsSvar = $cartrowStock["productSize"];
            $cartpeJPantsPvar = $cartrowStock["productPrice"];
            $cartpeJPantsQvar = $cartrowStock["productQuantity"];
            $cartpeJPantsTPvar = $cartrowStock["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartpeJPantsNvar</p>
            <p>Product Size: $cartpeJPantsSvar</p>
            <p>Product Price: $cartpeJPantsPvar</p>
            <p>Product Quantity: $cartpeJPantsQvar</p>
            <p>Product Total Price: $cartpeJPantsTPvar</p>
                
            <button name='peJPants2XLDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartpeJPantsSinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE JPants' && productSize = '3XL' ";
    $cartpeJPantsSQueryinserted = mysqli_query($conn, $cartpeJPantsSinserted);
    $cartrowStockpeJPSinserted = mysqli_fetch_assoc($cartpeJPantsSQueryinserted);
    
    $peJPantsSinserted = $cartrowStockpeJPSinserted['inserted'];
    if($peJPantsSinserted == 'true'){

        $cartpeJPants = "SELECT * FROM carttbl WHERE productName = 'PE JPants' && productSize = '3XL'";
        $cartpeJPantsQuery = mysqli_query($conn, $cartpeJPants);
        $cartrowStock = mysqli_fetch_assoc($cartpeJPantsQuery);
        if($cartrowStock["productName"] == null && $cartrowStock["productSize"] && $cartrowStock["productPrice"] && $cartrowStock["productQuantity"] && $cartrowStock["productTotalPrice"]) {

        }else {
            $cartpeJPantsNvar = $cartrowStock["productName"];
            $cartpeJPantsSvar = $cartrowStock["productSize"];
            $cartpeJPantsPvar = $cartrowStock["productPrice"];
            $cartpeJPantsQvar = $cartrowStock["productQuantity"];
            $cartpeJPantsTPvar = $cartrowStock["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartpeJPantsNvar</p>
            <p>Product Size: $cartpeJPantsSvar</p>
            <p>Product Price: $cartpeJPantsPvar</p>
            <p>Product Quantity: $cartpeJPantsQvar</p>
            <p>Product Total Price: $cartpeJPantsTPvar</p>
                
            <button name='peJPants3XLDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartlanyardUNIVinserted = "SELECT * FROM quantitytbl WHERE productName = 'Lanyard UNIV'";
    $cartlanyardUNIVQueryinserted = mysqli_query($conn, $cartlanyardUNIVinserted);
    $cartrowStocklUNIVinserted = mysqli_fetch_assoc($cartlanyardUNIVQueryinserted);
    
    $lanyardUNIVinserted = $cartrowStocklUNIVinserted['inserted'];
    if($lanyardUNIVinserted == 'true'){

        $cartlanyardUNIV = "SELECT * FROM carttbl WHERE productName = 'Lanyard UNIV'";
        $cartlanyardUNIVQuery = mysqli_query($conn, $cartlanyardUNIV);
        $cartrowStock = mysqli_fetch_assoc($cartlanyardUNIVQuery);
        if($cartrowStock["productName"] == null && $cartrowStock["productSize"] && $cartrowStock["productPrice"] && $cartrowStock["productQuantity"] && $cartrowStock["productTotalPrice"]) {

        }else {
            $cartlanyardUNIVNvar = $cartrowStock["productName"];
            $cartlanyardUNIVSvar = $cartrowStock["productSize"];
            $cartlanyardUNIVPvar = $cartrowStock["productPrice"];
            $cartlanyardUNIVQvar = $cartrowStock["productQuantity"];
            $cartlanyardUNIVTPvar = $cartrowStock["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartlanyardUNIVNvar</p>
            <p>Product Size: $cartlanyardUNIVSvar</p>
            <p>Product Price: $cartlanyardUNIVPvar</p>
            <p>Product Quantity: $cartlanyardUNIVQvar</p>
            <p>Product Total Price: $cartlanyardUNIVTPvar</p>
                
            <button name='lanyardUNIVDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartlanyardEDUCinserted = "SELECT * FROM quantitytbl WHERE productName = 'Lanyard EDUC'";
    $cartlanyardEDUCQueryinserted = mysqli_query($conn, $cartlanyardEDUCinserted);
    $cartrowStocklEDUCinserted = mysqli_fetch_assoc($cartlanyardEDUCQueryinserted);
    
    $lanyardEDUCinserted = $cartrowStocklEDUCinserted['inserted'];
    if($lanyardEDUCinserted == 'true'){

        $cartlanyardEDUC = "SELECT * FROM carttbl WHERE productName = 'Lanyard EDUC'";
        $cartlanyardEDUCQuery = mysqli_query($conn, $cartlanyardEDUC);
        $cartrowStock = mysqli_fetch_assoc($cartlanyardEDUCQuery);
        if($cartrowStock["productName"] == null && $cartrowStock["productSize"] && $cartrowStock["productPrice"] && $cartrowStock["productQuantity"] && $cartrowStock["productTotalPrice"]) {

        }else {
            $cartlanyardEDUCNvar = $cartrowStock["productName"];
            $cartlanyardEDUCSvar = $cartrowStock["productSize"];
            $cartlanyardEDUCPvar = $cartrowStock["productPrice"];
            $cartlanyardEDUCQvar = $cartrowStock["productQuantity"];
            $cartlanyardEDUCTPvar = $cartrowStock["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartlanyardEDUCNvar</p>
            <p>Product Size: $cartlanyardEDUCSvar</p>
            <p>Product Price: $cartlanyardEDUCPvar</p>
            <p>Product Quantity: $cartlanyardEDUCQvar</p>
            <p>Product Total Price: $cartlanyardEDUCTPvar</p>
                
            <button name='lanyardEDUCDelete'>Remove</button>

            </form>";
        }
       
    }
    $cartlanyardPSYCHinserted = "SELECT * FROM quantitytbl WHERE productName = 'Lanyard PSYCH'";
    $cartlanyardPSYCHQueryinserted = mysqli_query($conn, $cartlanyardPSYCHinserted);
    $cartrowStocklPSYCHinserted = mysqli_fetch_assoc($cartlanyardPSYCHQueryinserted);
    
    $lanyardPSYCHinserted = $cartrowStocklPSYCHinserted['inserted'];
    if($lanyardPSYCHinserted == 'true'){

        $cartlanyardPSYCH = "SELECT * FROM carttbl WHERE productName = 'Lanyard PSYCH'";
        $cartlanyardPSYCHQuery = mysqli_query($conn, $cartlanyardPSYCH);
        $cartrowStock = mysqli_fetch_assoc($cartlanyardPSYCHQuery);
        if($cartrowStock["productName"] == null && $cartrowStock["productSize"] && $cartrowStock["productPrice"] && $cartrowStock["productQuantity"] && $cartrowStock["productTotalPrice"]) {

        }else {
            $cartlanyardPSYCHNvar = $cartrowStock["productName"];
            $cartlanyardPSYCHSvar = $cartrowStock["productSize"];
            $cartlanyardPSYCHPvar = $cartrowStock["productPrice"];
            $cartlanyardPSYCHQvar = $cartrowStock["productQuantity"];
            $cartlanyardPSYCHTPvar = $cartrowStock["productTotalPrice"];
    
    
            echo "<form action='cart.php' method='POST'>
            <p>Product Name: $cartlanyardPSYCHNvar</p>
            <p>Product Size: $cartlanyardPSYCHSvar</p>
            <p>Product Price: $cartlanyardPSYCHPvar</p>
            <p>Product Quantity: $cartlanyardPSYCHQvar</p>
            <p>Product Total Price: $cartlanyardPSYCHTPvar</p>
                
            <button name='lanyardPSYCHDelete'>Remove</button>

            </form>";
        }
       
    }
?>
<form action="cart.php" method="POST">
<button name="preorder"> Pre-Order </button>

</form>

<?php
if(isset($_POST["PoloMSDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Polo Male' && productSize = 'Small'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Polo Male' && productSize = 'Small'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}

 if(isset($_POST["PoloMMDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Polo Male' && productSize = 'Medium'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Polo Male' && productSize = 'Medium'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["PoloMLDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Polo Male' && productSize = 'Large'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Polo Male' && productSize = 'Large'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["PoloMXLDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Polo Male' && productSize = 'XL'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Polo Male' && productSize = 'XL'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["PoloM2XLDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Polo Male' && productSize = '2XL'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Polo Male' && productSize = '2XL'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
//Polo Female
if(isset($_POST["PoloFXSDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Polo Female' && productSize = 'Extra Small'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Polo Female' && productSize = 'Extra Small'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["PoloFSDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Polo Female' && productSize = 'Small'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Polo Female' && productSize = 'Small'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["PoloFMDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Polo Female' && productSize = 'Medium'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Polo Female' && productSize = 'Medium'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["PoloFLDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Polo Female' && productSize = 'Large'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Polo Female' && productSize = 'Large'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["PoloFXLDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Polo Female' && productSize = 'XL'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Polo Female' && productSize = 'XL'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["PoloF2XLDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Polo Female' && productSize = '2XL'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Polo Female' && productSize = '2XL'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
//Pants
if(isset($_POST["PantsMSDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Pants Male' && productSize = 'Small'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Pants Male' && productSize = 'Small'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["PantsMMDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Pants Male' && productSize = 'Medium'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Pants Male' && productSize = 'Medium'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["PantsMLDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Pants Male' && productSize = 'Large'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Pants Male' && productSize = 'Large'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["PantsMXLDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Pants Male' && productSize = 'XL'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Pants Male' && productSize = 'XL'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["PantsM2XLDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Pants Male' && productSize = '2XL'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Pants Male' && productSize = '2XL'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
//slacks
if(isset($_POST["slacksXSDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Slacks Female' && productSize = 'Extra Small'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Slacks Female' && productSize = 'Extra Small'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["slacksSDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Slacks Female' && productSize = 'Small'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Slacks Female' && productSize = 'Small'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["slacksMDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Slacks Female' && productSize = 'Medium'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Slacks Female' && productSize = 'Medium'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["slacksLDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Slacks Female' && productSize = 'Large'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Slacks Female' && productSize = 'Large'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["slacksXLDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Slacks Female' && productSize = 'XL'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Slacks Female' && productSize = 'XL'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["slacks2XLDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Slacks Female' && productSize = '2XL'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Slacks Female' && productSize = '2XL'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["peShirtSDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'PE TShirt' && productSize = 'Small'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'PE TShirt' && productSize = 'Small'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["peShirtMDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'PE TShirt' && productSize = 'Medium'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'PE TShirt' && productSize = 'Medium'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}

if(isset($_POST["peShirtLDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'PE TShirt' && productSize = 'Large'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'PE TShirt' && productSize = 'Large'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}

if(isset($_POST["peShirtXLDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'PE TShirt' && productSize = 'XL'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'PE TShirt' && productSize = 'XL'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}

if(isset($_POST["peShirt2XLDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'PE TShirt' && productSize = '2XL'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'PE TShirt' && productSize = '2XL'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}

if(isset($_POST["peShirt3XLDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'PE TShirt' && productSize = '3XL'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'PE TShirt' && productSize = '3XL'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["peJPantsSDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'PE JPants' && productSize = 'Small'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'PE JPants' && productSize = 'Small'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["peJPantsMDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'PE JPants' && productSize = 'Medium'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'PE JPants' && productSize = 'Medium'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["peJPantsLDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'PE JPants' && productSize = 'Large'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'PE JPants' && productSize = 'Large'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["peJPantsXLDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'PE JPants' && productSize = 'XL'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'PE JPants' && productSize = 'XL'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["peJPants2XLDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'PE JPants' && productSize = '2XL'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'PE JPants' && productSize = '2XL'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["peJPants3XLDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'PE JPants' && productSize = '3XL'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'PE JPants' && productSize = '3XL'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["lanyardUNIVDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Lanyard UNIV'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Lanyard UNIV'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["lanyardEDUCDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Lanyard EDUC'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Lanyard EDUC'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
if(isset($_POST["lanyardPSYCHDelete"])) {
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false' WHERE productName = 'Lanyard PSYCH'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl WHERE productName = 'Lanyard PSYCH'";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
?>

<?php
 $cartinserted = "SELECT * FROM carttbl";
 $cartQueryinserted = mysqli_query($conn, $cartinserted);
 $cartrowStockinserted = mysqli_fetch_assoc($cartQueryinserted);
if(isset($_POST["preorder"])) {
if($cartrowStockinserted['id'] == null) {
    echo '<script>alert("Please add something into your Cart.")</script>';
    
    header("Refresh:0");
    
    
} else {
    echo '<script>alert("The item has been preordered.")</script>';
    $updateinsert = "UPDATE quantitytbl SET inserted = 'false'";
    mysqli_query($conn, $updateinsert);
    $removeProductCart = "DELETE FROM carttbl";
    mysqli_query($conn, $removeProductCart);
    header("Refresh:0");
}
} 
?>