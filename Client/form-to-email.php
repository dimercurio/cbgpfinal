<?php

    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "danny@dannydimercurio.com";
        $headers = "From: ".$mailFrom;
        $txt .= "You have received an e-mail from ".$name.".\n\n".$message;

        $success = mail($mailTo, "test", $txt, $headers);


         /* header("Location: index.php?mailsend"); */
    }
?>
<!DOCTYPE html>

    <body>
        <?php
        if (isset($success) && $success) { ?>
            <h1>Thank you</h1>
            <p>Your message has been sent.</p>
        <?php } else { ?>
            <h1>Oops!</h1>
            <p>Sorry, there was a problem sending your message</p>
        <?php } ?>
        
    </body>

</html>
