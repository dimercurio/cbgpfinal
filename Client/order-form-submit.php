<?php

/********Declare variables*********/

/* Personal Info Section */
$name = $_POST['name'];
$mailFrom = $_POST['mailFrom'];
$phone = $_POST['phone'];
$tagNumber = $_POST['tagNumber'];
$species = $_POST['species'];
$dateHarvested = $_POST['dateHarvested'];

/*Front Quarters*/
$armRoast = $_POST['armRoast'];
$flatIronSteak = $_POST['flatIronSteak'];
$shortRibs = $_POST['shortRibs'];

/*Rear Quarters*/
$sirloinRoasts = $_POST['sirloinRoasts'];
$sirloinSteaks = $_POST['sirloinSteaks'];
$sirloinQuantity = $_POST['sirloinQuantity'];
$sirloinThickness = $_POST['sirloinThickness'];

$jerkyRoasts = $_POST['jerkyRoasts'];
$jerkySlicedOrWhole = $_POST['jerkySlicedOrWhole'];

$loinMeatThickness = $_POST['loinMeatThickness'];
$loinMeatQuantity = $_POST['loinMeatQuantity'];

/*Grind/Stew Meat */
$grindSizeOfPackage = $_POST['grindSizeOfPackage'];
$fatType = $_POST['fatType'];

/*Offal (Bones & Organ Meat) */
$offalSizeOfPackage = $_POST['grindSizeOfPackage'];
$offalSlicedOrWhole = $_POST['offalSlicedOrWhole'];
$offalHeart = $_POST['offalHeart'];
$offalBones = $_POST['offalBones'];

/*Sausage Options*/
$casingsOrBulk = $_POST['casingsOrBulk'];
$sausageChorizo = $_POST['sausageChorizo'];
$sausageHotItalian = $_POST['sausageHotItalian'];
$sausageSweetItalian = $_POST['sausageSweetItalian'];
$sausageBratwurst = $_POST['sausageBratwurst'];
$sausageBellPepper = $_POST['sausageBellPepper'];
$sausageJalapenoCheddar = $_POST['sausageJalapenoCheddar'];
/*Sausage Weights*/
$breakfastSausageWeight = $_POST['breakfastSausageWeight'];
$chorizoSausageWeight = $_POST['chorizoSausageWeight'];
$hotItalianSausageWeight = $_POST['hotItalianSausageWeight'];
$sweetItalianSausageWeight = $_POST['sweetItalianSausageWeight'];
$bellPepperSausageWeight = $_POST['bellPepperSausageWeight'];
$jalapenoCheddarSausageWeight = $_POST['jalapenoCheddarSausageWeight'];


/*Summer Sausage */
$summerPepper = $_POST['summerPepper'];
$summerJalapenoCheddar = $_POST['summerJalapenoCheddar'];
$summerCheddarCheese = $_POST['summerCheddarCheese'];
$summerGreenOnion = $_POST['summerGreenOnion'];
/*Summer Sausage Weight*/
$summerPepperWeight = $_POST['summerPepperWeight'];
$summerJalapenoCheddarWeight = $_POST['summerJalapenoCheddarWeight'];
$summerCheddarCheeseWeight = $_POST['summerCheddarCheeseWeight'];
$summerGreenOnionWeight = $_POST['summerGreenOnionWeight'];

/* Snack Sticks */
$snackOriginal = $_POST['snackOriginal'];
$snackSpicy = $_POST['snackSpicy'];
$snackCheddar = $_POST['snackCheddar'];

/*Jerky */
$jerkySlicedOrWhole = $_POST['jerkySlicedOrWhole'];
$jerkyPeppered = $_POST['jerkyPeppered'];
$jerkyCajun = $_POST['jerkyCajun'];
$jerkyDrPepper = $_POST['jerkyDrPepper'];
$jerkyTeriyaki = $_POST['jerkyTeriyaki'];

/* Jerky Weights */
$jerkyPepperedAmount = $_POST['jerkyPepperedAmount'
$jerkyCajunAmount = $_POST['jerkyCajunAmount'];



$mailTo = "danny@dannydimercurio.com";
$headers = "From: ".$mailFrom;

?>
