<?php

include ("connection.php");

$poloMS = "SELECT productStock FROM admintbl WHERE id='1'";
$poloMSq = mysqli_query($conn, $poloMS);
$rowStock = mysqli_fetch_assoc($poloMSq);

$poloMM = "SELECT productStock FROM admintbl WHERE id='2'";
$poloMMq = mysqli_query($conn, $poloMM);
$rowpoloMMStock = mysqli_fetch_assoc($poloMMq);

$poloML = "SELECT productStock FROM admintbl WHERE id='3'";
$poloMLq = mysqli_query($conn, $poloML);
$rowpoloMLStock = mysqli_fetch_assoc($poloMLq);

$poloMXL = "SELECT productStock FROM admintbl WHERE id='4'";
$poloMXLq = mysqli_query($conn, $poloMXL);
$rowpoloMXLStock = mysqli_fetch_assoc($poloMXLq);

$poloM2XL = "SELECT productStock FROM admintbl WHERE id='5'";
$poloM2XLq = mysqli_query($conn, $poloM2XL);
$rowpoloM2XLStock = mysqli_fetch_assoc($poloM2XLq);

$poloFXS = "SELECT productStock FROM admintbl WHERE id='6'";
$poloFXSq = mysqli_query($conn, $poloFXS);
$rowpoloFXSStock = mysqli_fetch_assoc($poloFXSq);

$poloFS = "SELECT productStock FROM admintbl WHERE id='7'";
$poloFSq = mysqli_query($conn, $poloFS);
$rowpoloFSStock = mysqli_fetch_assoc($poloFSq);

$poloFM = "SELECT productStock FROM admintbl WHERE id='8'";
$poloFMq = mysqli_query($conn, $poloFM);
$rowpoloFMStock = mysqli_fetch_assoc($poloFMq);

$poloFL = "SELECT productStock FROM admintbl WHERE id='9'";
$poloFLq = mysqli_query($conn, $poloFL);
$rowpoloFLStock = mysqli_fetch_assoc($poloFLq);

$poloFXL = "SELECT productStock FROM admintbl WHERE id='10'";
$poloFXLq = mysqli_query($conn, $poloFXL);
$rowpoloFXLStock = mysqli_fetch_assoc($poloFXLq);

$poloF2XL = "SELECT productStock FROM admintbl WHERE id='11'";
$poloF2XLq = mysqli_query($conn, $poloF2XL);
$rowpoloF2XLStock = mysqli_fetch_assoc($poloF2XLq);

$pantsMS = "SELECT productStock FROM admintbl WHERE id='12'";
$pantsMSq = mysqli_query($conn, $pantsMS);
$rowpantsMSStock = mysqli_fetch_assoc($pantsMSq);

$pantsMM = "SELECT productStock FROM admintbl WHERE id='13'";
$pantsMMq = mysqli_query($conn, $pantsMM);
$rowpantsMMStock = mysqli_fetch_assoc($pantsMMq);

$pantsML = "SELECT productStock FROM admintbl WHERE id='14'";
$pantsMLq = mysqli_query($conn, $pantsML);
$rowpantsMLStock = mysqli_fetch_assoc($pantsMLq);

$pantsMXL = "SELECT productStock FROM admintbl WHERE id='15'";
$pantsMXLq = mysqli_query($conn, $pantsMXL);
$rowpantsMXLStock = mysqli_fetch_assoc($pantsMXLq);

$pantsM2XL = "SELECT productStock FROM admintbl WHERE id='16'";
$pantsM2XLq = mysqli_query($conn, $pantsM2XL);
$rowpantsM2XLStock = mysqli_fetch_assoc($pantsM2XLq);

$slacksFXS = "SELECT productStock FROM admintbl WHERE id='17'";
$slacksFXSq = mysqli_query($conn, $slacksFXS);
$rowslacksFXSStock = mysqli_fetch_assoc($slacksFXSq);

$slacksFS = "SELECT productStock FROM admintbl WHERE id='18'";
$slacksFSq = mysqli_query($conn, $slacksFS);
$rowslacksFSStock = mysqli_fetch_assoc($slacksFSq);

$slacksFM = "SELECT productStock FROM admintbl WHERE id='19'";
$slacksFMq = mysqli_query($conn, $slacksFM);
$rowslacksFMStock = mysqli_fetch_assoc($slacksFMq);

$slacksFL = "SELECT productStock FROM admintbl WHERE id='20'";
$slacksFLq = mysqli_query($conn, $slacksFL);
$rowslacksFLStock = mysqli_fetch_assoc($slacksFLq);

$slacksFXL = "SELECT productStock FROM admintbl WHERE id='21'";
$slacksFXLq = mysqli_query($conn, $slacksFXL);
$rowslacksFXLStock = mysqli_fetch_assoc($slacksFXLq);

$slacksF2XL = "SELECT productStock FROM admintbl WHERE id='22'";
$slacksF2XLq = mysqli_query($conn, $slacksF2XL);
$rowslacksF2XLStock = mysqli_fetch_assoc($slacksF2XLq);

$peShirtS = "SELECT productStock FROM admintbl WHERE id='23'";
$peShirtSq = mysqli_query($conn, $peShirtS);
$rowspeShirtSStock = mysqli_fetch_assoc($peShirtSq);

$peShirtM = "SELECT productStock FROM admintbl WHERE id='24'";
$peShirtMq = mysqli_query($conn, $peShirtM);
$rowspeShirtMStock = mysqli_fetch_assoc($peShirtMq);

$peShirtL = "SELECT productStock FROM admintbl WHERE id='25'";
$peShirtLq = mysqli_query($conn, $peShirtL);
$rowspeShirtLStock = mysqli_fetch_assoc($peShirtLq);

$peShirtXL = "SELECT productStock FROM admintbl WHERE id='26'";
$peShirtXLq = mysqli_query($conn, $peShirtXL);
$rowspeShirtXLStock = mysqli_fetch_assoc($peShirtXLq);

$peShirt2XL = "SELECT productStock FROM admintbl WHERE id='27'";
$peShirt2XLq = mysqli_query($conn, $peShirt2XL);
$rowspeShirt2XLStock = mysqli_fetch_assoc($peShirt2XLq);

$peShirt3XL = "SELECT productStock FROM admintbl WHERE id='28'";
$peShirt3XLq = mysqli_query($conn, $peShirt3XL);
$rowspeShirt3XLStock = mysqli_fetch_assoc($peShirt3XLq);

$peJPantsS = "SELECT productStock FROM admintbl WHERE id='29'";
$peJPantsSq = mysqli_query($conn, $peJPantsS);
$rowspeJPantsSStock = mysqli_fetch_assoc($peJPantsSq);

$peJPantsM = "SELECT productStock FROM admintbl WHERE id='30'";
$peJPantsMq = mysqli_query($conn, $peJPantsM);
$rowspeJPantsMStock = mysqli_fetch_assoc($peJPantsMq);

$peJPantsL = "SELECT productStock FROM admintbl WHERE id='31'";
$peJPantsLq = mysqli_query($conn, $peJPantsL);
$rowspeJPantsLStock = mysqli_fetch_assoc($peJPantsLq);

$peJPantsXL = "SELECT productStock FROM admintbl WHERE id='32'";
$peJPantsXLq = mysqli_query($conn, $peJPantsXL);
$rowspeJPantsXLStock = mysqli_fetch_assoc($peJPantsXLq);

$peJPants2XL = "SELECT productStock FROM admintbl WHERE id='33'";
$peJPants2XLq = mysqli_query($conn, $peJPants2XL);
$rowspeJPants2XLStock = mysqli_fetch_assoc($peJPants2XLq);

$peJPants3XL = "SELECT productStock FROM admintbl WHERE id='34'";
$peJPants3XLq = mysqli_query($conn, $peJPants3XL);
$rowspeJPants3XLStock = mysqli_fetch_assoc($peJPants3XLq);

$lanyardEDUC = "SELECT productStock FROM admintbl WHERE id='35'";
$lanyardEDUCq = mysqli_query($conn, $lanyardEDUC);
$rowslanyardEDUCStock = mysqli_fetch_assoc($lanyardEDUCq);

$lanyardUNIV = "SELECT productStock FROM admintbl WHERE id='36'";
$lanyardUNIVq = mysqli_query($conn, $lanyardUNIV);
$rowslanyardUNIVStock = mysqli_fetch_assoc($lanyardUNIVq);

$lanyardPSYCH = "SELECT productStock FROM admintbl WHERE id='37'";
$lanyardPSYCHq = mysqli_query($conn, $lanyardPSYCH);
$rowslanyardPSYCHStock = mysqli_fetch_assoc($lanyardPSYCHq);

// Price
//POLO MALE
$poloMSP = "SELECT productPrice FROM admintbl WHERE id='1'";
$poloMSPq = mysqli_query($conn, $poloMSP);
$rowStockMSSP = mysqli_fetch_assoc($poloMSPq);
$poloMSPrice = $rowStockMSSP["productPrice"];

$poloMMP = "SELECT productPrice FROM admintbl WHERE id='2'";
$poloMMPq = mysqli_query($conn, $poloMMP);
$rowStockMMSP = mysqli_fetch_assoc($poloMMPq);
$poloMMPrice = $rowStockMMSP["productPrice"];

$poloMLP = "SELECT productPrice FROM admintbl WHERE id='3'";
$poloMLPq = mysqli_query($conn, $poloMLP);
$rowStockMLSP = mysqli_fetch_assoc($poloMLPq);
$poloMLPrice = $rowStockMLSP["productPrice"];

$poloMXLP = "SELECT productPrice FROM admintbl WHERE id='4'";
$poloMXLPq = mysqli_query($conn, $poloMXLP);
$rowStockMXLSP = mysqli_fetch_assoc($poloMXLPq);
$poloMXLPrice = $rowStockMXLSP["productPrice"];

$poloM2XLP = "SELECT productPrice FROM admintbl WHERE id='5'";
$poloM2XLPq = mysqli_query($conn, $poloM2XLP);
$rowStockM2XLSP = mysqli_fetch_assoc($poloM2XLPq);
$poloM2XLPrice = $rowStockM2XLSP["productPrice"];
//FEMALE POLO
$poloFXSP = "SELECT productPrice FROM admintbl WHERE id='6'";
$poloFXSPq = mysqli_query($conn, $poloFXSP);
$rowStockFXSSP = mysqli_fetch_assoc($poloFXSPq);
$poloFXSPrice = $rowStockFXSSP["productPrice"];

$poloFSP = "SELECT productPrice FROM admintbl WHERE id='7'";
$poloFSPq = mysqli_query($conn, $poloFSP);
$rowStockFSSP = mysqli_fetch_assoc($poloFSPq);
$poloFSPrice = $rowStockFSSP["productPrice"];

$poloFMP = "SELECT productPrice FROM admintbl WHERE id='8'";
$poloFMPq = mysqli_query($conn, $poloFMP);
$rowStockFMSP = mysqli_fetch_assoc($poloFMPq);
$poloFMPrice = $rowStockFMSP["productPrice"];

$poloFLP = "SELECT productPrice FROM admintbl WHERE id='9'";
$poloFLPq = mysqli_query($conn, $poloFLP);
$rowStockFLSP = mysqli_fetch_assoc($poloFLPq);
$poloFLPrice = $rowStockFLSP["productPrice"];

$poloFXLP = "SELECT productPrice FROM admintbl WHERE id='10'";
$poloFXLPq = mysqli_query($conn, $poloFXLP);
$rowStockFXLSP = mysqli_fetch_assoc($poloFXLPq);
$poloFXLPrice = $rowStockFXLSP["productPrice"];

$poloF2XLP = "SELECT productPrice FROM admintbl WHERE id='11'";
$poloF2XLPq = mysqli_query($conn, $poloF2XLP);
$rowStockF2XLSP = mysqli_fetch_assoc($poloF2XLPq);
$poloF2XLPrice = $rowStockF2XLSP["productPrice"];
//MALE PANTS
$pantsMSP = "SELECT productPrice FROM admintbl WHERE id='12'";
$pantsMSPq = mysqli_query($conn, $pantsMSP);
$rowStockpantsMSSP = mysqli_fetch_assoc($pantsMSPq);
$pantsMSPrice = $rowStockpantsMSSP["productPrice"];

$pantsMMP = "SELECT productPrice FROM admintbl WHERE id='13'";
$pantsMMPq = mysqli_query($conn, $pantsMMP);
$rowStockpantsMMSP = mysqli_fetch_assoc($pantsMMPq);
$pantsMMPrice = $rowStockpantsMMSP["productPrice"];

$pantsMLP = "SELECT productPrice FROM admintbl WHERE id='14'";
$pantsMLPq = mysqli_query($conn, $pantsMLP);
$rowStockpantsMLSP = mysqli_fetch_assoc($pantsMLPq);
$pantsMLPrice = $rowStockpantsMLSP["productPrice"];

$pantsMXLP = "SELECT productPrice FROM admintbl WHERE id='15'";
$pantsMXLPq = mysqli_query($conn, $pantsMXLP);
$rowStockpantsMXLSP = mysqli_fetch_assoc($pantsMXLPq);
$pantsMXLPrice = $rowStockpantsMXLSP["productPrice"];

$pantsM2XLP = "SELECT productPrice FROM admintbl WHERE id='16'";
$pantsM2XLPq = mysqli_query($conn, $pantsM2XLP);
$rowStockpantsM2XLSP = mysqli_fetch_assoc($pantsM2XLPq);
$pantsM2XLPrice = $rowStockpantsM2XLSP["productPrice"];

//Slacks Female
$slacksFXSP = "SELECT productPrice FROM admintbl WHERE id='17'";
$slacksFXSPq = mysqli_query($conn, $slacksFXSP);
$rowStockslacksFXSSP = mysqli_fetch_assoc($slacksFXSPq);
$slacksFXSPrice = $rowStockslacksFXSSP["productPrice"];

$slacksFSP = "SELECT productPrice FROM admintbl WHERE id='18'";
$slacksFSPq = mysqli_query($conn, $slacksFSP);
$rowStockslacksFSSP = mysqli_fetch_assoc($slacksFSPq);
$slacksFSPrice = $rowStockslacksFSSP["productPrice"];

$slacksFMP = "SELECT productPrice FROM admintbl WHERE id='19'";
$slacksFMPq = mysqli_query($conn, $slacksFMP);
$rowStockslacksFMSP = mysqli_fetch_assoc($slacksFMPq);
$slacksFMPrice = $rowStockslacksFMSP["productPrice"];

$slacksFLP = "SELECT productPrice FROM admintbl WHERE id='20'";
$slacksFLPq = mysqli_query($conn, $slacksFLP);
$rowStockslacksFLSP = mysqli_fetch_assoc($slacksFLPq);
$slacksFLPrice = $rowStockslacksFLSP["productPrice"];

$slacksFXLP = "SELECT productPrice FROM admintbl WHERE id='21'";
$slacksFXLPq = mysqli_query($conn, $slacksFXLP);
$rowStockslacksFXLSP = mysqli_fetch_assoc($slacksFXLPq);
$slacksFXLPrice = $rowStockslacksFXLSP["productPrice"];

$slacksF2XLP = "SELECT productPrice FROM admintbl WHERE id='22'";
$slacksF2XLPq = mysqli_query($conn, $slacksF2XLP);
$rowStockslacksF2XLSP = mysqli_fetch_assoc($slacksF2XLPq);
$slacksF2XLPrice = $rowStockslacksF2XLSP["productPrice"];

//PE TSHIRT

$peShirtSP = "SELECT productPrice FROM admintbl WHERE id='23'";
$peShirtSPq = mysqli_query($conn, $peShirtSP);
$rowStockpeShirtSSP = mysqli_fetch_assoc($peShirtSPq);
$peShirtSPrice = $rowStockpeShirtSSP["productPrice"];

$peShirtMP = "SELECT productPrice FROM admintbl WHERE id='24'";
$peShirtMPq = mysqli_query($conn, $peShirtMP);
$rowStockpeShirtMSP = mysqli_fetch_assoc($peShirtMPq);
$peShirtMPrice = $rowStockpeShirtMSP["productPrice"];

$peShirtLP = "SELECT productPrice FROM admintbl WHERE id='25'";
$peShirtLPq = mysqli_query($conn, $peShirtLP);
$rowStockpeShirtLSP = mysqli_fetch_assoc($peShirtLPq);
$peShirtLPrice = $rowStockpeShirtLSP["productPrice"];

$peShirtXLP = "SELECT productPrice FROM admintbl WHERE id='26'";
$peShirtXLPq = mysqli_query($conn, $peShirtXLP);
$rowStockpeShirtXLSP = mysqli_fetch_assoc($peShirtXLPq);
$peShirtXLPrice = $rowStockpeShirtXLSP["productPrice"];

$peShirt2XLP = "SELECT productPrice FROM admintbl WHERE id='27'";
$peShirt2XLPq = mysqli_query($conn, $peShirt2XLP);
$rowStockpeShirt2XLSP = mysqli_fetch_assoc($peShirt2XLPq);
$peShirt2XLPrice = $rowStockpeShirt2XLSP["productPrice"];

$peShirt3XLP = "SELECT productPrice FROM admintbl WHERE id='28'";
$peShirt3XLPq = mysqli_query($conn, $peShirt3XLP);
$rowStockpeShirt3XLSP = mysqli_fetch_assoc($peShirt3XLPq);
$peShirt3XLPrice = $rowStockpeShirt3XLSP["productPrice"];

//PE JPants

$peJPantsSP = "SELECT productPrice FROM admintbl WHERE id='29'";
$peJPantsSPq = mysqli_query($conn, $peJPantsSP);
$rowStockpeJPantsSSP = mysqli_fetch_assoc($peJPantsSPq);
$peJPantsSPrice = $rowStockpeJPantsSSP["productPrice"];

$peJPantsMP = "SELECT productPrice FROM admintbl WHERE id='30'";
$peJPantsMPq = mysqli_query($conn, $peJPantsMP);
$rowStockpeJPantsMSP = mysqli_fetch_assoc($peJPantsMPq);
$peJPantsMPrice = $rowStockpeJPantsMSP["productPrice"];

$peJPantsLP = "SELECT productPrice FROM admintbl WHERE id='31'";
$peJPantsLPq = mysqli_query($conn, $peJPantsLP);
$rowStockpeJPantsLSP = mysqli_fetch_assoc($peJPantsLPq);
$peJPantsLPrice = $rowStockpeJPantsLSP["productPrice"];

$peJPantsXLP = "SELECT productPrice FROM admintbl WHERE id='32'";
$peJPantsXLPq = mysqli_query($conn, $peJPantsXLP);
$rowStockpeJPantsXLSP = mysqli_fetch_assoc($peJPantsXLPq);
$peJPantsXLPrice = $rowStockpeJPantsXLSP["productPrice"];

$peJPants2XLP = "SELECT productPrice FROM admintbl WHERE id='33'";
$peJPants2XLPq = mysqli_query($conn, $peJPants2XLP);
$rowStockpeJPants2XLSP = mysqli_fetch_assoc($peJPants2XLPq);
$peJPants2XLPrice = $rowStockpeJPants2XLSP["productPrice"];

$peJPants3XLP = "SELECT productPrice FROM admintbl WHERE id='34'";
$peJPants3XLPq = mysqli_query($conn, $peJPants3XLP);
$rowStockpeJPants3XLSP = mysqli_fetch_assoc($peJPants3XLPq);
$peJPants3XLPrice = $rowStockpeJPants3XLSP["productPrice"];

//LANYARDS
$lanyardEDUCP = "SELECT productPrice FROM admintbl WHERE id='35'";
$lanyardEDUCPq = mysqli_query($conn, $lanyardEDUCP);
$rowStocklanyardEDUCSP = mysqli_fetch_assoc($lanyardEDUCPq);
$lanyardEDUCPrice = $rowStocklanyardEDUCSP["productPrice"];

$lanyardUNIVP = "SELECT productPrice FROM admintbl WHERE id='36'";
$lanyardUNIVPq = mysqli_query($conn, $lanyardUNIVP);
$rowStocklanyardUNIVSP = mysqli_fetch_assoc($lanyardUNIVPq);
$lanyardUNIVPrice = $rowStocklanyardUNIVSP["productPrice"];

$lanyardPSYCHP = "SELECT productPrice FROM admintbl WHERE id='37'";
$lanyardPSYCHPq = mysqli_query($conn, $lanyardPSYCHP);
$rowStocklanyardPSYCHSP = mysqli_fetch_assoc($lanyardPSYCHPq);
$lanyardPSYCHPrice = $rowStocklanyardPSYCHSP["productPrice"];

$poloMSQuantity = '1';
$poloMMQuantity = '1';
$poloMLQuantity = '1';
$poloMXLQuantity = '1';
$poloM2XLQuantity = '1';

$poloFXSQuantity = '1';
$poloFSQuantity = '1';
$poloFMQuantity = '1';
$poloFLQuantity = '1';
$poloFXLQuantity = '1';
$poloF2XLQuantity = '1';

$pantsMSQuantity = '1';
$pantsMMQuantity = '1';
$pantsMLQuantity = '1';
$pantsMXLQuantity = '1';
$pantsM2XLQuantity = '1';

$slacksFXSQuantity = '1';
$slacksFSQuantity = '1';
$slacksFMQuantity = '1';
$slacksFLQuantity = '1';
$slacksFXLQuantity = '1';
$slacksF2XLQuantity = '1';

$peShirtSQuantity = '1';
$peShirtMQuantity = '1';
$peShirtLQuantity = '1';
$peShirtXLQuantity = '1';
$peShirt2XLQuantity = '1';
$peShirt3XLQuantity = '1';

$peJPantsSQuantity = '1';
$peJPantsMQuantity = '1';
$peJPantsLQuantity = '1';
$peJPantsXLQuantity = '1';
$peJPants2XLQuantity = '1';
$peJPants3XLQuantity = '1';

$lanyardEDUCQuantity = '1';
$lanyardUNIVQuantity = '1';
$lanyardPSYCHQuantity = '1';

$poloMSQ = "INSERT INTO quantitytbl (productName, productSize, productPrice, productQuantity, inserted) VALUES ('Polo Male', 'Small', $poloMSPrice , $poloMSQuantity, 'false')";
$poloMMQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('Polo Male', 'Medium', $poloMMPrice, $poloMMQuantity, 'false')";
$poloMLQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('Polo Male', 'Large', $poloMLPrice, $poloMLQuantity, 'false')";
$poloMXLQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('Polo Male', 'XL', $poloMXLPrice, $poloMXLQuantity, 'false')";
$poloM2XLQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('Polo Male', '2XL',  $poloM2XLPrice, $poloM2XLQuantity, 'false')";

$poloFXSQ = "INSERT INTO quantitytbl (productName, productSize, productPrice, productQuantity, inserted) VALUES ('Polo Female', 'Extra Small', $poloFXSPrice , $poloFXSQuantity, 'false')";
$poloFSQ = "INSERT INTO quantitytbl (productName, productSize, productPrice, productQuantity, inserted) VALUES ('Polo Female', 'Small', $poloFSPrice , $poloFSQuantity, 'false')";
$poloFMQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('Polo Female', 'Medium', $poloFMPrice, $poloFMQuantity, 'false')";
$poloFLQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('Polo Female', 'Large', $poloFLPrice, $poloFLQuantity, 'false')";
$poloFXLQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('Polo Female', 'XL', $poloFXLPrice, $poloFXLQuantity, 'false')";
$poloF2XLQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('Polo Female', '2XL',  $poloF2XLPrice, $poloF2XLQuantity, 'false')";

$pantsMSQ = "INSERT INTO quantitytbl (productName, productSize, productPrice, productQuantity, inserted) VALUES ('Pants Male', 'Small', $pantsMSPrice , $pantsMSQuantity, 'false')";
$pantsMMQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('Pants Male', 'Medium', $pantsMMPrice, $pantsMMQuantity, 'false')";
$pantsMLQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('Pants Male', 'Large', $pantsMLPrice, $pantsMLQuantity, 'false')";
$pantsMXLQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('Pants Male', 'XL', $pantsMXLPrice, $pantsMXLQuantity, 'false')";
$pantsM2XLQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('Pants Male', '2XL',  $pantsM2XLPrice, $pantsM2XLQuantity, 'false')";

$slacksFXSQ = "INSERT INTO quantitytbl (productName, productSize, productPrice, productQuantity, inserted) VALUES ('Slacks Female', 'Extra Small', $slacksFXSPrice , $slacksFXSQuantity, 'false')";
$slacksFSQ = "INSERT INTO quantitytbl (productName, productSize, productPrice, productQuantity, inserted) VALUES ('Slacks Female', 'Small', $slacksFSPrice , $slacksFSQuantity, 'false')";
$slacksFMQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('Slacks Female', 'Medium', $slacksFMPrice, $slacksFMQuantity, 'false')";
$slacksFLQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('Slacks Female', 'Large', $slacksFLPrice, $slacksFLQuantity, 'false')";
$slacksFXLQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('Slacks Female', 'XL', $slacksFXLPrice, $slacksFXLQuantity, 'false')";
$slacksF2XLQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('Slacks Female', '2XL',  $slacksF2XLPrice, $slacksF2XLQuantity, 'false')";

$peShirtSQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('PE TShirt', 'Small', $peShirtSPrice , $peShirtSQuantity, 'false')";
$peShirtMQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('PE TShirt', 'Medium', $peShirtMPrice, $peShirtMQuantity, 'false')";
$peShirtLQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('PE TShirt', 'Large', $peShirtLPrice, $peShirtLQuantity, 'false')";
$peShirtXLQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('PE TShirt', 'XL', $peShirtXLPrice, $peShirtXLQuantity, 'false')";
$peShirt2XLQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('PE TShirt', '2XL',  $peShirt2XLPrice, $peShirt2XLQuantity, 'false')";
$peShirt3XLQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('PE TShirt', '3XL',  $peShirt3XLPrice, $peShirt3XLQuantity, 'false')";

$peJPantsSQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('PE JPants', 'Small', $peJPantsSPrice , $peJPantsSQuantity, 'false')";
$peJPantsMQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('PE JPants', 'Medium', $peJPantsMPrice, $peJPantsMQuantity, 'false')";
$peJPantsLQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('PE JPants', 'Large', $peJPantsLPrice, $peJPantsLQuantity, 'false')";
$peJPantsXLQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('PE JPants', 'XL', $peJPantsXLPrice, $peJPantsXLQuantity, 'false')";
$peJPants2XLQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('PE JPants', '2XL',  $peJPants2XLPrice, $peJPants2XLQuantity, 'false')";
$peJPants3XLQ = "INSERT INTO quantitytbl(productName, productSize, productPrice, productQuantity, inserted) VALUES ('PE JPants', '3XL',  $peJPants3XLPrice, $peJPants3XLQuantity, 'false')";

$lanyardUNIVQ = "INSERT INTO quantitytbl (productName, productPrice, productQuantity, inserted) VALUES ('Lanyard UNIV', $lanyardUNIVPrice , $lanyardUNIVQuantity, 'false')";
$lanyardEDUCQ = "INSERT INTO quantitytbl(productName, productPrice, productQuantity, inserted) VALUES ('Lanyard EDUC', $lanyardEDUCPrice, $lanyardEDUCQuantity, 'false')";
$lanyardPSYCHQ = "INSERT INTO quantitytbl(productName, productPrice, productQuantity, inserted) VALUES ('Lanyard PSYCH', $lanyardPSYCHPrice, $lanyardPSYCHQuantity, 'false')";


mysqli_query($conn, $poloMSQ);
mysqli_query($conn, $poloMMQ);
mysqli_query($conn, $poloMLQ);
mysqli_query($conn, $poloMXLQ);
mysqli_query($conn, $poloM2XLQ);

mysqli_query($conn, $poloFXSQ);
mysqli_query($conn, $poloFSQ);
mysqli_query($conn, $poloFMQ);
mysqli_query($conn, $poloFLQ);
mysqli_query($conn, $poloFXLQ);
mysqli_query($conn, $poloF2XLQ);

mysqli_query($conn, $pantsMSQ);
mysqli_query($conn, $pantsMMQ);
mysqli_query($conn, $pantsMLQ);
mysqli_query($conn, $pantsMXLQ);
mysqli_query($conn, $pantsM2XLQ);

mysqli_query($conn, $slacksFXSQ);
mysqli_query($conn, $slacksFSQ);
mysqli_query($conn, $slacksFMQ);
mysqli_query($conn, $slacksFLQ);
mysqli_query($conn, $slacksFXLQ);
mysqli_query($conn, $slacksF2XLQ);

mysqli_query($conn, $peShirtSQ);
mysqli_query($conn, $peShirtMQ);
mysqli_query($conn, $peShirtLQ);
mysqli_query($conn, $peShirtXLQ);
mysqli_query($conn, $peShirt2XLQ);
mysqli_query($conn, $peShirt3XLQ);

mysqli_query($conn, $peJPantsSQ);
mysqli_query($conn, $peJPantsMQ);
mysqli_query($conn, $peJPantsLQ);
mysqli_query($conn, $peJPantsXLQ);
mysqli_query($conn, $peJPants2XLQ);
mysqli_query($conn, $peJPants3XLQ);

mysqli_query($conn, $lanyardUNIVQ);
mysqli_query($conn, $lanyardEDUCQ);
mysqli_query($conn, $lanyardPSYCHQ);

$removeExcess = "DELETE FROM quantitytbl WHERE id > '37'";
mysqli_query($conn, $removeExcess);

$upPSMQ = "UPDATE quantitytbl SET productPrice = $poloMSPrice WHERE id = '1'";
$upPMMQ = "UPDATE quantitytbl SET productPrice = $poloMMPrice WHERE id = '2'";
$upPLMQ = "UPDATE quantitytbl SET productPrice = $poloMLPrice WHERE id = '3'";
$upPXLMQ = "UPDATE quantitytbl SET productPrice = $poloMXLPrice WHERE id = '4'";
$upP2XLMQ = "UPDATE quantitytbl SET productPrice = $poloM2XLPrice WHERE id = '5'";

$upPXSFQ = "UPDATE quantitytbl SET productPrice = $poloFXSPrice WHERE id = '6'";
$upPSFQ = "UPDATE quantitytbl SET productPrice = $poloFSPrice WHERE id = '7'";
$upPMFQ = "UPDATE quantitytbl SET productPrice = $poloFMPrice WHERE id = '8'";
$upPLFQ = "UPDATE quantitytbl SET productPrice = $poloFLPrice WHERE id = '9'";
$upPXLFQ = "UPDATE quantitytbl SET productPrice = $poloFXLPrice WHERE id = '10'";
$upP2XLFQ = "UPDATE quantitytbl SET productPrice = $poloF2XLPrice WHERE id = '11'";

$upPASMQ = "UPDATE quantitytbl SET productPrice = $pantsMSPrice WHERE id = '12'";
$upPAMMQ = "UPDATE quantitytbl SET productPrice = $pantsMMPrice WHERE id = '13'";
$upPALMQ = "UPDATE quantitytbl SET productPrice = $pantsMLPrice WHERE id = '14'";
$upPAXLMQ = "UPDATE quantitytbl SET productPrice = $pantsMXLPrice WHERE id = '15'";
$upPA2XLMQ = "UPDATE quantitytbl SET productPrice = $pantsM2XLPrice WHERE id = '16'";

$upSXSFQ = "UPDATE quantitytbl SET productPrice = $slacksFXSPrice WHERE id = '17'";
$upSSFQ = "UPDATE quantitytbl SET productPrice = $slacksFSPrice WHERE id = '18'";
$upSMFQ = "UPDATE quantitytbl SET productPrice = $slacksFMPrice WHERE id = '19'";
$upSLFQ = "UPDATE quantitytbl SET productPrice = $slacksFLPrice WHERE id = '20'";
$upSXLFQ = "UPDATE quantitytbl SET productPrice = $slacksFXLPrice WHERE id = '21'";
$upS2XLFQ = "UPDATE quantitytbl SET productPrice = $slacksF2XLPrice WHERE id = '22'";

$upPESSQ = "UPDATE quantitytbl SET productPrice = $peShirtSPrice WHERE id = '23'";
$upPESMQ = "UPDATE quantitytbl SET productPrice = $peShirtMPrice WHERE id = '24'";
$upPESLQ = "UPDATE quantitytbl SET productPrice = $peShirtLPrice WHERE id = '25'";
$upPESXLQ = "UPDATE quantitytbl SET productPrice = $peShirtXLPrice WHERE id = '26'";
$upPES2XLQ = "UPDATE quantitytbl SET productPrice = $peShirt2XLPrice WHERE id = '27'";
$upPES3XLQ = "UPDATE quantitytbl SET productPrice = $peShirt3XLPrice WHERE id = '28'";

$upPEJSQ = "UPDATE quantitytbl SET productPrice = $peJPantsSPrice WHERE id = '29'";
$upPEJMQ = "UPDATE quantitytbl SET productPrice = $peJPantsMPrice WHERE id = '30'";
$upPEJLQ = "UPDATE quantitytbl SET productPrice = $peJPantsLPrice WHERE id = '31'";
$upPEJXLQ = "UPDATE quantitytbl SET productPrice = $peJPantsXLPrice WHERE id = '32'";
$upPEJ2XLQ = "UPDATE quantitytbl SET productPrice = $peJPants2XLPrice WHERE id = '33'";
$upPEJ3XLQ = "UPDATE quantitytbl SET productPrice = $peJPants3XLPrice WHERE id = '34'";

$upLUNIVQ = "UPDATE quantitytbl SET productPrice = $lanyardUNIVPrice WHERE id = '35'";
$upLEDUCQ = "UPDATE quantitytbl SET productPrice = $lanyardEDUCPrice WHERE id = '36'";
$upLPSYCHQ = "UPDATE quantitytbl SET productPrice = $lanyardPSYCHPrice WHERE id = '37'";

mysqli_query($conn, $upPSMQ);
mysqli_query($conn, $upPMMQ);
mysqli_query($conn, $upPLMQ);
mysqli_query($conn, $upPXLMQ);
mysqli_query($conn, $upP2XLMQ);

mysqli_query($conn, $upPXSFQ);
mysqli_query($conn, $upPSFQ);
mysqli_query($conn, $upPMFQ);
mysqli_query($conn, $upPLFQ);
mysqli_query($conn, $upPXLFQ);
mysqli_query($conn, $upP2XLFQ);

mysqli_query($conn, $upPASMQ);
mysqli_query($conn, $upPAMMQ);
mysqli_query($conn, $upPALMQ);
mysqli_query($conn, $upPAXLMQ);
mysqli_query($conn, $upPA2XLMQ);

mysqli_query($conn, $upSXSFQ);
mysqli_query($conn, $upSSFQ);
mysqli_query($conn, $upSMFQ);
mysqli_query($conn, $upSLFQ);
mysqli_query($conn, $upSXLFQ);
mysqli_query($conn, $upS2XLFQ);

mysqli_query($conn, $upPESMQ);
mysqli_query($conn, $upPESMQ);
mysqli_query($conn, $upPESLQ);
mysqli_query($conn, $upPESXLQ);
mysqli_query($conn, $upPES2XLQ);
mysqli_query($conn, $upPES3XLQ);

mysqli_query($conn, $upPEJMQ);
mysqli_query($conn, $upPEJMQ);
mysqli_query($conn, $upPEJLQ);
mysqli_query($conn, $upPEJXLQ);
mysqli_query($conn, $upPEJ2XLQ);
mysqli_query($conn, $upPEJ3XLQ);

mysqli_query($conn, $upLEDUCQ);
mysqli_query($conn, $upLUNIVQ);
mysqli_query($conn, $upLPSYCHQ);

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
    <title>Document</title>
</head>
<body>
    <div>
        <a href="home.php">Home</a>
        <a href=""></a>
        <a href=""></a>
        <a href="account.php"> <?php
            echo $row["email"];
        ?>
            </a>
        <a href="logout.php">Logout</a>
    </div>
    <div>
        <a href="cart.php">CART</a>
        
    </div>
    
    <div>
            <h3>Products</h3>
            <form action="products.php" method="POST">
            <div>
                
                <h5>Polo Male</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Small</p>
                <p>Stock <?php echo $rowStock["productStock"] ?></p>
                <input type="number" name="quantityPMS" value="1">
                <p>Description</p>

                <button name="cartPMS">Add to Cart</button> 
            </div>
            <div>
                <h5>Polo Male</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Medium</p>
                <p>Stock <?php echo $rowpoloMMStock["productStock"] ?></p>

                <input type="number" name="quantityPMM" value="1">
                <p>Description</p>
                <button name="cartPMM">Add to Cart</button> 
            </div>
           
            <div>
                <h5>Polo Male</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Large</p>
                <p>Stock <?php echo $rowpoloMLStock["productStock"] ?></p>
                <input type="number" name="quantityPML" value="1">
                <p>Description</p>
                <button name="cartPML">Add to Cart</button> 
            </div>
            <div>
                <h5>Polo Male</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size XL</p>
                <p>Stock <?php echo $rowpoloMXLStock["productStock"] ?></p>

                <input type="number" name="quantityPMXL" value="1">
                <p>Description</p>
                <button name="cartPMXL">Add to Cart</button> 
            </div>
            <div>
                <h5>Polo Male</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size 2XL</p>
                <p>Stock <?php echo $rowpoloM2XLStock["productStock"] ?></p>

                <input type="number" name="quantityPM2XL" value="1">
                <p>Description</p>
                <button name="cartPM2XL">Add to Cart</button> 
            </div>
            <div>
                <h5>Pants Male</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Small</p>
                <p>Stock <?php echo $rowpantsMSStock["productStock"] ?></p>

                <input type="number" name="quantityPantsMS" value="1">
                <p>Description</p>
                <button name="cartPantsMS">Add to Cart</button>  
            </div>
            <div>
                <h5>Pants Male</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Medium</p>
                <p>Stock <?php echo $rowpantsMMStock["productStock"] ?></p>

                <input type="number" name="quantityPantsMM" value="1">
                <p>Description</p>
                <button name="cartPantsMM">Add to Cart</button>
            </div>
            <div>
                <h5>Pants Male</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Large</p>
                <p>Stock <?php echo $rowpantsMLStock["productStock"] ?></p>

                <input type="number" name="quantityPantsML" value="1">
                <p>Description</p>
                <button name="cartPantsML">Add to Cart</button> 
            </div>
            <div>
                <h5>Pants Male</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size XL</p>
                <p>Stock <?php echo $rowpantsMXLStock["productStock"] ?></p>

                <input type="number" name="quantityPantsMXL" value="1">
                <p>Description</p>
                <button name="cartPantsMXL">Add to Cart</button>
            </div>
            <div>
                <h5>Pants Male</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size 2XL</p>
                <p>Stock <?php echo $rowpantsM2XLStock["productStock"] ?></p>

                <input type="number" name="quantityPantsM2XL" value="1">
                <p>Description</p>
                <button name="cartPantsM2XL">Add to Cart</button> 
            </div>
            <div>
                <h5>Polo Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size XS</p>
                <p>Stock <?php echo $rowpoloFXSStock["productStock"] ?></p>

                <input type="number" name="quantityPoloFXS" value="1">
                <p>Description</p>
                <button name="cartpoloFXS">Add to Cart</button>
            </div>
            <div>
                <h5>Polo Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Small</p>
                <p>Stock <?php echo $rowpoloFSStock["productStock"] ?></p>

                <input type="number" name="quantityPoloFS" value="1">
                <p>Description</p>
                <button name="cartpoloFS">Add to Cart</button>
            </div>
            <div>
                <h5>Polo Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Medium</p>
               <p>Stock <?php echo $rowpoloFMStock["productStock"] ?></p>

                <input type="number" name="quantityPoloFM" value="1">
                <p>Description</p>
                <button name="cartpoloFM">Add to Cart</button>
            </div>
            <div>
                <h5>Polo Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Large</p>
                <p>Stock <?php echo $rowpoloFLStock["productStock"] ?></p>

                <input type="number" name="quantityPoloFL" value="1">
                <p>Description</p>
                <button name="cartpoloFL">Add to Cart</button>
            </div>
            <div>
                <h5>Polo Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size XL</p>
                <p>Stock <?php echo $rowpoloFXLStock["productStock"] ?></p>

                <input type="number" name="quantityPoloFXL" value="1">
                <p>Description</p>
                <button name="cartpoloFXL">Add to Cart</button>
            </div>
            <div>
                <h5>Polo Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size 2XL</p>
                <p>Stock <?php echo $rowpoloF2XLStock["productStock"] ?></p>

                <input type="number" name="quantityPoloF2XL" value="1">
                <p>Description</p>
                <button name="cartpoloF2XL">Add to Cart</button> 
            </div>
            <div>
                <h5>Slacks Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size XS</p>
                <p>Stock <?php echo $rowslacksFXSStock["productStock"] ?></p>

                <input type="number" name="quantitySlacksXS" value="1">
                <p>Description</p>
                <button name="cartslacksFXS">Add to Cart</button> 
            </div>
            <div>
                <h5>Slacks Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Small</p>
                <p>Stock <?php echo $rowslacksFSStock["productStock"] ?></p>

                <input type="number" name="quantitySlacksS" value="1">
                <p>Description</p>
                <button name="cartslacksFS">Add to Cart</button> 
            </div>
            <div>
                <h5>Slacks Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Medium</p>
                <p>Stock <?php echo $rowslacksFMStock["productStock"] ?></p>

                <input type="number" name="quantitySlacksM" value="1">
                <p>Description</p>
                <button name="cartslacksFM">Add to Cart</button> 
            </div>
            <div>
                <h5>Slacks Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Large</p>
                <p>Stock <?php echo $rowslacksFLStock["productStock"] ?></p>

                <input type="number" name="quantitySlacksL" value="1">
                <p>Description</p>
                <button name="cartslacksFL">Add to Cart</button>  
            </div>
            <div>
                <h5>Slacks Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size XL</p>
                <p>Stock <?php echo $rowslacksFXLStock["productStock"] ?></p>

                <input type="number" name="quantitySlacksXL" value="1">
                <p>Description</p>
                <button name="cartslacksFXL">Add to Cart</button>  
            </div>
            <div>
                <h5>Slacks Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size 2XL</p>
                <p>Stock <?php echo $rowslacksF2XLStock["productStock"] ?></p>

                <input type="number" name="quantitySlacks2XL" value="1">
                <p>Description</p>
                <button name="cartslacksF2XL">Add to Cart</button>  
            </div>
            <div>
                <h5>PE Tshirt</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Small</p>
                <p>Stock <?php echo $rowspeShirtSStock["productStock"] ?></p>

                <input type="number" name="quantityPeShirtS" value="1">
                <p>Description</p>
                <button name="cartpeShirtS">Add to Cart</button> 
            </div>
            <div>
                <h5>PE Tshirt</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Medium</p>
                <p>Stock <?php echo $rowspeShirtMStock["productStock"] ?></p>

                <input type="number" name="quantityPeShirtM" value="1">
                <p>Description</p>
                <button name="cartpeShirtM">Add to Cart</button>  
            </div>
            <div>
                <h5>PE Tshirt</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Large</p>
                <p>Stock <?php echo $rowspeShirtLStock["productStock"] ?></p>

                <input type="number" name="quantityPeShirtL" value="1">
                <p>Description</p>
                <button name="cartpeShirtL">Add to Cart</button> 
            </div>
            <div>
                <h5>PE Tshirt</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size XL</p>
                <p>Stock <?php echo $rowspeShirtXLStock["productStock"] ?></p>

                <input type="number" name="quantityPeShirtXL" value="1">
                <p>Description</p>
                <button name="cartpeShirtXL">Add to Cart</button>  
            </div>
            <div>
                <h5>PE Tshirt</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size 2XL</p>
                <p>Stock <?php echo $rowspeShirt2XLStock["productStock"] ?></p>

                <input type="number" name="quantityPeShirt2XL" value="1">
                <p>Description</p>
                <button name="cartpeShirt2XL">Add to Cart</button>  
            </div>
            <div>
                <h5>PE Tshirt</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size 3XL</p>
                <p>Stock <?php echo $rowspeShirt3XLStock["productStock"] ?></p>

                <input type="number" name="quantityPeShirt3XL" value="1">
                <p>Description</p>
                <button name="cartpeShirt3XL">Add to Cart</button> 
            </div>
            <div>
                <h5>PE JPants</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Small</p>
                <p>Stock <?php echo $rowspeJPantsSStock["productStock"] ?></p>

                <input type="number" name="quantityPeJPantsS" value="1">
                <p>Description</p>
                <button name="cartpeJPantsS">Add to Cart</button>  
            </div>
            <div>
                <h5>PE JPants</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Medium</p>
                <p>Stock <?php echo $rowspeJPantsMStock["productStock"] ?></p>

                <input type="number" name="quantityPeJPantsM" value="1">
                <p>Description</p>
                <button name="cartpeJPantsM">Add to Cart</button> 
            </div>
            <div>
                <h5>PE JPants</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Large</p>
                <p>Stock <?php echo $rowspeJPantsLStock["productStock"] ?></p>

                <input type="number" name="quantityPeJPantsL" value="1">
                <p>Description</p>
                <button name="cartpeJPantsL">Add to Cart</button> 
            </div>
            <div>
                <h5>PE JPants</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size XL</p>
                <p>Stock <?php echo $rowspeJPantsXLStock["productStock"] ?></p>

                <input type="number" name="quantityPeJPantsXL" value="1">
                <p>Description</p>
                <button name="cartpeJPantsXL">Add to Cart</button> 
            </div>
            <div>
                <h5>PE JPants</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size 2XL</p>
                <p>Stock <?php echo $rowspeJPants2XLStock["productStock"] ?></p>

                <input type="number" name="quantityPeJPants2XL" value="1">
                <p>Description</p>
                <button name="cartpeJPants2XL">Add to Cart</button> 
            </div>
            <div>
                <h5>PE JPants</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size 3XL</p>
                <p>Stock <?php echo $rowspeJPants3XLStock["productStock"] ?></p>

                <input type="number" name="quantityPeJPants3XL" value="1">
                <p>Description</p>
                <button name="cartpeJPants3XL">Add to Cart</button> 
            </div>
            <div>
                <h5>LANYARD (UNIV)</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size S</p>
                <p>Stock <?php echo $rowslanyardUNIVStock["productStock"] ?></p>

                <input type="number" name="quantitylanyardUNIV" value="1">
                <p>Description</p>
                <button name="cartlanyardUNIV">Add to Cart</button>
            </div>
            <div>
                <h5>LANYARD (EDUC)</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size S</p>
                <p>Stock <?php echo $rowslanyardEDUCStock["productStock"] ?></p>

                <input type="number" name="quantitylanyardEDUC" value="1">
                <p>Description</p>
                <button name="cartlanyardEDUC">Add to Cart</button> 
            </div>
            <div>
                <h5>LANYARD (PSYCH)</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size S</p>
                <p>Stock <?php echo $rowslanyardPSYCHStock["productStock"] ?></p>

                <input type="number" name="quantitylanyardPSYCH" value="1">
                <p>Description</p>
                <button name="cartlanyardPSYCH">Add to Cart</button> 
            </div>
            </form>
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
    <title>Document</title>
</head>
<body>
    <div>
        <a href="home.php">Home</a>
        <a href=""></a>
        <a href=""></a>
        <a href="login.php"> Login
            </a>
    </div>
    <div>
            <h3>Products</h3>
            <form action="notLoginfunc.php" method= "POST">
            <div>
                <h5>Polo Male</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Small</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>Polo Male</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Medium</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>Polo Male</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Large</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>Polo Male</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size XL</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>Polo Male</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size 2XL</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>Pants Male</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Small</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>Pants Male</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Medium</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>Pants Male</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Large</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>Pants Male</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size XL</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>Pants Male</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size 2XL</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>Polo Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size XS</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>Polo Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Small</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>Polo Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Medium</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>Polo Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Large</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>Polo Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size XL</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>Polo Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size 2XL</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>Slacks Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size XS</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>Slacks Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Small</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>Slacks Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Medium</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>Slacks Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Large</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>Slacks Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size XL</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>Slacks Female</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size 2XL</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>PE Tshirt</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Small</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>PE Tshirt</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Medium</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>PE Tshirt</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Large</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>PE Tshirt</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size XL</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>PE Tshirt</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size 2XL</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>PE Tshirt</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size 3XL</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>PE JPants</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Small</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>PE JPants</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Medium</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>PE JPants</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size Large</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>PE JPants</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size XL</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>PE JPants</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size 2XL</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>PE JPants</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size 3XL</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>LANYARD (UNIV)</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size S</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>LANYARD (EDUC)</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size S</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            <div>
                <h5>LANYARD (PSYCH)</h5>
                <img src="" alt=""> <!--- Image nung product  -->
                <p>Size S</p>
                <p>Description</p>
                <button name="notlogin">Add to Cart</button> 
            </div>
            </form>
        </div>
    </body>
</html>
<?php
}

?>
<?php
if(isset($_POST['cartPMS'])) {
    if(!empty($_POST['quantityPMS'])) {
        
        $cartpoloMSinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Male' && productSize = 'Small' ";
        $cartpoloMSQueryinserted = mysqli_query($conn, $cartpoloMSinserted);
        $cartrowStockMSinserted = mysqli_fetch_assoc($cartpoloMSQueryinserted);
        
        $poloMSinserted = $cartrowStockMSinserted['inserted'];
        if($poloMSinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
            $poloMSQuantity = $_POST['quantityPMS'];
            $editPSMQ = "UPDATE quantitytbl SET productQuantity = $poloMSQuantity WHERE id = '1'";
            mysqli_query($conn, $editPSMQ);

            $totalPriceMS = '0';
            $cartpoloMSP = "SELECT productPrice FROM admintbl WHERE id='1'";
            $cartpoloMSPq = mysqli_query($conn, $cartpoloMSP);
            $cartrowStockMSSP = mysqli_fetch_assoc($cartpoloMSPq);

            $cartpoloMSPrice = $cartrowStockMSSP["productPrice"];

            $cartpoloMSQ = "SELECT productQuantity FROM quantitytbl WHERE id='1'";
            $cartpoloMSq = mysqli_query($conn, $cartpoloMSQ);
            $cartrowStockMMSQ = mysqli_fetch_assoc($cartpoloMSq);

            $cartpoloMSQuantity = $cartrowStockMMSQ["productQuantity"];
            $totalPriceMS = $totalPriceMS + ($cartpoloMSPrice * $cartpoloMSQuantity);

            $poloMMQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Polo Male', 'Small', $cartpoloMSPrice , $cartpoloMSQuantity, $totalPriceMS)";
            mysqli_query($conn, $poloMMQ);
            $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Polo Male' && productSize = 'Small'";
            mysqli_query($conn, $updateinsert);
        }
    }
    
}

if(isset($_POST['cartPMM'])) {
    

    if(!empty($_POST['quantityPMM'])) {

        $cartpoloMMinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Male' && productSize = 'Medium' ";
        $cartpoloMMQueryinserted = mysqli_query($conn, $cartpoloMMinserted);
        $cartrowStockMMinserted = mysqli_fetch_assoc($cartpoloMMQueryinserted);
        
        $poloMMinserted = $cartrowStockMMinserted['inserted'];
        if($poloMMinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
            $poloMMQuantity = $_POST['quantityPMM'];
            $editPMMQ = "UPDATE quantitytbl SET productQuantity = $poloMMQuantity WHERE id = '2'";
            mysqli_query($conn, $editPMMQ);

            $totalPriceMM = '0';
            $cartpoloMMP = "SELECT productPrice FROM admintbl WHERE id='2'";
            $cartpoloMMPq = mysqli_query($conn, $cartpoloMMP);
            $cartrowStockMMSP = mysqli_fetch_assoc($cartpoloMMPq);

            $cartpoloMMPrice = $cartrowStockMMSP["productPrice"];

            $cartpoloMMQ = "SELECT productQuantity FROM quantitytbl WHERE id='2'";
            $cartpoloMMq = mysqli_query($conn, $cartpoloMMQ);
            $cartrowStockMMSQ = mysqli_fetch_assoc($cartpoloMMq);

            $cartpoloMMQuantity = $cartrowStockMMSQ["productQuantity"];
            $totalPriceMM = $totalPriceMM + ($cartpoloMMPrice * $cartpoloMMQuantity);
            $poloMMQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Polo Male', 'Medium', $cartpoloMMPrice , $cartpoloMMQuantity, $totalPriceMM)";
            mysqli_query($conn, $poloMMQ);
            $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Polo Male' && productSize = 'Medium'";
            mysqli_query($conn, $updateinsert);
        }
    }
    
}

if(isset($_POST['cartPML'])) {
    if(!empty($_POST['quantityPML'])) {

        $cartpoloMLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Male' && productSize = 'Large' ";
        $cartpoloMLQueryinserted = mysqli_query($conn, $cartpoloMLinserted);
        $cartrowStockMLinserted = mysqli_fetch_assoc($cartpoloMLQueryinserted);

        $poloMLinserted = $cartrowStockMLinserted['inserted'];
        if($poloMLinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $poloMLQuantity = $_POST['quantityPML'];
        $editPLMQ = "UPDATE quantitytbl SET productQuantity = $poloMLQuantity WHERE id = '3'";
        mysqli_query($conn, $editPLMQ);

        $totalPriceML = '0';
        $cartpoloMLP = "SELECT productPrice FROM admintbl WHERE id='3'";
        $cartpoloMLPq = mysqli_query($conn, $cartpoloMLP);
        $cartrowStockMLSP = mysqli_fetch_assoc($cartpoloMLPq);

        $cartpoloMLPrice = $cartrowStockMLSP["productPrice"];

        $cartpoloMLQ = "SELECT productQuantity FROM quantitytbl WHERE id='3'";
        $cartpoloMLq = mysqli_query($conn, $cartpoloMLQ);
        $cartrowStockMLSQ = mysqli_fetch_assoc($cartpoloMLq);

        $cartpoloMLQuantity = $cartrowStockMLSQ["productQuantity"];
        $totalPriceML = $totalPriceML + ($cartpoloMLPrice * $cartpoloMLQuantity);
        $poloMLQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Polo Male', 'Large', $cartpoloMLPrice , $cartpoloMLQuantity, $totalPriceML)";
        mysqli_query($conn, $poloMLQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Polo Male' && productSize = 'Large'";
        mysqli_query($conn, $updateinsert);
        
        
    }
    
}
}
if(isset($_POST['cartPMXL'])) {
    if(!empty($_POST['quantityPMXL'])) {
        $cartpoloMXLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Male' && productSize = 'XL' ";
        $cartpoloMXLQueryinserted = mysqli_query($conn, $cartpoloMXLinserted);
        $cartrowStockMXLinserted = mysqli_fetch_assoc($cartpoloMXLQueryinserted);

        $poloMXLinserted = $cartrowStockMXLinserted['inserted'];
        if($poloMXLinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $poloMXLQuantity = $_POST['quantityPMXL'];
        $editPXLMQ = "UPDATE quantitytbl SET productQuantity = $poloMXLQuantity WHERE id = '4'";
        mysqli_query($conn, $editPXLMQ);

        $totalPriceMXL = '0';
        $cartpoloMXLP = "SELECT productPrice FROM admintbl WHERE id='4'";
        $cartpoloMXLPq = mysqli_query($conn, $cartpoloMXLP);
        $cartrowStockMXLSP = mysqli_fetch_assoc($cartpoloMXLPq);
        $cartpoloMXLPrice = $cartrowStockMXLSP["productPrice"];

        $cartpoloMXLQ = "SELECT productQuantity FROM quantitytbl WHERE id='4'";
        $cartpoloMXLq = mysqli_query($conn, $cartpoloMXLQ);
        $cartrowStockMXLSQ = mysqli_fetch_assoc($cartpoloMXLq);

        $cartpoloMXLQuantity = $cartrowStockMXLSQ["productQuantity"];
        $totalPriceMXL = $totalPriceMXL + ($cartpoloMXLPrice * $cartpoloMXLQuantity);
        $poloMXLQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Polo Male', 'XL', $cartpoloMXLPrice , $cartpoloMXLQuantity, $totalPriceMXL)";
        mysqli_query($conn, $poloMXLQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Polo Male' && productSize = 'XL'";
        mysqli_query($conn, $updateinsert);
    }
}
}
if(isset($_POST['cartPM2XL'])) {
    if(!empty($_POST['quantityPM2XL'])) {

        $cartpoloM2XLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Male' && productSize = '2XL' ";
        $cartpoloM2XLQueryinserted = mysqli_query($conn, $cartpoloM2XLinserted);
        $cartrowStockM2XLinserted = mysqli_fetch_assoc($cartpoloM2XLQueryinserted);

        $poloM2XLinserted = $cartrowStockM2XLinserted['inserted'];
        if($poloM2XLinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $poloM2XLQuantity = $_POST['quantityPM2XL'];
        $editP2XLMQ = "UPDATE quantitytbl SET productQuantity = $poloM2XLQuantity WHERE id = '5'";
        mysqli_query($conn, $editP2XLMQ);

        $totalPriceM2XL = '0';
        $cartpoloM2XLP = "SELECT productPrice FROM admintbl WHERE id='5'";
        $cartpoloM2XLPq = mysqli_query($conn, $cartpoloM2XLP);
        $cartrowStockM2XLSP = mysqli_fetch_assoc($cartpoloM2XLPq);
        $cartpoloM2XLPrice = $cartrowStockM2XLSP["productPrice"];

        $cartpoloM2XLQ = "SELECT productQuantity FROM quantitytbl WHERE id='5'";
        $cartpoloM2XLq = mysqli_query($conn, $cartpoloM2XLQ);
        $cartrowStockM2XLSQ = mysqli_fetch_assoc($cartpoloM2XLq);

        $cartpoloM2XLQuantity = $cartrowStockM2XLSQ["productQuantity"];
        $totalPriceM2XL = $totalPriceM2XL + ($cartpoloM2XLPrice * $cartpoloM2XLQuantity);
        $poloM2XLQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Polo Male', '2XL', $cartpoloM2XLPrice , $cartpoloM2XLQuantity, $totalPriceM2XL)";
        mysqli_query($conn, $poloM2XLQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Polo Male' && productSize = '2XL'";
        mysqli_query($conn, $updateinsert);
    }
}
}
//POLO FEMALE
if(isset($_POST['cartpoloFXS'])) {
    if(!empty($_POST['quantityPoloFXS'])) {
        $cartpoloFXSinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Female' && productSize = 'Extra Small' ";
        $cartpoloFXSQueryinserted = mysqli_query($conn, $cartpoloFXSinserted);
        $cartrowStockFXSinserted = mysqli_fetch_assoc($cartpoloFXSQueryinserted);

        $poloFXSinserted = $cartrowStockFXSinserted['inserted'];
        if($poloFXSinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $poloFXSQuantity = $_POST['quantityPoloFXS'];
        $editPXSFQ = "UPDATE quantitytbl SET productQuantity = $poloFXSQuantity WHERE id = '6'";
        mysqli_query($conn, $editPXSFQ);

        $totalPriceFXS = '0';
        $cartpoloFXSP = "SELECT productPrice FROM admintbl WHERE id='6'";
        $cartpoloFXSPq = mysqli_query($conn, $cartpoloFXSP);
        $cartrowStockFXSSP = mysqli_fetch_assoc($cartpoloFXSPq);
        $cartpoloFXSPrice = $cartrowStockFXSSP["productPrice"];

        $cartpoloFXSQ = "SELECT productQuantity FROM quantitytbl WHERE id='6'";
        $cartpoloFXSq = mysqli_query($conn, $cartpoloFXSQ);
        $cartrowStockFXSQ = mysqli_fetch_assoc($cartpoloFXSq);

        $cartpoloFXSQuantity = $cartrowStockFXSQ["productQuantity"];
        $totalPriceFXS = $totalPriceFXS + ($cartpoloFXSPrice * $cartpoloFXSQuantity);
        $poloFXSQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Polo Female', 'Extra Small', $cartpoloFXSPrice , $cartpoloFXSQuantity, $totalPriceFXS)";
        mysqli_query($conn, $poloFXSQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Polo Female' && productSize = 'Extra Small'";
        mysqli_query($conn, $updateinsert);
    }
}
}
if(isset($_POST['cartpoloFS'])) {
    if(!empty($_POST['quantityPoloFS'])) {
        $cartpoloFSinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Female' && productSize = 'Small' ";
        $cartpoloFSQueryinserted = mysqli_query($conn, $cartpoloFSinserted);
        $cartrowStockFSinserted = mysqli_fetch_assoc($cartpoloFSQueryinserted);

        $poloFSinserted = $cartrowStockFSinserted['inserted'];
        if($poloFSinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {

        $poloFSQuantity = $_POST['quantityPoloFS'];
        $editPSFQ = "UPDATE quantitytbl SET productQuantity = $poloFSQuantity WHERE id = '7'";
        mysqli_query($conn, $editPSFQ);

        $totalPriceFS = '0';
        $cartpoloFSP = "SELECT productPrice FROM admintbl WHERE id='7'";
        $cartpoloFSPq = mysqli_query($conn, $cartpoloFSP);
        $cartrowStockFSSP = mysqli_fetch_assoc($cartpoloFSPq);
        $cartpoloFSPrice = $cartrowStockFSSP["productPrice"];

        $cartpoloFSQ = "SELECT productQuantity FROM quantitytbl WHERE id='7'";
        $cartpoloFSq = mysqli_query($conn, $cartpoloFSQ);
        $cartrowStockFSQ = mysqli_fetch_assoc($cartpoloFSq);

        $cartpoloFSQuantity = $cartrowStockFSQ["productQuantity"];
        $totalPriceFS = $totalPriceFS + ($cartpoloFSPrice * $cartpoloFSQuantity);
        $poloFSQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Polo Female', 'Small', $cartpoloFSPrice , $cartpoloFSQuantity, $totalPriceFS)";
        mysqli_query($conn, $poloFSQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Polo Female' && productSize = 'Small'";
        mysqli_query($conn, $updateinsert);
    }
}
}
if(isset($_POST['cartpoloFM'])) {
    if(!empty($_POST['quantityPoloFM'])) {
        $cartpoloFMinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Female' && productSize = 'Medium' ";
        $cartpoloFMQueryinserted = mysqli_query($conn, $cartpoloFMinserted);
        $cartrowStockFMinserted = mysqli_fetch_assoc($cartpoloFMQueryinserted);

        $poloFMinserted = $cartrowStockFMinserted['inserted'];
        if($poloFMinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {

        $poloFMQuantity = $_POST['quantityPoloFM'];
        $editPMFQ = "UPDATE quantitytbl SET productQuantity = $poloFMQuantity WHERE id = '8'";
        mysqli_query($conn, $editPMFQ);

        $totalPriceFM = '0';
        $cartpoloFMP = "SELECT productPrice FROM admintbl WHERE id='8'";
        $cartpoloFMPq = mysqli_query($conn, $cartpoloFMP);
        $cartrowStockFMSP = mysqli_fetch_assoc($cartpoloFMPq);
        $cartpoloFMPrice = $cartrowStockFMSP["productPrice"];

        $cartpoloFMQ = "SELECT productQuantity FROM quantitytbl WHERE id='8'";
        $cartpoloFMq = mysqli_query($conn, $cartpoloFMQ);
        $cartrowStockFMQ = mysqli_fetch_assoc($cartpoloFMq);

        $cartpoloFMQuantity = $cartrowStockFMQ["productQuantity"];
        $totalPriceFM = $totalPriceFM + ($cartpoloFMPrice * $cartpoloFMQuantity);
        $poloFMQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Polo Female', 'Medium', $cartpoloFMPrice , $cartpoloFMQuantity, $totalPriceFM)";
        mysqli_query($conn, $poloFMQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Polo Female' && productSize = 'Medium'";
        mysqli_query($conn, $updateinsert);

    }
}
}
if(isset($_POST['cartpoloFL'])) {
    if(!empty($_POST['quantityPoloFL'])) {
        $cartpoloFLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Female' && productSize = 'Large' ";
        $cartpoloFLQueryinserted = mysqli_query($conn, $cartpoloFLinserted);
        $cartrowStockFLinserted = mysqli_fetch_assoc($cartpoloFLQueryinserted);

        $poloFLinserted = $cartrowStockFLinserted['inserted'];
        if($poloFLinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {


        $poloFLQuantity = $_POST['quantityPoloFL'];
        $editPLMQ = "UPDATE quantitytbl SET productQuantity = $poloFLQuantity WHERE id = '9'";
        mysqli_query($conn, $editPLMQ);

        $totalPriceFL = '0';
        $cartpoloFLP = "SELECT productPrice FROM admintbl WHERE id='9'";
        $cartpoloFLPq = mysqli_query($conn, $cartpoloFLP);
        $cartrowStockFLSP = mysqli_fetch_assoc($cartpoloFLPq);
        $cartpoloFLPrice = $cartrowStockFLSP["productPrice"];

        $cartpoloFLQ = "SELECT productQuantity FROM quantitytbl WHERE id='9'";
        $cartpoloFLq = mysqli_query($conn, $cartpoloFLQ);
        $cartrowStockFLQ = mysqli_fetch_assoc($cartpoloFLq);

        $cartpoloFLQuantity = $cartrowStockFLQ["productQuantity"];
        $totalPriceFL = $totalPriceFL + ($cartpoloFLPrice * $cartpoloFLQuantity);
        $poloFLQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Polo Female', 'Large', $cartpoloFLPrice , $cartpoloFLQuantity, $totalPriceFL)";
        mysqli_query($conn, $poloFLQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Polo Female' && productSize = 'Large'";
        mysqli_query($conn, $updateinsert);
    }
}
}
if(isset($_POST['cartpoloFXL'])) {
    if(!empty($_POST['quantityPoloFXL'])) {
        $cartpoloFXLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Female' && productSize = 'XL' ";
        $cartpoloFXLQueryinserted = mysqli_query($conn, $cartpoloFXLinserted);
        $cartrowStockFXLinserted = mysqli_fetch_assoc($cartpoloFXLQueryinserted);

        $poloFXLinserted = $cartrowStockFXLinserted['inserted'];
        if($poloFXLinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {

        $poloFXLQuantity = $_POST['quantityPoloFXL'];
        $editPXLFQ = "UPDATE quantitytbl SET productQuantity = $poloFXLQuantity WHERE id = '10'";
        mysqli_query($conn, $editPXLFQ);

        $totalPriceFXL = '0';
        $cartpoloFXLP = "SELECT productPrice FROM admintbl WHERE id='10'";
        $cartpoloFXLPq = mysqli_query($conn, $cartpoloFXLP);
        $cartrowStockFXLSP = mysqli_fetch_assoc($cartpoloFXLPq);
        $cartpoloFXLPrice = $cartrowStockFXLSP["productPrice"];

        $cartpoloFXLQ = "SELECT productQuantity FROM quantitytbl WHERE id='10'";
        $cartpoloFXLq = mysqli_query($conn, $cartpoloFXLQ);
        $cartrowStockFXLQ = mysqli_fetch_assoc($cartpoloFXLq);

        $cartpoloFXLQuantity = $cartrowStockFXLQ["productQuantity"];
        $totalPriceFXL = $totalPriceFXL + ($cartpoloFXLPrice * $cartpoloFXLQuantity);
        $poloFXLQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Polo Female', 'XL', $cartpoloFXLPrice , $cartpoloFXLQuantity, $totalPriceFXL)";
        mysqli_query($conn, $poloFXLQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Polo Female' && productSize = 'XL'";
        mysqli_query($conn, $updateinsert);
    }
}
}
if(isset($_POST['cartpoloF2XL'])) {
    if(!empty($_POST['quantityPoloF2XL'])) {
        $cartpoloF2XLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Polo Female' && productSize = '2XL' ";
        $cartpoloF2XLQueryinserted = mysqli_query($conn, $cartpoloF2XLinserted);
        $cartrowStockF2XLinserted = mysqli_fetch_assoc($cartpoloF2XLQueryinserted);

        $poloF2XLinserted = $cartrowStockF2XLinserted['inserted'];
        if($poloF2XLinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $poloF2XLQuantity = $_POST['quantityPoloF2XL'];
        $editP2XLFQ = "UPDATE quantitytbl SET productQuantity = $poloF2XLQuantity WHERE id = '11'";
        mysqli_query($conn, $editP2XLFQ);

        $totalPriceF2XL = '0';
        $cartpoloF2XLP = "SELECT productPrice FROM admintbl WHERE id='11'";
        $cartpoloF2XLPq = mysqli_query($conn, $cartpoloF2XLP);
        $cartrowStockF2XLSP = mysqli_fetch_assoc($cartpoloF2XLPq);
        $cartpoloF2XLPrice = $cartrowStockF2XLSP["productPrice"];

        $cartpoloF2XLQ = "SELECT productQuantity FROM quantitytbl WHERE id='11'";
        $cartpoloF2XLq = mysqli_query($conn, $cartpoloF2XLQ);
        $cartrowStockF2XLQ = mysqli_fetch_assoc($cartpoloF2XLq);

        $cartpoloF2XLQuantity = $cartrowStockF2XLQ["productQuantity"];
        $totalPriceF2XL = $totalPriceF2XL + ($cartpoloF2XLPrice * $cartpoloF2XLQuantity);
        $poloF2XLQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Polo Female', '2XL', $cartpoloF2XLPrice , $cartpoloF2XLQuantity, $totalPriceF2XL)";
        mysqli_query($conn, $poloF2XLQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Polo Female' && productSize = '2XL'";
        mysqli_query($conn, $updateinsert);
    }
}
}
//PANTS MALE
if(isset($_POST['cartPantsMS'])) {
    if(!empty($_POST['quantityPantsMS'])) {
        
        $cartpantsMSinserted = "SELECT * FROM quantitytbl WHERE productName = 'Pants Male' && productSize = 'Small' ";
        $cartpantsMSQueryinserted = mysqli_query($conn, $cartpantsMSinserted);
        $cartrowStockMSinserted = mysqli_fetch_assoc($cartpantsMSQueryinserted);
        
        $pantsMSinserted = $cartrowStockMSinserted['inserted'];
        if($pantsMSinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
            $pantsMSQuantity = $_POST['quantityPantsMS'];
            $editPASMQ = "UPDATE quantitytbl SET productQuantity = $pantsMSQuantity WHERE id = '12'";
            mysqli_query($conn, $editPASMQ);

            $totalPriceMS = '0';
            $cartpantsMSP = "SELECT productPrice FROM admintbl WHERE id='12'";
            $cartpantsMSPq = mysqli_query($conn, $cartpantsMSP);
            $cartrowStockMSSP = mysqli_fetch_assoc($cartpantsMSPq);

            $cartpantsMSPrice = $cartrowStockMSSP["productPrice"];

            $cartpantsMSQ = "SELECT productQuantity FROM quantitytbl WHERE id='12'";
            $cartpantsMSq = mysqli_query($conn, $cartpantsMSQ);
            $cartrowStockMMSQ = mysqli_fetch_assoc($cartpantsMSq);

            $cartpantsMSQuantity = $cartrowStockMMSQ["productQuantity"];
            $totalPriceMS = $totalPriceMS + ($cartpantsMSPrice * $cartpantsMSQuantity);

            $pantsMSQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Pants Male', 'Small', $cartpantsMSPrice , $cartpantsMSQuantity, $totalPriceMS)";
            mysqli_query($conn, $pantsMSQ);
            $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Pants Male' && productSize = 'Small'";
            mysqli_query($conn, $updateinsert);
        }
    }
    }

if(isset($_POST['cartPantsMM'])) {
    if(!empty($_POST['quantityPantsMM'])) {
        $cartpantsMMinserted = "SELECT * FROM quantitytbl WHERE productName = 'Pants Male' && productSize = 'Medium' ";
        $cartpantsMMQueryinserted = mysqli_query($conn, $cartpantsMMinserted);
        $cartrowStockMMinserted = mysqli_fetch_assoc($cartpantsMMQueryinserted);
        
        $pantsMMinserted = $cartrowStockMMinserted['inserted'];
        if($pantsMMinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $pantsMMQuantity = $_POST['quantityPantsMM'];
        $editPAMMQ = "UPDATE quantitytbl SET productQuantity = $pantsMMQuantity WHERE id = '13'";
        mysqli_query($conn, $editPAMMQ);
        
        $totalPriceMM = '0';
        $cartpantsMMP = "SELECT productPrice FROM admintbl WHERE id='13'";
        $cartpantsMMPq = mysqli_query($conn, $cartpantsMMP);
        $cartrowStockMMSP = mysqli_fetch_assoc($cartpantsMMPq);

        $cartpantsMMPrice = $cartrowStockMMSP["productPrice"];

        $cartpantsMMQ = "SELECT productQuantity FROM quantitytbl WHERE id='13'";
        $cartpantsMMq = mysqli_query($conn, $cartpantsMMQ);
        $cartrowStockMMMQ = mysqli_fetch_assoc($cartpantsMMq);

        $cartpantsMMQuantity = $cartrowStockMMMQ["productQuantity"];
        $totalPriceMM = $totalPriceMM + ($cartpantsMMPrice * $cartpantsMMQuantity);

        $pantsMMQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Pants Male', 'Medium', $cartpantsMMPrice , $cartpantsMMQuantity, $totalPriceMM)";
        mysqli_query($conn, $pantsMMQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Pants Male' && productSize = 'Medium'";
        mysqli_query($conn, $updateinsert);
    }
}
}
if(isset($_POST['cartPantsML'])) {
    if(!empty($_POST['quantityPantsML'])) {
        $cartpantsMLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Pants Male' && productSize = 'Large' ";
        $cartpantsMLQueryinserted = mysqli_query($conn, $cartpantsMLinserted);
        $cartrowStockMLinserted = mysqli_fetch_assoc($cartpantsMLQueryinserted);
        
        $pantsMLinserted = $cartrowStockMLinserted['inserted'];
        if($pantsMLinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {

        $pantsMLQuantity = $_POST['quantityPantsML'];
        $editPALMQ = "UPDATE quantitytbl SET productQuantity = $pantsMLQuantity WHERE id = '14'";
        mysqli_query($conn, $editPALMQ);

        $totalPriceML = '0';
        $cartpantsMLP = "SELECT productPrice FROM admintbl WHERE id='14'";
        $cartpantsMLPq = mysqli_query($conn, $cartpantsMLP);
        $cartrowStockMLSP = mysqli_fetch_assoc($cartpantsMLPq);

        $cartpantsMLPrice = $cartrowStockMLSP["productPrice"];

        $cartpantsMLQ = "SELECT productQuantity FROM quantitytbl WHERE id='14'";
        $cartpantsMLq = mysqli_query($conn, $cartpantsMLQ);
        $cartrowStockMLMQ = mysqli_fetch_assoc($cartpantsMLq);

        $cartpantsMLQuantity = $cartrowStockMLMQ["productQuantity"];
        $totalPriceML = $totalPriceML + ($cartpantsMLPrice * $cartpantsMLQuantity);

        $pantsMLQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Pants Male', 'Large', $cartpantsMLPrice , $cartpantsMLQuantity, $totalPriceML)";
        mysqli_query($conn, $pantsMLQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Pants Male' && productSize = 'Large'";
        mysqli_query($conn, $updateinsert);
    }
}
}
if(isset($_POST['cartPantsMXL'])) {
    if(!empty($_POST['quantityPantsMXL'])) {
        $cartpantsMXLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Pants Male' && productSize = 'XL' ";
        $cartpantsMXLQueryinserted = mysqli_query($conn, $cartpantsMXLinserted);
        $cartrowStockMXLinserted = mysqli_fetch_assoc($cartpantsMXLQueryinserted);
        
        $pantsMXLinserted = $cartrowStockMXLinserted['inserted'];
        if($pantsMXLinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {

        $pantsMXLQuantity = $_POST['quantityPantsMXL'];
        $editPAXLMQ = "UPDATE quantitytbl SET productQuantity = $pantsMXLQuantity WHERE id = '15'";
        mysqli_query($conn, $editPAXLMQ);

        $totalPriceMXL = '0';
        $cartpantsMXLP = "SELECT productPrice FROM admintbl WHERE id='15'";
        $cartpantsMXLPq = mysqli_query($conn, $cartpantsMXLP);
        $cartrowStockMXLSP = mysqli_fetch_assoc($cartpantsMXLPq);

        $cartpantsMXLPrice = $cartrowStockMXLSP["productPrice"];

        $cartpantsMXLQ = "SELECT productQuantity FROM quantitytbl WHERE id='15'";
        $cartpantsMXLq = mysqli_query($conn, $cartpantsMXLQ);
        $cartrowStockMXLMQ = mysqli_fetch_assoc($cartpantsMXLq);

        $cartpantsMXLQuantity = $cartrowStockMXLMQ["productQuantity"];
        $totalPriceMXL = $totalPriceMXL + ($cartpantsMXLPrice * $cartpantsMXLQuantity);

        $pantsMXLQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Pants Male', 'XL', $cartpantsMXLPrice , $cartpantsMXLQuantity, $totalPriceMXL)";
        mysqli_query($conn, $pantsMXLQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Pants Male' && productSize = 'XL'";
        mysqli_query($conn, $updateinsert);
    }
    }
    
}
if(isset($_POST['cartPantsM2XL'])) {
    if(!empty($_POST['quantityPantsM2XL'])) {

        $cartpantsM2XLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Pants Male' && productSize = '2XL' ";
        $cartpantsM2XLQueryinserted = mysqli_query($conn, $cartpantsM2XLinserted);
        $cartrowStockM2XLinserted = mysqli_fetch_assoc($cartpantsM2XLQueryinserted);
        
        $pantsM2XLinserted = $cartrowStockM2XLinserted['inserted'];
        if($pantsM2XLinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {

        $pantsM2XLQuantity = $_POST['quantityPantsM2XL'];
        $editPA2XLMQ = "UPDATE quantitytbl SET productQuantity = $pantsM2XLQuantity WHERE id = '16'";
        mysqli_query($conn, $editPA2XLMQ);

        $totalPriceM2XL = '0';
        $cartpantsM2XLP = "SELECT productPrice FROM admintbl WHERE id='16'";
        $cartpantsM2XLPq = mysqli_query($conn, $cartpantsM2XLP);
        $cartrowStockM2XLSP = mysqli_fetch_assoc($cartpantsM2XLPq);

        $cartpantsM2XLPrice = $cartrowStockM2XLSP["productPrice"];

        $cartpantsM2XLQ = "SELECT productQuantity FROM quantitytbl WHERE id='16'";
        $cartpantsM2XLq = mysqli_query($conn, $cartpantsM2XLQ);
        $cartrowStockM2XLMQ = mysqli_fetch_assoc($cartpantsM2XLq);

        $cartpantsM2XLQuantity = $cartrowStockM2XLMQ["productQuantity"];
        $totalPriceM2XL = $totalPriceM2XL + ($cartpantsM2XLPrice * $cartpantsM2XLQuantity);

        $pantsM2XLQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Pants Male', '2XL', $cartpantsM2XLPrice , $cartpantsM2XLQuantity, $totalPriceM2XL)";
        mysqli_query($conn, $pantsM2XLQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Pants Male' && productSize = '2XL'";
        mysqli_query($conn, $updateinsert);
    }
        
    }
    
}
//SLACKS FEMALE
if(isset($_POST['cartslacksFXS'])) {
    if(!empty($_POST['quantitySlacksXS'])) {
    
        $cartslacksFXSinserted = "SELECT * FROM quantitytbl WHERE productName = 'Slacks Female' && productSize = 'Extra Small' ";
        $cartslacksFXSQueryinserted = mysqli_query($conn, $cartslacksFXSinserted);
        $cartrowStockFXSinserted = mysqli_fetch_assoc($cartslacksFXSQueryinserted);

        $slacksFXSinserted = $cartrowStockFXSinserted['inserted'];
        if($slacksFXSinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $slacksFXSQuantity = $_POST['quantitySlacksXS'];
        $editSXSFQ = "UPDATE quantitytbl SET productQuantity = $slacksFXSQuantity WHERE id = '17'";
        mysqli_query($conn, $editSXSFQ);

        $totalPriceFXS = '0';
        $cartslacksFXSP = "SELECT productPrice FROM admintbl WHERE id='17'";
        $cartslacksFXSPq = mysqli_query($conn, $cartslacksFXSP);
        $cartrowStockFXSSP = mysqli_fetch_assoc($cartslacksFXSPq);
        $cartslacksFXSPrice = $cartrowStockFXSSP["productPrice"];

        $cartslacksFXSQ = "SELECT productQuantity FROM quantitytbl WHERE id='17'";
        $cartslacksFXSq = mysqli_query($conn, $cartslacksFXSQ);
        $cartrowStockFXSQ = mysqli_fetch_assoc($cartslacksFXSq);

        $cartslacksFXSQuantity = $cartrowStockFXSQ["productQuantity"];
        $totalPriceFXS = $totalPriceFXS + ($cartslacksFXSPrice * $cartslacksFXSQuantity);
        $slacksFXSQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Slacks Female', 'Extra Small', $cartslacksFXSPrice , $cartslacksFXSQuantity, $totalPriceFXS)";
        mysqli_query($conn, $slacksFXSQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Slacks Female' && productSize = 'Extra Small'";
        mysqli_query($conn, $updateinsert);
    }
        

    }
    
}
if(isset($_POST['cartslacksFS'])) {
    if(!empty($_POST['quantitySlacksS'])) {

        $cartslacksFSinserted = "SELECT * FROM quantitytbl WHERE productName = 'Slacks Female' && productSize = 'Small' ";
        $cartslacksFSQueryinserted = mysqli_query($conn, $cartslacksFSinserted);
        $cartrowStockFSinserted = mysqli_fetch_assoc($cartslacksFSQueryinserted);

        $slacksFSinserted = $cartrowStockFSinserted['inserted'];
        if($slacksFSinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        
        $slacksFSQuantity = $_POST['quantitySlacksS'];
        $editSSFQ = "UPDATE quantitytbl SET productQuantity = $slacksFSQuantity WHERE id = '18'";
        mysqli_query($conn, $editSSFQ);

        $totalPriceFS = '0';
        $cartslacksFSP = "SELECT productPrice FROM admintbl WHERE id='18'";
        $cartslacksFSPq = mysqli_query($conn, $cartslacksFSP);
        $cartrowStockFSSP = mysqli_fetch_assoc($cartslacksFSPq);
        $cartslacksFSPrice = $cartrowStockFSSP["productPrice"];

        $cartslacksFSQ = "SELECT productQuantity FROM quantitytbl WHERE id='18'";
        $cartslacksFSq = mysqli_query($conn, $cartslacksFSQ);
        $cartrowStockFSQ = mysqli_fetch_assoc($cartslacksFSq);

        $cartslacksFSQuantity = $cartrowStockFSQ["productQuantity"];
        $totalPriceFS = $totalPriceFS + ($cartslacksFSPrice * $cartslacksFSQuantity);
        $slacksFSQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Slacks Female', 'Small', $cartslacksFSPrice , $cartslacksFSQuantity, $totalPriceFS)";
        mysqli_query($conn, $slacksFSQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Slacks Female' && productSize = 'Small'";
        mysqli_query($conn, $updateinsert);
    }

    }
    
}
if(isset($_POST['cartslacksFM'])) {
    if(!empty($_POST['quantitySlacksM'])) {

        
        $cartslacksFMinserted = "SELECT * FROM quantitytbl WHERE productName = 'Slacks Female' && productSize = 'Medium' ";
        $cartslacksFMQueryinserted = mysqli_query($conn, $cartslacksFMinserted);
        $cartrowStockFMinserted = mysqli_fetch_assoc($cartslacksFMQueryinserted);

        $slacksFMinserted = $cartrowStockFMinserted['inserted'];
        if($slacksFMinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        
       
        $slacksFMQuantity = $_POST['quantitySlacksM'];
        $editSMFQ = "UPDATE quantitytbl SET productQuantity = $slacksFMQuantity WHERE id = '19'";
        mysqli_query($conn, $editSMFQ); 

        $totalPriceFM = '0';
        $cartslacksFMP = "SELECT productPrice FROM admintbl WHERE id='19'";
        $cartslacksFMPq = mysqli_query($conn, $cartslacksFMP);
        $cartrowStockFMSP = mysqli_fetch_assoc($cartslacksFMPq);
        $cartslacksFMPrice = $cartrowStockFMSP["productPrice"];

        $cartslacksFMQ = "SELECT productQuantity FROM quantitytbl WHERE id='19'";
        $cartslacksFMq = mysqli_query($conn, $cartslacksFMQ);
        $cartrowStockFMQ = mysqli_fetch_assoc($cartslacksFMq);

        $cartslacksFMQuantity = $cartrowStockFMQ["productQuantity"];
        $totalPriceFM = $totalPriceFM + ($cartslacksFMPrice * $cartslacksFMQuantity);
        $slacksFMQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Slacks Female', 'Medium', $cartslacksFMPrice , $cartslacksFMQuantity, $totalPriceFM)";
        mysqli_query($conn, $slacksFMQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Slacks Female' && productSize = 'Medium'";
        mysqli_query($conn, $updateinsert);
    }

    }
    
}
if(isset($_POST['cartslacksFL'])) {
    if(!empty($_POST['quantitySlacksL'])) {
        $cartslacksFLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Slacks Female' && productSize = 'Large' ";
        $cartslacksFLQueryinserted = mysqli_query($conn, $cartslacksFLinserted);
        $cartrowStockFLinserted = mysqli_fetch_assoc($cartslacksFLQueryinserted);

        $slacksFLinserted = $cartrowStockFLinserted['inserted'];
        if($slacksFLinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        
    
        $slacksFLQuantity = $_POST['quantitySlacksL'];
        $editSLMQ = "UPDATE quantitytbl SET productQuantity = $slacksFLQuantity WHERE id = '20'";
        mysqli_query($conn, $editSLMQ); 

        $totalPriceFL = '0';
        $cartslacksFLP = "SELECT productPrice FROM admintbl WHERE id='20'";
        $cartslacksFLPq = mysqli_query($conn, $cartslacksFLP);
        $cartrowStockFLSP = mysqli_fetch_assoc($cartslacksFLPq);
        $cartslacksFLPrice = $cartrowStockFLSP["productPrice"];

        $cartslacksFLQ = "SELECT productQuantity FROM quantitytbl WHERE id='20'";
        $cartslacksFLq = mysqli_query($conn, $cartslacksFLQ);
        $cartrowStockFLQ = mysqli_fetch_assoc($cartslacksFLq);

        $cartslacksFLQuantity = $cartrowStockFLQ["productQuantity"];
        $totalPriceFL = $totalPriceFL + ($cartslacksFLPrice * $cartslacksFLQuantity);
        $slacksFLQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Slacks Female', 'Large', $cartslacksFLPrice , $cartslacksFLQuantity, $totalPriceFL)";
        mysqli_query($conn, $slacksFLQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Slacks Female' && productSize = 'Large'";
        mysqli_query($conn, $updateinsert);
    }


        
    }
    
}
if(isset($_POST['cartslacksFXL'])) {
    if(!empty($_POST['quantitySlacksXL'])) {
        

        $cartslacksFXLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Slacks Female' && productSize = 'XL' ";
        $cartslacksFXLQueryinserted = mysqli_query($conn, $cartslacksFXLinserted);
        $cartrowStockFXLinserted = mysqli_fetch_assoc($cartslacksFXLQueryinserted);

        $slacksFXLinserted = $cartrowStockFXLinserted['inserted'];
        if($slacksFXLinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $slacksFXLQuantity = $_POST['quantitySlacksXL'];
        $editSXLFQ = "UPDATE quantitytbl SET productQuantity = $slacksFXLQuantity WHERE id = '21'";
        mysqli_query($conn, $editSXLFQ);

        $totalPriceFXL = '0';
        $cartslacksFXLP = "SELECT productPrice FROM admintbl WHERE id='21'";
        $cartslacksFXLPq = mysqli_query($conn, $cartslacksFXLP);
        $cartrowStockFXLSP = mysqli_fetch_assoc($cartslacksFXLPq);
        $cartslacksFXLPrice = $cartrowStockFXLSP["productPrice"];

        $cartslacksFXLQ = "SELECT productQuantity FROM quantitytbl WHERE id='21'";
        $cartslacksFXLq = mysqli_query($conn, $cartslacksFXLQ);
        $cartrowStockFXLQ = mysqli_fetch_assoc($cartslacksFXLq);

        $cartslacksFXLQuantity = $cartrowStockFXLQ["productQuantity"];
        $totalPriceFXL = $totalPriceFXL + ($cartslacksFXLPrice * $cartslacksFXLQuantity);
        $slacksFXLQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Slacks Female', 'XL', $cartslacksFXLPrice , $cartslacksFXLQuantity, $totalPriceFXL)";
        mysqli_query($conn, $slacksFXLQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Slacks Female' && productSize = 'XL'";
        mysqli_query($conn, $updateinsert);
    }
    }
    
}
if(isset($_POST['cartslacksF2XL'])) {
    if(!empty($_POST['quantitySlacks2XL'])) {
        
        
        $cartslacksF2XLinserted = "SELECT * FROM quantitytbl WHERE productName = 'Slacks Female' && productSize = '2XL' ";
        $cartslacksF2XLQueryinserted = mysqli_query($conn, $cartslacksF2XLinserted);
        $cartrowStockF2XLinserted = mysqli_fetch_assoc($cartslacksF2XLQueryinserted);

        $slacksF2XLinserted = $cartrowStockF2XLinserted['inserted'];
        if($slacksF2XLinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $slacksF2XLQuantity = $_POST['quantitySlacks2XL'];
        $editS2XLFQ = "UPDATE quantitytbl SET productQuantity = $slacksF2XLQuantity WHERE id = '22'";
        mysqli_query($conn, $editS2XLFQ);

        $totalPriceF2XL = '0';
        $cartslacksF2XLP = "SELECT productPrice FROM admintbl WHERE id='22'";
        $cartslacksF2XLPq = mysqli_query($conn, $cartslacksF2XLP);
        $cartrowStockF2XLSP = mysqli_fetch_assoc($cartslacksF2XLPq);
        $cartslacksF2XLPrice = $cartrowStockF2XLSP["productPrice"];

        $cartslacksF2XLQ = "SELECT productQuantity FROM quantitytbl WHERE id='22'";
        $cartslacksF2XLq = mysqli_query($conn, $cartslacksF2XLQ);
        $cartrowStockF2XLQ = mysqli_fetch_assoc($cartslacksF2XLq);

        $cartslacksF2XLQuantity = $cartrowStockF2XLQ["productQuantity"];
        $totalPriceF2XL = $totalPriceF2XL + ($cartslacksF2XLPrice * $cartslacksF2XLQuantity);
        $slacksF2XLQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('Slacks Female', '2XL', $cartslacksF2XLPrice , $cartslacksF2XLQuantity, $totalPriceF2XL)";
        mysqli_query($conn, $slacksF2XLQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Slacks Female' && productSize = '2XL'";
        mysqli_query($conn, $updateinsert);
    }
    }
    
}
//PE TSHIRT
if(isset($_POST['cartpeShirtS'])) {
    if(!empty($_POST['quantityPeShirtS'])) {
        
        $cartpeShirtinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE TShirt' && productSize = 'Small' ";
        $cartpeShirtQueryinserted = mysqli_query($conn, $cartpeShirtinserted);
        $cartrowStockSinserted = mysqli_fetch_assoc($cartpeShirtQueryinserted);

        $slacksSinserted = $cartrowStockSinserted['inserted'];
        if($slacksSinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $peShirtSQuantity = $_POST['quantityPeShirtS'];
        $editPESSQ = "UPDATE quantitytbl SET productQuantity = $peShirtSQuantity WHERE id = '23'";
        mysqli_query($conn, $editPESSQ);
             

        $totalPriceS = '0';
        $cartpeShirtS = "SELECT productPrice FROM admintbl WHERE id='23'";
        $cartpeShirtSq = mysqli_query($conn, $cartpeShirtS);
        $cartrowStockSSP = mysqli_fetch_assoc($cartpeShirtSq);
        $cartpeShirtPrice = $cartrowStockSSP["productPrice"];

        $cartpeShirtSQ = "SELECT productQuantity FROM quantitytbl WHERE id='23'";
        $cartpeShirtSq = mysqli_query($conn, $cartpeShirtSQ);
        $cartrowStockSQ = mysqli_fetch_assoc($cartpeShirtSq);

        $cartpeShirtSQuantity = $cartrowStockSQ["productQuantity"];
        $totalPriceS = $totalPriceS + ($cartpeShirtPrice * $cartpeShirtSQuantity);
        $peShirtSQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('PE TShirt', 'Small', $cartpeShirtPrice , $cartpeShirtSQuantity, $totalPriceS)";
        mysqli_query($conn, $peShirtSQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'PE TShirt' && productSize = 'Small'";
        mysqli_query($conn, $updateinsert);
    }
    }
    
}
if(isset($_POST['cartpeShirtM'])) {
    if(!empty($_POST['quantityPeShirtM'])) {
        

        $cartpeShirtinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE TShirt' && productSize = 'Medium' ";
        $cartpeShirtQueryinserted = mysqli_query($conn, $cartpeShirtinserted);
        $cartrowStockSinserted = mysqli_fetch_assoc($cartpeShirtQueryinserted);

        $slacksSinserted = $cartrowStockSinserted['inserted'];
        if($slacksSinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $peShirtMQuantity = $_POST['quantityPeShirtM'];
        $editPESMQ = "UPDATE quantitytbl SET productQuantity = $peShirtMQuantity WHERE id = '24'";
        mysqli_query($conn, $editPESMQ);
             

        $totalPriceS = '0';
        $cartpeShirtS = "SELECT productPrice FROM admintbl WHERE id='24'";
        $cartpeShirtSq = mysqli_query($conn, $cartpeShirtS);
        $cartrowStockSSP = mysqli_fetch_assoc($cartpeShirtSq);
        $cartpeShirtPrice = $cartrowStockSSP["productPrice"];

        $cartpeShirtSQ = "SELECT productQuantity FROM quantitytbl WHERE id='24'";
        $cartpeShirtSq = mysqli_query($conn, $cartpeShirtSQ);
        $cartrowStockSQ = mysqli_fetch_assoc($cartpeShirtSq);

        $cartpeShirtSQuantity = $cartrowStockSQ["productQuantity"];
        $totalPriceS = $totalPriceS + ($cartpeShirtPrice * $cartpeShirtSQuantity);
        $peShirtSQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('PE TShirt', 'Medium', $cartpeShirtPrice , $cartpeShirtSQuantity, $totalPriceS)";
        mysqli_query($conn, $peShirtSQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'PE TShirt' && productSize = 'Medium'";
        mysqli_query($conn, $updateinsert);
    }
    }
    
}
if(isset($_POST['cartpeShirtL'])) {
    if(!empty($_POST['quantityPeShirtL'])) {
 

        
        $cartpeShirtinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE TShirt' && productSize = 'Large' ";
        $cartpeShirtQueryinserted = mysqli_query($conn, $cartpeShirtinserted);
        $cartrowStockSinserted = mysqli_fetch_assoc($cartpeShirtQueryinserted);

        $slacksSinserted = $cartrowStockSinserted['inserted'];
        if($slacksSinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $peShirtLQuantity = $_POST['quantityPeShirtL'];
        $editPESLQ = "UPDATE quantitytbl SET productQuantity = $peShirtLQuantity WHERE id = '25'";
        mysqli_query($conn, $editPESLQ);
             

        $totalPriceS = '0';
        $cartpeShirtS = "SELECT productPrice FROM admintbl WHERE id='25'";
        $cartpeShirtSq = mysqli_query($conn, $cartpeShirtS);
        $cartrowStockSSP = mysqli_fetch_assoc($cartpeShirtSq);
        $cartpeShirtPrice = $cartrowStockSSP["productPrice"];

        $cartpeShirtSQ = "SELECT productQuantity FROM quantitytbl WHERE id='25'";
        $cartpeShirtSq = mysqli_query($conn, $cartpeShirtSQ);
        $cartrowStockSQ = mysqli_fetch_assoc($cartpeShirtSq);

        $cartpeShirtSQuantity = $cartrowStockSQ["productQuantity"];
        $totalPriceS = $totalPriceS + ($cartpeShirtPrice * $cartpeShirtSQuantity);
        $peShirtSQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('PE TShirt', 'Large', $cartpeShirtPrice , $cartpeShirtSQuantity, $totalPriceS)";
        mysqli_query($conn, $peShirtSQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'PE TShirt' && productSize = 'Large'";
        mysqli_query($conn, $updateinsert);
    }
    }
    
}
if(isset($_POST['cartpeShirtXL'])) {
    if(!empty($_POST['quantityPeShirtXL'])) {
       

        $cartpeShirtinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE TShirt' && productSize = 'XL' ";
        $cartpeShirtQueryinserted = mysqli_query($conn, $cartpeShirtinserted);
        $cartrowStockSinserted = mysqli_fetch_assoc($cartpeShirtQueryinserted);

        $slacksSinserted = $cartrowStockSinserted['inserted'];
        if($slacksSinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $peShirtXLQuantity = $_POST['quantityPeShirtXL'];
        $editPESXLQ = "UPDATE quantitytbl SET productQuantity = $peShirtXLQuantity WHERE id = '26'";
        mysqli_query($conn, $editPESXLQ);
             

        $totalPriceS = '0';
        $cartpeShirtS = "SELECT productPrice FROM admintbl WHERE id='26'";
        $cartpeShirtSq = mysqli_query($conn, $cartpeShirtS);
        $cartrowStockSSP = mysqli_fetch_assoc($cartpeShirtSq);
        $cartpeShirtPrice = $cartrowStockSSP["productPrice"];

        $cartpeShirtSQ = "SELECT productQuantity FROM quantitytbl WHERE id='26'";
        $cartpeShirtSq = mysqli_query($conn, $cartpeShirtSQ);
        $cartrowStockSQ = mysqli_fetch_assoc($cartpeShirtSq);

        $cartpeShirtSQuantity = $cartrowStockSQ["productQuantity"];
        $totalPriceS = $totalPriceS + ($cartpeShirtPrice * $cartpeShirtSQuantity);
        $peShirtSQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('PE TShirt', 'XL', $cartpeShirtPrice , $cartpeShirtSQuantity, $totalPriceS)";
        mysqli_query($conn, $peShirtSQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'PE TShirt' && productSize = 'XL'";
        mysqli_query($conn, $updateinsert);
    }

    }
    
}
if(isset($_POST['cartpeShirt2XL'])) {
    if(!empty($_POST['quantityPeShirt2XL'])) {
        
        
        $cartpeShirtinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE TShirt' && productSize = '2XL' ";
        $cartpeShirtQueryinserted = mysqli_query($conn, $cartpeShirtinserted);
        $cartrowStockSinserted = mysqli_fetch_assoc($cartpeShirtQueryinserted);

        $slacksSinserted = $cartrowStockSinserted['inserted'];
        if($slacksSinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $peShirt2XLQuantity = $_POST['quantityPeShirt2XL'];
        $editPES2XLQ = "UPDATE quantitytbl SET productQuantity = $peShirt2XLQuantity WHERE id = '27'";
        mysqli_query($conn, $editPES2XLQ);
             

        $totalPriceS = '0';
        $cartpeShirtS = "SELECT productPrice FROM admintbl WHERE id='27'";
        $cartpeShirtSq = mysqli_query($conn, $cartpeShirtS);
        $cartrowStockSSP = mysqli_fetch_assoc($cartpeShirtSq);
        $cartpeShirtPrice = $cartrowStockSSP["productPrice"];

        $cartpeShirtSQ = "SELECT productQuantity FROM quantitytbl WHERE id='27'";
        $cartpeShirtSq = mysqli_query($conn, $cartpeShirtSQ);
        $cartrowStockSQ = mysqli_fetch_assoc($cartpeShirtSq);

        $cartpeShirtSQuantity = $cartrowStockSQ["productQuantity"];
        $totalPriceS = $totalPriceS + ($cartpeShirtPrice * $cartpeShirtSQuantity);
        $peShirtSQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('PE TShirt', '2XL', $cartpeShirtPrice , $cartpeShirtSQuantity, $totalPriceS)";
        mysqli_query($conn, $peShirtSQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'PE TShirt' && productSize = '2XL'";
        mysqli_query($conn, $updateinsert);
    }
    }
    
}
if(isset($_POST['cartpeShirt3XL'])) {
    if(!empty($_POST['quantityPeShirt3XL'])) {
        

        
        $cartpeShirtinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE TShirt' && productSize = '3XL' ";
        $cartpeShirtQueryinserted = mysqli_query($conn, $cartpeShirtinserted);
        $cartrowStockSinserted = mysqli_fetch_assoc($cartpeShirtQueryinserted);

        $slacksSinserted = $cartrowStockSinserted['inserted'];
        if($slacksSinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $peShirt3XLQuantity = $_POST['quantityPeShirt3XL'];
        $editPES3XLQ = "UPDATE quantitytbl SET productQuantity = $peShirt3XLQuantity WHERE id = '28'";
        mysqli_query($conn, $editPES3XLQ);
             

        $totalPriceS = '0';
        $cartpeShirtS = "SELECT productPrice FROM admintbl WHERE id='28'";
        $cartpeShirtSq = mysqli_query($conn, $cartpeShirtS);
        $cartrowStockSSP = mysqli_fetch_assoc($cartpeShirtSq);
        $cartpeShirtPrice = $cartrowStockSSP["productPrice"];

        $cartpeShirtSQ = "SELECT productQuantity FROM quantitytbl WHERE id='28'";
        $cartpeShirtSq = mysqli_query($conn, $cartpeShirtSQ);
        $cartrowStockSQ = mysqli_fetch_assoc($cartpeShirtSq);

        $cartpeShirtSQuantity = $cartrowStockSQ["productQuantity"];
        $totalPriceS = $totalPriceS + ($cartpeShirtPrice * $cartpeShirtSQuantity);
        $peShirtSQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('PE TShirt', '3XL', $cartpeShirtPrice , $cartpeShirtSQuantity, $totalPriceS)";
        mysqli_query($conn, $peShirtSQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'PE TShirt' && productSize = '3XL'";
        mysqli_query($conn, $updateinsert);
    }
    }
    
}
//PE JPants
if(isset($_POST['cartpeJPantsS'])) {
    if(!empty($_POST['quantityPeJPantsS'])) {
    $cartpeJPantsinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE JPants' && productSize = 'Small' ";
    $cartpeJPantsQueryinserted = mysqli_query($conn, $cartpeJPantsinserted);
    $cartrowStockSinserted = mysqli_fetch_assoc($cartpeJPantsQueryinserted);

    $peJPantsinserted = $cartrowStockSinserted['inserted'];
    if($peJPantsinserted == 'true') {
        echo '<script>alert("Item have already been placed.")</script>';
    } else {
    $peJPantsSQuantity = $_POST['quantityPeJPantsS'];
    $editPEJSQ = "UPDATE quantitytbl SET productQuantity = $peJPantsSQuantity WHERE id = '29'";
    mysqli_query($conn, $editPEJSQ);
         

    $totalPrice = '0';
    $cartpeJPants = "SELECT productPrice FROM admintbl WHERE id='29'";
    $cartpeJPantsq = mysqli_query($conn, $cartpeJPants);
    $cartrowStockSP = mysqli_fetch_assoc($cartpeJPantsq);
    $cartpeJPantsPrice = $cartrowStockSP["productPrice"];

    $cartpeJPantsQ = "SELECT productQuantity FROM quantitytbl WHERE id='29'";
    $cartpeJPantsq = mysqli_query($conn, $cartpeJPantsQ);
    $cartrowStockQ = mysqli_fetch_assoc($cartpeJPantsq);

    $cartpeJPantsQuantity = $cartrowStockQ["productQuantity"];
    $totalPrice = $totalPrice + ($cartpeJPantsPrice * $cartpeJPantsQuantity);
    $peJPantsQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('PE JPants', 'Small', $cartpeJPantsPrice , $cartpeJPantsQuantity, $totalPrice)";
    mysqli_query($conn, $peJPantsQ);
    $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'PE JPants' && productSize = 'Small'";
    mysqli_query($conn, $updateinsert);
    }
    
    
}
    
}
if(isset($_POST['cartpeJPantsM'])) {
    if(!empty($_POST['quantityPeJPantsM'])) {
        
        $cartpeJPantsinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE JPants' && productSize = 'Medium' ";
        $cartpeJPantsQueryinserted = mysqli_query($conn, $cartpeJPantsinserted);
        $cartrowStockSinserted = mysqli_fetch_assoc($cartpeJPantsQueryinserted);

        $peJPantsinserted = $cartrowStockSinserted['inserted'];
        if($peJPantsinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $peJPantsMQuantity = $_POST['quantityPeJPantsM'];
        $editPEJMQ = "UPDATE quantitytbl SET productQuantity = $peJPantsMQuantity WHERE id = '30'";
        mysqli_query($conn, $editPEJMQ);
    
            

        $totalPrice = '0';
        $cartpeJPants = "SELECT productPrice FROM admintbl WHERE id='30'";
        $cartpeJPantsq = mysqli_query($conn, $cartpeJPants);
        $cartrowStockSP = mysqli_fetch_assoc($cartpeJPantsq);
        $cartpeJPantsPrice = $cartrowStockSP["productPrice"];

        $cartpeJPantsQ = "SELECT productQuantity FROM quantitytbl WHERE id='30'";
        $cartpeJPantsq = mysqli_query($conn, $cartpeJPantsQ);
        $cartrowStockQ = mysqli_fetch_assoc($cartpeJPantsq);

        $cartpeJPantsQuantity = $cartrowStockQ["productQuantity"];
        $totalPrice = $totalPrice + ($cartpeJPantsPrice * $cartpeJPantsQuantity);
        $peJPantsQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('PE JPants', 'Medium', $cartpeJPantsPrice , $cartpeJPantsQuantity, $totalPrice)";
        mysqli_query($conn, $peJPantsQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'PE JPants' && productSize = 'Medium'";
        mysqli_query($conn, $updateinsert);
        }
    }
    
}
if(isset($_POST['cartpeJPantsL'])) {
    if(!empty($_POST['quantityPeJPantsL'])) {
        
        $cartpeJPantsinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE JPants' && productSize = 'Large' ";
        $cartpeJPantsQueryinserted = mysqli_query($conn, $cartpeJPantsinserted);
        $cartrowStockSinserted = mysqli_fetch_assoc($cartpeJPantsQueryinserted);

        $peJPantsinserted = $cartrowStockSinserted['inserted'];
        if($peJPantsinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $peJPantsLQuantity = $_POST['quantityPeJPantsL'];
        $editPEJLQ = "UPDATE quantitytbl SET productQuantity = $peJPantsLQuantity WHERE id = '31'";
        mysqli_query($conn, $editPEJLQ);

        $totalPrice = '0';
        $cartpeJPants = "SELECT productPrice FROM admintbl WHERE id='31'";
        $cartpeJPantsq = mysqli_query($conn, $cartpeJPants);
        $cartrowStockSP = mysqli_fetch_assoc($cartpeJPantsq);
        $cartpeJPantsPrice = $cartrowStockSP["productPrice"];

        $cartpeJPantsQ = "SELECT productQuantity FROM quantitytbl WHERE id='31'";
        $cartpeJPantsq = mysqli_query($conn, $cartpeJPantsQ);
        $cartrowStockQ = mysqli_fetch_assoc($cartpeJPantsq);

        $cartpeJPantsQuantity = $cartrowStockQ["productQuantity"];
        $totalPrice = $totalPrice + ($cartpeJPantsPrice * $cartpeJPantsQuantity);
        $peJPantsQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('PE JPants', 'Large', $cartpeJPantsPrice , $cartpeJPantsQuantity, $totalPrice)";
        mysqli_query($conn, $peJPantsQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'PE JPants' && productSize = 'Large'";
        mysqli_query($conn, $updateinsert);
        }

    }
    
}
if(isset($_POST['cartpeJPantsXL'])) {
    if(!empty($_POST['quantityPeJPantsXL'])) {

        $cartpeJPantsinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE JPants' && productSize = 'XL' ";
        $cartpeJPantsQueryinserted = mysqli_query($conn, $cartpeJPantsinserted);
        $cartrowStockSinserted = mysqli_fetch_assoc($cartpeJPantsQueryinserted);

        $peJPantsinserted = $cartrowStockSinserted['inserted'];
        if($peJPantsinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $peJPantsXLQuantity = $_POST['quantityPeJPantsXL'];
        $editPEJXLQ = "UPDATE quantitytbl SET productQuantity = $peJPantsXLQuantity WHERE id = '32'";
        mysqli_query($conn, $editPEJXLQ);

        $totalPrice = '0';
        $cartpeJPants = "SELECT productPrice FROM admintbl WHERE id='32'";
        $cartpeJPantsq = mysqli_query($conn, $cartpeJPants);
        $cartrowStockSP = mysqli_fetch_assoc($cartpeJPantsq);
        $cartpeJPantsPrice = $cartrowStockSP["productPrice"];

        $cartpeJPantsQ = "SELECT productQuantity FROM quantitytbl WHERE id='32'";
        $cartpeJPantsq = mysqli_query($conn, $cartpeJPantsQ);
        $cartrowStockQ = mysqli_fetch_assoc($cartpeJPantsq);

        $cartpeJPantsQuantity = $cartrowStockQ["productQuantity"];
        $totalPrice = $totalPrice + ($cartpeJPantsPrice * $cartpeJPantsQuantity);
        $peJPantsQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('PE JPants', 'XL', $cartpeJPantsPrice , $cartpeJPantsQuantity, $totalPrice)";
        mysqli_query($conn, $peJPantsQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'PE JPants' && productSize = 'XL'";
        mysqli_query($conn, $updateinsert);
        }


    }
    
}
if(isset($_POST['cartpeJPants2XL'])) {
    if(!empty($_POST['quantityPeJPants2XL'])) {
       
        $cartpeJPantsinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE JPants' && productSize = '2XL' ";
        $cartpeJPantsQueryinserted = mysqli_query($conn, $cartpeJPantsinserted);
        $cartrowStockSinserted = mysqli_fetch_assoc($cartpeJPantsQueryinserted);

        $peJPantsinserted = $cartrowStockSinserted['inserted'];
        if($peJPantsinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $peJPants2XLQuantity = $_POST['quantityPeJPants2XL'];
        $editPEJ2XLQ = "UPDATE quantitytbl SET productQuantity = $peJPants2XLQuantity WHERE id = '33'";
        mysqli_query($conn, $editPEJ2XLQ);
    

        $totalPrice = '0';
        $cartpeJPants = "SELECT productPrice FROM admintbl WHERE id='33'";
        $cartpeJPantsq = mysqli_query($conn, $cartpeJPants);
        $cartrowStockSP = mysqli_fetch_assoc($cartpeJPantsq);
        $cartpeJPantsPrice = $cartrowStockSP["productPrice"];

        $cartpeJPantsQ = "SELECT productQuantity FROM quantitytbl WHERE id='33'";
        $cartpeJPantsq = mysqli_query($conn, $cartpeJPantsQ);
        $cartrowStockQ = mysqli_fetch_assoc($cartpeJPantsq);

        $cartpeJPantsQuantity = $cartrowStockQ["productQuantity"];
        $totalPrice = $totalPrice + ($cartpeJPantsPrice * $cartpeJPantsQuantity);
        $peJPantsQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('PE JPants', '2XL', $cartpeJPantsPrice , $cartpeJPantsQuantity, $totalPrice)";
        mysqli_query($conn, $peJPantsQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'PE JPants' && productSize = '2XL'";
        mysqli_query($conn, $updateinsert);
        }
    }
    
}
if(isset($_POST['cartpeJPants3XL'])) {
    if(!empty($_POST['quantityPeJPants3XL'])) {
        

        $cartpeJPantsinserted = "SELECT * FROM quantitytbl WHERE productName = 'PE JPants' && productSize = '3XL' ";
        $cartpeJPantsQueryinserted = mysqli_query($conn, $cartpeJPantsinserted);
        $cartrowStockSinserted = mysqli_fetch_assoc($cartpeJPantsQueryinserted);

        $peJPantsinserted = $cartrowStockSinserted['inserted'];
        if($peJPantsinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $peJPants3XLQuantity = $_POST['quantityPeJPants3XL'];
        $editPEJ3XLQ = "UPDATE quantitytbl SET productQuantity = $peJPants3XLQuantity WHERE id = '34'";
        mysqli_query($conn, $editPEJ3XLQ);
    

        $totalPrice = '0';
        $cartpeJPants = "SELECT productPrice FROM admintbl WHERE id='34'";
        $cartpeJPantsq = mysqli_query($conn, $cartpeJPants);
        $cartrowStockSP = mysqli_fetch_assoc($cartpeJPantsq);
        $cartpeJPantsPrice = $cartrowStockSP["productPrice"];

        $cartpeJPantsQ = "SELECT productQuantity FROM quantitytbl WHERE id='34'";
        $cartpeJPantsq = mysqli_query($conn, $cartpeJPantsQ);
        $cartrowStockQ = mysqli_fetch_assoc($cartpeJPantsq);

        $cartpeJPantsQuantity = $cartrowStockQ["productQuantity"];
        $totalPrice = $totalPrice + ($cartpeJPantsPrice * $cartpeJPantsQuantity);
        $peJPantsQ = "INSERT INTO carttbl (productName, productSize, productPrice, productQuantity, productTotalPrice) VALUES ('PE JPants', '3XL', $cartpeJPantsPrice , $cartpeJPantsQuantity, $totalPrice)";
        mysqli_query($conn, $peJPantsQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'PE JPants' && productSize = '3XL'";
        mysqli_query($conn, $updateinsert);
        }

    }
    
}
//LANYARDS
if(isset($_POST['cartlanyardUNIV'])) {
    if(!empty($_POST['quantitylanyardUNIV'])) {
        $cartlanyardinserted = "SELECT * FROM quantitytbl WHERE productName = 'lanyard UNIV'";
        $cartlanyardQueryinserted = mysqli_query($conn, $cartlanyardinserted);
        $cartrowStockSinserted = mysqli_fetch_assoc($cartlanyardQueryinserted);

        $lanyardinserted = $cartrowStockSinserted['inserted'];
        if($lanyardinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $lanyardUNIVQuantity = $_POST['quantitylanyardUNIV'];
        $editLUNIVQ = "UPDATE quantitytbl SET productQuantity = $lanyardUNIVQuantity WHERE id = '35'";
        mysqli_query($conn, $editLUNIVQ);


        $totalPrice = '0';
        $cartlanyard = "SELECT productPrice FROM admintbl WHERE id='35'";
        $cartlanyardq = mysqli_query($conn, $cartlanyard);
        $cartrowStockSP = mysqli_fetch_assoc($cartlanyardq);
        $cartlanyardPrice = $cartrowStockSP["productPrice"];

        $cartlanyardQ = "SELECT productQuantity FROM quantitytbl WHERE id='35'";
        $cartlanyardq = mysqli_query($conn, $cartlanyardQ);
        $cartrowStockQ = mysqli_fetch_assoc($cartlanyardq);

        $cartlanyardQuantity = $cartrowStockQ["productQuantity"];
        $totalPrice = $totalPrice + ($cartlanyardPrice * $cartlanyardQuantity);
        $lanyardQ = "INSERT INTO carttbl (productName, productPrice, productQuantity, productTotalPrice) VALUES ('Lanyard UNIV', $cartlanyardPrice , $cartlanyardQuantity, $totalPrice)";
        mysqli_query($conn, $lanyardQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Lanyard UNIV'";
        mysqli_query($conn, $updateinsert);
        }
    }
    
}
if(isset($_POST['cartlanyardEDUC'])) {
    if(!empty($_POST['quantitylanyardEDUC'])) {
        

        $cartlanyardinserted = "SELECT * FROM quantitytbl WHERE productName = 'lanyard EDUC'";
        $cartlanyardQueryinserted = mysqli_query($conn, $cartlanyardinserted);
        $cartrowStockSinserted = mysqli_fetch_assoc($cartlanyardQueryinserted);

        $lanyardinserted = $cartrowStockSinserted['inserted'];
        if($lanyardinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $lanyardEDUCQuantity = $_POST['quantitylanyardEDUC'];
        $editLEDUCQ = "UPDATE quantitytbl SET productQuantity = $lanyardEDUCQuantity WHERE id = '36'";
        mysqli_query($conn, $editLEDUCQ);


        $totalPrice = '0';
        $cartlanyard = "SELECT productPrice FROM admintbl WHERE id='36'";
        $cartlanyardq = mysqli_query($conn, $cartlanyard);
        $cartrowStockSP = mysqli_fetch_assoc($cartlanyardq);
        $cartlanyardPrice = $cartrowStockSP["productPrice"];

        $cartlanyardQ = "SELECT productQuantity FROM quantitytbl WHERE id='36'";
        $cartlanyardq = mysqli_query($conn, $cartlanyardQ);
        $cartrowStockQ = mysqli_fetch_assoc($cartlanyardq);

        $cartlanyardQuantity = $cartrowStockQ["productQuantity"];
        $totalPrice = $totalPrice + ($cartlanyardPrice * $cartlanyardQuantity);
        $lanyardQ = "INSERT INTO carttbl (productName, productPrice, productQuantity, productTotalPrice) VALUES ('Lanyard EDUC', $cartlanyardPrice , $cartlanyardQuantity, $totalPrice)";
        mysqli_query($conn, $lanyardQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Lanyard EDUC'";
        mysqli_query($conn, $updateinsert);
        }
    }
    
}
if(isset($_POST['cartlanyardPSYCH'])) {
    if(!empty($_POST['quantitylanyardPSYCH'])) {
        
        
        $cartlanyardinserted = "SELECT * FROM quantitytbl WHERE productName = 'lanyard PSYCH'";
        $cartlanyardQueryinserted = mysqli_query($conn, $cartlanyardinserted);
        $cartrowStockSinserted = mysqli_fetch_assoc($cartlanyardQueryinserted);

        $lanyardinserted = $cartrowStockSinserted['inserted'];
        if($lanyardinserted == 'true') {
            echo '<script>alert("Item have already been placed.")</script>';
        } else {
        $lanyardPSYCHQuantity = $_POST['quantitylanyardPSYCH'];
        $editLPSYCHQ = "UPDATE quantitytbl SET productQuantity = $lanyardPSYCHQuantity WHERE id = '37'";
        mysqli_query($conn, $editLPSYCHQ);


        $totalPrice = '0';
        $cartlanyard = "SELECT productPrice FROM admintbl WHERE id='37'";
        $cartlanyardq = mysqli_query($conn, $cartlanyard);
        $cartrowStockSP = mysqli_fetch_assoc($cartlanyardq);
        $cartlanyardPrice = $cartrowStockSP["productPrice"];

        $cartlanyardQ = "SELECT productQuantity FROM quantitytbl WHERE id='37'";
        $cartlanyardq = mysqli_query($conn, $cartlanyardQ);
        $cartrowStockQ = mysqli_fetch_assoc($cartlanyardq);

        $cartlanyardQuantity = $cartrowStockQ["productQuantity"];
        $totalPrice = $totalPrice + ($cartlanyardPrice * $cartlanyardQuantity);
        $lanyardQ = "INSERT INTO carttbl (productName, productPrice, productQuantity, productTotalPrice) VALUES ('Lanyard PSYCH', $cartlanyardPrice , $cartlanyardQuantity, $totalPrice)";
        mysqli_query($conn, $lanyardQ);
        $updateinsert = "UPDATE quantitytbl SET inserted = 'true' WHERE productName = 'Lanyard PSYCH'";
        mysqli_query($conn, $updateinsert);
        }
    }
    
}

?>