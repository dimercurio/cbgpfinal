<?php

$name = $_POST['name'];
$mailFrom = $_POST['mailFrom'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$mailTo = "cbgprocessing@gmail.com";
$headers = "From: " . $mailFrom;



        /*$txt .= "You have received an e-mail from ".$name.".\n\n".$message;*/
$newSubject = "Inquiry from " . $name;
$success = mail($mailTo, $newSubject, $message, $headers);

if ($success) {
    echo "Thank you! We'll get back to you as soon as possible!";
}
else{
    echo "Whoops! We had a problem sending your message. Please give us a call!";
}


        /*if ($mailFrom == "ddimercurio126@gmail.com") {
            json_encode(array('thing' => "You succeeded!"));
        }


        /*if ($success) {
            echo json_encode(array('thing' => "You succeeded!"));

        }
        else{
            echo json_encode(array("thing2" => "You didn't succeed, you suck!"));
        }

         /* header("Location: index.php?mailsend"); */
