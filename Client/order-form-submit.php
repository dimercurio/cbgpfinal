<?php

/********Declare variables*********/

$mailTo = "danny@dannydimercurio.com";

/* Personal Info Section */
$name = $_POST['name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$tagNumber = $_POST['tagNumber'];
$species = $_POST['species'];
$dateHarvested = $_POST['dateHarvested'];

/*Front Quarters*/
$armRoast = $_POST['armRoast'];
$flatIronSteak = $_POST['flatIronSteak'];
$shortRibs = $_POST['shortRibs'];

/*Rear Quarters*/
$sirloinRoasts = $_POST['sirloinRoasts'] ?: 'N/A';
$sirloinSteaks = $_POST['sirloinSteaks'] ?: 'N/A';
$sirloinQuantity = $_POST['sirloinQuantity'] ?: 'N/A';
$sirloinThickness = $_POST['sirloinThickness'] ?: 'N/A';

$jerkyRoasts = $_POST['jerkyRoasts'] ?: 'N/A';
$jerkySlicedOrWhole = $_POST['jerkySlicedOrWhole'];

$loinMeatThickness = $_POST['loinMeatThickness'] ?: 'N/A';
$loinMeatQuantity = $_POST['loinMeatQuantity'] ?: 'N/A';

/*Grind/Stew Meat */
$grindSizeOfPackage = $_POST['grindSizeOfPackage'] ?: 'N/A';
$fatType = $_POST['fatType'] ?: 'N/A';

/*Offal (Bones & Organ Meat) */
$liver = $_POST['liver'] ?: 'N/A';
$liverSize = $_POST['liverSize'] ?: 'N|A';
$liverSlicedOrWhole = $_POST['liverSlicedOrWhole'] ?: 'N/A';
$offalHeart = $_POST['heart'] ?: 'N/A';
$offalBones = $_POST['bones'] ?: 'N/A';

/*Sausage Options*/
$casingsOrBulk = $_POST['sausageCasingsOrBulk'] ?: 'N/A';
$sausageBreakfast = $_POST['breakfast'] ?: 'N/A';
$sausageChorizo = $_POST['chorizo'] ?: 'N/A';
$sausageHotItalian = $_POST['hotItalian'] ?: 'N/A';
$sausageSweetItalian = $_POST['sweetItalian'] ?: 'N/A';
$sausageBratwurst = $_POST['bratwurst'] ?: 'N/A';
$bellPepperAndOnion = $_POST['bellPepperAndOnion'] ?: 'N/A';
$sausageJalapenoCheddar = $_POST['jalapenoCheddar'] ?: 'N/A';
/*Sausage Weights*/
$breakfastSausageWeight = $_POST['breakfastWeight'] ?: 'N/A';
$chorizoSausageWeight = $_POST['chorizoWeight'] ?: 'N/A';
$hotItalianSausageWeight = $_POST['hotItalianWeight'] ?: 'N/A';
$sweetItalianSausageWeight = $_POST['sweetItalianWeight'] ?: 'N/A';
$bratwurstSausageWeight = $_POST['bratwurstWeight'] ?: 'N/A';
$bellPepperSausageWeight = $_POST['bellPepperAndOnionWeight'] ?: 'N/A';
$jalapenoCheddarSausageWeight = $_POST['jalapenoCheddarWeight'] ?: 'N/A';


/*Summer Sausage */
$summerPepper = $_POST['summerPepper'] ?: 'N/A';
$summerJalapeno = $_POST['summerJalapeno'] ?: 'N/A';
$summerCheddarCheese = $_POST['summarCheddar'] ?: 'N/A';
$summerGreenOnion = $_POST['summerGreenOnion'] ?: 'N/A';
/*Summer Sausage Weight*/
$summerPepperWeight = $_POST['summerPepperWeight'] ?: 'N/A';
$summerJalapenoCheddarWeight = $_POST['summerJalapenoWeight'] ?: 'N/A';
$summerCheddarCheeseWeight = $_POST['summarCheddarWeight'] ?: 'N/A';
$summerGreenOnionWeight = $_POST['summerGreenOnionWeight'] ?: 'N/A';

$isSummerSmoked = $_POST['isSummerSmoked'] ?: 'N/A';
$summerCasingsSize = $_POST['summerCasingsSize'] ?: 'N/A';

/* Snack Sticks */
$snackOriginal = $_POST['snackOriginal'] ?: 'N/A';
$snackSpicy = $_POST['snackSpicy'] ?: 'N/A';
$snackCheddar = $_POST['snackCheddar'] ?: 'N/A';

/*Jerky */
$jerkySlicedOrWhole = $_POST['jerkySlicedOrWhole'] ?: 'N/A';
$jerkyPeppered = $_POST['jerkyPeppered'] ?: 'N/A';
$jerkyCajun = $_POST['jerkyCajun'] ?: 'N/A';
$jerkyDrPepper = $_POST['jerkyDrPepper'] ?: 'N/A';
$jerkyTeriyaki = $_POST['jerkyTeriyaki'] ?: 'N/A';

/* Jerky Weights */
$jerkyPepperedAmount = $_POST['jerkyPepperedAmount'] ?: 'N/A';
$jerkyCajunAmount = $_POST['jerkyCajunAmount'] ?: 'N/A';
$jerkyDrPepperAmount = $_POST['jerkyDrPepperAmount'] ?: 'N/A';
$jerkyTeriyakiAmount = $_POST['jerkyTeriyakiAmount'] ?: 'N/A';



$headers = "";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$subject = "New Order: " . $name;

/* Message that will be generated */
$message = '<html><body>';
/*$message .= '<img src="//css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';*/
$message .= '<table rules="all" style="border-color: #555;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
$message .= "<tr><td><strong>Phone:</strong> </td><td>" . $phoneNumber . "</td></tr>";
$message .= "<tr><td><strong>Tag Number:</strong> </td><td>" . $tagNumber . "</td></tr>";
$message .= "<tr><td><strong>Species:</strong> </td><td>" . $species . "</td></tr>";
$message .= "<tr><td><strong>Date Harvested:</strong> </td><td>" . $dateHarvested . "</td></tr>";
$message .= "<tr><td><strong>Arm Roast:</strong> </td><td>" . yesOrNo($armRoast) . "</td></tr>";
$message .= "<tr><td><strong>Flat Iron Steak:</strong> </td><td>" . yesOrNo($flatIronSteak) . "</td></tr>";
$message .= "<tr><td><strong>Short Ribs:</strong> </td><td>" . yesOrNo($shortRibs) . "</td></tr>";
$message .= "<tr><td><strong>Sirloin Roasts:</strong> </td><td>" . yesOrNo($sirloinRoasts) . "</td></tr>";
$message .= "<tr><td><strong>Sirloin Steaks:</strong> </td><td>" . yesOrNo($sirloinSteaks) . "</td></tr>";
$message .= "<tr><td><strong>Sirloin Quantity:</strong> </td><td>" . $sirloinQuantity . "</td></tr>";
$message .= "<tr><td><strong>Sirloin Thickness:</strong> </td><td>" . $sirloinThickness . "</td></tr>";
$message .= "<tr><td><strong>Jerky Roasts:</strong> </td><td>" . yesOrNo($jerkyRoasts) . "</td></tr>";
$message .= "<tr><td><strong>Jerky: Sliced Or Whole</strong> </td><td>" . $jerkySlicedOrWhole . "</td></tr>";
$message .= "<tr><td><strong>Loin Meat Thickness: </strong> </td><td>" . $loinMeatThickness . "</td></tr>";
$message .= "<tr><td><strong>Loin Meat Quantity</strong> </td><td>" . $loinMeatQuantity . "</td></tr>";
$message .= "<tr><td><strong>Grind Size Of Package</strong> </td><td>" . $grindSizeOfPackage . "</td></tr>";
$message .= "<tr><td><strong>Fat Type: </strong> </td><td>" . $fatType . "</td></tr>";
$message .= "<tr><td><strong>Liver</strong> </td><td>" . yesOrNo($liver) . "</td></tr>";
$message .= "<tr><td><strong>Liver Size Of Package</strong> </td><td>" . $liverSize . "</td></tr>";
$message .= "<tr><td><strong>Liver: Sliced or Whole</strong> </td><td>" . $liverSlicedOrWhole . "</td></tr>";
$message .= "<tr><td><strong>Heart: </strong> </td><td>" . yesOrNo($offalHeart) . "</td></tr>";
$message .= "<tr><td><strong>Bones: </strong> </td><td>" . yesOrNo($offalBones) . "</td></tr>";
$message .= "<tr><td><strong>Sausage: Casings Or Bulk: </strong> </td><td>" . $casingsOrBulk . "</td></tr>";
$message .= "<tr><td><strong>Breakfast Sausage: </strong> </td><td>" . yesOrNo($sausageBreakfast) . "</td></tr>";
$message .= "<tr><td><strong>Breakfast Sausage Weight: : </strong> </td><td>" . $breakfastSausageWeight . "</td></tr>";
$message .= "<tr><td><strong>Chorizo: </strong> </td><td>" . yesOrNo($sausageChorizo) . "</td></tr>";
$message .= "<tr><td><strong>Chorizo Weight: </strong> </td><td>" . $chorizoSausageWeight . "</td></tr>";
$message .= "<tr><td><strong>Hot Italian Sausage: </strong> </td><td>" . yesOrNo($sausageHotItalian) . "</td></tr>";
$message .= "<tr><td><strong>Hot Italian Sausage Weight: </strong> </td><td>" . $hotItalianSausageWeight . "</td></tr>";
$message .= "<tr><td><strong>Sweet Italian Sausage: </strong> </td><td>" . yesOrNo($sausageSweetItalian) . "</td></tr>";
$message .= "<tr><td><strong>Sweet Italian Sausage Weight: </strong> </td><td>" . $sweetItalianSausageWeight . "</td></tr>";
$message .= "<tr><td><strong>Bratwurst Sausage: </strong> </td><td>" . yesOrNo($sausageBratwurst) . "</td></tr>";
$message .= "<tr><td><strong>Bratwurst Sausage Weight: </strong> </td><td>" . $bratwurstSausageWeight . "</td></tr>";
$message .= "<tr><td><strong>Bell Pepper and Onion Sausage: </strong> </td><td>" . yesOrNo($bellPepperAndOnion) . "</td></tr>";
$message .= "<tr><td><strong>Bell Pepper and Onion Sausage Weight: </strong> </td><td>" . $bellPepperSausageWeight . "</td></tr>";
$message .= "<tr><td><strong>Jalapeno Cheddar Sausage: </strong> </td><td>" . yesOrNo($sausageJalapenoCheddar) . "</td></tr>";
$message .= "<tr><td><strong>Jalapeno Cheddar Sausage Weight: </strong> </td><td>" . $jalapenoCheddarSausageWeight . "</td></tr>";
$message .= "<tr><td><strong>Pepper Summer Sausage: </strong> </td><td>" . yesOrNo($summerPepper) . "</td></tr>";
$message .= "<tr><td><strong>Pepper Summer Sausage Weight: </strong> </td><td>" . $summerPepperWeight . "</td></tr>";
$message .= "<tr><td><strong>Jalapeno Summer Sausage: </strong> </td><td>" . yesOrNo($summerJalapeno) . "</td></tr>";
$message .= "<tr><td><strong>Jalapeno Summer Sausage Weight: </strong> </td><td>" . $summerJalapenoCheddarWeight . "</td></tr>";
$message .= "<tr><td><strong>Summer Cheddar Cheese: </strong> </td><td>" . yesOrNo($summerCheddarCheese) . "</td></tr>";
$message .= "<tr><td><strong>Summer Cheddar Cheese Weight: </strong> </td><td>" . $summerCheddarCheeseWeight . "</td></tr>";
$message .= "<tr><td><strong>Summer Green Onion: </strong> </td><td>" . yesOrNo($summerGreenOnion) . "</td></tr>";
$message .= "<tr><td><strong>Summer Green Onion Weight: </strong> </td><td>" . $summerGreenOnionWeight . "</td></tr>";
$message .= "<tr><td><strong>Summer Smoked: </strong> </td><td>" . yesOrNo($isSummerSmoked) . "</td></tr>";
$message .= "<tr><td><strong>Summer Casings Size: </strong> </td><td>" . $summerCasingsSize . "</td></tr>";
$message .= "<tr><td><strong>Snack Original: </strong> </td><td>" . yesOrNo($snackOriginal) . "</td></tr>";
$message .= "<tr><td><strong>Snack Spicy: </strong> </td><td>" . yesOrNo($snackSpicy) . "</td></tr>";
$message .= "<tr><td><strong>Snack Cheddar: </strong> </td><td>" . yesOrNo($snackCheddar) . "</td></tr>";

$message .= "<tr><td><strong>Jerky Sliced Or Whole: </strong> </td><td>" . $jerkySlicedOrWhole . "</td></tr>";
$message .= "<tr><td><strong>Jerky Peppered: </strong> </td><td>" . yesOrNo($jerkyPeppered) . "</td></tr>";
$message .= "<tr><td><strong>Jerky Peppered Amount: </strong> </td><td>" . $jerkyPepperedAmount . "</td></tr>";
$message .= "<tr><td><strong>Jerky Cajun: </strong> </td><td>" . yesOrNo($jerkyCajun) . "</td></tr>";
$message .= "<tr><td><strong>Jerky Cajun Amount: </strong> </td><td>" . $jerkyCajunAmount . "</td></tr>";
$message .= "<tr><td><strong>Jerky Dr Pepper: </strong> </td><td>" . yesOrNo($jerkyDrPepper) . "</td></tr>";
$message .= "<tr><td><strong>Jerky Dr Pepper Amount: </strong> </td><td>" . $jerkyDrPepperAmount . "</td></tr>";
$message .= "<tr><td><strong>Jerky Teriyaki: </strong> </td><td>" . yesOrNo($jerkyTeriyaki) . "</td></tr>";
$message .= "<tr><td><strong>Jerky Teriyaki Amount: </strong> </td><td>" . $jerkyTeriyakiAmount . "</td></tr>";

/* $message .= "<tr><td><strong>URL To Change (main):</strong> </td><td>" . $_POST['URL-main'] . "</td></tr>"; */

$success = false;
if (!empty($message)) {
  $success = mail($mailTo, $subject, $message, $headers);
  if ($success) {
      echo "Your order has successfully been placed! We will contact you soon, or feel free to give us a call!";
  }
  else{
      echo "Sorry, we had some trouble submitting your order. Please give us a call and we'll get you squared away.";
  }
}
else{
  echo "Sorry, we were unable to submit your order. Please contact us by phone or email.";
}

/*echo '<script language="javascript">alert("'.$name.'"); </script>';*/


/* Functions */

function yesOrNo($value)
{
    if ($value === "true") {
        return "Yes";
    }
    if($value === "false"){
        return "No";
    }
}

?>
