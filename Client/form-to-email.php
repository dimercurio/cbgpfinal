<?php
echo '<script>console.log("Your stuff here")</script>';
    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "danny@dannydimercurio.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have received an e-mail from ".$name.".\n\n".$message;

        mail($mailTo, "test", $txt, $headers);
        header("Location: index.php?mailsend");
    }
?>
