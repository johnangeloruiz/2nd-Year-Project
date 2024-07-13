
<?php 
include ("connection.php");

  $poloMS = "SELECT * FROM admintbl WHERE productName = 'Polo Male' && productSize = 'Small'";
  $poloMSQuery = mysqli_query($conn, $poloMS);
  $rowStockMS = mysqli_fetch_assoc($poloMSQuery);
  $poloMSS = $rowStockMS["productStock"];
  $poloMSP = $rowStockMS["productPrice"];

  $poloMM = "SELECT * FROM admintbl WHERE productName = 'Polo Male' && productSize = 'Medium'";
  $poloMMQuery = mysqli_query($conn, $poloMM);
  $rowStockMM = mysqli_fetch_assoc($poloMMQuery);
  $poloMMP = $rowStockMM["productStock"];
  $poloMMS = $rowStockMM["productPrice"];

  $poloML = "SELECT * FROM admintbl WHERE productName = 'Polo Male' && productSize = 'Large'";
  $poloMLQuery = mysqli_query($conn, $poloML);
  $rowStockML = mysqli_fetch_assoc($poloMLQuery);
  $poloMLP = $rowStockML["productStock"];
  $poloMLS = $rowStockML["productPrice"];

  $poloMXL = "SELECT * FROM admintbl WHERE productName = 'Polo Male' && productSize = 'XL'";
  $poloMXLQuery = mysqli_query($conn, $poloMXL);
  $rowStockMXL = mysqli_fetch_assoc($poloMXLQuery);
  $poloMXLP = $rowStockMXL["productStock"];
  $poloMXLS = $rowStockMXL["productPrice"];

  $poloM2XL = "SELECT * FROM admintbl WHERE productName = 'Polo Male' && productSize = '2XL'";
  $poloM2XLQuery = mysqli_query($conn, $poloM2XL);
  $rowStockM2XL = mysqli_fetch_assoc($poloM2XLQuery);
  $poloM2XLP = $rowStockM2XL["productStock"];
  $poloM2XLS = $rowStockM2XL["productPrice"];




  $poloFXS = "SELECT * FROM admintbl WHERE productName = 'Polo Female' && productSize = 'Extra Small'";
  $poloFSQuery = mysqli_query($conn, $poloFXS);
  $rowStockFXS = mysqli_fetch_assoc($poloFSQuery);
  $poloFXSS = $rowStockFXS["productStock"];
  $poloFXSP = $rowStockFXS["productPrice"];

  $poloFS = "SELECT * FROM admintbl WHERE productName = 'Polo Female' && productSize = 'Small'";
  $poloFSQuery = mysqli_query($conn, $poloFS);
  $rowStockFS = mysqli_fetch_assoc($poloFSQuery);
  $poloFSS = $rowStockFS["productStock"];
  $poloFSP = $rowStockFS["productPrice"];

  $poloFM = "SELECT * FROM admintbl WHERE productName = 'Polo Female' && productSize = 'Medium'";
  $poloFMQuery = mysqli_query($conn, $poloFM);
  $rowStockFM = mysqli_fetch_assoc($poloFMQuery);
  $poloFMS = $rowStockFM["productStock"];
  $poloFMP = $rowStockFM["productPrice"];

  $poloFL = "SELECT * FROM admintbl WHERE productName = 'Polo Female' && productSize = 'Large'";
  $poloFLQuery = mysqli_query($conn, $poloFL);
  $rowStockFL = mysqli_fetch_assoc($poloFLQuery);
  $poloFLS = $rowStockFL["productStock"];
  $poloFLP = $rowStockFL["productPrice"];

  $poloFXL = "SELECT * FROM admintbl WHERE productName = 'Polo Female' && productSize = 'XL'";
  $poloFXLQuery = mysqli_query($conn, $poloFXL);
  $rowStockFXL = mysqli_fetch_assoc($poloFXLQuery);
  $poloFXLS = $rowStockFXL["productStock"];
  $poloFXLP = $rowStockFXL["productPrice"];

  $poloF2XL = "SELECT * FROM admintbl WHERE productName = 'Polo Female' && productSize = '2XL'";
  $poloF2XLQuery = mysqli_query($conn, $poloF2XL);
  $rowStockF2XL = mysqli_fetch_assoc($poloF2XLQuery);
  $poloF2XLS = $rowStockF2XL["productStock"];
  $poloF2XLP = $rowStockF2XL["productPrice"];




  $pantsMS = "SELECT * FROM admintbl WHERE productName = 'Pants Male' && productSize = 'Small'";
  $pantsMSQuery = mysqli_query($conn, $pantsMS);
  $rowStockMS = mysqli_fetch_assoc($pantsMSQuery);
  $pantsMSS = $rowStockMS["productStock"];
  $pantsMSP = $rowStockMS["productPrice"];

  $pantsMM = "SELECT * FROM admintbl WHERE productName = 'Pants Male' && productSize = 'Medium'";
  $pantsMMQuery = mysqli_query($conn, $pantsMM);
  $rowStockMM = mysqli_fetch_assoc($pantsMMQuery);
  $pantsMMP = $rowStockMM["productStock"];
  $pantsMMS = $rowStockMM["productPrice"];

  $pantsML = "SELECT * FROM admintbl WHERE productName = 'Pants Male' && productSize = 'Large'";
  $pantsMLQuery = mysqli_query($conn, $pantsML);
  $rowStockML = mysqli_fetch_assoc($pantsMLQuery);
  $pantsMLP = $rowStockML["productStock"];
  $pantsMLS = $rowStockML["productPrice"];

  $pantsMXL = "SELECT * FROM admintbl WHERE productName = 'Pants Male' && productSize = 'XL'";
  $pantsMXLQuery = mysqli_query($conn, $pantsMXL);
  $rowStockMXL = mysqli_fetch_assoc($pantsMXLQuery);
  $pantsMXLP = $rowStockMXL["productStock"];
  $pantsMXLS = $rowStockMXL["productPrice"];

  $pantsM2XL = "SELECT * FROM admintbl WHERE productName = 'Pants Male' && productSize = '2XL'";
  $pantsM2XLQuery = mysqli_query($conn, $pantsM2XL);
  $rowStockM2XL = mysqli_fetch_assoc($pantsM2XLQuery);
  $pantsM2XLP = $rowStockM2XL["productStock"];
  $pantsM2XLS = $rowStockM2XL["productPrice"];



$slacksFXS = "SELECT * FROM admintbl WHERE productName = 'Slacks Female' && productSize = 'Extra Small'";
$slacksFXSQuery = mysqli_query($conn, $slacksFXS);
$rowStockXS = mysqli_fetch_assoc($slacksFXSQuery);
$slacksFXSS = $rowStockXS["productStock"];
$slacksFXSP = $rowStockXS["productPrice"];

$slacksFS = "SELECT * FROM admintbl WHERE productName = 'Slacks Female' && productSize = 'Small'";
$slacksFSQuery = mysqli_query($conn, $slacksFS);
$rowStockFS = mysqli_fetch_assoc($slacksFSQuery);
$slacksFSS = $rowStockFS["productStock"];
$slacksFSP = $rowStockFS["productPrice"];

$slacksFM = "SELECT * FROM admintbl WHERE productName = 'Slacks Female' && productSize = 'Medium'";
$slacksFMQuery = mysqli_query($conn, $slacksFM);
$rowStockFM = mysqli_fetch_assoc($slacksFMQuery);
$slacksFMS = $rowStockFM["productStock"];
$slacksFMP = $rowStockFM["productPrice"];

$slacksFL = "SELECT * FROM admintbl WHERE productName = 'Slacks Female' && productSize = 'Large'";
$slacksFLQuery = mysqli_query($conn, $slacksFL);
$rowStockFL = mysqli_fetch_assoc($slacksFLQuery);
$slacksFLS = $rowStockFL["productStock"];
$slacksFLP = $rowStockFL["productPrice"];

$slacksFXL = "SELECT * FROM admintbl WHERE productName = 'Slacks Female' && productSize = 'XL'";
$slacksFXLQuery = mysqli_query($conn, $slacksFXL);
$rowStockFXL = mysqli_fetch_assoc($slacksFXLQuery);
$slacksFXLS = $rowStockFXL["productStock"];
$slacksFXLP = $rowStockFXL["productPrice"];

$slacksF2XL = "SELECT * FROM admintbl WHERE productName = 'Slacks Female' && productSize = '2XL'";
$slacksF2XLQuery = mysqli_query($conn, $slacksF2XL);
$rowStockF2XL = mysqli_fetch_assoc($slacksF2XLQuery);
$slacksF2XLS = $rowStockF2XL["productStock"];
$slacksF2XLP = $rowStockF2XL["productPrice"];






$peShirtS = "SELECT * FROM admintbl WHERE productName = 'PE TShirt' && productSize = 'Small'";
$peShirtSQuery = mysqli_query($conn, $peShirtS);
$rowStockpeSS = mysqli_fetch_assoc($peShirtSQuery);
$peShirtSS = $rowStockpeSS["productStock"];
$peShirtSP = $rowStockpeSS["productPrice"];

$peShirtM = "SELECT * FROM admintbl WHERE productName = 'PE TShirt' && productSize = 'Medium'";
$peShirtMQuery = mysqli_query($conn, $peShirtM);
$rowStockpeSM = mysqli_fetch_assoc($peShirtMQuery);
$peShirtMS = $rowStockpeSM["productStock"];
$peShirtMP = $rowStockpeSM["productPrice"];

$peShirtL = "SELECT * FROM admintbl WHERE productName = 'PE TShirt' && productSize = 'Large'";
$peShirtLQuery = mysqli_query($conn, $peShirtL);
$rowStockpeSL = mysqli_fetch_assoc($peShirtLQuery);
$peShirtLS = $rowStockpeSL["productStock"];
$peShirtLP = $rowStockpeSL["productPrice"];

$peShirtXL = "SELECT * FROM admintbl WHERE productName = 'PE TShirt' && productSize = 'XL'";
$peShirtXLQuery = mysqli_query($conn, $peShirtXL);
$rowStockpeSXL = mysqli_fetch_assoc($peShirtXLQuery);
$peShirtXLS = $rowStockpeSXL["productStock"];
$peShirtXLP = $rowStockpeSXL["productPrice"];

$peShirt2XL = "SELECT * FROM admintbl WHERE productName = 'PE TShirt' && productSize = '2XL'";
$peShirt2XLQuery = mysqli_query($conn, $peShirt2XL);
$rowStockpeS2XL = mysqli_fetch_assoc($peShirt2XLQuery);
$peShirt2XLS = $rowStockpeS2XL["productStock"];
$peShirt2XLP = $rowStockpeS2XL["productPrice"];

$peShirt3XL = "SELECT * FROM admintbl WHERE productName = 'PE TShirt' && productSize = '3XL'";
$peShirt3XLQuery = mysqli_query($conn, $peShirt3XL);
$rowStockpeS3XL = mysqli_fetch_assoc($peShirt3XLQuery);
$peShirt3XLS = $rowStockpeS3XL["productStock"];
$peShirt3XLP = $rowStockpeS3XL["productPrice"];

$peJPantsS = "SELECT * FROM admintbl WHERE productName = 'PE JPants' && productSize = 'Small'";
$peJPantsSQuery = mysqli_query($conn, $peJPantsS);
$rowStockpeJS = mysqli_fetch_assoc($peJPantsSQuery);
$peJPantsSS = $rowStockpeJS["productStock"];
$peJPantsSP = $rowStockpeJS["productPrice"];

$peJPantsM = "SELECT * FROM admintbl WHERE productName = 'PE JPants' && productSize = 'Medium'";
$peJPantsMQuery = mysqli_query($conn, $peJPantsM);
$rowStockpeJM = mysqli_fetch_assoc($peJPantsMQuery);
$peJPantsMS = $rowStockpeJM["productStock"];
$peJPantsMP = $rowStockpeJM["productPrice"];

$peJPantsL = "SELECT * FROM admintbl WHERE productName = 'PE JPants' && productSize = 'Large'";
$peJPantsLQuery = mysqli_query($conn, $peJPantsL);
$rowStockpeJL = mysqli_fetch_assoc($peJPantsLQuery);
$peJPantsLS = $rowStockpeJL["productStock"];
$peJPantsLP = $rowStockpeJL["productPrice"];

$peJPantsXL = "SELECT * FROM admintbl WHERE productName = 'PE JPants' && productSize = 'XL'";
$peJPantsXLQuery = mysqli_query($conn, $peJPantsXL);
$rowStockpeJXL = mysqli_fetch_assoc($peJPantsXLQuery);
$peJPantsXLS = $rowStockpeJXL["productStock"];
$peJPantsXLP = $rowStockpeJXL["productPrice"];

$peJPants2XL = "SELECT * FROM admintbl WHERE productName = 'PE JPants' && productSize = '2XL'";
$peJPants2XLQuery = mysqli_query($conn, $peJPants2XL);
$rowStockpeJ2XL = mysqli_fetch_assoc($peJPants2XLQuery);
$peJPants2XLS = $rowStockpeJ2XL["productStock"];
$peJPants2XLP = $rowStockpeJ2XL["productPrice"];

$peJPants3XL = "SELECT * FROM admintbl WHERE productName = 'PE JPants' && productSize = '3XL'";
$peJPants3XLQuery = mysqli_query($conn, $peJPants3XL);
$rowStockpeJ3XL = mysqli_fetch_assoc($peJPants3XLQuery);
$peJPants3XLS = $rowStockpeJ3XL["productStock"];
$peJPants3XLP = $rowStockpeJ3XL["productPrice"];



$lanyardEDUC = "SELECT * FROM admintbl WHERE productName = 'LANYARD EDUC'";
$lanyardEDUCQuery = mysqli_query($conn, $lanyardEDUC);
$rowStocklanyardEDUC = mysqli_fetch_assoc($lanyardEDUCQuery);
$lanyardEDUCS = $rowStocklanyardEDUC["productStock"];
$lanyardEDUCP = $rowStocklanyardEDUC["productPrice"];

$lanyardUNIV = "SELECT * FROM admintbl WHERE productName = 'LANYARD UNIV'";
$lanyardUNIVQuery = mysqli_query($conn, $lanyardUNIV);
$rowStocklanyardUNIV = mysqli_fetch_assoc($lanyardUNIVQuery);
$lanyardUNIVS = $rowStocklanyardUNIV["productStock"];
$lanyardUNIVP = $rowStocklanyardUNIV["productPrice"];

$lanyardPSYCH = "SELECT * FROM admintbl WHERE productName = 'LANYARD PSYCH'";
$lanyardPSYCHQuery = mysqli_query($conn, $lanyardPSYCH);
$rowStocklanyardPSYCH = mysqli_fetch_assoc($lanyardPSYCHQuery);
$lanyardPSYCHS = $rowStocklanyardPSYCH["productStock"];
$lanyardPSYCHP = $rowStocklanyardPSYCH["productPrice"];


?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/admincss.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <title>Admin Page</title>
</head>
<body>
    <div>
        <h4>Put false on input if you don't have a stock</h4>
        <form action="adminfunc.php" method="post">
                
 <table>
                <div>
                   
                  <thead>
                  <tr>
                    <th>Polo Male</th>
                    <th>Stock</th>
                    <th>Price</th>
                  
                    <th>Updated Stock</th>
                    <th>Updated Price</th>
                   </tr>
                 </thead>
                 <tbody>
                  <tr>
                    <td> <p id='productSize'>Size Small</p></td>
                    <td><p><?php echo"$poloMSS"; ?> </p></td>
                    <td><p><?php echo "$poloMSP"; ?></p></td>
                    <td><input type="text" name="poloM-S-S"></td>
                    <td>  <input type="text" name="poloM-S-P"></td>
                  </tr>
                  <tr>
                    <td> <p id='productSize'>Size Medium</p></td>
                    <td><p><?php echo"$poloMMS"; ?></p></td>
                    <td><p><?php echo"$poloMMP"; ?></p></td>
                    <td><input type="text" name="poloM-M-S"></td>
                    <td>  <input type="text" name="poloM-M-P"></td>
                  </tr>
                  <tr>
                    <td> <p id='productSize'>Size Large</p></td>
                    <td><p><?php echo"$poloMLS"; ?></p></td>
                    <td><p><?php echo"$poloMLP"; ?></p></td>
                    <td><input type="text" name="poloM-L-S"></td>
                    <td>  <input type="text" name="poloM-L-P"></td>
                  </tr>
                  <tr>
                    <td> <p id='productSize'>Size Extra Large</p></td>
                    <td><p><?php echo"$poloMXLS"; ?></p></td>
                    <td><p><?php echo"$poloMXLP"; ?></p></td>
                    <td><input type="text" name="poloM-XL-S"></td>
                    <td>  <input type="text" name="poloM-XL-P"></td>
                  </tr>
                  <tr>
                    <td> <p id='productSize'>Size 2XL</p></td>
                    <td><p><?php echo"$poloM2XLS"; ?></p></td>
                    <td><p><?php echo"$poloM2XLP"; ?></p></td>
                    <td><input type="text" name="poloM-2XL-S"></td>
                    <td>  <input type="text" name="poloM-2XL-P"></td>
                  </tr>
                   </tbody>
             </div>
 </table>





                     <br>
                     <br>
 <table>
             <div>
             <thead>
                          <tr>
                            <th>Polo Female</th>
                            <th>Stock</th>
                            <th>Price</th>
                          
                            <th>Updated Stock</th>
                            <th>Updated Price</th>
                           </tr>
                         </thead>
                         <tbody>
                            <tr>
                                <td> <p id='productSize'>Size Xtra Small</p></td>
                                <td><p><?php echo"$poloFXSS"; ?></p></td>
                                <td><p><?php echo"$poloFXSP"; ?></p></td>
                                <td><input type="text" name="poloF-XS-S"></td>
                                <td>  <input type="text" name="poloF-XS-P"></td>
                              </tr>
                          <tr>
                            <td> <p id='productSize'>Size Small</p></td>
                            <td><p><?php echo"$poloFSS"; ?></p></td>
                            <td><p><?php echo"$poloFSP"; ?></p></td>
                            <td><input type="text" name="poloF-S-S"></td>
                            <td>  <input type="text" name="poloF-S-P"></td>
                          </tr>
                          <tr>
                            <td> <p id='productSize'>Size Medium</p></td>
                            <td><p><?php echo"$poloFMS"; ?></p></td>
                            <td><p><?php echo"$poloFMP"; ?></p></td>
                            <td><input type="text" name="poloF-M-S"></td>
                            <td>  <input type="text" name="poloF-M-P"></td>
                          </tr>
                          <tr>
                            <td> <p id='productSize'>Size Large</p></td>
                            <td><p><?php echo"$poloFLS"; ?></p></td>
                            <td><p><?php echo"$poloFLP"; ?></p></td>
                            <td><input type="text" name="poloF-L-S"></td>
                            <td>  <input type="text" name="poloF-L-P"></td>
                          </tr>
                          <tr>
                            <td> <p id='productSize'>Size Extra Large</p></td>
                            <td><p><?php echo"$poloFXLS"; ?></p></td>
                            <td><p><?php echo"$poloFXLP"; ?></p></td>
                            <td><input type="text" name="poloF-XL-S"></td>
                            <td>  <input type="text" name="poloF-XL-P"></td>
                          </tr>
                          <tr>
                            <td> <p id='productSize'>Size 2XL</p></td>
                            <td><p><?php echo"$poloF2XLS"; ?></p></td>
                            <td><p><?php echo"$poloF2XLP"; ?></p></td>
                            <td><input type="text" name="poloF-2XL-S"></td>
                            <td>  <input type="text" name="poloF-2XL-P"></td>
                          </tr>
                           </tbody>
                     </div>
 </table>
                    <br>
                    <br>
<table>
                  <thead>
                  <tr>
                    <th>Pants Male</th>
                    <th>Stock</th>
                    <th>Price</th>
                  
                    <th>Updated Stock</th>
                    <th>Updated Price</th>
                   </tr>
                 </thead>
                 <tbody>
                  <tr>
                    <td> <p id='productSize'>Size Small</p></td>
                    <td><p><?php echo"$pantsMSS"; ?> </p></td>
                    <td><p><?php echo "$pantsMSP"; ?></p></td>
                    <td><input type="text" name="pantsM-S-S"></td>
                    <td>  <input type="text" name="pantsM-S-P"></td>
                  </tr>
                  <tr>
                    <td> <p id='productSize'>Size Medium</p></td>
                    <td><p><?php echo"$pantsMMS"; ?></p></td>
                    <td><p><?php echo"$pantsMMP"; ?></p></td>
                    <td><input type="text" name="pantsM-M-S"></td>
                    <td>  <input type="text" name="pantsM-M-P"></td>
                  </tr>
                  <tr>
                    <td> <p id='productSize'>Size Large</p></td>
                    <td><p><?php echo"$pantsMLS"; ?></p></td>
                    <td><p><?php echo"$pantsMLP"; ?></p></td>
                    <td><input type="text" name="pantsM-L-S"></td>
                    <td>  <input type="text" name="pantsM-L-P"></td>
                  </tr>
                  <tr>
                    <td> <p id='productSize'>Size Extra Large</p></td>
                    <td><p><?php echo"$pantsMXLS"; ?></p></td>
                    <td><p><?php echo"$pantsMXLP"; ?></p></td>
                    <td><input type="text" name="pantsM-XL-S"></td>
                    <td>  <input type="text" name="pantsM-XL-P"></td>
                  </tr>
                  <tr>
                    <td> <p id='productSize'>Size 2XL</p></td>
                    <td><p><?php echo"$pantsM2XLS"; ?></p></td>
                    <td><p><?php echo"$pantsM2XLP"; ?></p></td>
                    <td><input type="text" name="pantsM-2XL-S"></td>
                    <td>  <input type="text" name="pantsM-2XL-P"></td>
                  </tr>
                   </tbody>
             </div>
 </table>
            <br>
            <br>
<table>
             <div>
             <thead>
                          <tr>
                            <th>Slacks Female</th>
                            <th>Stock</th>
                            <th>Price</th>
                          
                            <th>Updated Stock</th>
                            <th>Updated Price</th>
                           </tr>
                         </thead>
                         <tbody>
                            <tr>
                                <td> <p id='productSize'>Size XSmall</p></td>
                                <td><p><?php echo"$slacksFXSS"; ?> </p></td>
                                <td><p><?php echo"$slacksFXSP"; ?></p></td>
                                <td><input type="text" name="slacksF-XS-S"></td>
                                <td>  <input type="text" name="slacksF-XS-P"></td>
                              </tr>
                          <tr>
                            <td> <p id='productSize'>Size Small</p></td>
                            <td><p><?php echo"$slacksFSS"; ?> </p></td>
                            <td><p><?php echo"$slacksFSP"; ?></p></td>
                            <td><input type="text" name="slacksF-S-S"></td>
                            <td>  <input type="text" name="slacksF-S-P"></td>
                          </tr>
                          <tr>
                            <td> <p id='productSize'>Size Medium</p></td>
                            <td><p><?php echo"$slacksFMS"; ?> </p></td>
                            <td><p><?php echo"$slacksFMP"; ?></p></td>
                            <td><input type="text" name="slacksF-M-S"></td>
                            <td>  <input type="text" name="slacksF-M-P"></td>
                          </tr>
                          <tr>
                            <td> <p id='productSize'>Size Large</p></td>
                            <td><p><?php echo"$slacksFLS"; ?> </p></td>
                            <td><p><?php echo"$slacksFLP"; ?></p></td>
                            <td><input type="text" name="slacksF-L-S"></td>
                            <td>  <input type="text" name="slacksF-L-P"></td>
                          </tr>
                          <tr>
                            <td> <p id='productSize'>Size Extra Large</p></td>
                            <td><p><?php echo"$slacksFXLS"; ?> </p></td>
                            <td><p><?php echo"$slacksFXLP"; ?></p></td>
                            <td><input type="text" name="slacksF-XL-S"></td>
                            <td>  <input type="text" name="slacksF-XL-P"></td>
                          </tr>
                          <tr>
                            <td> <p id='productSize'>Size 2XL</p></td>
                            <td><p><?php echo"$slacksF2XLS"; ?> </p></td>
                            <td><p><?php echo"$slacksF2XLP"; ?></p></td>
                            <td><input type="text" name="slacksF-2XL-S"></td>
                            <td>  <input type="text" name="slacksF-2XL-P"></td>
                          </tr>
                           </tbody>
                     </div>
 </table>
                             <br>
                             <br>
 <table>
             <div>
             <thead>
                          <tr>
                            <th>PE TShirt</th>
                            <th>Stock</th>
                            <th>Price</th>
                          
                            <th>Updated Stock</th>
                            <th>Updated Price</th>
                           </tr>
                         </thead>
                         <tbody>
                            <tr>
                                <td> <p id='productSize'>Size  Small</p></td>
                                <td><p><?php echo"$peShirtSS"; ?></p></td>
                                <td><p><?php echo"$peShirtSP"; ?></p></td>
                                <td><input type="text" name="peShirt-S-S"></td>
                                <td>  <input type="text" name="peShirt-S-P"></td>
                              </tr>
                          <tr>
                            <td> <p id='productSize'>Size Medium</p></td>
                            <td><p><?php echo"$peShirtMS"; ?></p></td>
                            <td><p><?php echo"$peShirtMP"; ?></p></td>
                            <td><input type="text" name="peShirt-M-S"></td>
                            <td>  <input type="text" name="peShirt-M-P"></td>
                          </tr>
                          <tr>
                            <td> <p id='productSize'>Size Large</p></td>
                            <td><p><?php echo"$peShirtLS"; ?></p></td>
                            <td><p><?php echo"$peShirtLP"; ?></p></td>
                            <td><input type="text" name="peShirt-L-S"></td>
                            <td>  <input type="text" name="peShirt-L-P"></td>
                          </tr>
                          <tr>
                            <td> <p id='productSize'>Size Extra Large</p></td>
                            <td><p><?php echo"$peShirtXLS"; ?></p></td>
                            <td><p><?php echo"$peShirtXLP"; ?></p></td>
                            <td><input type="text" name="peShirt-XL-S"></td>
                            <td>  <input type="text" name="peShirt-XL-P"></td>
                          </tr>
                          <tr>
                            <td> <p id='productSize'>Size 2XL</p></td>
                            <td><p><?php echo"$peShirt2XLS"; ?></p></td>
                            <td><p><?php echo"$peShirt2XLP"; ?></p></td>
                            <td><input type="text" name="peShirt-2XL-S"></td>
                            <td>  <input type="text" name="peShirt-2XL-P"></td>
                          </tr>
                          <tr>
                            <td> <p id='productSize'>Size 3XL</p></td>
                            <td><p><?php echo"$peShirt3XLS"; ?></p></td>
                            <td><p><?php echo"$peShirt3XLP"; ?></p></td>
                            <td><input type="text" name="peShirt-3XL-S"></td>
                            <td>  <input type="text" name="peShirt-3XL-P"></td>
                          </tr>
                           </tbody>
                     </div>
 </table>
                    <br>
                    <br>
 <table>
             <div>
             <thead>
                          <tr>
                            <th>PE Jogging Pants</th>
                            <th>Stock</th>
                            <th>Price</th>
                          
                            <th>Updated Stock</th>
                            <th>Updated Price</th>
                           </tr>
                         </thead>
                         <tbody>
                            <tr>
                                <td> <p id='productSize'>Size  Small</p></td>
                                <td><p><?php echo"$peJPantsSS"; ?></p></td>
                                <td><p><?php echo"$peJPantsSP"; ?></p></td>
                                <td><input type="text" name="peJPants-S-S"></td>
                                <td>  <input type="text" name="peJPants-S-P"></td>
                              </tr>
                          <tr>
                            <td> <p id='productSize'>Size Medium</p></td>
                            <td><p><?php echo"$peJPantsMS"; ?></p></td>
                            <td><p><?php echo"$peJPantsMP"; ?></p></td>
                            <td><input type="text" name="peJPants-M-S"></td>
                            <td>  <input type="text" name="peJPants-M-P"></td>
                          </tr>
                          <tr>
                            <td> <p id='productSize'>Size Large</p></td>
                            <td><p><?php echo"$peJPantsLS"; ?></p></td>
                            <td><p><?php echo"$peJPantsLP"; ?></p></td>
                            <td><input type="text" name="peJPants-L-S"></td>
                            <td>  <input type="text" name="peJPants-L-P"></td>
                          </tr>
                          <tr>
                            <td> <p id='productSize'>Size Extra Large</p></td>
                            <td><p><?php echo"$peJPantsXLS"; ?></p></td>
                            <td><p><?php echo"$peJPantsXLP"; ?></p></td>
                            <td><input type="text" name="peJPants-XL-S"></td>
                            <td>  <input type="text" name="peJPants-XL-P"></td>
                          </tr>
                          <tr>
                            <td> <p id='productSize'>Size 2XL</p></td>
                            <td><p><?php echo"$peJPants2XLS"; ?></p></td>
                            <td><p><?php echo"$peJPants2XLP"; ?></p></td>
                            <td><input type="text" name="peJPants-2XL-S"></td>
                            <td>  <input type="text" name="peJPants-2XL-P"></td>
                          </tr>
                          <tr>
                            <td> <p id='productSize'>Size 3XL</p></td>
                            <td><p><?php echo"$peJPants3XLS"; ?></p></td>
                            <td><p><?php echo"$peJPants3XLP"; ?></p></td>
                            <td><input type="text" name="peJPants-3XL-S"></td>
                            <td>  <input type="text" name="peJPants-3XL-P"></td>
                          </tr>
                           </tbody>
                     </div>
 </table>
                            <br> 
                            <br>
<table>
                            <div>
                             <thead>
                          <tr>
                            <th>Lanyard</th>
                            <th>Stock</th>
                            <th>Price</th>
                          
                            <th>Updated Stock</th>
                            <th>Updated Price</th>
                           </tr>
                         </thead>   
                         <tbody>
                            <tr>
                                <td> <p id='productSize'>University Lanyard</p></td>
                                <td><p><?php echo"$lanyardUNIVS"; ?></p></td>
                            <td><p><?php echo"$lanyardUNIVP"; ?></p></td>
                                <td><input type="text" name="lanyardEDUC-S"></td>
                                <td> <input type="text" name="lanyardEDUC-P"></td>
                              </tr>
                          <tr>
                            <td> <p id='productSize'>Educ Lanyard</p></td>
                            <td><p><?php echo"$lanyardEDUCS"; ?></p></td>
                            <td><p><?php echo"$lanyardEDUCP"; ?></p></td>
                            <td><input type="text" name="lanyardUNIV-S"></td>
                            <td> <input type="text" name="lanyardUNIV-P"></td>
                          </tr>
                          <tr>
                            <td> <p id='productSize'>Psych Lanyard</p></td>
                            <td><p><?php echo"$lanyardPSYCHS"; ?></p></td>
                            <td><p><?php echo"$lanyardPSYCHP"; ?></p></td>
                            <td><input type="text" name="lanyardPSYCH-S"></td>
                            <td>  <input type="text" name="lanyardPSYCH-P"></td>
                          </tr>
                          </thead> 
                         </tbody>
                         </div>
</table>

                       <button type="edit" name="edit">Update</button>
                       
        </form>
    </div>
</body>
</html>

