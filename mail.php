<?php

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];

        $mailTo = "myeasywebshop@gmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have received an e-mail from MyEasyWebshop user ".$name.". \n\n".$message;

        if(mail($mailTo, $subject, $txt, $headers)){
            echo "MailSend";
        }
        else{
            echo "Failed";
        }

    }

?>