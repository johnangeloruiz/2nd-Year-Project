<?php

include ("connection.php");

$poloMSStock = '15';
$poloMSPrice = '500';
$poloMMStock = '15';
$poloMMPrice = '500';
$poloMLStock = '15';
$poloMLPrice = '500';
$poloMXLStock = '15';
$poloMXLPrice = '500';
$poloM2XLStock = '15';
$poloM2XLPrice = '500';
$poloMS = "INSERT INTO admintbl (productName, productSize, productStock, productPrice) VALUES ('Polo Male', 'Small', $poloMSStock, $poloMSPrice)";
$poloMM = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('Polo Male', 'Medium', $poloMMStock, $poloMMPrice)";
$poloML = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('Polo Male', 'Large', $poloMLStock, $poloMLPrice)";
$poloMXL = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('Polo Male', 'XL', $poloMXLStock, $poloMXLPrice)";
$poloM2XL = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('Polo Male', '2XL', $poloM2XLStock, $poloM2XLPrice)";
$poloFXSStock = '15';
$poloFXSPrice = '500';
$poloFSStock = '15';
$poloFSPrice = '500';
$poloFMStock = '15';
$poloFMPrice = '500';
$poloFLStock = '15';
$poloFLPrice = '500';
$poloFXLStock = '15';
$poloFXLPrice = '500';
$poloF2XLStock = '15';
$poloF2XLPrice = '500';
$poloFXS = "INSERT INTO admintbl (productName, productSize, productStock, productPrice) VALUES ('Polo Female', 'Extra Small', $poloFXSStock, $poloFXSPrice)";
$poloFS = "INSERT INTO admintbl (productName, productSize, productStock, productPrice) VALUES ('Polo Female', 'Small', $poloFSStock, $poloFSPrice)";
$poloFM = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('Polo Female', 'Medium', $poloFMStock, $poloFMPrice)";
$poloFL = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('Polo Female', 'Large', $poloFLStock, $poloFLPrice)";
$poloFXL = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('Polo Female', 'XL', $poloFXLStock, $poloFXLPrice)";
$poloF2XL = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('Polo Female', '2XL', $poloF2XLStock, $poloF2XLPrice)";
$pantsMSStock = '15';
$pantsMSPrice = '500';
$pantsMMStock = '15';
$pantsMMPrice = '500';
$pantsMLStock = '15';
$pantsMLPrice = '500';
$pantsMXLStock = '15';
$pantsMXLPrice = '500';
$pantsM2XLStock = '15';
$pantsM2XLPrice = '500';
$pantsMS = "INSERT INTO admintbl (productName, productSize, productStock, productPrice) VALUES ('Pants Male', 'Small', $pantsMSStock, $pantsMSPrice)";
$pantsMM = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('Pants Male', 'Medium', $pantsMMStock, $pantsMMPrice)";
$pantsML = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('Pants Male', 'Large', $pantsMLStock, $pantsMLPrice)";
$pantsMXL = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('Pants Male', 'XL', $pantsMXLStock, $pantsMXLPrice)";
$pantsM2XL = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('Pants Male', '2XL', $pantsM2XLStock, $pantsM2XLPrice)";
$slacksFXSStock = '15';
$slacksFXSPrice = '500';
$slacksFSStock = '15';
$slacksFSPrice = '500';
$slacksFMStock = '15';
$slacksFMPrice = '500';
$slacksFLStock = '15';
$slacksFLPrice = '500';
$slacksFXLStock = '15';
$slacksFXLPrice = '500';
$slacksF2XLStock = '15';
$slacksF2XLPrice = '500';
$slacksFXS = "INSERT INTO admintbl (productName, productSize, productStock, productPrice) VALUES ('Slacks Female', 'Extra Small', $slacksFXSStock, $slacksFXSPrice)";
$slacksFS = "INSERT INTO admintbl (productName, productSize, productStock, productPrice) VALUES ('Slacks Female', 'Small', $slacksFSStock, $slacksFSPrice)";
$slacksFM = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('Slacks Female', 'Medium', $slacksFMStock, $slacksFMPrice)";
$slacksFL = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('Slacks Female', 'Large', $slacksFLStock, $slacksFLPrice)";
$slacksFXL = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('Slacks Female', 'XL', $slacksFXLStock, $slacksFXLPrice)";
$slacksF2XL = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('Slacks Female', '2XL', $slacksF2XLStock, $slacksF2XLPrice)";
$peShirtSStock = '15';
$peShirtSPrice = '500';
$peShirtMStock = '15';
$peShirtMPrice = '500';
$peShirtLStock = '15';
$peShirtLPrice = '500';
$peShirtXLStock = '15';
$peShirtXLPrice = '500';
$peShirt2XLStock = '15';
$peShirt2XLPrice = '500';
$peShirt3XLStock = '15';
$peShirt3XLPrice = '500';
$peShirtS = "INSERT INTO admintbl (productName, productSize, productStock, productPrice) VALUES ('PE TShirt', 'Small', $peShirtSStock, $peShirtSPrice)";
$peShirtM = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('PE TShirt', 'Medium', $peShirtMStock, $peShirtMPrice)";
$peShirtL = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('PE TShirt', 'Large', $peShirtLStock, $peShirtLPrice)";
$peShirtXL = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('PE TShirt', 'XL', $peShirtXLStock, $peShirtXLPrice)";
$peShirt2XL = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('PE TShirt', '2XL', $peShirt2XLStock, $peShirt2XLPrice)";
$peShirt3XL = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('PE TShirt', '3XL', $peShirt3XLStock, $peShirt3XLPrice)";
$peJPantsSStock = '15';
$peJPantsSPrice = '500';
$peJPantsMStock = '15';
$peJPantsMPrice = '500';
$peJPantsLStock = '15';
$peJPantsLPrice = '500';
$peJPantsXLStock = '15';
$peJPantsXLPrice = '500';
$peJPants2XLStock = '15';
$peJPants2XLPrice = '500';
$peJPants3XLStock = '15';
$peJPants3XLPrice = '500';
$peJPantsS = "INSERT INTO admintbl (productName, productSize, productStock, productPrice) VALUES ('PE JPants', 'Small', $peJPantsSStock, $peJPantsSPrice)";
$peJPantsM = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('PE JPants', 'Medium', $peJPantsMStock, $peJPantsMPrice)";
$peJPantsL = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('PE JPants', 'Large', $peJPantsLStock, $peJPantsLPrice)";
$peJPantsXL = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('PE JPants', 'XL', $peJPantsXLStock, $peJPantsXLPrice)";
$peJPants2XL = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('PE JPants', '2XL', $peJPants2XLStock, $peJPants2XLPrice)";
$peJPants3XL = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('PE JPants', '3XL', $peJPants3XLStock, $peJPants3XLPrice)";
$lanyardUNIVPrice = '500';
$lanyardUNIVStock = '15';
$lanyardEDUCPrice = '500';
$lanyardEDUCStock = '15';
$lanyardPSYCHPrice = '500';
$lanyardPSYCHStock = '15';
$lanyardEDUC = "INSERT INTO admintbl (productName, productSize, productStock, productPrice) VALUES ('LANYARD EDUC', '', $lanyardEDUCStock, $lanyardEDUCPrice)";
$lanyardUNIV = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('LANYARD UNIV', '', $lanyardUNIVStock, $lanyardUNIVPrice)";
$lanyardPSYCH = "INSERT INTO admintbl(productName, productSize, productStock, productPrice) VALUES ('LANYARD PSYCH', '', $lanyardPSYCHStock, $lanyardPSYCHPrice)";

 
mysqli_query($conn, $poloMS);
mysqli_query($conn, $poloMM);
mysqli_query($conn, $poloML);
mysqli_query($conn, $poloMXL);
mysqli_query($conn, $poloM2XL);
mysqli_query($conn, $poloFXS);
mysqli_query($conn, $poloFS);
mysqli_query($conn, $poloFM);
mysqli_query($conn, $poloFL);
mysqli_query($conn, $poloFXL);
mysqli_query($conn, $poloF2XL);
mysqli_query($conn, $pantsMS);
mysqli_query($conn, $pantsMM);
mysqli_query($conn, $pantsML);
mysqli_query($conn, $pantsMXL);
mysqli_query($conn, $pantsM2XL);
mysqli_query($conn, $slacksFXS);
mysqli_query($conn, $slacksFS);
mysqli_query($conn, $slacksFM);
mysqli_query($conn, $slacksFL);
mysqli_query($conn, $slacksFXL);
mysqli_query($conn, $slacksF2XL);
mysqli_query($conn, $peShirtS);
mysqli_query($conn, $peShirtM);
mysqli_query($conn, $peShirtL);
mysqli_query($conn, $peShirtXL);
mysqli_query($conn, $peShirt2XL);
mysqli_query($conn, $peShirt3XL);
mysqli_query($conn, $peJPantsS);
mysqli_query($conn, $peJPantsM);
mysqli_query($conn, $peJPantsL);
mysqli_query($conn, $peJPantsXL);
mysqli_query($conn, $peJPants2XL);
mysqli_query($conn, $peJPants3XL);
mysqli_query($conn, $lanyardEDUC);
mysqli_query($conn, $lanyardUNIV);
mysqli_query($conn, $lanyardPSYCH);
$removeExcess = "DELETE FROM admintbl WHERE id > '37'";   
mysqli_query($conn, $removeExcess); 
    
//polom, polof, pantsm, slacksF, peshirt, peJPants, lanyard
//checks if the edit button has been clicked
    if(isset($_POST['edit'])){
      // checks if the input is empty for polo male
      if(empty($_POST['poloM-S-P'])){
        $poloMSPrice = $poloMSPrice;
      }else {
        
          $poloMSPrice = $_POST['poloM-S-P'];
          $editPSMP = "UPDATE admintbl SET productPrice = $poloMSPrice WHERE id = '1'";
          mysqli_query($conn, $editPSMP);
        
        
        
      }

      if(empty($_POST['poloM-S-S'])){
        $poloMSStock = $poloMSStock;
        
      }else {
          $poloMSStock = $_POST['poloM-S-S'];
          $editPSMSS = "UPDATE admintbl SET productStock = $poloMSStock WHERE id = '1'";
          mysqli_query($conn, $editPSMSS); 
        
      }

      if(empty($_POST['poloM-M-P'])) {
        $poloMMPrice = $poloMMPrice;
      } else {
          $poloMMPrice = $_POST['poloM-M-P'];
          $editPMMP = "UPDATE admintbl SET productPrice = $poloMMPrice WHERE id = '2'";
          mysqli_query($conn, $editPMMP);
      }

      if(empty ($_POST['poloM-M-S']) ){
        $poloMMStock = $poloMMStock;
      }else {
          $poloMMStock = $_POST['poloM-M-S'];
          $editPMMS = "UPDATE admintbl SET productStock = $poloMMStock WHERE id = '2'";
          mysqli_query($conn, $editPMMS);  
      }

      if(empty($_POST['poloM-L-P']) ) {
        $poloMLPrice = $poloMLPrice;
      }else {
          $poloMLPrice = $_POST['poloM-L-P'];
          $editPLMP = "UPDATE admintbl SET productPrice = $poloMLPrice WHERE id = '3'";
          mysqli_query($conn, $editPLMP);
      }

      if(empty($_POST['poloM-L-S'])) {
        $poloMLStock = $poloMLStock;
      }else {
          $poloMLStock = $_POST['poloM-L-S'];
          $editPLMS = "UPDATE admintbl SET productStock = $poloMLStock WHERE id = '3'";
          mysqli_query($conn, $editPLMS);

      }

      if(empty($_POST['poloM-XL-P'])) {
        $poloMXLPrice = $poloMXLPrice;
      } else {
          $poloMXLPrice = $_POST['poloM-XL-P'];
          $editPXLMP = "UPDATE admintbl SET productPrice = $poloMXLPrice WHERE id = '4'";
          mysqli_query($conn, $editPXLMP);
      }

      if(empty($_POST['poloM-XL-S'])) {
        $poloMXLStock = $poloMXLStock;
      } else {
          $poloMXLStock = $_POST['poloM-XL-S'];
          $editPXLMS = "UPDATE admintbl SET productStock = $poloMXLStock WHERE id = '4'";
          mysqli_query($conn, $editPXLMS);
        
      }
      if(empty($_POST['poloM-2XL-P']) ) {
        $poloM2XLPrice = $poloM2XLPrice;
      } else {
                  $poloM2XLPrice = $_POST['poloM-2XL-P'];
          $editP2XLMP = "UPDATE admintbl SET productPrice = $poloM2XLPrice WHERE id = '5'";
          mysqli_query($conn, $editP2XLMP);

      }
      if(empty($_POST['poloM-2XL-S'])) {
        $poloM2XLStock = $poloM2XLStock;
      } else {
  
        $poloM2XLStock = $_POST['poloM-2XL-S'];
        $editP2XLMS = "UPDATE admintbl SET productStock = $poloM2XLStock WHERE id = '5'";
        mysqli_query($conn, $editP2XLMS);
       
      }

      if(empty($_POST['poloF-XS-P']) ) {
        $poloFXSPrice = $poloFXSPrice;
      }else {
        $poloFXSPrice = $_POST['poloF-XS-P'];
        $editPXSFP = "UPDATE admintbl SET productPrice = $poloFXSPrice WHERE id = '6'";
        mysqli_query($conn, $editPXSFP);
      }

      if(empty($_POST['poloF-XS-S']) ) {
        $poloFXSStock = $poloFXSStock;
      } else {
        $poloFXSStock = $_POST['poloF-XS-S'];
        $editPXSFS = "UPDATE admintbl SET productStock = $poloFXSStock WHERE id = '6'";
        mysqli_query($conn, $editPXSFS);
      }

      if(empty($_POST['poloF-S-P'])) {
        $poloFSPrice = $poloFSPrice;
      } else {
        $poloFSPrice = $_POST['poloF-S-P'];
        $editPSFP = "UPDATE admintbl SET productPrice = $poloFSPrice WHERE id = '7'";
        mysqli_query($conn, $editPSFP);
      }

      if(empty($_POST['poloF-S-S'])) {
        $poloFSStock = $poloFSStock;
      } else {
        $poloFSStock = $_POST['poloF-S-S'];
        $editPSFS = "UPDATE admintbl SET productStock = $poloFSStock WHERE id = '7'";
        mysqli_query($conn, $editPSFS);
      }

      if(empty($_POST['poloF-M-P']) ){
        $poloFMPrice = $poloFMPrice;
      }else {
        $poloFMPrice = $_POST['poloF-M-P'];
        $editPMFP = "UPDATE admintbl SET productPrice = $poloFMPrice WHERE id = '8'";
        mysqli_query($conn, $editPMFP);
      }

      if(empty($_POST['poloF-M-S']) ) {
        $poloFMStock = $poloFMStock;
      } else {
        $poloFMStock = $_POST['poloF-M-S'];
        $editPMFS = "UPDATE admintbl SET productStock = $poloFMStock WHERE id = '8'";
        mysqli_query($conn, $editPMFS);
      }

      if(empty($_POST['poloF-L-P']) ) {
        $poloFLPrice = $poloFLPrice;
      } else {
        $poloFLPrice = $_POST['poloF-L-P'];
        $editPLFP = "UPDATE admintbl SET productPrice = $poloFLPrice WHERE id = '9'";
        mysqli_query($conn, $editPLFP);
       
      }

      if(empty($_POST['poloF-L-S'])) {
        $poloFLStock = $poloFLStock;
      } else {
        $poloFLStock = $_POST['poloF-L-S'];
        $editPLFS = "UPDATE admintbl SET productStock = $poloFLStock WHERE id = '9'";
        mysqli_query($conn, $editPLFS);
      }

      if(empty($_POST['poloF-XL-P']) ) {
        $poloFXLPrice = $poloFXLPrice;
      } else {
        $poloFXLPrice = $_POST['poloF-XL-P'];
        $editPXLFP = "UPDATE admintbl SET productPrice = $poloFXLPrice WHERE id = '10'";
        mysqli_query($conn, $editPXLFP);
      }

      if(empty($_POST['poloF-XL-S'])) {
        $poloFXLStock = $poloFXLStock;
        
      } else {
        $poloFXLStock = $_POST['poloF-XL-S'];
        $editPXLFS = "UPDATE admintbl SET productStock = $poloFXLStock WHERE id = '10'";
        mysqli_query($conn, $editPXLFS);
      }

      if(empty($_POST['poloF-2XL-P'])) {
        $poloF2XLPrice = $poloF2XLPrice;
      } else {
        $poloF2XLPrice = $_POST['poloF-2XL-P'];
        $editP2XLFP = "UPDATE admintbl SET productPrice = $poloF2XLPrice WHERE id = '11'";
        mysqli_query($conn, $editP2XLFP);
      }
       
      if(empty($_POST['poloF-2XL-S'])) {
        $poloF2XLStock = $poloF2XLStock;
      }  else {
        $poloF2XLStock = $_POST['poloF-2XL-S'];
        $editP2XLFS = "UPDATE admintbl SET productStock = $poloF2XLStock WHERE id = '11'";
        mysqli_query($conn, $editP2XLFS);
      }
      if(empty($_POST['pantsM-S-S'])){
        
        $pantsMSStock = $pantsMSStock;
      } else {
        $pantsMSStock = $_POST['pantsM-S-S'];
        $editPASMS = "UPDATE admintbl SET productStock = $pantsMSStock WHERE id = '12'";
        mysqli_query($conn, $editPASMS);
      }
      if(empty($_POST['pantsM-S-P'])) {
        $pantsMSPrice = $pantsMSPrice;
      } else {
        $pantsMSPrice = $_POST['pantsM-S-P'];
        $editPASMP = "UPDATE admintbl SET productPrice = $pantsMSPrice WHERE id = '12'";
        mysqli_query($conn, $editPASMP);
      }
      
      if(empty($_POST['pantsM-M-S']) ){
        $pantsMMStock = $pantsMMStock;
      } else {
        $pantsMMStock = $_POST['pantsM-M-S'];
        $editPAMMS = "UPDATE admintbl SET productStock = $pantsMMStock WHERE id = '13'";
        mysqli_query($conn, $editPAMMS);
      }
      if(empty($_POST['pantsM-M-P'])) {
        $pantsMMPrice = $pantsMMPrice;
      }else {
        $pantsMMPrice = $_POST['pantsM-M-P'];
        $editPAMMP = "UPDATE admintbl SET productPrice = $pantsMMPrice WHERE id = '13'";
        mysqli_query($conn, $editPAMMP);
      }
      if(empty($_POST['pantsM-L-P'])) {
        $pantsMLPrice = $pantsMLPrice;
      }else {
        $pantsMLPrice = $_POST['pantsM-L-P'];
        $editPALMP = "UPDATE admintbl SET productPrice = $pantsMLPrice WHERE id = '14'";
        mysqli_query($conn, $editPALMP);
      }
      if(empty($_POST['pantsM-L-S'])) {
        $pantsMLStock = $pantsMLStock;
      } else {
        $pantsMLStock = $_POST['pantsM-L-S'];
        $editPALMS = "UPDATE admintbl SET productStock = $pantsMLStock WHERE id = '14'";
        mysqli_query($conn, $editPALMS);
      }
      if(empty($_POST['pantsM-XL-P'])) {
        $pantsMXLPrice = $pantsMXLPrice;
      }else {
        $pantsMXLPrice = $_POST['pantsM-XL-P'];
        $editPAXLMP = "UPDATE admintbl SET productPrice = $pantsMXLPrice WHERE id = '15'";
        mysqli_query($conn, $editPAXLMP);
      }
      if(empty($_POST['pantsM-XL-S'])) {
        $pantsMXLStock = $pantsMXLStock;
      }else {
        $pantsMXLStock = $_POST['pantsM-XL-S'];
        $editPAXLMS = "UPDATE admintbl SET productStock = $pantsMXLStock WHERE id = '15'";
        mysqli_query($conn, $editPAXLMS);
      }
      if(empty($_POST['pantsM-2XL-P'])) {
        $pantsM2XLPrice = $pantsM2XLPrice;
      }else {
        $pantsM2XLPrice = $_POST['pantsM-2XL-P'];
        $editPA2XLMP = "UPDATE admintbl SET productPrice = $pantsM2XLPrice WHERE id = '16'";
        mysqli_query($conn, $editPA2XLMP);
      }
      if(empty($_POST['pantsM-2XL-S'])) {
        $pantsM2XLStock = $pantsM2XLStock;
      }else {
        $pantsM2XLStock = $_POST['pantsM-2XL-S'];
        $editPA2XLMS = "UPDATE admintbl SET productStock = $pantsM2XLStock WHERE id = '16'";
        mysqli_query($conn, $editPA2XLMS);
      }

      if(empty($_POST['slacksF-XS-P'])) {
        $slacksFXSPrice = $slacksFXSPrice;
      }else {
        $slacksFXSPrice = $_POST['slacksF-XS-P'];
        $editSXSFP = "UPDATE admintbl SET productPrice = $slacksFXSPrice WHERE id = '17'";
        mysqli_query($conn, $editSXSFP);
      }
      if(empty($_POST['slacksF-XS-S'])) {
        $slacksFXSStock = $slacksFXSStock;
      }else {
        $slacksFXSStock = $_POST['slacksF-XS-S'];
        $editSXSFS = "UPDATE admintbl SET  productStock = $slacksFXSStock WHERE id = '17'";
        mysqli_query($conn, $editSXSFS);
      }
      if(empty($_POST['slacksF-S-P'])) {
        $slacksFSPrice = $slacksFSPrice;
      }else {
        $slacksFSPrice = $_POST['slacksF-S-P'];
        $editSSFP = "UPDATE admintbl SET productPrice = $slacksFSPrice WHERE id = '18'";
        mysqli_query($conn, $editSSFP);
      }
      if(empty($_POST['slacksF-S-S'])) {
        $slacksFSStock = $slacksFSStock;
      }else {
        $slacksFSStock = $_POST['slacksF-S-S'];
        $editSSFS = "UPDATE admintbl SET productStock = $slacksFSStock WHERE id = '18'";
        mysqli_query($conn, $editSSFS);
      }
      if(empty($_POST['slacksF-M-P'])) {
        $slacksFMPrice = $slacksFMPrice;
      }else {
        $slacksFMPrice = $_POST['slacksF-M-P'];
        $editSMFP = "UPDATE admintbl SET productPrice = $slacksFMPrice WHERE id = '19'";
        mysqli_query($conn, $editSMFP);
      }
      if(empty($_POST['slacksF-M-S'])){
        $slacksFMStock = $slacksFMStock;
      } else {
        $slacksFMStock = $_POST['slacksF-M-S'];
        $editSMFS = "UPDATE admintbl SET productStock = $slacksFMStock WHERE id = '19'";
        mysqli_query($conn, $editSMFS);
      }
      
      if(empty($_POST['slacksF-L-P'])) {
        $slacksFLPrice = $slacksFLPrice;
      }else {
        $slacksFLPrice = $_POST['slacksF-L-P'];
        $editSLFP = "UPDATE admintbl SET productPrice = $slacksFLPrice WHERE id = '20'";
        mysqli_query($conn, $editSLFP);
      }
      if(empty($_POST['slacksF-L-S'])) {
        $slacksFLStock = $slacksFLStock;
      }else {
        $slacksFLStock = $_POST['slacksF-L-S'];
        $editSLFS = "UPDATE admintbl SET productStock = $slacksFLStock WHERE id = '20'";
        mysqli_query($conn, $editSLFS);
      }
      if(empty($_POST['slacksF-XL-P'])) {
        $slacksFXLPrice = $slacksFXLPrice;
      }else {
        $slacksFXLPrice = $_POST['slacksF-XL-P'];
        $editSXLFP = "UPDATE admintbl SET productPrice = $slacksFXLPrice WHERE id = '21'";
        mysqli_query($conn, $editSXLFP);
      }
      if(empty($_POST['slacksF-XL-S'])) {
        $slacksFXLStock = $slacksFXLStock;
      }else {
        $slacksFXLStock = $_POST['slacksF-XL-S'];
        $editSXLFS = "UPDATE admintbl SET productStock = $slacksFXLStock WHERE id = '21'";
        mysqli_query($conn, $editSXLFS);
      }
      if(empty($_POST['slacksF-2XL-P'])) {
        $slacksF2XLPrice = $slacksF2XLPrice;
      }else {
        $slacksF2XLPrice = $_POST['slacksF-2XL-P'];
        $editS2XLFP = "UPDATE admintbl SET productPrice = $slacksF2XLPrice WHERE id = '22'";
        mysqli_query($conn, $editS2XLFP);
      }
      if(empty($_POST['slacksF-2XL-S'])) {
        $slacksF2XLStock = $slacksF2XLStock;
      }else {
        $slacksF2XLStock = $_POST['slacksF-2XL-S'];
        $editS2XLFS = "UPDATE admintbl SET productStock = $slacksF2XLStock WHERE id = '22'";
        mysqli_query($conn, $editS2XLFS);
      }     
      if(empty($_POST['peShirt-S-P'])) {
        $peShirtSPrice = $peShirtSPrice;
      }else {
        $peShirtSPrice = $_POST['peShirt-S-P'];
        $editPESSP = "UPDATE admintbl SET productPrice = $peShirtSPrice WHERE id = '23'";
        mysqli_query($conn, $editPESSP);
      }
      if(empty($_POST['peShirt-S-S'])) {
        $peShirtSStock = $peShirtSStock;
      }else {
        $peShirtSStock = $_POST['peShirt-S-S'];
        $editPESSS = "UPDATE admintbl SET productStock = $peShirtSStock WHERE id = '23'";
        mysqli_query($conn, $editPESSS);
      }
      if(empty($_POST['peShirt-M-P'])) {
        $peShirtMPrice = $peShirtMPrice;
      }else {
        $peShirtMPrice = $_POST['peShirt-M-P'];
        $editPESMP = "UPDATE admintbl SET productPrice = $peShirtMPrice WHERE id = '24'";
        mysqli_query($conn, $editPESMP);
      }
      if(empty($_POST['peShirt-M-S'])) {
        $peShirtMStock = $peShirtMStock;
      }else {
        $peShirtMStock = $_POST['peShirt-M-S'];
        $editPESMS = "UPDATE admintbl SET productStock = $peShirtMStock WHERE id = '24'";
        mysqli_query($conn, $editPESMS);
      }
      if(empty($_POST['peShirt-L-P'])) {
        $peShirtLPrice = $peShirtLPrice;
      }else {
        $peShirtLPrice = $_POST['peShirt-L-P'];
        $editPESLP = "UPDATE admintbl SET productPrice = $peShirtLPrice WHERE id = '25'";
        mysqli_query($conn, $editPESLP);
      }
      if(empty($_POST['peShirt-L-S'])) {
        $peShirtLStock = $peShirtLStock;
      }else {
        $peShirtLStock = $_POST['peShirt-L-S'];
        $editPESLS = "UPDATE admintbl SET productStock = $peShirtLStock WHERE id = '25'";
        mysqli_query($conn, $editPESLS);
      }
      if(empty($_POST['peShirt-XL-P'])) {
        $peShirtXLPrice = $peShirtXLPrice;
      } else {
        $peShirtXLPrice = $_POST['peShirt-XL-P'];
        $editPESXLP = "UPDATE admintbl SET productPrice = $peShirtXLPrice WHERE id = '26'";
        mysqli_query($conn, $editPESXLP);     
      }
      if(empty($_POST['peShirt-XL-S'])) {
        $peShirtXLStock = $peShirtXLStock;
      } else {
        $peShirtXLStock = $_POST['peShirt-XL-S'];
        $editPESXLS = "UPDATE admintbl SET productStock = $peShirtXLStock WHERE id = '26'";
        mysqli_query($conn, $editPESXLS);
      }
      if(empty($_POST['peShirt-2XL-P'])) {
        $peShirt2XLPrice = $peShirt2XLPrice;
      } else {
        $peShirt2XLPrice = $_POST['peShirt-2XL-P'];
        $editPES2XLP = "UPDATE admintbl SET productPrice = $peShirt2XLPrice WHERE id = '27'";
        mysqli_query($conn, $editPES2XLP);
 
      }
      if(empty($_POST['peShirt-2XL-S'])) {
        $peShirt2XLStock = $peShirt2XLStock;
      } else {
        $peShirt2XLStock = $_POST['peShirt-2XL-S'];
        $editPES2XLS = "UPDATE admintbl SET productStock = $peShirt2XLStock WHERE id = '27'";
        mysqli_query($conn, $editPES2XLS);
      }
      if(empty($_POST['peShirt-3XL-P'])) {
        $peShirt3XLPrice = $peShirt3XLPrice;
      } else {
        $peShirt3XLPrice = $_POST['peShirt-3XL-P'];
        $editPES3XLP = "UPDATE admintbl SET productPrice = $peShirt3XLPrice WHERE id = '28'";
        mysqli_query($conn, $editPES3XLP);
      }
      if(empty($_POST['peShirt-3XL-S'])) {
        $peShirt3XLStock = $peShirt3XLStock;
      } else {
        $peShirt3XLStock = $_POST['peShirt-3XL-S'];
        $editPES3XLS = "UPDATE admintbl SET productStock = $peShirt3XLStock WHERE id = '28'";
        mysqli_query($conn, $editPES3XLS);
      }
      if(empty($_POST['peJPants-S-P'])){
        $peJPantsSPrice = $peJPantsSPrice;
        
      } else {
        $peJPantsSPrice = $_POST['peJPants-S-P'];
        $editPEJSP = "UPDATE admintbl SET productPrice = $peJPantsSPrice WHERE id = '29'";
        mysqli_query($conn, $editPEJSP);
        
      }
      if(empty($_POST['peJPants-S-S'])){
        $peJPantsSStock = $peJPantsSStock;
        
      } else {
        $peJPantsSStock = $_POST['peJPants-S-S'];
        $editPEJSS = "UPDATE admintbl SET productStock = $peJPantsSStock WHERE id = '29'";
        mysqli_query($conn, $editPEJSS);
      }
      if(empty($_POST['peJPants-M-P'])){
        $peJPantsMPrice = $peJPantsMPrice;
        
      } else {
        $peJPantsMPrice = $_POST['peJPants-M-P'];
        $editPEJMP = "UPDATE admintbl SET productPrice = $peJPantsMPrice WHERE id = '30'";
        mysqli_query($conn, $editPEJMP);
        
      }
      if(empty($_POST['peJPants-M-S'])){
        $peJPantsMStock = $peJPantsMStock;
        
      } else {
        $peJPantsMStock = $_POST['peJPants-M-S'];
        $editPEJMS = "UPDATE admintbl SET productStock = $peJPantsMStock WHERE id = '30'";
        mysqli_query($conn, $editPEJMS);
      }
      if(empty($_POST['peJPants-L-P'])){
        $peJPantsLPrice = $peJPantsLPrice;
        
      } else {
        $peJPantsLPrice = $_POST['peJPants-L-P'];
        $editPEJLP = "UPDATE admintbl SET productPrice = $peJPantsLPrice WHERE id = '31'";
        mysqli_query($conn, $editPEJLP);
      }
      if(empty($_POST['peJPants-L-S'])){
        $peJPantsLStock = $peJPantsLStock;
      } else {
        $peJPantsLStock = $_POST['peJPants-L-S'];
        $editPEJLS = "UPDATE admintbl SET productStock = $peJPantsLStock WHERE id = '31'";
        mysqli_query($conn, $editPEJLS);
      }
      if(empty($_POST['peJPants-XL-P'])){
        $peJPantsXLPrice = $peJPantsXLPrice;
        
      }else {
        $peJPantsXLPrice = $_POST['peJPants-XL-P'];
        $editPEJXLP = "UPDATE admintbl SET productPrice = $peJPantsXLPrice WHERE id = '32'";
        mysqli_query($conn, $editPEJXLP);
        
      }
      if(empty($_POST['peJPants-XL-S'])){
        $peJPantsXLStock = $peJPantsXLStock;
        
      }else {
        $peJPantsXLStock = $_POST['peJPants-XL-S'];
        $editPEJXLS = "UPDATE admintbl SET productStock = $peJPantsXLStock WHERE id = '32'";
        mysqli_query($conn, $editPEJXLS);
      }
      if(empty($_POST['peJPants-2XL-P'])){
        $peJPants2XLPrice = $peJPants2XLPrice;
        
      }else {
        $peJPants2XLPrice = $_POST['peJPants-2XL-P'];
        $editPEJ2XLP = "UPDATE admintbl SET productPrice = $peJPants2XLPrice WHERE id = '33'";
        mysqli_query($conn, $editPEJ2XLP);
        
      }
      if(empty($_POST['peJPants-2XL-S'])){
        $peJPants2XLStock = $peJPants2XLStock;
      }else {
        $peJPants2XLStock = $_POST['peJPants-2XL-S'];
        $editPEJ2XLS = "UPDATE admintbl SET productStock = $peJPants2XLStock WHERE id = '33'";
        mysqli_query($conn, $editPEJ2XLS);
      }
      if(empty($_POST['peJPants-3XL-P'])){
        $peJPants3XLPrice = $peJPants3XLPrice;
        
      }else {
        $peJPants3XLPrice = $_POST['peJPants-3XL-P'];
        $editPEJ3XLP = "UPDATE admintbl SET productPrice = $peJPants3XLPrice WHERE id = '34'";
        mysqli_query($conn, $editPEJ3XLP);
      }
      if(empty($_POST['peJPants-3XL-S'])){
        $peJPants3XLStock = $peJPants3XLStock;
      }else {
        $peJPants3XLStock = $_POST['peJPants-3XL-S'];
        $editPEJ3XLS = "UPDATE admintbl SET productStock = $peJPants3XLStock WHERE id = '34'";
        mysqli_query($conn, $editPEJ3XLS);
      }
      if(empty($_POST['lanyardUNIV-P'])){
        $lanyardUNIVPrice = $lanyardUNIVPrice;
        
      } else {
        $lanyardUNIVPrice = $_POST['lanyardUNIV-P'];
        $editLUNIVP = "UPDATE admintbl SET productPrice = $lanyardUNIVPrice WHERE id = '35'";
        mysqli_query($conn, $editLUNIVP);
      }
      if(empty($_POST['lanyardUNIV-S'])){
        $lanyardUNIVStock = $lanyardUNIVStock;
        
      } else {
        $lanyardUNIVStock = $_POST['lanyardUNIV-S'];
        $editLUNIVS = "UPDATE admintbl SET productStock = $lanyardUNIVStock WHERE id = '35'";
        mysqli_query($conn, $editLUNIVS);
      }
      if(empty ($_POST['lanyardEDUC-P'])){
        
        $lanyardEDUCPrice = $lanyardEDUCPrice;
      } else {
        $lanyardEDUCPrice = $_POST['lanyardEDUC-P'];
        $editLEDUCP = "UPDATE admintbl SET productPrice = $lanyardEDUCPrice WHERE id = '36'";
        mysqli_query($conn, $editLEDUCP);

      }
      if(empty ($_POST['lanyardEDUC-S'])){
        
        $lanyardEDUCStock = $lanyardEDUCStock;
      } else {
        $lanyardEDUCStock = $_POST['lanyardEDUC-S'];
        $editLEDUCS = "UPDATE admintbl SET productStock = $lanyardEDUCStock WHERE id = '36'";
        mysqli_query($conn, $editLEDUCS);
        
      }
      if(empty($_POST['lanyardPSYCH-P'])){
        
        $lanyardPSYCHPrice = $lanyardPSYCHPrice;
      } else {
        $lanyardPSYCHPrice = $_POST['lanyardPSYCH-P'];
        $editLPSYCHP = "UPDATE admintbl SET productPrice = $lanyardPSYCHPrice WHERE id = '37'";     
        mysqli_query($conn, $editLPSYCHP);
      }

      if(empty($_POST['lanyardPSYCH-S']) ){
        
        $lanyardPSYCHStock = $lanyardPSYCHStock;
      } else {
        $lanyardPSYCHStock = $_POST['lanyardPSYCH-S'];

        $editLPSYCHS = "UPDATE admintbl SET productStock = $lanyardPSYCHStock WHERE id = '37'"; 
        mysqli_query($conn, $editLPSYCHS);     
      }
      
    }
    echo '<script>alert("Updated Successfully")
    window.location.href="home.php"</script>';
?>
